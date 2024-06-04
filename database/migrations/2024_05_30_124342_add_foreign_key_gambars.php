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
        Schema::table('gerakan', function (Blueprint $table) {
            $table->foreign('aktifitas_id', 'fk_gerakan_to_aktifitas')->references('id')->on('aktifitas')->onUpdate('CASCADE')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('gambar', function (Blueprint $table) {
            $table->dropForeign('fk_gerakan_to_aktifitas');
        });
    }
};
