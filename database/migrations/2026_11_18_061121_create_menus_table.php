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
        Schema::create('menus', function (Blueprint $table) {
            $table->id('id_menu'); //[cite: 1]
            $table->foreignId('id_kategori')->constrained('kategoris', 'id_kategori')->onDelete('cascade'); //[cite: 1]
            $table->foreignId('id_admin')->constrained('admins', 'id_admin')->onDelete('cascade'); //[cite: 1]
            $table->string('nama_menu'); //[cite: 1]
            $table->text('deskripsi_menu'); //[cite: 1]
            $table->string('status_ketersediaan'); //[cite: 1]
            $table->decimal('harga', 10, 2); //[cite: 1]
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('menus');
    }
};
