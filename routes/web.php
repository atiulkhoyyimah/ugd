<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RekamMedisController;

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

Route::get('/', function () {
    return view('welcome');
});

// routes/web.php


Route::prefix('rekam-medis')->group(function () {
    Route::get('/', [RekamMedisController::class, 'index'])->name('rekam-medis.index');
    Route::get('/detail/{id}', [RekamMedisController::class, 'detail'])->name('rekam-medis.detail');
    Route::get('/cetak-pasien/{id}', [RekamMedisController::class, 'cetakPasien'])->name('rekam-medis.cetak-pasien');
    Route::get('/cetak-pemeriksaan/{id}', [RekamMedisController::class, 'cetakPemeriksaan'])->name('rekam-medis.cetak-pemeriksaan');
});
