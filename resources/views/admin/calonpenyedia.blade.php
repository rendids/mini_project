@extends('layouts.app')
@section('content')


<div class="row page-titles">
    <ol class="breadcrumb">
        <li class="breadcrumb-item active">admin</li>
        <li class="breadcrumb-item">calon penyedia</li>
    </ol>
</div>

<div class="col-lg-12">
    <div class="card">
        <div class="card-header">
            <h4 class="card-title">Persetujuan Calon penyedia jasa</h4>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-responsive-md">
                    <thead>
                        <tr class="bg-primary text-white">
                            <th><strong>No</strong></th>
                            <th><strong>Nama</strong></th>
                            <th><strong>Email</strong></th>
                            <th><strong>Jasa</strong></th>
                            <th><strong>No.Tlpn</strong></th>
                            <th><strong>Aksi</strong></th>
                        </tr>
                    </thead>
                    <tbody>
                        @if ($count > 0)
                        @foreach ($penyediaUsers as $item)
                        <tr>
                            <td><strong>{{ $loop->iteration }}</strong></td>
                            <td><span >{{ $item->name }}</span></div></td>
                            <td>{{ $item->email }}	</td>
                            <td><span >{{ $item->penyedia->layanan }}</span></td>
                            <td>{{ $item->penyedia->telp }}</td>
                            <td>
                                <div class="d-flex">
                                    <form action="{{ route('penyedia.terima', ['id' => $item->id]) }}" method="POST">
                                        @csrf
                                        @method('patch')
                                        <button type="submit" class="btn btn-success shadow btn-xm sharp me-1"><i class="fa fa-check"></i></button>
                                    </form>
                                    <form action="{{ route('penyedia.tolak', ['id' => $item->id]) }}" method="post">
                                        @csrf
                                        @method('delete')
                                        <button type="submit" class="btn btn-danger shadow btn-xm sharp"><i class="fa fa-x"></i></button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                        @endforeach
                        @else
                        <tr>
                            <td colspan="8" class="text-center">No data</td>
                        </tr>
                        @endif
                    </tbody>
                </table>
            </div>
            <div class="d-flex align-items-center justify-content-xl-between justify-content-center flex-wrap pagination-bx">
                <div class="mb-sm-0 mb-3 pagination-title">
                    <!-- You can add any title or information here -->
                </div>
                <nav>
                    <ul class="pagination pagination-gutter">
                        <!-- Previous Page Link -->
                        @if ($penyediaUsers->onFirstPage())
                            <li class="page-item disabled">
                                <span class="page-link"><i class="la la-angle-left"></i></span>
                            </li>
                        @else
                            <li class="page-item">
                                <a class="page-link" href="{{ $penyediaUsers->previousPageUrl() }}" rel="prev">
                                    <i class="la la-angle-left"></i>
                                </a>
                            </li>
                        @endif

                        <!-- Pagination Elements -->
                        @for ($i = 1; $i <= $penyediaUsers->lastPage(); $i++)
                            <li class="page-item {{ $i == $penyediaUsers->currentPage() ? 'active' : '' }}">
                                <a class="page-link" href="{{ $penyediaUsers->url($i) }}">{{ $i }}</a>
                            </li>
                        @endfor

                        <!-- Next Page Link -->
                        @if ($penyediaUsers->hasMorePages())
                            <li class="page-item">
                                <a class="page-link" href="{{ $penyediaUsers->nextPageUrl() }}" rel="next">
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
@endsection
