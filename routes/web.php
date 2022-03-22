<?php

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

Route::get('/', [HomeController::class,'homeView'] )->name('home');
Route::get('/getting-started', [HomeController::class,'get_startedView'] )->name('get_started');
Route::get('/trainings', [HomeController::class,'trainingView'] )->name('training');
Route::get('/ressources', [HomeController::class,'resourcesView'] )->name('ressources');
Route::redirect('/accueil', '/', 301);
