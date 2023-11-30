<!DOCTYPE html>
<html lang="en" class="h-100">

<head>
    <!-- Title -->
    <title>Login</title>
    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="keywords" content="">
    <meta name="author" content="DexignLab">
    <meta name="robots" content="">
    <meta name="description" content="FoodDesk - CodeIgniter Online Food Delivery Admin Dashboard Template">
    <meta property="og:title" content="FoodDesk - CodeIgniter Online Food Delivery Admin Dashboard Template">
    <meta property="og:description" content="FoodDesk - CodeIgniter Online Food Delivery Admin Dashboard Template">
    <meta property="og:image" content="https://fooddesk.dexignlab.com/xhtml/page-error-404.html">
    <meta name="format-detection" content="telephone=no">

    <!-- Mobile Specific -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Favicon icon -->
    @include('layouts.alert')
    <link rel="shortcut icon" type="image/png" sizes="16x16" href="assets/images/favicon.png">
    <link href="{{ asset('assets/vendor/swiper/css/swiper-bundle.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">

    <style>
        .login-bx .food-img {
            max-width: 100%;
        }
    </style>
</head>

<body class="body">
    <div class="container mt-0">
        <div class="row align-items-center justify-content-center">
            <div class="col-xl-7 col-md-6 sign text-center">
                <div>
                    <img src="{{ asset('assets/images/auth.png') }}" class="food-img" alt="">
                </div>
            </div>
            <div class="col-xl-4 col-md-4 pe-0">
                <div class="sign-in-your">
                    <div class="text-center mb-3">
                        <img src="{{ asset('assets/images/Group.svg') }}" class="mb-3" alt="">
                        <h4 class="fs-19 font-size"></h4>
                        <span class="dlab-sign-up">Register</span>
                    </div>
                    <form action="{{ route('login.proses') }}" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label class="mb-1"><strong>Email</strong></label>
                            <input type="email" class="form-control" name="email"
                                placeholder="Masukkan Alamat Email">
                        </div>
                        <div class="mb-3">
                            <label class="mb-1"><strong>Password</strong></label>
                            <input type="password" class="form-control" name="password"
                                placeholder="Masukkan Kata Sandi">
                        </div>
                        <div class="col-lg-12 d-flex justify-content-between">
                            <div class="form-check mb-3">
                                <input type="checkbox" class="form-check-input" id="customCheck1">
                                <a href="" class="text-secondary" data-bs-toggle="modal"
                                    data-bs-target="#privacyModal">Kebijakan privasi</a>
                            </div>
                            <script>
                                const checkbox = document.getElementById('customCheck1');
                                const form = document.querySelector('form');

                                form.addEventListener('submit', function(event) {
                                    if (!checkbox.checked) {
                                        event.preventDefault(); // Menghentikan pengiriman formulir
                                        swal.fire('Peringatan', 'Anda harus menyetujui kebijakan privasi untuk melanjutkan.', 'warning');
                                    }
                                });
                            </script>
                            <a href="">Lupa Password?</a>
                        </div>
                        <div class="text-center">
                            <button type="submit" class="btn btn-block shadow text-white"
                                style="background-color: #145AAC">Login</button>
                        </div>
                    </form>
                    <div class="text-center my-4">
                        <h6 class="dlab-sign-up style-2">Register</h6>
                    </div>
                    <div style="display: flex;">
                        <div class="card" style="width: 18rem; margin-right: 20px;">
                            <a href="{{ route('register.penyedia') }}">
                                <!-- Menggunakan route untuk halaman registrasi layanan jasa -->
                                <div class="card-body" style="text-align: center;">
                                    <img src="{{ asset('assets/images/penyedia.png') }}" class="card-img-top"
                                        alt="...">
                                    <h5 class="card-title" style="font-size: 19px;"><b>Layanan Jasa</b></h5>
                                </div>
                            </a>
                        </div>
                        <div class="card" style="width: 18rem; margin-right: 20px;">
                            <a href="{{ route('register.user') }}">
                                <!-- Menggunakan URL langsung untuk halaman registrasi pengguna -->
                                <div class="card-body" style="text-align: center;">
                                    <img src="{{ asset('assets/images/penyedia.png') }}" class="card-img-top"
                                        alt="...">
                                    <h5 class="card-title" style="font-size: 19px;"><b>Pengguna</b></h5>
                                </div>
                            </a>
                        </div>
                    </div>

                </div>
            </div>

            <!-- Modal Kebijakan Privasi -->
            <div class="modal fade" id="privacyModal" tabindex="-1" aria-labelledby="privacyModalLabel"
                aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="privacyModalLabel">Kebijakan Privasi</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                aria-label="Close"></button>
                        </div>
                        <div class="modal-body" style="max-height: 450px; overflow-y: scroll;">
                            <h6>Syarat dan Ketentuan</h6>
                            <p>Selamat datang di Website Assist.</p>
                            <p>Ketentuan dan Syarat penggunaan ini menguraikan aturan dan peraturan untuk penggunaan
                                situs web milik Company Assistify, yang terletak di website.com. Dengan mengakses situs web
                                ini, kami menganggap Anda menerima ketentuan dan syarat ini. Jangan lanjutkan
                                menggunakan Website Assistify jika Anda tidak setuju dengan semua ketentuan dan syarat yang
                                tertera di halaman ini.</p>
                            <h6>Terminologi</h6>
                            <p>Terminologi berikut berlaku untuk Ketentuan dan Syarat, Pernyataan Privasi, dan
                                Pemberitahuan Disclaimer ini, serta semua Perjanjian: "Klien", "Anda", dan "Pemilik"
                                mengacu pada Anda, orang yang masuk ke situs web ini, dan mematuhi ketentuan dan syarat
                                perusahaan. "Perusahaan", "Kami", "Kami", "Kami", dan "Kita" mengacu pada perusahaan
                                kami. "Pihak", "Pihak-pihak", atau "Kita", mengacu pada Klien dan kami bersama-sama.
                                Semua istilah mengacu pada penawaran, penerimaan, dan pertimbangan pembayaran yang
                                diperlukan untuk melakukan proses bantuan kami kepada Klien dengan cara yang paling
                                sesuai untuk tujuan ekspres memenuhi kebutuhan Klien dalam penyediaan layanan yang
                                dinyatakan Perusahaan, sesuai dengan dan tunduk pada hukum yang berlaku di Belanda.
                                Penggunaan istilah di atas atau sebagai serupa dan oleh karena itu mengacu pada hal yang
                                sama, baik dalam bentuk tunggal, jamak, huruf kapital, dan/atau "dia" atau "mereka",
                                dianggap sejalan dengan konteks dan interpretasi.
                            <h6>Cookies</h6>
                            <p>Kami menggunakan cookies. Dengan mengakses Website Assistify, Anda setuju untuk menggunakan
                                cookies sesuai dengan kebijakan privasi Company Assistify. Sebagian besar situs web
                                interaktif menggunakan cookies untuk memungkinkan kami mengambil detail fungsionalitas
                                area tertentu agar lebih mudah bagi orang yang mengunjungi situs web kami. Beberapa
                                mitra afiliasi/iklan kami juga dapat menggunakan cookies.</p>
                            <h6>Lisensi</h6>
                            <p>Kecuali dinyatakan lain, Company Assistify dan/atau pemilik hak kekayaan intelektual milik
                                semua materi di website Kuliner Kita. Semua hak kekayaan intelektual dilindungi. Anda
                                dapat mengaksesnya dari website dalam ketentuan dan syarat ini. Penggunaan dari website
                                Kuliner Kita adalah untuk penggunaan pribadi Anda sendiri yang tunduk pada pembatasan
                                yang ditetapkan. Anda tidak boleh:</p>
                            <ol>
                                <li>Memublikasikan ulang materi dari Website Kuliner Kita.</li>
                                <li>Menjual, menyewakan, atau mensublisensikan materi dari Website Kuliner Kita.</li>
                                <li>Menggandakan atau menyalin materi dari Website Kuliner Kita.</li>
                                <li>Mendistribusikan konten dari Website Kuliner Kita.</li>
                            </ol>
                            <p>Perjanjian ini dimulai pada tanggal ini.</p>
                            <h6>Opini dan Informasi</h6>
                            <p>Bagian-bagian dari situs web ini memberikan kesempatan bagi pengguna untuk memposting dan
                                bertukar opini dan informasi di area tertentu dari situs web. Company Assistify tidak
                                menyaring, mengedit, memublikasikan, atau meninjau Komentar sebelum keberadaan mereka di
                                situs web. Komentar tidak mencerminkan pandangan dan pendapat Company Assistify,
                                agen-agennya, dan/atau afiliasinya. Komentar mencerminkan pandangan dan pendapat orang
                                yang memposting pandangan dan pendapat mereka.</p>
                            <p>Sejauh yang diizinkan oleh hukum yang berlaku, Company Assistify tidak akan bertanggung jawab
                                atas Komentar atau atas setiap tanggung jawab, kerusakan, atau biaya yang ditimbulkan
                                dan/atau diderita sebagai akibat dari penggunaan, penulisan, atau tampilan Komentar di
                                situs web ini. Komentar mengandung unsur yang mengganggu, ofensif, atau menyebabkan
                                pelanggaran terhadap Ketentuan dan Syarat, Company Assistify berhak memonitor semua Komentar
                                dan menghapus Komentar yang dianggap tidak sesuai dengan syarat ini.</p>
                            <p>Anda menjamin dan mewakili bahwa Anda berhak memposting Komentar di situs web kami dan
                                memiliki semua lisensi dan persetujuan yang diperlukan untuk melakukannya. Komentar
                                tidak melanggar hak kekayaan intelektual apa pun, termasuk tanpa batasan hak cipta,
                                paten, atau merek dagang dari pihak ketiga. Komentar tidak mengandung materi yang
                                fitnah, pencemaran nama baik, ofensif, cabul, atau materi ilegal lainnya yang merupakan
                                pelanggaran privasi. Komentar tidak akan digunakan untuk menyulut atau mempromosikan
                                bisnis, kegiatan komersial, atau kegiatan ilegal.</p>
                            <p>Dengan ini Anda memberikan kepada Company Assistify lisensi non-eksklusif untuk menggunakan,
                                memproduksi, mengedit, dan memberikan izin kepada pihak lain untuk menggunakan,
                                mereproduksi, dan mengedit setiap komentar Anda dalam bentuk, format, atau media apa
                                pun.</p>
                            <h6>Hyperlink ke Konten Kami</h6>
                            <p>Organisasi berikut dapat membuat tautan ke Website kami tanpa persetujuan tertulis
                                sebelumnya:</p>
                            <ul>
                                <li>Badan pemerintah</li>
                                <li>Mesin pencari</li>
                                <li>Organisasi berita</li>
                            </ul>
                            <p>Distributor direktori online dapat membuat tautan ke Website kami dengan cara yang sama
                                seperti mereka menghubungkan ke situs web bisnis terdaftar lainnya; dan Bisnis
                                Terakreditasi dalam seluruh sistem kecuali organisasi nirlaba yang meminta sumbangan,
                                mal pusat pembelanjaan amal, dan kelompok penggalangan dana amal yang mungkin tidak
                                menghubungkan kesitus web kami. Organisasi-organisasi ini dapat menghubungkan ke halaman
                                utama kami, publikasi, atau informasi lainnya di Website asalkan tautan: (a) tidak dalam
                                cara apa pun yang menyesatkan; (b) tidak secara salah mengimplikasikan sponsor,
                                dukungan, atau persetujuan dari pihak yang menghubungkan dan produk dan/atau layanannya;
                                dan (c) sesuai dengan konteks situs pihak yang menghubungkan.</p>
                            <p>Kami dapat mempertimbangkan dan menyetujui permintaan tautan lain dari jenis organisasi
                                berikut:</p>
                            <ul>
                                <li>Sumber informasi konsumen dan/atau bisnis yang dikenal secara umum</li>
                                <li>Situs komunitas dot.com</li>
                                <li>Asosiasi</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Required vendors -->
            <script src="{{ asset('assets/vendor/global/global.min.js') }}"></script>
            <script src="{{ asset('assets/vendor/swiper/js/swiper-bundle.min.js') }}"></script>
            <script src="{{ asset('assets/js/dlabnav-init.js') }}"></script>
</body>

</html>
