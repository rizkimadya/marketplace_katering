<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CateringController;
use App\Http\Controllers\MakananController;
use App\Http\Controllers\ProfilController;
use App\Http\Controllers\TransaksiController;
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
    return view('landing_page');
});


// authentication
Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::get('/regis', [AuthController::class, 'regis']);
Route::post('/login', [AuthController::class, 'postLogin']);
Route::post('/regis', [AuthController::class, 'postRegis']);
Route::get('/logout', [AuthController::class, 'logout']);

Route::post('/upload', [CateringController::class, 'upload'])->name('ckeditor.upload');

Route::group(['middleware' => ['auth', 'Roles:Catering']], function () {
    Route::get('/profil', [ProfilController::class, 'index']);
    Route::put('/profile', [ProfilController::class, 'update'])->name('user.update');

    // makanan
    Route::get('/menu-makanan', [MakananController::class, 'index']);
    Route::post('/menu-makanan', [MakananController::class, 'store']);
    Route::get('/menu-makanan/{id}', [MakananController::class, 'edit']);
    Route::post('/menu-makanan/{id}', [MakananController::class, 'update']);
    Route::get('/menu-makanan/delete/{id}', [MakananController::class, 'destroy']);

    // data transaksi
    Route::get('/data-transaksi', [TransaksiController::class, 'indexCatering']);
});

Route::group(['middleware' => ['auth', 'Roles:Customer']], function () {
});
