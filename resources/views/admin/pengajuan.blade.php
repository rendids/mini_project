@extends('layouts.app')
@section('content')

<div class="row page-titles">
    <ol class="breadcrumb">
        <li class="breadcrumb-item active">admin</li>
        <li class="breadcrumb-item">pengajuan</li>
    </ol>
</div>

<div class="col-lg-12">
    <div class="card">
        <div class="card-header">
            <h4 class="card-title">Metode Pembayaran</h4>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-responsive-md">
                    <thead>
                        <tr class="bg-primary text-white">
                            <th><strong>No</strong></th>
                            <th><strong>Nama Pemesanan</strong></th>
                            <th><strong>Nama Jasa</strong></th>
                            <th><strong>Nama Pembayaran</strong></th>
                            <th><strong>Total</strong></th>
                            <th><strong>Aksi</strong></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($pengambilans as $index => $item)
                          @if ($item->status == 'process')
                          <tr>
                              <td><strong></strong>{{ $index + 1 }}</td>
                              <td>{{ $item->user->name }}</td>
                              <td>{{ $item->pesanan->jasa }}</td>
                              <td>{{ $item->metode }}</td>
                              <td>{{ 'RP ' . number_format(  $item->pesanan->total , 0, ',', '.')}}</td>
                              <td>
                                  <div class="d-flex">
                                      <a href="{{ route('pengajuan-process', $item->id) }}" class="btn btn-primary shadow btn-xm sharp me-1">
                                        <i class="bi bi-check-circle-fill"></i>
                                      </a>
                                  </div>
                              </td>
                          </tr>
                          @endif
                        @endforeach


                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection


