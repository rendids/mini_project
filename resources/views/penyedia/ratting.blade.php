@extends('layoutsjasa.app')
@section('content')
    <link rel="stylesheet" href="path/to/styles.css">

    <style>
        .cate-title {
        font-size: 36px; /* Ukuran font */
        color: #0355ac; /* Warna teks */
        font-weight: bold; /* Ketebalan font */
        text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.2); /* Efek bayangan teks */
    }

    .custom-h1 {
        border-bottom: 2px solid #0355ac; /* Garis bawah tebal dengan warna tertentu */
        display: inline-block; /* Menampilkan elemen sebagai inline block */
        padding-bottom: 8px; /* Ruang bawah antara teks dan garis bawah */
        margin-bottom: 10px; /* Ruang bawah total elemen */
    }
    .card {
        transition: transform 0.3s;
        /* Efek transisi saat hover */
        border-radius: 10px;
        overflow: hidden;
        /* Memberikan efek sudut melengkung */
    }

    .card:hover {
        transform: scale(1.05);
        /* Perbesar kartu saat dihover */
        box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
        /* Efek bayangan saat dihover */
    }

    .restro-review {
        border-bottom: 1px solid #ccc;
        padding-bottom: 10px;
        margin-bottom: 10px;
    }

    .restro-review img {
        width: 50px;
        height: 50px;
        border-radius: 50%;
        margin-right: 10px;
        /* Memberikan efek sudut melengkung pada gambar profil */
    }

    .recent-review {
        margin-top: 10px;
    }

    .recent-review ul {
        padding: 0;
        list-style: none;
        display: flex;
    }

    .recent-review li {
        margin-right: 5px;
    }

    .recent-review svg {
        fill: #FC8019;
        /* Warna bintang diisi (rated) */
        width: 16px;
        height: 15px;
    }

    .recent-review h6 {
        color: black;
        margin-top: 10px;
    }
    </style>


        <div>
            <h1 class="cate-title font-w1000 mb-4 custom-h1">Ratting</h1>
            <div class="d-flex align-items-center justifiy-content-between mb-4">

        </div>
        <div class="tab-content" id="pills-tabContent">
            <div class="tab-pane fade show active" id="pills-grid" role="tabpanel" aria-labelledby="pills-grid-tab">
                <div class="row">
                    @foreach ($ratings as $item)
                        <div class="col-xl-3 col-xxl-4 col-sm-6">
                            <div class="card shadow">
                                <div class="card-body shadow" style="background-color: #dee6f3">
                                    <div class="restro-review d-flex align-items-center border-bottom mb-4  pb-4">
                                        <img src="{{ asset('storage/' . $item->user->foto) }}" alt="">
                                        <div>
                                            <h4 class="font-w500">{{ $item->user->name }}</h4>
                                        </div>
                                    </div>
                                    <div class="recent-review d-flex align-items-center">
                                        <div>
                                            <ul class="d-flex mb-2">
                                                @for ($i = 1; $i <= 5; $i++)
                                                    <li>
                                                        <svg width="16" height="15" viewBox="0 0 16 15"
                                                            fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            @if ($i <= $item->ratting)
                                                                <path
                                                                    d="M8 0.500031L9.79611 6.02789H15.6085L10.9062 9.4443L12.7023 14.9722L8 11.5558L3.29772 14.9722L5.09383 9.4443L0.391548 6.02789H6.20389L8 0.500031Z"
                                                                    fill="#FC8019"></path>
                                                            @else
                                                                <path
                                                                    d="M8 0.500031L9.79611 6.02789H15.6085L10.9062 9.4443L12.7023 14.9722L8 11.5558L3.29772 14.9722L5.09383 9.4443L0.391548 6.02789H6.20389L8 0.500031Z"
                                                                    fill="none" stroke="#FC8019"></path>
                                                            @endif
                                                        </svg>
                                                    </li>
                                                @endfor
                                            </ul>

                                        </div>
                                    </div>
                                    <h6 style="color: black">{{ $item->komentar }}</h6>
                                    <div>
                                        <h6 class="font-w400">{{ $item->pesanan->waktu }}</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
