<?php

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PortofolioController;
use App\Http\Controllers\ProfilController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\WebController;


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

Route::get('/login', function () {
    return view('login');
})->name('login');


Route::get('/table', function () {
    return view('table');
});

Route::get('/', [WebController::class, 'show'])->name('page');

Route::get('regist', [UserController::class, 'regist']);
Route::post('regist/create', [UserController::class, 'create']);
Route::post('auth', [UserController::class, 'auth']);
Route::post('logout', [UserController::class, 'logout']);

Route::middleware('auth')->group(function() {

Route::get('admin', [AdminController::class, 'show']);
    
Route::get('portofolio', [PortofolioController::class, 'portofolio']);
Route::get('portofolio/add', [PortofolioController::class, 'add']);
Route::post('portofolio/create', [PortofolioController::class, 'create']);
Route::get('portofolio/delete/{id}', [PortofolioController::class, 'delete']);
Route::get('portofolio/edit/{id}', [PortofolioController::class, 'edit']);
Route::post('portofolio/update/{id}', [PortofolioController::class, 'update']);

Route::get('profil', [ProfilController::class, 'profil']);
Route::get('profil/add', [ProfilController::class, 'add']);
Route::post('profil/create', [ProfilController::class, 'create']);
Route::post('profil/ubah/{id}', [ProfilController::class, 'ubah']);
Route::post('profil/update/{id}', [ProfilController::class, 'update']);

Route::get('contact', [ContactController::class, 'contact']);
Route::get('contactadmin', [ContactController::class, 'admin']);
Route::get('contact/add', [ContactController::class, 'add']);
Route::post('contact/create', [ContactController::class, 'create']);
Route::get('contact/delete/{id}', [ContactController::class, 'delete']);
});




