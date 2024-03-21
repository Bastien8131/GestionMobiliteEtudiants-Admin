<?php

use App\Http\Controllers\accueil;
use App\Http\Controllers\contrat;
use App\Http\Controllers\gestionFinancement;
use App\Http\Controllers\gestionMobilite;
use Illuminate\Support\Facades\Route;

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

// Partie diplôme
Route::get('/diplome', [accueil::class, 'fonctionDiplome'])->name('diplome.index');
Route::get('/diplome/{id}/editDiplome', [accueil::class, 'editDiplome'])->name('diplome.editDiplome');
Route::put('/diplome/{id}', [accueil::class, 'updateDiplome'])->name('diplome.updateDiplome');
Route::get('/diplome/createDiplome', [accueil::class, 'createDiplome'])->name('diplome.createDiplome');
Route::post('/diplome', [accueil::class, 'storeDiplome'])->name('diplome.storeDiplome');
Route::get('/diplome/{id}/confirm-deleteDiplome', [accueil::class, 'confirmDeleteDiplome'])->name('diplome.confirmation');
Route::delete('/diplome/{id}', [accueil::class, 'destroyDiplome'])->name('diplome.destroyDiplome');
Route::get('/diplomeUniv', [accueil::class, 'diplomesParUniv']);
Route::get('/diplomeUniv/{universite?}', [accueil::class, 'diplomesParUniv'])->name('diplome.universite');

// Partie programme
Route::get('/programme', [accueil::class, 'fonctionProgramme'])->name('programme.index');
Route::get('/programme/{id}/editProgramme', [accueil::class, 'editProgramme'])->name('programme.editProgramme');
Route::put('/programme/{id}', [accueil::class, 'updateProgramme'])->name('programme.updateProgramme');
Route::get('/programme/createProgramme', [accueil::class, 'createProgramme'])->name('programme.createProgramme');
Route::post('/programme', [accueil::class, 'storeProgramme'])->name('programme.storeProgramme');
Route::get('/programme/{id}/confirm-deleteProgramme', [accueil::class, 'confirmDeleteProgramme'])->name('programme.confirmation');
Route::delete('/programme/{id}', [accueil::class, 'destroyProgramme'])->name('programme.destroyProgramme');

// Partie cours
Route::get('/cours', [accueil::class, 'fonctionCours'])->name('cours.index');
Route::get('/cours/{id}/editCours', [accueil::class, 'editCours'])->name('cours.editCours');
Route::put('/cours/{id}', [accueil::class, 'updateCours'])->name('cours.updateCours');
Route::get('/cours/createCours', [accueil::class, 'createCours'])->name('cours.createCours');
Route::post('/cours', [accueil::class, 'storeCours'])->name('cours.storeCours');
Route::get('/cours/{id}/confirm-deleteCours', [accueil::class, 'confirmDeleteCours'])->name('cours.confirmation');
Route::delete('/cours/{id}', [accueil::class, 'destroyCours'])->name('cours.destroyCours');
Route::get('/coursDiplome', [accueil::class, 'coursParDiplome']);
Route::get('/coursDiplome/{diplome?}', [accueil::class, 'coursParDiplome'])->name('cours.diplome');



Route::get('/gestionDemandeMobilite', [accueil::class, 'demandeMobilites']);
Route::get('gestionDemandeMobilite/{action}/{codeDemande}', [gestionMobilite::class, 'changerEtat'])->name('demandeMobilite.changerEtat');



Route::get('/contrat', [accueil::class, 'consulterContrats']);
Route::get('/contrat/{id}', [contrat::class, 'afficherContrat'])->name('contrat.afficher');

Route::get('/gestionDemandeFinancement', [accueil::class, 'demandeFinancement']);
Route::get('gestionDemandeFinancement/valider/{codeDemandeF}', [gestionFinancement::class, 'valider'])->name('demandeFinancement.valider');
Route::get('gestionDemandeFinancement/rejeter/{codeDemandeF}', [gestionFinancement::class, 'rejeter'])->name('demandeFinancement.rejeter');

Route::get('/utilisateur', function () {
    return view('utilisateur');
});
