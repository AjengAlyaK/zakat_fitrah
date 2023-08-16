<?php

use App\Models\muzakki;
use Auth\LoginController;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\GoogleCotroller;

use App\Http\Controllers\GoogleController;
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

// Ajeng Alya Kartika Sari (217006056)

Route::get('/', [HomeController::class, 'index'])->middleware('guest');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
Route::get('/dashboard', function () {
        // return view('dashboard', ['muzaki'=>muzakki::all()]);
        return view('dashboard', ['muzaki'=>muzakki::with('kategori_mustahik')->get()]);
    })->middleware(['auth', 'verified'])->name('dashboard');
});

// profile
Route::get('/profile', [HomeController::class, 'profile'])->middleware(['auth', 'verified']);
Route::get('/edit_profile/{id}', [HomeController::class, 'edit_profile'])->middleware(['auth', 'verified']);
// simpan perubahan profile
Route::post('/simpan_perubahan_profile/{id}', [HomeController::class, 'simpan_perubahan_profile'])->middleware(['auth', 'verified']);

// mustahik
Route::get('/dashboard_view/{id}', [HomeController::class, 'v_m'])->middleware(['auth', 'verified']);
Route::get('/tambah_muzaki', [HomeController::class, 'tambah_muzaki'])->middleware(['auth', 'verified']);
Route::post('/save_muzaki', [HomeController::class, 'save_muzaki'])->middleware(['auth', 'verified']);
// Route::get('/kembali_ke_tambah', [HomeController::class, 'kembali_ke_tambah'])->middleware(['auth', 'verified']);
Route::get('/edit_data_muzaki/{id}', [HomeController::class, 'edit_data_muzaki'])->middleware(['auth', 'verified']);
Route::post('/save_perubahan_muzaki/{id}', [HomeController::class, 'save_perubahan_muzaki'])->middleware(['auth', 'verified']);
Route::get('/delete_data_muzaki/{id}', [HomeController::class, 'delete_data_muzaki'])->middleware(['auth', 'verified']);
Route::get('/view_data_muzaki/{id}', [HomeController::class, 'view_data_muzaki'])->middleware(['auth', 'verified']);

// kategori mustahik
Route::get('/kategori_mustahik', [HomeController::class, 'kategori_mustahik'])->middleware(['auth', 'verified']);
Route::get('/tambah_kategori_mustahik', [HomeController::class, 'tambah_kategori_mustahik'])->middleware(['auth', 'verified']);
Route::get('/kembali_ke_tambah_km', [HomeController::class, 'kembali_ke_tambah_km'])->middleware(['auth', 'verified']);
Route::post('/save_kategori_mustahik', [HomeController::class, 'save_kategori_mustahik'])->middleware(['auth', 'verified']);
Route::get('/delete_kategori_mustahik/{id}', [HomeController::class, 'delete_kategori_mustahik'])->middleware(['auth', 'verified']);
Route::get('/edit_kategori_mustahik/{id}', [HomeController::class, 'edit_kategori_mustahik'])->middleware(['auth', 'verified']);
Route::post('/update_kategori_mustahik/{id}', [HomeController::class, 'update_kategori_mustahik'])->middleware(['auth', 'verified']);
Route::get('/kembali_ke_edit_k_mustahik', [HomeController::class, 'kembali_ke_edit_k_mustahik'])->middleware(['auth', 'verified']);

// pengumpulan zakat fitrah
Route::get('/pengumpulan_zakat_fitrah', [HomeController::class, 'list_muzakki'])->middleware(['auth', 'verified']);
Route::get('/bayar_zakat/{id}', [HomeController::class, 'bayar_zakat'])->middleware(['auth', 'verified']);
Route::get('/kembali_pengumpulan', [HomeController::class, 'kembali_pengumpulan'])->middleware(['auth', 'verified']);
Route::post('/muzaki_bayar', [HomeController::class, 'muzaki_bayar'])->middleware(['auth', 'verified']);
Route::get('/muzaki_sudah_bayar', [HomeController::class, 'muzaki_sudah_bayar'])->middleware(['auth', 'verified']);
Route::get('/kembali_ke_bayar', [HomeController::class, 'kembali_ke_bayar'])->middleware(['auth', 'verified']);
Route::get('/delete_muzaki_bayar/{id}', [HomeController::class, 'delete_muzaki_bayar'])->middleware(['auth', 'verified']);
Route::get('/edit_muzaki_bayar/{id}', [HomeController::class, 'edit_muzaki_bayar'])->middleware(['auth', 'verified']);
Route::post('/edit_data_muzaki_bayar/{id}', [HomeController::class, 'edit_data_muzaki_bayar'])->middleware(['auth', 'verified']);

