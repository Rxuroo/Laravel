<?php

use App\Http\Controllers\PagesController;
use App\Http\Controllers\PenerbitController;
use Illuminate\Support\Facades\Route;

Route::get('/login', [PagesController::class, 'loginPage'])->name('login');
Route::get('/admin', [PagesController::class, 'dashboardAdmin'])->name('dashboardAdmin');
Route::get('/buku', [PagesController::class, 'bukuAdmin'])->name('bukuAdmin');
Route::get('/penulis', [PagesController::class, 'penulisAdmin'])->name('penulisAdmin');
Route::get('/peminjaman', [PagesController::class, 'peminjamanAdmin'])->name('peminjamanAdmin');
Route::get('/pengaturan', [PagesController::class, 'pengaturanAdmin'])->name('pengaturanAdmin');
Route::post('/createpenerbit', [PenerbitController::class, 'create'])->name('admin.penerbit.createpenerbit');
Route::get('/createpenerbit', [PagesController:: class, 'create_penerbit'])->name('create_penerbit');
Route::get('/penerbit', [PenerbitController::class, 'index'])->name('admin.penerbit.index');
Route::post('/penerbit', [PenerbitController::class, 'create']);
Route::get('/penerbit/edit/{penerbit_id}', [PenerbitController::class, 'edit'])->name('penerbit.edit');
Route::put('/penerbit/update/{penerbit_id}', [PenerbitController::class, 'update'])->name('penerbit.update');
Route::delete('/penerbit/{penerbit_id}', [PenerbitController::class, 'delete'])->name('penerbit.delete');
