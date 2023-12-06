@extends('layoutsuser.app')
@section('content')
    <div class="col-xl-12">
        <div class="card h-auto">
            <div class="card-body p-0">
                <div class="table-responsive">
                    <table class="table table-list i-table style-1 mb-4 border-0 text-center" id="guestTable-all3">
                        <thead>
                            <tr>
                                <th>Jasa</th>
                                <th>tanggal</th>
                                <th>pembayaran</th>
                                <th>Total</th>
                                <th>Action</th>
                                <th>Status</th>

                                <th class="bg-none"></th>
                                <th class="bg-none"></th>
                            </tr>
                        </thead>
                        <tbody>
                                @foreach ($pesananDitolak->merge($pesananDiterima) as $pesanan)
                                    <tr>
                                        <td>

                                            <h5 class="mb-0">{{ $pesanan->jasa }}</h5>
                                            <p class="mb-0">1x </p>
                                        </td>
                                        <td>
                                            <div>
                                                <p class="mb-0">{{ $pesanan->jasa }}</p>
                                            </div>
                                        </td>
                                        <td>
                                            <span>dana</span>
                                        </td>
                                        <td>
                                            <div>
                                                <h4 class="text-primary">$ 5.59</h4>
                                            </div>
                                        </td>
                                        <td><!-- Button trigger modal -->
                                            @if ($pesanan->status == 'di tolak')
                                            <button type="button" class="btn btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="#basicModal">
                                                pengembalian
                                            </button>
                                        @else
                                            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                                Beri Rating
                                            </button>
                                        @endif

                                        </td>
                                        <td>
                                            <div>
                                                <a href="javascript:void(0);"
                                                class="{{ $pesanan->status == 'di tolak' ? 'text-danger' : 'text-success' }}">
                                                {{ $pesanan->status == 'di tolak' ? 'Ditolak' : 'Diterima' }}
                                             </a>

                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    </div>
    <div class="modal fade" id="basicModal" style="display: none;" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Tambah Pembayaran</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal">
                    </button>
                </div>
                <div class="modal-body">
                    <form action="{{ route('pembayaran.store') }}" method="post" enctype="multipart/form-data">
                        @csrf

                        <div class="form-group">
                            <label for="metode">Metode Pembayaran</label>
                            <select name="metode" class="form-control" id="metode" onchange="handleMetodeChange()">
                                <option disabled selected>Pilih Metode</option>
                                <option value="BANK">BANK</option>
                                <option value="E-WALET">E-WALET</option>
                            </select>
                            @error('metode')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="tujuan" class="mt-3">Tujuan</label>
                            <input type="text" id="tujuan" name="tujuan" class="form-control" placeholder="Masukkan tujuan">
                            @error('tujuan')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="keterangan" class="mt-3">Keterangan</label>
                            <input type="text" id="keterangan" name="keterangan" class="form-control" placeholder="Masukkan keterangan">
                            @error('keterangan')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger light btn-sm" data-bs-dismiss="modal">Tutup</button>
                            <button type="submit" class="btn btn-primary btn-sm">Simpan</button>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
    <script>
        function handleMetodeChange() {
            var metodeSelect = document.getElementById('metode');
            var tujuanInput = document.getElementById('tujuan');
            var keteranganInput = document.getElementById('keterangan');

            if (metodeSelect.value === 'E-WALET') {
                keteranganInput.type = 'file';
            } else {
                keteranganInput.type = 'text';
            }
        }
    </script>
    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                                <div class="rating-container">
                                    <i class="far fa-star" data-rating="1" style="font-size: 300%; color: #ffd700;"></i>
                                    <i class="far fa-star" data-rating="2" style="font-size: 300%; color: #ffd700;"></i>
                                    <i class="far fa-star" data-rating="3" style="font-size: 300%; color: #ffd700;"></i>
                                    <i class="far fa-star" data-rating="4" style="font-size: 300%; color: #ffd700;"></i>
                                    <i class="far fa-star" data-rating="5" style="font-size: 300%; color: #ffd700;"></i>

                                    <input type="hidden" id="ratingValue" name="ratting" value="">
                                </div>

                                <div class="row mt-3">
                                    <div class="col-md-12">
                                        <label for="name" class="fs-4 fw-bold">Komentar</label>
                                        <textarea name="komentar" id="" cols="30" rows="10" class="form-control"></textarea>
                                    </div>
                                </div>

                                <div class="modal-footer">
                                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Batal</button>
                                    <button type="submit" class="btn btn-success">Konfirmasi</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
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
            @endsection
