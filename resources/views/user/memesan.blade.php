@extends('layoutsuser.appprofile')
@section('profile')
    <style>
        .card {
            box-shadow: 0 20px 20px rgba(2, 0, 0, 0.1);
            /* atur warna dan intensitas sesuai kebutuhan */
        }
    </style>
    <div class="tab-pane fade show active" id="pills-grid" role="tabpanel" aria-labelledby="pills-grid-tab">
        <div class="row">
            <div class="col-xl-3 col-xxl-4 col-sm-6 ">
            </div>
            <div class="card mt-5" style="height:150px; background-color: rgba(4, 0, 255, 0.685); color: white;">
                <div class="card-body">
                    <legend>Pesan Layanan Yang Anda Butuhkan Sekarang</legend>
                    <p>
                        Dapatkan pengalaman terbaik dari jasa layanan unggulan kami.
                        Lihat detail lengkap pelayanan sebelum membuat keputusan.
                        Pastikan data yang Anda berikan akurat agar kami dapat memproses pesanan dengan lancar.
                        Pastikan alamat Anda benar untuk memastikan layanan yang tepat waktu.
                    </p>
                </div>
            </div>
            <div class="card mb-3" style="width:1500px; height:auto">
                <div class="row g-0">
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <strong>Whoops!</strong> Ada beberapa masalah dengan input Anda.<br><br>
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <div class="col-md-12">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-6">
                                    <form action=" {{ route('buat.pemesanan') }}" method="POST"
                                        enctype="multipart/form-data">
                                        @csrf
                                        <label for="name" class="fs-4 fw-bold">Nama</label>
                                        <input type="text" name="pemesan" class="form-control"
                                            placeholder="masukkan nama anda" value="{{ old('value') }}" id="">
                                        <label for="name" class="fs-4 fw-bold">Nama Penyedia Layanan</label>
                                        <input type="text" name="penyedia" class="form-control" readonly
                                            value="{{ $sedia->user->name }}" id="">
                                        <label for="name" class="fs-4 fw-bold">No hp Penyedia</label>
                                        <input type="text" class="form-control" readonly value="{{ $sedia->telp }}"
                                            id="">
                                </div>
                                <div class="col-6">
                                    <label for="name" class="fs-4 fw-bold">Layanan</label>
                                    <input type="text" name="jasa"class="form-control" readonly
                                        value="{{ $sedia->layanan }}" id="">
                                    <label for="name" class="fs-4 fw-bold">Alamat</label>
                                    <textarea name="alamatpemesan" id="" cols="30" rows="10" class="form-control"
                                        placeholder="masukkan alamat anda"></textarea>
                                    <label for="" class="fs-4 fw-bold">tanggal</label>
                                    <input type="datetime-local" class="form-control" name="waktu" id="">
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button onclick="window.location =`{{ route('detail', ['id' => $sedia->id]) }}`" type="button"
                                class="btn btn-outline-danger">Batal</button>
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
                                                    <select class="form-control" name="pembayaran" id="metodePembayaran"
                                                        onchange="showKeterangan()">
                                                        <option selected disabled>Pilih metode pembayaran Anda</option>
                                                        @foreach ($bayar as $item)
                                                            <option value="{{ $item->tujuan }}"
                                                                data-keterangan="{{ $item->keterangan }}"
                                                                category-keterangan ="{{ $item->metode }}">
                                                                {{ $item->tujuan }}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                                <div class="col-md-6" id="keteranganContainer" style="display: none;">
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
                                        <div class="modal-footer ">
                                            <div class="">
                                                <h1>Total</h1>
                                            </div>
                                            <h4 class="">{{ $sedia->harga }}</h4>
                                            <input hidden name="total" type="text" value="{{ $sedia->harga }}">
                                        </div>
                                        <button type="submit" class="btn btn-primary mx-3 mb-3">Bayar</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endsection
