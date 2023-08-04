<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

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

//Home
Route::get('/',[HomeController::class, 'index']);
Route::get('/about',[HomeController::class, 'about']);
Route::get('/visi-misi',[HomeController::class, 'visi_misi']);
Route::get('/sejarah-desa',[HomeController::class, 'sejarah']);
Route::get('/perangkat-desa',[HomeController::class, 'perangkat']);
Route::get('/geografis-desa',[HomeController::class, 'geografis']);
Route::get('/lembaga-desa',[HomeController::class, 'lembaga']);
Route::get('/perangkat-desa',[HomeController::class, 'perangkat']);
Route::get('/informasi-publik',[HomeController::class, 'informasi']);


//Auth Admin
Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('/login', [AuthController::class, 'authenticated']);
Route::get('/logout', [AuthController::class, 'logout']);

//Dashboard Admin
Route::get('/dashboard', [DashboardController::class, 'index'])->middleware('auth');