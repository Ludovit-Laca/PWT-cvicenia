<?php

use Illuminate\Support\Facades\Route;

use \App\Http\Controllers\DogController;

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

// Dog
Route::get('/dogs', [DogController::class, 'showAll']);
Route::get('/dog/show/{id}', [DogController::class, 'findDog']);
Route::post('/dog/create', [DogController::class, 'create']);
Route::post('/dog/update/{id}', [DogController::class, 'update']);
Route::get('/dog/delete/{id}', [DogController::class, 'delete']);

Route::get('/create-form', [DogController::class, 'showInsertForm']);


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
