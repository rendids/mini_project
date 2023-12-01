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
                            <th><strong>NO.</strong></th>
                            <th><strong>NAME</strong></th>
                            <th><strong>Email</strong></th>
                            <th><strong>Jasa</strong></th>
                            <th><strong>No.Tlpn</strong></th>
                            <th><strong>Foto</strong></th>
                            <th><strong>Aksi</strong></th>
                            <th><strong></strong></th>
                        </tr>
                    </thead>
                    <tbody>
                        @if ($count > 0)
                        @foreach ($penyediaUsers as $item)
                        <tr>
                            <td><strong>{{ $loop->iteration }}</strong></td>
                            <td><span >{{ $item->name }}</span></div></td>
                            <td>{{ $item->email }}	</td>
                            <td><span >{{ $item->penyedia->kategori->name }}</span></td>
                            <td>{{ $item->penyedia->telp }}</td>
                            <td><img src="{{ asset('storage/fotopenyedia/'. $item->penyedia->foto) }}" class="rounded-lg me-2" width="60" alt=""></td>
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
        </div>
    </div>
</div>
@endsection
