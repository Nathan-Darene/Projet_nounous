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
            'imageUpload' => 'file|image|mimes:jpeg,png,jpg,gif,webp,jpej,svg|max:4048|unique:nounous',
            'city' => 'required|string|max:255',
            'postalcode' => 'required|string|max:255',
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
        $user->imageUpload = $request->imageUpload;
        $user->city = $request->city;
        $user->postalcode = $request->postalcode;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);

    // Gestion de l'image
    /*if ($request->hasFile('imageUpload')) {
        $image = $request->file('imageUpload');
        $imageName = time() . '.' . $image->getClientOriginalExtension();
        $image->move(public_path('images'), $imageName); // Stockez l'image dans le dossier 'images' public
        $user->imageUpload = $imageName; // Stockez le nom de l'image dans la base de données
    }*/

    // Vérifiez si un fichier a été téléchargé
    if($request->hasfile('imageUpload'))
    {
        $file = $request->file('imageUpload');
        $extenstion = $file->getClientOriginalExtension();
        $filename = time().'.'.$extenstion;
        $file->move('uploads/', $filename);
        $user->imageUpload = $filename;
    }



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

        $user =  Nounou::where('email', '=', $request->email)->first();
        if ($user){
            if(Hash::check($request->password, $user->password)){
                $request->session()->put('loginId', $user->id);
            }
            else{
                return back()->with('fail', 'Mots de passe incorect');
            }
        }
        else{
            return back()->with('fail', 'Adresse email incorrect');
        }

        /*Affiche des donnée de l'utilisateur */
        $data = array();
        if(Session::get('loginId')){
            $data =  Nounou::where('id', '=',Session::get('loginId'))->first();
        }
        return view('page/page_parent', compact('data'));



    }

    /*Affichage des donnée sur la page de l'utilisateur */
    public function AfficheProfileNounou(Request $request){
        $data1 = array();
        if(Session::get('loginId')){
        $data1 =  Nounou::where('id', '=',Session::get('loginId'))->first();
        }
        return view('page/profile', compact('data1'));
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

        $user =  Users::where('email', '=', $request->email)->first();
        if ($user){
            if(Hash::check($request->password, $user->password)){
                $request->session()->put('loginId', $user->id);
            }
            else{
                return back()->with('fail', 'Mots de passe incorect');
            }
        }
        else{
            return back()->with('fail', 'Adresse email incorrect');
        }

        /*Affiche des donnée de l'utilisateur */
        $data = array();
        if(Session::get('loginId')){
            $data =  Users::where('id', '=',Session::get('loginId'))->first();
        }
        return view('page/page_parent', compact('data'));

        /*Affichage des donnée sur la page de l'utilisateur */
        $data1 = array();
        if(Session::get('loginId')){
            $data1 =  Users::where('id', '=',Session::get('loginId'))->first();
        }
        return view('page/profile', compact('data'));

    }



    public function page_parent(){
        return  view('page/page_parent');
    }

    public function profile(){
        return  view('page/profile');
    }

}
