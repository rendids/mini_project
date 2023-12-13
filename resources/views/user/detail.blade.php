@extends('layoutsuser.app')

<style>
    .larger-text {
        font-size: 15px;
        /* Sesuaikan ukuran teks yang diinginkan */
    }

    .content-body {
        min-height: 1500px !important;
    }

    .btn-outline-danger:hover {
        color: #fff;
        background-color: #dc3545;
        border-color: #dc3545;
    }

    .btn-primary:hover {
        color: #fff;
        background-color: #007bff;
        border-color: #007bff;
    }

    .rating-container {
        display: flex;
        align-items: center;
    }

    .rating-score {
        font-size: 36px;
        /* Sesuaikan ukuran font sesuai keinginan */
        margin-bottom: 10px;
        /* Tambahkan margin bawah jika diperlukan */
        font-weight: bold;
        margin-right: 8px;
    }

    .star-rating {
        display: flex;
        align-items: center;
        gap: 4px;

    }


    .star-icon {
        display: inline-block;
        width: 18px;
        height: 18px;
        fill: #f39c12;
        /* Warna bintang */
    }

    .review-count {
        margin-left: 8px;
        font-size: 18px;
        color: #636363;
        /* Warna teks ulasan */
    }
</style>

@section('content')
    <h1 class="text-capitalize">
        detail dari : <span class="text-primary">{{ $sedia->layanan }} - {{ $sedia->user->name }}</span>
    </h1>
    <br>
    <div class="d-flex flex-row gap-2 flex-wrap"
        style="border: 1px solid rgb(128, 128, 128); border-radius: 10px; height: 490px">
        <div class="tab-pane fade show active" id="pills-grid" role="tabpanel" aria-labelledby="pills-grid-tab">
            <div class="row">
                <div
                    class="d-flex align-items-center justify-content-xl-between justify-content-center flex-wrap pagination-bx">
                    <div class="mb-sm-0 mb-3 pagination-title">
                    </div>
                    <div class="card w-100" style="border: none">
                        <div class="card-body d-flex align-items-center" style="margin-top: -20px;">
                            <div class="col-md-12">
                                <div class="card-body">
                                    <div class="">
                                        <img src="{{ asset('storage/' . $sedia->foto) }}" class="card-img-top"
                                            alt="..."
                                            style="width: 100%; object-fit: cover; height: auto; max-height: 200px; ">
                                    </div>
                                    <h6 class="text-capitalize text-primary" style="font-size: 50px">{{ $sedia->layanan }}
                                    </h6>
                                    <br>
                                    <h5 class="card-text">Jika ingin memesan, tentukan jadwal pertemuan.</h5>
                                    <h5> Lalu hubungi kontak di bawah untuk informasi selanjutnya:</h5>
                                    <ul class="list-unstyled text-black">
                                        <li class="larger-text"><strong>Nama:</strong> {{ $sedia->user->name }}
                                        </li>
                                        <li class="larger-text"><strong>No. Telepon:</strong>
                                            {{ $sedia->telp }}</li>
                                        <li class="larger-text"><strong>Jadwal Libur:</strong> Tanggal Merah dan
                                            Hari Besar
                                        </li>
                                    </ul>
                                    <br>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-6 col-xxl-6 col-sm-6">
            <div class="card mb-3 w-100" style="border: none">
                <div class="row g-0">
                    <div class="col-md-12">
                        <div class="card-body">
                            <form action="{{ route('buat.pemesanan', ['id' => $sedia->id]) }}" method="POST"
                                enctype="multipart/form-data">
                                @csrf

                                <input type="hidden" name="penyedia" class="form-control" readonly
                                    value="{{ $sedia->user->name }}" id="penyedia">

                                <label for="name" class="fs-4 fw-bold">No Telp</label>
                                <input type="number" name="nopemesan" class="form-control" placeholder="Masukkan no telp"
                                    id="no_hp_penyedia">
                                @error('nopemesan')
                                    <span class="text-danger my-2">{{ $message }}</span>
                                @enderror
                                <br>

                                <input type="hidden" name="jasa" class="form-control" readonly
                                    value="{{ $sedia->layanan }}" id="layanan">

                                <label for="name" class="fs-4 fw-bold">Alamat</label>
                                <textarea name="alamatpemesan" id="alamatpemesan" cols="30" rows="10" class="form-control"
                                    placeholder="Masukkan alamat Anda">{{ old('alamatpemesan') }}</textarea>
                                @error('alamatpemesan')
                                    <span class="text-danger my-2">{{ $message }}</span>
                                @enderror
                                <br>

                                <label for="" class="fs-4 fw-bold">Tanggal</label>
                                <input type="datetime-local" class="form-control" name="waktu" id="tanggal">
                                @error('waktu')
                                    <span class="text-danger my-2">{{ $message }}</span>
                                @enderror
                                <br>
                                <div class="modal-footer">
                                    <button onclick="window.location =`{{ route('detail', ['id' => $sedia->id]) }}`"
                                        type="button" class="btn btn-outline-danger">Batal</button>
                                    <!-- Tombol Lanjutkan -->
                                    <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                        data-bs-target="#modalPembayaran">
                                        Lanjutkan
                                    </button>

                                    <!-- Modal Pembayaran -->
                                    <div class="modal fade" id="modalPembayaran" tabindex="-1"
                                        aria-labelledby="modalPembayaranLabel" aria-hidden="true">
                                        <div class="modal-dialog ">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="modalPembayaranLabel">Bayar</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                        aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <label for="">Pilih metode pembayaran</label>
                                                            <select class="form-control" name="pembayaran"
                                                                id="metodePembayaran" onchange="showKeterangan()">
                                                                <option selected disabled>Pilih metode pembayaran Anda
                                                                </option>
                                                                @foreach ($bayar as $item)
                                                                    <option value="{{ $item->tujuan }}"
                                                                        data-keterangan="{{ $item->keterangan }}"
                                                                        category-keterangan ="{{ $item->metode }}">
                                                                        {{ $item->tujuan }}</option>
                                                                @endforeach
                                                            </select>
                                                            @error('pembayaran')
                                                                <span class="text-danger my-2">{{ $message }}</span>
                                                            @enderror
                                                        </div>
                                                        <div class="col-md-6" id="keteranganContainer"
                                                            style="display: none;">
                                                            <label>keterangan</label>
                                                            <input type="text" class="form-control" readonly
                                                                id="keteranganInput">
                                                            <img src="" class="img-fluid" style="display: none;"
                                                                id="displayImage" alt="">

                                                        </div>
                                                    </div>
                                                    <div class="row my-3">
                                                        <div class="col-md-12">
                                                            <label for="">Bukti pembayaran</label>
                                                            <input type="file" name="bukti" class="form-control">
                                                            @error('bukti')
                                                                <span class="text-danger my-2">{{ $message }}</span>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                </div>
                                                <script>
                                                    function showKeterangan() {
                                                        var selectElement = document.getElementById("metodePembayaran");
                                                        var keteranganContainer = document.getElementById("keteranganContainer");
                                                        var keteranganInput = document.getElementById("keteranganInput");
                                                        var displayImage = document.getElementById("displayImage");

                                                        var selectedOption = selectElement.options[selectElement.selectedIndex];
                                                        var selectedKeterangan = selectedOption.getAttribute("data-keterangan");
                                                        var category = selectedOption.getAttribute("category-keterangan");

                                                        if (selectedKeterangan) {

                                                            if (category == 'BANK') {
                                                                keteranganContainer.style.display = "block";
                                                                keteranganInput.style.display = "block";
                                                                keteranganInput.value = selectedKeterangan;
                                                                displayImage.style.display = "none";
                                                            } else {
                                                                keteranganContainer.style.display = "block";
                                                                displayImage.src = "{{ asset('storage/pembayaran/') }}/" + selectedKeterangan;
                                                                keteranganInput.style.display = "none";
                                                                displayImage.style.display = "block";
                                                            }
                                                        } else {
                                                            keteranganContainer.style.display = "none";
                                                            keteranganInput.value = "";
                                                        }
                                                    }
                                                </script>
                                                <div class=" p-3 pb-0 d-flex justify-content-start">
                                                    <div class="d-flex align-items-start">
                                                        <h3 class="mb-0">Total:</h3>
                                                    </div>
                                                    <h4 class="mt-2 mb-0">
                                                        {{ 'Rp ' . number_format($sedia->harga + $sedia->harga * 0.1, 0, ',', '.') }}
                                                    </h4>

                                                    <input hidden name="total" type="text"
                                                        value="{{ $sedia->harga + $sedia->harga * 0.1 }}">
                                                </div>
                                                <div class="d-flex align-items-start ml-3 p-3 pt-0">
                                                    <span style="color: red; font-size: 12px;" class=""><i>*Termasuk
                                                            biaya admin Sebesar:10%</i></span>
                                                </div>
                                                <button type="submit" class="btn btn-primary mx-3 mb-3">Bayar</button>


                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br><br>

    <div class="d-flex "
        style="left: -424px; position: absolute; top: 487px; margin-top: 40px; display: block !important;">
        <div class="rating-container">
            <div class="rating-score">
                <h1>{{ $formattedAverageRating }}</h1>
            </div>
            <div class="star-rating">
                @for ($i = 0; $i < $filledStars; $i++)
                    <i class="fa-solid fa-star text-warning fs-2"></i>
                @endfor

                @for ($i = 0; $i < $emptyStars; $i++)
                    <i class="fa-regular fa-star text-warning fs-2"></i>
                @endfor
            </div>
            <div class="review-count">{{ $numberOfReviews }} ulasan</div>
        </div>
        <br>
        @foreach ($komentar as $item)

        <div class="recent-review d-flex align-items-center mb-2">
            <img src="{{ asset('storage/'.$item->user->foto) }}" alt="">
            <div>
                <h4 class="font-w00 ">{{ $item->user->name }}</h4>
                @for ($i = 0; $i < $filledStars; $i++)
                    <i class="fa-solid fa-star text-warning fs-4"></i>
                @endfor

                @for ($i = 0; $i < $emptyStars; $i++)
                    <i class="fa-regular fa-star text-warning fs-4"></i>
                @endfor
            </div>
        </div>
        <p>{{ $item->komentar }}</p>
        <div>
            <h6 class="font-w400">Di Pesan {{ $item->pesanan->waktu }}</h6>
        </div>
        @endforeach

    </div>
    </div>
    </div>
@endsection
