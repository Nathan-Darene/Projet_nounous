<?php

namespace App\Http\Controllers;

use App\Models\Users;
use App\Models\Nounou;
use App\Models\Annonces; // Assurez-vous d'importer le modèle Annonce
use Session;
use Hash;
use Illuminate\Http\Request;

class NounouController extends Controller
{
    public function rechercher(Request $request)
    {
        // Récupére tout  les critères de recherche depuis la requête
        $criteria = $request->all();

        // Initialiser la requête de recherche des nounous
        $query = Nounou::query();

        // Filtrer par type d'aide
        if (!empty($criteria['type_aide'])) {
            $query->where('role', $criteria['type_aide']);
        }

        // Filtrer par localisation
        if (!empty($criteria['adresse'])) {
            $query->where('city', 'like', '%' . $criteria['adresse'] . '%');
        }

        if (!empty($criteria['search'])) {
            $query->whereRaw('city', 'LIKE ?', ['%' . $criteria['search'] . '%']);
        }

        if (!empty($criteria['search'])) {
            $query->whereRaw('username', 'LIKE ?', ['%' . $criteria['search'] . '%']);
        }

        // Filtrer par expérience professionnelle
        if (!empty($criteria['exp'])) {
            $query->where('experience', '>=', $criteria['exp']);
        }

        // Filtrer par niveau d'étude
        if (!empty($criteria['exp1'])) {
            $query->where('niveau', $criteria['exp1']);
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


