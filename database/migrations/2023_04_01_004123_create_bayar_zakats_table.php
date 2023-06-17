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
        Schema::create('bayar_zakats', function (Blueprint $table) {
            $table->id();
            $table->string('nama_KK', 50)->nullable();
            $table->integer('jumlah_tanggungan')->length(10)->nullable();
            $table->string('jenis_bayar', 50)->nullable();
            $table->integer('jumlah_tanggunganyangdibayar')->length(10)->nullable();
            $table->integer('bayar_beras')->length(10)->nullable();
            $table->integer('bayar_uang')->length(10)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bayar_zakats');
    }
};
