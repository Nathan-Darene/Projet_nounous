<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class annonces extends Model
{
    use HasFactory;

    protected $fillable = [
        'tittre',
        'Description',
        'statut',
        'prix_heure',
        'date_disponible',
    ];

    public function nounou()
    {
        return $this->belongsTo(Nounou::class, 'nounou_id');
    }

}
