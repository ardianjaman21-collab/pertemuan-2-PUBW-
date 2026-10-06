@extends('layouts.app')

@section('title', 'Daftar Laporan')

@section('content')

<div class="container">

    <div class="card">

        <h2>Daftar Laporan Banjir</h2>

        <p>
            Berikut adalah contoh laporan banjir yang diterima.
        </p>

    </div>


    @forelse($laporan as $data)

        @include('partials.laporan-card')

    @empty

        <div class="card">

            <p>
                Belum ada laporan banjir.
            </p>

        </div>

    @endforelse

</div>

@endsection