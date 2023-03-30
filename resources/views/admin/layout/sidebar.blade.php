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
                Tools & Components
            </li>

            <li class="sidebar-item">
                <a class="sidebar-link" href="ui-buttons.html">
                    <i class="align-middle" data-feather="square"></i> <span class="align-middle">Buttons</span>
                </a>
            </li>
        </ul>

        <div class="sidebar-cta">
            <div class="sidebar-cta-content">
                <strong class="d-inline-block mb-2">Upgrade to Pro</strong>
                <div class="mb-3 text-sm">
                    Are you looking for more components? Check out our premium version.
                </div>
                <div class="d-grid">
                    <a href="upgrade-to-pro.html" class="btn btn-primary">Upgrade to Pro</a>
                </div>
            </div>
        </div>
    </div>
</nav>