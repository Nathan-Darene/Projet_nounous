<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NounouController extends Controller
{
    public function rechercher(Request $request)
    {
        // Récupérer les critères de recherche depuis la requête
        $criteria = $request->all();

        // Initialiser la requête de recherche des nounous
        $query = Nounou::query();

        // Filtrer par tri
        if (!empty($criteria['tri'])) {
            if ($criteria['tri'] === 'connexion') {
                $query->orderBy('last_login', 'desc');
            } elseif ($criteria['tri'] === 'recommande') {
                // Implémentez la logique de tri par recommandation si nécessaire
            } elseif ($criteria['tri'] === 'distance') {
                // Implémentez la logique de tri par distance si nécessaire
            }
        }

        // Filtrer par type d'aide
        if (!empty($criteria['type_aide'])) {
            $query->where('type_aide', $criteria['type_aide']);
        }

        // Filtrer par localisation
        if (!empty($criteria['adresse'])) {
            $query->where('adresse', 'like', '%' . $criteria['adresse'] . '%');
        }

        // Filtrer par distance
        if (!empty($criteria['distance'])) {
            // Implémentez la logique de filtrage par distance si nécessaire
        }

        // Filtrer par expérience professionnelle
        if (!empty($criteria['exp'])) {
            $query->where('experience', '>=', $criteria['exp']);
        }

        // Filtrer par niveau d'étude
        if (!empty($criteria['exp1'])) {
            $query->where('education_level', $criteria['exp1']);
        }

        // Filtrer par disponibilité confirmée
        if (!empty($criteria['disponibilite'])) {
            // Implémentez la logique de filtrage par disponibilité si nécessaire
        }

        // Filtrer par présence de photo de profil
        if (!empty($criteria['photo_profil'])) {
            // Implémentez la logique de filtrage par photo de profil si nécessaire
        }

        // Filtrer par avis et recommandation
        if (!empty($criteria['avis_recommandation'])) {
            // Implémentez la logique de filtrage par avis et recommandation si nécessaire
        }

        // Exécuter la requête et récupérer les résultats
        $nounous = $query->get();

        // Retourner les profils de nounous filtrés
        return response()->json(['nounous' => $nounous]);
    }

}