// distribusi zakat fitrah warga
Route::get('/distribusi_zfw', [HomeController::class, 'distribusi_zfw'])->middleware(['auth', 'verified']);
Route::get('/warga_sudah_menerima_zakat', [HomeController::class, 'warga_sudah_menerima_zakat'])->middleware(['auth', 'verified']);
Route::get('/tambah_distribusi/{id}', [HomeController::class, 'tambah_distribusi'])->middleware(['auth', 'verified']);
Route::post('/tambah_mustahik_warga/{id}', [HomeController::class, 'tambah_mustahik_warga'])->middleware(['auth', 'verified']);
Route::get('/edit_mustahik_menerima/{id}', [HomeController::class, 'edit_mustahik_menerima'])->middleware(['auth', 'verified']);
Route::post('/save_edit_mustahik_menerima/{id}', [HomeController::class, 'save_edit_mustahik_menerima'])->middleware(['auth', 'verified']);
Route::get('/delete_mustahik_menerima/{id}', [HomeController::class, 'delete_mustahik_menerima'])->middleware(['auth', 'verified']);

// distribusi zakat fitrah mustahik
Route::get('/distribusi_zfm', [HomeController::class, 'distribusi_zfm'])->middleware(['auth', 'verified']);
Route::get('/tambah_mustahik_lainnya', [HomeController::class, 'tambah_mustahik_lainnya'])->middleware(['auth', 'verified']);
Route::post('/save_mustahik_lainnya', [HomeController::class, 'save_mustahik_lainnya'])->middleware(['auth', 'verified']);
Route::get('/delete_data_ml/{id}', [HomeController::class, 'delete_data_ml'])->middleware(['auth', 'verified']);
Route::get('/edit_data_ml/{id}', [HomeController::class, 'edit_data_ml'])->middleware(['auth', 'verified']);
Route::post('/save_perubahan_ml/{id}', [HomeController::class, 'save_perubahan_ml'])->middleware(['auth', 'verified']);

// laporan pengumpulan zakat fitrah
Route::get('/laporan_pengumpulan', [HomeController::class, 'laporan_pengumpulan'])->middleware(['auth', 'verified']);
Route::get('/print-laporan-pengumpulan', [HomeController::class, 'print_laporan_pengumpulan'])->middleware(['auth', 'verified']);

// laporan distribusi zakat fitrah
Route::get('/laporan_distribusi', [HomeController::class, 'laporan_distribusi'])->middleware(['auth', 'verified']);
Route::get('/print-laporan-distribusi', [HomeController::class, 'print_laporan_distribusi'])->middleware(['auth', 'verified']);

// logout
Route::get('/logout', [HomeController::class, 'logout'])->middleware(['auth', 'verified']);


// Ajeng Alya Kartika Sari (217006056)

// Verify Email

// 1
Route::get('/email/verify', function () {
    return view('auth.verify-email');
})->middleware('auth')->name('verification.notice');

// 2
Route::get('/email/verify/{id}/{hash}', function (EmailVerificationRequest $request) {
    $request->fulfill();

    return redirect('/dashboard');
})->middleware(['auth', 'signed'])->name('verification.verify');

// 3
Route::post('/email/verification-notification', function (Request $request) {
    $request->user()->sendEmailVerificationNotification();

    return back()->with('message', 'Verification link sent!');
})->middleware(['auth', 'throttle:6,1'])->name('verification.send');


// google login

route::get('auth/google',[GoogleController::class, 'googlepage']);
route::get('auth/google/callback', [GoogleController::class, 'googlecallback']);