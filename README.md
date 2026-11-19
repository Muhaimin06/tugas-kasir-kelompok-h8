# Sistem Kasir - Kelompok H8

Sistem aplikasi kasir untuk manajemen menu, pelanggan, dan pesanan.

## Fitur Utama

- **Manajemen Menu**: Katalog produk dan kategori.
- **Sistem Pemesanan**: Alur pemesanan dari pemilihan menu hingga checkout.
- **Manajemen Pelanggan**: Pencatatan data pelanggan.
- **Riwayat**: Pelacakan riwayat harga dan detail pesanan.

## Struktur Data

Aplikasi menggunakan skema database berikut:

- `admins`: Data administrator.
- `pelanggans`: Data pelanggan.
- `kategoris`: Klasifikasi menu.
- `menus`: Data produk menu.
- `pesanans`: Transaksi pesanan.
- `detail_pesanans`: Item dalam setiap pesanan.
- `riwayat_hargas`: Perubahan harga produk.
- `chat_pelanggans`: Interaksi pelanggan.

## Rute Utama

- `GET /`: Beranda.
- `GET /katalog`: Daftar menu.
- `GET /katalog/{id}`: Detail menu.
- `GET /pesan/{id_menu}`: Form pemesanan.
- `POST /pesan`: Simpan pesanan.
- `GET /checkout`: Halaman checkout.
- `GET /pesanan/sukses/{id_pesanan}`: Konfirmasi pesanan.

## Instalasi

1. Clone repositori.
2. `composer install`.
3. `cp .env.example .env` (sesuaikan konfigurasi DB).
4. `php artisan migrate`.
5. `php artisan serve`.
