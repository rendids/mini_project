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
            margin-top: -20px;
            /* Sesuaikan nilai negatif ini untuk menyesuaikan posisi ke atas */
        }

        .card.dishe-bx:hover {
            transform: translateY(-5px);
            transition: transform 0.3s ease;
        }

        /* Tambahkan efek bayangan saat hover */
        .card.dishe-bx:hover {
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2);
        }

        .btn-primary:hover {
            background-color: #1E4FA7;
            /* Ganti warna latar sesuai keinginan Anda */
            border-color: #1E4FA7;
            /* Ganti warna border sesuai keinginan Anda */
        }

        /* Hover effect on icon */
        .btn-primary:hover i {
            color: #ffffff;
            /* Ganti warna ikon sesuai keinginan Anda */
        }

.cate-title {
        color: #2e54b5; /* Warna teks */
        font-size: 2rem; /* Ukuran font */
        margin-bottom: 10px; /* Jarak bawah */
        text-align: center; /* Posisi teks */
        text-transform: uppercase; /* Mengubah teks menjadi huruf kapital */
        font-weight: bold; /* Ketebalan huruf */
        border-bottom: 2px solid #2e54b5; /* Garis bawah */
        padding-bottom: 5px; /* Ruang di bawah teks */
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
            <input type="text" class="form-control border-start-0 border-0 rounded-end-0" name="search"
                placeholder="Cari...." aria-label="Search">
        </form>
    </div>
    <br>


    <div class="">
        <div class=" mb-2 mt-sm-0 mt-3">
            <h4 class=" mb-0 cate-title">Paling Populer</h4>
            <br>

        </div>
        <div class="row">
            @foreach ($bestseller as $item)
                <div class="col-xl-3 col-xxl-4 col-sm-6">
                    <div class="card dishe-bx b-hover style-1 shadow">

                        <div class="card-body pb-0 pt-3 shadow">
                            <div class="text-center mb-2">
                                <img src="{{ asset('storage/' . $item->foto) }}" class="" style="width:100%;"
                                    alt="foto peyedia">
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
                                    @php
                                        $totalRatings = 0;
                                        $jumlahRatings = count($item->ratings);
                                    @endphp

                                    @foreach ($item->ratings as $rating)
                                        @php
                                            $totalRatings += $rating->ratting;
                                        @endphp
                                    @endforeach

                                    @php
                                        $rataRata = $jumlahRatings > 0 ? $totalRatings / $jumlahRatings : 0;
                                        $rataRataFormatted = number_format($rataRata, 1);
                                    @endphp

                                    <h5 class="text-base font-bold mb-1">
                                        Rating:
                                        @php
                                            $starCount = 5;
                                            $filledStars = floor($rataRata);
                                            $emptyStars = $starCount - $filledStars;
                                        @endphp

                                        @for ($i = 0; $i < $filledStars; $i++)
                                            <i class="fa-solid fa-star text-warning"></i>
                                        @endfor

                                        @for ($i = 0; $i < $emptyStars; $i++)
                                            <i class="fa-regular fa-star text-warning"></i>
                                        @endfor
                                    </h5>
                                    ({{ $rataRataFormatted }}) from {{ $jumlahRatings }} users
                                    <div class="star-rating">

                                    </div>

                                    <h5 class="text-base font-bold mb-1">Harga:
                                        <span>{{ 'RP ' . number_format($item->harga, 0, ',', '.') }}</span>
                                    </h5>
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


    <div class="tab-pane fade show active" id="pills-grid" role="tabpanel" aria-labelledby="pills-grid-tab">
        <h2 class=" mb-0 cate-title">SEMUA MENU</h2>
        <br>
        <div class="row">
            @foreach ($penyedia as $item)
                <div class="col-xl-3 col-xxl-4 col-sm-6">
                    <div class="card dishe-bx b-hover style-1 shadow">

                        <div class="card-body pb-0 pt-3 shadow">
                            <div class="text-center mb-2">
                                <img src="{{ asset('storage/' . $item->foto) }}" class="" style="width: 100%;"
                                    alt="foto peyedia">
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
                                    @php
                                        $totalRatings = 0;
                                        $jumlahRatings = count($item->ratings);
                                    @endphp

                                    @foreach ($item->ratings as $rating)
                                        @php
                                            $totalRatings += $rating->ratting;
                                        @endphp
                                    @endforeach

                                    @php
                                        $rataRata = $jumlahRatings > 0 ? $totalRatings / $jumlahRatings : 0;
                                        $rataRataFormatted = number_format($rataRata, 1);
                                    @endphp

                                    <h5 class="text-base font-bold mb-1">
                                        Rating:
                                        @php
                                            $starCount = 5;
                                            $filledStars = floor($rataRata);
                                            $emptyStars = $starCount - $filledStars;
                                        @endphp

                                        @for ($i = 0; $i < $filledStars; $i++)
                                            <i class="fa-solid fa-star text-warning"></i>
                                        @endfor

                                        @for ($i = 0; $i < $emptyStars; $i++)
                                            <i class="fa-regular fa-star text-warning"></i>
                                        @endfor
                                    </h5>
                                    ({{ $rataRataFormatted }}) from {{ $jumlahRatings }} users
                                    <h5 class="text-base font-bold mb-1">Harga:
                                        <span>{{ 'RP ' . number_format($item->harga, 0, ',', '.') }}</span>
                                    </h5>
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
