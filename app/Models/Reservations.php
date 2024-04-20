<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservations extends Model
{
    use HasFactory;
    protected $fillable = [
        'child_fullname',
        'child_birthdate',
        'child_gender',
        'child_address',
        'parent_fullname',
        'parent_address',
        'parent_email',
        'child_allergies',
        'child_medical_conditions',
        'doctor_phone',
        'parent_phone',
        'emergency_contact_name',
        'emergency_contact_phone',
        'school_name',
        'child_grade_level',
        'photo_authorization',
        'special_needs',
        'child_dietary_preferences',
        'parental_authorizations',
        'other_instructions',
        'form_fill_date',
        'parent_signature',
        'privacy_acceptance',
    ];

    // Définition de la relation entre la réservation et l'utilisateur (many-to-one)
    public function users()
    {
        return $this->belongsTo(Users::class, 'user_id');
    }

    public function nounous()
    {
        return $this->belongsTo(Nounou::class,'nounou_id' );
    }
}
