<?php

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/admin', function () {
    return view('admin');
})->name('admin_login');


Route::get('login', [\App\Http\Controllers\AuthController::class,'showLoginForm'])->name('get.login');
Route::post('login', [\App\Http\Controllers\AuthController::class,'login'])->name('login');
Route::get('dashboard', [\App\Http\Controllers\AuthController::class,'dashboard'])->name('dashboard');



Route::post('/admin/store', [\App\Http\Controllers\AdminController::class,'store'])->name('store');
Route::get('/dash', [\App\Http\Controllers\AdminController::class,'dashboard'])->name('dashboard');
Route::get('/logout', [\App\Http\Controllers\AdminController::class,'logout'])->name('logout');


Route::post('save', [\App\Http\Controllers\PlayerController::class,'teamadd'])->name('store');
Route::get('player', [\App\Http\Controllers\PlayerController::class,'playinfo'])->name('player.store');

Route::get('team', [\App\Http\Controllers\TeamController::class,'team'])->name('team.store');
Route::post('team', [\App\Http\Controllers\TeamController::class,'cricket_team'])->name('team.store');

Route::get('show', [\App\Http\Controllers\PlayerController::class, 'ajax'])->name('ajax');


//Route::get('/dashboard', [\App\Http\Controllers\LogController::class,'dashboard'])->name('dashboard')->middleware('auth');
//    ->middleware('auth');
