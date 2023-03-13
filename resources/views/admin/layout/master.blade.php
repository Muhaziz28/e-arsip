<!DOCTYPE html>

<html lang="en">

<head>
    <base href="" />
    <title>Metronic - the world's #1 selling Bootstrap Admin Theme Ecosystem for HTML, Vue, React, Angular & Laravel by Keenthemes</title>
    <meta charset="utf-8" />

    <link rel="shortcut icon" href="{{ asset('assets/media/logos/favicon.ico')}}" />

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter:300,400,500,600,700" />

    <link href="{{ asset('assets/plugins/custom/fullcalendar/fullcalendar.bundle.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/plugins/custom/datatables/datatables.bundle.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/plugins/global/plugins.bundle.css') }}" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="{{ asset('assets/plugins/custom/prismjs/prismjs.bundle.css') }}">
    <link href="{{ asset('assets/css/style.bundle.css') }}" rel="stylesheet" type="text/css" />

    @stack('css')
</head>

<body id="kt_body" class="header-fixed header-tablet-and-mobile-fixed aside-enabled sidebar-enabled">

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
        <div class="page d-flex flex-column flex-column-fluid">
            @include('admin.layout.header')

            <div id="kt_content_container" class="d-flex flex-column-fluid align-items-stretch container-xxl">
                @include('admin.layout.sidebar')

                <div class="wrapper d-flex flex-column flex-row-fluid mt-5 mt-lg-10" id="kt_wrapper">
                    @yield('content')
                    @include('admin.layout.footer')
                </div>
            </div>
        </div>
    </div>

    @include('admin.layout.scrolltop')
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="{{ asset('assets/plugins/global/plugins.bundle.js') }}"></script>
    <script src="{{ asset('assets/js/scripts.bundle.js') }}"></script>

    <script src="{{ asset('assets/plugins/custom/fullcalendar/fullcalendar.bundle.js') }}"></script>
    <script src="{{ asset('assets/plugins/custom/datatables/datatables.bundle.js') }}"></script>
    <script src="{{ asset('assets/plugins/custom/prismjs/prismjs.bundle.js') }}"></script>
    @stack('js')
    <script src="{{ asset('assets/js/widgets.bundle.js') }}"></script>
    <script src="{{ asset('assets/js/custom/widgets.js') }}"></script>
    <script src="{{ asset('assets/js/custom/apps/chat/chat.js') }}"></script>
    <script src="{{ asset('assets/js/custom/utilities/modals/upgrade-plan.js') }}"></script>
    <script src="{{ asset('assets/js/custom/utilities/modals/users-search.js') }}"></script>
</body>

</html>