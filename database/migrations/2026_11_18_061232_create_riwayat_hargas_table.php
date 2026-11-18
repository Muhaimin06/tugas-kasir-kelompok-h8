<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('riwayat_hargas', function (Blueprint $table) {
            $table->id('id_riwayat'); //[cite: 1]
            $table->foreignId('id_menu')->constrained('menus', 'id_menu')->onDelete('cascade'); //[cite: 1]
            $table->decimal('harga_lama', 10, 2); //[cite: 1]
            $table->decimal('harga_baru', 10, 2); //[cite: 1]
            $table->dateTime('tanggal_perubahan'); //[cite: 1]
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('riwayat_hargas');
    }
};
