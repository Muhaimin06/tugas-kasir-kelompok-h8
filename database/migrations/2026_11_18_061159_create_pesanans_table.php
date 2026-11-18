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
        Schema::create('pesanans', function (Blueprint $table) {
            $table->id('id_pesanan'); //[cite: 1]
            $table->foreignId('id_pelanggan')->constrained('pelanggans', 'id_pelanggan')->onDelete('cascade'); //[cite: 1]
            $table->dateTime('tanggal_pesanan'); //[cite: 1]
            $table->string('status_pesanan'); //[cite: 1]
            $table->decimal('total_harga', 10, 2); //[cite: 1]
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pesanans');
    }
};
