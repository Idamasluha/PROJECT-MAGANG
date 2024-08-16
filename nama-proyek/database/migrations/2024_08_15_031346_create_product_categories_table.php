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
        Schema::create('product_categories', function (Blueprint $table) {
            $table->id(); // Primary key dengan auto increment
            $table->integer('no_urut')->nullable(); // Kolom untuk nomor urut, boleh kosong
            $table->string('no_berkas')->unique(); // Kolom untuk nomor berkas, harus unik
            $table->string('alamat_penerimaan'); // Kolom untuk alamat penerimaan
            $table->date('tanggal'); // Kolom untuk tanggal
            $table->string('perihal'); // Kolom untuk perihal
            $table->string('no_petunjuk')->nullable(); // Kolom untuk nomor petunjuk, boleh kosong
            $table->string('nomor')->nullable(); // Kolom untuk nomor umum, boleh kosong
            $table->string('file_path')->nullable(); // Kolom untuk menyimpan path berkas yang diinputkan
        
            $table->timestamps(); // Kolom created_at dan updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('product_categories');
    }
};
