<?php

namespace App\Http\Controllers;
use App\Models\Users;
use App\Models\Nounou;
use Session;

use Hash;
use Illuminate\Http\Request;

class AllController extends Controller
{
    public function  acceuil(){
        return  view('page.acceuil');
    }

    public function  choix(){
        return  view('page.choix');
    }

    public function  caland(){
        return  view('page.caland');
    }

    public function  reservation(){
        return  view('page.reservation');
    }

    public function  message(){
        return  view('page.message');
    }

    public function  choix2(){
        return  view('page.choix2');
    }



    public function  login(){
        return  view('auth.login');
    }

    public function  login_nounou(){
        return  view('auth.login_nounou');
    }

    public function registration(){
        return view('auth.registration');
    }

    public function inscription(){
        return view('auth.inscription');
    }


    /*Enregistrement de la nounou */
    public function registerNounou(Request $request){

        $request->validate([
            'username' => 'required|string|max:255|unique:nounous',
            'lastname' => 'required|string|max:255',
            'firstname' => 'required|string|max:255',
            'phone' => 'required|string|max:20|unique:nounous',
            'birthdate' => 'required|date|max:255',
            'imageUpload' => 'string|unique:users',
            'city' => 'required|string|max:255|unique:nounous',
            'postalcode' => 'required|string|max:255|unique:nounous',
            'email' => 'required|string|email|max:255|unique:nounous',
            'password' => 'required|string|min:8|',
        ]);

        // Création d'un nouvel utilisateur
        /*$user = User::create($validatedData);*/
        $user = new Nounou ();
        $user->username = $request->username;
        $user->lastname = $request->lastname;
        $user->firstname = $request->firstname;
        $user->phone = $request->phone;
        $user->birthdate = $request->birthdate;
        /*$user->imageUpload = $request->imageUpload;*/
        $user->city = $request->city;
        $user->postalcode = $request->postalcode;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);


        // Sauvegarder l'utilisateur dans la base de données
        $res = $user->save();

        if ($res) {
            // Rediriger l'utilisateur vers une page de confirmation ou autre
            return view('auth.login_nounou')->with('success', 'Inscription réussie');
        }
        else {
            // Rediriger l'utilisateur vers une page de confirmation ou autre
            return back()->with('error', 'Une erreur est survenus lors de votre inscription');
        }

        /*echo"Value Posted";*/

    }


    /*Connexion pour la nounou*/
    public function loginNounou(Request $request){
        $request->validate([
            'email' => 'required|string|email',
            'password' => 'required|string',
        ]);

        $user =  Nounou::where('email', $request->email)->first();
        if ($user){
            if(Hash::check($request->password, $user->password)){
                $request->session()->put('loginId', $user->id);
                return view('page.page_user');
            }
            else{
                return back()->with('fail', 'Mots de oasse incorect');
            }
        }
        else{
            return back()->with('fail', 'Adresse email incorrect');
        }


    }

/*###############################################################################" */

    /*Enregistrement du parent ou de l'utilisateur */
    public function registerUser(Request $request){

        $request->validate([
            'username' => 'required|string|max:255|unique:users',
            'lastname' => 'required|string|max:255',
            'firstname' => 'required|string|max:255',
            'phone' => 'required|string|max:20|unique:users',
            'city' => 'required|string|max:255|unique:users',
            'postalcode' => 'required|string|max:255|unique:users',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8|',
        ]);

        // Création d'un nouvel utilisateur
        /*$user = User::create($validatedData);*/
        $user = new Users ();
        $user->username = $request->username;
        $user->lastname = $request->lastname;
        $user->firstname = $request->firstname;
        $user->phone = $request->phone;
        $user->city = $request->city;
        $user->postalcode = $request->postalcode;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);


        // Sauvegarder l'utilisateur dans la base de données
        $res = $user->save();

        if ($res) {
            // Rediriger l'utilisateur vers une page de confirmation ou autre
            return view('auth.login')->with('success', 'Inscription réussie');
        }
        else {
            // Rediriger l'utilisateur vers une page de confirmation ou autre
            return back()->with('error', 'Une erreur est survenus lors de votre inscription');
        }
    }


    /*Connexion pour l'utilisateur */
    public function loginUser(Request $request){
        $request->validate([
            'email' => 'required|string|email',
            'password' => 'required|string',
        ]);

        $user =  Users::where('email', $request->email)->first();
        if ($user){
            if(Hash::check($request->password, $user->password)){
                $request->session()->put('loginId', $user->id);
                return view('page.page_user');
            }
            else{
                return back()->with('fail', 'Mots de oasse incorect');
            }
        }
        else{
            return back()->with('fail', 'Adresse email incorrect');
        }


    }



    public function welcome(){
        return view('page.page_user');
    }

}
