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
        Schema::create('blok', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('tipe_rumah_id');
            $table->foreign('tipe_rumah_id')->references('id')->on('tipe_rumah')->onDelete('cascade');
            $table->string('nama_blok', 50);
            $table->string('denah');
            $table->longText('spesifikasi');
            $table->string('status');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('blok');
    }
};
