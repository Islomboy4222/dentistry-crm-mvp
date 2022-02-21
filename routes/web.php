<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PatientsController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\TreatmentsController;



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
    return view('auth.login');
});


// Admin

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('/dashboard');
})->name('dashboard');

Route::middleware('auth')->group(function() {
    Route::get('/search', [SearchController::class, 'search'])->name('search');
    Route::resource('/patients', PatientsController::class);
    Route::get('/treatments/{id}', [TreatmentsController::class, 'treatments'])->name('treatments');
    Route::post('/store', [TreatmentsController::class, 'store'])->name('store');
    

});
