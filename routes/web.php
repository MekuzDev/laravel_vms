<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LocationsController;
use App\Http\Controllers\VehicleTypesController;
use App\Http\Controllers\VehicleUSersController;
use App\Http\Controllers\VehicleStatusController;
use App\Http\Controllers\VregController;

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
Route::get('/vstatus',[VehicleStatusController::class,'home'])->name('vstatus-home');
Route::post('/vstatus/create',[VehicleStatusController::class,'createvstatus'])->name('vstatus-create');
Route::put('/vstatus/{id}/edit',[VehicleStatusController::class,'editvstatus'])->name('vstatus-edit');
Route::delete('/vstatus/{id}/delete',[VehicleStatusController::class,'deletevstatus'])->name('vstatus-delete');

// Vehicle Models Routes
Route::get('/vmodel',[VehicleTypesController::class,'home'])->name('vmodel-home');
Route::post('/vmodel/create',[VehicleTypesController::class,'createvmodel'])->name('vmodel-create');
Route::put('/vmodel/{id}/edit',[VehicleTypesController::class,'editvmodel'])->name('vmodel-edit');
Route::delete('/vmodel/{id}/delete',[VehicleTypesController::class,'deletevmodel'])->name('vmodel-delete');


// Vehicle Registration Routes
Route::get('/vreg',[VregController::class,'home'])->name('vreg-home');
Route::get('/vreg/create',[VregController::class,'create'])->name('vreg-create');
Route::post('/vreg/create',[VregController::class,'store'])->name('vreg-create');
Route::get('/vreg/{regValue}/update',[VregController::class,'updateVreg'])->name('vreg-update');
Route::put('/vreg/{regValue}/update',[VregController::class,'storeVregUpdate'])->name('store-update-store');
