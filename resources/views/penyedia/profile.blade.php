@extends('layoutsuser.appprofile')
@section('profile')



    <style>
        .navbar-nav .nav-link {
            color: #333232;
            position: relative;
            transition: color 0.3s ease-in-out;
            font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
            font-size: 15pt;
            letter-spacing: 1px;
            /* Atur jarak antar huruf sesuai kebutuhan */
            text-transform: uppercase;
            /* Ubah teks menjadi huruf kapital */
        }



        .navbar-nav .nav-link::before {
            content: '';
            position: absolute;
            width: 100%;
            height: 2px;
            /* Ketebalan garis bawah */
            bottom: 0;
            left: 0;
            background-color: transparent;
            /* Warna garis bawah saat normal */
            transition: background-color 0.3s ease-in-out;
        }

        .navbar-nav .nav-link:hover {
            color: #0271e7;
            /* Warna teks saat hover */
        }

        .navbar-nav .nav-link:hover::before {
            background-color: #007bff;
            /* Warna garis bawah saat hover */
        }

        .navbar-nav .nav-item .nav-link {
            display: flex;
            align-items: center;
        }

        .navbar-nav .nav-item .nav-link i {
            margin-right: 6px;
            /* Atur jarak antara ikon dan teks */
        }
    </style>

    <nav class="navbar navbar-expand-lg justify-content-center ms-2">
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item active mt-2" style="font-size: 12pt">
                    <a class="nav-link" href="#home" data-toggle="tab" onclick="openTab('home')">
                        Profile
                    </a>
                </li>
                <li class="nav-item mt-2" style="font-size: 12pt;">
                    <a class="nav-link" href="#about" data-toggle="tab" onclick="openTab('about')">
                        Ubah Password
                    </a>
                </li>
            </ul>
        </div>
    </nav>
    <hr>
    <div class="tab-content mt-3">
        <div class="tab-pane active" id="home">
            <div class="container-fluid mt-3">
                <form action="{{ route('profile.penyedia.update', ['id' => $data_user->id]) }}" method="POST"
                    enctype="multipart/form-data" class="form-horizontal">
                    @method('PUT')
                    @csrf
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="card d-flex align-items-center p-2 h-100 border-0 justify-content-center">
                                <div style="border-radius: 100%; height:150px; width:155px; margin-bottom: 25px">
                                    <img src="{{ asset('storage/' . $data_user->penyedia->foto) }}"
                                        class="profile-image card-img-top" alt="Profile" id="photo-profile"
                                        style="width: 100%; height: 100%; border-radius:50%;">
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
                            </div>
                        </div>
                        <div class="col-lg-8">
                            <div class="card h-100"
                                style="border-left: 2px solid #black; border-top: none; border-right: none; border-bottom: none; padding-left: 30px; border-radius: 0;">
                                <div class="card-header">
                                    <h2>Detail Info Penyedia</h2>
                                </div>
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="inputName" class="col-form-label fw-bold fs-4">Nama</label>
                                        <input type="text" class="form-control" name="name" id="inputName"
                                            placeholder="Nama" value="{{ $data_user->name }}">
                                        @error('nama')
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
                                        <label for="inputName2" class="col-form-label fw-bold fs-4">No Telp</label>
                                        <input type="tel" class="form-control" name="telp" id="telp"
                                            placeholder="{{ $data_user->phone ?? 'Nomor telepon belum ditambahkan' }}"
                                            value="{{ $data_user->penyedia->telp ?? '' }}">
                                        @error('phone')
                                            <p class="text-danger">{{ $message }}</p>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <label for="inputExperience" class="col-form-label fw-bold fs-4">Alamat</label>
                                        <textarea class="form-control" name="alamat" id="inputExperience"
                                            placeholder="{{ $data_user->penyedia->alamat ?? 'Alamat belum ditambahkan' }}">{{ $data_user->penyedia->alamat ?? '' }}</textarea>
                                        @error('alamat')
                                            <p class="text-danger">{{ $message }}</p>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="inputExperience" class="col-form-label fw-bold fs-4">Harga yang ingin
                                            Anda tetapkan untuk user</label>
                                        <input type="number" class="form-control" name="harga" id="inputExperience"
                                            placeholder="{{ $data_user->penyedia->harga ?? 'Harga belum ditetapkan' }}"
                                            value="{{ $data_user->penyedia->harga ?? '' }}">
                                        @error('harga')
                                            <p class="text-danger">{{ $message }}</p>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="d-flex justify-content-end pt-2">
                        <button type="reset" class="btn btn-outline-danger mx-2">Batal</button>
                        <form action="{{ route('dashboard.penyedia') }}" method="POST">
                            @csrf
                            <!-- Isi formulir dengan input dan field yang sesuai -->

                            <button type="submit" class="btn btn-primary">Simpan</button>
                        </form>

                    </div>
                </form>
            </div>
        @endsection
