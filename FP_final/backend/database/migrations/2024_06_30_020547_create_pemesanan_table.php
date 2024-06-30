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
        Schema::create('pemesanan', function (Blueprint $table) {
            
            $table->string('id_pemesanan')->primary();
            $table->string('nama');
            $table->string('email')->unique();
            $table->string('alamat');
            $table->string('nomor_hp');
            $table->dateTime('tgl_pinjam');
            $table->dateTime('tgl_kembali');
            $table->string('mobil');
            $table->timestamps(); // Adds created_at and updated_at columns

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pemesanan');
    }
};
