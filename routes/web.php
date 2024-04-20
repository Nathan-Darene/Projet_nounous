<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AllController;
use App\Http\Controllers\ProfilController;
use App\Http\Controllers\AgendaController;
use App\Http\Controllers\NounouController;
use App\Http\Controllers\CheckboxlController;
use App\Http\Controllers\AdminController;
use App\Models\User;







/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/



// Route par défaut - Page d'accueil
Route::get('/', function () {
    return view('welcome');
});

// Routes pour la connexion des utilisateurs et des nounous
Route::get('/login', [AllController::class, 'login'])->name('login');
Route::get('/login_nounou', [AllController::class, 'login_nounou']);
Route::get('/login_admin', [AllController::class,'login_admin'])->name('login.admin');


// Routes pour l'inscription des utilisateurs et des nounous
Route::get('/registration', [AllController::class, 'registration']);
Route::get('/inscription', [AllController::class, 'inscription']);
Route::get('/profile', [AllController::class, 'profile']);
Route::get('/register_admin', [AllController::class, 'register'])->name('register_admin');


// Routes pour traiter les soumissions de formulaire d'inscription
Route::post('/register-user', [AllController::class, 'registerUser'])->name('register-user');
Route::post('/register-nounou', [AllController::class, 'registerNounou'])->name('register-nounou');
Route::post('/register-admin', [AllController::class, 'registerAdmin'])->name('register-admin');

// Routes pour traiter les soumissions de formulaire de connexion
Route::post('/login-user', [AllController::class, 'loginUser'])->name('login-user');
Route::post('/login_admin', [AllController::class,'loginAdmin'])->name('login_admin');;
Route::post('/login-nounou', [AllController::class, 'loginNounou'])->name('login-nounou');

// Routes de déconnexion pour les utilisateurs et les nounous
Route::get('/logoutNounou', [AllController::class, 'logoutNounou'])->name('logoutNounou');
Route::get('/logout-user', [AllController::class, 'logoutUser'])->name('logout-user');
Route::get('/logout-admin', [AllController::class, 'logoutAdmin'])->name('logout-admin');

Route::get('/logout_nounou', [AllController::class, 'logout_nounou']);
Route::get('/logout', [AllController::class, 'logout']);

// Route pour la mise à jour du profil
Route::post('/update-profile', [AllController::class, 'update'])->name('update');

// Routes pour afficher les profils des utilisateurs et des nounous
Route::get('/AfficheProfileNounou', [AllController::class, 'AfficheProfileNounou'])->name('AfficheProfileNounou');
Route::get('/AfficheProfileUser', [AllController::class, 'AfficheProfileUser'])->name('AfficheProfileUser');

// Autres routes pour diverses fonctionnalités (agenda, recherche, annonces, etc.)
Route::get('/About', [AllController::class, 'About'])->name('About');
Route::get('/profile_nounou', [AllController::class, 'profile_nounou']);
Route::get('/users', [UserController::class, 'showUsers']);
Route::get('/agenda', [AgendaController::class, 'agenda'])->name('agenda');
Route::get('/profile', [ProfilController::class, 'ProfileController'])->name('profile-show');
Route::get('/recherche', [AllController::class, 'recherche'])->name('recherche');

Route::post('/rechercher-nounous', [NounouController::class, 'rechercher'])->name('rechercher.nounous');

Route::post('/nounou-search', [SearchController::class, 'search'])->name('nounou.search');
Route::post('/enregistrer-donnees', [AllController::class, 'enregistrerDonnees'])->name('check');
Route::get('/users', [UserController::class, 'index'])->name('page.page_user');
Route::post('/profiel_nounou', [AllController::class, 'annonce'])->name('annonce');
Route::get('/nounou/{id}/nounou_profile', [ProfilController::class, 'showDetails'])->name('nounou.details');
Route::get('/nounou/reservation/{id}', [AllController::class, 'reservation'])->name('reservation');
Route::post('/reservation', [AllController::class, 'store'])->name('reservations');
Route::get('/nounou/{id}/payement', [ProfilController::class, 'showDetails'])->name('nounou.payement');
Route::get('/reservation', [AllController::class, 'direct']);
Route::get('/confirm', [AllController::class, 'retour'])->name('retour');
Route::get('/confirm', function () {
    return view('page/confirm');
});
Route::get('/confirm_pay', function () {
    return view('page/confirm_pay');
});
Route::post('/payement', [AllController::class, 'payement'])->name('paiements.store');
Route::get('/confirm_demande', [AllController::class, 'confirm_demande'])->name('confirm_demande');
Route::get('/payement', function () {
    return view('page/payement');
});
Route::get('/page_admin', [AllController::class, 'Administrateur'])->name('Administrateur');
Route::get('/acceuil', [AllController::class, 'acceuil']);
Route::get('/choix', [AllController::class, 'choix']);
Route::get('/caland', [AllController::class, 'caland']);
Route::get('/reservation', [AllController::class, 'reservation']);
Route::get('/message', [AllController::class, 'message']);
Route::get('/choix2', [AllController::class, 'choix2']);
Route::get('/choix2', [AllController::class, 'choix2']);
Route::get('/page_parent', [AllController::class, 'page_parent']);
Route::get('/page_user', [AllController::class, 'page_user']);
Route::get('/slide', [AllController::class, 'slide']);
Route::get('/logout', [AllController::class, 'logout']);

/*Supression des l'utilisateur*/

Route::delete('/page_admin/{id}', [AllController::class, 'delete'])->name('users.delete');

Route::get('/page_admin', [AdminController::class, 'Allacces'])->name('reservation');

