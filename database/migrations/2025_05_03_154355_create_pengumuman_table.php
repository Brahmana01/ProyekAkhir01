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
        Schema::create('pengumuman', function (Blueprint $table) {
            $table->id();
            $table->string('judul_pengumuman');
            $table->string('gambar')->nullable(); // Kolom gambar (boleh kosong)
            $table->date('tanggal_update_pengumuman')->nullable(); // Kolom tanggal (boleh kosong)
            $table->text('keterangan_lengkap_pengumuman')->nullable(); // Keterangan lengkap
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pengumuman');
    }
};