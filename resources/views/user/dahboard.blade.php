@extends('layoutsuser.app')
@section('content')
    <div class="tab-pane fade show active" id="pills-grid" role="tabpanel" aria-labelledby="pills-grid-tab">
        <div class="row">
            @foreach ($penyedia as $item)
                <div class="col-md-3">
                    <div class="card border-2 border-blue-600 shadow-md mb-3">
                        <img src="{{ asset('storage/fotopenyedia/' . $item->foto) }}" class="" style="width: 170px;" alt="foto peyedia">
                        <div class="card-body">
                            <div
                                class="text-2xl text-center font-semibold d-flex justify-content-between align-items-center">
                                <p class="fs-4 mb-1 fw-bold">{{ $item->user->name }}</p>
                                <p class="fw-bold text-black">{{ $item->layanan }}</p>
                            </div>
                            <p class="text-base font-bold mb-1">Rating: ⭐⭐⭐⭐</p>
                            <p class="text-base font-bold mb-1">Harga: <span>{{ $item->harga }}</span> </p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>



    <div class="d-flex align-items-center justify-content-xl-between justify-content-center flex-wrap pagination-bx">
        <div class="mb-sm-0 mb-3 pagination-title">
            <p class="mb-0"><span>Showing 1-5</span> from <span>100</span> data</p>
        </div>
        <nav>
            <ul class="pagination pagination-gutter">
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
    </div>
@endsection
