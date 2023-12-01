@extends('layouts.app')
@section('content')
<div class="row page-titles">
    <ol class="breadcrumb">
        <li class="breadcrumb-item active">admin</li>
        <li class="breadcrumb-item">pemesanan</li>
    </ol>
</div>

<div class="col-lg-12">
    <div class="card">
        <div class="card-header">
            <h4 class="card-title">Pemesanan</h4>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-responsive-md">
                    <thead>
                        <tr class="bg-primary text-white">
                            <th><strong>No</strong></th>
                            <th><strong>Nama Pemesanan</strong></th>
                            <th><strong>Nama Penyedia</strong></th>
                            <th><strong>Nama Jasa</strong></th>
                            <th><strong>Total</strong></th>
                            <th><strong>Aksi</strong></th>
                            <th><strong></strong></th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                            $no = 1;
                        @endphp
                        <tr>
                            <td><strong>{{ $no++ }}</strong></td>
                            <td><strong>ilya halimatus</strong></td>
                            <td><strong>Dr. Jackson</strong></td>
                            <td><strong>Service AC</strong></td>
                            <td><strong>Rp. 330.000</strong></td>
                            <td>
                                <div class="d-flex">
                                    <a href="#" class="btn btn-primary shadow btn-xm sharp me-1"><i class="fa fa-eye"></i></a>
                                </div>
                            </td>
                        </tr>

                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
