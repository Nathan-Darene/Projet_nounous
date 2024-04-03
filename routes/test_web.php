<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AllController;

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


/*Route pour l'acceuil */

Route::get('/acceuil', function () {
    return view('acceuil');
});



/*Route pour la page de clandrier */

Route::get('/caland', function () {
    return view('caland');
});

Route::get('/coin', function () {
    return view('coin');
});


/*Route::get('/connexion', function () {
    return view('connexion');
});*/




Route::get('/inscription', function () {
    return view('inscription');
});

Route::get('/page_user', function () {
    return view('page_user');
});


/*Route pour la page de l'utilisateur */

Route::get('/page_parent', function () {
    return view('page_parent');
});

/*Route pour la page de l'administrateur */
Route::get('/page_admin', function () {
    return view('page_admin');
});

/*connexion */

Route::get('/login',[AllController::class, 'login']);
Route::get('/registration',[AllController::class, 'registration']);
Route::post('/register-user',[AllController::class, 'registerUser'])->name ('register-user');

Route::get('/choix', function () {
    return view('choix');
});



Route::get('/reservation', function () {
    return view('reservation');
});
