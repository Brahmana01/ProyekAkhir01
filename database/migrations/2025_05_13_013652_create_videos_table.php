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
        Schema::create('videos', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('link');
            $table->timestamps(); // created_at dan updated_at
            $table->integer('created_by')->nullable(); // Siapa yang membuat (relasi ke tabel users)
            $table->integer('updated_by')->nullable(); // Siapa yang mengubah (relasi ke tabel users)
            $table->integer('active')->default(1); // Aktif atau tidak (misalnya, 1 = aktif, 0 = tidak aktif)
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('videos');
    }
};