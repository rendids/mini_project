<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Landing Page Kreatif</title>

    <!-- Tambahkan link Bootstrap CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('assets/images/favicon.svg') }}">

</head>

<body>

    <!-- Navigasi -->
    <nav class="bg-light fixed p-3 shadow-md w-full top-0 z-10">
        <div class="container mx-auto">
            <div class="flex items-center justify-between">
                <a class="text-green-600 font-bold text-lg" href="#">Logo</a>
                <div class="flex items-center">
                    <ul class="flex items-center font-semibold space-x-4">
                        <li class="nav-item active">
                            <a class="nav-link" href="#">Beranda</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#layanan">Layanan</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#tentang">Keunggulan</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#testimoni">Testimoni</a>
                        </li>
                    </ul>
                    @auth
                    <div class="flex items-center font-bold space-x-4">
                            <!-- Profile Dropdown -->
                            <div x-data="{ open: false }" class="relative">
                                <button @click="open = !open" class="flex items-center space-x-2 focus:outline-none">
                                    @if (Auth::user()->role == 'penyedia')
                                    <img src="{{ asset('storage/'. Auth::user()->penyedia->foto) }}" alt="Profile Image" class="w-8 h-8 rounded-full">
                                    @else
                                    <img src="{{ asset('storage/'. Auth::user()->foto) }}" alt="" class="w-8 h-8 rounded-full" srcset="">
                                    @endif
                                    <span class="text-gray-700">{{ Auth::user()->name }}</span>
                                    <svg class="w-4 h-4 text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                                </button>

                                <!-- Dropdown Menu -->
                                <div x-show="open" @click.away="open = false" class="absolute right-0 mt-2 w-48 bg-white border rounded-md shadow-lg">
                                    @if (Auth::user()->role == 'penyedia')
                                    <a href="/penyedia/profile" class="block px-4 py-2 text-sm text-gray-700 hover:bg-blue-500 hover:text-white">Profil</a>
                                    @elseif (Auth::user()->role == 'user')
                                    <a href="/user/profile" class="block px-4 py-2 text-sm text-gray-700 hover:bg-blue-500 hover:text-white">Profil</a>
                                    @else
                                    <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-blue-500 hover:text-white">Dashboard</a>
                                    @endif
                                    <hr class="my-2 border-gray-200">
                                    <a href="{{ route('logout') }}" class="block px-4 py-2 text-sm text-red-500 hover:bg-red-100 hover:text-red-700">Keluar</a>
                                </div>
                            </div>

                        </div>
                    </div>
                    @endauth
                    @guest
                    <div class="flex items-center font-bold space-x-4">
                        <button class="bg-blue-600 px-4 py-2 text-white hover:opacity-80 rounded-full" onclick="window.location='{{ route('login') }}'">Masuk</button>
                    @endguest
                </div>
            </div>
        </div>
    </nav>


    <div class="flex h-screen bg-blue-600">
        <!-- Bagian Kiri -->
        <div class="lg:w-1/2 relative text-white flex items-center justify-center">
            <div class="text-left mt-8 mx-5 lg:mx-0">
                <h1 class="text-6xl font-bold mb-3">SELAMAT DATANG DI WEBSITE KAMI</h1>
                <p class="text-lg ml-3  mb-8">Website kami adalah website yang menyediakan berbagai jenis layanan jasa unggulan yang akan membantu anda dengan layanan terbaik.Kualitas tanpa kompromi, layanan yang disesuaikan dengan kebutuhan Anda.Kami bangga menjadi mitra pilihan dalam memenuhi kebutuhan Anda.</p>
            </div>
        </div>

        <!-- Bagian Kanan -->
        <div class="lg:w-1/2">
            <div class="mt-10 lg:ml-16">
                <img src="{{ asset('assets/images/penyedia.png') }}" class="w-[36rem]" alt="">
            </div>
        </div>
    </div>
    <div id="layanan" class="w-full bg-slate-100   h-screen">
        <div class="row mx-5 ">
            <div class=" mx-auto mt-4 mb-5">

                <p class="text-4xl text-center font-semibold mb-2">Layanan Kami</p>
                <p class=" text-center text-base mb-2">Layanan yang dapat disesuaikan dengan kebutuhan Anda.Layanan jasa berkualitas tinggi untuk <br> memenuhi harapan Anda.Dari ide hingga realisasi, kami siap menjadi mitra terpercaya Anda.Yang Dilayani oleh Ahli Berpengalaman    </p>
            </div>
            <div class="col-md-12 flex flex-wrap">

            @foreach ($bestseller as $best)
                <div class="col-md-3">
                    <div
                        class="card hover:-translate-y-2 rounded-lg duration-300 ease-in-out transition border-none shadow-md">
                        <div class="card-header">

                            <img src="{{ asset('assets/images/penyedia.png') }}" class="w-[36rem]" alt="">
                        </div>
                        <div class="card-body ">
                            <div class="text-2xl font-semibold">{{ $best->layanan }}</div>
                            <p>{{ $best->alamat }}</p>
                        </div>
                    </div>
                </div>
            @endforeach

            </div>
        </div>
    </div>
    <div id="tentang" class="w-full bg-blue-600   h-[35rem]">
        <div class="row mx-5 ">
            <div class=" mx-auto mt-14 mb-5">

                <p class="text-4xl text-center font-semibold text-white mb-2">Keunggulan Kami</p>
                <p class=" text-center text-base text-white ">Kami mengutamakan kepuasan pelanggan dengan layanan terbaik. <br> Dapatkan Solusi yang Efektif dan Efisien dengan Layanan Jasa Kami.<br>Pelayanan Jasa Berkualitas Tinggi Hanya Sejauh Klik dengan ujung jari anda. </p>
            </div>
            <div class="col-md-12 flex flex-wrap">


                <div class="col-md-4">

                    <div
                        class="card hover:-translate-y-2 rounded-lg duration-300 ease-in-out transition border-none shadow-md">

                        <div class="card-body text-center">

                            <i class=" fa-solid fa-wrench" style="font-size: 300%"></i>

                            <div class="text-2xl text-center font-semibold">Keunggulan Layanan</div>
                            <p class="text-center">Pelayanan kami sudah pasti berkualitas dengan penyedia jasa yang sudah berpengalaman dalam bidangnya</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">

                    <div
                        class="card hover:-translate-y-2 rounded-lg duration-300 ease-in-out transition border-none shadow-md">

                        <div class="card-body  text-center">

                            <i class="fa-solid fa-link" style="font-size: 300%"></i>
                            <div class="text-2xl text-center font-semibold">Keunggulan Fitur </div>
                            <p class="text-center">Keunggulan wesite kita terdapat fitur pengajuan untuk layanan jasa dan juga banyak fitur pembayaran yang tersedia</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">

                    <div
                        class="card hover:-translate-y-2 rounded-lg duration-300 ease-in-out transition border-none shadow-md">

                        <div class="card-body ">
                            <svg class=" mx-auto" xmlns="http://www.w3.org/2000/svg" height="40"
                                viewBox="0 0 448 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2023 Fonticons, Inc.-->
                                <path
                                    d="M224 256A128 128 0 1 0 224 0a128 128 0 1 0 0 256zm-45.7 48C79.8 304 0 383.8 0 482.3C0 498.7 13.3 512 29.7 512H418.3c16.4 0 29.7-13.3 29.7-29.7C448 383.8 368.2 304 269.7 304H178.3z" />
                            </svg>
                            <div class="text-2xl text-center font-semibold">Keunggulan</div>
                            <p class="text-center">Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio,
                                ullam!</p>
                        </div>
                    </div>
                </div>



            </div>
        </div>
    </div>
    <div id="testimoni" class="w-full bg-slate-100   h-screen">
        <div class="row mx-5 ">
            <div class="mt-8">


                <div class=" mx-auto mt-4 mb-5">

                    <p class="text-4xl text-center font-semibold mb-2">Testimoni Kami</p>
                    <p class=" text-center text-base ">Berikut adalah beberapa testimoni dari <br>user yang telah menggunakan dan memesan jasa lewat website kami</p>
                </div>
                <div class="col-md-12 flex flex-wrap gap-y-3 justify-center">


                    <div class="col-md-5">

                        <div
                            class="card hover:-translate-y-2 rounded-lg duration-300 ease-in-out transition border-2 hover:border-blue-600  shadow-md">

                            <div class="card-body  ">


                                <div class="text-2xl text-center font-semibold flex gap-x-[20rem] ">
                                    <p class="text-xl font-bold mb-1">Username </p>
                                    <p class=" font-semibold text-xs bg-blue-600 rounded-full px-3 text-white py-2">Nama
                                        Jasa</p>

                                </div>
                                <p class="text-base font-bold mb-1">Rating : ⭐⭐⭐⭐ </p>
                                <p class="text-base font-bold">Tanggapan : <span class="font-semibold">Lorem ipsum dolor
                                        sit amet consectetur adipisicing elit. Alias, similique quia facere est a
                                        molestiae! Cum rem non reprehenderit quidem! </span> </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-5">

                        <div
                            class="card hover:-translate-y-2 rounded-lg duration-300 ease-in-out transition border-2 hover:border-blue-600  shadow-md">

                            <div class="card-body  ">


                                <div class="text-2xl text-center font-semibold flex gap-x-[20rem] ">
                                    <p class="text-xl font-bold mb-1">Username </p>
                                    <p class=" font-semibold text-xs bg-blue-600 rounded-full px-3 text-white py-2">Nama
                                        Jasa</p>

                                </div>
                                <p class="text-base font-bold mb-1">Rating : ⭐⭐⭐⭐ </p>
                                <p class="text-base font-bold">Tanggapan : <span class="font-semibold">Lorem ipsum dolor
                                        sit amet consectetur adipisicing elit. Alias, similique quia facere est a
                                        molestiae! Cum rem non reprehenderit quidem! </span> </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-5">

                        <div
                            class="card hover:-translate-y-2 rounded-lg duration-300 ease-in-out transition border-2 hover:border-blue-600  shadow-md">

                            <div class="card-body  ">


                                <div class="text-2xl text-center font-semibold flex gap-x-[20rem] ">
                                    <p class="text-xl font-bold mb-1">Username </p>
                                    <p class=" font-semibold text-xs bg-blue-600 rounded-full px-3 text-white py-2">Nama
                                        Jasa</p>

                                </div>
                                <p class="text-base font-bold mb-1">Rating : ⭐⭐⭐⭐ </p>
                                <p class="text-base font-bold">Tanggapan : <span class="font-semibold">Lorem ipsum dolor
                                        sit amet consectetur adipisicing elit. Alias, similique quia facere est a
                                        molestiae! Cum rem non reprehenderit quidem! </span> </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-5">

                        <div
                            class="card hover:-translate-y-2 rounded-lg duration-300 ease-in-out transition border-2 hover:border-blue-600  shadow-md">

                            <div class="card-body  ">


                                <div class="text-2xl text-center font-semibold flex gap-x-[20rem] ">
                                    <p class="text-xl font-bold mb-1">Username </p>
                                    <p class=" font-semibold text-xs bg-blue-600 rounded-full px-3 text-white py-2">Nama
                                        Jasa</p>

                                </div>
                                <p class="text-base font-bold mb-1">Rating : ⭐⭐⭐⭐ </p>
                                <p class="text-base font-bold">Tanggapan : <span class="font-semibold">Lorem ipsum dolor
                                        sit amet consectetur adipisicing elit. Alias, similique quia facere est a
                                        molestiae! Cum rem non reprehenderit quidem! </span> </p>
                            </div>
                        </div>
                    </div>




                </div>
            </div>
        </div>
    </div>


<footer class="bg-white rounded-lg shadow m-4 dark:bg-gray-800">
    <div class="w-full mx-auto max-w-screen-xl p-4 md:flex md:items-center md:justify-between">
      <span class="text-sm text-gray-500 sm:text-center dark:text-gray-400"><a href="https://flowbite.com/" class="hover:underline"></a>
    </span>
    </div>
</footer>

    <!-- Tambahkan link Tailwind CSS (diperbarui ke versi terbaru) -->
    <script src="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.js"></script>
     <!-- Tambahkan link ke CDN Alpine.js untuk menangani interaktivitas dropdown -->
     <script src="https://cdn.jsdelivr.net/npm/alpinejs@2.8.2/dist/alpine.min.js" defer></script>
</body>

</html>
