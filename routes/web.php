<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('auth.login');
})->name('loginPageRoute');

Route::get('/form-stage', function () {
    return view('landingPage.form');
})->name('form-stage');

// Route::get('/Admin/PgaeAdmin', function () {
//     return view('admin.PageAdmin');
// })->name('AdminPageRoute');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/PageAdmin', [App\Http\Controllers\HomeController::class, 'admin'])->name('admin');
Route::get('/PageStagiaire', [App\Http\Controllers\HomeController::class, 'stagiaire'])->name('stagiaire');

// Route::get('/displaypdf', [App\Http\Controllers\HomeController::class, 'pdf'])->name('pdfd');




// ------------------------Demande-route------------------------------
Route::post('/add-demande', [App\Http\Controllers\DemandeController::class, 'adddemande'])->name('add-demande');
// ------------------------Demande-route------------------------------



// --------------------------Service-route-----------------------------
Route::get('/PageService', [App\Http\Controllers\ServiceController::class, 'service'])->name('service');
Route::get('/Demandes', [App\Http\Controllers\ServiceController::class, 'demandes'])->name('demandes');
Route::get('/display-pdf/{id}', [App\Http\Controllers\ServiceController::class, 'pdf'])->name('pdfd');
Route::get('/Supprimer-demande/{id}', [App\Http\Controllers\ServiceController::class, 'delete'])->name('deletedemande');
Route::get('/Accepter-demande/{id}', [App\Http\Controllers\ServiceController::class, 'accept'])->name('acceptdemande');
Route::get('/Stagiaires', [App\Http\Controllers\ServiceController::class, 'stagiaires'])->name('stagiaires');
Route::get('/Supprimer-stagiaire/{id}', [App\Http\Controllers\ServiceController::class, 'deleteStagiaire'])->name('deletestagiaire');
Route::get('/add-offre', [App\Http\Controllers\ServiceController::class, 'addoffredisplay'])->name('addoffredisplay');
Route::post('/adding-offre', [App\Http\Controllers\ServiceController::class, 'addoffre'])->name('add-offre');
// --------------------------Service-route-----------------------------