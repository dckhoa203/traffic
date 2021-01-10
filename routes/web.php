<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Hash;
use App\Http\Controllers\ProvinceController;
use App\Http\Controllers\DistrictController;
use App\Http\Controllers\TollStationController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\StatisticController;
use App\Http\Controllers\VehicleController;
use App\Http\Controllers\VehicleTypeController;

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

Route::get('/', [UserController::class, 'get_login']);
Route::post('/postlogin', [UserController::class, 'post_login'])->name('postlogin');
Route::get('/logout', [UserController::class, 'logout'])->name('logout');

Route::get('/hash/{value}', function ($value) {
    return Hash::make($value);
});

// Route::get('/statistics', function () {
//     return view('pages.statistics.index');
// });

// Route::get('/test', [StatisticController::class, 'week']);
Route::group(['middleware' => ['checklogin']], function () {
    Route::group(['middleware' => ['checkadmin']], function () {
        Route::prefix('admin')->group(function() {
            Route::get('/', [VehicleController::class, 'index']);
            Route::get('/', [ProvinceController::class, 'index']);
            Route::prefix('provinces')->group(function () {
                Route::get('/', [ProvinceController::class, 'index'])->name('provinces.index');
                Route::get('/edit/{id}', [ProvinceController::class, 'edit'])->name('provinces.edit');
                Route::post('/update/{id}', [ProvinceController::class, 'update'])->name('provinces.update');
            });

            Route::prefix('districts')->group(function () {
                Route::get('/', [DistrictController::class, 'index'])->name('districts.index');
                Route::get('/edit/{id}', [DistrictController::class, 'edit'])->name('districts.edit');
                Route::post('/update/{id}', [DistrictController::class, 'update'])->name('districts.update');
                Route::post('/get_district_city', [DistrictController::class, 'get_district_city'])->name('district.get_district_city');
            });

            Route::prefix('tollstations')->group(function () {
                Route::get('/', [TollStationController::class, 'index'])->name('tollstations.index');
                Route::get('/add', [TollStationController::class, 'add'])->name('tollstations.add');
                Route::post('/store', [TollStationController::class, 'store'])->name('tollstations.store');
                Route::get('/edit/{id}', [TollStationController::class, 'edit'])->name('tollstations.edit');
                Route::post('/update/{id}', [TollStationController::class, 'update'])->name('tollstations.update');
                Route::post('/destroy/{id}', [TollStationController::class, 'destroy'])->name('tollstations.destroy');
            });

            Route::prefix('statistics')->group(function () {
                // Route::get('/', [StatisticController::class, 'index'])->name('statistics');
                Route::get('/day', [StatisticController::class, 'day'])->name('statcistis.day');
                Route::get('/week', [StatisticController::class, 'week'])->name('statistics.week');
                Route::get('/month', [StatisticController::class, 'month'])->name('statistics.month');
            });

            Route::prefix('vehicles')->group(function () {
                Route::get('/', [VehicleController::class, 'index'])->name('vehicles');
            });

            Route::prefix('vehicletypes')->group(function () {
                Route::get('/', [VehicleTypeController::class, 'index'])->name('vehicletypes');
            });
        });
    });

    Route::group(['middleware' => ['checkuser']], function () {
        Route::prefix('user')->group(function() {
            Route::get('/', [VehicleController::class, 'index']);
            Route::prefix('statistics')->group(function () {
                // Route::get('/', [StatisticController::class, 'index'])->name('statistics');
                Route::get('/day', [StatisticController::class, 'day'])->name('statcistis.day');
                Route::get('/week', [StatisticController::class, 'week'])->name('statistics.week');
                Route::get('/month', [StatisticController::class, 'month'])->name('statistics.month');
            });

            Route::prefix('vehicles')->group(function () {
                Route::get('/', [VehicleController::class, 'index'])->name('vehicles');
            });
           
        });
    });
});