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
            $table->id();
            $table->string('nip', 255)->unique();
            $table->string('name', 255);
            $table->string('bachelor_degree', 255)->nullable();
            $table->string('master_degree', 255)->nullable();
            $table->string('doctor_degree', 255)->nullable();
            $table->integer('status')->default(0); // Contoh: 0=Tidak Aktif, 1=Aktif
            $table->text('experiences')->nullable();
            $table->string('email', 255)->unique();
            $table->string('image', 255)->nullable(); // Path ke file gambar
            $table->timestamps();
            $table->unsignedBigInteger('created_by')->nullable();
            $table->unsignedBigInteger('updated_by')->nullable();
            $table->boolean('active')->default(true);

            $table->foreign('created_by')->references('id')->on('users')->onDelete('set null'); // Asumsi: tabel user adalah 'users'
            $table->foreign('updated_by')->references('id')->on('users')->onDelete('set null'); // Sesuaikan jika nama tabel user berbeda
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