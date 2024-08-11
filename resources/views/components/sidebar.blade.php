<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <ul class="nav">
        <li class="nav-item">
            <div class="d-flex sidebar-profile">
                <div class="sidebar-profile-image">
                    <img src="{{ auth()->user()->avatar() }}" alt="image">
                    <span class="sidebar-status-indicator"></span>
                </div>
                <div class="sidebar-profile-name">
                    <p class="sidebar-name">
                        {{ auth()->user()->name }}
                    </p>
                    <p class="sidebar-designation">
                        Active
                    </p>
                </div>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('admin.dashboard') }}">
                <i class="typcn typcn-home menu-icon"></i>
                <span class="menu-title">Dashboard </span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('admin.proyek.index') }}">
                <i class="typcn typcn-briefcase menu-icon"></i>
                <span class="menu-title">Proyek </span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('admin.portofolio.index') }}">
                <i class="typcn typcn-briefcase menu-icon"></i>
                <span class="menu-title">Portofolio </span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('admin.peralatan.index') }}">
                <i class="typcn typcn-spanner menu-icon"></i>
                <span class="menu-title">Peralatan </span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('admin.personil.index') }}">
                <i class="typcn typcn-group menu-icon"></i>
                <span class="menu-title">Personil </span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('admin.pemasukan.index') }}">
                <i class="typcn typcn-arrow-up-thick menu-icon"></i>
                <span class="menu-title">Pemasukan </span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('admin.pengeluaran.index') }}">
                <i class="typcn typcn-arrow-down-thick menu-icon"></i>
                <span class="menu-title">Pengeluaran </span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#laporankeuangan" aria-expanded="false"
                aria-controls="laporankeuangan">
                <i class="typcn typcn-database menu-icon"></i>
                <span class="menu-title">Laporan</span>
                <i class="typcn typcn-chevron-right menu-arrow"></i>
            </a>
            <div class="collapse" id="laporankeuangan">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('admin.laporan-keuangan.index') }}">Keuangan</a>
                    </li>
                </ul>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
                <i class="typcn typcn-database menu-icon"></i>
                <span class="menu-title">Master Data</span>
                <i class="typcn typcn-chevron-right menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-basic">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('admin.kontak.index') }}">Kontak</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('admin.merk.index') }}">Merk</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('admin.type.index') }}">Type</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('admin.users.index') }}">User</a>
                    </li>
                </ul>
            </div>
        </li>
    </ul>
</nav>
