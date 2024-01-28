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
        Schema::create('berkas', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->unsignedBigInteger('blok_id');
            $table->foreign('blok_id')->references('id')->on('blok')->onDelete('cascade');
            $table->string('ktp')->nullable();
            $table->string('npwp')->nullable();
            $table->string('kk')->nullable();
            $table->string('surat_keterangan_kerja')->nullable();
            $table->string('slip_gaji')->nullable();
            $table->string('buku_rekening_koran')->nullable();
            $table->string('surat_keterangan_menikah')->nullable();
            $table->string('foto_3x4')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('berkas');
    }
};
