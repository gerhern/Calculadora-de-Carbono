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

Route::view('/', 'index')->name('home');
Route::get('calcular', [CompensationController::class, 'calculate'])->name('calcular');
Route::view('compensar', 'offset')->name('offset');
Route::get('medios-alternativos-de-transporte', [CompensationController::class, 'transport'])->name('transport');

// Route::get('/', function () {
//     return view('welcome');
// });
