<?php

use App\Http\Controllers\AccountController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthenticationController;
use App\Http\Controllers\BlogController;

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
    return view('welcome');
});

/*---Authentification---*/


Route::get('/inscription', [AuthenticationController::class, 'signup'])->name('signup');
Route::post('/inscription', [AuthenticationController::class, 'signupPost']);

Route::get('/connexion', [AuthenticationController::class, 'login']);
Route::post('/connexion', [AuthenticationController::class, 'loginPost']);

Route::post('/deconnexion', [AuthenticationController::class, 'logout'])->name('logout');

/*---Compte utilisateur---*/
Route::get('/mon-compte', [AccountController::class, 'index'])->name('account');
Route::get('/mon-compte/modifier', [AccountController::class, 'edit'])->name('account.edit');
Route::post('/mon-compte/modifier', [AccountController::class, 'update'])->name('account.update');

/*---Blog---*/
Route::get('/creer-un-blog', [BlogController::class, 'index'])->name('blog');
Route::post('/creer-un-blog', [BlogController::class, 'create'])->name('blog.create');

