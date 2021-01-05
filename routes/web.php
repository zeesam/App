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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/personal/index', [App\Http\Controllers\PersonalController::class, 'index']);
Route::post('/personal/store', [App\Http\Controllers\PersonalController::class, 'store']);
Route::get('/personal/edit/{id}', [App\Http\Controllers\PersonalController::class, 'edit']);
Route::post('/personal/update/{id}', [App\Http\Controllers\PersonalController::class, 'update']);
