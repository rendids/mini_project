@extends('layoutsuser.app')
@section('content')

<style>
    .table-list th {
        color: #fff; /* Warna putih */
    }
    /* Gaya untuk menonaktifkan garis tabel default */
    .table-list,
    .table-list th,
    .table-list td {
        border: none;
    }

    /* Gaya untuk latar belakang header tabel */
    .table-list thead {
        background-color: #283fa7; /* Ganti dengan warna biru yang diinginkan */
        color: #fff; /* Ganti dengan warna teks yang sesuai */
    }

    /* Gaya untuk baris ganjil */
    .table-list tbody tr:nth-child(odd) {
        background-color: #f2f2f2; /* Ganti dengan warna latar belakang yang diinginkan */
    }

    /* Gaya untuk baris saat dihover */
    .table-list tbody tr:hover {
        background-color: #e2e5e8; /* Ganti dengan warna latar belakang yang diinginkan */
    }

    /* Gaya untuk teks berwarna merah pada status "Di Tolak" */
    .text-red {
        color: #dc3545; /* Warna merah */
    }

    /* Gaya untuk teks berwarna orange pada status "Menunggu Konfirmasi" */
    .text-orange {
        color: #fd7e14; /* Warna orange */
    }

    /* Gaya untuk teks berwarna hijau pada status "Diterima" */
    .text-green {
        color: #425ac7; /* Warna hijau */
    }

    /* Gaya untuk box-shadow pada tabel dan garis tepi */
    .table-responsive,
    .table-list {
        border: 1px solid #dee2e6; /* Ganti dengan warna garis tepi yang diinginkan */
        box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.2); /* Sesuaikan dengan bayangan yang diinginkan */
    }
</style>


<link rel="stylesheet" href="{{ asset('path/to/your/custom.css') }}">
    <div class="col-xl-12">

        <div class="card h-auto">
            <div class="card-body p-0">
                <div class="table-responsive text-center">
                    <table class="table table-list i-table style-1 mb-4 border-0" id="guestTable-all3">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Penyedia</th>
                                <th>Jasa</th>
                                <th>tanggal</th>
                                <th>pembayaran</th>
                                <th>Total</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($pesan as $item)
                                <tr>
                                    <td><h5>{{ $loop->iteration }}</h5></td>
                                    <td><h5>{{ $item->penyedia->user->name }}</h5></td>
                                    <td><h5>{{ $item->jasa }}</h5></td>
                                    <td><h5>{{ \Carbon\Carbon::parse($item->waktu)->isoFormat('dddd, d MMMM YYYY HH:mm') }}</h5></td>
                                    <td><h5>{{ $item->pembayaran }}</h5></td>
                                    <td><h5>{{ 'RP ' . number_format( $item->total , 0, ',', '.')}}</h5></td>
                                    @if ($item->status == 'di tolak')
                                    <td class="text-red"><strong>{{ $item->status }}</strong></td>
                                @elseif($item->status == 'di terima')
                                    <td class="text-green"><strong>{{ $item->status }}</strong></td>
                                @elseif ($item->status == 'dalam proses tahap 1')
                                    <td class="text-orange">
                                        <strong>{{ $item->status == 'dalam proses tahap 1' ? 'menunggu konfirmasi' : 'menunggu konfirmasi' }}</strong>
                                    </td>
                                @elseif ($item->status == 'dalam proses tahap 2')
                                    <td class="text-orange">
                                        <strong>{{ $item->status == 'dalam proses tahap 2' ? 'menunggu konfirmasi' : 'menunggu konfirmasi' }}</strong>
                                    </td>
                                @endif


                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
