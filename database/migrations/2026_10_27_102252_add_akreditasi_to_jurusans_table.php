<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Menjalankan migration untuk menambahkan kolom akreditasi pada tabel jurusans.
     */
    public function up(): void
    {
        Schema::table('jurusans', function (Blueprint $table) {
            // Menambahkan kolom akreditasi (string maks 2 karakter, boleh kosong, diletakkan setelah kolom nama)
            $table->string('akreditasi', 2)->nullable()->after('nama');
        });
    }

    /**
     * Membatalkan migration dengan menghapus kolom akreditasi dari tabel jurusans.
     */
    public function down(): void
    {
        Schema::table('jurusans', function (Blueprint $table) {
            // Menghapus kolom akreditasi saat rollback
            $table->dropColumn('akreditasi');
        });
    }
};
