<style>
    .dlabnav-scroll {
    background-color: #ffffff; /* Warna latar belakang */
    border-radius: 10px; /* Sudut bulat pada bagian luar */
    overflow: hidden;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); /* Efek bayangan */
}

.metismenu li {
    padding: 15px; /* Jarak antara item menu */
}

.metismenu a {
    display: block;
    color: #333333; /* Warna teks item menu */
    text-decoration: none;
    transition: color 0.3s; /* Efek transisi warna teks */
}

.metismenu a:hover {
    color: #007bff; /* Warna teks saat hover */
}

.metismenu i {
    margin-right: 10px; /* Jarak antara ikon dan teks */
}

.nav-text {
    font-size: 16px; /* Ukuran teks item menu */
    font-weight: bold; /* Ketebalan teks */
}

</style>

<div class="dlabnav border-right">
    <div class="dlabnav-scroll">
        <ul class="metismenu" id="menu">
            <li>
                <a href="{{ route('dashboard.user') }}" aria-expanded="false">
                    <i class="bi bi-grid"></i>
                    <span class="nav-text">Dashboard</span>
                </a>
            </li>
            <li>
                <a href="{{ route('pesan') }}" aria-expanded="false">
                    <i class="bi bi-bag-check"></i>
                    <span class="nav-text">Pesanan</span>
                </a>
            </li>
            <li>
                <a href="{{ route('riwayat') }}" aria-expanded="false">
                    <i class="bi bi-clock-history"></i>
                    <span class="nav-text">Riwayat</span>
                </a>
            </li>
        </ul>
    </div>
</div>
