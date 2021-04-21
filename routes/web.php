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
Route::get('/cari', [MahasiswaController::class,'cari']);
Route::get('/tampil', [MahasiswaController::class,'tampil']);
Route::get('/nilai/{id}', [MahasiswaController::class,'nilai'])->name('mahasiswa.nilai');
Route::resource('articles', ArticleController::class);