<?php

use App\Http\Controllers\Aktifitas;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\GerakanController;
use App\Http\Controllers\LandingController;
use App\Http\Controllers\VerificationController;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\EmailVerificationRequest;
use Illuminate\Support\Facades\Auth;
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

Route::get('/', [LandingController::class, 'index'])->name('home');

// Auth::routes();
// Auth::routes(['verify' => true]);
// Route::get('/email/verify', function () {

//     return view('auth.verify');
// })->middleware('auth')->name('verification.notice');
Route::post('/register', [AuthController::class, 'register'])->name('register.post');
Route::middleware(['web'])->group(function () {

    Route::post('/login', [AuthController::class, 'login'])->name('login.bg');

    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
});



Route::group(['middleware' => 'admin'], function () {
    // Route::get('/dashboard', [GerakanController::class, 'index'])->name('dashboard');
    // Route::get('/gerakan', [GerakanController::class, 'tambahForm'])->name('dashboard.tambah.f');
    // Route::post('/gerakan', [GerakanController::class, 'tambah'])->name('dashboard.tambah');
    // Route::get('/update/{id}/edit', [GerakanController::class, 'updateForm'])->name('dashboard.update.f');
    // Route::put('/update/{id}', [GerakanController::class, 'update'])->name('dashboard.update');
    // Route::delete('/delete/{id}', [GerakanController::class, 'destroy'])->name('dashboard.delete');


    // Route::get('/dashboard/pengguna', [PenggunaController::class, 'index'])->name('pengguna');



    Route::get('/dashboard', [Aktifitas::class, 'index'])->name('aktifitas');
    Route::get('/aktifitas', [Aktifitas::class, 'create'])->name('aktifitas.tambah.f');
    Route::post('/aktifitas', [Aktifitas::class, 'store'])->name('aktifitas.tambah');
    Route::get('/updateAktifitas/{id}/edit', [Aktifitas::class, 'updateForm'])->name('aktifitas.update.f');
    Route::put('/updateAktifitas/{id}', [Aktifitas::class, 'update'])->name('aktifitas.update');
    Route::delete('/deleteAktifitas/{id}', [Aktifitas::class, 'destroy'])->name('aktifitas.delete');
});
