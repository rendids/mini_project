@extends('layoutsuser.app')
@section('content')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

    <style>
        .fa-eye {
            color: blue;
            /* Warna yang diinginkan */
            font-size: 24px;
            /* Sesuaikan ukuran ikon */
        }

        .sub-bx {
            /* Gaya sub-bx Anda */
        }
        .search-area2 {
        margin-top: -20px; /* Sesuaikan nilai negatif ini untuk menyesuaikan posisi ke atas */
    }
    </style>

<div class="input-group search-area2 style-1">
    <form action="{{ route('dashboard.search') }}" method="GET" class="d-flex">
        <span class="input-group-text bg-white border-end-0 p-0">
            <a href="javascript:void(0)" class="text-decoration-none">
                <svg class="me-2" width="24" height="24" viewBox="0 0 32 32" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M27.414 24.586L22.337 19.509C23.386 17.928 24 16.035 24 14C24 8.486 19.514 4 14 4C8.486 4 4 8.486 4 14C4 19.514 8.486 24 14 24C16.035 24 17.928 23.386 19.509 22.337L24.586 27.414C25.366 28.195 26.634 28.195 27.414 27.414C28.195 26.633 28.195 25.367 27.414 24.586ZM7 14C7 10.14 10.14 7 14 7C17.86 7 21 10.14 21 14C21 17.86 17.86 21 14 21C10.14 21 7 17.86 7 14Z"
                        fill="#007BFF"></path>
                </svg>
            </a>
        </span>
        <input type="text" class="form-control border-start-0 border-0 rounded-end-0"
            name="search" placeholder="Cari...." aria-label="Search">
    </form>
</div>
<br>


<div class="col-xl-12">
    <div class="d-flex align-items-center justify-content-between mb-2 mt-sm-0 mt-3">
        <h4 class=" mb-0 cate-title">Best Seller</h4>
        <br>
        <a href="favourite_menu.html" class="text-primary">View all <i class="fa-solid fa-angle-right ms-2"></i></a>
    </div>
    <div class="swiper mySwiper-6 swiper-initialized swiper-horizontal swiper-pointer-events swiper-backface-hidden">
        <div class="swiper-wrapper" id="swiper-wrapper-81e105846e266313f" aria-live="polite" style="transform: translate3d(0px, 0px, 0px);">
            <div class="swiper-slide swiper-slide-active" style="width: 333.667px; margin-right: 20px;" role="group" aria-label="1 / 7">
                <div class="card dishe-bx b-hover review menu-bx">
                    <div class="card-body text-center py-3">
                        <img src="public/assets/images/popular-img/review-img/pic-1.jpg" alt="">
                        <div class="dropdown dropstart c-heart">
                            <a href="javascript:void(0);" class="btn-link" data-bs-toggle="dropdown" aria-expanded="false">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M11 12C11 12.5523 11.4477 13 12 13C12.5523 13 13 12.5523 13 12C13 11.4477 12.5523 11 12 11C11.4477 11 11 11.4477 11 12Z" stroke="#262626" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                    <path d="M18 12C18 12.5523 18.4477 13 19 13C19.5523 13 20 12.5523 20 12C20 11.4477 19.5523 11 19 11C18.4477 11 18 11.4477 18 12Z" stroke="#262626" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                    <path d="M4 12C4 12.5523 4.44772 13 5 13C5.55228 13 6 12.5523 6 12C6 11.4477 5.55228 11 5 11C4.44772 11 4 11.4477 4 12Z" stroke="#262626" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                </svg>
                            </a>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="javascript:void(0);">Edit</a>
                                <a class="dropdown-item" href="javascript:void(0);">Delete</a>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer pt-0 border-0 text-center">
                        <div>
                            <a href="javascript:void(0);"><h4 class="mb-0">Service Oven</h4></a>
                            <h3 class="font-w700 text-primary mb-4">Rp. 220.00</h3>
                            <div class="d-flex align-items-center justify-content-center">
                                <p class="mb-0 pe-2 border-right">Sold 1k</p>
                                <p class="mb-0 ps-2 text-success font-w600">+ 15%</p>
                                <svg class="ms-2" width="24" height="23" viewBox="0 0 24 23" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M23.25 11.5C23.25 5.275 18.225 0.25 12 0.25C5.775 0.249999 0.75 5.275 0.75 11.5C0.749999 17.725 5.775 22.75 12 22.75C18.225 22.75 23.25 17.725 23.25 11.5ZM11.25 16.075L11.25 9.175L9.3 10.9C8.85 11.275 8.25 11.2 7.875 10.825C7.725 10.6 7.65 10.375 7.65 10.15C7.65 9.85 7.8 9.55 8.025 9.4L11.625 6.25C11.7 6.175 11.775 6.175 11.85 6.1C11.925 6.1 11.925 6.1 12 6.025C12.075 6.025 12.075 6.025 12.15 6.025L12.225 6.025C12.3 6.025 12.3 6.025 12.375 6.025L12.45 6.025C12.525 6.025 12.525 6.025 12.6 6.1C12.6 6.1 12.675 6.1 12.675 6.175L12.75 6.25C12.75 6.25 12.75 6.25 12.825 6.325L15.975 9.55C16.35 9.925 16.35 10.6 15.975 10.975C15.6 11.35 14.925 11.35 14.55 10.975L13.125 9.475L13.125 16.15C13.125 16.675 12.675 17.2 12.075 17.2C11.7 17.05 11.25 16.6 11.25 16.075Z" fill="#1FBF75"></path>
                                </svg>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-pagination swiper-pagination-clickable swiper-pagination-bullets swiper-pagination-horizontal"><span class="swiper-pagination-bullet swiper-pagination-bullet-active" tabindex="0" role="button" aria-label="Go to slide 1" aria-current="true"></span><span class="swiper-pagination-bullet" tabindex="0" role="button" aria-label="Go to slide 2"></span><span class="swiper-pagination-bullet" tabindex="0" role="button" aria-label="Go to slide 3"></span><span class="swiper-pagination-bullet" tabindex="0" role="button" aria-label="Go to slide 4"></span><span class="swiper-pagination-bullet" tabindex="0" role="button" aria-label="Go to slide 5"></span></div>
    <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span></div>
