<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function search(Request $request)
    {
        // Récupére tout  les critères de recherche depuis la requête
        $criteria = $request->all();

        // Initialiser la requête de recherche des nounous
        $query = Nounou::query();

        // Filtrer par localisation
        if (!empty($criteria['search'])) {
            $query( 'like', '%' . $criteria['search'] . '%');
        }


        // Exécuter la requête et récupérer les résultats
        $nounous = $query->get();

        // Initialiser la requête de recherche des annonces
        $annonces = Annonces::query();

        // Filtrer les annonces par disponibilité si nécessaire
        if (!empty($criteria['disponibilite']) && $criteria['disponibilite'] === 'on') {
            $annonces->whereHas('nounous', function ($query) {
                $query->where('statut', 'Disponible');
            });
        }

        if  (!empty($criteria['vehicule']) && $criteria['vehicule'] === 'on') {
            $annonces->whereHas('nounous', function ($query) {
                $query->where('active', '1');
            });

        }
        // Retourner les profils de nounous filtrés
        return response()->json(['nounous' => $nounous, 'annonces' => $annonces->get()]);
    }
}
