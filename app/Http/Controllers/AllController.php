<?php

namespace App\Http\Controllers;
use App\Models\Users;
use App\Models\Nounou;
use App\Services\UserService;
use App\Models\Annonces;
use App\Models\User;
use App\Models\Calendriers;
use App\Models\Reservations;
use App\Models\Reservation;
use Illuminate\Http\Response;

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
    // public function loginNounou(Request $request){
    //     $request->validate([
    //         'email' => 'required|string|email',
    //         'password' => 'required|string',
    //     ]);

    //     $user =  Nounou::where('email', '=', $request->email)->first();
    //     if ($user){
    //         if(Hash::check($request->password, $user->password)){
    //             $request->session()->put('loginId', $user->id);
    //         }
    //         else{
    //             return back()->with('fail', 'Mots de passe incorect');
    //         }
    //     }
    //     else{
    //         return back()->with('fail', 'Adresse email incorrect');
    //     }

    //     /*Affiche des donnée de l'utilisateur */
    //     $data = array();
    //     if(Session::get('loginId')){
    //         $data =  Nounou::where('id', '=',Session::get('loginId'))->first();
    //     }
    //     return view('page/page_user', compact('data'));



    // }



    // public function loginNounou(Request $request){
    //     $request->validate([
    //         'email' => 'required|string|email',
    //         'password' => 'required|string',
    //     ]);

    //     $user =  Nounou::where('email', '=', $request->email)->first();
    //     if ($user){
    //         if(Hash::check($request->password, $user->password)){
    //             $request->session()->put('loginId', $user->id);

    //             $data = [];
    //             $reservations = collect(); // Initialisation à une collection vide

    //             if(Session::has('loginId')){
    //                 $data =  Nounou::find(Session::get('loginId'));
    //                 $reservations = Reservations::where('nounou_id', $data->id)->inRandomOrder()->take(6)->get();
    //             }

    //             // Récupérer les utilisateur avec l'ID
    //             $user_id = $reservations->isNotEmpty() ? $reservations->first()->user_id : null;
    //             $user = $user_id ? Users::find($user_id) : null;

    //             // Retourner les données JSON dans la vue
    //             return response()->json([
    //                 'success' => true,
    //                 'message' => 'Connexion réussie',
    //                 'data' => $data,
    //                 'reservations' => $reservations,
    //                 'user' => $user // Ajoutez l'utilisateur aux données retournées
    //             ]);
    //         } else {
    //             return response()->json([
    //                 'success' => false,
    //                 'message' => 'Mot de passe incorrect',
    //             ]);
    //         }
    //     } else {
    //         return response()->json([
    //             'success' => false,
    //             'message' => 'Adresse email incorrecte',
    //         ]);
    //     }
    // }

    public function loginNounou(Request $request)
{
    $request->validate([
        'email' => 'required|string|email',
        'password' => 'required|string',
    ]);

    $user =  Nounou::where('email', '=', $request->email)->first();
    if ($user){
        if(Hash::check($request->password, $user->password)){
            $request->session()->put('loginId', $user->id);

            $data = [];
            $reservations = collect(); // Initialisation à une collection vide

            if(Session::has('loginId')){
                $data =  Nounou::find(Session::get('loginId'));
                $reservations = Reservations::where('nounou_id', $data->id)->inRandomOrder()->take(6)->get();
            }

            // Récupérer les utilisateurs associés à chaque réservation
            $reservationUsers = collect();
            foreach ($reservations as $reservation) {
                $reservationUsers[] = Users::find($reservation->user_id);
            }


            return view('page/page_user', [
                'data' => $data,
                'reservations' => $reservations,
                'reservationUsers' => $reservationUsers,
            ]);
        } else {
            return response()->json([
                'success' => false,
                'message' => 'Mot de passe incorrect',
            ]);
        }
    } else {
        return response()->json([
            'success' => false,
            'message' => 'Adresse email incorrecte',
        ]);
    }
}



            // Retourner les données JSON dans la vue
            // return response()->json([
            //     'success' => true,
            //     'message' => 'Connexion réussie',
            //     'data' => $data,
            //     'reservations' => $reservations,
            //     'booking_users' => $bookingUsers // Ajouter les utilisateurs qui ont réservé la nounou aux données retournées
            // ]);
    // public function loginNounou(Request $request){
    //     $request->validate([
    //         'email' => 'required|string|email',
    //         'password' => 'required|string',
    //     ]);

    //     $user =  Nounou::where('email', '=', $request->email)->first();
    //     if ($user){
    //         if(Hash::check($request->password, $user->password)){
    //             $request->session()->put('loginId', $user->id);

    //             $data = [];
    //             $reservations = collect(); // Initialisation à une collection vide

    //             if(Session::has('loginId')){
    //                 $data =  Nounou::find(Session::get('loginId'));
    //                 $reservations = Reservations::where('nounou_id', $data->id)->inRandomOrder()->get();
    //             }

    //             // Récupérer l'utilisateur avec l'ID de la première réservation (s'il existe)
    //             $user_id = $reservations->isNotEmpty() ? $reservations->first()->user_id : null;
    //             $user = $user_id ? Users::find($user_id) : null;

    //             // Retourner les données JSON dans la vue
    //             return response()->json([
    //                 'success' => true,
    //                 'message' => 'Connexion réussie',
    //                 'data' => $data,
    //                 'reservations' => $reservations,
    //                 'user' => $user // Ajoutez l'utilisateur aux données retournées
    //             ]);
    //         } else {
    //             return response()->json([
    //                 'success' => false,
    //                 'message' => 'Mot de passe incorrect',
    //             ]);
    //         }
    //     } else {
    //         return response()->json([
    //             'success' => false,
    //             'message' => 'Adresse email incorrecte',
    //         ]);
    //     }
    // }








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
//     public function AfficheProfileUser(Request $request)
// {
//     $data = array();
//     if (Session::get('loginId')) {
//         $data = Users::where('id', '=', Session::get('loginId'))->first();


