@extends('layout')

@section('title', 'Form LaporBanjir')

@section('content')

<div class="container">

    <div class="card">

        <h1>Form Pelaporan Banjir</h1>

        <p style="margin-bottom: 25px; color: #666;">
            Silakan isi data kejadian banjir di wilayah Anda.
        </p>

        <form action="{{ route('laporan.proses') }}" method="POST">

            @csrf

            <div class="form-group">

                <label for="nama">
                    Nama Pelapor
                </label>

                <input
                    type="text"
                    id="nama"
                    name="nama"
                    placeholder="Masukkan nama pelapor"
                    required
                >

            </div>

            <div class="form-group">

                <label for="lokasi">
                    Lokasi Kejadian
                </label>

                <input
                    type="text"
                    id="lokasi"
                    name="lokasi"
                    placeholder="Kecamatan/Desa"
                    required
                >

            </div>

            <div class="form-group">

                <label for="tinggi">
                    Tinggi Genangan Air (cm)
                </label>

                <input
                    type="number"
                    id="tinggi"
                    name="tinggi"
                    placeholder="Contoh: 50"
                    min="1"
                    required
                >

            </div>

            <button type="submit">
                Kirim Laporan
            </button>

        </form>

    </div>

</div>

@endsection