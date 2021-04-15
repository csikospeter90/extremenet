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
Route::get('/', [\App\Http\Controllers\SiteController::class, 'index']);

Route::post('/patient/create', [\App\Http\Controllers\PatientController::class, 'store'])->name('patient.store');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::namespace('Admin')->prefix('admin')->name('admin.')->group(function () {

    Route::get('/login', [\App\Http\Controllers\Admin\LoginController::class, 'index'])->name('index');

    Route::post('/login', [\App\Http\Controllers\Admin\LoginController::class, 'login'])->name('login');

    Route::middleware('auth')->group(function () {

        Route::get('/', function (){
            return redirect('/admin/vaccine');
        });

        Route::post('/logout', [\App\Http\Controllers\Admin\LoginController::class, 'logout'])->name('logout');

    });
});

Route::middleware('auth')->prefix('admin')->group(function () {

    Route::resource('vaccine', \App\Http\Controllers\Admin\VaccineController::class)->except(['show', 'create', 'edit']);

    Route::resource('shipment', \App\Http\Controllers\Admin\ShimpentController::class)->except(['show', 'create', 'edit']);

    Route::get('registrations', [\App\Http\Controllers\PatientController::class,'index'])->name('admin.registrations');

});
