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
        Schema::table('bayar_zakats', function (Blueprint $table) {
            $table->unsignedBigInteger('muzakki_id')->after('nama_KK')->nullable();
            $table->foreign('muzakki_id')->references('id')->on('muzakkis')->onDelete('restrict');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('bayar_zakats', function (Blueprint $table) {
            $table->dropForeign(['muzakki_id']);
            $table->dropColumn(['muzakki_id']);
        });
    }
};
