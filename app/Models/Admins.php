<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Admins extends Model
{
    use HasFactory;

    // Nom de la table dans la base de données
    protected $table = 'Adimin';

    // Les champs qui peuvent être remplis massivement
    protected $fillable = [
        'nom',
        'email',
        'mot_de_passe',
    ];
}
