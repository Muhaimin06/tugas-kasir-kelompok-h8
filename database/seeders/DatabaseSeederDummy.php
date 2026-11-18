<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class DatabaseSeederDummy extends Seeder
{
    public function run(): void
    {
        // 1. Masukkan data ke tabel admins terlebih dahulu
        $idAdmin = DB::table('admins')->insertGetId([
            'nama_admin' => 'Admin Dapur Modern',
            'email' => 'admin@dapurmodern.com',
            'role' => 'pemilik',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        // 2. Masukkan data ke tabel kategoris
        $idKategoriHarian = DB::table('kategoris')->insertGetId([
            'nama_kategori' => 'Paket Harian',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        $idKategoriKustom = DB::table('kategoris')->insertGetId([
            'nama_kategori' => 'Paket Kustom',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        $idKategoriPrasmanan = DB::table('kategoris')->insertGetId([
            'nama_kategori' => 'Prasmanan',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        // 3. Masukkan data ke tabel menus sesuai kategori dan admin
        DB::table('menus')->insert([
            [
                'id_kategori' => $idKategoriHarian,
                'id_admin' => $idAdmin,
                'nama_menu' => 'Paket Nasi Liwet Komplit',
                'deskripsi_menu' => 'Nasi gurih kelapa dengan lauk ayam ungkep rempah serundeng, tahu tempe bacem, telur pindang, lalapan kencur, serta sambal terasi matang.',
                'status_ketersediaan' => 'Tersedia',
                'harga' => 38000,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'id_kategori' => $idKategoriKustom,
                'id_admin' => $idAdmin,
                'nama_menu' => 'Paket Beef Bulgogi Bento',
                'deskripsi_menu' => 'Daging sapi US slice bumbu autentik manis gurih, disajikan dalam bento box premium dengan gyoza ayam dan salad saus wijen.',
                'status_ketersediaan' => 'Tersedia',
                'harga' => 48000,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'id_kategori' => $idKategoriPrasmanan,
                'id_admin' => $idAdmin,
                'nama_menu' => 'Paket Prasmanan Nusantara Heritage',
                'deskripsi_menu' => 'Lengkap 7 menu utama: Rendang Daging Dapur Modern, Ayam Bakar Taliwang, Ikan Asam Manis, Sop Buntut, Puding Lumut, & setup chafing dish gratis.',
                'status_ketersediaan' => 'Habis',
                'harga' => 75000,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
        ]);
    }
}