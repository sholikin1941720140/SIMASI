<?php

use Illuminate\Support\Facades\Route;
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

//Master Route
Route::get('/dosen', [MasterController::class, 'dosen'])->name('dosen.index');
Route::get('/mata-kuliah', [MasterController::class, 'matakuliah'])->name('matakuliah.index');
Route::get('/kelas', [MasterController::class, 'kelas'])->name('kelas.index');
Route::get('/getNip', [JadwalMengajarController::class, 'getNip'])->name('getNip');

//Admin Route
Route::get('/jadwal', [AdminController::class, 'index'])->name('admin-jadwal.index');
Route::get('/jadwal-mengajar', [JadwalMengajarController::class, 'index'])->name('admin-jadwal-mengajar.index');
Route::get('/tambah-jadwal-mengajar', [JadwalMengajarController::class, 'create'])->name('admin-tambah-jadwal-mengajar.create');
Route::post('/tambah-jadwal-mengajar', [JadwalMengajarController::class, 'store'])->name('admin-tambah-jadwal-mengajar.store');
Route::get('/edit-jadwal-mengajar/edit/{id}', [JadwalMengajarController::class], 'edit')->name('admin-edit-jadwal-mengajar.edit');
Route::post('/update-jadwal-mengajar/update/{id}', [JadwalMengajarController::class], 'update')->name('admin-update-jadwal-mengajar.update');
Route::get('/delete-jadwal-mengajar/delete/{id}', [JadwalMengajarController::class], 'destroy')->name('admin-delete-jadwal-mengajar.destroy');