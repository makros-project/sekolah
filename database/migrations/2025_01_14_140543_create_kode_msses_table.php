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
        Schema::create('kode_mss', function (Blueprint $table) {
            $table->id();
            $table->string('kode_mss');
            $table->integer('poin');
            $table->string('keterangan');
            $table->string('konsekuensi');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kode_msses');
    }
};
