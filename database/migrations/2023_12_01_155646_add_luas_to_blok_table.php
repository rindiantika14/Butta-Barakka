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
        Schema::table('blok', function (Blueprint $table) {
            $table->string('luas')->after('denah')->nullable();
            $table->string('toilet')->after('luas')->nullable();
            $table->string('kamar')->after('toilet')->nullable();
            $table->string('harga')->after('kamar')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('blok', function (Blueprint $table) {
            $table->dropColumn('luas');
            $table->dropColumn('toilet');
            $table->dropColumn('kamar');
            $table->dropColumn('harga');
        });
    }
};
