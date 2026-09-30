 @extends('layout')

@section('title', 'Konfirmasi Laporan')

@section('content')

<div class="container">

    <div class="card">

        <div class="success">

            <h1>✅ Laporan Berhasil</h1>

            <p style="color: #666;">
                Data laporan banjir berhasil diterima.
            </p>

        </div>

        <div class="data">

            <div class="label">
                Nama Pelapor
            </div>

            <div class="value">
                {{ $nama }}
            </div>

        </div>

        <div class="data">

            <div class="label">
                Lokasi Kejadian
            </div>

            <div class="value">
                {{ $lokasi }}
            </div>

        </div>

        <div class="data">

            <div class="label">
                Tinggi Genangan Air
            </div>

            <div class="value">
                {{ $tinggi }} cm
            </div>

        </div>

        <a href="{{ route('laporan.form') }}"
           class="btn">

            Buat Laporan Baru

        </a>

    </div>

</div>

@endsection