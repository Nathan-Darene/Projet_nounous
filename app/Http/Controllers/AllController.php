<?php

namespace App\Http\Controllers;
use App\Models\Users;
use App\Models\Nounou;
use App\Services\UserService;
use App\Models\Annonces;
use App\Models\User;
use App\Models\calendriers;


use Session;

use Hash;
use Illuminate\Http\Request;

class AllController extends Controller
{

    public function  acceuil(){
        return  view('page.acceuil');
    }

    public function getNounou()
    {
        $nounous = Nounou::all();
        return response()->json($nounous);
    }

    public function slide(){
        return  view('page.slide');
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

    public function  page_user(){
        return  view('page.page_user');
    }

    public function  profile_nounou(){
        return  view('page.profile_nounou');
    }

    public function  login(){
        return  view('auth.login');
    }

    public function  logout_nounou(){
        return  view('auth.logout_nounou');
    }

    public function  logout(){
        return  view('auth.logout');
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
            'gender' => 'required|string|max:10',
            'birthdate' => 'required|date|max:255',
            'Age' => 'required|string|max:255',
            'niveau' => 'required|string|max:255',
            'experience' => 'required|string|max:255',
            'prix_heure' => 'required|string|max:255',
            'role' => 'required|string|max:255',
            'imageUpload' => 'file|image|mimes:jpeg,png,jpg,gif,webp,jpej,svg,avif|max:4048|unique:nounous',
            'city' => 'required|string|max:255',
            /*'postalcode' => 'string|max:255',*/
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
        $user->gender = $request->gender;
        $user->birthdate = $request->birthdate;
        $user->Age = $request->Age;
        $user->niveau = $request->niveau;
        $user->experience = $request->experience;
        $user->prix_heure = $request->prix_heure;
        $user->role = $request->role;
        $user->imageUpload = $request->imageUpload;
        $user->imageUploads = $request->imageUpload;
        $user->city = $request->city;
        /*$user->postalcode = $request->postalcode;*/
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

        $user->imageUploads = 'uploads/' . $filename;
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
        return view('page/page_user', compact('data'));



    }



    public function logoutNounou (Request $request){
        $data = array();
        if(Session::get('loginId')){
        $data =  Nounou::where('id', '=',Session::get('loginId'))->first();
        }
        return view('auth/logout_nounou', compact('data'));

    }

    /*public function update(Request $request)
    {
        // Récupérer l'identifiant de l'utilisateur connecté depuis la session
        $loginId = Session::get('loginId');

        // Récupérer l'utilisateur connecté
        $nounou = Nounou::find($loginId);

        // Validation des données
        $request->validate([
            'username' => 'required|string|max:255|unique:nounous',
            'lastname' => 'required|string|max:255',
            'firstname' => 'required|string|max:255',
            'phone' => 'required|string|max:20|unique:nounous',
            'birthdate' => 'required|date|max:255',
            'Age' => 'required|string|max:255',
            'niveau' => 'required|string|max:255',
            'experience' => 'required|string|max:255',
            'prix_heure' => 'required|string|max:255',
            'role' => 'required|string|max:255',
            'imageUpload' => 'file|image|mimes:jpeg,png,jpg,gif,webp,jpej,svg,avif|max:4048|unique:users',
            'city' => 'required|string|max:255',
            'postalcode' => 'string|max:255',
            'email' => 'required|string|email|max:255|unique:nounous',
            'password' => 'required|string|min:8|',
        ]);

        // Mettre à jour les informations de l'utilisateur
        $nounou->update($request->all());

        return response()->json(['message' => 'Profil mis à jour avec succès']);
    }*/

    /*Affichage des donnée sur la page de l'utilisateur */
    public function AfficheProfileNounou(Request $request){
        $data = array();
        if(Session::get('loginId')){
        $data =  Nounou::where('id', '=',Session::get('loginId'))->first();
        }
        return view('page/profile_nounou', compact('data'));
    }


    public function About(Request $request){
        $data = array();
        if(Session::get('loginId')){
        $data =  Nounou::where('id', '=',Session::get('loginId'))->first();
        }
        return view('page/page_user' , compact('data'));
    }

    public function annonce(Request $request)
    {
        $data = array();
        if (Session::get('loginId')) {
        $data = Nounou::find(Session::get('loginId'));
        }


        $request->validate([
            'titre' => 'required|string|max:255',
            'description' => 'required|string|max:255',
            'statut' => 'required|string|max:255',
            'date_disponible' => 'required|date_format:d-m-Y H:i:s',
            'active' => 'nullable|boolean',
        ]);

        // Assignez la valeur false au champ "active" si elle est null
        $active = $request->input('active') ?? false;

        // Création d'une nouvelle annonce
        $annonce = new annonces();
        $annonce->titre = $request->titre;
        $annonce->description = $request->description;
        $annonce->statut = $request->statut;
        $annonce->date_disponible = $request->date_disponible;
        $annonce->active = $active; // Assignez la valeur au champ "active"
        //vas Vérifie si la case à cocher 'active' est cochée

        // Assurez-vous que la nounou associée à cette annonce est récupérée avec succès
        if ($data) {
            // Récupérez l'ID de la nounou à partir de la session
            $annonce->nounou_id = $data->id;
        }
        else {
        // Gérez le cas où l'utilisateur n'est pas connecté ou si la nounou associée n'existe pas
        // Pour l'instant, j'ai ignorer cette partie ou ajouter une gestion d'erreur appropriée
        }

    // Sauvegarde de l'annonce dans la base de données
    $res = $annonce->save();

    if ($res) {
        session()->flash('success', 'Annonce ajoutée avec succès');
    }
    else {
        session()->flash('error', 'Une erreur est survenue lors de l\'ajout de votre annonce');
    }

    return back();
}

/*###############################################################################" */

    /*Enregistrement du parent ou de l'utilisateur */
    public function registerUser(Request $request){

        $request->validate([
            'username' => 'required|string|max:255|unique:users',
            'lastname' => 'required|string|max:255',
            'firstname' => 'required|string|max:255',
            'phone' => 'required|string|max:20|unique:users',
            'gender' => 'required|string|max:10',
            'imageUpload' => 'file|image|mimes:jpeg,png,jpg,gif,webp,svg,avif|max:4048|unique:users',
            'city' => 'required|string|max:255',
            /*'postalcode' => 'string|max:255',*/
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
        $user->gender = $request->gender;
        $user->imageUpload = $request->imageUpload;
        $user->city = $request->city;
        /*$user->postalcode = $request->postalcode;*/
        $user->email = $request->email;
        $user->password = Hash::make($request->password);



        // Vérifiez si un fichier a été téléchargé
    if($request->hasfile('imageUpload'))
    {
        $file = $request->file('imageUpload');
        $extenstion = $file->getClientOriginalExtension();
        $filename = time().'.'.$extenstion;
        $file->move('profile_users/', $filename);
        $user->imageUpload = $filename;
    }



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
        return view('page/profile_user', compact('data'));

    }



    public function logoutUser (Request $request){
        $data = array();
        if(Session::get('loginId')){
        $data =  Users::where('id', '=',Session::get('loginId'))->first();
        }
        return view('auth/logout', compact('data'));

    }




    /*Affichage des donnée sur la page de l'utilisateur */
    public function AfficheProfileUser(Request $request){
        $data = array();
        if(Session::get('loginId')){
        $data =  Users::where('id', '=',Session::get('loginId'))->first();
        }
        return view('page/profile_user', compact('data'));
    }


    public function recherche(Request $request){
        $data = array();
        if(Session::get('loginId')){
        $data =  Users::where('id', '=',Session::get('loginId'))->first();
        }
        return view('page/page_parent', compact('data'));
    }



    public function page_parent(){
        return  view('page/page_parent');
    }

    public function profile(){
        return  view('page/profile');
    }



    /*public function index()
    {
        // Récupérer tous les utilisateurs depuis la base de données
        $users = User::all();

        // Passer les utilisateurs à la vue et afficher la vue
        return view('page/page_user', ['users' => $users]);
    }*/

    public function enregistrerDonnees(Request $request)
    {
        // Récupérer les données de l'utilisateur connecté
        $data = null;
        if (Session::has('loginId')) {
            $data = Nounou::find(Session::get('loginId'));
        }

        // Récupération des données des cases à cocher
        $donneesCalendrier = $request->only([
            'lun_avant_ecole',
            'mar_avant_ecole',
            'mer_avant_ecole',
            'jeu_avant_ecole',
            'ven_avant_ecole',
            'sam_avant_ecole',
            'dim_avant_ecole',
            'lun_matin',
            'mar_matin',
            'mer_matin',
            'jeu_matin',
            'ven_matin',
            'sam_matin',
            'dim_matin',
            'lun_midi',
            'mar_midi',
            'mer_midi',
            'jeu_midi',
            'ven_midi',
            'sam_midi',
            'dim_midi',
            'lun_après_midi',
            'mar_après_midi',
            'mer_après_midi',
            'jeu_après_midi',
            'ven_après_midi',
            'sam_après_midi',
            'dim_après_midi',
            'lun_après_école',
            'mar_après_école',
            'mer_après_école',
            'jeu_après_école',
            'ven_après_école',
            'sam_après_école',
            'dim_après_école',
            'lun_en_soiree',
            'mar_en_soiree',
            'mer_en_soiree',
            'jeu_en_soiree',
            'ven_en_soiree',
            'sam_en_soiree',
            'dim_en_soiree',
            'lun_nuit',
            'mar_nuit',
            'mer_nuit',
            'jeu_nuit',
            'ven_nuit',
            'sam_nuit',
            'dim_nuit',


        ]);
        // Enregistrement des données dans la base de données
        $calendrier = new Calendriers();
        $calendrier->fill($donneesCalendrier);

        // Assurer que la nounou associée à cette annonce est récupérée avec succès
        if ($data) {
            // Récupérer l'ID de la nounou à partir de la session
            $calendrier->nounou_id = $data->id;
            } else {
                // Gérer le cas où l'utilisateur n'est pas connecté ou si la nounou associée n'existe pas
           // Pour l'instant, j'ai ignoré cette partie ou ajouté une gestion d'erreur appropriée
         }

        $res = $calendrier->save();

        if ($res) {
           session()->flash('success', ' ajoutée avec succès');
        }
        else {
        session()->flash('error', 'Une erreur est survenue lors de l\'ajout de votre Disponibilité de la semmaine');
        }

        return back();
    }

}
