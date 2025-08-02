<?php

use App\Http\Controllers\Controller;
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

Route::get('/',[Controller::class, 'index'])-> name('welcome');
Route::get('/home', [Controller::class, 'home'])-> name('home');
Route::get('/siswa', [Controller::class, 'siswa'])-> name('siswa');
