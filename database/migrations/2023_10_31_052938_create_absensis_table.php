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
        Schema::create('absensis', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_mahasiswa');
            $table->unsignedBigInteger('id_jadwal');
            $table->string('hari');
            $table->boolean('status')->default(false);
            $table->timestamps();

            $table->foreign('id_mahasiswa')->references('id')->on('mahasiswas');
            $table->foreign('id_jadwal')->references('id')->on('jadwals');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('absensis');
    }
};