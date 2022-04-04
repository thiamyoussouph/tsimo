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

Route::get('/', function () {
    return view('index');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');
require __DIR__.'/auth.php';
Route::get('/show',[ProprietaiteController::class,'show'])->name('affiche');
Route::get('/detail/{id}',[ProprietaiteController::class,'detail'])->name('proprietaire.detail');
Route::get('/create',[ProprietaiteController::class,'create'])->name('create');
Route::post('/create',[ProprietaiteController::class,'store'])->name('proprietaire.store');
Route::PUT('/modifier/{id}',[ProprietaiteController::class,'update'])->name('modifier');
Route::get('/delete/{id}',[ProprietaiteController::class,'delete'])->name('delete');
