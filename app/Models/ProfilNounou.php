<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProfilNounou extends Model
{
    use HasFactory;

    protected $fillable = [
        'nounou_id',
        'name',
        'lastname',
        'age',
        'fonction',
        'Competence',
        'status',
        'Annee_Exp',
        'description',
        'price_hour',
        'date_disponible',
    ];

    public function nounou()
    {
        return $this->belongsTo(Nounou::class, 'nounou_id');
    }
}
