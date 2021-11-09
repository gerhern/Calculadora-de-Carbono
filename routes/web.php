<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CompensationController;

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

// Vistas sin logica
Route::view('/', 'index')->name('home');
Route::view('compensar', 'offset')->name('offset');
Route::view('bicicleta-como-medio-de-transporte', 'bicycle')->name('bicycle');

// Vistas con logica
Route::get('calcular', [CompensationController::class, 'calculate'])->name('calcular');
Route::get('medios-alternativos-de-transporte', [CompensationController::class, 'transport'])->name('transport');

// Route::get('/', function () {
//     return view('welcome');
// });
