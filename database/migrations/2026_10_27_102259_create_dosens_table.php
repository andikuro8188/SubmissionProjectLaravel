<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Menjalankan migration untuk membuat tabel dosens.
     */
    public function up(): void
    {
        Schema::create('dosens', function (Blueprint $table) {
            // Kolom id sebagai primary key (auto-increment)
            $table->id();

            // Kolom NIDN dosen, tipe string maksimal 10 karakter, bersifat unik
            $table->string('nidn', 10)->unique();

            // Kolom nama dosen
            $table->string('nama');

            // Kolom email dosen, bersifat unik
            $table->string('email')->unique();

            // Kolom created_at dan updated_at
            $table->timestamps();
        });
    }

    /**
     * Membatalkan migration dengan menghapus tabel dosens jika ada.
     */
    public function down(): void
    {
        Schema::dropIfExists('dosens');
    }
};
