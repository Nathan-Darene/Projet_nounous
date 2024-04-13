<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AllController;
use App\Http\Controllers\ProfilController;
use App\Http\Controllers\AgendaController;
use App\Http\Controllers\NounouController;
use App\Http\Controllers\CheckboxlController;
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



/*Route par defaut*/
Route::get('/', function () {
    return view('welcome');
});

/*connexion */
/*Connexion get */
Route::get('/login',[AllController::class, 'login'])->name ('login');
Route::get('/login_nounou',[AllController::class, 'login_nounou']);

/*Inscriptio get */
Route::get('/registration',[AllController::class, 'registration']);
Route::get('/inscription',[AllController::class, 'inscription']);
Route::get('/profile',[AllController::class, 'profile']);


/*Inscription post */
Route::post('/register-user',[AllController::class, 'registerUser'])->name ('register-user');
Route::post('/register-nounou',[AllController::class, 'registerNounou'])->name ('register-nounou');

/*Connexion post */
Route::post('/login-user',[AllController::class, 'loginUser'])->name ('login-user');
Route::post('/login-nounou',[AllController::class, 'loginNounou'])->name ('login-nounou');

/*Déconnexion get */
/*Route::get('/logout}', [AllController::class, 'logoutNounou'])->name('logout-nounou');*/
Route::get('/logoutNounou', [AllController::class, 'logoutNounou'])->name('logoutNounou');
Route::get('/logout-user', [AllController::class, 'logoutUser'])->name('logout-user');


Route::get('/logout_nounou', [AllController::class, 'logout_nounou']);
Route::get('/logout', [AllController::class, 'logout']);



/*Edite Profil */

Route::post('/update-profile', [AllController::class, 'update'])->name('update');

/*Affichage des donnée sur la page de l'utilisateur */
Route::get('/AfficheProfileNounou',[AllController::class, 'AfficheProfileNounou'])->name ('AfficheProfileNounou');
Route::get('/AfficheProfileUser',[AllController::class, 'AfficheProfileUser'])->name ('AfficheProfileUser');


Route::get('/About',[AllController::class, 'About'])->name ('About');

Route::get('/profile_nounou',[AllController::class, 'profile_nounou']);



Route::get('/users', [UserController::class, 'showUsers']);


Route::get('/agenda', [AgendaController::class, 'agenda'])->name('agenda');


Route::get('/profile', [ProfilController::class,'ProfileController'])->name('profile-show');
/*Recherche*/
Route::get('/recherche', [AllController::class, 'recherche'])->name('recherche');

/* Route pour la recherche des profile*/

Route::post('/rechercher-nounous', [NounouController::class, 'rechercher'])->name('rechercher.nounous');
Route::post('/nounou-search', [SearchController::class, 'search'])->name('nounou.search');


/*CheckBox*/

Route::post('/enregistrer-donnees', [AllController::class, 'enregistrerDonnees'])->name('check');

/*Page acceuil*/


Route::get('/users', [UserController::class, 'index'])->name('page.page_user');


/*Annonce */
Route::post('/profiel_nounou', [AllController::class, 'annonce'])->name('annonce');

/*Profile pour la nounou*/
Route::get('/nounou/{id}/nounou_profile', [ProfilController::class, 'showDetails'])->name('nounou.details');


/*Route pour la page d'acceuil */

Route::get('/acceuil',[AllController::class, 'acceuil']);

Route::get('/choix',[AllController::class, 'choix']);

Route::get('/caland',[AllController::class, 'caland']);

Route::get('/reservation',[AllController::class, 'reservation']);

Route::get('/message',[AllController::class, 'message']);

Route::get('/choix2',[AllController::class, 'choix2']);


Route::get('/choix2',[AllController::class, 'choix2']);

Route::get('/page_parent',[AllController::class, 'page_parent']);

Route::get('/page_user',[AllController::class, 'page_user']);

Route::get('/slide',[AllController::class, 'slide']);

/*Deconnexion */

Route::get('/logout',[AllController::class, 'logout']);
