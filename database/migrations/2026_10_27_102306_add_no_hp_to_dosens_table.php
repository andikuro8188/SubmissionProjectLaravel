<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Menjalankan migration untuk menambahkan kolom no_hp pada tabel dosens.
     */
    public function up(): void
    {
        Schema::table('dosens', function (Blueprint $table) {
            // Menambahkan kolom no_hp (string maks 15 karakter, boleh kosong, diletakkan setelah kolom email)
            $table->string('no_hp', 15)->nullable()->after('email');
        });
    }

    /**
     * Membatalkan migration dengan menghapus kolom no_hp dari tabel dosens.
     */
    public function down(): void
    {
        Schema::table('dosens', function (Blueprint $table) {
            // Menghapus kolom no_hp saat rollback
            $table->dropColumn('no_hp');
        });
    }
};
