<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MahasiswaController;
use Illuminate\Http\Request;

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
Route::get('mahasiswas/cari/',[MahasiswaController::class, 'search']);
Route::get('/mahasiswa/nilai/cetak_khs/{id}',[MahasiswaController::class, 'cetak_khs']);
Route::resource('mahasiswas', MahasiswaController::class);
Route::get('mahasiswas/nilai/{nim}', [MahasiswaController::class, 'nilai'])->name('mahasiswas.nilai');

Route::get('/', function () {
    return view('welcome');
});
