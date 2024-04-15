<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Calendriers extends Model
{
    use HasFactory;

    protected $table = 'calendriers';

    // Liste des attributs pouvant être remplis massivement
    protected $fillable = [
        // Liste des noms des cases à cocher
        'lun-avant-ecole',
        'mar-avant-ecole',
        'mer-avant-ecole',
        'jeu-avant-ecole',
        'ven-avant-ecole',
        'sam-avant-ecole',
        'dim-avant-ecole',
        'lun-matin',
        'mar-matin',
        'mer-matin',
        'jeu-matin',
        'ven-matin',
        'sam-matin',
        'dim-matin',
        'lun-midi',
        'mar-midi',
        'mer-midi',
        'jeu-midi',
        'ven-midi',
        'sam-midi',
        'dim-midi',
        'lun-après-midi',
        'mar-après-midi',
        'mer-après-midi',
        'jeu-après-midi',
        'ven-après-midi',
        'sam-après-midi',
        'dim-après-midi',
        'lun-après-école',
        'mar-après-école',
        'mer-après-école',
        'jeu-après-école',
        'ven-après-école',
        'sam-après-école',
        'dim-après-école',
        'lun-en-soirée',
        'mar-en-soirée',
        'mer-en-soirée',
        'jeu-en-soirée',
        'ven-en-soirée',
        'sam-en-soirée',
        'dim-en-soirée',
        'lun-nuit',
        'mar-nuit',
        'mer-nuit',
        'jeu-nuit',
        'ven-nuit',
        'sam-nuit',
        'dim-nuit',

    ];

    public function nounou()
    {
        return $this->belongsTo(Nounou::class, 'nounou_id');
    }
}
