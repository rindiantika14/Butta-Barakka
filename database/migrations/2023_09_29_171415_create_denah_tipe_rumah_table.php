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
        Schema::create('denah_tipe_rumah', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('blok_id');
            $table->foreign('blok_id')->references('id')->on('blok')->onDelete('cascade');
            $table->string('file_denah');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('denah_tipe_rumah');
    }
};
