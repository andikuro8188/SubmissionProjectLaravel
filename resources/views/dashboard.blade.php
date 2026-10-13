
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Perpustakaan Kampus</title>

    
<style>
    * {
        box-sizing: border-box;
    }

    body {
        margin: 0;
        font-family: Arial, sans-serif;
        background: #ffffff;
        color: #000000;
    }

    header {
        background: #ffffff;
        color: #000000;
        padding: 35px 20px;
        text-align: center;
        border-bottom: 1px solid #cccccc;
    }

    header h1 {
        margin: 0 0 10px;
    }

    header p {
        margin: 0;
        color: #333333;
    }

    main {
        max-width: 1000px;
        margin: 30px auto;
        padding: 0 20px;
    }

    h2 {
        margin-top: 30px;
        color: #000000;
    }

    .menu {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(220px, 1fr));
        gap: 16px;
    }

    .card {
        background: #ffffff;
        padding: 20px;
        border-radius: 0;
        border: 1px solid #cccccc;
        box-shadow: none;
    }

    .card h3 {
        margin-top: 0;
        color: #000000;
    }

    .card p {
        color: #333333;
        font-size: 14px;
        line-height: 1.6;
    }

    .card a {
        display: inline-block;
        margin-top: 8px;
        background: #ffffff;
        color: #000000;
        border: 1px solid #000000;
        text-decoration: none;
        padding: 10px 14px;
        border-radius: 0;
        font-size: 14px;
    }

    .card a:hover {
        background: #eeeeee;
    }

    footer {
        text-align: center;
        padding: 25px;
        color: #333333;
        border-top: 1px solid #cccccc;
        margin-top: 30px;
    }
</style>

</head>

<body>

<header>
    <h1>Perpustakaan Kampus</h1>
    <p>Dashboard Praktikum Struktur MVC dan Routing Laravel 13</p>
</header>

<main>

    <h2>Menu Routing Dasar</h2>

    <div class="menu">
        <div class="card">
            <h3>Halaman Sapa</h3>
            <p>Contoh route sederhana menggunakan closure.</p>
            <a href="{{ url('/sapa') }}">Buka Halaman</a>
        </div>

        <div class="card">
            <h3>Tanggal Hari Ini</h3>
            <p>Menampilkan tanggal menggunakan fungsi Laravel.</p>
            <a href="{{ url('/tanggal') }}">Lihat Tanggal</a>
        </div>

        <div class="card">
            <h3>Informasi Aplikasi</h3>
            <p>Menampilkan informasi aplikasi dalam format JSON.</p>
            <a href="{{ url('/info') }}">Lihat Informasi</a>
        </div>
    </div>

    <h2>Menu Anggota dan Buku</h2>

    <div class="menu">
        <div class="card">
            <h3>Anggota</h3>
            <p>Contoh parameter nama anggota.</p>
            <a href="{{ url('/anggota/Budi') }}">Lihat Anggota</a>
        </div>

        <div class="card">
            <h3>Rak Buku</h3>
            <p>Menampilkan kategori rak buku.</p>
            <a href="{{ url('/rak/fiksi') }}">Lihat Rak Buku</a>
        </div>

        <div class="card">
            <h3>Buku Berdasarkan Tahun</h3>
            <p>Contoh penggunaan dua parameter route.</p>
            <a href="{{ url('/buku/teknologi/tahun/2024') }}">Lihat Buku</a>
        </div>

        <div class="card">
            <h3>Detail Peminjaman</h3>
            <p>Contoh pembatasan parameter numerik.</p>
            <a href="{{ url('/peminjaman/25') }}">Lihat Peminjaman</a>
        </div>

        <div class="card">
            <h3>Penulis</h3>
            <p>Contoh parameter nama yang hanya menerima huruf.</p>
            <a href="{{ url('/penulis/Budi') }}">Lihat Penulis</a>
        </div>

        <div class="card">
            <h3>Status Peminjaman</h3>
            <p>Menampilkan status peminjaman buku.</p>
            <a href="{{ url('/status/terlambat') }}">Lihat Status</a>
        </div>
    </div>

    <h2>Layanan Perpustakaan</h2>

    <div class="menu">
        <div class="card">
            <h3>Layanan</h3>
            <p>Halaman layanan menggunakan Route::view.</p>
            <a href="{{ route('layanan') }}">Buka Layanan</a>
        </div>

        <div class="card">
            <h3>Pusat Bantuan</h3>
            <p>Informasi bantuan dan nomor telepon perpustakaan.</p>
            <a href="{{ route('bantuan') }}">Buka Bantuan</a>
        </div>
    </div>

    <h2>Menu Petugas</h2>

    <div class="menu">
        <div class="card">
            <h3>Beranda Petugas</h3>
            <p>Halaman utama untuk petugas perpustakaan.</p>
            <a href="{{ url('/petugas/beranda') }}">Buka Beranda</a>
        </div>

        <div class="card">
            <h3>Laporan Peminjaman</h3>
            <p>Contoh route untuk laporan peminjaman.</p>
            <a href="{{ url('/petugas/laporan') }}">Buka Laporan</a>
        </div>

        <div class="card">
            <h3>Detail Anggota</h3>
            <p>Contoh parameter anggota dalam route group.</p>
            <a href="{{ url('/petugas/anggota/10') }}">Lihat Detail</a>
        </div>
    </div>

</main>

<footer>
    Praktikum Pemrograman Web | Laravel 13
</footer>

</body>
</html>
