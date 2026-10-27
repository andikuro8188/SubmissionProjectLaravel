<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Menjalankan migration untuk membuat tabel jurusans.
     */
    public function up(): void
    {
        Schema::create('jurusans', function (Blueprint $table) {
            // Kolom id sebagai primary key (auto-increment)
            $table->id();

            // Kolom kode jurusan, tipe string maksimal 5 karakter, bersifat unik
            $table->string('kode', 5)->unique();

            // Kolom nama jurusan, tipe string maksimal 100 karakter
            $table->string('nama', 100);

            // Kolom created_at dan updated_at
            $table->timestamps();
        });
    }

    /**
     * Membatalkan migration dengan menghapus tabel jurusans jika ada.
     */
    public function down(): void
    {
        Schema::dropIfExists('jurusans');
    }
};
