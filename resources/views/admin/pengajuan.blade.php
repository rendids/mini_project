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
                            <th><strong>N</strong></th>
                            <th><strong>Nama Pemesanan</strong></th>
                            <th><strong>Nama Jasa</strong></th>
                            <th><strong>Nama Pembayaran</strong></th>
                            <th><strong>Total</strong></th>
                            <th><strong>Aksi</strong></th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                            $no = 1;
                        @endphp
                        <tr>
                            <td><strong></strong>{{ $no++ }}</td>
                            <td>ilya halimatus</td>
                            <td>Dr. Jackson</td>
                            <td>E-walet</td>
                            <td>Rp. 330.000</td>
                            <td>
                                <div class="d-flex">
                                    <a href="#" class="btn btn-primary shadow btn-xm sharp me-1" data-bs-toggle="modal" data-bs-target="#myModal">
                                      <i class="fa fa-eye"></i>
                                    </a>
                                  </div>

                                  <!-- Modal -->
                                  <div class="modal fade" id="myModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                      <div class="modal-content">
                                        <div class="modal-header">
                                          <h5 class="modal-title" id="exampleModalLabel">Pengajuan Dana</h5>
                                          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                          <form>
                                            <div class="mb-3">
                                              <label for="metodePengajuan" class="form-label">Metode Pengajuan</label>
                                              <input type="text" class="form-control" id="metodePengajuan" placeholder="Masukkan metode pengajuan">
                                            </div>
                                            <div class="mb-3">
                                              <label for="keterangan" class="form-label">Keterangan</label>
                                              <textarea class="form-control" id="keterangan" rows="3" placeholder="Masukkan keterangan"></textarea>
                                            </div>
                                          </form>
                                        </div>
                                        <div class="modal-footer">
                                          <button type="button" class="btn btn-success">Terima</button>
                                        </div>
                                      </div>
                                    </div>
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


