<?php

use App\Http\Controllers\ArtikelController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\EditorController;
use App\Http\Controllers\KategoriController;
use Illuminate\Support\Facades\Auth;
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


Route::get('/', function () {
    return redirect('login');
});

Route::middleware(['auth', 'admin'])->group(function () {
    Route::resource('dashboard', DashboardController::class);
    Route::resource('artikel', ArtikelController::class);
    Route::resource('editor', EditorController::class);
    Route::resource('kategori', KategoriController::class);
    Route::get('artikel/edit/{id}', [ArtikelController::class, 'edit'])->name('artikel.edit');
    Route::get('editor/edit/{id}', [EditorController::class, 'edit'])->name('editor.edit');
    Route::get('kategori/edit/{id}', [KategoriController::class, 'edit'])->name('kategori.edit');
    Route::get('delete1/{id}', [KategoriController::class, 'destroy'])->name('kategori.destroy');
    Route::get('delete2/{id}', [EditorController::class, 'destroy'])->name('editor.destroy');
    Route::get('delete3/{id}', [ArtikelController::class, 'destroy'])->name('artikel.destroy');
    
});

// Route::middleware(['auth', 'editor'])->group(function () {
//     Route::resource('dashboard', DashboardController::class);
//     Route::resource('artikel', ArtikelController::class);
//     Route::resource('kategori', KategoriController::class);
//     Route::get('artikel/edit/{id}', [ArtikelController::class, 'edit'])->name('artikel.edit');
//     Route::get('kategori/edit/{id}', [KategoriController::class, 'edit'])->name('kategori.edit');
//     Route::get('delete1/{id}', [KategoriController::class, 'destroy'])->name('kategori.destroy');
//     Route::get('delete3/{id}', [ArtikelController::class, 'destroy'])->name('artikel.destroy');
// });

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
