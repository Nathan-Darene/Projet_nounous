<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class annonces extends Model
{
    use HasFactory;

    protected $fillable = [
        'titre',
        'description',
        'statut',
        /*'date_disponible',*/
        'active',
    ];

    public function nounou()
    {
        return $this->belongsTo(Nounou::class, 'nounou_id');
    }

    // Mutateur pour le champ date_disponible
    public function setDateDisponibleAttribute($value)
    {
        // Conversion de la date au format datetime
        $this->attributes['date_disponible'] = \Carbon\Carbon::createFromFormat('d-m-Y H:i:s', $value);
    }
}
