<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\accueil;

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

Route::get('/', function () {
    return view('accueil');
});

Route::get('/diplome', [accueil::class, 'fonctionDiplome']);

Route::get('/programme', [accueil::class, 'fonctionProgramme']);

Route::get('/cours', [accueil::class, 'fonctionCours']);

Route::get('/gestionDemandeMobilite', function () {
    return view('gestionDemandeMobilite');
});

Route::get('/contrat', function () {
    return view('contrat');
});

Route::get('/gestionDemandeFinancement', function () {
    return view('gestionDemandeFinancement');
});

Route::get('/utilisateur', function () {
    return view('utilisateur');
});

// Route::get('/diplome', [accueil::class, 'index']);