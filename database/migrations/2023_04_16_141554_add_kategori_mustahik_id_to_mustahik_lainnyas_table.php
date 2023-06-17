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
        Schema::table('mustahik_lainnyas', function (Blueprint $table) {
            $table->unsignedBigInteger('kategori_mustahik_id')->after('nama')->nullable();
            $table->foreign('kategori_mustahik_id')->references('id')->on('kategori_mustahiks')->onDelete('restrict');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('mustahik_lainnyas', function (Blueprint $table) {
            $table->dropForeign(['kategori_mustahik_id']);
            $table->dropColumn(['kategori_mustahik_id']);
        });
    }
};
