
@extends('layouts.app')

@section('title', 'Profil Mahasiswa')

@section('content')
    <p><strong>Nama:</strong>Andi Kurniawan {{ $nama }}</p>
    <p><strong>NIM:</strong> {{ $nim }}</p>
    <p><strong>Program Studi:</strong> {{ $prodi }}</p>

    <p>
        <a href="{{ route('mahasiswa.daftar') }}">
            Lihat Daftar Mahasiswa
        </a>
    </p>
@endsection
