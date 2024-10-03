<?php

use App\Http\Controllers\BuahController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
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

Route::get('/dashboard', [UserController::class, 'dashboard']);


Route::get('/', [HomeController::class, 'login']);
Route::post('/auth',[UserController::class, 'authentication']);
Route::get('/tampilan', [HomeController::class, 'show']);
// Route::get('/manfaat', [HomeController::class, 'manfaat']);
Route::get('/manfaata', [HomeController::class, 'manfaata']);
Route::get('/manfaatk', [HomeController::class, 'manfaatk']);
Route::get('/manfaatap', [HomeController::class, 'manfaatap']);
Route::get('/manfaatd', [HomeController::class, 'manfaatd']);
Route::get('/manfaatm', [HomeController::class, 'manfaatm']);
Route::get('/manfaatp', [HomeController::class, 'manfaatp']);
Route::get('/manfaats', [HomeController::class, 'manfaats']);
Route::get('/manfaatt', [HomeController::class, 'manfaatt']);
Route::get('/informasi', [HomeController::class, 'informasi']);
Route::get('/infoapelh', [HomeController::class, 'infoapelh']);
// Route::get('/dashboard', [HomeController::class, 'dashboard']);
Route::post('/search', [BuahController::class,'search']);


Route::get('/index', [BuahController::class, 'show']);
Route::post('/search', [BuahController::class, 'search']);
Route::get('/buah/create', [BuahController::class, 'create']);
Route::post('/buah/create', [BuahController::class, 'add']);
Route::get('/buah/edit/{id}', [BuahController::class, 'edit']);
Route::post('/buah/update/{id}', [BuahController::class, 'update']);
Route::get('/buah/delete/{id}', [BuahController::class, 'delete']);
