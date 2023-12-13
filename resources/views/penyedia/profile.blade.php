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

        .image-link {
            position: relative;
            display: inline-block;
            overflow: hidden;
            border-radius: 10px;
        }

        .image-link::after {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgb(220, 220, 220);
            opacity: 0;
            transition: opacity 0.5s;
        }

        .image-link:hover::after {
            opacity: 0.2;
        }

        .image {
            object-fit: cover;
            transition: transform 0.5s;
        }

        .image-link:hover .image {
            transform: scale(1.1);
        }

        .icon {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            color: rgb(0, 0, 0);
            font-size: 24px;
            opacity: 0;
            transition: opacity 0.5s;
        }

        .image-link:hover .icon {
            opacity: 1;
        }
    </style>
    <div class="col-xxl-12">
        <div class="isi">
            <div class="d-flex justify-content-between align-items-center mb-3">
                <div>
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
                </div>
                <a href="dashboard" class="ms-2">
                    <i style="margin-right: 8px; font-size:20px;" class="fas fa-arrow-right-from-bracket"></i>
                </a>
            </div>
            <hr>
        </div>
    </div>


    <!-- Add the rest of your content here -->
    <div class="card-body">
        <!-- Tab panes -->
        <div class="d-flex">
            <div class="col-4" style="border-right:2px solid black">
                <form id="updateForm" action="{{ route('fotopenyediaupdate', ['id' => $data_user->id]) }}"
                    method="POST" enctype="multipart/form-data" class="form-horizontal">
                    @method('patch')
                    @csrf
                    <div class="card d-flex align-items-center p-2 h-100 border-0 justify-content-center">
                        <label id="label" for="foto">
                            {{-- <strong><p>choose file</p></strong> --}}
                            <div style="border-radius: 100%; height:150px; width:155px; margin-bottom: 25px"
                                class="image-link">
                                <img id="photo-profile" src="{{ asset('storage/' . $data_user->penyedia->foto) }}"
                                    class="profile-image card-img-top image" alt="Profile"
                                    style="width: 100%; height: 100%; border-radius:50%;">
                                <span class="icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28"
                                        viewBox="0 0 256 256">
                                        <path fill="currentColor"
                                            d="M156 112a12 12 0 0 1-12 12h-20v20a12 12 0 0 1-24 0v-20H80a12 12 0 0 1 0-24h20V80a12 12 0 0 1 24 0v20h20a12 12 0 0 1 12 12Zm76.49 120.49a12 12 0 0 1-17 0L168 185a92.12 92.12 0 1 1 17-17l47.54 47.53a12 12 0 0 1-.05 16.96ZM112 180a68 68 0 1 0-68-68a68.08 68.08 0 0 0 68 68Z" />
                                    </svg>
                                </span>

                            </div>
                        </label>
                        <div class="text-center" style="height: auto">
                            <h5 class="card-title">{{ $data_user->name }}</h5>
                            @error('foto')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                            <input style="display: none" type="file" name="foto" id="foto"
                                onchange="previewFile()">
                            <button type="submit" class="btn btn-outline-primary btn-block mb-2"
                                onclick="submitForm()">Ubah foto
                                profile</button>
                        </div>
                    </div>
                </form>
                <style>
                </style>

                <script>
                    function previewFile() {
                        var reader = new FileReader();
                        var photoProfile = document.getElementById('photo-profile');

                        reader.onload = function(e) {
                            photoProfile.src = e.target.result;
                        };

                        reader.readAsDataURL(document.getElementById('foto').files[0]);
                    }

                    function submitForm() {
                        var formData = new FormData(document.getElementById('updateForm'));

                        var xhr = new XMLHttpRequest();
                        xhr.open('POST', document.getElementById('updateForm').action, true);
                        xhr.onload = function() {
                            if (xhr.status === 200) {
                                // Handle success, if needed
                                console.log(xhr.responseText);
                                location.reload(); // Reload the page
                            } else {
                                // Handle errors, if needed
                                console.error(xhr.responseText);
                            }
                        };

                        xhr.send(formData);
                    }
                </script>


            </div>
            <div class="col-8">
                <div class="tab-content text-muted">
                    <form action="{{ route('profilepenyediaupdate', ['id' => $data_user->id]) }}"
                        method="POST" enctype="multipart/form-data" class="form-horizontal">
                    <div class="tab-pane active" id="developers" role="tabpanel">
                            <div class="row">
                                <div class="col-lg-12">
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
                                                <label for="inputName2" class="col-form-label fw-bold fs-4">No
                                                    Telp</label>
                                                <input type="tel" class="form-control" name="telp" id="telp"
                                                    placeholder="{{ $data_user->phone ?? 'Nomor telepon belum ditambahkan' }}"
                                                    value="{{ $data_user->penyedia->telp ?? '' }}">
                                                @error('phone')
                                                    <p class="text-danger">{{ $message }}</p>
                                                @enderror
                                            </div>

                                            <div class="form-group">
                                                <label for="inputExperience"
                                                    class="col-form-label fw-bold fs-4">Alamat</label>
                                                <textarea class="form-control" name="alamat" id="inputExperience"
                                                    placeholder="{{ $data_user->penyedia->alamat ?? 'Alamat belum ditambahkan' }}">{{ $data_user->penyedia->alamat ?? '' }}</textarea>
                                                @error('alamat')
                                                    <p class="text-danger">{{ $message }}</p>
                                                @enderror
                                            </div>
                                            <div class="form-group">
                                                <label for="inputExperience" class="col-form-label fw-bold fs-4">Harga
                                                    yang ingin
                                                    Anda tetapkan untuk user</label>
                                                <input type="number" class="form-control" name="harga"
                                                    id="inputExperience"
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
                                <button type="submit" class="btn btn-primary">Simpan</button>
                            </div>
                        </div>
                    </form>
                        <!--end row-->
                </div>
            </div>
            <div class="tab-pane" id="designers" role="tabpanel">
                <div class="row">
                    <form action="{{ route('updatepasswordprofile', ['id' => $data_user->id]) }}" method="POST"
                        enctype="multipart/form-data" class="form-horizontal">
                        @csrf
                        @method('PUT')
                        <div class="card h-100"
                            style="border-left:none; border-top: none; border-right: none; border-bottom: none; padding-left: 30px; border-radius: 0;">
                            <div class="card-body">
                                <div class="card-header">
                                    <h2>Password</h2>
                                </div>
                                <div class="form-group">
                                    <label for="password" class="col-form-label fw-bold fs-4">Password
                                        lama</label>
                                    <input type="password" class="form-control" name="password_lama" id="password"
                                        placeholder="Password lama" value="">
                                    @error('password')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="konfirmasi-password" class="col-form-label fw-bold fs-4">Password
                                        Baru</label>
                                    <input type="password" class="form-control" name="password" id="konfirmasi-password"
                                        placeholder="konfirmasi password">
                                    @error('konfirmasi-password')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="d-flex justify-content-end pt-2">
                                    <button type="reset" class="btn btn-outline-danger mx-2">Batal</button>
                                    <button type="submit" class="btn btn-primary">Simpan</button>

                                </div>
                    </form>

                </div>
            </div>
        @endsection
