@extends('layoutsuser.app')

<style>
    .larger-text {
        font-size: 15px;
        /* Sesuaikan ukuran teks yang diinginkan */
    }
</style>

@section('content')
    <h1>
        detail dari : <span class="text-primary">{{ $sedia->layanan }} - {{ $sedia->user->name }}</span>
    </h1>
    <div class="d-flex flex-row gap-2 flex-wrap" style="border: 1px solid rgb(128, 128, 128); border-radius: 10px">
        <div class="tab-pane fade show active" id="pills-grid" role="tabpanel" aria-labelledby="pills-grid-tab">
            <div class="row">
                <div
                    class="d-flex align-items-center justify-content-xl-between justify-content-center flex-wrap pagination-bx">
                    <div class="mb-sm-0 mb-3 pagination-title">
                    </div>
                    <div class="card w-100" style="border: none">
                        <div class="card-body d-flex align-items-center">
                            <div class="col-md-12">
                                <div class="card-body">
                                    <div class="w-100 object-fit mb-1">
                                        <img class="w-100 object-fit" src="data:image/jpeg;base64,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" alt="" srcset="">
                                    </div>
                                    {{-- <img src="{{ asset('storage/' . $sedia->foto) }}" class="card-img-top" alt="..."
                                        style="width: 40%;"> --}}
                                    <h1>{{ $sedia->layanan }}</h1>
                                    <br>
                                    <h5 class="card-text">Jika ingin memesan, tentukan jadwal pertemuan.</h5>
                                    <h5> Lalu hubungi kontak di bawah untuk informasi selanjutnya:</h5>
                                    <ul class="list-unstyled">
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
                                <label for="name" class="fs-4 fw-bold ">Nama</label>
                                <input type="text" name="pemesan" class="form-control" placeholder="Masukkan nama Anda"
                                    value="{{ old('pemesan') }}" id="pemesan">
                                @error('pemesan')
                                    <span class="text-danger my-2">{{ $message }}</span>
                                @enderror
                                <br>

                                <label for="name" class="fs-4 fw-bold">Nama Penyedia Layanan</label>
                                <input type="text" name="penyedia" class="form-control" readonly
                                    value="{{ $sedia->user->name }}" id="penyedia">
                                <label for="name" class="fs-4 fw-bold">No hp Penyedia</label>
                                <input type="text" class="form-control" readonly value="{{ $sedia->telp }}"
                                    id="no_hp_penyedia">

                                <label for="name" class="fs-4 fw-bold">Layanan</label>
                                <input type="text" name="jasa" class="form-control" readonly
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
                                                        <h3>Total:</h3>
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
            </div>
        </div>
    </div>
@endsection
