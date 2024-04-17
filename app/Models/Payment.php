<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'nounous_id', // Ajout de la colonne 'nounous_id' au tableau $fillable
        'payment_method',
        'email',
        'card_number',
        'expiry_date',
        'cvv',
    ];

    // Relation avec le modèle utilisateur
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // Relation avec le modèle nounou
    public function nounou()
    {
        return $this->belongsTo(Nounou::class, 'nounous_id');
    }
}
