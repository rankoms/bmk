<?php

use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

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
//     return view('welcome');
// });
Route::get('/', [HomeController::class, 'index'])->name('index');

Route::get('/percetakan', [HomeController::class, 'percetakan'])->name('percetakan');
Route::get('/sistem', [HomeController::class, 'sistem'])->name('sistem');
Route::get('/website', [HomeController::class, 'website'])->name('website');
Route::get('/furniture', [HomeController::class, 'furniture'])->name('furniture');
Route::get('/tiketbersama', [HomeController::class, 'tiketbersama'])->name('tiketbersama');
Route::get('/eventbersama', [HomeController::class, 'eventbersama'])->name('eventbersama');

Route::post('/contact/store', [ContactController::class, 'store'])->name('contact.store');
