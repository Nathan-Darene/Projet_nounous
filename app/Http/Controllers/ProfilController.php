<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Users;
use App\Models\Nounou;
use App\Services\UserService;
use App\Models\Annonces;
use App\Models\User;

class ProfilController extends Controller
{

    public function showDetails($id) {
        try {
            $nounou = Nounou::findOrFail($id);
            return view('page.nounou_profile', ['nounou' => $nounou]); // Utilisez la clé 'nounou' ici
        } catch (\Exception $e) {
            // Gérer l'erreur si nécessaire
            return redirect()->back()->with('error', 'Nounou not found');
        }
    }



}
