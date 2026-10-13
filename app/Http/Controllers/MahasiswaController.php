<?php

namespace App\Http\Controllers;

class MahasiswaController extends Controller
{
    public function profil()
    {
        $nama = ' ';
        $nim = '';
        $prodi = 'Teknologi Informasi';

        return view('mahasiswa.profil', compact(
            'nama',
            'nim',
            'prodi'
        ));
    }

    public function daftar()
    {
        $mahasiswa = [
            ['nama' => 'Andi', 'nim' => '22520141', 'ipk' => 3.75],
            ['nama' => 'Budi', 'nim' => '20230002', 'ipk' => 3.40],
            ['nama' => 'Citra', 'nim' => '20230003', 'ipk' => 3.10],
            ['nama' => 'Dinda', 'nim' => '20230004', 'ipk' => 2.85],
            ['nama' => 'Eko', 'nim' => '20230005', 'ipk' => 1.90],
        ];

        return view('mahasiswa.daftar', compact('mahasiswa'));
    }

    public function detail($nim)
    {
        $mahasiswa = [
            ['nama' => 'Andi', 'nim' => '222520141', 'ipk' => 3.75],
            ['nama' => 'Budi', 'nim' => '20230002', 'ipk' => 3.40],
            ['nama' => 'Citra', 'nim' => '20230003', 'ipk' => 3.10],
            ['nama' => 'Dinda', 'nim' => '20230004', 'ipk' => 2.85],
            ['nama' => 'Eko', 'nim' => '20230005', 'ipk' => 1.90],
        ];

        $data = collect($mahasiswa)->firstWhere('nim', $nim);

        abort_if(! $data, 404);

        return view('mahasiswa.detail', [
            'mhs' => $data,
        ]);
    }
}
