<?php

use App\Http\Controllers\Admin\MerkController;
use App\Http\Controllers\Admin\PemasukanController;
use App\Http\Controllers\Admin\PengeluaranController;
use App\Http\Controllers\Admin\PeralatanController;
use App\Http\Controllers\Admin\PersonilController;
use App\Http\Controllers\Admin\PortofolioController;
use App\Http\Controllers\Admin\ProyekController;
use App\Http\Controllers\Admin\TypeController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\KontakController;
use App\Http\Controllers\Admin\PortofolioGambarController;
use App\Http\Controllers\PermissionController;
use App\Http\Controllers\Admin\ProfileController;
use App\Http\Controllers\RoleController;
use Illuminate\Support\Facades\Route;

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


Auth::routes();

// Route::get('/', function)

// admin
Route::middleware('auth')->name('admin.')->prefix('admin')->group(function () {
    Route::get('/', [DashboardController::class, 'index'])->name('dashboard');
    Route::resource('users', UserController::class);
    Route::get('/profile', [ProfileController::class, 'index'])->name('profile.index');
    Route::post('/profile', [ProfileController::class, 'update'])->name('profile.update');

    // roles
    Route::resource('roles', RoleController::class)->except('show');
    // permissions
    Route::resource('permissions', PermissionController::class)->except('show');
    // proyek
    Route::resource('proyek', ProyekController::class);
    Route::resource('merk', MerkController::class);
    Route::resource('type', TypeController::class);
    Route::resource('peralatan', PeralatanController::class);
    Route::resource('personil', PersonilController::class);
    Route::resource('pemasukan', PemasukanController::class);
    Route::resource('pengeluaran', PengeluaranController::class);
    Route::get('kontak', [KontakController::class, 'index'])->name('kontak.index');
    Route::post('kontak', [KontakController::class, 'update'])->name('kontak.update');
    Route::resource('portofolio', PortofolioController::class);
    Route::get('portofolio-gambar', [PortofolioGambarController::class, 'index'])->name('portofolio-gambar.index');
    Route::get('portofolio-gambar/create', [PortofolioGambarController::class, 'create'])->name('portofolio-gambar.create');
    Route::post('portofolio-gambar/create', [PortofolioGambarController::class, 'store'])->name('portofolio-gambar.store');
    Route::delete('portofolio-gambar/delete', [PortofolioGambarController::class, 'destroy'])->name('portofolio-gambar.destroy');
});
