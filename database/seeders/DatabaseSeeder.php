<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Menggunakan updateOrCreate agar aman dijalankan berkali-kali tanpa error duplikat
        User::updateOrCreate(
            ['email' => 'test@example.com'], // Kunci unik untuk pengecekan
            [
                'name' => 'Test User',
                'password' => bcrypt('password'), // Pastikan password terenkripsi
                'email_verified_at' => now(),
            ]
        );

        // Jika nanti Anda ingin menambahkan seeder untuk Kategori atau Produk, panggil di sini:
        // $this->call([
        //     KategoriSeeder::class,
        //     MenuSeeder::class,
        // ]);
    }
}