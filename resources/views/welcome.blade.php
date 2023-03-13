<!DOCTYPE html>
<html lang="en">

<head>
    <base href="" />
    <title>Arsip dan Pustaka</title>
    <meta charset="utf-8" />

    <link rel="shortcut icon" href="{{ asset('assets/media/logos/favicon.ico') }}" />

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter:300,400,500,600,700" />

    <link href="{{ asset('assets/plugins/global/plugins.bundle.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/css/style.bundle.css') }}" rel="stylesheet" type="text/css" />

</head>

<body id="kt_body" data-bs-spy="scroll" data-bs-target="#kt_landing_menu" class="bg-white position-relative">

    <script>
        var defaultThemeMode = "light";
        var themeMode;
        if (document.documentElement) {
            if (document.documentElement.hasAttribute("data-theme-mode")) {
                themeMode = document.documentElement.getAttribute("data-theme-mode");
            } else {
                if (localStorage.getItem("data-theme") !== null) {
                    themeMode = localStorage.getItem("data-theme");
                } else {
                    themeMode = defaultThemeMode;
                }
            }
            if (themeMode === "system") {
                themeMode = window.matchMedia("(prefers-color-scheme: dark)").matches ? "dark" : "light";
            }
            document.documentElement.setAttribute("data-theme", themeMode);
        }
    </script>

    <div class="d-flex flex-column flex-root">
        <div class="mb-0" id="home">
            <div class="bgi-no-repeat bgi-size-contain bgi-position-x-center bgi-position-y-bottom landing-dark-bg" style="background-image: url(<?= asset('assets/media/svg/illustrations/landing.svg'); ?>)">
                <div class="landing-header" data-kt-sticky="true" data-kt-sticky-name="landing-header" data-kt-sticky-offset="{default: '200px', lg: '300px'}">
                    <div class="container">

                        <div class="d-flex align-items-center justify-content-between">
                            <div class="d-flex align-items-center flex-equal">
                                <button class="btn btn-icon btn-active-color-primary me-3 d-flex d-lg-none" id="kt_landing_menu_toggle">
                                    <span class="svg-icon svg-icon-2hx">
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M21 7H3C2.4 7 2 6.6 2 6V4C2 3.4 2.4 3 3 3H21C21.6 3 22 3.4 22 4V6C22 6.6 21.6 7 21 7Z" fill="currentColor" />
                                            <path opacity="0.3" d="M21 14H3C2.4 14 2 13.6 2 13V11C2 10.4 2.4 10 3 10H21C21.6 10 22 10.4 22 11V13C22 13.6 21.6 14 21 14ZM22 20V18C22 17.4 21.6 17 21 17H3C2.4 17 2 17.4 2 18V20C2 20.6 2.4 21 3 21H21C21.6 21 22 20.6 22 20Z" fill="currentColor" />
                                        </svg>
                                    </span>
                                </button>
                                <a href="#">
                                    <img alt="Logo" src="{{ asset('logo.png') }}" class="logo-default h-35px h-lg-40px" />
                                    <img alt="Logo" src="{{ asset('logo.png') }}" class="logo-sticky h-30px h-lg-45px" />
                                </a>
                            </div>

                            <div class="d-lg-block" id="kt_header_nav_wrapper">
                                <div class="d-lg-block p-5 p-lg-0" data-kt-drawer="true" data-kt-drawer-name="landing-menu" data-kt-drawer-activate="{default: true, lg: false}" data-kt-drawer-overlay="true" data-kt-drawer-width="200px" data-kt-drawer-direction="start" data-kt-drawer-toggle="#kt_landing_menu_toggle" data-kt-swapper="true" data-kt-swapper-mode="prepend" data-kt-swapper-parent="{default: '#kt_body', lg: '#kt_header_nav_wrapper'}">
                                    <div class="menu menu-column flex-nowrap menu-rounded menu-lg-row menu-title-gray-500 menu-state-title-primary nav nav-flush fs-5 fw-semibold" id="kt_landing_menu">
                                        <div class="menu-item">
                                            <a class="menu-link nav-link active py-3 px-4 px-xxl-6" href="#">Beranda</a>
                                        </div>

                                        <div class="menu-item">
                                            <a class="menu-link nav-link py-3 px-4 px-xxl-6" href="#">Profile</a>
                                        </div>

                                        <div class="menu-item">
                                            <a class="menu-link nav-link py-3 px-4 px-xxl-6" href="#">Publikasi</a>
                                        </div>

                                        <div class="menu-item">
                                            <a href="#" class="dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false" style="text-decoration: none;">
                                                Perpustakaan
                                            </a>
                                            <ul class="dropdown-menu">
                                                <li><a class="dropdown-item" href="#">Profile</a></li>
                                                <li><a class="dropdown-item" href="#">Informasi</a></li>
                                                <li><a class="dropdown-item" href="#">Galeri Kegiatan</a></li>
                                                <li>
                                                    <hr class="dropdown-divider">
                                                </li>
                                                <li><a class="dropdown-item" href="#">Separated link</a></li>
                                            </ul>
                                        </div>
                                        <div class="menu-item">
                                            <a class="menu-link nav-link py-3 px-4 px-xxl-6" href="#portfolio" data-kt-scroll-toggle="true" data-kt-drawer-dismiss="true">Arsip</a>
                                        </div>

                                        <div class="menu-item">
                                            <!-- <a class="menu-link nav-link py-3 px-4 px-xxl-6" href="#pricing" data-kt-scroll-toggle="true" data-kt-drawer-dismiss="true">Pricing</a> -->
                                        </div>

                                    </div>
                                </div>
                            </div>

                            <div class="flex-equal text-end ms-1">
                                <a href="{{ route('login') }}" class="btn btn-success">Sign In</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="d-flex flex-column flex-center w-100 min-vh-100">
                    <div class="text-center container">
                        <div class="ths tns-default">
                            <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
                                <div class="carousel-indicators">
                                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
                                </div>
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <img src="{{ asset('assets/banner_1.png') }}" class="d-block w-100" alt="...">
                                        <div class="carousel-caption d-none d-md-block">
                                            <h5>First slide label</h5>
                                            <p>Some representative placeholder content for the first slide.</p>
                                        </div>
                                    </div>
                                    <div class="carousel-item">
                                        <img src="{{ asset('assets/banner_2.png') }}" class="d-block w-100" alt="...">
                                        <div class="carousel-caption d-none d-md-block">
                                            <h5>Second slide label</h5>
                                            <p>Some representative placeholder content for the second slide.</p>
                                        </div>
                                    </div>
                                    <div class="carousel-item">
                                        <img src="{{ asset('assets/banner_3.png') }}" class="d-block w-100" alt="...">
                                        <div class="carousel-caption d-none d-md-block">
                                            <h5>Third slide label</h5>
                                            <p>Some representative placeholder content for the third slide.</p>
                                        </div>
                                    </div>
                                </div>
                                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Previous</span>
                                </button>
                                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Next</span>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="py-10 py-lg-20">
            <!--begin::Container-->
            <div class="container">
                <!--begin::Heading-->
                <div class="text-center mb-12">
                    <!--begin::Title-->
                    <h3 class="fs-2hx text-dark mb-5" id="team" data-kt-scroll-offset="{default: 100, lg: 150}">Our Great Team</h3>
                    <!--end::Title-->
                    <!--begin::Sub-title-->
                    <div class="fs-5 text-muted fw-bold">It’s no doubt that when a development takes longer to complete, additional costs to
                        <br />integrate and test each extra feature creeps up and haunts most of us.
                    </div>
                    <!--end::Sub-title=-->
                </div>
                <!--end::Heading-->
                <!--begin::Slider-->
                <div class="tns tns-default">
                    <!--begin::Wrapper-->
                    <div data-tns="true" data-tns-loop="true" data-tns-swipe-angle="false" data-tns-speed="2000" data-tns-autoplay="true" data-tns-autoplay-timeout="18000" data-tns-controls="true" data-tns-nav="false" data-tns-items="1" data-tns-center="false" data-tns-dots="false" data-tns-prev-button="#kt_team_slider_prev" data-tns-next-button="#kt_team_slider_next" data-tns-responsive="{1200: {items: 3}, 992: {items: 2}}">
                        <!--begin::Item-->
                        <div class="text-center">
                            <!--begin::Photo-->
                            <div class="octagon mx-auto mb-5 d-flex w-200px h-200px bgi-no-repeat bgi-size-contain bgi-position-center" style="background-image:url('assets/media/avatars/300-1.jpg')"></div>
                            <!--end::Photo-->
                            <!--begin::Person-->
                            <div class="mb-0">
                                <!--begin::Name-->
                                <a href="#" class="text-dark fw-bold text-hover-primary fs-3">Paul Miles</a>
                                <!--end::Name-->
                                <!--begin::Position-->
                                <div class="text-muted fs-6 fw-semibold mt-1">Development Lead</div>
                                <!--begin::Position-->
                            </div>
                            <!--end::Person-->
                        </div>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <div class="text-center">
                            <!--begin::Photo-->
                            <div class="octagon mx-auto mb-5 d-flex w-200px h-200px bgi-no-repeat bgi-size-contain bgi-position-center" style="background-image:url('assets/media/avatars/300-2.jpg')"></div>
                            <!--end::Photo-->
                            <!--begin::Person-->
                            <div class="mb-0">
                                <!--begin::Name-->
                                <a href="#" class="text-dark fw-bold text-hover-primary fs-3">Melisa Marcus</a>
                                <!--end::Name-->
                                <!--begin::Position-->
                                <div class="text-muted fs-6 fw-semibold mt-1">Creative Director</div>
                                <!--begin::Position-->
                            </div>
                            <!--end::Person-->
                        </div>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <div class="text-center">
                            <!--begin::Photo-->
                            <div class="octagon mx-auto mb-5 d-flex w-200px h-200px bgi-no-repeat bgi-size-contain bgi-position-center" style="background-image:url('assets/media/avatars/300-5.jpg')"></div>
                            <!--end::Photo-->
                            <!--begin::Person-->
                            <div class="mb-0">
                                <!--begin::Name-->
                                <a href="#" class="text-dark fw-bold text-hover-primary fs-3">David Nilson</a>
                                <!--end::Name-->
                                <!--begin::Position-->
                                <div class="text-muted fs-6 fw-semibold mt-1">Python Expert</div>
                                <!--begin::Position-->
                            </div>
                            <!--end::Person-->
                        </div>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <div class="text-center">
                            <!--begin::Photo-->
                            <div class="octagon mx-auto mb-5 d-flex w-200px h-200px bgi-no-repeat bgi-size-contain bgi-position-center" style="background-image:url('assets/media/avatars/300-20.jpg')"></div>
                            <!--end::Photo-->
                            <!--begin::Person-->
                            <div class="mb-0">
                                <!--begin::Name-->
                                <a href="#" class="text-dark fw-bold text-hover-primary fs-3">Anne Clarc</a>
                                <!--end::Name-->
                                <!--begin::Position-->
                                <div class="text-muted fs-6 fw-semibold mt-1">Project Manager</div>
                                <!--begin::Position-->
                            </div>
                            <!--end::Person-->
                        </div>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <div class="text-center">
                            <!--begin::Photo-->
                            <div class="octagon mx-auto mb-5 d-flex w-200px h-200px bgi-no-repeat bgi-size-contain bgi-position-center" style="background-image:url('assets/media/avatars/300-23.jpg')"></div>
                            <!--end::Photo-->
                            <!--begin::Person-->
                            <div class="mb-0">
                                <!--begin::Name-->
                                <a href="#" class="text-dark fw-bold text-hover-primary fs-3">Ricky Hunt</a>
                                <!--end::Name-->
                                <!--begin::Position-->
                                <div class="text-muted fs-6 fw-semibold mt-1">Art Director</div>
                                <!--begin::Position-->
                            </div>
                            <!--end::Person-->
                        </div>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <div class="text-center">
                            <!--begin::Photo-->
                            <div class="octagon mx-auto mb-5 d-flex w-200px h-200px bgi-no-repeat bgi-size-contain bgi-position-center" style="background-image:url('assets/media/avatars/300-12.jpg')"></div>
                            <!--end::Photo-->
                            <!--begin::Person-->
                            <div class="mb-0">
                                <!--begin::Name-->
                                <a href="#" class="text-dark fw-bold text-hover-primary fs-3">Alice Wayde</a>
                                <!--end::Name-->
                                <!--begin::Position-->
                                <div class="text-muted fs-6 fw-semibold mt-1">Marketing Manager</div>
                                <!--begin::Position-->
                            </div>
                            <!--end::Person-->
                        </div>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <div class="text-center">
                            <!--begin::Photo-->
                            <div class="octagon mx-auto mb-5 d-flex w-200px h-200px bgi-no-repeat bgi-size-contain bgi-position-center" style="background-image:url('assets/media/avatars/300-9.jpg')"></div>
                            <!--end::Photo-->
                            <!--begin::Person-->
                            <div class="mb-0">
                                <!--begin::Name-->
                                <a href="#" class="text-dark fw-bold text-hover-primary fs-3">Carles Puyol</a>
                                <!--end::Name-->
                                <!--begin::Position-->
                                <div class="text-muted fs-6 fw-semibold mt-1">QA Managers</div>
                                <!--begin::Position-->
                            </div>
                            <!--end::Person-->
                        </div>
                        <!--end::Item-->
                    </div>
                    <!--end::Wrapper-->
                    <!--begin::Button-->
                    <button class="btn btn-icon btn-active-color-primary" id="kt_team_slider_prev">
                        <!--begin::Svg Icon | path: icons/duotune/arrows/arr074.svg-->
                        <span class="svg-icon svg-icon-3x">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M11.2657 11.4343L15.45 7.25C15.8642 6.83579 15.8642 6.16421 15.45 5.75C15.0358 5.33579 14.3642 5.33579 13.95 5.75L8.40712 11.2929C8.01659 11.6834 8.01659 12.3166 8.40712 12.7071L13.95 18.25C14.3642 18.6642 15.0358 18.6642 15.45 18.25C15.8642 17.8358 15.8642 17.1642 15.45 16.75L11.2657 12.5657C10.9533 12.2533 10.9533 11.7467 11.2657 11.4343Z" fill="currentColor" />
                            </svg>
                        </span>
                        <!--end::Svg Icon-->
                    </button>
                    <!--end::Button-->
                    <!--begin::Button-->
                    <button class="btn btn-icon btn-active-color-primary" id="kt_team_slider_next">
                        <!--begin::Svg Icon | path: icons/duotune/arrows/arr071.svg-->
                        <span class="svg-icon svg-icon-3x">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M12.6343 12.5657L8.45001 16.75C8.0358 17.1642 8.0358 17.8358 8.45001 18.25C8.86423 18.6642 9.5358 18.6642 9.95001 18.25L15.4929 12.7071C15.8834 12.3166 15.8834 11.6834 15.4929 11.2929L9.95001 5.75C9.5358 5.33579 8.86423 5.33579 8.45001 5.75C8.0358 6.16421 8.0358 6.83579 8.45001 7.25L12.6343 11.4343C12.9467 11.7467 12.9467 12.2533 12.6343 12.5657Z" fill="currentColor" />
                            </svg>
                        </span>
                        <!--end::Svg Icon-->
                    </button>
                    <!--end::Button-->
                </div>
                <!--end::Slider-->
            </div>
            <!--end::Container-->
        </div>

        <div class="mb-lg-n15 position-relative z-index-2">
            <div class="container">
                <div class="card" style="filter: drop-shadow(0px 0px 40px rgba(68, 81, 96, 0.08))">
                    <div class="card-body p-lg-20">
                        <div class="tab-content">
                            <div class="tab-pane fade show active" id="kt_landing_projects_latest">
                                <div class="row g-10">
                                    <div class="col-lg-6">
                                        <a class="d-block card-rounded overlay h-lg-100" data-fslightbox="lightbox-projects" href="{{ asset('assets/media/stock/600x600/img-23.jpg') }}">

                                            <div class="overlay-wrapper bgi-no-repeat bgi-position-center bgi-size-cover card-rounded h-lg-100 min-h-250px" style="background-image:url('<?= asset("assets/media/stock/600x600/img-23.jpg"); ?>')"></div>

                                            <div class="overlay-layer card-rounded bg-dark bg-opacity-25">
                                                <i class="bi bi-eye-fill fs-3x text-white"></i>
                                            </div>
                                            <p class="text-white fw-bold fs-3 position-absolute bottom-0 end-0 mb-10 me-10">Telusuri Arsip</p>

                                        </a>
                                    </div>

                                    <div class="col-lg-6">
                                        <div class="row g-10 mb-10">
                                            <div class="col-lg-6">
                                                <a class="d-block card-rounded overlay" data-fslightbox="lightbox-projects" href="assets/media/stock/600x600/img-22.jpg">
                                                    <div class="overlay-wrapper bgi-no-repeat bgi-position-center bgi-size-cover card-rounded h-250px" style="background-image:url('assets/media/stock/600x600/img-22.jpg')"></div>

                                                    <div class="overlay-layer card-rounded bg-dark bg-opacity-25">
                                                        <i class="bi bi-eye-fill fs-3x text-white"></i>
                                                    </div>
                                                </a>
                                            </div>
                                            <div class="col-lg-6">
                                                <a class="d-block card-rounded overlay" data-fslightbox="lightbox-projects" href="assets/media/stock/600x600/img-21.jpg">
                                                    <div class="overlay-wrapper bgi-no-repeat bgi-position-center bgi-size-cover card-rounded h-250px" style="background-image:url('assets/media/stock/600x600/img-21.jpg')"></div>

                                                    <div class="overlay-layer card-rounded bg-dark bg-opacity-25">
                                                        <i class="bi bi-eye-fill fs-3x text-white"></i>
                                                    </div>
                                                    <!--end::Action-->
                                                </a>
                                                <!--end::Item-->
                                            </div>
                                            <!--end::Col-->
                                        </div>
                                        <!--end::Row-->
                                        <!--begin::Item-->
                                        <a class="d-block card-rounded overlay" data-fslightbox="lightbox-projects" href="assets/media/stock/600x400/img-20.jpg">
                                            <!--begin::Image-->
                                            <div class="overlay-wrapper bgi-no-repeat bgi-position-center bgi-size-cover card-rounded h-250px" style="background-image:url('assets/media/stock/600x600/img-20.jpg')"></div>
                                            <!--end::Image-->
                                            <!--begin::Action-->
                                            <div class="overlay-layer card-rounded bg-dark bg-opacity-25">
                                                <i class="bi bi-eye-fill fs-3x text-white"></i>
                                            </div>
                                            <!--end::Action-->
                                        </a>
                                        <!--end::Item-->
                                    </div>
                                </div>
                            </div>
                            <!--end::Tab pane-->
                            <!--begin::Tab pane-->
                            <div class="tab-pane fade" id="kt_landing_projects_web_design">
                                <!--begin::Row-->
                                <div class="row g-10">
                                    <!--begin::Col-->
                                    <div class="col-lg-6">
                                        <!--begin::Item-->
                                        <a class="d-block card-rounded overlay h-lg-100" data-fslightbox="lightbox-projects" href="assets/media/stock/600x600/img-11.jpg">
                                            <!--begin::Image-->
                                            <div class="overlay-wrapper bgi-no-repeat bgi-position-center bgi-size-cover card-rounded h-lg-100 min-h-250px" style="background-image:url('assets/media/stock/600x600/img-11.jpg')"></div>
                                            <!--end::Image-->
                                            <!--begin::Action-->
                                            <div class="overlay-layer card-rounded bg-dark bg-opacity-25">
                                                <i class="bi bi-eye-fill fs-3x text-white"></i>
                                            </div>
                                            <!--end::Action-->
                                        </a>
                                        <!--end::Item-->
                                    </div>
                                    <!--end::Col-->
                                    <!--begin::Col-->
                                    <div class="col-lg-6">
                                        <!--begin::Row-->
                                        <div class="row g-10 mb-10">
                                            <!--begin::Col-->
                                            <div class="col-lg-6">
                                                <!--begin::Item-->
                                                <a class="d-block card-rounded overlay" data-fslightbox="lightbox-projects" href="assets/media/stock/600x600/img-12.jpg">
                                                    <!--begin::Image-->
                                                    <div class="overlay-wrapper bgi-no-repeat bgi-position-center bgi-size-cover card-rounded h-250px" style="background-image:url('assets/media/stock/600x600/img-12.jpg')"></div>
                                                    <!--end::Image-->
                                                    <!--begin::Action-->
                                                    <div class="overlay-layer card-rounded bg-dark bg-opacity-25">
                                                        <i class="bi bi-eye-fill fs-3x text-white"></i>
                                                    </div>
                                                    <!--end::Action-->
                                                </a>
                                                <!--end::Item-->
                                            </div>
                                            <!--end::Col-->
                                            <!--begin::Col-->
                                            <div class="col-lg-6">
                                                <!--begin::Item-->
                                                <a class="d-block card-rounded overlay" data-fslightbox="lightbox-projects" href="assets/media/stock/600x600/img-21.jpg">
                                                    <!--begin::Image-->
                                                    <div class="overlay-wrapper bgi-no-repeat bgi-position-center bgi-size-cover card-rounded h-250px" style="background-image:url('assets/media/stock/600x600/img-21.jpg')"></div>
                                                    <!--end::Image-->
                                                    <!--begin::Action-->
                                                    <div class="overlay-layer card-rounded bg-dark bg-opacity-25">
                                                        <i class="bi bi-eye-fill fs-3x text-white"></i>
                                                    </div>
                                                    <!--end::Action-->
                                                </a>
                                                <!--end::Item-->
                                            </div>
                                            <!--end::Col-->
                                        </div>
                                        <!--end::Row-->
                                        <!--begin::Item-->
                                        <a class="d-block card-rounded overlay" data-fslightbox="lightbox-projects" href="assets/media/stock/600x400/img-20.jpg">
                                            <!--begin::Image-->
                                            <div class="overlay-wrapper bgi-no-repeat bgi-position-center bgi-size-cover card-rounded h-250px" style="background-image:url('assets/media/stock/600x600/img-20.jpg')"></div>
                                            <!--end::Image-->
                                            <!--begin::Action-->
                                            <div class="overlay-layer card-rounded bg-dark bg-opacity-25">
                                                <i class="bi bi-eye-fill fs-3x text-white"></i>
                                            </div>
                                            <!--end::Action-->
                                        </a>
                                        <!--end::Item-->
                                    </div>
                                    <!--end::Col-->
                                </div>
                                <!--end::Row-->
                            </div>
                            <!--end::Tab pane-->
                            <!--begin::Tab pane-->
                            <div class="tab-pane fade" id="kt_landing_projects_mobile_apps">
                                <!--begin::Row-->
                                <div class="row g-10">
                                    <!--begin::Col-->
                                    <div class="col-lg-6">
                                        <!--begin::Row-->
                                        <div class="row g-10 mb-10">
                                            <!--begin::Col-->
                                            <div class="col-lg-6">
                                                <!--begin::Item-->
                                                <a class="d-block card-rounded overlay" data-fslightbox="lightbox-projects" href="assets/media/stock/600x600/img-16.jpg">
                                                    <!--begin::Image-->
                                                    <div class="overlay-wrapper bgi-no-repeat bgi-position-center bgi-size-cover card-rounded h-250px" style="background-image:url('assets/media/stock/600x600/img-16.jpg')"></div>
                                                    <!--end::Image-->
                                                    <!--begin::Action-->
                                                    <div class="overlay-layer card-rounded bg-dark bg-opacity-25">
                                                        <i class="bi bi-eye-fill fs-3x text-white"></i>
                                                    </div>
                                                    <!--end::Action-->
                                                </a>
                                                <!--end::Item-->
                                            </div>
                                            <!--end::Col-->
                                            <!--begin::Col-->
                                            <div class="col-lg-6">
                                                <!--begin::Item-->
                                                <a class="d-block card-rounded overlay" data-fslightbox="lightbox-projects" href="assets/media/stock/600x600/img-12.jpg">
                                                    <!--begin::Image-->
                                                    <div class="overlay-wrapper bgi-no-repeat bgi-position-center bgi-size-cover card-rounded h-250px" style="background-image:url('assets/media/stock/600x600/img-12.jpg')"></div>
                                                    <!--end::Image-->
                                                    <!--begin::Action-->
                                                    <div class="overlay-layer card-rounded bg-dark bg-opacity-25">
                                                        <i class="bi bi-eye-fill fs-3x text-white"></i>
                                                    </div>
                                                    <!--end::Action-->
                                                </a>
                                                <!--end::Item-->
                                            </div>
                                            <!--end::Col-->
                                        </div>
                                        <!--end::Row-->
                                        <!--begin::Item-->
                                        <a class="d-block card-rounded overlay" data-fslightbox="lightbox-projects" href="assets/media/stock/600x400/img-15.jpg">
                                            <!--begin::Image-->
                                            <div class="overlay-wrapper bgi-no-repeat bgi-position-center bgi-size-cover card-rounded h-250px" style="background-image:url('assets/media/stock/600x600/img-15.jpg')"></div>
                                            <!--end::Image-->
                                            <!--begin::Action-->
                                            <div class="overlay-layer card-rounded bg-dark bg-opacity-25">
                                                <i class="bi bi-eye-fill fs-3x text-white"></i>
                                            </div>
                                            <!--end::Action-->
                                        </a>
                                        <!--end::Item-->
                                    </div>
                                    <!--end::Col-->
                                    <!--begin::Col-->
                                    <div class="col-lg-6">
                                        <!--begin::Item-->
                                        <a class="d-block card-rounded overlay h-lg-100" data-fslightbox="lightbox-projects" href="assets/media/stock/600x600/img-23.jpg">
                                            <!--begin::Image-->
                                            <div class="overlay-wrapper bgi-no-repeat bgi-position-center bgi-size-cover card-rounded h-lg-100 min-h-250px" style="background-image:url('assets/media/stock/600x600/img-23.jpg')"></div>
                                            <!--end::Image-->
                                            <!--begin::Action-->
                                            <div class="overlay-layer card-rounded bg-dark bg-opacity-25">
                                                <i class="bi bi-eye-fill fs-3x text-white"></i>
                                            </div>
                                            <!--end::Action-->
                                        </a>
                                        <!--end::Item-->
                                    </div>
                                    <!--end::Col-->
                                </div>
                                <!--end::Row-->
                            </div>
                            <!--end::Tab pane-->
                            <!--begin::Tab pane-->
                            <div class="tab-pane fade" id="kt_landing_projects_development">
                                <!--begin::Row-->
                                <div class="row g-10">
                                    <!--begin::Col-->
                                    <div class="col-lg-6">
                                        <!--begin::Item-->
                                        <a class="d-block card-rounded overlay h-lg-100" data-fslightbox="lightbox-projects" href="assets/media/stock/600x600/img-15.jpg">
                                            <!--begin::Image-->
                                            <div class="overlay-wrapper bgi-no-repeat bgi-position-center bgi-size-cover card-rounded h-lg-100 min-h-250px" style="background-image:url('assets/media/stock/600x600/img-15.jpg')"></div>
                                            <!--end::Image-->
                                            <!--begin::Action-->
                                            <div class="overlay-layer card-rounded bg-dark bg-opacity-25">
                                                <i class="bi bi-eye-fill fs-3x text-white"></i>
                                            </div>
                                            <!--end::Action-->
                                        </a>
                                        <!--end::Item-->
                                    </div>
                                    <!--end::Col-->
                                    <!--begin::Col-->
                                    <div class="col-lg-6">
                                        <!--begin::Row-->
                                        <div class="row g-10 mb-10">
                                            <!--begin::Col-->
                                            <div class="col-lg-6">
                                                <!--begin::Item-->
                                                <a class="d-block card-rounded overlay" data-fslightbox="lightbox-projects" href="assets/media/stock/600x600/img-22.jpg">
                                                    <!--begin::Image-->
                                                    <div class="overlay-wrapper bgi-no-repeat bgi-position-center bgi-size-cover card-rounded h-250px" style="background-image:url('assets/media/stock/600x600/img-22.jpg')"></div>
                                                    <!--end::Image-->
                                                    <!--begin::Action-->
                                                    <div class="overlay-layer card-rounded bg-dark bg-opacity-25">
                                                        <i class="bi bi-eye-fill fs-3x text-white"></i>
                                                    </div>
                                                    <!--end::Action-->
                                                </a>
                                                <!--end::Item-->
                                            </div>
                                            <!--end::Col-->
                                            <!--begin::Col-->
                                            <div class="col-lg-6">
                                                <!--begin::Item-->
                                                <a class="d-block card-rounded overlay" data-fslightbox="lightbox-projects" href="assets/media/stock/600x600/img-21.jpg">
                                                    <!--begin::Image-->
                                                    <div class="overlay-wrapper bgi-no-repeat bgi-position-center bgi-size-cover card-rounded h-250px" style="background-image:url('assets/media/stock/600x600/img-21.jpg')"></div>
                                                    <!--end::Image-->
                                                    <!--begin::Action-->
                                                    <div class="overlay-layer card-rounded bg-dark bg-opacity-25">
                                                        <i class="bi bi-eye-fill fs-3x text-white"></i>
                                                    </div>
                                                    <!--end::Action-->
                                                </a>
                                                <!--end::Item-->
                                            </div>
                                            <!--end::Col-->
                                        </div>
                                        <!--end::Row-->
                                        <!--begin::Item-->
                                        <a class="d-block card-rounded overlay" data-fslightbox="lightbox-projects" href="assets/media/stock/600x400/img-14.jpg">
                                            <!--begin::Image-->
                                            <div class="overlay-wrapper bgi-no-repeat bgi-position-center bgi-size-cover card-rounded h-250px" style="background-image:url('assets/media/stock/600x600/img-14.jpg')"></div>
                                            <!--end::Image-->
                                            <!--begin::Action-->
                                            <div class="overlay-layer card-rounded bg-dark bg-opacity-25">
                                                <i class="bi bi-eye-fill fs-3x text-white"></i>
                                            </div>
                                            <!--end::Action-->
                                        </a>
                                        <!--end::Item-->
                                    </div>
                                    <!--end::Col-->
                                </div>
                                <!--end::Row-->
                            </div>
                            <!--end::Tab pane-->
                        </div>
                        <!--end::Tabs content-->
                    </div>
                    <!--end::Card body-->
                </div>
                <!--end::Card-->
            </div>
            <!--end::Container-->
        </div>

        <div class="mt-sm-n20">
            <div class="py-20 landing-dark-bg">
                <div class="container">
                    <div class="d-flex flex-column container pt-lg-20">
                        <div class="mb-13 text-center">
                            <h1 class="fs-2hx fw-bold text-white mb-5" id="pricing" data-kt-scroll-offset="{default: 100, lg: 150}">Clear Pricing Makes it Easy</h1>
                            <div class="text-gray-600 fw-semibold fs-5">Save thousands to millions of bucks by using single tool for different
                                <br />amazing and outstanding cool and great useful admin
                            </div>
                        </div>

                        <div class="text-center" id="kt_pricing">
                            <div class="nav-group landing-dark-bg d-inline-flex mb-15" data-kt-buttons="true" style="border: 1px dashed #2B4666;">
                                <a href="#" class="btn btn-color-gray-600 btn-active btn-active-success px-6 py-3 me-2 active" data-kt-plan="month">Monthly</a>
                                <a href="#" class="btn btn-color-gray-600 btn-active btn-active-success px-6 py-3" data-kt-plan="annual">Annual</a>
                            </div>

                            <div class="row g-10">
                                <div class="col-xl-4">
                                    <div class="d-flex h-100 align-items-center">
                                        <div class="w-100 d-flex flex-column flex-center rounded-3 bg-body py-15 px-10">
                                            <div class="mb-7 text-center">
                                                <h1 class="text-dark mb-5 fw-boldest">Startup</h1>
                                                <div class="text-gray-400 fw-semibold mb-5">Best Settings for Startups</div>
                                                <div class="text-center">
                                                    <span class="mb-2 text-primary">$</span>
                                                    <span class="fs-3x fw-bold text-primary" data-kt-plan-price-month="99" data-kt-plan-price-annual="999">99</span>
                                                    <span class="fs-7 fw-semibold opacity-50" data-kt-plan-price-month="Mon" data-kt-plan-price-annual="Ann">/ Mon</span>
                                                </div>
                                            </div>
                                            <div class="w-100 mb-10">
                                                <div class="d-flex flex-stack mb-5">
                                                    <span class="fw-semibold fs-6 text-gray-800 text-start pe-3">Up to 10 Active Users</span>
                                                    <span class="svg-icon svg-icon-1 svg-icon-success">
                                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10" fill="currentColor" />
                                                            <path d="M10.4343 12.4343L8.75 10.75C8.33579 10.3358 7.66421 10.3358 7.25 10.75C6.83579 11.1642 6.83579 11.8358 7.25 12.25L10.2929 15.2929C10.6834 15.6834 11.3166 15.6834 11.7071 15.2929L17.25 9.75C17.6642 9.33579 17.6642 8.66421 17.25 8.25C16.8358 7.83579 16.1642 7.83579 15.75 8.25L11.5657 12.4343C11.2533 12.7467 10.7467 12.7467 10.4343 12.4343Z" fill="currentColor" />
                                                        </svg>
                                                    </span>
                                                </div>
                                                <div class="d-flex flex-stack mb-5">
                                                    <span class="fw-semibold fs-6 text-gray-800 text-start pe-3">Up to 30 Project Integrations</span>
                                                    <!--begin::Svg Icon | path: icons/duotune/general/gen043.svg-->
                                                    <span class="svg-icon svg-icon-1 svg-icon-success">
                                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10" fill="currentColor" />
                                                            <path d="M10.4343 12.4343L8.75 10.75C8.33579 10.3358 7.66421 10.3358 7.25 10.75C6.83579 11.1642 6.83579 11.8358 7.25 12.25L10.2929 15.2929C10.6834 15.6834 11.3166 15.6834 11.7071 15.2929L17.25 9.75C17.6642 9.33579 17.6642 8.66421 17.25 8.25C16.8358 7.83579 16.1642 7.83579 15.75 8.25L11.5657 12.4343C11.2533 12.7467 10.7467 12.7467 10.4343 12.4343Z" fill="currentColor" />
                                                        </svg>
                                                    </span>
                                                    <!--end::Svg Icon-->
                                                </div>
                                                <!--end::Item-->
                                                <!--begin::Item-->
                                                <div class="d-flex flex-stack mb-5">
                                                    <span class="fw-semibold fs-6 text-gray-800">Keen Analytics Platform</span>
                                                    <!--begin::Svg Icon | path: icons/duotune/general/gen040.svg-->
                                                    <span class="svg-icon svg-icon-1">
                                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10" fill="currentColor" />
                                                            <rect x="7" y="15.3137" width="12" height="2" rx="1" transform="rotate(-45 7 15.3137)" fill="currentColor" />
                                                            <rect x="8.41422" y="7" width="12" height="2" rx="1" transform="rotate(45 8.41422 7)" fill="currentColor" />
                                                        </svg>
                                                    </span>
                                                    <!--end::Svg Icon-->
                                                </div>
                                                <!--end::Item-->
                                                <!--begin::Item-->
                                                <div class="d-flex flex-stack mb-5">
                                                    <span class="fw-semibold fs-6 text-gray-800">Targets Timelines & Files</span>
                                                    <!--begin::Svg Icon | path: icons/duotune/general/gen040.svg-->
                                                    <span class="svg-icon svg-icon-1">
                                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10" fill="currentColor" />
                                                            <rect x="7" y="15.3137" width="12" height="2" rx="1" transform="rotate(-45 7 15.3137)" fill="currentColor" />
                                                            <rect x="8.41422" y="7" width="12" height="2" rx="1" transform="rotate(45 8.41422 7)" fill="currentColor" />
                                                        </svg>
                                                    </span>
                                                    <!--end::Svg Icon-->
                                                </div>
                                                <!--end::Item-->
                                                <!--begin::Item-->
                                                <div class="d-flex flex-stack">
                                                    <span class="fw-semibold fs-6 text-gray-800">Unlimited Projects</span>
                                                    <!--begin::Svg Icon | path: icons/duotune/general/gen040.svg-->
                                                    <span class="svg-icon svg-icon-1">
                                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10" fill="currentColor" />
                                                            <rect x="7" y="15.3137" width="12" height="2" rx="1" transform="rotate(-45 7 15.3137)" fill="currentColor" />
                                                            <rect x="8.41422" y="7" width="12" height="2" rx="1" transform="rotate(45 8.41422 7)" fill="currentColor" />
                                                        </svg>
                                                    </span>
                                                    <!--end::Svg Icon-->
                                                </div>
                                                <!--end::Item-->
                                            </div>
                                            <!--end::Features-->
                                            <!--begin::Select-->
                                            <a href="#" class="btn btn-primary">Select</a>
                                            <!--end::Select-->
                                        </div>
                                        <!--end::Option-->
                                    </div>
                                </div>
                                <!--end::Col-->
                                <!--begin::Col-->
                                <div class="col-xl-4">
                                    <div class="d-flex h-100 align-items-center">
                                        <!--begin::Option-->
                                        <div class="w-100 d-flex flex-column flex-center rounded-3 bg-primary py-20 px-10">
                                            <!--begin::Heading-->
                                            <div class="mb-7 text-center">
                                                <!--begin::Title-->
                                                <h1 class="text-white mb-5 fw-boldest">Business</h1>
                                                <!--end::Title-->
                                                <!--begin::Description-->
                                                <div class="text-white opacity-75 fw-semibold mb-5">Best Settings for Business</div>
                                                <!--end::Description-->
                                                <!--begin::Price-->
                                                <div class="text-center">
                                                    <span class="mb-2 text-white">$</span>
                                                    <span class="fs-3x fw-bold text-white" data-kt-plan-price-month="199" data-kt-plan-price-annual="1999">199</span>
                                                    <span class="fs-7 fw-semibold text-white opacity-75" data-kt-plan-price-month="Mon" data-kt-plan-price-annual="Ann">/ Mon</span>
                                                </div>
                                                <!--end::Price-->
                                            </div>
                                            <!--end::Heading-->
                                            <!--begin::Features-->
                                            <div class="w-100 mb-10">
                                                <!--begin::Item-->
                                                <div class="d-flex flex-stack mb-5">
                                                    <span class="fw-semibold fs-6 text-white opacity-75 text-start pe-3">Up to 10 Active Users</span>
                                                    <!--begin::Svg Icon | path: icons/duotune/general/gen043.svg-->
                                                    <span class="svg-icon svg-icon-1 svg-icon-white">
                                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10" fill="currentColor" />
                                                            <path d="M10.4343 12.4343L8.75 10.75C8.33579 10.3358 7.66421 10.3358 7.25 10.75C6.83579 11.1642 6.83579 11.8358 7.25 12.25L10.2929 15.2929C10.6834 15.6834 11.3166 15.6834 11.7071 15.2929L17.25 9.75C17.6642 9.33579 17.6642 8.66421 17.25 8.25C16.8358 7.83579 16.1642 7.83579 15.75 8.25L11.5657 12.4343C11.2533 12.7467 10.7467 12.7467 10.4343 12.4343Z" fill="currentColor" />
                                                        </svg>
                                                    </span>
                                                    <!--end::Svg Icon-->
                                                </div>
                                                <!--end::Item-->
                                                <!--begin::Item-->
                                                <div class="d-flex flex-stack mb-5">
                                                    <span class="fw-semibold fs-6 text-white opacity-75 text-start pe-3">Up to 30 Project Integrations</span>
                                                    <!--begin::Svg Icon | path: icons/duotune/general/gen043.svg-->
                                                    <span class="svg-icon svg-icon-1 svg-icon-white">
                                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10" fill="currentColor" />
                                                            <path d="M10.4343 12.4343L8.75 10.75C8.33579 10.3358 7.66421 10.3358 7.25 10.75C6.83579 11.1642 6.83579 11.8358 7.25 12.25L10.2929 15.2929C10.6834 15.6834 11.3166 15.6834 11.7071 15.2929L17.25 9.75C17.6642 9.33579 17.6642 8.66421 17.25 8.25C16.8358 7.83579 16.1642 7.83579 15.75 8.25L11.5657 12.4343C11.2533 12.7467 10.7467 12.7467 10.4343 12.4343Z" fill="currentColor" />
                                                        </svg>
                                                    </span>
                                                    <!--end::Svg Icon-->
                                                </div>
                                                <!--end::Item-->
                                                <!--begin::Item-->
                                                <div class="d-flex flex-stack mb-5">
                                                    <span class="fw-semibold fs-6 text-white opacity-75 text-start pe-3">Keen Analytics Platform</span>
                                                    <!--begin::Svg Icon | path: icons/duotune/general/gen043.svg-->
                                                    <span class="svg-icon svg-icon-1 svg-icon-white">
                                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10" fill="currentColor" />
                                                            <path d="M10.4343 12.4343L8.75 10.75C8.33579 10.3358 7.66421 10.3358 7.25 10.75C6.83579 11.1642 6.83579 11.8358 7.25 12.25L10.2929 15.2929C10.6834 15.6834 11.3166 15.6834 11.7071 15.2929L17.25 9.75C17.6642 9.33579 17.6642 8.66421 17.25 8.25C16.8358 7.83579 16.1642 7.83579 15.75 8.25L11.5657 12.4343C11.2533 12.7467 10.7467 12.7467 10.4343 12.4343Z" fill="currentColor" />
                                                        </svg>
                                                    </span>
                                                    <!--end::Svg Icon-->
                                                </div>
                                                <!--end::Item-->
                                                <!--begin::Item-->
                                                <div class="d-flex flex-stack mb-5">
                                                    <span class="fw-semibold fs-6 text-white opacity-75 text-start pe-3">Targets Timelines & Files</span>
                                                    <!--begin::Svg Icon | path: icons/duotune/general/gen043.svg-->
                                                    <span class="svg-icon svg-icon-1 svg-icon-white">
                                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10" fill="currentColor" />
                                                            <path d="M10.4343 12.4343L8.75 10.75C8.33579 10.3358 7.66421 10.3358 7.25 10.75C6.83579 11.1642 6.83579 11.8358 7.25 12.25L10.2929 15.2929C10.6834 15.6834 11.3166 15.6834 11.7071 15.2929L17.25 9.75C17.6642 9.33579 17.6642 8.66421 17.25 8.25C16.8358 7.83579 16.1642 7.83579 15.75 8.25L11.5657 12.4343C11.2533 12.7467 10.7467 12.7467 10.4343 12.4343Z" fill="currentColor" />
                                                        </svg>
                                                    </span>
                                                    <!--end::Svg Icon-->
                                                </div>
                                                <!--end::Item-->
                                                <!--begin::Item-->
                                                <div class="d-flex flex-stack">
                                                    <span class="fw-semibold fs-6 text-white opacity-75">Unlimited Projects</span>
                                                    <!--begin::Svg Icon | path: icons/duotune/general/gen040.svg-->
                                                    <span class="svg-icon svg-icon-1 svg-icon-white">
                                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10" fill="currentColor" />
                                                            <rect x="7" y="15.3137" width="12" height="2" rx="1" transform="rotate(-45 7 15.3137)" fill="currentColor" />
                                                            <rect x="8.41422" y="7" width="12" height="2" rx="1" transform="rotate(45 8.41422 7)" fill="currentColor" />
                                                        </svg>
                                                    </span>
                                                    <!--end::Svg Icon-->
                                                </div>
                                                <!--end::Item-->
                                            </div>
                                            <!--end::Features-->
                                            <!--begin::Select-->
                                            <a href="#" class="btn btn-color-primary btn-active-light-primary btn-light">Select</a>
                                            <!--end::Select-->
                                        </div>
                                        <!--end::Option-->
                                    </div>
                                </div>
                                <!--end::Col-->
                                <!--begin::Col-->
                                <div class="col-xl-4">
                                    <div class="d-flex h-100 align-items-center">
                                        <!--begin::Option-->
                                        <div class="w-100 d-flex flex-column flex-center rounded-3 bg-body py-15 px-10">
                                            <!--begin::Heading-->
                                            <div class="mb-7 text-center">
                                                <!--begin::Title-->
                                                <h1 class="text-dark mb-5 fw-boldest">Enterprise</h1>
                                                <!--end::Title-->
                                                <!--begin::Description-->
                                                <div class="text-gray-400 fw-semibold mb-5">Best Settings for Enterprise</div>
                                                <!--end::Description-->
                                                <!--begin::Price-->
                                                <div class="text-center">
                                                    <span class="mb-2 text-primary">$</span>
                                                    <span class="fs-3x fw-bold text-primary" data-kt-plan-price-month="999" data-kt-plan-price-annual="9999">999</span>
                                                    <span class="fs-7 fw-semibold opacity-50" data-kt-plan-price-month="Mon" data-kt-plan-price-annual="Ann">/ Mon</span>
                                                </div>
                                                <!--end::Price-->
                                            </div>
                                            <!--end::Heading-->
                                            <!--begin::Features-->
                                            <div class="w-100 mb-10">
                                                <!--begin::Item-->
                                                <div class="d-flex flex-stack mb-5">
                                                    <span class="fw-semibold fs-6 text-gray-800 text-start pe-3">Up to 10 Active Users</span>
                                                    <!--begin::Svg Icon | path: icons/duotune/general/gen043.svg-->
                                                    <span class="svg-icon svg-icon-1 svg-icon-success">
                                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10" fill="currentColor" />
                                                            <path d="M10.4343 12.4343L8.75 10.75C8.33579 10.3358 7.66421 10.3358 7.25 10.75C6.83579 11.1642 6.83579 11.8358 7.25 12.25L10.2929 15.2929C10.6834 15.6834 11.3166 15.6834 11.7071 15.2929L17.25 9.75C17.6642 9.33579 17.6642 8.66421 17.25 8.25C16.8358 7.83579 16.1642 7.83579 15.75 8.25L11.5657 12.4343C11.2533 12.7467 10.7467 12.7467 10.4343 12.4343Z" fill="currentColor" />
                                                        </svg>
                                                    </span>
                                                    <!--end::Svg Icon-->
                                                </div>
                                                <!--end::Item-->
                                                <!--begin::Item-->
                                                <div class="d-flex flex-stack mb-5">
                                                    <span class="fw-semibold fs-6 text-gray-800 text-start pe-3">Up to 30 Project Integrations</span>
                                                    <!--begin::Svg Icon | path: icons/duotune/general/gen043.svg-->
                                                    <span class="svg-icon svg-icon-1 svg-icon-success">
                                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10" fill="currentColor" />
                                                            <path d="M10.4343 12.4343L8.75 10.75C8.33579 10.3358 7.66421 10.3358 7.25 10.75C6.83579 11.1642 6.83579 11.8358 7.25 12.25L10.2929 15.2929C10.6834 15.6834 11.3166 15.6834 11.7071 15.2929L17.25 9.75C17.6642 9.33579 17.6642 8.66421 17.25 8.25C16.8358 7.83579 16.1642 7.83579 15.75 8.25L11.5657 12.4343C11.2533 12.7467 10.7467 12.7467 10.4343 12.4343Z" fill="currentColor" />
                                                        </svg>
                                                    </span>
                                                    <!--end::Svg Icon-->
                                                </div>
                                                <!--end::Item-->
                                                <!--begin::Item-->
                                                <div class="d-flex flex-stack mb-5">
                                                    <span class="fw-semibold fs-6 text-gray-800 text-start pe-3">Keen Analytics Platform</span>
                                                    <!--begin::Svg Icon | path: icons/duotune/general/gen043.svg-->
                                                    <span class="svg-icon svg-icon-1 svg-icon-success">
                                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10" fill="currentColor" />
                                                            <path d="M10.4343 12.4343L8.75 10.75C8.33579 10.3358 7.66421 10.3358 7.25 10.75C6.83579 11.1642 6.83579 11.8358 7.25 12.25L10.2929 15.2929C10.6834 15.6834 11.3166 15.6834 11.7071 15.2929L17.25 9.75C17.6642 9.33579 17.6642 8.66421 17.25 8.25C16.8358 7.83579 16.1642 7.83579 15.75 8.25L11.5657 12.4343C11.2533 12.7467 10.7467 12.7467 10.4343 12.4343Z" fill="currentColor" />
                                                        </svg>
                                                    </span>
                                                    <!--end::Svg Icon-->
                                                </div>
                                                <!--end::Item-->
                                                <!--begin::Item-->
                                                <div class="d-flex flex-stack mb-5">
                                                    <span class="fw-semibold fs-6 text-gray-800 text-start pe-3">Targets Timelines & Files</span>
                                                    <!--begin::Svg Icon | path: icons/duotune/general/gen043.svg-->
                                                    <span class="svg-icon svg-icon-1 svg-icon-success">
                                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10" fill="currentColor" />
                                                            <path d="M10.4343 12.4343L8.75 10.75C8.33579 10.3358 7.66421 10.3358 7.25 10.75C6.83579 11.1642 6.83579 11.8358 7.25 12.25L10.2929 15.2929C10.6834 15.6834 11.3166 15.6834 11.7071 15.2929L17.25 9.75C17.6642 9.33579 17.6642 8.66421 17.25 8.25C16.8358 7.83579 16.1642 7.83579 15.75 8.25L11.5657 12.4343C11.2533 12.7467 10.7467 12.7467 10.4343 12.4343Z" fill="currentColor" />
                                                        </svg>
                                                    </span>
                                                    <!--end::Svg Icon-->
                                                </div>
                                                <!--end::Item-->
                                                <!--begin::Item-->
                                                <div class="d-flex flex-stack">
                                                    <span class="fw-semibold fs-6 text-gray-800 text-start pe-3">Unlimited Projects</span>
                                                    <!--begin::Svg Icon | path: icons/duotune/general/gen043.svg-->
                                                    <span class="svg-icon svg-icon-1 svg-icon-success">
                                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10" fill="currentColor" />
                                                            <path d="M10.4343 12.4343L8.75 10.75C8.33579 10.3358 7.66421 10.3358 7.25 10.75C6.83579 11.1642 6.83579 11.8358 7.25 12.25L10.2929 15.2929C10.6834 15.6834 11.3166 15.6834 11.7071 15.2929L17.25 9.75C17.6642 9.33579 17.6642 8.66421 17.25 8.25C16.8358 7.83579 16.1642 7.83579 15.75 8.25L11.5657 12.4343C11.2533 12.7467 10.7467 12.7467 10.4343 12.4343Z" fill="currentColor" />
                                                        </svg>
                                                    </span>
                                                    <!--end::Svg Icon-->
                                                </div>
                                                <!--end::Item-->
                                            </div>
                                            <!--end::Features-->
                                            <!--begin::Select-->
                                            <a href="#" class="btn btn-primary">Select</a>
                                            <!--end::Select-->
                                        </div>
                                        <!--end::Option-->
                                    </div>
                                </div>
                                <!--end::Col-->
                            </div>
                            <!--end::Row-->
                        </div>
                        <!--end::Pricing-->
                    </div>
                    <!--end::Plans-->
                </div>
                <!--end::Container-->
            </div>

        </div>

        <div class="mt-20 mb-n20 position-relative z-index-2">
            <div class="container">
                <div class="text-center mb-17">
                    <h3 class="fs-2hx text-dark mb-5" id="clients" data-kt-scroll-offset="{default: 125, lg: 150}">What Our Clients Say</h3>

                    <div class="fs-5 text-muted fw-bold">Save thousands to millions of bucks by using single tool
                        <br />for different amazing and great useful admin
                    </div>
                </div>

                <div class="row g-lg-10 mb-10 mb-lg-20">
                    <div class="col-lg-4">
                        <div class="d-flex flex-column justify-content-between h-lg-100 px-10 px-lg-0 pe-lg-10 mb-15 mb-lg-0">
                            <div class="mb-7">
                                <div class="rating mb-6">
                                    <div class="rating-label me-2 checked">
                                        <i class="bi bi-star-fill fs-5"></i>
                                    </div>
                                    <div class="rating-label me-2 checked">
                                        <i class="bi bi-star-fill fs-5"></i>
                                    </div>
                                    <div class="rating-label me-2 checked">
                                        <i class="bi bi-star-fill fs-5"></i>
                                    </div>
                                    <div class="rating-label me-2 checked">
                                        <i class="bi bi-star-fill fs-5"></i>
                                    </div>
                                    <div class="rating-label me-2 checked">
                                        <i class="bi bi-star-fill fs-5"></i>
                                    </div>
                                </div>

                                <div class="fs-2 fw-bold text-dark mb-3">This is by far the cleanest template
                                    <br />and the most well structured
                                </div>

                                <div class="text-gray-500 fw-semibold fs-4">The most well thought out design theme I have ever used. The codes are up to tandard. The css styles are very clean. In fact the cleanest and the most up to standard I have ever seen.</div>
                            </div>
                            <div class="d-flex align-items-center">

                                <div class="symbol symbol-circle symbol-50px me-5">
                                    <img src="assets/media/avatars/300-1.jpg" class="" alt="" />
                                </div>
                                <div class="flex-grow-1">
                                    <a href="#" class="text-dark fw-bold text-hover-primary fs-6">Paul Miles</a>
                                    <span class="text-muted d-block fw-bold">Development Lead</span>
                                </div>
                            </div>
                        </div>
                        <!--end::Testimonial-->
                    </div>
                    <!--end::Col-->
                    <!--begin::Col-->
                    <div class="col-lg-4">
                        <!--begin::Testimonial-->
                        <div class="d-flex flex-column justify-content-between h-lg-100 px-10 px-lg-0 pe-lg-10 mb-15 mb-lg-0">
                            <!--begin::Wrapper-->
                            <div class="mb-7">
                                <!--begin::Rating-->
                                <div class="rating mb-6">
                                    <div class="rating-label me-2 checked">
                                        <i class="bi bi-star-fill fs-5"></i>
                                    </div>
                                    <div class="rating-label me-2 checked">
                                        <i class="bi bi-star-fill fs-5"></i>
                                    </div>
                                    <div class="rating-label me-2 checked">
                                        <i class="bi bi-star-fill fs-5"></i>
                                    </div>
                                    <div class="rating-label me-2 checked">
                                        <i class="bi bi-star-fill fs-5"></i>
                                    </div>
                                    <div class="rating-label me-2 checked">
                                        <i class="bi bi-star-fill fs-5"></i>
                                    </div>
                                </div>
                                <!--end::Rating-->
                                <!--begin::Title-->
                                <div class="fs-2 fw-bold text-dark mb-3">This is by far the cleanest template
                                    <br />and the most well structured
                                </div>
                                <!--end::Title-->
                                <!--begin::Feedback-->
                                <div class="text-gray-500 fw-semibold fs-4">The most well thought out design theme I have ever used. The codes are up to tandard. The css styles are very clean. In fact the cleanest and the most up to standard I have ever seen.</div>
                                <!--end::Feedback-->
                            </div>
                            <!--end::Wrapper-->
                            <!--begin::Author-->
                            <div class="d-flex align-items-center">
                                <!--begin::Avatar-->
                                <div class="symbol symbol-circle symbol-50px me-5">
                                    <img src="assets/media/avatars/300-2.jpg" class="" alt="" />
                                </div>
                                <!--end::Avatar-->
                                <!--begin::Name-->
                                <div class="flex-grow-1">
                                    <a href="#" class="text-dark fw-bold text-hover-primary fs-6">Janya Clebert</a>
                                    <span class="text-muted d-block fw-bold">Development Lead</span>
                                </div>
                                <!--end::Name-->
                            </div>
                            <!--end::Author-->
                        </div>
                        <!--end::Testimonial-->
                    </div>

                    <div class="col-lg-4">
                        <div class="d-flex flex-column justify-content-between h-lg-100 px-10 px-lg-0 pe-lg-10 mb-15 mb-lg-0">
                            <div class="mb-7">
                                <div class="rating mb-6">
                                    <div class="rating-label me-2 checked">
                                        <i class="bi bi-star-fill fs-5"></i>
                                    </div>
                                    <div class="rating-label me-2 checked">
                                        <i class="bi bi-star-fill fs-5"></i>
                                    </div>
                                    <div class="rating-label me-2 checked">
                                        <i class="bi bi-star-fill fs-5"></i>
                                    </div>
                                    <div class="rating-label me-2 checked">
                                        <i class="bi bi-star-fill fs-5"></i>
                                    </div>
                                    <div class="rating-label me-2 checked">
                                        <i class="bi bi-star-fill fs-5"></i>
                                    </div>
                                </div>

                                <div class="fs-2 fw-bold text-dark mb-3">This is by far the cleanest template
                                    <br />and the most well structured
                                </div>
                                <div class="text-gray-500 fw-semibold fs-4">The most well thought out design theme I have ever used. The codes are up to tandard. The css styles are very clean. In fact the cleanest and the most up to standard I have ever seen.</div>
                            </div>

                            <div class="d-flex align-items-center">
                                <div class="symbol symbol-circle symbol-50px me-5">
                                    <img src="assets/media/avatars/300-16.jpg" class="" alt="" />
                                </div>

                                <div class="flex-grow-1">
                                    <a href="#" class="text-dark fw-bold text-hover-primary fs-6">Steave Brown</a>
                                    <span class="text-muted d-block fw-bold">Development Lead</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="d-flex flex-stack flex-wrap flex-md-nowrap card-rounded shadow p-8 p-lg-12 mb-n5 mb-lg-n13" style="background: linear-gradient(90deg, #20AA3E 0%, #03A588 100%);">
                    <div class="my-2 me-5">
                        <div class="fs-1 fs-lg-2qx fw-bold text-white mb-2">Start With Metronic Today,
                            <span class="fw-normal">Speed Up Development!</span>
                        </div>
                        <div class="fs-6 fs-lg-5 text-white fw-semibold opacity-75">Join over 100,000 Professionals Community to Stay Ahead</div>
                    </div>
                    <a href="https://1.envato.market/EA4JP" class="btn btn-lg btn-outline border-2 btn-outline-white flex-shrink-0 my-2">Purchase on Themeforest</a>
                </div>
            </div>
        </div>

        <div class="mb-0">

            <div class="landing-dark-bg pt-20">
                <div class="container">
                    <div class="row py-10 py-lg-20">
                        <div class="col-lg-6 pe-lg-16 mb-10 mb-lg-0">
                            <div class="rounded landing-dark-border p-9 mb-10">
                                <h2 class="text-white">Would you need a Custom License?</h2>
                                <span class="fw-normal fs-4 text-gray-700">Email us to
                                    <a href="https://keenthemes.com/support" class="text-white opacity-50 text-hover-primary">support@keenthemes.com</a></span>
                            </div>

                            <div class="rounded landing-dark-border p-9">
                                <h2 class="text-white">How About a Custom Project?</h2>
                                <span class="fw-normal fs-4 text-gray-700">Use Our Custom Development Service.
                                    <a href="../../demo5/dist/pages/user-profile/overview.html" class="text-white opacity-50 text-hover-primary">Click to Get a Quote</a></span>
                            </div>
                        </div>

                        <div class="col-lg-6 ps-lg-16">
                            <div class="d-flex justify-content-center">
                                <div class="d-flex fw-semibold flex-column me-20">
                                    <h4 class="fw-bold text-gray-400 mb-6">More for Metronic</h4>
                                    <a href="https://keenthemes.com/faqs" class="text-white opacity-50 text-hover-primary fs-5 mb-6">FAQ</a>

                                    <a href="https://preview.keenthemes.com/html/metronic/docs" class="text-white opacity-50 text-hover-primary fs-5 mb-6">Documentaions</a>

                                    <a href="https://www.youtube.com/c/KeenThemesTuts/videos" class="text-white opacity-50 text-hover-primary fs-5 mb-6">Video Tuts</a>

                                    <a href="https://preview.keenthemes.com/html/metronic/docs/getting-started/changelog" class="text-white opacity-50 text-hover-primary fs-5 mb-6">Changelog</a>

                                    <a href="https://devs.keenthemes.com/" class="text-white opacity-50 text-hover-primary fs-5 mb-6">Support Forum</a>

                                    <a href="https://keenthemes.com/blog" class="text-white opacity-50 text-hover-primary fs-5">Blog</a>
                                </div>

                                <div class="d-flex fw-semibold flex-column ms-lg-20">
                                    <h4 class="fw-bold text-gray-400 mb-6">Stay Connected</h4>
                                    <a href="#" class="mb-6">
                                        <img src="{{ asset('assets/media/svg/brand-logos/facebook-4.svg') }}" class="h-20px me-2" alt="" />
                                        <span class="text-white opacity-50 text-hover-primary fs-5 mb-6">Facebook</span>
                                    </a>

                                    <a href="#" class="mb-6">
                                        <img src="{{ asset('assets/media/svg/brand-logos/twitter.svg') }}" class="h-20px me-2" alt="" />
                                        <span class="text-white opacity-50 text-hover-primary fs-5 mb-6">Twitter</span>
                                    </a>

                                    <a href="#" class="mb-6">
                                        <img src="{{ asset('assets/media/svg/brand-logos/instagram-2-1.svg') }}" class="h-20px me-2" alt="" />
                                        <span class="text-white opacity-50 text-hover-primary fs-5 mb-6">Instagram</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="landing-dark-separator"></div>

                @include('layouts.footer')
            </div>
        </div>

        <div id="kt_scrolltop" class="scrolltop" data-kt-scrolltop="true">
            <span class="svg-icon">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <rect opacity="0.5" x="13" y="6" width="13" height="2" rx="1" transform="rotate(90 13 6)" fill="currentColor" />
                    <path d="M12.5657 8.56569L16.75 12.75C17.1642 13.1642 17.8358 13.1642 18.25 12.75C18.6642 12.3358 18.6642 11.6642 18.25 11.25L12.7071 5.70711C12.3166 5.31658 11.6834 5.31658 11.2929 5.70711L5.75 11.25C5.33579 11.6642 5.33579 12.3358 5.75 12.75C6.16421 13.1642 6.83579 13.1642 7.25 12.75L11.4343 8.56569C11.7467 8.25327 12.2533 8.25327 12.5657 8.56569Z" fill="currentColor" />
                </svg>
            </span>
        </div>
    </div>

    <div id="kt_scrolltop" class="scrolltop" data-kt-scrolltop="true">
        <span class="svg-icon">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <rect opacity="0.5" x="13" y="6" width="13" height="2" rx="1" transform="rotate(90 13 6)" fill="currentColor" />
                <path d="M12.5657 8.56569L16.75 12.75C17.1642 13.1642 17.8358 13.1642 18.25 12.75C18.6642 12.3358 18.6642 11.6642 18.25 11.25L12.7071 5.70711C12.3166 5.31658 11.6834 5.31658 11.2929 5.70711L5.75 11.25C5.33579 11.6642 5.33579 12.3358 5.75 12.75C6.16421 13.1642 6.83579 13.1642 7.25 12.75L11.4343 8.56569C11.7467 8.25327 12.2533 8.25327 12.5657 8.56569Z" fill="currentColor" />
            </svg>
        </span>
    </div>

    @include('layouts.script')

</body>

</html>