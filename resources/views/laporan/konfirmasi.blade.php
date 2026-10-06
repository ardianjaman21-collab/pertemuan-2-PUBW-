@extends('layouts.app')

@section('title', 'Konfirmasi Laporan')

@section('content')

<div class="container">

    <x-alert>
        Laporan berhasil dikirim!
    </x-alert>


    <div class="card">

        <h2>Konfirmasi Laporan</h2>

        <p>
            <strong>Nama Pelapor:</strong>
            {{ $nama }}
        </p>

        <p>
            <strong>Lokasi Kejadian:</strong>
            {{ $lokasi }}
        </p>

        <p>
            <strong>Tinggi Genangan:</strong>
            {{ $tinggi }} cm
        </p>


        <a href="{{ route('laporan.form') }}">
            Kembali ke Form
        </a>

    </div>

</div>

@endsection