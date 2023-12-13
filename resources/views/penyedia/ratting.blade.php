@extends('layoutsjasa.app')
@section('content')
    <link rel="stylesheet" href="path/to/styles.css">

    <style>
        .custom-h1 {
            font-size: 3rem;
        }
    </style>
    <div class="card-body">
        <div>
            <h1 class="cate-title font-w1000 mb-4 custom-h1">Ratting</h1>
            <div class="d-flex align-items-center justifiy-content-between mb-4">
            </div>
        </div>
        <div class="tab-content" id="pills-tabContent">
            <div class="tab-pane fade show active" id="pills-grid" role="tabpanel" aria-labelledby="pills-grid-tab">
                <div class="row">
                    @foreach ($ratings as $item)
                        <div class="col-xl-3 col-xxl-4 col-sm-6">
                            <div class="card">
                                <div class="card-body" style="background-color: #bcc9dd">
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
@endsection
