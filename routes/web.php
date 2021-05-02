<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MahasiswaController;
use Illuminate\Http\Request;
use App\Http\Controllers\ArticleController;
use App\Models\Article;
use App\Models\Mahasiswa;

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

Route::resource('mahasiswa', MahasiswaController::class);
Route::get('/cari', [MahasiswaController::class,'cari'])->name('mahasiswa.cari');
Route::get('/tampil', [MahasiswaController::class,'tampil'])->name('mahasiswa.tampil');
Route::get('/hasil/{id}', [MahasiswaController::class,'hasil'])->name('mahasiswa.nilai');
Route::resource('articles', ArticleController::class);
Route::get('/mahasiswa_pdf/{mahasiswa}', [MahasiswaController::class, 'cetak_pdf'])->name('mahasiswa.cetak');