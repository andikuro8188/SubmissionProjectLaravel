
@extends('layouts.app')

@section('title', 'Detail Mahasiswa')

@section('content')
    <p><strong>Nama:</strong> {{ $mhs['nama'] }}</p>
    <p><strong>NIM:</strong> {{ $mhs['nim'] }}</p>
    <p>
        <strong>IPK:</strong>
        {{ number_format($mhs['ipk'], 2, ',', '.') }}
    </p>

    <p>
        <a href="{{ route('mahasiswa.daftar') }}">
            Kembali ke Daftar Mahasiswa
        </a>
    </p>
@endsection
