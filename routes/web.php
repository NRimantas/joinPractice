<?php

use App\Http\Controllers\CarController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

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
    return view('layouts.home');
})->name('home');


//  USER READ AND CREATE
Route::get('/welcome', [UserController::class, 'index'])->name('welcome');
Route::post('/welcome', [UserController::class, 'create'])->name('create');

// USER DELETE
Route::post('/welcome/{id}', [UserController::class, 'destroy'])->name('delete');

// USER EDIT
Route::get('/edit/{id}', [UserController::class, 'edit'])->name('edit');
Route::post('/edit/{id}', [UserController::class, 'update'])->name('update');

// SHOW ALL CARS
Route::get('welcome/cars', [CarController::class, 'index'])->name('cars.all-cars');

// USER CARS SHOW
Route::get('welcome/{id}/cars', [CarController::class, 'show'])->name('cars.index');

// ADD NEW CAR FOR USER
Route::get('welcome/{id}/cars/create', [CarController::class, 'create'])->name('cars.create');
Route::post('welcome/{id}/cars/store', [CarController::class, 'store'])->name('cars.store');

// CAR DELETE
Route::post('/welcome/{id}/cars/{cid}', [CarController::class, 'destroy'])->name('cars.delete');

// CAR EDIT
Route::get('/welcome/{id}/cars/{cid}/edit', [CarController::class, 'edit'])->name('cars.edit');
Route::post('/welcome/{id}/cars/{cid}/update', [CarController::class, 'update'])->name('cars.update');


// user/{uid}/car/{cid}
