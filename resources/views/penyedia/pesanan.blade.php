@extends('layoutsjasa.app')
@section('content')

<style>
    .table-list th{
        color: white;
    }
</style>
    <div class="col-xl-12">
        <div class="card h-auto">
            <div class="card-body p-0">
                <div class="table-responsive">
                    <table class="table table-list i-table style-1 mb-4 border-0 text-center" id="guestTable-all3">
                        <thead>
                            <tr class="bg-primary text-white">
                                <th>No</th>
                                <th>Nama Pemesan</th>
                                <th>Pembayaran</th>
                                <th>Total</th>
                                <th>Bukti</th>
                                <th class="text-center">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($pesan as $itm)
                            <tr>
                                <td><strong>{{ $loop->iteration }}</strong></td>
                                <td>
                                    <div>
                                        <h5 class="">{{ $itm->pemesan }}</h5>
                                    </div>
                                </td>
                                <td>
                                    <h5 class="">{{ $itm->pembayaran }}</h5>
                                </td>
                                <td>
                                        <h5 class="">{{ $itm->total }}</h5>
                                </td>
                                <td>
                                    <img src="{{ asset('storage/bukti/'. $itm->bukti) }}" class="img-fluid" style="width: 200px;" alt="" srcset="">
                                </td>
                                <td>
                                    <div class="d-flex justify-content-center">
                                        <form action="{{ route('terima.pesanan', ['id' => $itm->id]) }}" method="POST">
                                            @csrf
                                            @method('patch')
                                            <button type="submit" class="btn btn-outline-danger">tolak</button>
                                        </form>
                                        <form action="{{ route('tolak.pesanan', ['id' => $itm->id]) }}" method="POST">
                                            @csrf
                                            @method('patch')
                                            <button type="submit" class="btn btn-outline-success mx-3">Terima</button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
