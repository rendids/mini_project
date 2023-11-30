<div class="dlabnav border-right">
    <div class="dlabnav-scroll">
        <ul class="metismenu" id="menu">
                <li><a href="{{ route('dashboard.user') }}" aria-expanded="false">
                    <i class="bi bi-grid"></i>
                    <span class="nav-text">Dashboard</span>
                </a>
            </li>
            @auth
            <li><a href="{{ route('pesan') }}" aria-expanded="false">
                        <i class="bi bi-bag-check"></i>
                    <span class="nav-text">Pesanan</span>
                </a>
            </li>
            <li><a href="{{ route('riwayat') }}" aria-expanded="false">
                <i class="bi bi-clock-history"></i>
                    <span class="nav-text">Riwayat</span>
                </a>
            </li>
            @endauth
    </div>
</div>
