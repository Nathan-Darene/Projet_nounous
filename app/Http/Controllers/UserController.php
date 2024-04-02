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
        $validatedData = $request->validate([
            'username' => 'required|string|max:255|unique:users',
            'lastname' => 'required|string|max:255',
            'firstname' => 'required|string|max:255',
            'phone' => 'required|string|max:25|unique:users',
            'birthdate' => 'required|date',
            'city' => 'required|string|max:255',
            'postalcode' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed',
        ]);

        // Création d'un nouvel utilisateur
        /*$user = User::create($validatedData);*/
        $user = new user();
        $user->username = $request->input('username');
        $user->lastname = $request->input('lastname');
        $user->firstname = $request->input('firstname');
        $user->phone = $request->input('phone');
        $user->birthdate = $request->input('birthdate');
        $user->city = $request->input('city');
        $user->postalcode = $request->input('postalcode');
        $user->email =$request->input('email');
        $user->password = bcrypt($request->input('password'));


        // Sauvegarder l'utilisateur dans la base de données
        $res = $user->save();

        if ($res) {
            // Rediriger l'utilisateur vers une page de confirmation ou autre
            return redirect()->route('login')->with('success', 'Inscription réussie');
        }
        else {
            // Rediriger l'utilisateur vers une page de confirmation ou autre
            return back()->with('Error', 'Une erreur est survenus lors de votre inscription');
        }
    }
}
