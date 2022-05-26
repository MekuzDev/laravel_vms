<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LocationsController;
use App\Http\Controllers\VehicleUSersController;

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
    return view('admin.dashboard');
})->name('dashboard');

/* This is a way to define routes in Laravel. */
Route::get('/locations',[LocationsController::class,'home'])->name('location-home');
Route::post('/locations/create',[LocationsController::class,'addLocation'])->name('location-create');
Route::put('/locations/{id}/edit',[LocationsController::class,'editLocation'])->name('location-edit');
Route::delete('/locations/{id}/delete',[LocationsController::class,'deleteLocation'])->name('location-delete');

// Vehicle users routes
Route::get('/vusers',[VehicleUSersController::class,'home'])->name('vuser-home');
Route::post('/vusers/create',[VehicleUSersController::class,'createvuser'])->name('vuser-create');
Route::put('/vusers/{id}/edit',[VehicleUSersController::class,'editvuser'])->name('vuser-edit');
Route::delete('/vusers/{id}/delete',[VehicleUSersController::class,'deletevuser'])->name('vuser-delete');

// Vehicle Status

