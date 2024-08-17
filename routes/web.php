<?php

use App\Http\Controllers\Auth\ClientController;
use App\Http\Controllers\ProvincesController;
use App\Http\Controllers\DivisionsController;
use App\Http\Controllers\DistrictsController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Artisan;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/login', [ClientController::class, 'login']);
Route::post('/login', [ClientController::class, 'login_submit'])->name('login_submit');

// Provinces
Route::resource('provinces', ProvincesController::class);
Route::resource('divisions', DivisionsController::class);
Route::resource('districts', DistrictsController::class);


