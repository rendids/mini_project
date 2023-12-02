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
                        <li class="nav-item">
                            <a class="nav-link mr-6" href="#hubungi">Hubungi Kami</a>
                        </li>
                    </ul>
                    <div class="flex items-center font-bold space-x-4">
                        <button class="bg-blue-600 px-4 py-2 text-white hover:opacity-80 rounded-full">Masuk</button>
                        <button
                            class="px-4 py-2 border-2 hover:transition hover:ease-in-out hover:delay-100 duration-100 rounded-full border-blue-600 text-blue-600 hover:bg-blue-600 hover:text-white">Daftar</button>
                    </div>
                </div>
            </div>
        </div>
    </nav>


    <div class="flex h-screen bg-blue-600">
        <!-- Bagian Kiri -->
        <div class="lg:w-1/2 relative text-white flex items-center justify-center">
            <div class="text-left mt-8 mx-5 lg:mx-0">
                <h1 class="text-6xl font-bold mb-3">Welcome to Your Website</h1>
                <p class="text-lg ml-3  mb-8">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quaerat ratione
                    vel modi ab quod dolor reiciendis asperiores nostrum nam cumque! Ipsam doloremque, repellat aut
                    dolores atque cumque quaerat eum assumenda molestias nesciunt ab suscipit expedita consectetur eius!
                    Inventore, delectus dolore..</p>
                <a href="#"
                    class="bg-white text-blue-600  py-2 px-4 rounded-full font-bold transition duration-300 hover:bg-blue-500 hover:text-white">Get
                    Started</a>
            </div>
        </div>

        <!-- Bagian Kanan -->
        <div class="lg:w-1/2">
            <div class="mt-10 lg:ml-16">
                <img src="{{ asset('assets/images/penyedia.png') }}" class="w-[36rem]" alt="">
            </div>
        </div>
    </div>
    <div class="w-full bg-slate-100   h-screen">
        <div class="row mx-5 ">
            <div class=" mx-auto mt-4 mb-5">

                <p class="text-4xl text-center font-semibold mb-2">Layanan Kami</p>
                <p class=" text-center text-base ">Lorem ipsum dolor sit amet consectetur <br> adipisicing elit. Est sit
                    voluptate itaque, laboriosam quam, illo commodi ipsam obcaecati <br> maiores dolorem repellendus
                    nostrum
                    similique quae consectetur!</p>
            </div>
            <div class="col-md-12 flex flex-wrap">


                <div class="col-md-3">

                    <div
                        class="card hover:-translate-y-2 rounded-lg duration-300 ease-in-out transition border-none shadow-md">
                        <div class="card-header">

                            <img src="{{ asset('assets/images/penyedia.png') }}" class="w-[36rem]" alt="">
                        </div>
                        <div class="card-body ">
                            <div class="text-2xl font-semibold">Judul Jasa</div>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio, ullam!</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">

                    <div
                        class="card hover:-translate-y-2 rounded-lg duration-300 ease-in-out transition border-none shadow-md">
                        <div class="card-header">

                            <img src="{{ asset('assets/images/penyedia.png') }}" class="w-[36rem]" alt="">
                        </div>
                        <div class="card-body ">
                            <div class="text-2xl font-semibold">Judul Jasa</div>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio, ullam!</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">

                    <div
                        class="card hover:-translate-y-2 rounded-lg duration-300 ease-in-out transition border-none shadow-md">
                        <div class="card-header">

                            <img src="{{ asset('assets/images/penyedia.png') }}" class="w-[36rem]" alt="">
                        </div>
                        <div class="card-body ">
                            <div class="text-2xl font-semibold">Judul Jasa</div>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio, ullam!</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">

                    <div
                        class="card hover:-translate-y-2 rounded-lg duration-300 ease-in-out transition border-none shadow-md">
                        <div class="card-header">

                            <img src="{{ asset('assets/images/penyedia.png') }}" class="w-[36rem]" alt="">
                        </div>
                        <div class="card-body ">
                            <div class="text-2xl font-semibold">Judul Jasa</div>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio, ullam!</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <div class="w-full bg-blue-600   h-[35rem]">
        <div class="row mx-5 ">
            <div class=" mx-auto mt-14 mb-5">

                <p class="text-4xl text-center font-semibold text-white mb-2">Keunggulan Kami</p>
                <p class=" text-center text-base text-white ">Lorem ipsum dolor sit amet consectetur <br> adipisicing
                    elit. Est sit
                    voluptate itaque, laboriosam quam, illo commodi ipsam obcaecati <br> maiores dolorem repellendus
                    nostrum
                    similique quae consectetur!</p>
            </div>
            <div class="col-md-12 flex flex-wrap">


                <div class="col-md-4">

                    <div
                        class="card hover:-translate-y-2 rounded-lg duration-300 ease-in-out transition border-none shadow-md">

                        <div class="card-body ">

                            <svg class=" mx-auto" xmlns="http://www.w3.org/2000/svg" height="40"
                                viewBox="0 0 448 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2023 Fonticons, Inc.-->
                                <path
                                    d="M224 256A128 128 0 1 0 224 0a128 128 0 1 0 0 256zm-45.7 48C79.8 304 0 383.8 0 482.3C0 498.7 13.3 512 29.7 512H418.3c16.4 0 29.7-13.3 29.7-29.7C448 383.8 368.2 304 269.7 304H178.3z" />
                            </svg>

                            <div class="text-2xl text-center font-semibold">Judul Keunggulan</div>
                            <p class="text-center">Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio,
                                ullam!</p>
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
                            <div class="text-2xl text-center font-semibold">Judul Keunggulan</div>
                            <p class="text-center">Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio,
                                ullam!</p>
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
                            <div class="text-2xl text-center font-semibold">Judul Keunggulan</div>
                            <p class="text-center">Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio,
                                ullam!</p>
                        </div>
                    </div>
                </div>



            </div>
        </div>
    </div>
    <div class="w-full bg-slate-100   h-screen">
        <div class="row mx-5 ">
            <div class="mt-8">


                <div class=" mx-auto mt-4 mb-5">

                    <p class="text-4xl text-center font-semibold mb-2">Testimoni Kami</p>
                    <p class=" text-center text-base ">Lorem ipsum dolor sit amet consectetur <br> adipisicing elit. Est
                        sit
                        voluptate itaque, laboriosam quam, illo commodi ipsam obcaecati <br> maiores dolorem repellendus
                        nostrum
                        similique quae consectetur!</p>
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
    <div class="w-full bg-blue-600 h-screen">
        <div class="lg:flex mx-5 gap-x-5">


            <!-- Right Column -->
            <div class="lg:w-1/2">
                <div class="mt-8">
                    <div class="container mt-32 mx-auto p-6 bg-white rounded-lg shadow-md">
                        <h2 class="text-2xl font-extrabold mb-6">Contact Us</h2>

                        <!-- Form -->
                        <form action="#" method="POST">
                            <!-- Username Field -->
                            <div class="mb-4">
                                <label for="username"
                                    class="block text-gray-600 text-sm font-medium mb-2">Username</label>
                                <input type="text" id="username" name="username" placeholder="Your Username"
                                    class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:border-blue-500"
                                    required>
                            </div>

                            <!-- Email Field -->
                            <div class="mb-4">
                                <label for="email" class="block text-gray-600 text-sm font-medium mb-2">Email</label>
                                <input type="email" id="email" name="email" placeholder="Your Email"
                                    class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:border-blue-500"
                                    required>
                            </div>

                            <!-- Message Field -->
                            <div class="mb-6">
                                <label for="message"
                                    class="block text-gray-600 text-sm font-medium mb-2">Message</label>
                                <textarea id="message" name="message" rows="4" placeholder="Your Message"
                                    class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:border-blue-500"
                                    required></textarea>
                            </div>

                            <!-- Submit Button -->
                            <button type="submit"
                                class="bg-blue-500 text-white px-4 py-2 rounded-md hover:bg-blue-600 focus:outline-none focus:shadow-outline-blue active:bg-blue-800">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="lg:w-1/2">
                <div class="mt-4">
                    <div class="container text-end text-white capitalize mt-24 mx-auto p-6 ">
                        <h2 class="text-6xl font-extrabold mb-6 capitalize">Folow juga kami di </h2>
                        <div class="gap-x-7">

                            <a href="" class="text"><i class="fa-brands hover:opacity-80 mr-3 fa-instagram text-3xl"></i> </a>
                            <a href=""><i class="fa-brands hover:opacity-80 mr-3 fa-facebook text-3xl"></i> </a>
                            <a href=""><i class="fa-brands hover:opacity-80 fa-twitter text-3xl"></i> </a>
                        </div>
                        <h2 class="text-xl font-extrabold mb-6 capitalize">untuk mendapatkan info  selanjutnya mengenai  website kami</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>

    <!-- Tambahkan link Tailwind CSS (diperbarui ke versi terbaru) -->
    <script src="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.js"></script>
</body>

</html>
