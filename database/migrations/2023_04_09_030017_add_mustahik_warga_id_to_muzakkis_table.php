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
        Schema::table('muzakkis', function (Blueprint $table) {
            $table->unsignedBigInteger('mustahik_warga_id')->after('kategori_mustahik_id')->nullable();
            $table->foreign('mustahik_warga_id')->references('id')->on('mustahik_wargas')->onDelete('restrict');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('muzakkis', function (Blueprint $table) {
            $table->dropForeign(['mustahik_warga_id']);
            $table->dropColumn(['mustahik_warga_id']);
        });
    }
};
