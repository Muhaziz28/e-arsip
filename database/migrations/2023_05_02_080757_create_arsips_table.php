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
        Schema::create('arsip', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('tingkat_perkembangan_id');
            $table->foreign('tingkat_perkembangan_id')->references('id')->on('tingkat_perkembangan');
            $table->unsignedBigInteger('bentuk_id');
            $table->foreign('bentuk_id')->references('id')->on('bentuk');
            $table->unsignedBigInteger('keterangan_id');
            $table->foreign('keterangan_id')->references('id')->on('keterangan');
            $table->string('indeks');
            $table->string('deskripsi');
            $table->year('tahun');
            $table->string('jumlah');
            $table->string('rak')->nullable();
            $table->string('roll_o_pack')->nullable();
            $table->string('boks')->nullable();
            $table->string('bungkus')->nullable();
            $table->string('buku')->nullable();
            $table->string('sampul')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('arsips');
    }
};
