<style>
    .notifi-box h2 {
        font-size: 14px;
        padding: 10px;
        border-bottom: 1px solid #eee;
        color: #999;
    }

    .notifi-box h2 span {
        color: #f00;
    }

    .notifi-item {
        display: flex;
        border-bottom: 1px solid #eee;
        padding: 15px 5px;
        margin-bottom: 15px;
        cursor: pointer;
    }

    .notifi-item:hover {
        background-color: #eee;
    }

    .notifi-item img {
        display: block;
        width: 50px;
        margin-right: 10px;
        border-radius: 50%;
    }

    .notifi-item .text h4 {
        color: #777;
        font-size: 16px;
        margin-top: 10px;
    }

    .notifi-item .text p {
        color: #aaa;
        font-size: 12px;
    }

    .notification-icon {
        position: relative;
        display: inline-block;
    }

    .badge-notification {
        position: absolute;
        top: 0;
        right: 0;
        transform: translate(50%, -50%);
    }

    .notification-icon {
        position: relative;
        display: inline-block;
    }

    .badge-notification {
        position: absolute;
        top: 0;
        right: 0;
        transform: translate(50%, -50%);
        font-size: 8px;
        /* Sesuaikan ukuran sesuai kebutuhan */
    }
</style>
<div class="nav-header">
    <a href="/" class="brand-logo">
        <svg width="22" height="42" viewBox="0 0 22 42" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M0 0L21.3377 7.54601V33.4671L0 41.0131V7.54601" fill="white" />
            <path
                d="M15.4821 9.73825H11.0606L1.67957 31.2758H6.88563L8.59484 26.9557H13.7168L14.451 31.2758H19.657L15.4821 9.73825ZM10.304 22.12L12.4167 15.8191H12.6073L13.1733 22.12H10.304Z"
                fill="#145AAC" />
        </svg>

        <svg class="brand-title" width="129" height="23" viewBox="0 0 129 23" fill="none"
            xmlns="http://www.w3.org/2000/svg">
            <path
                d="M0 18.2551C1.46263 20.8396 4.30944 22.1475 6.61266 22.1475C10.7596 22.1475 14.0155 20.0535 14.7216 15.8529C15.6126 10.4952 12.3623 9.06779 9.02796 8.36979C7.55973 8.00506 6.58464 7.45798 6.71913 6.2066C6.83121 5.11242 7.86234 4.59678 9.0784 4.62822C10.1936 4.65966 11.4657 5.14387 12.2782 6.17516L15.8031 3.43973C14.15 0.729449 11.9812 0 9.65 0C6.12511 0 2.65627 1.55322 1.92215 5.96764C1.24408 10.0425 3.95639 12.7465 6.96571 13.2998C8.5124 13.5388 10.1936 14.1173 9.97503 15.4568C9.78449 16.5824 8.64689 17.098 7.34678 17.098C5.90656 17.098 4.30944 16.4 3.46884 15.0291L0 18.2551Z"
                fill="white" />
            <path
                d="M18.0478 18.2551C19.5104 20.8396 22.3572 22.1475 24.6605 22.1475C28.8074 22.1475 32.0633 20.0535 32.7694 15.8529C33.6604 10.4952 30.4101 9.06779 27.0758 8.36979C25.6075 8.00506 24.6324 7.45798 24.7669 6.2066C24.879 5.11242 25.9101 4.59678 27.1262 4.62822C28.2414 4.65966 29.5135 5.14387 30.3261 6.17516L33.8509 3.43973C32.1978 0.729449 30.029 0 27.6978 0C24.1729 0 20.7041 1.55322 19.97 5.96764C19.2919 10.0425 22.0042 12.7465 25.0135 13.2998C26.5602 13.5388 28.2414 14.1173 28.0228 15.4568C27.8323 16.5824 26.6947 17.098 25.3946 17.098C23.9544 17.098 22.3572 16.4 21.5166 15.0291L18.0478 18.2551Z"
                fill="white" />
            <path d="M43.6313 0.30764H38.7783L36.094 21.8452H40.947L43.6313 0.30764Z" fill="white" />
            <path
                d="M45.8747 18.2551C47.3374 20.8396 50.1842 22.1475 52.4874 22.1475C56.6343 22.1475 59.8902 20.0535 60.5963 15.8529C61.4873 10.4952 58.237 9.06779 54.9027 8.36979C53.4345 8.00506 52.4594 7.45798 52.5939 6.2066C52.7059 5.11242 53.7371 4.59678 54.9531 4.62822C56.0683 4.65966 57.3404 5.14387 58.153 6.17516L61.6779 3.43973C60.0247 0.729449 57.856 0 55.5247 0C51.9998 0 48.531 1.55322 47.7969 5.96764C47.1188 10.0425 49.8311 12.7465 52.8404 13.2998C54.3871 13.5388 56.0683 14.1173 55.8498 15.4568C55.6592 16.5824 54.5216 17.098 53.2215 17.098C51.7813 17.098 50.1842 16.4 49.3436 15.0291L45.8747 18.2551Z"
                fill="white" />
            <path
                d="M79.3621 5.33853L80.0122 0.351875H64.747L64.097 5.33853H69.275L67.2408 21.9209H72.1498L74.1785 5.33853H79.3621Z"
                fill="white" />
            <path d="M89.6143 0.30764H84.7613L82.077 21.8452H86.93L89.6143 0.30764Z" fill="white" />
            <path
                d="M98.7938 5.47666H107.256L107.906 0.30764H94.5404L91.8561 21.8452H96.7652L97.6842 14.425H105.087L105.709 9.34399H98.3063L98.7938 5.47666Z"
                fill="white" />
            <path
                d="M119.015 21.8452L120.069 13.356L128.419 0.30764H122.725L118.281 7.87881L115.787 0.30764H110.15L115.216 13.356L114.162 21.8452H119.015Z"
                fill="white" />
        </svg>
    </a>
    <div class="nav-control">
        <div class="hamburger">
            <span class="line"></span><span class="line"></span><span class="line"></span>
        </div>
    </div>
