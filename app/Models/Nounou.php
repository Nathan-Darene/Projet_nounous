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
        'birthdate',
        /*'imageUpload',*/
        'city',
        'postalcode',
        'role',
        'email',
        'password',
    ];
}
