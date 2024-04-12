<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Nounou extends Model
{
    use HasFactory;

    protected $fillable = [

        'username',
        'lastname',
        'firstname',
        'phone',
        'gender',
        'birthdate',
        'Age',
        'imageUpload',
        'imageUploads',
        'niveau',
        'experience',
        'prix_heure',
        'city',
        /*'postalcode',*/
        'role',
        'email',
        'password',
    ];
}