</div>
<div class="header">
    <div class="header-content">
        <nav class="navbar navbar-expand">
            <div class="container d-block my-0">
                <div class="d-flex align-items-center justify-content-sm-between justify-content-end">
                    <div class="header-left">
                        <div class="nav-item d-flex align-items-center">

                        </div>
                    </div>
                    <ul class="navbar-nav header-right ">
                        <li class="nav-item d-flex align-items-center ms-3 me-4     " style="margin-top: 30px;">
                            <div class="dropdown">
                                <a href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown"
                                    aria-expanded="false" class="notification-icon">
                                    <i class="fas fa-bell fs-3 text-light"></i>
                                    @php
                                        $jumlah = Auth::user()
                                            ->notifikasi->where('dibaca', false)
                                            ->count();
                                    @endphp
                                    <span class="badge rounded-circle badge-notification bg-danger ms-2"
                                        style="border-radius: 50%;">{{ $jumlah }}</span>

                                </a>
                                <ul class="dropdown-menu dropdown-menu-end" style="width: 300px;"
                                    aria-labelledby="navbarDropdownMenuLink">
                                    <div class="mx-3 mb-3 d-flex justify-content-between align-items-start">
                                        <div class="ms-2 me-auto">
                                            <div class="fw-bold text-primary">Notifikasi</div>
                                        </div>

                                    </div>
                                    @if (count(Auth::user()->notifikasi->where('dibaca', false)) > 0)
                                        @foreach (Auth::user()->notifikasi->where('dibaca', false)->take(3) as $item)
                                            <li
                                                class="list-group-item d-flex justify-content-between align-items-center">
                                                <div class="d-flex align-items-center">
                                                    <div class="ms-3">
                                                        <p class="fw-bold mb-1">Hai {{ $item->user->name }}</p>
                                                        <p class="text-muted mb-0">{{ $item->pesan }}</p>
                                                    </div>
                                                </div>
                                                <form action="{{ route('tandai', ['id' => $item->id]) }}"
                                                    method="post">
                                                    @csrf
                                                    @method('delete')
                                                    <button class="badge rounded-pill badge-success"
                                                        onclick="handleButtonClick(event)">
                                                        <i class="fa fa-check"></i>
                                                    </button>
                                                </form>
                                            </li>
                                        @endforeach
                                    @else
                                        <li class="list-group-item d-flex justify-content-between align-items-center">
                                            <h5>belum ada notif </h5>
                                        </li>
                                    @endif
                                </ul>

                                <!-- Skrip JavaScript untuk menghentikan propagasi event -->


                            </div>
                        </li>
                        <li>

                            <div class="dropdown header-profile2 ">
                                <a class="nav-link" href="javascript:void(0);" role="button" data-bs-toggle="dropdown">
                                    <div class="header-info2 d-flex align-items-center">
                                        <img src="{{ asset('storage/' . Auth::user()->penyedia->foto) }}" alt="">
                                        <div class="d-flex align-items-center sidebar-info">
                                            <div>
                                                <h6 class="font-w500 mb-0 ms-2">{{ Auth::user()->name }}</h6>
                                            </div>
                                            <i class="fas fa-chevron-down"></i>
                                        </div>
                                    </div>
                                </a>
                                <div class="dropdown header-profile" style="width: 175px">
                                    <div class="dropdown-menu dropdown-menu-end">
                                        <a href="{{ route('profile.penyedia') }}" class="nav-link ai-icon ">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="text-primary" width="18"
                                                height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                                <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                                                <circle cx="12" cy="7" r="4"></circle>
                                            </svg>
                                            <span class="ms-2">Profile</span>
                                        </a>
                                        <a href="#" onclick="confirmLogout()" class="nav-link ai-icon ms-1">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="text-primary" width="18"
                                                height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                                <path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path>
                                                <polyline points="16 17 21 12 16 7"></polyline>
                                                <line x1="21" y1="12" x2="9" y2="12">
                                                </line>
                                            </svg>
                                            <span class="ms-1">Logout</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <script>
            function confirmLogout() {
                Swal.fire({
                    title: 'Logout',
                    text: 'apa anda yakin ingin logout?',
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#d33',
                    cancelButtonColor: '#3085d6',
                    confirmButtonText: 'Iya',
                    cancelButtonText: 'Batal'
                }).then((result) => {
                    if (result.isConfirmed) {
                        // Perform the logout action (redirect to the logout route)
                        window.location.href = "{{ route('logout') }}";
                    }
                });
            }
        </script>
    </div>
</div>
