@extends('layoutsuser.appprofile')
@section('profile')
    <nav class="navbar navbar-expand-lg justify-content-center ms-5">
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
                <form action="{{ route('updateProfile', ['id' => $data_user->id]) }}" method="POST"
                    enctype="multipart/form-data" class="form-horizontal">
                    @method('PUT')
                    @csrf
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="card d-flex align-items-center p-2 h-100 border-0 ">
                                <h4 class="text-center mt-2">Profile</h4>
                                <div style="border-radius: 100%; height:150px; width:155px; margin-bottom: 25px">
                                    <img src="{{ asset('storage/' . $data_user->foto) }}"
                                        class="profile-image card-img-top" alt="Profile" id="photo-profile"
                                        style="width: 100%; height: 100%; border-radius:50%;">
                                </div>
                                <div class="text-center" style="height: auto">
                                    <h5 class="card-title">{{ $data_user->name }}</h5>
                                    @error('foto')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                    <input hidden type="file" name="foto" id="foto"
                                        onchange="handleFileChange(this)">
                                    <script>
                                        function handleFileChange(input) {
                                            var reader = new FileReader();

                                            reader.onload = function(e) {
                                                $('#photo-profile').attr('src', e.target.result);
                                            };

                                            reader.readAsDataURL(input.files[0]);
                                        }
                                    </script>

                                    <label for="foto" class="btn btn-outline-primary btn-block mb-2">Ubah foto
                                        profile</label>

                                </div>
                            </div>
                        </div>
                        <div class="col-lg-8">
                            <div class="card h-100"
                                style="border-left: 2px solid #black; border-top: none; border-right: none; border-bottom: none; padding-left: 30px; border-radius: 0;">
                                <div class="card-header">
                                    <h2>Detail Info User</h2>
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
                                        <input type="tel" class="form-control" name="telp" id="no_telp"
                                            placeholder="{{ $data_user->telp ?? 'Nomor telepon belum ditambahkan' }}"
                                            value="{{ $data_user->telp ?? '' }}">
                                        @error('telp')
                                            <p class="text-danger">{{ $message }}</p>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <label for="inputExperience" class="col-form-label fw-bold fs-4">Alamat</label>
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
        </div>

    </div>
@endsection
