<?php

use App\Http\Controllers\BerkasController;
use App\Http\Controllers\BlokController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PengaturanController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TipeRumahController;
use App\Http\Controllers\WelcomeController;
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

Route::get('/', [WelcomeController::class, 'index'])->middleware('record.visitor');
Route::get('tipe/{tipe}', [WelcomeController::class, 'show'])->name('tipe');
Route::get('data-blok/{blok}', [WelcomeController::class, 'showBlok'])->name('data-blok');

Route::get('/dashboard', [DashboardController::class, 'index'])->middleware(['auth', 'verified'])->name('dashboard');

Route::group(['prefix' => 'admin', 'middleware' => ['auth', 'is_admin']], function () {
    Route::resource('tipe-rumah', TipeRumahController::class);
    Route::resource('blok', BlokController::class);
    Route::get('berkas/verifikasi', [BlokController::class, 'verifikasi'])->name('berkas.verifikasi');
    Route::get('berkas/{berkas}/approve', [BlokController::class, 'approve'])->name('berkas.approve');
    Route::get('berkas/{tipeRumah}/customer', [BlokController::class, 'customer'])->name('berkas.customer');
    Route::get('blok/{blok}/denah', [BlokController::class, 'denah'])->name('blok.denah');
    Route::get('blok/{blok}/add-denah', [BlokController::class, 'createDenah'])->name('blok.add-denah');
    Route::post('blok/{blok}/store-denah', [BlokController::class, 'storeDenah'])->name('blok.store-denah');
    Route::delete('blok/{denahBlok}/{blok}/destroy-denah', [BlokController::class, 'destroyDenah'])->name('blok.destroy-denah');
    Route::resource('pengaturan', PengaturanController::class);
});

Route::middleware('auth')->group(function () {
    Route::resource('berkas', BerkasController::class);

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
