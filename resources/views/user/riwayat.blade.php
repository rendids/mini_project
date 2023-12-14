@extends('layoutsuser.app')
@section('content')
    <style>
        .table-list th {
            color: #fff;
            /* Warna putih */
        }

        /* Gaya untuk menonaktifkan garis tabel default */
        .table-list,
        .table-list th,
        .table-list td {
            border: none;
        }

        /* Gaya untuk latar belakang header tabel */
        .table-list thead {
            background-color: #283fa7;
            /* Ganti dengan warna biru yang diinginkan */
            color: #fff;
            /* Ganti dengan warna teks yang sesuai */
        }

        /* Gaya untuk baris ganjil */
        .table-list tbody tr:nth-child(odd) {
            background-color: #f2f2f2;
            /* Ganti dengan warna latar belakang yang diinginkan */
        }

        /* Gaya untuk baris saat dihover */
        .table-list tbody tr:hover {
            background-color: #e2e5e8;
            /* Ganti dengan warna latar belakang yang diinginkan */
        }

        /* Gaya untuk teks berwarna merah pada status "Di Tolak" */
        .text-red {
            color: #dc3545;
            /* Warna merah */
        }

        /* Gaya untuk teks berwarna orange pada status "Menunggu Konfirmasi" */
        .text-orange {
            color: #fd7e14;
            /* Warna orange */
        }

        /* Gaya untuk teks berwarna hijau pada status "Diterima" */


        /* Gaya untuk box-shadow pada tabel dan garis tepi */
        .table-responsive,
        .table-list {
            border: 1px solid #dee2e6;
            /* Ganti dengan warna garis tepi yang diinginkan */
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.2);
            /* Sesuaikan dengan bayangan yang diinginkan */
        }

        .btn-pengembalian:hover,
        .btn-primary:hover {
            background-color: rgb(223, 147, 24);
            /* Ganti dengan warna latar yang diinginkan */
            color: #fff;
            /* Ganti dengan warna teks yang diinginkan */
        }
    </style>
    <div class="col-xl-12">

        <div class="card h-auto">
            <div class="card-body p-0">
                <div class="table-responsive text-center">
                    <table class="table table-list i-table style-1 mb-4 border-0" id="guestTable-all3">
                        <thead>
                            <tr>
                                <th>Jasa</th>
                                <th>tanggal</th>
                                <th>pembayaran</th>
                                <th>Total</th>
                                <th>Status</th>
                                <th>Action</th>

                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($pesananDitolak as $pesanan)
                                <tr>
                                    <td>
                                        <h5 class="mb-0">{{ $pesanan->jasa }}</h5>
                                    </td>
                                    <td>
                                        <div>
                                            <h5 class="mb-0">{{ $pesanan->waktu }}</h5>
                                        </div>
                                    </td>
                                    <td>
                                        <h5 class="mb-0">{{ $pesanan->pembayaran }}</h5>
                                    </td>
                                    <td>
                                        <div>
                                            <h5 class="mb-0">{{ 'RP ' . number_format($pesanan->total, 0, ',', '.') }}
                                            </h5>
                                        </div>
                                    </td>
                                    <td class=".text-red">
                                        <div>
                                            <strong>
                                                <a href="javascript:void(0);"
                                                    class="
                                                    {{ $pesanan->status == 'di tolak' ? 'text-danger' : '' }}
                                                    {{ $pesanan->status == 'di terima' ? 'text-success' : '' }}
                                                    {{ $pesanan->status == 'pengembalian berhasil' ? 'text-success' : '' }}
                                                    {{ $pesanan->status == 'tunggu pengembalian' ? 'text-warning' : '' }}
                                                    {{ $pesanan->status == 'selesai' ? 'text-primary' : '' }}
                                                    ">
                                                    {{ $pesanan->status }}
                                                </a>
                                            </strong>

                                        </div>
                                    </td>
                                    <td><!-- Button trigger modal -->
                                        @if ($pesanan->status == 'di tolak')
                                            <button type="button" class="btn btn-warning btn-sm btn-pengembalian"
                                                data-pesanan="{{ $pesanan->id }}" data-bs-toggle="modal"
                                                data-bs-target="#basicModal{{ $pesanan->id }}">
                                                pengembalian
                                            </button>
                                        @elseif ($pesanan->status == 'di terima')
                                            <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                                data-bs-target="#exampleModal{{ $pesanan->id }}">
                                                Beri Rating
                                            </button>
                                        @elseif ($pesanan->status == 'selesai')
                                            <button onclick="redirectToDetailPage({{ $pesanan->id }})"
                                                class="btn btn-primary btn-sm fs-1">
                                                pesan lagi
                                            </button>

                                            <script>
                                                function redirectToDetailPage(id) {
                                                    var url = "{{ route('detail', ['id' => ':id']) }}";
                                                    url = url.replace(':id', id);
                                                    window.location.href = url;
                                                }
                                            </script>
                                        @endif
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    @foreach ($pesananDitolak as $pesanan)
        <div class="modal fade" id="basicModal{{ $pesanan->id }}" style="display: none;" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Form pengembalian</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal">
                        </button>
                    </div>
                    <div class="modal-body">
                        <form action="{{ route('pengembalian') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <input type="hidden" name="pesanan_id" id="modalPesananId" value="{{ $pesanan->id }}">
                                <div class="col-md-12">
                                    <label for="">Pilih metode pembayaran</label>
                                    <select class="form-control" name="metode" id="metodePembayaran"
                                        onchange="showKeterangan()">
                                        <option selected disabled>Pilih metode pembayaran Anda
                                        </option>
                                        @foreach ($bayar as $pesanan)
                                            <option value="{{ $pesanan->tujuan }}"
                                                data-keterangan="{{ $pesanan->keterangan }}"
                                                category-keterangan ="{{ $pesanan->metode }}">
                                                {{ $pesanan->tujuan }}</option>
                                        @endforeach
                                    </select>

                                    @error('pembayaran')
                                        <span class="text-danger my-2">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="col-md-12" id="keteranganContainer" style="display: none;">
                                    <label>keterangan</label>
                                    <input type="text" class="form-control" name="keterangan" id="keteranganInput" placeholder="masukan no ">
                                </div>
                            <script>
                                function showKeterangan() {
                                    var selectElement = document.getElementById("metodePembayaran");
                                    var keteranganContainer = document.getElementById("keteranganContainer");
                                    var keteranganInput = document.getElementById("keteranganInput");

                                    var selectedOption = selectElement.options[selectElement.selectedIndex];
                                    var selectedKeterangan = selectedOption.getAttribute("data-keterangan");
                                    var category = selectedOption.getAttribute("category-keterangan");
                                    if (selectedKeterangan) {
                                            keteranganInput.style.display = "block";
                                            keteranganInput.type = 'text'
                                    } else {
                                        keteranganContainer.style.display = "none";
                                    }
                                }
                            </script>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger light btn-sm" data-bs-dismiss="modal">Tutup</button>
                        <button type="submit" class="btn btn-primary btn-sm">Simpan</button>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    @endforeach
    <!-- Modal -->
    @foreach ($pesananDitolak as $pesanan)
        <div class="modal fade" id="exampleModal{{ $pesanan->id }}" tabindex="-1" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-12">
                                <form action="{{ route('rating') }}" method="post">
                                    @csrf
                                    @method('POST')
                                    <input type="hidden" name="pesanan_id" value="{{ $pesanan->id }}">
                                    <input type="hidden" name="pesanan_penyedia_id" value="{{ $pesanan->penyedia->id }}">
                                    <div class="rating-container">
                                        <i class="far fa-star" data-rating="1" style="font-size: 300%; color: #ffd700;"></i>
                                        <i class="far fa-star" data-rating="2" style="font-size: 300%; color: #ffd700;"></i>
                                        <i class="far fa-star" data-rating="3" style="font-size: 300%; color: #ffd700;"></i>
                                        <i class="far fa-star" data-rating="4"
                                            style="font-size: 300%; color: #ffd700;"></i>
                                        <i class="far fa-star" data-rating="5"
                                            style="font-size: 300%; color: #ffd700;"></i>
                                        <input type="hidden" id="ratingValue" name="ratting" value="">
                                    </div>

                                    <div class="row mt-3">
                                        <div class="col-md-12">
                                            <label for="name" class="fs-4 fw-bold">Komentar</label>
                                            <textarea name="komentar" id="" cols="30" rows="10" class="form-control"></textarea>
                                        </div>
                                    </div>

                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-danger"
                                            data-bs-dismiss="modal">Batal</button>
                                        <button type="submit" class="btn btn-success">Konfirmasi</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const stars = document.querySelectorAll(".rating-container i");

            stars.forEach(function(star) {
                star.addEventListener("click", function() {
                    const ratingValue = this.getAttribute("data-rating");
                    document.getElementById("ratingValue").value = ratingValue;
                    highlightStars(ratingValue);
                });
            });
        });

        function highlightStars(rating) {
            const stars = document.querySelectorAll(".rating-container i");

            stars.forEach(function(star) {
                const starRating = star.getAttribute("data-rating");
                if (starRating <= rating) {
                    star.classList.add("fas");
                    star.classList.remove("far");
                } else {
                    star.classList.remove("fas");
                    star.classList.add("far");
                }
            });
        }
    </script>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var modalTriggerButtons = document.querySelectorAll('.btn-pengembalian');

            modalTriggerButtons.forEach(function(button) {
                button.addEventListener('click', function() {
                    var pesananId = this.getAttribute('data-pesanan');
                    console.log(pesananId);
                    document.getElementById('modalPesananId').value = pesananId;
                });
            });
        });
    </script>
@endsection
