<div id="kt_aside" class="aside" data-kt-drawer="true" data-kt-drawer-name="aside" data-kt-drawer-activate="{default: true, lg: false}" data-kt-drawer-overlay="true" data-kt-drawer-width="{default:'200px', '300px': '225px'}" data-kt-drawer-direction="start" data-kt-drawer-toggle="#kt_aside_toggle" data-kt-sticky="true" data-kt-sticky-name="aside-sticky" data-kt-sticky-offset="{default: false, lg: '1px'}" data-kt-sticky-width="{lg: '225px'}" data-kt-sticky-left="auto" data-kt-sticky-top="94px" data-kt-sticky-animation="false" data-kt-sticky-zindex="95">
    <div class="hover-scroll-overlay-y my-5 my-lg-5 w-100 ps-4 ps-lg-0 pe-4 me-1" id="kt_aside_menu_wrapper" data-kt-scroll="true" data-kt-scroll-activate="{default: false, lg: true}" data-kt-scroll-height="auto" data-kt-scroll-dependencies="#kt_header" data-kt-scroll-wrappers="#kt_aside" data-kt-scroll-offset="5px">
        <div class="menu menu-column menu-active-bg menu-hover-bg menu-title-gray-700 fs-6 menu-rounded w-100" id="#kt_aside_menu" data-kt-menu="true">
            <div class="menu-item">
                <div class="menu-content pb-2">
                    <span class="menu-section text-muted text-uppercase fs-7 fw-bold">Public</span>
                </div>
            </div>

            <div class="menu-item">
                <a href="{{ route('dashboard') }}" class="menu-link {{ Request::is('admin/dashboard*') ? 'active' : '' }}">
                    <span class="menu-title">Dashboard</span>
                </a>
            </div>

            <div class="menu-item">
                <a href="{{ route('kegiatan.index') }}" class="menu-link {{ Request::is('admin/kegiatan') ? 'active' : '' }}">
                    <span class="menu-title">Kegiatan</span>
                    <span class="menu-badge">6,234</span>
                </a>
            </div>



            <div class="menu-item">
                <a href="../../demo5/dist/apps/devs/tag.html" class="menu-link">
                    <span class="menu-title">Tags</span>
                </a>
            </div>

            <div class="menu-item">
                <a href="#" class="menu-link {{ Request::is('admin/kegiatan/*') ? 'active' : '' }}">
                    <span class="menu-title">Kegiatan</span>
                </a>
            </div>

            <div class="menu-item pt-5">
                <div class="menu-content pb-2">
                    <span class="menu-section text-muted text-uppercase fs-7 fw-bold">My Activity</span>
                </div>
            </div>

            <div class="menu-item">
                <a href="../../demo5/dist/apps/devs/question.html" class="menu-link">
                    <span class="menu-title">My Questions</span>
                    <span class="menu-badge">24</span>
                </a>
            </div>

            <div class="menu-item">
                <a href="../../demo5/dist/index.html" class="menu-link">
                    <span class="menu-title">Resolved</span>
                    <span class="menu-badge">120</span>
                </a>
            </div>

            <div class="menu-item">
                <a href="../../demo5/dist/index.html" class="menu-link">
                    <span class="menu-title">Enrolled</span>
                    <span class="menu-badge">10</span>
                </a>
            </div>

            <div class="menu-item">
                <a href="../../demo5/dist/index.html" class="menu-link">
                    <span class="menu-title">Saved</span>
                    <span class="menu-badge">6</span>
                </a>
            </div>

            <div class="menu-item pt-5">
                <div class="menu-content pb-2">
                    <span class="menu-section text-muted text-uppercase fs-7 fw-bold">Categories</span>
                </div>
            </div>

        </div>
    </div>
</div>