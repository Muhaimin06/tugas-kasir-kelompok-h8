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
        Schema::create('chat_pelanggans', function (Blueprint $table) {
            $table->id('id_chat'); //[cite: 1]
            $table->foreignId('id_pelanggan')->constrained('pelanggans', 'id_pelanggan')->onDelete('cascade'); //[cite: 1]
            $table->foreignId('id_admin')->constrained('admins', 'id_admin')->onDelete('cascade'); //[cite: 1]
            $table->text('isi_chat'); //[cite: 1]
            $table->dateTime('waktu_kirim'); //[cite: 1]
            $table->string('status_chat'); //[cite: 1]
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('chat_pelanggans');
    }
};
