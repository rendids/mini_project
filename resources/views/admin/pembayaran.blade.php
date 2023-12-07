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
                    <h5 class="modal-title">Tambah Pembayaran</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal">
                    </button>
                </div>
                <div class="modal-body">
                    <form action="{{ route('pembayaran.store') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="metode">Metode Pembayaran</label>
                            <select name="metode" class="form-control" id="metode" onchange="handleMetodeChange()">
                                <option disabled selected>Pilih Metode</option>
                                <option value="BANK">BANK</option>
                                <option value="E-WALET">E-WALET</option>
                            </select>
                            @error('metode')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="tujuan" class="mt-3">Tujuan</label>
                            <input type="text" id="tujuan" name="tujuan" class="form-control" placeholder="Masukkan tujuan">
                            @error('tujuan')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="keterangan" class="mt-3">Keterangan</label>
                            <input type="text" id="keterangan" name="keterangan" class="form-control" placeholder="Masukkan keterangan">
                            @error('keterangan')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger light btn-sm" data-bs-dismiss="modal">Tutup</button>
                            <button type="submit" class="btn btn-primary btn-sm">Simpan</button>
                        </div>
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
                            <tr class="bg-primary text-white">
                                <th><strong>No</strong></th>
                                <th><strong>Metode</strong></th>
                                <th><strong>Tujuan</strong></th>
                                <th><strong>Keterangan</strong></th>
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
                                    <button class="btn btn-primary shadow btn-xm sharp me-1"
                                        onclick="openEditModal('{{ $item->id }}', '{{ $item->metode }}', '{{ $item->tujuan }}', '{{ $item->keterangan }}')">
                                        <i class="fas fa-pencil"></i>
                                    </button>
                                    <form action="{{ route('pembayaran.delete', ['id' => $item->id]) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger shadow btn-xm sharp"><i
                                                class="fa fa-trash"></i></button>
                                    </form>
                                </div>
                            </td>
                            </tr>
                            @endforeach

                        </tbody>
                    </table>
                    <div class="d-flex align-items-center justify-content-xl-between justify-content-center flex-wrap pagination-bx">
                        <div class="mb-sm-0 mb-3 pagination-title">
                            <!-- You can add any title or information here -->
                        </div>
                        <nav>
                            <ul class="pagination pagination-gutter">
                                <!-- Previous Page Link -->
                                @if ($pembayaran->onFirstPage())
                                    <li class="page-item disabled">
                                        <span class="page-link"><i class="la la-angle-left"></i></span>
                                    </li>
                                @else
                                    <li class="page-item">
                                        <a class="page-link" href="{{ $pembayaran->previousPageUrl() }}" rel="prev">
                                            <i class="la la-angle-left"></i>
                                        </a>
                                    </li>
                                @endif

                                <!-- Pagination Elements -->
                                @for ($i = 1; $i <= $pembayaran->lastPage(); $i++)
                                    <li class="page-item {{ $i == $pembayaran->currentPage() ? 'active' : '' }}">
                                        <a class="page-link" href="{{ $pembayaran->url($i) }}">{{ $i }}</a>
                                    </li>
                                @endfor

                                <!-- Next Page Link -->
                                @if ($pembayaran->hasMorePages())
                                    <li class="page-item">
                                        <a class="page-link" href="{{ $pembayaran->nextPageUrl() }}" rel="next">
                                            <i class="la la-angle-right"></i>
                                        </a>
                                    </li>
                                @else
                                    <li class="page-item disabled">
                                        <span class="page-link"><i class="la la-angle-right"></i></span>
                                    </li>
                                @endif
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="editModal" style="display: none;" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Edit Pembayaran</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <form id="editForm" action="" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('patch')
                        <label for="edit_name">Metode</label>
                        <input type="text" class="form-control" name="metode" id="edit_name" readonly>

                        <label for="edit_tujuan">Tujuan</label>
                        <input type="text" class="form-control" name="tujuan" id="edit_tujuan" readonly>

                        <label for="edit_keterangan">Keterangan</label>
                        <input type="text" class="form-control" name="keterangan" id="edit_keterangan">
                        <div style="margin-top: 30px; margin-left:1%">
                        <img src="{{ asset('storage/pembayaran/' . $item->keterangan) }}" width="300" alt="">

                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger light btn-sm" data-bs-dismiss="modal">Tutup</button>
                    <button type="submit" form="editForm" class="btn btn-primary btn-sm">Simpan</button>
                </div>
            </div>
        </div>
    </div>

    <script>
        function openEditModal(id, metode, tujuan, keterangan) {
            var editForm = document.getElementById('editForm');
            editForm.action = "{{ route('pembayaran.update', ['id' => ':id']) }}".replace(':id', id);

            document.getElementById('edit_name').value = metode;
            document.getElementById('edit_tujuan').value = tujuan;

            var keteranganInput = document.getElementById('edit_keterangan');
            keteranganInput.value = keterangan;

            // Display the existing file preview

            // Change input type based on metode
            if (metode === 'E-WALET') {
                keteranganInput.type = 'file';
            } else {
                keteranganInput.type = 'text';
            }

            // Tampilkan modal
            $('#editModal').modal('show');
        }
    </script>



@endsection
