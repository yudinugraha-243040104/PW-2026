<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Master\PegawaiController;

Route::get('/', function () {
    return view('auth.login');
});

Route::get('/latihan', function () {
    return view('latihan');
});

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');

//pegawai
Route::prefix('/pegawai')->group(function () {
    Route::get('/', [PegawaiController::class, 'index'])->name('index.pegawai');
    Route::get('/create', [PegawaiController::class, 'create'])->name('create.pegawai');
    Route::post('/store', [PegawaiController::class, 'store'])->name('store.pegawai');
    Route::get('/edit/{uuid}', [PegawaiController::class, 'edit'])->name('edit.pegawai');
    Route::post('/update/{uuid}', [PegawaiController::class, 'update'])->name('update.pegawai');
    Route::get('/delete/{uuid}', [PegawaiController::class, 'delete'])->name('delete.pegawai');
});


