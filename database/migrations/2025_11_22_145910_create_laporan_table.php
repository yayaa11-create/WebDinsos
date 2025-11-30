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
        Schema::create('laporan', function (Blueprint $table) {
            $table->id('kodelaporan');
            $table->char('klasifikasi', 1);
            $table->string('title');
            $table->text('deskripsi');
            $table->date('tanggal');
            $table->string('lokasi');
            $table->string('instansi');
            $table->char('kategori', 1);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('laporan');
    }
};
