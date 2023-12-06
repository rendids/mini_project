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
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($pesan as $item)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $item->penyedia }}</td>
                                    <td>{{ $item->jasa }}</td>
                                    <td>{{ $item->waktu }}</td>
                                    <td>{{ $item->pembayaran }}</td>
                                    @if ($item->status == 'menunggu konfirmasi')
                                        <td class="text-danger">{{ $item->status }}</td>
                                    @else
                                        <td class="text-success">{{ $item->status }}</td>
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
