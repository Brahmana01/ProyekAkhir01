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
        Schema::create('galleries', function (Blueprint $table) {
            $table->id(); // Kolom ID (Primary Key, Auto-increment)
            $table->string('title'); // Judul Galeri
            $table->text('description')->nullable(); // Deskripsi (boleh kosong)
            $table->string('image'); // Nama file gambar (path relatif ke public directory)
            $table->timestamps(); // created_at dan updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('galleries');
    }
};