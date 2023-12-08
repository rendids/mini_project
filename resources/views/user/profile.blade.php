@extends('layoutsuser.appprofile')
@section('profile')
    <style>
        .tex {
            color: #0E2954;
            font-family: Poppins;
            font-style: normal;
            font-weight: 600;
            line-height: normal;
        }

        .nav-link {
            display: block;
            padding: 0.5rem 1rem;
        }

        .nav-link:focus,
        .nav-link:hover {
            text-decoration: none;
        }

        .nav-link.disabled {
            color: #6c757d;
            pointer-events: none;
            cursor: default;
        }

        .nav-tabs {
            border-bottom: 1px solid #dee2e6;
        }

        .nav-tabs .nav-link {
            margin-bottom: -1px;
            border: 1px solid transparent;
            border-top-left-radius: 0.25rem;
            border-top-right-radius: 0.25rem;
        }

        .nav-tabs .nav-link:focus,
        .nav-tabs .nav-link:hover {
            border-color: #e9ecef #e9ecef #dee2e6;
        }

        .nav-tabs .nav-link.disabled {
            color: transparent;
            background-color: transparent;
            border-color: transparent;
        }

        .nav-tabs .nav-item.show .nav-link,
        .nav-tabs .nav-link.active {
            color: transparent;
            background-color: #fff;
            border-color: #dee2e6 #dee2e6 #fff;
        }

        .nav-tabs .dropdown-menu {
            margin-top: -1px;
            border-top-left-radius: 0;
            border-top-right-radius: 0;
        }

        .nav-pills .nav-link {
            border-radius: 0.25rem;
        }

        .nav-pills .nav-link.active,
        .nav-pills .show>.nav-link {
            color: #0E2954;
            border-bottom: 3px solid #0E2954;
            border-radius: 0;
            background-color: transparent;
        }
    </style>
    <div class="col-xxl-12">
        <div class="isi">
            <div class="d-flex justify-content-end">
                <ul class="nav nav-pills card-header-pills" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active fw-bold" data-bs-toggle="tab" href="#developers" role="tab">
                            <h4>Profil</h4>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link fw-bold" data-bs-toggle="tab" href="#designers" role="tab">
                            <h4>Kata Sandi</h4>
                        </a>
                    </li>
                </ul>
                <div class="flex-grow-1">
                    <p class="text-muted mb-0"></p>
                </div>
            </div><!-- end card header -->
            <hr>
            <!-- Add the rest of your content here -->
        </div>
    </div>


    <div class="card-body">
        <!-- Tab panes -->
        <div class="d-flex">
            <div class="col-4" style="border-right:2px solid black">
                <form action="{{ route('updatefoto', ['id' => $data_user->id]) }}" method="POST"
                    enctype="multipart/form-data" class="form-horizontal">
                    @method('PUT')
                    @csrf
                    <div class="card d-flex align-items-center p-2 h-100 border-0 justify-content-center">
                        <div style="border-radius: 100%; height:150px; width:155px; margin-bottom: 25px">
                            <img src="{{ asset('storage/' . $data_user->foto) }}" class="profile-image card-img-top"
                                alt="Profile" id="photo-profile" style="width: 100%; height: 100%; border-radius:50%;">
                        </div>
                        <div class="text-center" style="height: auto">
                            <h5 class="card-title">{{ $data_user->name }}</h5>
                            @error('foto')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                            <input hidden type="file" name="foto" id="foto"
                                onchange="
                                var reader = new FileReader();

                                reader.onload = function (e) {
                                    $('#photo-profile').attr('src', e.target.result);
                                }


                                reader.readAsDataURL(this.files[0]);
                        ">
                            <label for="foto" class="btn btn-outline-primary btn-block mb-2">Ubah foto
                                profile</label>
                        </div>
                    </form>
                    </div>
            </div>
            <div class="col-8">
                <div class="tab-content text-muted">
                    <div class="tab-pane active" id="developers" role="tabpanel">
                        <div class="row">
                            <div class="row">
                                <div class="col-lg-12">
                                    <form action="{{ route('updateProfile', ['id' => $data_user->id]) }}" method="POST"
                                        enctype="multipart/form-data" class="form-horizontal">
                                        @method('PUT')
                                        @csrf
                                    <div class="card h-100"
                                        style="border-left:none; border-top: none; border-right: none; border-bottom: none; padding-left: 30px; border-radius: 0;">
                                        <div class="card-header">
                                            <h2>Detail Info Penyedia</h2>
                                        </div>
                                        <div class="card-body">
                                            <div class="form-group">
                                                <label for="inputName" class="col-form-label fw-bold fs-4">Nama</label>
                                                <input type="text" class="form-control" name="name" id="inputName"
                                                    placeholder="Nama" value="{{ $data_user->name }}">
                                                @error('name')
                                                    <p class="text-danger">{{ $message }}</p>
                                                @enderror
                                            </div>

                                            <div class="form-group">
                                                <label for="inputEmail" class="col-form-label fw-bold fs-4">Email</label>
                                                <input type="email" class="form-control" name="email" id="inputEmail"
                                                    placeholder="Email" value="{{ $data_user->email }}">
                                                @error('email')
                                                    <p class="text-danger">{{ $message }}</p>
                                                @enderror
                                            </div>

                                            <div class="form-group">
                                                <label for="inputName2" class="col-form-label fw-bold fs-4">No
                                                    Telp</label>
                                                <input type="tel" class="form-control" name="telp" id="telp"
                                                    placeholder="{{ $data_user->telp ?? 'Nomor telepon belum ditambahkan' }}"
                                                    value="{{ $data_user->telp ?? '' }}">
                                                @error('phone')
                                                    <p class="text-danger">{{ $message }}</p>
                                                @enderror
                                            </div>
                                            <div class="form-group">
                                                <label for="inputExperience"
                                                    class="col-form-label fw-bold fs-4">Alamat</label>
                                                <textarea class="form-control" name="alamat" id="inputExperience"
                                                    placeholder="{{ $data_user->alamat ?? 'Alamat belum ditambahkan' }}">{{ $data_user->alamat ?? '' }}</textarea>
                                                @error('alamat')
                                                    <p class="text-danger">{{ $message }}</p>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="d-flex justify-content-end pt-2">
                                <button type="reset" class="btn btn-outline-danger mx-2">Batal</button>
                                <button type="submit" class="btn btn-primary">Simpan</button>
                            </div>

                            </form>

                        </div>
                        <!--end row-->
                    </div>
                    <div class="tab-pane" id="designers" role="tabpanel">
                        <div class="row">
                            <div class="card h-100"
                                style="border-left:none; border-top: none; border-right: none; border-bottom: none; padding-left: 30px; border-radius: 0;">
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="password" class="col-form-label fw-bold fs-4">Password lama</label>
                                        <input type="password" class="form-control" name="password_lama" id="password"
                                            placeholder="masukan password lama">
                                        @error('password_lama')
                                            <p class="text-danger">{{ $message }}</p>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="konfirmasi-password"
                                            class="col-form-label fw-bold fs-4">Password Baru</label>
                                        <input type="password" class="form-control" name="password"
                                            id="konfirmasi-password" placeholder="konfirmasi password">
                                        @error('konfirmasi-password')
                                            <p class="text-danger">{{ $message }}</p>
                                        @enderror
                                    </div>
                                    <div class="d-flex justify-content-end pt-2">
                                        <button type="reset" class="btn btn-outline-danger mx-2">Batal</button>
                                        <form action="{{ route('dashboard.penyedia') }}" method="POST">
                                            @csrf
                                            <!-- Isi formulir dengan input dan field yang sesuai -->

                                            <button type="submit" class="btn btn-primary">Simpan</button>

                                    </div>

                                </div>
                            @endsection
