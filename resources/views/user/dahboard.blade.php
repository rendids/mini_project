@extends('layoutsuser.app')
@section('content')

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

    <style>
        .fa-eye {
            color: blue; /* Warna yang diinginkan */
            font-size: 24px; /* Sesuaikan ukuran ikon */
        }

        .sub-bx {
            /* Gaya sub-bx Anda */
        }
    </style>

<div class="input-group search-area2 style-1">
    <span class="input-group-text p-0"><a href="javascript:void(0)"><svg class="me-1" width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
    <path d="M27.414 24.586L22.337 19.509C23.386 17.928 24 16.035 24 14C24 8.486 19.514 4 14 4C8.486 4 4 8.486 4 14C4 19.514 8.486 24 14 24C16.035 24 17.928 23.386 19.509 22.337L24.586 27.414C25.366 28.195 26.634 28.195 27.414 27.414C28.195 26.633 28.195 25.367 27.414 24.586ZM7 14C7 10.14 10.14 7 14 7C17.86 7 21 10.14 21 14C21 17.86 17.86 21 14 21C10.14 21 7 17.86 7 14Z" fill="#FC8019"></path>
    </svg>
    </a></span>
    <input type="text" class="form-control p-0" placeholder="What do you want eat today...">
</div>
<br><br>
    <div class="tab-pane fade show active" id="pills-grid" role="tabpanel" aria-labelledby="pills-grid-tab">
        <div class="row">
            @foreach ($penyedia as $item)

                <div class="col-xl-3 col-xxl-4 col-sm-6">
                    <div class="card dishe-bx b-hover style-1">
                            
                        <div class="card-body pb-0 pt-3">
                            <div class="text-center mb-2">
                                <img src="{{ asset('storage/fotopenyedia/' . $item->foto) }}" class="" style="width: 170px;" alt="foto peyedia">
                            </div>
                            <div class="border-bottom pb-3">
                                <div
                                class="text-2xl text-center font-semibold d-flex justify-content-between align-items-center">
                                <h3 class="fs-4 mb-1 fw-bold">{{ $item->user->name }}</h3>
                                <h4 class="fw-bold text-black">{{ $item->layanan }}</h4>
                            </div>
                            </div>
                        </div>
                        <div class="card-footer border-0 pt-2">
                            <div class="common d-flex align-items-center justify-content-between">
                                <div>
                                    <h5 class="text-base font-bold mb-1">Rating: ⭐⭐⭐⭐</h5>
                            <h5 class="text-base font-bold mb-1">Harga: <span>{{ $item->harga }}</span> </h5>
                                </div>
                                <div class="fa-regular fa-eye">
                                    <div class="sub-bx">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>


    <div class="d-flex align-items-center justify-content-xl-between justify-content-center flex-wrap pagination-bx">
        <div class="mb-sm-0 mb-3 pagination-title">

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
