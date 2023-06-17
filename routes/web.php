<?php

use App\Models\muzakki;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

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

Route::get('/', [HomeController::class, 'index']);

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
Route::get('/dashboard', function () {
        // return view('dashboard', ['muzaki'=>muzakki::all()]);
        return view('dashboard', ['muzaki'=>muzakki::with('kategori_mustahik')->get()]);
    })->name('dashboard');
});

// mustahik
Route::get('/dashboard_view/{id}', [HomeController::class, 'v_m']);
Route::get('/tambah_muzaki', [HomeController::class, 'tambah_muzaki']);
Route::post('/save_muzaki', [HomeController::class, 'save_muzaki']);
Route::get('/kembali_ke_tambah', [HomeController::class, 'kembali_ke_tambah']);
Route::get('/edit_data_muzaki/{id}', [HomeController::class, 'edit_data_muzaki']);
Route::post('/save_perubahan_muzaki/{id}', [HomeController::class, 'save_perubahan_muzaki']);
Route::get('/delete_data_muzaki/{id}', [HomeController::class, 'delete_data_muzaki']);
Route::get('/view_data_muzaki/{id}', [HomeController::class, 'view_data_muzaki']);

// kategori mustahik
Route::get('/kategori_mustahik', [HomeController::class, 'kategori_mustahik']);
Route::get('/tambah_kategori_mustahik', [HomeController::class, 'tambah_kategori_mustahik']);
Route::get('/kembali_ke_tambah_km', [HomeController::class, 'kembali_ke_tambah_km']);
Route::post('/save_kategori_mustahik', [HomeController::class, 'save_kategori_mustahik']);
Route::get('/delete_kategori_mustahik/{id}', [HomeController::class, 'delete_kategori_mustahik']);
Route::get('/edit_kategori_mustahik/{id}', [HomeController::class, 'edit_kategori_mustahik']);
Route::post('/update_kategori_mustahik/{id}', [HomeController::class, 'update_kategori_mustahik']);
Route::get('/kembali_ke_edit_k_mustahik', [HomeController::class, 'kembali_ke_edit_k_mustahik']);

// pengumpulan zakat fitrah
Route::get('/pengumpulan_zakat_fitrah', [HomeController::class, 'list_muzakki']);
Route::get('/bayar_zakat/{id}', [HomeController::class, 'bayar_zakat']);
Route::get('/kembali_pengumpulan', [HomeController::class, 'kembali_pengumpulan']);
Route::post('/muzaki_bayar', [HomeController::class, 'muzaki_bayar']);
Route::get('/muzaki_sudah_bayar', [HomeController::class, 'muzaki_sudah_bayar']);
Route::get('/kembali_ke_bayar', [HomeController::class, 'kembali_ke_bayar']);
Route::get('/delete_muzaki_bayar/{id}', [HomeController::class, 'delete_muzaki_bayar']);
Route::get('/edit_muzaki_bayar/{id}', [HomeController::class, 'edit_muzaki_bayar']);
Route::post('/edit_data_muzaki_bayar/{id}', [HomeController::class, 'edit_data_muzaki_bayar']);

// distribusi zakat fitrah warga
Route::get('/distribusi_zfw', [HomeController::class, 'distribusi_zfw']);
Route::get('/warga_sudah_menerima_zakat', [HomeController::class, 'warga_sudah_menerima_zakat']);
Route::get('/tambah_distribusi/{id}', [HomeController::class, 'tambah_distribusi']);
Route::post('/tambah_mustahik_warga/{id}', [HomeController::class, 'tambah_mustahik_warga']);
Route::get('/edit_mustahik_menerima/{id}', [HomeController::class, 'edit_mustahik_menerima']);
Route::post('/save_edit_mustahik_menerima/{id}', [HomeController::class, 'save_edit_mustahik_menerima']);
Route::get('/delete_mustahik_menerima/{id}', [HomeController::class, 'delete_mustahik_menerima']);

// distribusi zakat fitrah mustahik
Route::get('/distribusi_zfm', [HomeController::class, 'distribusi_zfm']);
Route::get('/tambah_mustahik_lainnya', [HomeController::class, 'tambah_mustahik_lainnya']);
Route::post('/save_mustahik_lainnya', [HomeController::class, 'save_mustahik_lainnya']);
Route::get('/delete_data_ml/{id}', [HomeController::class, 'delete_data_ml']);
Route::get('/edit_data_ml/{id}', [HomeController::class, 'edit_data_ml']);
Route::post('/save_perubahan_ml/{id}', [HomeController::class, 'save_perubahan_ml']);

// laporan pengumpulan zakat fitrah
Route::get('/laporan_pengumpulan', [HomeController::class, 'laporan_pengumpulan']);
Route::get('/print-laporan-pengumpulan', [HomeController::class, 'print_laporan_pengumpulan']);

// laporan distribusi zakat fitrah
Route::get('/laporan_distribusi', [HomeController::class, 'laporan_distribusi']);
Route::get('/print-laporan-distribusi', [HomeController::class, 'print_laporan_distribusi']);

// logout
Route::get('/logout', [HomeController::class, 'logout']);

// Ajeng Alya Kartika Sari (217006056)