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
                    <table class="table table-list i-table style-1 mb-4 border-0" id="guestTable-all3">
                        <thead>
                            <tr class="bg-primary text-white">
                                <th>No</th>
                                <th>Nama Pemesan</th>
                                <th>Nama Jasa</th>
                                <th>Pembayaran</th>
                                <th>Total</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><strong>1</strong></td>
                                <td>
                                    <div>
                                        <h5 class="">Service AC</h5>
                                    </div>
                                </td>
                                <td>
                                    <div>
                                        <h5 class="">Jason</h5>
                                    </div>
                                </td>
                                <td>
                                    <h5 class="">Dana</h5>
                                </td>
                                <td>
                                        <h5 class="">Rp 50.000</h5>
                                </td>
                                <td>
                                    <div>
                                        <a href="javascript:void(0);" class="btn btn-outline-danger">Tolak</a>
                                        <a href="javascript:void(0);" class="btn btn-outline-primary">Terima</a>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div
                    class="d-flex align-items-center justify-content-sm-between justify-content-center flex-wrap pagination-bx px-4 py-3">
                    <div class="mb-sm-0 mb-3 pagination-title">
                        <p class="mb-0"><span>Showing 1-5</span> from <span>100</span> data</p>
                    </div>
                    <nav>
                        <ul class="pagination pagination-gutter mb-0">
                            <li class="page-item page-indicator">
                                <a class="page-link" href="javascript:void(0)">
                                    <i class="la la-angle-left"></i></a>
                            </li>
                            <li class="page-item active"><a class="page-link" href="javascript:void(0)">1</a>
                            </li>
                            <li class="page-item"><a class="page-link" href="javascript:void(0)">2</a></li>

                            <li class="page-item"><a class="page-link" href="javascript:void(0)">3</a></li>
                            <li class="page-item page-indicator">
                                <a class="page-link" href="javascript:void(0)">
                                    <i class="la la-angle-right"></i></a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
@endsection
