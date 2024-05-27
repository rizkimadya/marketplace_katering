<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CateringController;
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


Route::group(['middleware' => ['auth', 'Roles:Catering']], function () {
    Route::get('/dashboard-catering', [CateringController::class, 'dashboard']);

    // jadwal
    // Route::get('/admin/jadwal', [JadwalController::class, 'index']);
    // Route::post('/admin/jadwal', [JadwalController::class, 'store']);
    // Route::post('/admin/jadwal/{id}', [JadwalController::class, 'update']);
    // Route::get('/admin/jadwal/delete/{id}', [JadwalController::class, 'destroy']);
});

Route::group(['middleware' => ['auth', 'Roles:Kantor']], function () {
});
