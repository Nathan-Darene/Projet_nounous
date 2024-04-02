<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class UserController extends Controller
{
    // Affiche le formulaire d'inscription
    public function registration()
    {
        return view('registration');
    }


    public function login(){
        return view('login');
    }

    // Traite les données soumises par le formulaire d'inscription
    public function registerUser (Request $request)
    {
        // Validation des données
        $request->validate([
            'username' => 'required|string|max:255|unique:users',
            'lastname' => 'required|string|max:255',
            'firstname' => 'required|string|max:255',
            'phone' => 'required|string|max:25|unique:users',
            'city' => 'required|string|max:255',
            'postalcode' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed',
        ]);

        // Création d'un nouvel utilisateur
        /*$user = User::create($validatedData);*/
        $user = new User();
        $user->username = $request->username;
        $user->lastname = $request->lastname;
        $user->firstname = $request->firstname;
        $user->phone = $request->phone;
        $user->city = $request->city;
        $user->postalcode = $request->postalcode;
        $user->email =$request->email;
        $user->password = bcrypt($request->password);


        // Sauvegarder l'utilisateur dans la base de données
        $res = $user->save();

        if ($res) {
            // Rediriger l'utilisateur vers une page de confirmation ou autre
            return redirect()->route('login')->with('success', 'Inscription réussie');
        }
        else {
            // Rediriger l'utilisateur vers une page de confirmation ou autre
            return back()->with('error', 'Une erreur est survenus lors de votre inscription');
        }
    }
}
