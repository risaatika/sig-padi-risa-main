<?php

use App\Http\Controllers\HarvestDataController;
use App\Http\Controllers\MapController;
use App\Http\Controllers\ResultController;
use App\Http\Controllers\SubdistrictController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::view('/', 'home')->name('home');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::resource('data', HarvestDataController::class)->except('show')
        ->names('harvest-data')
        ->parameter('data', 'harvest_data');

    Route::resource('kecamatan', SubdistrictController::class)
        ->names('subdistricts')
        ->parameter('kecamatan', 'subdistrict');

    Route::get('hasil', ResultController::class)->name('result');
    Route::get('map/{year}', MapController::class)->name('map');
});
