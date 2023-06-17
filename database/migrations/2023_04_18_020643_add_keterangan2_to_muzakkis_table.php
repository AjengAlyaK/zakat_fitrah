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
            $table->string('keterangan2', 30)->after('keterangan')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('muzakkis', function (Blueprint $table) {
            $table->dropColumn(['keterangan2']);
        });
    }
};
