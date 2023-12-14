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
            color: #2e54b5;
            /* Warna teks */
            font-size: 2rem;
            /* Ukuran font */
            margin-bottom: 10px;
            /* Jarak bawah */
            text-align: center;
            /* Posisi teks */
            text-transform: uppercase;
            /* Mengubah teks menjadi huruf kapital */
            font-weight: bold;
            /* Ketebalan huruf */
            border-bottom: 2px solid #2e54b5;
            /* Garis bawah */
            padding-bottom: 5px;
            /* Ruang di bawah teks */
        }
    </style>

    <div class="input-group search-area2 style-2">
        <form action="{{ route('dashboard.user') }}" method="GET" class="d-flex">
            <i class="fa fa-search fs-4 mt-3 mx-1"></i>
            <input type="text" class="form-control" name="search" value="{{ old('search', $keyword) }}"
                placeholder="Cari...." aria-label="Search" style="width: 280px;">
        </form>
    </div>

    <br>
    <div class="">
        <div class=" mb-2 mt-sm-0 mt-3">
            <h4 class=" mb-0 cate-title">Paling Populer</h4>
            <br>
        </div>
        <div class="overflow-auto mb-5">
            <div class="row flex-nowrap">
                @foreach ($bestseller as $item)
                    <div class="col-xl-3 col-xxl-4 col-sm-6 ">
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
                                        ({{ $rataRataFormatted }})
                                        dari {{ $jumlahRatings }} pengguna
                                        <div class="star-rating">

                                        </div>

                                        <h5 class="text-base font-bold mb-1">Harga:
                                            <span>{{ 'RP ' . number_format($item->harga, 0, ',', '.') }}</span>
                                        </h5>
                                    </div>
                                    <a href="{{ route('detail', ['id' => $item->id]) }}"
                                        class="btn btn-primary btn-sm fs-1">
                                        <i class="fa-regular fa-eye text-white fs-4"></i>
                                    </a>
                                </div>

                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    <div class="tab-pane fade show active" id="pills-grid" role="tabpanel" aria-labelledby="pills-grid-tab">
        <h2 class=" mb-0 cate-title">SEMUA MENU</h2>
        <div class="row d-flex justify-content-end">
            <div class="col-sm-2">
                <form id="filterForm" action="{{ route('dashboard.user') }}" method="GET">
                    <select id="hargaFilter" name="harga" class="form-select form-select-lg mb-3 mt-3"
                        aria-label="Large select example">
                        <option disabled selected>urutkan dari</option>
                        @if ($filter == 'desc' or 'asc')
                            <option value="">Batal urutan</option>
                        @endif
                        <option {{ $filter == 'desc' ? 'selected' : '' }} value="desc">TerMahal</option>
                        <option {{ $filter == 'asc' ? 'selected' : '' }} value="asc">TerMurah</option>
                    </select>
                    <!-- Hapus tombol "Filter" -->
                </form>
            </div>
        </div>

        <script>
            document.getElementById('hargaFilter').addEventListener('change', function() {
                document.getElementById('filterForm').submit();
            });
        </script>
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
                                    ({{ $rataRataFormatted }})
                                    dari {{ $jumlahRatings }} pengguna
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
