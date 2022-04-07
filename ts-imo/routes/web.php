<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProprieteController;
use App\Http\Controllers\ProprietaiteController;

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

// Route::get('/', function () {
//     return view('welcome');i
// })->name('ecuil');;
Route::get('/', [ProprietaiteController::class, 'index'])->name('ecuil');
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');
require __DIR__ . '/auth.php';
Route::get('/show', [ProprietaiteController::class, 'show'])->middleware(['auth'])->name('afficher');
Route::get('/detail/{id}', [ProprietaiteController::class, 'detail'])->middleware(['auth'])->name('proprietaire.detail');
Route::get('/create', [ProprietaiteController::class, 'create'])->middleware(['auth'])->name('create');
Route::post('/create', [ProprietaiteController::class, 'store'])->middleware(['auth'])->name('proprietaire.store');
Route::PUT('/modifier/{id}', [ProprietaiteController::class, 'update'])->middleware(['auth'])->name('modifier');
Route::get('/delete/{id}', [ProprietaiteController::class, 'delete'])->middleware(['auth'])->name('delete');
Route::get('/showe', [ProprieteController::class, 'show'])->middleware(['auth'])->name('affiche');
Route::get('/modifier/{id}', [ProprieteController::class, 'detaille'])->middleware(['auth'])->name('recuperer');
Route::PUT('/modifie/{id}', [ProprieteController::class, 'update'])->middleware(['auth'])->name('update');
Route::get('/ajouter', [ProprieteController::class, 'ajouter'])->middleware(['auth'])->name('ajouter');
Route::post('/enregistrer', [ProprieteController::class, 'store'])->middleware(['auth'])->name('propriete.store');
Route::get('/suprimer/{id}', [ProprieteController::class, 'delete'])->middleware(['auth'])->name('suprimer');
