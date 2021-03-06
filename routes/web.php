<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PatientsController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\TreatmentsController;
use App\Http\Controllers\ModalController;
use App\Http\Controllers\ProfileController;

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
    //Patients
    Route::resource('/patients', PatientsController::class);

    //Treatments
    Route::get('/treatments/{id}', [TreatmentsController::class, 'treatments'])->name('treatments');
    Route::post('/store', [TreatmentsController::class, 'store'])->name('store');
    Route::delete('/destroy/{id}', [TreatmentsController::class, 'destroy'])->name('destroy');
    Route::get('/modal/{id}', [ModalController::class, 'modal'])->name('modal');

    //Profile
    Route::get('/profile', [ProfileController::class, 'profile'])->name('profile');
    Route::put('/profileUpdate', [ProfileController::class, 'profileUpdate'])->name('profileUpdate');
    Route::put('/password', [ProfileController::class, 'profilePassword'])->name('profilePassword');
});
