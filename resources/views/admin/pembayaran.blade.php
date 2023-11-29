@extends('layouts.app')
@section('content')
    <div class="row page-titles">
        <ol class="breadcrumb">
            <li class="breadcrumb-item active">admin</li>
            <li class="breadcrumb-item">pembayaran</li>
        </ol>
    </div>

    <div class="modal fade" id="basicModal" style="display: none;" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Tambah Kategori</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal">
                    </button>
                </div>
                <div class="modal-body">
                    <form action="{{ route('pembayaran.store') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <label for="metode">Metode Pembayaran</label>
                        <select name="metode" class="form-control" id="metode" onchange="handleMetodeChange()">
                            <option disabled selected>Pilih Metode</option>
                            <option value="BANK">BANK</option>
                            <option value="E-WALET">E-WALET</option>
                        </select>

                        <label for="tujuan" class="mt-3">Tujuan</label>
                        <input type="text" id="tujuan" name="tujuan" class="form-control"
                            placeholder="Masukkan tujuan">

                        <label for="keterangan" class="mt-3">Keterangan</label>
                        <input type="text" id="keterangan" name="keterangan" class="form-control"
                            placeholder="Masukkan tujuan">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger light btn-sm" data-bs-dismiss="modal">Close</button>
                    <button type="sumbit" class="btn btn-primary btn-sm">Save changes</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script>
        function handleMetodeChange() {
            var metodeSelect = document.getElementById('metode');
            var tujuanInput = document.getElementById('tujuan');
            var keteranganInput = document.getElementById('keterangan');

            if (metodeSelect.value === 'E-WALET') {
                keteranganInput.type = 'file';
            } else {
                keteranganInput.type = 'text';
            }
        }
    </script>
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Metode Pembayaran</h4>
                <button type="button" class="btn btn-primary btn-sm mb-2" data-bs-toggle="modal"
                    data-bs-target="#basicModal">Tambah</button>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-responsive-md">
                        <thead>
                            <tr>
                                <th><strong>NO.</strong></th>
                                <th><strong>Metode</strong></th>
                                <th><strong>TUJUAN</strong></th>
                                <th><strong>KETERANGAN</strong></th>
                                <th><strong>Aksi</strong></th>
                                <th><strong></strong></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($pembayaran as $item)
                                <tr>
                                    <td><strong>{{ $loop->iteration }}</strong></td>
                                    <td><span>{{ $item->metode }}</span></td>
                                    <td><span>{{ $item->tujuan }}</span></td>
                                    <td>
                                        @if ($item->metode === 'E-WALET')
                                            <img src="{{ asset('storage/pembayaran/' . $item->keterangan) }}" class=""
                                                width="100"alt="">
                                    </td>
                                @else
                                    <span>{{ $item->keterangan }}</span>
                            @endif
                            <td>
                                <div class="d-flex">
                                    <a href="#" class="btn btn-primary shadow btn-xm sharp me-1"><i
                                            class="fa fa-pencil"></i></a>
                                    <form action="{{ route('pembayaran.delete', ['id' => $item->id]) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger shadow btn-xm sharp"><i class="fa fa-trash"></i></button>
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
