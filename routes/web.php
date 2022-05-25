<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LocationsController;

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

Route::get('/locations',[LocationsController::class,'home'])->name('location-home');
Route::post('/locations/create',[LocationsController::class,'addLocation'])->name('location-create');
Route::put('/locations/{id}/edit',[LocationsController::class,'editLocation'])->name('location-edit');
/* Deleting the location with the id of `{id}` */
Route::delete('/locations/{id}/delete',[LocationsController::class,'deleteLocation'])->name('location-delete');
