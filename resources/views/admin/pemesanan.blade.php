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
                        <tr>
                            <th><strong>NO</strong></th>
                            <th><strong>NAMA PEMESANAN</strong></th>
                            <th><strong>NAMA PENYEDIA</strong></th>
                            <th><strong>NAMA JASA</strong></th>
                            <th><strong>TOTAL</strong></th>
                            <th><strong>AKSI</strong></th>
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
                            <td><span >Dr. Jackson</span></div></td>
                            <td><span >Service AC</span></div></td>
                            <td><span >Rp. 330.000</span></div></td>
                            <td>
                                <div class="d-flex">
                                    <a href="#" class="btn btn-primary shadow btn-xm sharp me-1"><i class="fa fa-eye"></i></a>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td><strong>yayayayya</strong></td>
                            <td><span >Dr. Jackson</span></div></td>
                            <td><span >Service Oven</span></div></td>
                            <td><span >Rp. 220.00</span></div></td>
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
