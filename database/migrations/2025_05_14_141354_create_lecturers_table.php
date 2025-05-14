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
        Schema::create('lecturers', function (Blueprint $table) {
            $table->string('nip', 255)->primary(); // NIP sebagai primary key (VARCHAR)
            $table->string('name', 255);           // Nama (VARCHAR)
            $table->string('bachelor_degree', 255)->nullable(); // Gelar S1 (VARCHAR, nullable)
            $table->string('master_degree', 255)->nullable(); // Gelar S2 (VARCHAR, nullable)
            $table->string('doctor_degree', 255)->nullable(); // Gelar S3 (VARCHAR, nullable)
            $table->integer('status')->default(1);     // Status (INT, default 1)
            $table->text('experiences')->nullable();    // Pengalaman (TEXT, nullable)
            $table->string('email', 255)->unique()->nullable(); // Email (VARCHAR, unique, nullable)
            $table->string('image', 255)->nullable();   // Image path (VARCHAR, nullable)
            $table->timestamps();                          // created_at, updated_at (DATETIME)
            $table->integer('created_by')->nullable();   // ID User yang membuat (INT, nullable)
            $table->integer('updated_by')->nullable();   // ID User yang mengubah (INT, nullable)
            $table->integer('active')->default(1);      // Status aktif (INT, default 1)
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('lecturers');
    }
};