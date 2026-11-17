
<?php

use App\Http\Controllers\MahasiswaController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\JurusanController;
use App\Http\Controllers\MatakuliahController;

Route::get('/', function () {
    return redirect()->route('mahasiswa.profil');
});

Route::get('/profil', [MahasiswaController::class, 'profil'])
    ->name('mahasiswa.profil');

Route::get('/mahasiswa', [MahasiswaController::class, 'daftar'])
    ->name('mahasiswa.daftar');

Route::get('/mahasiswa/{nim}', [MahasiswaController::class, 'detail'])
    ->name('mahasiswa.detail');

Route::get('/products', [ProductController::class, 'index']);

Route::get('/products/{id}', [ProductController::class, 'show']);

Route::get('/jurusan', [JurusanController::class, 'index']);

Route::get('/jurusan', [JurusanController::class, 'index'])
    ->name('jurusan.index');

Route::get('/jurusan/create', [JurusanController::class, 'create'])
    ->name('jurusan.create');

Route::post('/jurusan', [JurusanController::class, 'store'])
    ->name('jurusan.store');

Route::get('/matakuliah', [MatakuliahController::class, 'index'])
    ->name('matakuliah.index');

Route::get('/matakuliah/create', [MatakuliahController::class, 'create'])
    ->name('matakuliah.create');

Route::post('/matakuliah', [MatakuliahController::class, 'store'])
    ->name('matakuliah.store');

Route::get('/matakuliah/{id}', [MatakuliahController::class, 'show'])
    ->name('matakuliah.show');
