<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProduksController;
use App\Http\Controllers\UkuransController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\HakAksesController;
use App\Http\Controllers\SettingsController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\KategorisController;
use App\Http\Controllers\KeranjangController;
use App\Http\Controllers\MitraUmkmController;
use App\Http\Controllers\FotoProduksController;
use App\Http\Controllers\SubKategoriController;
use Illuminate\Foundation\Auth\EmailVerificationRequest;

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

Route::middleware('guest')->group(function () {
    Route::get('/', [AuthController::class, 'index'])->name('login');
    Route::get('/kategori', [KategorisController::class, 'register']);
    Route::post('/login', [AuthController::class, 'login']);
    Route::get('/register', [AuthController::class, 'register']);
    Route::post('/register', [AuthController::class, 'register_action']);
    Route::get('/keranjang', [KeranjangController::class, 'index']);
    Route::get('/produk/detail', [ProduksController::class, 'index']);
    Route::get('/produk', [ProduksController::class, 'produk']);
});



// Rute verifikasi email
Route::middleware('auth')->group(function () {
    Route::get('/email/verify', function () {
        return view('auth.verify-email');
    })->name('verification.notice');

    Route::get('/email/verify/{id}/{hash}', function (EmailVerificationRequest $request) {
        $request->fulfill();
        return redirect('/home');
    })->middleware('signed')->name('verification.verify');

    Route::post('/email/verification-notification', function (Request $request) {
        $request->user()->sendEmailVerificationNotification();

        return back()->with('message', 'Verifikasi Email Berhasil di Kirim');
    })->middleware(['auth', 'throttle:6,1'])->name('verification.send');

    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
});





// Rute untuk pengguna yang telah diverifikasi
Route::middleware(['auth', 'verified'])->group(function () {

    // Rute untuk pengguna setelah login
    Route::get('/home', [AuthController::class, 'AuthRole__']);

    // Rute untuk admin
    Route::middleware('userAkses:admin')->group(function () {
        Route::get('/admin/dashboard', [DashboardController::class, 'dashboard']);
        Route::resource('/admin-produk', ProduksController::class)->only(['index', 'create', 'destroy', 'edit', 'update']);
        Route::post('/admin-produk/store', [ProduksController::class, 'store']);

        Route::get('/admin/foto-produk', [FotoProduksController::class, 'index']);
        Route::post('/admin/foto-produk/{id}/update', [FotoProduksController::class, 'update']);



        Route::resource('/admin/kategori', KategorisController::class)->only(['index', 'store', 'update', 'destroy']);
        Route::get('/kategori/{id}/subs', [SubKategoriController::class, 'index']);
        Route::post('/kategori/{id}/subs', [SubKategoriController::class, 'store']);
        Route::post('/kategori/{id}/{sub_id}/subs', [SubKategoriController::class, 'update']);
        Route::get('/kategori/{sub_id}/subs_hapus', [SubKategoriController::class, 'destroy']);
        // Profile
        Route::get('/settings', [SettingsController::class, 'index']);
        Route::get('/profile/{token}', [SettingsController::class, 'profile']);
        Route::get('/profile/{token}/edit', [SettingsController::class, 'profile_edit']);
        Route::post('/profile/{token}/edit', [SettingsController::class, 'profile_edit_action']);

        Route::resource('/admin/hak-akses',  HakAksesController::class)->only(['index', 'create', 'store', 'destroy', 'edit', 'update', 'detail']);
        Route::get('/hak-akses/{token}/details',  [HakAksesController::class, 'details']);

        // Upload CKEditor
        Route::post('/upload/ckeditor', [ProduksController::class, 'ckeditor'])->name('ckeditor.upload');
    });


    // Rute untuk mitra
    Route::middleware('userAkses:mitra')->group(function () {
        Route::get('/{role}/dashboard', [DashboardController::class, 'dashboard']);
        // Route::resource('/mitra-produk', ProduksController::class)->only(['index', 'store', 'destroy', 'edit', 'update']);
        Route::get('/mitra-produk', [ProduksController::class, 'index']);
        Route::get('/mitra-produk/create', [ProduksController::class, 'create']);
        Route::post('/mitra-produk/create', [ProduksController::class, 'store']);
        Route::get('/mitra-produk{id}/edit', [ProduksController::class, 'edit']);
        Route::post('/mitra-produk{id}/edit', [ProduksController::class, 'update']);
        Route::get('/mitra-produk{id}/hapus', [ProduksController::class, 'destroy']);

        Route::resource('/mitra/foto-produk', FotoProduksController::class)->only(['index', 'update']);

        // Route::resource('/mitra/hak-akses',  HakAksesController::class)->only(['index', 'create', 'store', 'destroy', 'edit', 'update']);
    });

    // Rute untuk customer
    Route::middleware('userAkses:customer')->group(function () {
        Route::get('/beranda', [CustomerController::class, 'index']);
        Route::get('/produk', [CustomerController::class, 'produk']);
        Route::get('/produk/{token}/detail', [CustomerController::class, 'produk_detail']);

        Route::post('/checkout', [CheckoutController::class, 'Checkout'])->name('checkout.index');
        Route::post('/checkout/process', [CheckoutController::class, 'processCheckout'])->name('checkout.process');
        Route::get('/transaksi/{id}', [CheckoutController::class, 'transaksi'])->name('checkout.index');

        // Profile
        Route::get('/profile/{token}', [SettingsController::class, 'profile']);
        Route::get('/profile/{token}/edit', [SettingsController::class, 'profile_edit']);
        Route::post('/profile/{token}/edit', [SettingsController::class, 'profile_edit_action']);
        // UMKM
        Route::get('/umkm/{id}', [MitraUmkmController::class, 'show'])->name('umkm.show');

        Route::get('/daftar/umkm', [MitraUmkmController::class, 'daftar']);
        Route::post('/daftar/umkm', [MitraUmkmController::class, 'daftar_action']);
        Route::get('/selfie', [MitraUmkmController::class, 'selfie']);
        Route::post('/selfie/{token}/update', [MitraUmkmController::class, 'update_action']);
    });

    // Logout
    Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
});
