@extends('layouts.app')
@section('content')


<div class="row page-titles">
    <ol class="breadcrumb">
        <li class="breadcrumb-item active"><a href="javascript:void(0)">Table</a></li>
        <li class="breadcrumb-item"><a href="javascript:void(0)">Bootstrap</a></li>
    </ol>
</div>

<div class="col-lg-12">
    <div class="card">
        <div class="card-header">
            <h4 class="card-title">Exam Toppers</h4>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-responsive-md">
                    <thead>
                        <tr>
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
                        @foreach ($penyediaUsers as $item)
                        <tr>
                            <td><strong>{{ $loop->iteration }}</strong></td>
                            <td><span >{{ $item->name }}</span></div></td>
                            <td>{{ $item->email }}	</td>
                            <td><span >{{ $item->penyedia->kategori->name }}</span></td>
                            <td>{{ $item->penyedia->telp }}</td>
                            <td><img src="" class="rounded-lg me-2" width="60" alt=""></td>
                            <td>
                                <div class="d-flex">
                                    <button type="submit" class="btn btn-success shadow btn-xm sharp me-1"><i class="fa fa-check"></i></button>
                                    <button type="submit" class="btn btn-danger shadow btn-xm sharp"><i class="fa fa-x"></i></button>
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
