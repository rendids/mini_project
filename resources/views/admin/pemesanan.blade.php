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
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($pemesan as $itm)
                                <tr>
                                    <td><strong>{{ $loop->iteration }}</strong></td>
                                    <td><strong>{{ $itm->pemesan }}</strong></td>
                                    <td><strong>{{ $itm->penyedia }}</strong></td>
                                    <td><strong>{{ $itm->jasa }}</strong></td>
                                    <td><strong>{{ $itm->total }}</strong></td>
                                    <td>
                                        <div class="d-flex">
                                            <button type="button" class="btn btn-primary shadow btn-xm sharp me-1"
                                                onclick="openModal('{{ $itm->id }}', '{{ $itm->pembayaran }}', '{{ $itm->bukti }}')">
                                                <i class="fa fa-eye"></i>
                                            </button>

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
                                @if ($pemesan->onFirstPage())
                                    <li class="page-item disabled">
                                        <span class="page-link"><i class="la la-angle-left"></i></span>
                                    </li>
                                @else
                                    <li class="page-item">
                                        <a class="page-link" href="{{ $pemesan->previousPageUrl() }}" rel="prev">
                                            <i class="la la-angle-left"></i>
                                        </a>
                                    </li>
                                @endif

                                <!-- Pagination Elements -->
                                @for ($i = 1; $i <= $pemesan->lastPage(); $i++)
                                    <li class="page-item {{ $i == $pemesan->currentPage() ? 'active' : '' }}">
                                        <a class="page-link" href="{{ $pemesan->url($i) }}">{{ $i }}</a>
                                    </li>
                                @endfor

                                <!-- Next Page Link -->
                                @if ($pemesan->hasMorePages())
                                    <li class="page-item">
                                        <a class="page-link" href="{{ $pemesan->nextPageUrl() }}" rel="next">
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
    <div class="modal fade" id="modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel"></h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="metodePengajuan" class="form-label">Metode pembayaran</label>
                        <input type="text" value="" readonly class="form-control" id="metodePembayaran"
                            placeholder="Masukkan metode pengajuan">
                    </div>
                    <div class="mb-3">
                        <label for="keterangan" class="form-label">Bukti</label>
                        <img src="" id="foto" alt="" class="img-fluid">
                    </div>
                </div>
                <form id="formpersetujuuan" action="" method="POST">
                    @csrf
                    @method('PATCH')
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-success">Terima</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
<script>
    function openModal(id, pembayaran, bukti) {
        var setujui = document.getElementById('formpersetujuuan');
        setujui.action = "{{ route('setujui.pemesanan', ['id' => ':id']) }}".replace(':id', id);
        document.getElementById('metodePembayaran').value = pembayaran;
        document.getElementById('foto').src = '{{ asset('storage/bukti') }}/' + bukti;
        $('#modal').modal('show');
    }
</script>
