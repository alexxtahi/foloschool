<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

require __DIR__ . '/groutes.php';

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

// Accueil
Route::view('/', 'home')->name('home');
// Envoyer un message à l'assistance
Route::post('/send-message', [HomeController::class, 'sendMessage'])->name('sendMessage');
// A propos
Route::view('/about', 'about')->name('about');
// Avantages
Route::view('/avantages', 'avantages')->name('avantages');
// Contact
Route::view('/contact', 'contact')->name('contact');
