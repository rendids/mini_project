@extends('layoutsuser.appprofile')
@section('profile')
    <div class="tab-pane fade show active" id="pills-grid" role="tabpanel" aria-labelledby="pills-grid-tab">
        <div class="row">
            <div class="col-xl-3 col-xxl-4 col-sm-6 ">
            </div>
            <div class="card mb-3 mt-5" style="width:1500px; height:auto">
                <div class="row g-0">
                  <div class="col-md-12">
                    <div class="card-body">
                        <div class="row ">
                        <div class="col-6">
                        <label for="name">Nama</label>
                        <input type="text" name="name" class="form-control" placeholder="masukan nama anda" value="{{ old('value') }}" id="">
                        <label for="name">Nama Penyedia Layanan</label>
                        <input type="text" name="name" class="form-control" readonly value="{{ $sedia->user->name }}" id="">
                        <label for="name">No hp Penyedia</label>
                        <input type="text" name="name" class="form-control" readonly value="{{ $sedia->telp }}" id="">
                        </div>
                        <div class="col-6">
                        <label for="name">Layanan</label>
                        <input type="text" name="name" class="form-control" readonly value="{{ $sedia->layanan }}" id="">
                        <label for="name">Alamat</label>
                        <textarea name="" id="" cols="30" rows="10" class="form-control" placeholder="masukan alamat anda"></textarea>
                        <label for="">hari</label>
                        <input type="datetime-local" class="form-control" name="" id="">
                    </div>
                        </div>
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-outline-danger" data-bs-dismiss="modal">Batal</button>
                        <button type="submit" class="btn btn-primary">ya</button>
                    </div>
                  </div>
                </div>
              </div>
    </div>
@endsection
