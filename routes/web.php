<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KatalogController;
use App\Http\Controllers\PesananController; // 1. Tambahkan use controller Pesanan di sini

// Halaman Beranda Utama (Diubah dari 'welcome' ke 'beranda')
Route::get('/', function () {
    return view('beranda');
})->name('beranda');

Route::get('/sapa', function(){
    return 'Halo, Kelompok 5';
});

Route::get('/katalog',
    [KatalogController::class, 'index']
)->name('katalog.index');

Route::get('/katalog/{id}',
    [KatalogController::class, 'show']
)->whereNumber('id')
 ->name('katalog.show');

// /katalog/1    → detail
// /katalog/999  → 404 (tidak ada)
// /katalog/abc  → 404 (pola route)


// ==========================================
// 2. TAMBAHKAN ROUTE PESANAN DI BAWAH INI
// ==========================================

// Menampilkan form pemesanan berdasarkan ID menu
Route::get('/pesan/{id_menu}', [PesananController::class, 'create'])
    ->whereNumber('id_menu')
    ->name('pesanan.create');

// Memproses penyimpanan data pesanan ke database (Form POST)
Route::post('/pesan', [PesananController::class, 'store'])
    ->name('pesanan.store');

Route::get('/checkout', function () {
    return view('pesanan.checkout');
})->name('pesanan.checkout');

// Menampilkan halaman bukti / konfirmasi pesanan berhasil
Route::get('/pesanan/sukses/{id_pesanan}', [PesananController::class, 'success'])
    ->whereNumber('id_pesanan')
    ->name('pesanan.success');