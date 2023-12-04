@extends('layoutsuser.app')

<style>
    .larger-text {
        font-size: 15px;
        /* Sesuaikan ukuran teks yang diinginkan */
    }
</style>

@section('content')
    <div class="tab-pane fade show active" id="pills-grid" role="tabpanel" aria-labelledby="pills-grid-tab">
        <div class="row">
            <div class="col-xl-3 col-xxl-4 col-sm-6">
            </div>
            <h1>
                detail dari : <span class="text-primary">{{ $sedia->layanan }} - {{ $sedia->user->name }}</span>
            </h1>
            <div class="d-flex align-items-center justify-content-xl-between justify-content-center flex-wrap pagination-bx">
                <div class="mb-sm-0 mb-3 pagination-title">
                </div>
                <div class="card" style="width: 200%; height: 120%">
                    <div class="card-body d-flex align-items-center">
                        <img src="{{ asset('storage/fotopenyedia/' . $sedia->foto) }}" class="card-img-top" alt="..."
                            style="width: 40%;">
                        <div class="col-md-8">
                            <div class="card-body">
                                <h1>{{ $sedia->layanan }}</h1>
                                <br>
                                <h5 class="card-text">Jika ingin memesan, tentukan jadwal pertemuan.</h5>
                                <h5> Lalu hubungi kontak di bawah untuk informasi selanjutnya:</h5>
                                <ul class="list-unstyled">
                                    <li class="larger-text"><strong>Nama:</strong> {{ $sedia->user->name }}</li>
                                    <li class="larger-text"><strong>No. Telepon:</strong> {{ $sedia->telp }}</li>
                                    <li class="larger-text"><strong>Jadwal Libur:</strong> Tanggal Merah dan Hari Besar</li>
                                </ul>
                                <br>
                                <h2>Harga : {{ $sedia->harga }}</h2>
                                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                    pesan
                                  </button>

                                  <!-- Modal -->
                                  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                      <div class="modal-content">
                                        <div class="modal-header">
                                          <h5 class="modal-title" id="exampleModalLabel">Buat Pesanan</h5>
                                          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                          <label for="name">Nama</label>
                                          <input type="text" name="name" class="form-control" placeholder="masukan nama anda" value="{{ old('value') }}" id="">
                                          <label for="name">Nama Penyedia Layanan</label>
                                          <input type="text" name="name" class="form-control" readonly value="{{ $sedia->user->name }}" id="">
                                          <label for="name">No hp Penyedia</label>
                                          <input type="text" name="name" class="form-control" readonly value="{{ $sedia->telp }}" id="">
                                          <label for="name">Layanan</label>
                                          <input type="text" name="name" class="form-control" readonly value="{{ $sedia->layanan }}" id="">
                                          <label for="name">Alamat</label>
                                          <textarea name="" id="" cols="30" rows="10" class="form-control" placeholder="masukan alamat anda"></textarea>
                                          <label for="">hari</label>
                                          <input type="datetime-local" class="form-control" name="" id="">
                                        </div>
                                        <div class="modal-footer">
                                          <button type="button" class="btn btn-outline-danger" data-bs-dismiss="modal">Batal</button>
                                          <button type="submit" class="btn btn-primary">ya</button>
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
    </div>
@endsection
