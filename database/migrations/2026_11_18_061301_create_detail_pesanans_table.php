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
        Schema::create('detail_pesanans', function (Blueprint $table) {
            $table->id('id_detail'); //[cite: 1]
            $table->foreignId('id_menu')->constrained('menus', 'id_menu')->onDelete('cascade'); //[cite: 1]
            $table->foreignId('id_pesanan')->constrained('pesanans', 'id_pesanan')->onDelete('cascade'); //[cite: 1]
            $table->integer('jumlah'); //[cite: 1]
            $table->text('catatan_kustom')->nullable(); //[cite: 1]
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('detail_pesanans');
    }
};
