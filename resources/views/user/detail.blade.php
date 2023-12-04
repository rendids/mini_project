@extends('layoutsuser.app')

<style>
    .larger-text {
        font-size: 15px; /* Sesuaikan ukuran teks yang diinginkan */
    }
</style>

@section('content')
    <div class="tab-pane fade show active" id="pills-grid" role="tabpanel" aria-labelledby="pills-grid-tab">
        <div class="row">
            <div class="col-xl-3 col-xxl-4 col-sm-6">
            </div>
            <div class="d-flex align-items-center justify-content-xl-between justify-content-center flex-wrap pagination-bx">
                <div class="mb-sm-0 mb-3 pagination-title">
                </div>
                <div class="card" style="width: 200%; height: 120%">
                    <div class="card-body d-flex align-items-center">
                        <img src="{{ asset('storage/oven.jpeg') }}" class="card-img-top" alt="..." style="width: 40%;">
                        <div class="col-md-8">
                            <div class="card-body">
                                <h1>Service Oven</h1>
                                <br>
                                <h5 class="card-text">Jika ingin memesan, tentukan jadwal pertemuan.</h5>
                                <h5> Lalu hubungi kontak di bawah untuk informasi selanjutnya:</h5>
                                <ul class="list-unstyled">
                                    <li class="larger-text"><strong>Nama:</strong> {{ $sedia->user->name }}</li>
                                    <li class="larger-text"><strong>No. Telepon:</strong></li>
                                    <li class="larger-text"><strong>Jadwal Libur:</strong> Tanggal Merah dan Hari Besar</li>
                                </ul>
                                <br>
                                <h2>Harga : 230.000</h2>
                                <br>
                                <a href="#" class="btn btn-primary">Pesan</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
