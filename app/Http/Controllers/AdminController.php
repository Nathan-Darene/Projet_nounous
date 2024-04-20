<?php

namespace App\Http\Controllers;
// namespace App\Http\Controllers\AllController;

use App\Models\Users;
use App\Models\Nounou;
use App\Services\UserService;
use App\Models\Annonces;
use App\Models\User;
use App\Models\Calendriers;
use App\Models\Admins;
use App\Models\Reservations;
use App\Models\Reservation;
use Illuminate\Http\Response;
use Illuminate\Support\Carbon;


use Session;

use Hash;
use Illuminate\Http\Request;


class AdminController extends Controller
{
    public function Allacces()
    {
        // Récupérer toutes les réservations avec les données utilisateur associées
        $reservations = Reservations::with('users')->get();

        // Récupérer toutes les nounous associées aux réservations
        $nounous = Nounou::whereIn('id', $reservations->pluck('nounou_id'))->get();

        return view('/page/Aministrateur/page_admin', compact('reservations', 'nounous'));
    }

}

