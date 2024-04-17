<?php

namespace App\Http\Controllers;
use App\Models\Users;
use App\Models\Nounou;
use App\Services\UserService;
use App\Models\Annonces;
use App\Models\Payement;

use App\Models\User;
use App\Models\Calendriers;
use App\Models\Reservations;

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

    public function pay(){
        return view('page.payement');
    }

    public function retour(){
        return view('page.profile_user');
    }

    public function direct(){
        return view('page.reservation');
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
            'description' => 'required|string|max:9999',
            'statut' => 'required|string|max:255',
            /*'date_disponible' => 'required|date_format:d-m-Y H:i:s',*/
            'active' => 'nullable|boolean',
        ]);

        // Assignez la valeur false au champ "active" si elle est null
        $active = $request->input('active') ?? false;

        // Création d'une nouvelle annonce
        $annonce = new annonces();
        $annonce->titre = $request->titre;
        $annonce->description = $request->description;
        $annonce->statut = $request->statut;
        /*$annonce->date_disponible = $request->date_disponible;*/
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
        $request->validate([
            'lun_avant_ecole' => 'nullable|boolean',
            'mar_avant_ecole' => 'nullable|boolean',
            'mer_avant_ecole' => 'nullable|boolean',
            'jeu_avant_ecole' => 'nullable|boolean',
            'ven_avant_ecole' => 'nullable|boolean',
            'sam_avant_ecole' => 'nullable|boolean',
            'dim_avant_ecole' => 'nullable|boolean',
            'lun_matin' => 'nullable|boolean',
            'mar_matin' => 'nullable|boolean',
            'mer_matin' => 'nullable|boolean',
            'jeu_matin' => 'nullable|boolean',
            'ven_matin' => 'nullable|boolean',
            'sam_matin' => 'nullable|boolean',
            'dim_matin' => 'nullable|boolean',

            'lun_midi' => 'nullable|boolean',
            'mar_midi' => 'nullable|boolean',
            'mer_midi' => 'nullable|boolean',
            'jeu_midi' => 'nullable|boolean',
            'ven_midi' => 'nullable|boolean',
            'sam_midi' => 'nullable|boolean',
            'dim_midi' => 'nullable|boolean',
            'lun_apres_midi' => 'nullable|boolean',
            'mar_apres_midi' => 'nullable|boolean',
            'mer_apres_midi' => 'nullable|boolean',
            'jeu_apres_midi' => 'nullable|boolean',
            'ven_apres_midi' => 'nullable|boolean',
            'sam_apres_midi' => 'nullable|boolean',
            'dim_apres_midi' => 'nullable|boolean',
            'lun_apres_ecole' => 'nullable|boolean',
            'mar_apres_ecole' => 'nullable|boolean',
            'mer_apres_ecole' => 'nullable|boolean',
            'jeu_apres_ecole' => 'nullable|boolean',
            'ven_apres_ecole' => 'nullable|boolean',
            'sam_apres_ecole' => 'nullable|boolean',
            'dim_apres_ecole' => 'nullable|boolean',
            'lun_en_soiree' => 'nullable|boolean',
            'mar_en_soiree' => 'nullable|boolean',
            'mer_en_soiree' => 'nullable|boolean',
            'jeu_en_soiree' => 'nullable|boolean',
            'ven_en_soiree' => 'nullable|boolean',
            'sam_en_soiree' => 'nullable|boolean',
            'dim_en_soiree' => 'nullable|boolean',
            'lun_nuit' => 'nullable|boolean',
            'mar_nuit' => 'nullable|boolean',
            'mer_nuit' => 'nullable|boolean',
            'jeu_nuit' => 'nullable|boolean',
            'ven_nuit' => 'nullable|boolean',
            'sam_nuit' => 'nullable|boolean',
            'dim_nuit' => 'nullable|boolean',
        ]);

        $active1 = $request->input('lun_avant_ecole') ?? false;
        $active2 = $request->input('mar_avant_ecole') ?? false;
        $active3 = $request->input('mer_avant_ecole') ?? false;
        $active4 = $request->input('jeu_avant_ecole') ?? false;
        $active5 = $request->input('ven_avant_ecole') ?? false;
        $active6 = $request->input('sam_avant_ecole') ?? false;
        $active7 = $request->input('dim_avant_ecole') ?? false;
        $active8 = $request->input('lun_matin') ?? false;
        $active9 = $request->input('mar_matin') ?? false;
        $active10 = $request->input('mer_matin') ?? false;
        $active11 = $request->input('jeu_matin') ?? false;
        $active12 = $request->input('ven_matin') ?? false;
        $active13 = $request->input('sam_matin') ?? false;
        $active14 = $request->input('dim_matin') ?? false;
        $active15 = $request->input('lun_midi') ?? false;
        $active16 = $request->input('mar_midi') ?? false;
        $active17 = $request->input('mer_midi') ?? false;
        $active18 = $request->input('jeu_midi') ?? false;
        $active19 = $request->input('ven_midi') ?? false;
        $active20 = $request->input('sam_midi') ?? false;
        $active21 = $request->input('dim_midi') ?? false;
        $active22 = $request->input('lun_apres_midi') ?? false;
        $active23 = $request->input('mar_apres_midi') ?? false;
        $active24 = $request->input('mer_apres_midi') ?? false;
        $active25 = $request->input('jeu_apres_midi') ?? false;
        $active26 = $request->input('ven_apres_midi') ?? false;
        $active27 = $request->input('sam_apres_midi') ?? false;
        $active28 = $request->input('dim_apres_midi') ?? false;
        $active29 = $request->input('lun_apres_ecole') ?? false;
        $active30 = $request->input('mar_apres_ecole') ?? false;
        $active31 = $request->input('mer_apres_ecole') ?? false;
        $active32 = $request->input('jeu_apres_ecole') ?? false;
        $active33 = $request->input('ven_apres_ecole') ?? false;
        $active34 = $request->input('sam_apres_ecole') ?? false;
        $active35 = $request->input('dim_apres_ecole') ?? false;
        $active36 = $request->input('lun_en_soiree') ?? false;
        $active37 = $request->input('mar_en_soiree') ?? false;
        $active38 = $request->input('mer_en_soiree') ?? false;
        $active39 = $request->input('jeu_en_soiree') ?? false;
        $active40 = $request->input('ven_en_soiree') ?? false;
        $active41 = $request->input('sam_en_soiree') ?? false;
        $active42 = $request->input('dim_en_soiree') ?? false;
        $active43 = $request->input('lun_nuit') ?? false;
        $active44 = $request->input('mar_nuit') ?? false;
        $active45 = $request->input('mer_nuit') ?? false;
        $active46 = $request->input('jeu_nuit') ?? false;
        $active47 = $request->input('ven_nuit') ?? false;
        $active48 = $request->input('sam_nuit') ?? false;
        $active49 = $request->input('dim_nuit') ?? false;

        // Enregistrement des données dans la base de données
        $calendrier = new Calendriers();
        $calendrier->lun_avant_ecole = $active1;
        $calendrier->mar_avant_ecole = $active2;
        $calendrier->mer_avant_ecole = $active3;
        $calendrier->jeu_avant_ecole = $active4;
        $calendrier->ven_avant_ecole = $active5;
        $calendrier->sam_avant_ecole = $active6;
        $calendrier->dim_avant_ecole = $active7;
        $calendrier->lun_matin = $active8;
        $calendrier->mar_matin = $active9;
        $calendrier->mer_matin = $active10;
        $calendrier->jeu_matin = $active11;
        $calendrier->ven_matin = $active12;
        $calendrier->sam_matin = $active13;
        $calendrier->dim_matin = $active14;
        $calendrier->lun_midi = $active15;
        $calendrier->mar_midi = $active16;
        $calendrier->mer_midi = $active17;
        $calendrier->jeu_midi = $active18;
        $calendrier->ven_midi = $active19;
        $calendrier->sam_midi = $active20;
        $calendrier->dim_midi = $active21;
        $calendrier->lun_apres_midi = $active22;
        $calendrier->mar_apres_midi = $active23;
        $calendrier->mer_apres_midi = $active24;
        $calendrier->jeu_apres_midi = $active25;
        $calendrier->ven_apres_midi = $active26;
        $calendrier->sam_apres_midi = $active27;
        $calendrier->dim_apres_midi = $active28;
        $calendrier->lun_apres_ecole = $active29;
        $calendrier->mar_apres_ecole = $active30;
        $calendrier->mer_apres_ecole = $active31;
        $calendrier->jeu_apres_ecole = $active32;
        $calendrier->ven_apres_ecole = $active33;
        $calendrier->sam_apres_ecole = $active34;
        $calendrier->dim_apres_ecole = $active35;
        $calendrier->lun_en_soiree = $active36;
        $calendrier->mar_en_soiree = $active37;
        $calendrier->mer_en_soiree = $active38;
        $calendrier->jeu_en_soiree = $active39;
        $calendrier->ven_en_soiree = $active40;
        $calendrier->sam_en_soiree = $active41;
        $calendrier->dim_en_soiree = $active42;
        $calendrier->lun_nuit = $active43;
        $calendrier->mar_nuit = $active44;
        $calendrier->mer_nuit = $active45;
        $calendrier->jeu_nuit = $active46;
        $calendrier->ven_nuit = $active47;
        $calendrier->sam_nuit = $active48;
        $calendrier->dim_nuit = $active49;



        /*$calendrier->fill($donneesCalendrier);*/

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
           session()->flash('success', 'Vos jours de disponibilité on été ajoutée avec succès');
        }
        else {
        session()->flash('error', 'Une erreur est survenue lors de l\'ajout de votre Disponibilité de la semmaine');
        }

        return back();
    }

    public function store(Request $request)
    {
        $data = array();
        if(Session::get('loginId')){
        $data =  Users::where('id', '=',Session::get('loginId'))->first();
        }

        // Valider les données du formulaire
        $validatedData = $request->validate([
            'child_fullname' => 'required|string',
            'child_birthdate' => 'required|string',
            'child_gender' => 'required|string|in:masculin,féminin',
            'child_address' => 'required|string',
            'parent_fullname' => 'required|string',
            'parent_address' => 'required|string',
            'parent_email' => 'nullable|email',
            'child_allergies' => 'nullable|string',
            'child_medical_conditions' => 'nullable|string',
            'doctor_phone' => 'nullable|string',
            'parent_phone' => 'required|string',
            'emergency_contact_name' => 'required|string',
            'emergency_contact_phone' => 'required|string',
            'school_name' => 'nullable|string',
            'child_grade_level' => 'nullable|string',
            /*'photo_authorization' => 'nullable|boolean',*/
            'special_needs' => 'nullable|string',
            'child_dietary_preferences' => 'nullable|string',
            'parental_authorizations' => 'nullable|string',
            'other_instructions' => 'nullable|string',
            'form_fill_date' => 'required|date',
            'parent_signature' => 'required|string',
            /*'privacy_acceptance' => 'nullable|boolean',*/
        ]);

        // Créer une nouvelle réservation avec les données validées
        $reservation = new Reservations();
        $reservation->child_fullname = $validatedData['child_fullname'];
        $reservation->child_birthdate = $validatedData['child_birthdate'];
        $reservation->child_gender = $validatedData['child_gender'];
        $reservation->child_address = $validatedData['child_address'];
        $reservation->parent_fullname = $validatedData['parent_fullname'];
        $reservation->parent_address = $validatedData['parent_address'];
        $reservation->parent_email = $validatedData['parent_email'];
        $reservation->child_allergies = $validatedData['child_allergies'];
        $reservation->child_medical_conditions = $validatedData['child_medical_conditions'];
        $reservation->doctor_phone = $validatedData['doctor_phone'];
        $reservation->parent_phone = $validatedData['parent_phone'];
        $reservation->emergency_contact_name = $validatedData['emergency_contact_name'];
        $reservation->emergency_contact_phone = $validatedData['emergency_contact_phone'];
        $reservation->school_name = $validatedData['school_name'];
        $reservation->child_grade_level = $validatedData['child_grade_level'];
       /* $reservation->photo_authorization = $validatedData['photo_authorization'];*/
        $reservation->special_needs = $validatedData['special_needs'];
        $reservation->child_dietary_preferences = $validatedData['child_dietary_preferences'];
        $reservation->parental_authorizations = $validatedData['parental_authorizations'];
        $reservation->other_instructions = $validatedData['other_instructions'];
        $reservation->form_fill_date = $validatedData['form_fill_date'];
        $reservation->parent_signature = $validatedData['parent_signature'];
        /*$reservation->privacy_acceptance = $validatedData['privacy_acceptance'];*/

        if (array_key_exists('photo_authorization', $validatedData)) {
            $reservation->photo_authorization = $validatedData['photo_authorization'];
        } else {
            // La clé "photo_authorization" n'est pas définie, vous pouvez lui attribuer une valeur par défaut ou la laisser vide selon vos besoins
            $reservation->photo_authorization = null; // ou false ou tout autre valeur par défaut
        }

        if ($data) {
            // Récupérer l'ID de la nounou à partir de la session
            $reservation->user_id = $data->id;
            } else {

        }
        $res = $reservation->save();

        // Rediriger avec un message de succè
        if ($res) {
            // Rediriger l'utilisateur vers une page de confirmation ou autre
            return view('page.confirm')->with('success', 'Reservation réussie');
        }
         else {
         session()->flash('error', 'Une erreur est survenue lors de l\'enregistrement de votre Reservation ');
        }

        return back();
    }

    public function payement(Request $request)
    {
        // Vérifier si l'utilisateur est connecté
        if (Session::get('loginId')) {
            // L'utilisateur est connecté, obtenir son ID
            $userId = Session::get('loginId');

            // Validation des données du formulaire
            $validatedData = $request->validate([
                'payment-method' => 'required|string',
                'email' => 'required|email',
                'card-number' => 'required|string',
                'expiry-date' => 'required|date',
                'cvv' => 'required|string',
            ]);

            // Création d'une nouvelle instance du modèle de paiement
            $payment = new Payments();

            // Remplissage des champs du modèle avec les données validées
            $payment->user_id = $userId; // Associer l'ID de l'utilisateur connecté
            $payment->payment_method = $validatedData['payment-method'];
            $payment->email = $validatedData['email'];
            $payment->card_number = $validatedData['card-number'];
            $payment->expiry_date = $validatedData['expiry-date'];
            $payment->cvv = $validatedData['cvv'];

            // Enregistrement du paiement dans la base de données
            $payment->save();

            // Redirection vers une page de confirmation ou autre après l'enregistrement réussi
            return view('page.confirm_pay')->with('success', 'Reservation réussie');
        } else {
            // L'utilisateur n'est pas connecté, rediriger vers la page de connexion ou afficher un message d'erreur
            return redirect()->route('login')->with('error', 'Vous devez être connecté pour effectuer cette action.');
        }
    }





}

