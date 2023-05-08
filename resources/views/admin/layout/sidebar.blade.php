<nav id="sidebar" class="sidebar js-sidebar">
    <div class="sidebar-content js-simplebar">
        <a class="sidebar-brand" href="index.html">
            <span class="align-middle">E-Arsip</span>
        </a>

        <ul class="sidebar-nav">
            <li class="sidebar-header">
                Pages
            </li>

            <li class="sidebar-item {{ Request::is('admin/dashboard*') ? 'active' : '' }}">
                <a class="sidebar-link" href="{{ route('dashboard') }}  ">
                    <i class="align-middle" data-feather="sliders"></i> <span class="align-middle">Dashboard</span>
                </a>
            </li>

            <li class="sidebar-item {{ Request::is('admin/profile*') ? 'active' : '' }}">
                <a class="sidebar-link" href="{{ route('profile') }} ">
                    <i class="align-middle" data-feather="book"></i> <span class="align-middle">Profile</span>
                </a>
            </li>


            <li class="sidebar-item {{ Request::is('admin/kegiatan*') ? 'active' : '' }}">
                <a class="sidebar-link" href="{{ route('kegiatan.index') }} ">
                    <i class="align-middle" data-feather="book"></i> <span class="align-middle">Kegiatan</span>
                </a>
            </li>

            <li class="sidebar-item {{ Request::is('admin/berita*') ? 'active' : '' }}">
                <a class="sidebar-link" href="{{ route('berita.index') }} ">
                    <i class="align-middle" data-feather="book"></i> <span class="align-middle">Berita</span>
                </a>
            </li>

            <li class="sidebar-header">
                Arsip
            </li>

            <li class="sidebar-item {{ Request::is('admin/arsip') ? 'active' : '' }}">
                <a class="sidebar-link" href="{{ route('arsip.index') }}">
                    <i class="align-middle" data-feather="square"></i> <span class="align-middle">Arsip</span>
                </a>
            </li>
            <li class="sidebar-item {{ Request::is('admin/arsip-setting') ? 'active' : '' }}">
                <a class="sidebar-link" href="{{ route('arsip-setting.index') }}">
                    <i class="align-middle" data-feather="square"></i> <span class="align-middle">Arsip Setting</span>
                </a>
            </li>
        </ul>
    </div>
</nav>