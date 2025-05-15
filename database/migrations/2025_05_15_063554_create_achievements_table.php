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
        Schema::create('achievements', function (Blueprint $table) {
            $table->id();
            $table->integer('year');
            $table->string('name', 255);
            $table->string('image', 255)->nullable();
            $table->enum('level', ['internasional', 'nasional', 'provinsi/wilayah', 'lokal']);
            $table->date('start_date');
            $table->date('end_date');
            $table->integer('position');
            $table->enum('role', ['mahasiswa', 'dosen']);
            $table->enum('type', ['akademik', 'non-akademik']);
            $table->timestamps();
            $table->integer('created_by')->nullable();
            $table->integer('updated_by')->nullable();
            $table->integer('active')->default(1);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('achievements');
    }
};