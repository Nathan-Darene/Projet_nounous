<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\calendriers;

class CheckboxlController extends Controller
{
    public function enregistrerDonnees(Request $request)
    {
        // Récupération des données des cases à cocher
        $donneesCalendrier = $request->only([
            'lun-avant-ecole',
            'Mar-avant-ecole',
            'Mer-avant-ecole',
            'Jeu-avant-ecole',
            'Ven-avant-ecole',
            'Sam-avant-ecole',
            'Dim-avant-ecole',
            'lun-matin',
            'Mar-matin',
            'Mer-matin',
            'Jeu-matin',
            'Ven-matin',
            'Sam-matin',
            'Dim-matin',
            'lun-midi',
            'Mar-midi',
            'Mer-midi',
            'Jeu-midi',
            'Ven-midi',
            'Sam-midi',
            'Dim-midi',
            'lun-après-midi',
            'Mar-après-midi',
            'Mer-après-midi',
            'Jeu-après-midi',
            'Ven-après-midi',
            'Sam-après-midi',
            'Dim-après-midi',
            'lun-après-école',
            'Mar-après-école',
            'Mer-après-école',
            'Jeu-après-école',
            'Ven-après-école',
            'Sam-après-école',
            'Dim-après-école',
            'lun-en-soirée',
            'Mar-en-soirée',
            'Mer-en-soirée',
            'Jeu-en-soirée',
            'Ven-en-soirée',
            'Sam-en-soirée',
            'Dim-en-soirée',
            'lun-nuit',
            'Mar-nuit',
            'Mer-nuit',
            'Jeu-nuit',
            'Ven-nuit',
            'Sam-nuit',
            'Dim-nuit',
            'lun-soirée',
        ]);

        // Enregistrement des données dans la base de données
        $calendrier = new calendriers();
        $calendrier->fill($donneesCalendrier);
        $calendrier->save();
    }
}