//     }
//     return view('page/profile_user', compact('data'));
//     }


public function AfficheProfileUser(Request $request)
{
    $data = array();
    $nounou = null;
    $pay= null;
    if (Session::has('loginId')) {
        $user_id = Session::get('loginId');

        // Récupérer l'utilisateur connecté
        $data = Users::find($user_id);

        // Récupérer la réservation faite par l'utilisateur connecté
        $reservation = Reservations::where('user_id', $user_id)->first();

        if ($reservation) {
            // Si une réservation est trouvée, récupérer l'ID de la nounou associée à cette réservation
            $nounou_id = $reservation->nounou_id;

            // Maintenant, récupérer les données de la nounou à partir de son ID
            $nounou = Nounou::find($nounou_id);
        }
    }
    return view('page/profile_user', compact('data', 'nounou'));

    // // Retourner les données au format JSON
    // return response()->json([
    //     'user' => $data,
    //     'nounou' => $nounou
    // ]);
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

        // Assurer que la nounou associée à cette annonce est récupérée avec succès
        if (!$data) {
            session()->flash('error', 'Impossible de trouver l\'utilisateur connecté.');
            return back();
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

        // Enregistrement des données dans la base de données
        $calendrier = $data->calendrier ?? new Calendriers();

        // Récupération de toutes les valeurs des cases à cocher
        $fields = [
            'lun_avant_ecole', 'mar_avant_ecole', 'mer_avant_ecole', 'jeu_avant_ecole', 'ven_avant_ecole', 'sam_avant_ecole', 'dim_avant_ecole',
            'lun_matin', 'mar_matin', 'mer_matin', 'jeu_matin', 'ven_matin', 'sam_matin', 'dim_matin',
            'lun_midi', 'mar_midi', 'mer_midi', 'jeu_midi', 'ven_midi', 'sam_midi', 'dim_midi',
            'lun_apres_midi', 'mar_apres_midi', 'mer_apres_midi', 'jeu_apres_midi', 'ven_apres_midi', 'sam_apres_midi', 'dim_apres_midi',
            'lun_apres_ecole', 'mar_apres_ecole', 'mer_apres_ecole', 'jeu_apres_ecole', 'ven_apres_ecole', 'sam_apres_ecole', 'dim_apres_ecole',
            'lun_en_soiree', 'mar_en_soiree', 'mer_en_soiree', 'jeu_en_soiree', 'ven_en_soiree', 'sam_en_soiree', 'dim_en_soiree',
            'lun_nuit', 'mar_nuit', 'mer_nuit', 'jeu_nuit', 'ven_nuit', 'sam_nuit', 'dim_nuit'
        ];

        foreach ($fields as $field) {
            $calendrier->$field = $request->input($field) ?? false;
        }

        // Associer le calendrier à l'utilisateur
        $data->calendrier()->save($calendrier);

        session()->flash('success', 'Vos jours de disponibilité ont été mis à jour avec succès.');

        return back();
    }

    public function reservation($id)
    {
        // Récupérer la nounou à partir de l'ID
        $nounou = Nounou::find($id);

        // Afficher la vue du formulaire de réservation en passant la nounou
        return view('page/reservation')->with('nounou', $nounou);
    }




    public function store(Request $request)
    {
        $data = array();
        if(Session::get('loginId')){
        $data =  Users::where('id', '=',Session::get('loginId'))->first();
        }
        // Récupérer l'ID de la nounou à partir de l'URL

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

        $reservation->nounou_id = $request->input('nounou_id');

        if ($data) {
            // Récupérer l'ID de l'utilisateur à partir de la session
            $reservation->user_id = $data->id;
        }
        else {
            //
         }


        $res = $reservation->save();

        $nounou = Nounou::find($reservation->nounou_id);

        // Rediriger avec un message de succè
        if ($res) {
            // Rediriger l'utilisateur vers une page de confirmation ou autre
            return view('page.confirm')->with('nounouName', $nounou->username);
        }
         else {
         session()->flash('error', 'Une erreur est survenue lors de l\'ajout de votre Disponibilité de la semmaine');
         }

         return back();
    }

    public function confirm_demande(){
        return view('page/confirm_demande');
    }

}

