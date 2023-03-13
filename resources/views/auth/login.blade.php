<!DOCTYPE html>
<html lang="en">

<head>
    <title>Admin Area | Login</title>
    <meta charset="utf-8" />
    <link rel="shortcut icon" href="{{ asset('assets/media/logos/favicon.ico') }}" />

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter:300,400,500,600,700" />

    <link href="{{ asset('assets/plugins/global/plugins.bundle.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/css/style.bundle.css') }}" rel="stylesheet" type="text/css" />

</head>

<body id="kt_body" class="app-blank">

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
        @php
        if (!$errors->isEmpty()) {
        alert()
        ->error('Pemberitahuan', implode('<br>', $errors->all()))
        ->toToast()
        ->toHtml();
        }
        @endphp
        <div class="d-flex flex-column flex-lg-row flex-column-fluid">
            <div class="d-flex flex-column flex-lg-row-fluid w-lg-50 p-10 order-2 order-lg-1">
                <div class="d-flex flex-center flex-column flex-lg-row-fluid">
                    <div class="w-lg-500px p-10">
                        <form class="form w-100" novalidate="novalidate" action="{{ route('login') }}" method="POST">
                            @csrf
                            <div class="text-center mb-11">
                                <h1 class="text-dark fw-bolder mb-3">Sign In</h1>
                                <div class="text-gray-500 fw-semibold fs-6">Your Social Campaigns</div>
                            </div>

                            <div class="row g-3 mb-9"> </div>
                            <div class="separator separator-content my-14">
                                <span class="w-125px text-gray-500 fw-semibold fs-7">Or with email</span>
                            </div>


                            <div class="fv-row mb-8">
                                <input type="text" placeholder="Email" name="email" autocomplete="off" class="form-control bg-transparent" />
                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>

                            <div class="fv-row mb-3">
                                <input type="password" placeholder="Password" name="password" autocomplete="off" class="form-control bg-transparent" />
                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>

                            <div class="d-flex flex-stack flex-wrap gap-3 fs-base fw-semibold mb-8">
                                <div></div>
                                <a href="../../demo5/dist/authentication/layouts/corporate/reset-password.html" class="link-primary">Forgot Password ?</a>
                            </div>

                            <div class="d-grid mb-10">
                                <button type="submit" class="btn btn-primary">
                                    <span class="indicator-label">Sign In</span>
                                    <span class="indicator-progress">Please wait...
                                        <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                                </button>
                            </div>

                        </form>
                        <!--end::Form-->
                    </div>
                    <!--end::Wrapper-->
                </div>
                <div class="d-flex flex-center flex-wrap px-5">
                    <div class="d-flex fw-semibold text-primary fs-base">
                        <a href="../../demo5/dist/pages/team.html" class="px-5" target="_blank">Terms</a>
                        <a href="../../demo5/dist/pages/pricing/column.html" class="px-5" target="_blank">Plans</a>
                        <a href="../../demo5/dist/pages/contact.html" class="px-5" target="_blank">Contact Us</a>
                    </div>
                </div>
            </div>

            <div class="d-flex flex-lg-row-fluid w-lg-50 bgi-size-cover bgi-position-center order-1 order-lg-2" style="background-image: url(assets/media/misc/auth-bg.png)">
                <div class="d-flex flex-column flex-center py-7 py-lg-15 px-5 px-md-15 w-100">
                    <a href="../../demo5/dist/index.html" class="mb-0 mb-lg-12">
                        <img alt="Logo" src="assets/media/logos/custom-1.png" class="h-60px h-lg-75px" />
                    </a>

                    <img class="d-none d-lg-block mx-auto w-275px w-md-50 w-xl-500px mb-10 mb-lg-20" src="assets/media/misc/auth-screens.png" alt="" />

                    <h1 class="d-none d-lg-block text-white fs-2qx fw-bolder text-center mb-7">Fast, Efficient and Productive</h1>

                    <div class="d-none d-lg-block text-white fs-base text-center">In this kind of post,
                        <a href="#" class="opacity-75-hover text-warning fw-bold me-1">the blogger</a>introduces a person they’ve interviewed
                        <br />and provides some background information about
                        <a href="#" class="opacity-75-hover text-warning fw-bold me-1">the interviewee</a>and their
                        <br />work following this is a transcript of the interview.
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('sweetalert::alert')
    <script src="{{ asset('assets/plugins/global/plugins.bundle.js') }}"></script>
    <script src="{{ asset('assets/js/scripts.bundle.js') }}"></script>

</body>

</html>