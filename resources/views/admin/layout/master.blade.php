<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="shortcut icon" href="{{ asset('assets/img/icons/icon-48x48.png') }}" />

    <link rel="canonical" href="https://demo-basic.adminkit.io/" />

    <title>{{ $title }}</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&display=swap" rel="stylesheet">

    @stack('css')
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link href="{{ asset('assets/css/app.css') }}" rel="stylesheet">

    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>


    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script> -->
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.20/dist/summernote-lite.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.20/dist/summernote-lite.min.js"></script>

    <style>
        .summernote.dir-rtl+.note-editor .note-editing-area {
            direction: rtl !important;
        }

        .note-editor .dropdown-toggle::after {
            all: unset;
        }

        .note-editor .note-dropdown-menu {
            box-sizing: content-box;
        }

        .note-editor .note-modal-footer {
            box-sizing: content-box;
        }

        /* Target Inner elements like this. Avoid adding classes. */
        .summernote-content ul li {
            color: red;
        }

        .summernote-content ul li::marker {
            color: red;
            font-size: 20px;
            font-weight: bold;
        }
    </style>
</head>

<body>
    <div class="wrapper">
        @include('admin.layout.sidebar')

        <div class="main">
            @include('admin.layout.navbar')

            @yield('content')

            @include('admin.layout.footer')
        </div>
    </div>

    <script src="{{ asset('assets/js/app.js') }}"></script>


    @stack('js')

</body>

</html>