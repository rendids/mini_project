@extends('layoutsuser.app')
@section('content')
    <div class="tab-pane fade show active" id="pills-grid" role="tabpanel" aria-labelledby="pills-grid-tab">
        <div class="row">
            <div class="col-xl-3 col-xxl-4 col-sm-6">
            </div>
            <div class="d-flex align-items-center justify-content-xl-between justify-content-center flex-wrap pagination-bx">
                <div class="mb-sm-0 mb-3 pagination-title">
                </div>
                <div class="card" style="width: 200%; height: 200%">
                    <div class="card-body">
                        <p>{{ $sedia->user->name }}</p>
                        <p>{{ $sedia->alamat }}</p>
                        <a href="#" class="btn btn-primary">pesan</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>
@endsection
