@extends('layoutsuser.app')
@section('content')
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
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $item->penyedia->user->name }}</td>
                                    <td>{{ $item->jasa }}</td>
                                    <td>{{ $item->waktu }}</td>
                                    <td>{{ $item->pembayaran }}</td>
                                    <td>{{ 'RP ' . number_format( $item->total , 0, ',', '.')}}</td>
                                    @if ($item->status == 'di tolak')
                                        <td class="text-blue">{{ $item->status }}</td>
                                    @elseif($item->status == 'di terima')
                                        <td class="text-red">{{ $item->status }}</td>
                                    @elseif ($item->status == 'dalam proses tahap 1')
                                        <td class="text-black">
                                            {{ $item->status == 'dalam proses tahap 1' ? 'menunggu konfirmasi' : 'menunggu konfirmasi' }}
                                        </td>
                                    @else
                                        <td class="text-primary">
                                            {{ $item->status}}
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
