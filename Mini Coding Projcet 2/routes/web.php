<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PemilikController;
use App\Http\Controllers\CatController;
use App\Http\Controllers\PenyakitController;
use App\Http\Controllers\GejalaController;
use App\Http\Controllers\DashboardController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and assigned to the "web"
| middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});



Route::get('/data-pemilik', [PemilikController::class, 'index'])->name('data-pemilik');
Route::get('/Pemilik/cetak-pemilik', [PemilikController::class, 'exportpdf'])->name('Pemilik.cetak-pemilik');
Route::post('/tambah-pemilik', [PemilikController::class, 'store'])->name('tambah-pemilik');
Route::put('/update-pemilik/{id}', [PemilikController::class, 'update'])->name('update-pemilik');
Route::delete('/hapus-pemilik/{id}', [PemilikController::class, 'destroy'])->name('hapus-pemilik');

Route::get('/data-kucing', [CatController::class, 'index'])->name('data-kucing');
Route::post('/tambah-kucing', [CatController::class, 'store'])->name('tambah-kucing');
Route::put('/update-kucing/{id}', [CatController::class, 'update'])->name('update-kucing');
Route::delete('/hapus-kucing/{id}', [CatController::class, 'destroy'])->name('hapus-kucing');

Route::get('/data-penyakit', [PenyakitController::class, 'index'])->name('data-penyakit');
Route::post('/tambah-penyakit', [PenyakitController::class, 'store'])->name('tambah-penyakit');
Route::put('/update-penyakit/{id}', [PenyakitController::class, 'update'])->name('update-penyakit');
Route::delete('/hapus-penyakit/{id}', [PenyakitController::class, 'destroy'])->name('hapus-penyakit');

Route::get('/data-gejala', [GejalaController::class, 'index'])->name('data-gejala');
Route::post('/tambah-gejala', [GejalaController::class, 'store'])->name('tambah-gejala');
Route::put('/update-gejala/{id}', [GejalaController::class, 'update'])->name('update-gejala');
Route::delete('/hapus-gejala/{id}', [GejalaController::class, 'destroy'])->name('hapus-gejala');

