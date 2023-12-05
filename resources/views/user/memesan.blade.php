@extends('layoutsuser.appprofile')
@section('profile')
<style>
    .card {
      box-shadow: 0 20px 20px rgba(2, 0, 0, 0.1); /* atur warna dan intensitas sesuai kebutuhan */
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
                  <div class="col-md-12">
                    <div class="card-body">
                      <div class="row">
                        <div class="col-6">
                          <label for="name" class="fs-4 fw-bold">Nama</label>
                          <input type="text" name="name" class="form-control" placeholder="masukkan nama anda" value="{{ old('value') }}" id="">
                          <label for="name" class="fs-4 fw-bold">Nama Penyedia Layanan</label>
                          <input type="text" name="name" class="form-control" readonly value="{{ $sedia->user->name }}" id="">
                          <label for="name" class="fs-4 fw-bold">No hp Penyedia</label>
                          <input type="text" name="name" class="form-control" readonly value="{{ $sedia->telp }}" id="">
                        </div>
                        <div class="col-6">
                          <label for="name" class="fs-4 fw-bold">Layanan</label>
                          <input type="text" name="name" class="form-control" readonly value="{{ $sedia->layanan }}" id="">
                          <label for="name" class="fs-4 fw-bold">Alamat</label>
                          <textarea name="" id="" cols="30" rows="10" class="form-control" placeholder="masukkan alamat anda"></textarea>
                          <label for="" class="fs-4 fw-bold">hari</label>
                          <input type="datetime-local" class="form-control" name="" id="">
                        </div>
                      </div>
                    </div>
                    <div class="modal-footer">
                      <a href="{{ route('detail', ['id' => $sedia->id]) }}" type="button" class="btn btn-outline-danger">Batal</a>
                      <button type="submit" class="btn btn-primary">Lanjutkan</button>
                    </div>
                  </div>
                </div>
              </div>
@endsection
