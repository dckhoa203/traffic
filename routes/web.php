<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProvinceController;
use App\Http\Controllers\DistrictController;

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

Route::get('/admin', function () {
    return view('layouts.admin');
});

Route::prefix('supadmin')->group(function() {
    Route::prefix('provinces')->group(function () {
        Route::get('/', [ProvinceController::class, 'index'])->name('provinces.index');
        Route::get('/edit/{id}', [ProvinceController::class, 'edit'])->name('provinces.edit');
        Route::post('/update/{id}', [ProvinceController::class, 'update'])->name('provinces.update');
    });

    Route::prefix('districts')->group(function () {
        Route::get('/', [DistrictController::class, 'index'])->name('districts.index');
        Route::get('/edit/{id}', [DistrictController::class, 'edit'])->name('districts.edit');
        Route::post('/update/{id}', [DistrictController::class, 'update'])->name('districts.update');
    });
});