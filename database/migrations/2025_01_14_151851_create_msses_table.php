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
        Schema::create('msses', function (Blueprint $table) {
            $table->id();
            $table->string('kode')->unique();
            $table->string('nama');
            $table->integer('poin')->default(0);
            $table->string('kode_mss');
            $table->date('tanggal');
            $table->text('keterangan')->nullable();
            $table->string('guru');
            $table->string('kelas');
            $table->string('karakter');
            $table->text('konsekuensi')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('msses');
    }
};
