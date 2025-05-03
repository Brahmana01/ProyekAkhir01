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
        Schema::create('prestasies', function (Blueprint $table) {
            $table->id();
            $table->string('judul'); // Contoh: Juara 1 Lomba Karya Ilmiah
            $table->text('deskripsi');
            $table->string('foto'); // Nama file foto
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('prestasies');
    }
};