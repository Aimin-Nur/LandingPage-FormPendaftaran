<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\formPendaftaran;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\PendaftaranController;

// Rute Beranda
Route::get('/', function () {
    return view('home.home');
});

// Rute Jenjang Pendidikam mts
Route::get('/mts', function () {
    return view('home.mts');
});

// Rute Jenjang Pendidikam i'dad
Route::get('/idad', function () {
    return view('home.idad');
});

// Rute Contact
Route::get('/contact', function () {
    return view('home.contact');
});

// Rute Studi
Route::get('/studi', function () {
    return view('home.studi');
});

// Rute Pengajar
Route::get('/pengajar', function () {
    return view('home.pengajar');
});

// Rute Fasilitas
Route::get('/fasilitas', function () {
    return view('home.fasilitas');
});

// Rute blog-aqidah
Route::get('/blog-aqidah', function () {
    return view('home.blog-aqidah');
});

// Rute blog santri
Route::get('/blog-santri', function () {
    return view('home.blog-santri');
});

// Rute blog sirah
Route::get('/blog-sirah', function () {
    return view('home.blog-sirah');
});

// Rute untuk form pendaftaran
Route::get('/form', function () {
    return view('form');
});

// Rute dashboard pendaftaran
Route::get('/dashboard', function () {
    return view('dashboard');
});

// Rute untuk halaman sukses
Route::get('/info-sukses', function () {
    return view('info-sukses');
});

// Rute untuk login
Route::get('/login', [AdminController::class, 'login'])->name('login');
Route::post('/prosesLogin/admin', [AdminController::class, 'prosesLogin']);

// Rute yang memerlukan otentikasi 'bos'
Route::middleware(['auth:bos'])->group(function () {
     // Halaman adminPage
     Route::get('/konfirmasi', [AdminController::class, 'konfirmasiPembayaran']);
     Route::post('/validasi-pembayaran/{id}', [PendaftaranController::class, 'validasiPembayaran'])->name('validasi.pembayaran');
    // Halaman adminPage
    Route::get('/adminPage', [AdminController::class, 'adminPage']);
    // Rute POST yang mengarah ke adminPage
    Route::post('/adminPage', [AdminController::class, 'adminPage']);
    // Download berkas
    Route::get('/download-berkas/{id}', [AdminController::class, 'downloadBerkas'])->name('download-berkas');
    // Download bukti pembayaran
    Route::get('/download-berkas-pembayaran/{id}', [PendaftaranController::class, 'downloadBerkasPembayaran'])->name('download-berkas-pembayaran');

    Route::post('/logout', [AdminController::class, 'logout'])->name('logout');
});


// Rute dashboard pendaftaran
Route::get('/tf', function () {
    return view('tf');
});

// Rute dashboard pendaftaran
Route::get('/form-skema', function () {
    return view('skema-form');
});

// Rute untuk menyimpan data pendaftaran
Route::post('/pendaftaran', [formPendaftaran::class, 'simpanData']);

// Rute untuk menyimpan data pendaftaran
Route::post('/skema', [PendaftaranController::class, 'tambahPendaftaran']);

// Rute untuk menyimpan data pendaftaran
Route::post('/skema-input', [formPendaftaran::class, 'skemaInput']);


// Rute untuk mengunduh berkas
Route::get('/download-berkas/{id}', [AdminController::class, 'downloadBerkas'])->name('download-berkas');

?>
