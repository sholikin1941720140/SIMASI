<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JadwalController;
use App\Http\Controllers\AbsensiController;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Master\MasterController;
use App\Http\Controllers\JadwalMengajarController;

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

Route::get('/', [AuthController::class, 'login'])->name('login');
Route::post('/authenticate', [AuthController::class, 'authenticate'])->name('authenticate');
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
Route::get('/dashboard', [AuthController::class, 'dashboard'])->name('dashboard.index');
Route::get('/absensi', [AbsensiController::class, 'index'])->name('absensi.index');
Route::get('/profile', [MahasiswaController::class, 'index'])->name('mahasiswa.index');
    
//Admin Route
Route::get('/jadwal-mengajar', [JadwalMengajarController::class, 'index'])->name('jadwal-mengajar.index');
Route::get('/jadwal-mengajar/create', [JadwalMengajarController::class, 'create'])->name('jadwal-mengajar.create');
Route::post('/jadwal-mengajar/store', [JadwalMengajarController::class, 'store'])->name('jadwal-mengajar.store');
Route::get('/jadwal-mengajar/edit/{jadwal_mengajar}', [JadwalMengajarController::class], 'edit')->name('jadwal-mengajar.edit');
Route::post('/jadwal-mengajar/update/{jadwal_mengajar}', [JadwalMengajarController::class], 'update')->name('jadwal-mengajar.update');
Route::get('/jadwal-mengajar/delete/{jadwal_mengajar}', [JadwalMengajarController::class], 'destroy')->name('jadwal-mengajar.destroy');

Route::get('/jadwal', [JadwalController::class, 'index'])->name('jadwal.index');
Route::get('/jadwal/create', [JadwalController::class, 'create'])->name('jadwal.create');
Route::post('/jadwal/store', [JadwalController::class, 'store'])->name('jadwal.store');

//Master Route
Route::get('/dosen', [MasterController::class, 'dosen'])->name('dosen.index');
Route::get('/mata-kuliah', [MasterController::class, 'matakuliah'])->name('matakuliah.index');
Route::get('/kelas', [MasterController::class, 'kelas'])->name('kelas.index');
Route::get('/getNip', [JadwalMengajarController::class, 'getNip'])->name('getNip');