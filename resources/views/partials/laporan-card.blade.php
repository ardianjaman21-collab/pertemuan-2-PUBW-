<div class="card">

    <h3>
        Laporan dari {{ $data['nama'] }}
    </h3>

    <p>
        <strong>Lokasi:</strong>
        {{ $data['lokasi'] }}
    </p>

    <p>
        <strong>Tinggi Genangan:</strong>
        {{ $data['tinggi'] }} cm
    </p>


    <p>

        <strong>Status:</strong>

        @if($data['tinggi'] < 30)

            <span class="status">
                Waspada
            </span>

        @elseif($data['tinggi'] <= 70)

            <span class="status">
                Siaga
            </span>

        @else

            <span class="status">
                Awas
            </span>

        @endif

    </p>

</div>