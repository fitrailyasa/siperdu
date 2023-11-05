<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Middleware\Admin;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Admin\AdminDashboardController;
use App\Http\Controllers\Admin\AdminUserController;
use App\Http\Controllers\Admin\AdminBukuController;
use App\Http\Controllers\Admin\AdminKategoriController;
use App\Http\Controllers\Admin\AdminPenerbitController;
use App\Http\Controllers\Admin\AdminRakController;
use App\Http\Controllers\Admin\AdminTransaksiController;
use App\Http\Controllers\Admin\AdminPerpusController;
use App\Http\Controllers\Client\KoleksiController;

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

Route::get('/', [HomeController::class, 'index'])->name('beranda');

Route::get('/kontak', function () {return view('client.kontak');})->name('kontak');

Route::get('/koleksi-buku', [KoleksiController::class, 'index'])->name('koleksi-buku');
Route::get('/detail-buku/{id}', [KoleksiController::class, 'show'])->name('detail-buku');

Auth::routes();

Route::middleware(['auth'])->group(function () {

  Route::get('/dashboard', [AdminDashboardController::class, 'index'])->name('dashboard');
  Route::post('/logout', [LoginController::class, 'logout'])->name('logout');
  Route::get('/logout', [LoginController::class, 'logout'])->name('logout');

  // CMS ADMINITRASTOR
  Route::middleware([Admin::class])->name('admin.')->prefix('admin')->group(function () {
      Route::get('/', [HomeController::class, 'index'])->name('beranda');
      Route::get('/dashboard', [AdminDashboardController::class, 'index'])->name('dashboard');
      Route::resource('user', AdminUserController::class);
      Route::resource('buku', AdminBukuController::class);
      Route::resource('kategori', AdminKategoriController::class);
      Route::resource('penerbit', AdminPenerbitController::class);
      Route::resource('rak', AdminRakController::class);
      Route::resource('transaksi', AdminTransaksiController::class);
      Route::get('/kartu', [AdminPerpusController::class, 'indexKartu'])->name('kartu');
      Route::get('/struktur', [AdminPerpusController::class, 'indexStruktur'])->name('struktur');
    });
  
});
