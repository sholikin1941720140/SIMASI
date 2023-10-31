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
            $table->unsignedBigInteger('id_jadwalmengajar');
            $table->string('hari');
            $table->string('status');
            $table->timestamps();

            $table->foreign('id_mahasiswa')->references('id')->on('mahasiswas')->onDelete('cascade');
            $table->foreign('id_jadwalmengajar')->references('id')->on('jadwals')->onDelete('cascade');
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