</div>

    <div class="tab-pane fade show active" id="pills-grid" role="tabpanel" aria-labelledby="pills-grid-tab">
        <h2 class=" mb-0 cate-title">SEMUA MENU</h2>
        <br>
        <div class="row">
            @foreach ($penyedia as $item)
                <div class="col-xl-3 col-xxl-4 col-sm-6">
                    <div class="card dishe-bx b-hover style-1">

                        <div class="card-body pb-0 pt-3">
                            <div class="text-center mb-2">
                                <img src="{{ asset('storage/' . $item->foto) }}" class=""
                                    style="width: 170px;" alt="foto peyedia">
                            </div>
                            <div class="border-bottom pb-3">
                            </div>
                        </div>
                        <div class="card-footer border-0 pt-2">
                            <div
                                    class="text-2xl text-center font-semibold d-flex justify-content-between align-items-center">
                                    <h3 class="fs-4 mb-1 fw-bold">{{ $item->user->name }}</h3>
                                    <h4 class="fw-bold text-black ">{{ $item->layanan }}</h4>
                        </div>
                            <div class="common d-flex align-items-center justify-content-between">
                                <div>
                                    <h5 class="text-base font-bold mb-1">Rating: ⭐⭐⭐⭐</h5>
                                    <h5 class="text-base font-bold mb-1">Harga: <span>{{ 'RP ' . number_format($item->harga , 0, ',', '.')}}</span> </h5>
                                </div>
                                <a href="{{ route('detail', ['id' => $item->id]) }}" class="btn btn-primary btn-sm fs-1">
                                    <i class="fa-regular fa-eye text-white fs-4"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
<br>


    <div class="d-flex align-items-center justify-content-xl-between justify-content-center flex-wrap pagination-bx">
        <div class="mb-sm-0 mb-3 pagination-title">
            <!-- You can add any title or information here -->
        </div>
        <nav>
            <ul class="pagination pagination-gutter">
                <!-- Previous Page Link -->
                @if ($penyedia->onFirstPage())
                    <li class="page-item disabled">
                        <span class="page-link"><i class="la la-angle-left"></i></span>
                    </li>
                @else
                    <li class="page-item">
                        <a class="page-link" href="{{ $penyedia->previousPageUrl() }}" rel="prev">
                            <i class="la la-angle-left"></i>
                        </a>
                    </li>
                @endif

                <!-- Pagination Elements -->
                @for ($i = 1; $i <= $penyedia->lastPage(); $i++)
                    <li class="page-item {{ $i == $penyedia->currentPage() ? 'active' : '' }}">
                        <a class="page-link" href="{{ $penyedia->url($i) }}">{{ $i }}</a>
                    </li>
                @endfor

                <!-- Next Page Link -->
                @if ($penyedia->hasMorePages())
                    <li class="page-item">
                        <a class="page-link" href="{{ $penyedia->nextPageUrl() }}" rel="next">
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
@endsection
