<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Dinas Arsip dan Perpustakaan</title>
    <meta name="description" content="Dinas Arsip dan Perpustakaan Kota Padang">

    <link rel="stylesheet" href="{{ asset('src/css/style.css') }}">

    <!-- Production css -->
    <!-- <link rel="stylesheet" href="dist/css/style.css"> -->

    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;600;700&amp;display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/aeb56c9891.js" crossorigin="anonymous"></script>
    <link rel="icon" href="{{ asset('src/img/favicon.jpg') }}">
</head>

<body class="text-gray-700 pt-9 sm:pt-10">
    <!-- ========== { HEADER }==========  -->
    <header class="fixed top-0 left-0 right-0 z-50">
        <nav class="bg-black">
            <div class="xl:container mx-auto px-3 sm:px-4 xl:px-2">
                <div class="flex justify-between">
                    <div class="flex items-center">
                        <img src="{{ asset('logo.png') }}" alt="logo" class="h-5">
                        <p class="text-white font-bold ml-2">Dinas Arsip dan Perpustakaan Kota Padang</p>
                    </div>

                    <div class="flex flex-row">
                        <!-- nav menu -->
                        <ul class="navbar hidden lg:flex lg:flex-row text-gray-400 text-sm items-center font-bold">
                            <li class="{{ Route::is('beranda') ? 'active' : '' }} relative border-l border-gray-800 hover:bg-gray-900">
                                <a class="block py-3 px-6 border-b-2 border-transparent" href="{{ route('beranda') }}">Beranda</a>
                            </li>
                            <li class=" relative border-l border-gray-800 hover:bg-gray-900">
                                <a class="block py-3 px-6 border-b-2 border-transparent" href="#">Profile</a>
                            </li>
                            <li class=" relative border-l border-gray-800 hover:bg-gray-900">
                                <a class="block py-3 px-6 border-b-2 border-transparent" href="#">Publikasi</a>
                            </li>
                            <li class="dropdown relative border-l border-gray-800 hover:bg-gray-900">
                                <a class="block py-3 px-6 border-b-2 border-transparent" href="#">Perpustakaan</a>

                                <ul class="dropdown-menu font-normal absolute left-0 right-auto top-full z-50 border-b-0 text-left bg-white text-gray-700 border border-gray-100" style="min-width: 12rem;">
                                    <li class="relative hover:bg-gray-50">
                                        <a class="block py-2 px-6 border-b border-gray-100" href="#">
                                            Profile
                                        </a>
                                    </li>
                                    <li class="relative hover:bg-gray-50">
                                        <a class="block py-2 px-6 border-b border-gray-100" href="#">
                                            Informasi
                                        </a>
                                    </li>
                                    <li class="relative hover:bg-gray-50">
                                        <a class="block py-2 px-6 border-b border-gray-100" href="#">
                                            Galeri Kegiatan
                                        </a>
                                    </li>
                                    <li class="relative hover:bg-gray-50">
                                        <a class="block py-2 px-6 border-b border-gray-100" href="#">
                                            Pencarian Buku
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="dropdown relative border-l border-gray-800 hover:bg-gray-900">
                                <a class="block py-3 px-6 border-b-2 border-transparent" href="#">Arsip</a>

                                <ul class="dropdown-menu font-normal absolute left-0 right-auto top-full z-50 border-b-0 text-left bg-white text-gray-700 border border-gray-100" style="min-width: 12rem;">
                                    <li class="relative hover:bg-gray-50">
                                        <a class="block py-2 px-6 border-b border-gray-100" href="#">
                                            Deskripsi
                                        </a>
                                    </li>
                                    <li class="subdropdown relative hover:bg-gray-50">
                                        <a class="block py-2 px-6 border-b border-gray-100" href="#">
                                            Pages
                                        </a>

                                        <!--dropdown submenu-->
                                        <ul class="dropdown-menu absolute left-full right-auto transform top-full z-50 border-b-0 text-left -mt-10 ml-0 mr-0 bg-white border border-gray-100" style="min-width: 12rem;">
                                            <li class="relative hover:bg-gray-50"><a class="block py-2 px-6 border-b border-gray-100" href="404.html">404</a></li>
                                            <li class="relative hover:bg-gray-50"><a class="block py-2 px-6 border-b border-gray-100" href="author.html">Author</a></li>
                                            <li class="relative hover:bg-gray-50"><a class="block py-2 px-6 border-b border-gray-100" href="category.html">Category</a></li>
                                            <li class="relative hover:bg-gray-50"><a class="block py-2 px-6 border-b border-gray-100" href="search.html">Search</a></li>
                                            <li class="relative hover:bg-gray-50"><a class="block py-2 px-6 border-b border-gray-100" href="page.html">Page</a></li>
                                            <li class="relative hover:bg-gray-50"><a class="block py-2 px-6 border-b border-gray-100" href="contact-us.html">Contact</a></li>
                                        </ul>
                                    </li>
                                    <li class="subdropdown relative hover:bg-gray-50">
                                        <a class="block py-2 px-6 border-b border-gray-100" href="#">
                                            Post
                                        </a>

                                        <!--dropdown submenu-->
                                        <ul class="dropdown-menu absolute left-full right-auto transform top-full z-50 border-b-0 text-left -mt-10 ml-0 mr-0 bg-white border border-gray-100" style="min-width: 12rem;">
                                            <li class="relative hover:bg-gray-50"><a class="block py-2 px-6 border-b border-gray-100" href="single.html">Post default</a></li>
                                            <li class="relative hover:bg-gray-50"><a class="block py-2 px-6 border-b border-gray-100" href="single-2.html">Post fullwidth</a></li>
                                        </ul>
                                    </li>

                                    <li class="subdropdown relative hover:bg-gray-50">
                                        <a class="block py-2 px-6 border-b border-gray-100" href="#">
                                            Documentation
                                        </a>

                                        <!--dropdown submenu-->
                                        <ul class="dropdown-menu absolute left-full right-auto transform top-full z-50 border-b-0 text-left -mt-10 ml-0 mr-0 bg-white border border-gray-100" style="min-width: 12rem;">
                                            <li class="relative hover:bg-gray-50"><a class="block py-2 px-6 border-b border-gray-100" href="docs/index.html">Get started</a></li>
                                            <li class="relative hover:bg-gray-50"><a class="block py-2 px-6 border-b border-gray-100" href="docs/components.html">Components</a></li>
                                            <li class="relative hover:bg-gray-50"><a class="block py-2 px-6 border-b border-gray-100" href="docs/credits.html">Credits</a></li>
                                            <li class="relative hover:bg-gray-50"><a class="block py-2 px-6 border-b border-gray-100" href="docs/changelogs.html">Changelogs</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li class="relative border-l border-gray-800 hover:bg-gray-900">
                                <a class="block py-3 px-6 border-b-2 border-transparent" href="#">More</a>
                            </li>
                        </ul>

                        <!-- search form & mobile nav -->
                        <div class="flex flex-row items-center text-gray-300">
                            <div class="search-dropdown relative border-r lg:border-l border-gray-800 hover:bg-gray-900">
                                <button class="block py-3 px-6 border-b-2 border-transparent">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="open bi bi-search" viewBox="0 0 16 16">
                                        <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"></path>
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="close bi bi-x-lg" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd" d="M13.854 2.146a.5.5 0 0 1 0 .708l-11 11a.5.5 0 0 1-.708-.708l11-11a.5.5 0 0 1 .708 0Z" />
                                        <path fill-rule="evenodd" d="M2.146 2.146a.5.5 0 0 0 0 .708l11 11a.5.5 0 0 0 .708-.708l-11-11a.5.5 0 0 0-.708 0Z" />
                                    </svg>
                                </button>
                                <div class="dropdown-menu absolute left-auto right-0 top-full z-50 text-left bg-white text-gray-700 border border-gray-100 mt-1 p-3" style="min-width: 15rem;">
                                    <div class="flex flex-wrap items-stretch w-full relative">
                                        <input type="text" class="flex-shrink flex-grow flex-shrink max-w-full leading-5 w-px flex-1 relative py-2 px-5 text-gray-800 bg-white border border-gray-300 overflow-x-auto focus:outline-none focus:border-gray-400 focus:ring-0 dark:text-gray-400 dark:bg-gray-700 dark:border-gray-700 dark:focus:border-gray-600" name="text" placeholder="Search..." aria-label="search">
                                        <div class="flex -mr-px">
                                            <button class="flex items-center py-2 px-5 -ml-1 leading-5 text-gray-100 bg-black hover:text-white hover:bg-gray-900 hover:ring-0 focus:outline-none focus:ring-0" type="submit">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                                                    <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"></path>
                                                </svg>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="relative hover:bg-gray-800 block lg:hidden">
                                <button type="button" class="menu-mobile block py-3 px-6 border-b-2 border-transparent">
                                    <span class="sr-only">Mobile menu</span>
                                    <svg class="inline-block h-6 w-6 mr-2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                                    </svg> Menu
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
    </header>

    <div class="side-area fixed w-full h-full inset-0 z-50">
        <!-- bg open -->
        <div class="back-menu fixed bg-gray-900 bg-opacity-70 w-full h-full inset-x-0 top-0">
            <div class="cursor-pointer text-white absolute right-64 p-2">
                <svg class="bi bi-x" width="2rem" height="2rem" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M11.854 4.146a.5.5 0 010 .708l-7 7a.5.5 0 01-.708-.708l7-7a.5.5 0 01.708 0z" clip-rule="evenodd"></path>
                    <path fill-rule="evenodd" d="M4.146 4.146a.5.5 0 000 .708l7 7a.5.5 0 00.708-.708l-7-7a.5.5 0 00-.708 0z" clip-rule="evenodd"></path>
                </svg>
            </div>
        </div>

        <!-- Mobile navbar -->
        <nav id="mobile-nav" class="side-menu flex flex-col right-0 w-64 fixed top-0 bg-white dark:bg-gray-800 h-full overflow-auto z-40">
            <div class="mb-auto">
                <!--navigation-->
                <nav class="relative flex flex-wrap">
                    <div class="flex items-center">
                        <img src="{{ asset('logo.png') }}" alt="logo" class="h-5">
                        <p class="text-black font-bold ml-2">Dinas Arsip dan Perpustakaan Kota Padang</p>
                    </div>
                    <ul id="side-menu" class="w-full float-none flex flex-col">
                        <li class="relative">
                            <a href="#" class="block py-2 px-5 border-b border-gray-100 hover:bg-gray-50">Home</a>
                        </li>

                        <!-- dropdown with submenu-->
                        <li class="dropdown relative">
                            <a class="block py-2 px-5 border-b border-gray-100 hover:bg-gray-50" href="javascript:;">
                                News
                            </a>

                            <!-- dropdown menu -->
                            <ul class="dropdown-menu block rounded rounded-t-none top-full z-50 ml-4 py-0.5 text-left bg-white dark:bg-gray-800 mb-4" style="min-width: 12rem">
                                <!--submenu-->
                                <li class="subdropdown relative">
                                    <a class="block w-full py-2 px-5 border-b border-gray-100 hover:bg-gray-50" href="javascript:;">
                                        Dropdown item
                                    </a>

                                    <!--dropdown submenu-->
                                    <ul class="dropdown-menu block rounded rounded-t-none top-full z-50 ml-4 py-0.5 text-left bg-white dark:bg-gray-800" style="min-width: 12rem">
                                        <li><a class="block w-full py-2 px-5 border-b border-gray-100 hover:bg-gray-50" href="#">Dropdown sub item</a></li>
                                        <li><a class="block w-full py-2 px-5 border-b border-gray-100 hover:bg-gray-50" href="#">Dropdown sub item</a></li>
                                        <li><a class="block w-full py-2 px-5 border-b border-gray-100 hover:bg-gray-50" href="#">Dropdown sub item</a></li>
                                        <li><a class="block w-full py-2 px-5 border-b border-gray-100 hover:bg-gray-50" href="#">Dropdown sub item</a></li>
                                    </ul>
                                </li><!--end submenu-->
                                <li class="relative"><a class="block w-full py-2 px-5 border-b border-gray-100 hover:bg-gray-50" href="#">Dropdown item</a></li>
                                <li class="relative"><a class="block w-full py-2 px-5 border-b border-gray-100 hover:bg-gray-50" href="#">Dropdown item</a></li>
                            </ul>
                        </li>

                        <li class="relative">
                            <a href="#" class="block py-2 px-5 border-b border-gray-100 hover:bg-gray-50">Sport</a>
                        </li>

                        <li class="relative">
                            <a href="#" class="block py-2 px-5 border-b border-gray-100 hover:bg-gray-50">Travel</a>
                        </li>

                        <li class="relative">
                            <a href="#" class="block py-2 px-5 border-b border-gray-100 hover:bg-gray-50">Techno</a>
                        </li>

                        <li class="relative">
                            <a href="#" class="block py-2 px-5 border-b border-gray-100 hover:bg-gray-50">Worklife</a>
                        </li>

                        <li class="relative">
                            <a href="#" class="block py-2 px-5 border-b border-gray-100 hover:bg-gray-50">Future</a>
                        </li>

                        <li class="relative">
                            <a href="#" class="block py-2 px-5 border-b border-gray-100 hover:bg-gray-50">More</a>
                        </li>
                    </ul>
                </nav>
            </div>
            <!-- copyright -->
            <div class="py-4 px-6 text-sm mt-6 text-center">
                <p>Copyright <a href="#">Tailnews</a> - All right reserved</p>
            </div>
        </nav>
    </div>

    <main id="content">
        <div class="bg-gray-50 py-5 hidden">
            <div class="xl:container mx-auto px-3 sm:px-4 xl:px-2">
                <div class="mx-auto table text-center text-sm">
                    <a class="uppercase" href="#">Berita Terbaru</a>
                    <a href="#">

                    </a>
                </div>
            </div>
        </div>


        <div class="bg-white">
            <div class="xl:container mx-auto px-3 sm:px-4 xl:px-2">
                <div class="flex flex-row flex-wrap">
                    <div class="flex-shrink max-w-full w-full lg:w-2/3 overflow-hidden">
                        <div class="bg-white py-6">
                            <div class="xl:container mx-auto px-3 sm:px-4 xl:px-2">
                                <div class="flex flex-row flex-wrap">
                                    <div class="flex-shrink max-w-full w-full">

                                        @yield('content')
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="w-full py-3">
                            <h2 class="text-gray-800 text-2xl font-bold">
                                <span class="inline-block h-5 border-l-3 border-red-600 mr-2"></span>Agenda
                            </h2>
                        </div>
                        <div class="flex flex-row flex-wrap -mx-3">
                            <div class="flex-shrink max-w-full w-full sm:w-1/3 px-3 pb-3 pt-3 sm:pt-0 border-b-2 sm:border-b-0 border-dotted border-gray-100">
                                <div class="flex flex-row sm:block hover-img">
                                    <a href="">
                                        <img class="max-w-full w-full mx-auto" src="https://imgx.sonora.id/crop/0x0:0x0/700x465/photo/2023/02/07/meme-capybarajpg-20230207091339.jpg" alt="alt title">
                                    </a>
                                    <div class="py-0 sm:py-3 pl-3 sm:pl-0">
                                        <h3 class="text-lg font-bold leading-tight mb-2">
                                            <a href="#">5 Tips to Save Money Booking Your Next Hotel Room</a>
                                        </h3>
                                        <p class="hidden md:block text-gray-600 leading-tight mb-1">This is a wider card with supporting text below as a natural lead-in to additional content.</p>
                                        <a class="text-gray-500" href="#"><span class="inline-block h-3 border-l-2 border-red-600 mr-2"></span>Europe</a>
                                    </div>
                                </div>
                            </div>
                            <div class="flex-shrink max-w-full w-full sm:w-1/3 px-3 pb-3 pt-3 sm:pt-0 border-b-2 sm:border-b-0 border-dotted border-gray-100">
                                <div class="flex flex-row sm:block hover-img">
                                    <a href="">
                                        <img class="max-w-full w-full mx-auto" src="https://imgx.sonora.id/crop/0x0:0x0/700x465/photo/2023/02/07/meme-capybarajpg-20230207091339.jpg" alt="alt title">
                                    </a>
                                    <div class="py-0 sm:py-3 pl-3 sm:pl-0">
                                        <h3 class="text-lg font-bold leading-tight mb-2">
                                            <a href="#">5 Tips to Save Money Booking Your Next Hotel Room</a>
                                        </h3>
                                        <p class="hidden md:block text-gray-600 leading-tight mb-1">This is a wider card with supporting text below as a natural lead-in to additional content.</p>
                                        <a class="text-gray-500" href="#"><span class="inline-block h-3 border-l-2 border-red-600 mr-2"></span>Europe</a>
                                    </div>
                                </div>
                            </div>
                            <div class="flex-shrink max-w-full w-full sm:w-1/3 px-3 pb-3 pt-3 sm:pt-0 border-b-2 sm:border-b-0 border-dotted border-gray-100">
                                <div class="flex flex-row sm:block hover-img">
                                    <a href="">
                                        <img class="max-w-full w-full mx-auto" src="https://imgx.sonora.id/crop/0x0:0x0/700x465/photo/2023/02/07/meme-capybarajpg-20230207091339.jpg" alt="alt title">
                                    </a>
                                    <div class="py-0 sm:py-3 pl-3 sm:pl-0">
                                        <h3 class="text-lg font-bold leading-tight mb-2">
                                            <a href="#">5 Tips to Save Money Booking Your Next Hotel Room</a>
                                        </h3>
                                        <p class="hidden md:block text-gray-600 leading-tight mb-1">This is a wider card with supporting text below as a natural lead-in to additional content.</p>
                                        <a class="text-gray-500" href="#"><span class="inline-block h-3 border-l-2 border-red-600 mr-2"></span>Europe</a>
                                    </div>
                                </div>
                            </div>
                            <div class="flex-shrink max-w-full w-full sm:w-1/3 px-3 pb-3 pt-3 sm:pt-0 border-b-2 sm:border-b-0 border-dotted border-gray-100">
                                <div class="flex flex-row sm:block hover-img">
                                    <a href="">
                                        <img class="max-w-full w-full mx-auto" src="https://imgx.sonora.id/crop/0x0:0x0/700x465/photo/2023/02/07/meme-capybarajpg-20230207091339.jpg" alt="alt title">
                                    </a>
                                    <div class="py-0 sm:py-3 pl-3 sm:pl-0">
                                        <h3 class="text-lg font-bold leading-tight mb-2">
                                            <a href="#">5 Tips to Save Money Booking Your Next Hotel Room</a>
                                        </h3>
                                        <p class="hidden md:block text-gray-600 leading-tight mb-1">This is a wider card with supporting text below as a natural lead-in to additional content.</p>
                                        <a class="text-gray-500" href="#"><span class="inline-block h-3 border-l-2 border-red-600 mr-2"></span>Europe</a>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <!-- right -->
                    @include('layouts.berita_terbaru')
                </div>
            </div>
        </div>

        <!-- slider news -->
        <!-- <div class="relative bg-gray-50" style="background-image: url('src/img/bg.jpg');background-size: cover;background-position: center center;background-attachment: fixed">
            <div class="bg-black bg-opacity-70">
                <div class="xl:container mx-auto px-3 sm:px-4 xl:px-2">
                    <div class="flex flex-row flex-wrap">
                        <div class="flex-shrink max-w-full w-full py-12 overflow-hidden">
                            <div class="w-full py-3">
                                <h2 class="text-white text-2xl font-bold text-shadow-black">
                                    <span class="inline-block h-5 border-l-3 border-red-600 mr-2"></span>American
                                </h2>
                            </div>
                            <div id="post-carousel" class="post-carousel splide">
                                <div class="splide__track">
                                    <ul class="splide__list">
                                        <li class="splide__slide">
                                            <div class="w-full pb-3">
                                                <div class="hover-img bg-white">
                                                    <a href="">
                                                        <img class="max-w-full w-full mx-auto" src="src/img/dummy/img14.jpg" alt="alt title">
                                                    </a>
                                                    <div class="py-3 px-6">
                                                        <h3 class="text-lg font-bold leading-tight mb-2">
                                                            <a href="#">5 Tips to Save Money Booking Your Next Hotel Room</a>
                                                        </h3>
                                                        <a class="text-gray-500" href="#"><span class="inline-block h-3 border-l-2 border-red-600 mr-2"></span>Europe</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="splide__slide">
                                            <div class="w-full pb-3">
                                                <div class="hover-img bg-white">
                                                    <a href="">
                                                        <img class="max-w-full w-full mx-auto" src="src/img/dummy/img15.jpg" alt="alt title">
                                                    </a>
                                                    <div class="py-3 px-6">
                                                        <h3 class="text-lg font-bold leading-tight mb-2">
                                                            <a href="#">5 Tips to Save Money Booking Your Next Hotel Room</a>
                                                        </h3>
                                                        <a class="text-gray-500" href="#"><span class="inline-block h-3 border-l-2 border-red-600 mr-2"></span>Europe</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="splide__slide">
                                            <div class="w-full pb-3">
                                                <div class="hover-img bg-white">
                                                    <a href="">
                                                        <img class="max-w-full w-full mx-auto" src="src/img/dummy/img16.jpg" alt="alt title">
                                                    </a>
                                                    <div class="py-3 px-6">
                                                        <h3 class="text-lg font-bold leading-tight mb-2">
                                                            <a href="#">5 Tips to Save Money Booking Your Next Hotel Room</a>
                                                        </h3>
                                                        <a class="text-gray-500" href="#"><span class="inline-block h-3 border-l-2 border-red-600 mr-2"></span>Europe</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="splide__slide">
                                            <div class="w-full pb-3">
                                                <div class="hover-img bg-white">
                                                    <a href="">
                                                        <img class="max-w-full w-full mx-auto" src="src/img/dummy/img17.jpg" alt="alt title">
                                                    </a>
                                                    <div class="py-3 px-6">
                                                        <h3 class="text-lg font-bold leading-tight mb-2">
                                                            <a href="#">5 Tips to Save Money Booking Your Next Hotel Room</a>
                                                        </h3>
                                                        <a class="text-gray-500" href="#"><span class="inline-block h-3 border-l-2 border-red-600 mr-2"></span>Europe</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="splide__slide">
                                            <div class="w-full pb-3">
                                                <div class="hover-img bg-white">
                                                    <a href="">
                                                        <img class="max-w-full w-full mx-auto" src="src/img/dummy/img18.jpg" alt="alt title">
                                                    </a>
                                                    <div class="py-3 px-6">
                                                        <h3 class="text-lg font-bold leading-tight mb-2">
                                                            <a href="#">5 Tips to Save Money Booking Your Next Hotel Room</a>
                                                        </h3>
                                                        <a class="text-gray-500" href="#"><span class="inline-block h-3 border-l-2 border-red-600 mr-2"></span>Europe</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="splide__slide">
                                            <div class="w-full pb-3">
                                                <div class="hover-img bg-white">
                                                    <a href="">
                                                        <img class="max-w-full w-full mx-auto" src="src/img/dummy/img1.jpg" alt="alt title">
                                                    </a>
                                                    <div class="py-3 px-6">
                                                        <h3 class="text-lg font-bold leading-tight mb-2">
                                                            <a href="#">5 Tips to Save Money Booking Your Next Hotel Room</a>
                                                        </h3>
                                                        <a class="text-gray-500" href="#"><span class="inline-block h-3 border-l-2 border-red-600 mr-2"></span>Europe</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> -->

        <!-- block news -->
        <!-- <div class="bg-white py-6">
            <div class="xl:container mx-auto px-3 sm:px-4 xl:px-2">
                <div class="flex flex-row flex-wrap">
                    <div class="flex-shrink max-w-full w-full overflow-hidden">
                        <div class="w-full py-3">
                            <h2 class="text-gray-800 text-2xl font-bold">
                                <span class="inline-block h-5 border-l-3 border-red-600 mr-2"></span>Africa
                            </h2>
                        </div>
                        <div class="flex flex-row flex-wrap -mx-3">
                            <div class="flex-shrink max-w-full w-full sm:w-1/3 lg:w-1/4 px-3 pb-3 pt-3 sm:pt-0 border-b-2 sm:border-b-0 border-dotted border-gray-100">
                                <div class="flex flex-row sm:block hover-img">
                                    <a href="">
                                        <img class="max-w-full w-full mx-auto" src="src/img/dummy/img19.jpg" alt="alt title">
                                    </a>
                                    <div class="py-0 sm:py-3 pl-3 sm:pl-0">
                                        <h3 class="text-lg font-bold leading-tight mb-2">
                                            <a href="#">5 Tips to Save Money Booking Your Next Hotel Room</a>
                                        </h3>
                                        <p class="hidden md:block text-gray-600 leading-tight mb-1">This is a wider card with supporting text below as a natural lead-in to additional content.</p>
                                        <a class="text-gray-500" href="#"><span class="inline-block h-3 border-l-2 border-red-600 mr-2"></span>Europe</a>
                                    </div>
                                </div>
                            </div>
                            <div class="flex-shrink max-w-full w-full sm:w-1/3 lg:w-1/4 px-3 pb-3 pt-3 sm:pt-0 border-b-2 sm:border-b-0 border-dotted border-gray-100">
                                <div class="flex flex-row sm:block hover-img">
                                    <a href="">
                                        <img class="max-w-full w-full mx-auto" src="src/img/dummy/img20.jpg" alt="alt title">
                                    </a>
                                    <div class="py-0 sm:py-3 pl-3 sm:pl-0">
                                        <h3 class="text-lg font-bold leading-tight mb-2">
                                            <a href="#">5 Tips to Save Money Booking Your Next Hotel Room</a>
                                        </h3>
                                        <p class="hidden md:block text-gray-600 leading-tight mb-1">This is a wider card with supporting text below as a natural lead-in to additional content.</p>
                                        <a class="text-gray-500" href="#"><span class="inline-block h-3 border-l-2 border-red-600 mr-2"></span>Europe</a>
                                    </div>
                                </div>
                            </div>
                            <div class="flex-shrink max-w-full w-full sm:w-1/3 lg:w-1/4 px-3 pb-3 pt-3 sm:pt-0 border-b-2 sm:border-b-0 border-dotted border-gray-100">
                                <div class="flex flex-row sm:block hover-img">
                                    <a href="">
                                        <img class="max-w-full w-full mx-auto" src="src/img/dummy/img21.jpg" alt="alt title">
                                    </a>
                                    <div class="py-0 sm:py-3 pl-3 sm:pl-0">
                                        <h3 class="text-lg font-bold leading-tight mb-2">
                                            <a href="#">5 Tips to Save Money Booking Your Next Hotel Room</a>
                                        </h3>
                                        <p class="hidden md:block text-gray-600 leading-tight mb-1">This is a wider card with supporting text below as a natural lead-in to additional content.</p>
                                        <a class="text-gray-500" href="#"><span class="inline-block h-3 border-l-2 border-red-600 mr-2"></span>Europe</a>
                                    </div>
                                </div>
                            </div>
                            <div class="flex-shrink max-w-full w-full sm:w-1/3 lg:w-1/4 px-3 pb-3 pt-3 sm:pt-0 border-b-2 sm:border-b-0 border-dotted border-gray-100">
                                <div class="flex flex-row sm:block hover-img">
                                    <a href="">
                                        <img class="max-w-full w-full mx-auto" src="src/img/dummy/img22.jpg" alt="alt title">
                                    </a>
                                    <div class="py-0 sm:py-3 pl-3 sm:pl-0">
                                        <h3 class="text-lg font-bold leading-tight mb-2">
                                            <a href="#">5 Tips to Save Money Booking Your Next Hotel Room</a>
                                        </h3>
                                        <p class="hidden md:block text-gray-600 leading-tight mb-1">This is a wider card with supporting text below as a natural lead-in to additional content.</p>
                                        <a class="text-gray-500" href="#"><span class="inline-block h-3 border-l-2 border-red-600 mr-2"></span>Europe</a>
                                    </div>
                                </div>
                            </div>
                            <div class="flex-shrink max-w-full w-full sm:w-1/3 lg:w-1/4 px-3 pb-3 pt-3 sm:pt-0 border-b-2 sm:border-b-0 border-dotted border-gray-100">
                                <div class="flex flex-row sm:block hover-img">
                                    <a href="">
                                        <img class="max-w-full w-full mx-auto" src="src/img/dummy/img23.jpg" alt="alt title">
                                    </a>
                                    <div class="py-0 sm:py-3 pl-3 sm:pl-0">
                                        <h3 class="text-lg font-bold leading-tight mb-2">
                                            <a href="#">5 Tips to Save Money Booking Your Next Hotel Room</a>
                                        </h3>
                                        <p class="hidden md:block text-gray-600 leading-tight mb-1">This is a wider card with supporting text below as a natural lead-in to additional content.</p>
                                        <a class="text-gray-500" href="#"><span class="inline-block h-3 border-l-2 border-red-600 mr-2"></span>Europe</a>
                                    </div>
                                </div>
                            </div>
                            <div class="flex-shrink max-w-full w-full sm:w-1/3 lg:w-1/4 px-3 pb-3 pt-3 sm:pt-0 border-b-2 sm:border-b-0 border-dotted border-gray-100">
                                <div class="flex flex-row sm:block hover-img">
                                    <a href="">
                                        <img class="max-w-full w-full mx-auto" src="src/img/dummy/img24.jpg" alt="alt title">
                                    </a>
                                    <div class="py-0 sm:py-3 pl-3 sm:pl-0">
                                        <h3 class="text-lg font-bold leading-tight mb-2">
                                            <a href="#">5 Tips to Save Money Booking Your Next Hotel Room</a>
                                        </h3>
                                        <p class="hidden md:block text-gray-600 leading-tight mb-1">This is a wider card with supporting text below as a natural lead-in to additional content.</p>
                                        <a class="text-gray-500" href="#"><span class="inline-block h-3 border-l-2 border-red-600 mr-2"></span>Europe</a>
                                    </div>
                                </div>
                            </div>
                            <div class="flex-shrink max-w-full w-full sm:w-1/3 lg:w-1/4 px-3 pb-3 pt-3 sm:pt-0 border-b-2 sm:border-b-0 border-dotted border-gray-100">
                                <div class="flex flex-row sm:block hover-img">
                                    <a href="">
                                        <img class="max-w-full w-full mx-auto" src="src/img/dummy/img25.jpg" alt="alt title">
                                    </a>
                                    <div class="py-0 sm:py-3 pl-3 sm:pl-0">
                                        <h3 class="text-lg font-bold leading-tight mb-2">
                                            <a href="#">5 Tips to Save Money Booking Your Next Hotel Room</a>
                                        </h3>
                                        <p class="hidden md:block text-gray-600 leading-tight mb-1">This is a wider card with supporting text below as a natural lead-in to additional content.</p>
                                        <a class="text-gray-500" href="#"><span class="inline-block h-3 border-l-2 border-red-600 mr-2"></span>Europe</a>
                                    </div>
                                </div>
                            </div>
                            <div class="flex-shrink max-w-full w-full sm:w-1/3 lg:w-1/4 px-3 pb-3 pt-3 sm:pt-0 border-b-2 sm:border-b-0 border-dotted border-gray-100">
                                <div class="flex flex-row sm:block hover-img">
                                    <a href="">
                                        <img class="max-w-full w-full mx-auto" src="src/img/dummy/img26.jpg" alt="alt title">
                                    </a>
                                    <div class="py-0 sm:py-3 pl-3 sm:pl-0">
                                        <h3 class="text-lg font-bold leading-tight mb-2">
                                            <a href="#">5 Tips to Save Money Booking Your Next Hotel Room</a>
                                        </h3>
                                        <p class="hidden md:block text-gray-600 leading-tight mb-1">This is a wider card with supporting text below as a natural lead-in to additional content.</p>
                                        <a class="text-gray-500" href="#"><span class="inline-block h-3 border-l-2 border-red-600 mr-2"></span>Europe</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> -->

        <!-- block news -->
        <!-- <div class="bg-gray-50 py-6">
            <div class="xl:container mx-auto px-3 sm:px-4 xl:px-2">
                <div class="flex flex-row flex-wrap">

                    <div class="flex-shrink max-w-full w-full lg:w-2/3  overflow-hidden">
                        <div class="w-full py-3">
                            <h2 class="text-gray-800 text-2xl font-bold">
                                <span class="inline-block h-5 border-l-3 border-red-600 mr-2"></span>Asian
                            </h2>
                        </div>
                        <div class="flex flex-row flex-wrap -mx-3">
                            <div class="flex-shrink max-w-full w-full px-3 pb-5">
                                <div class="relative hover-img max-h-98 overflow-hidden">

                                    <a href="#">
                                        <img class="max-w-full w-full mx-auto h-auto" src="src/img/dummy/img2.jpg" alt="Image description">
                                    </a>
                                    <div class="absolute px-5 pt-8 pb-5 bottom-0 w-full bg-gradient-cover">

                                        <a href="#">
                                            <h2 class="text-3xl font-bold capitalize text-white mb-3">Amazon Shoppers Are Ditching Designer Belts for This Best-Selling</h2>
                                        </a>
                                        <p class="text-gray-100 hidden sm:inline-block">This is a wider card with supporting text below as a natural lead-in to additional content. This very helpfull for generate default content..</p>

                                        <div class="pt-2">
                                            <div class="text-gray-100">
                                                <div class="inline-block h-3 border-l-2 border-red-600 mr-2"></div>Europe
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="flex-shrink max-w-full w-full sm:w-1/3 px-3 pb-3 pt-3 sm:pt-0 border-b-2 sm:border-b-0 border-dotted border-gray-100">
                                <div class="flex flex-row sm:block hover-img">
                                    <a href="">
                                        <img class="max-w-full w-full mx-auto" src="src/img/dummy/img27.jpg" alt="alt title">
                                    </a>
                                    <div class="py-0 sm:py-3 pl-3 sm:pl-0">
                                        <h3 class="text-lg font-bold leading-tight mb-2">
                                            <a href="#">5 Tips to Save Money Booking Your Next Hotel Room</a>
                                        </h3>
                                        <p class="hidden md:block text-gray-600 leading-tight mb-1">This is a wider card with supporting text below as a natural lead-in to additional content.</p>
                                        <a class="text-gray-500" href="#"><span class="inline-block h-3 border-l-2 border-red-600 mr-2"></span>Europe</a>
                                    </div>
                                </div>
                            </div>
                            <div class="flex-shrink max-w-full w-full sm:w-1/3 px-3 pb-3 pt-3 sm:pt-0 border-b-2 sm:border-b-0 border-dotted border-gray-100">
                                <div class="flex flex-row sm:block hover-img">
                                    <a href="">
                                        <img class="max-w-full w-full mx-auto" src="src/img/dummy/img3.jpg" alt="alt title">
                                    </a>
                                    <div class="py-0 sm:py-3 pl-3 sm:pl-0">
                                        <h3 class="text-lg font-bold leading-tight mb-2">
                                            <a href="#">5 Tips to Save Money Booking Your Next Hotel Room</a>
                                        </h3>
                                        <p class="hidden md:block text-gray-600 leading-tight mb-1">This is a wider card with supporting text below as a natural lead-in to additional content.</p>
                                        <a class="text-gray-500" href="#"><span class="inline-block h-3 border-l-2 border-red-600 mr-2"></span>Europe</a>
                                    </div>
                                </div>
                            </div>
                            <div class="flex-shrink max-w-full w-full sm:w-1/3 px-3 pb-3 pt-3 sm:pt-0 border-b-2 sm:border-b-0 border-dotted border-gray-100">
                                <div class="flex flex-row sm:block hover-img">
                                    <a href="">
                                        <img class="max-w-full w-full mx-auto" src="src/img/dummy/img4.jpg" alt="alt title">
                                    </a>
                                    <div class="py-0 sm:py-3 pl-3 sm:pl-0">
                                        <h3 class="text-lg font-bold leading-tight mb-2">
                                            <a href="#">5 Tips to Save Money Booking Your Next Hotel Room</a>
                                        </h3>
                                        <p class="hidden md:block text-gray-600 leading-tight mb-1">This is a wider card with supporting text below as a natural lead-in to additional content.</p>
                                        <a class="text-gray-500" href="#"><span class="inline-block h-3 border-l-2 border-red-600 mr-2"></span>Europe</a>
                                    </div>
                                </div>
                            </div>
                            <div class="flex-shrink max-w-full w-full sm:w-1/3 px-3 pb-3 pt-3 sm:pt-0 border-b-2 sm:border-b-0 border-dotted border-gray-100">
                                <div class="flex flex-row sm:block hover-img">
                                    <a href="">
                                        <img class="max-w-full w-full mx-auto" src="src/img/dummy/img5.jpg" alt="alt title">
                                    </a>
                                    <div class="py-0 sm:py-3 pl-3 sm:pl-0">
                                        <h3 class="text-lg font-bold leading-tight mb-2">
                                            <a href="#">5 Tips to Save Money Booking Your Next Hotel Room</a>
                                        </h3>
                                        <p class="hidden md:block text-gray-600 leading-tight mb-1">This is a wider card with supporting text below as a natural lead-in to additional content.</p>
                                        <a class="text-gray-500" href="#"><span class="inline-block h-3 border-l-2 border-red-600 mr-2"></span>Europe</a>
                                    </div>
                                </div>
                            </div>
                            <div class="flex-shrink max-w-full w-full sm:w-1/3 px-3 pb-3 pt-3 sm:pt-0 border-b-2 sm:border-b-0 border-dotted border-gray-100">
                                <div class="flex flex-row sm:block hover-img">
                                    <a href="">
                                        <img class="max-w-full w-full mx-auto" src="src/img/dummy/img6.jpg" alt="alt title">
                                    </a>
                                    <div class="py-0 sm:py-3 pl-3 sm:pl-0">
                                        <h3 class="text-lg font-bold leading-tight mb-2">
                                            <a href="#">5 Tips to Save Money Booking Your Next Hotel Room</a>
                                        </h3>
                                        <p class="hidden md:block text-gray-600 leading-tight mb-1">This is a wider card with supporting text below as a natural lead-in to additional content.</p>
                                        <a class="text-gray-500" href="#"><span class="inline-block h-3 border-l-2 border-red-600 mr-2"></span>Europe</a>
                                    </div>
                                </div>
                            </div>
                            <div class="flex-shrink max-w-full w-full sm:w-1/3 px-3 pb-3 pt-3 sm:pt-0 border-b-2 sm:border-b-0 border-dotted border-gray-100">
                                <div class="flex flex-row sm:block hover-img">
                                    <a href="">
                                        <img class="max-w-full w-full mx-auto" src="src/img/dummy/img7.jpg" alt="alt title">
                                    </a>
                                    <div class="py-0 sm:py-3 pl-3 sm:pl-0">
                                        <h3 class="text-lg font-bold leading-tight mb-2">
                                            <a href="#">5 Tips to Save Money Booking Your Next Hotel Room</a>
                                        </h3>
                                        <p class="hidden md:block text-gray-600 leading-tight mb-1">This is a wider card with supporting text below as a natural lead-in to additional content.</p>
                                        <a class="text-gray-500" href="#"><span class="inline-block h-3 border-l-2 border-red-600 mr-2"></span>Europe</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="flex-shrink max-w-full w-full lg:w-1/3 lg:pl-8 lg:pt-14 lg:pb-8 order-first lg:order-last">
                        <div class="w-full bg-white">
                            <div class="mb-6">
                                <div class="p-4 bg-gray-100">
                                    <h2 class="text-lg font-bold">Most Popular</h2>
                                </div>
                                <ul class="post-number">
                                    <li class="border-b border-gray-100 hover:bg-gray-50">
                                        <a class="text-lg font-bold px-6 py-3 flex flex-row items-center" href="#">Why the world would end without political polls</a>
                                    </li>
                                    <li class="border-b border-gray-100 hover:bg-gray-50">
                                        <a class="text-lg font-bold px-6 py-3 flex flex-row items-center" href="#">Meet The Man Who Designed The Ducati Monster</a>
                                    </li>
                                    <li class="border-b border-gray-100 hover:bg-gray-50">
                                        <a class="text-lg font-bold px-6 py-3 flex flex-row items-center" href="#">2020 Audi R8 Spyder spy shots release</a>
                                    </li>
                                    <li class="border-b border-gray-100 hover:bg-gray-50">
                                        <a class="text-lg font-bold px-6 py-3 flex flex-row items-center" href="#">Lamborghini makes Huracán GT3 racer faster for 2019</a>
                                    </li>
                                    <li class="border-b border-gray-100 hover:bg-gray-50">
                                        <a class="text-lg font-bold px-6 py-3 flex flex-row items-center" href="#">ZF plans $14 billion autonomous vehicle push, concept van</a>
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <div class="text-sm py-6 sticky">
                            <div class="w-full text-center">
                                <a class="uppercase" href="#">Advertisement</a>
                                <a href="#">
                                    <img class="mx-auto" src="src/img/ads/250.jpg" alt="advertisement area">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> -->

        <!-- block news -->
        <!-- <div class="bg-gray-50 py-6">
            <div class="xl:container mx-auto px-3 sm:px-4 xl:px-2">
                <div class="flex flex-row flex-wrap">

                    <div class="flex-shrink max-w-full w-full lg:w-2/3 overflow-hidden">
                        <div class="w-full py-3">
                            <h2 class="text-gray-800 text-2xl font-bold">
                                <span class="inline-block h-5 border-l-3 border-red-600 mr-2"></span>Latest news
                            </h2>
                        </div>
                        <div class="flex flex-row flex-wrap -mx-3">
                            <div class="flex-shrink max-w-full w-full px-3 pb-5">
                                <div class="relative hover-img max-h-98 overflow-hidden">

                                    <a href="#">
                                        <img class="max-w-full w-full mx-auto h-auto" src="src/img/dummy/img15.jpg" alt="Image description">
                                    </a>
                                    <div class="absolute px-5 pt-8 pb-5 bottom-0 w-full bg-gradient-cover">

                                        <a href="#">
                                            <h2 class="text-3xl font-bold capitalize text-white mb-3">Amazon Shoppers Are Ditching Designer Belts for This Best-Selling</h2>
                                        </a>
                                        <p class="text-gray-100 hidden sm:inline-block">This is a wider card with supporting text below as a natural lead-in to additional content. This very helpfull for generate default content..</p>

                                        <div class="pt-2">
                                            <div class="text-gray-100">
                                                <div class="inline-block h-3 border-l-2 border-red-600 mr-2"></div>Europe
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="flex-shrink max-w-full w-full sm:w-1/3 px-3 pb-3 pt-3 sm:pt-0 border-b-2 sm:border-b-0 border-dotted border-gray-100">
                                <div class="flex flex-row sm:block hover-img">
                                    <a href="">
                                        <img class="max-w-full w-full mx-auto" src="src/img/dummy/img24.jpg" alt="alt title">
                                    </a>
                                    <div class="py-0 sm:py-3 pl-3 sm:pl-0">
                                        <h3 class="text-lg font-bold leading-tight mb-2">
                                            <a href="#">5 Tips to Save Money Booking Your Next Hotel Room</a>
                                        </h3>
                                        <p class="hidden md:block text-gray-600 leading-tight mb-1">This is a wider card with supporting text below as a natural lead-in to additional content.</p>
                                        <a class="text-gray-500" href="#"><span class="inline-block h-3 border-l-2 border-red-600 mr-2"></span>Europe</a>
                                    </div>
                                </div>
                            </div>
                            <div class="flex-shrink max-w-full w-full sm:w-1/3 px-3 pb-3 pt-3 sm:pt-0 border-b-2 sm:border-b-0 border-dotted border-gray-100">
                                <div class="flex flex-row sm:block hover-img">
                                    <a href="">
                                        <img class="max-w-full w-full mx-auto" src="src/img/dummy/img7.jpg" alt="alt title">
                                    </a>
                                    <div class="py-0 sm:py-3 pl-3 sm:pl-0">
                                        <h3 class="text-lg font-bold leading-tight mb-2">
                                            <a href="#">5 Tips to Save Money Booking Your Next Hotel Room</a>
                                        </h3>
                                        <p class="hidden md:block text-gray-600 leading-tight mb-1">This is a wider card with supporting text below as a natural lead-in to additional content.</p>
                                        <a class="text-gray-500" href="#"><span class="inline-block h-3 border-l-2 border-red-600 mr-2"></span>Europe</a>
                                    </div>
                                </div>
                            </div>
                            <div class="flex-shrink max-w-full w-full sm:w-1/3 px-3 pb-3 pt-3 sm:pt-0 border-b-2 sm:border-b-0 border-dotted border-gray-100">
                                <div class="flex flex-row sm:block hover-img">
                                    <a href="">
                                        <img class="max-w-full w-full mx-auto" src="src/img/dummy/img17.jpg" alt="alt title">
                                    </a>
                                    <div class="py-0 sm:py-3 pl-3 sm:pl-0">
                                        <h3 class="text-lg font-bold leading-tight mb-2">
                                            <a href="#">5 Tips to Save Money Booking Your Next Hotel Room</a>
                                        </h3>
                                        <p class="hidden md:block text-gray-600 leading-tight mb-1">This is a wider card with supporting text below as a natural lead-in to additional content.</p>
                                        <a class="text-gray-500" href="#"><span class="inline-block h-3 border-l-2 border-red-600 mr-2"></span>Europe</a>
                                    </div>
                                </div>
                            </div>
                            <div class="flex-shrink max-w-full w-full sm:w-1/3 px-3 pb-3 pt-3 sm:pt-0 border-b-2 sm:border-b-0 border-dotted border-gray-100">
                                <div class="flex flex-row sm:block hover-img">
                                    <a href="">
                                        <img class="max-w-full w-full mx-auto" src="src/img/dummy/img25.jpg" alt="alt title">
                                    </a>
                                    <div class="py-0 sm:py-3 pl-3 sm:pl-0">
                                        <h3 class="text-lg font-bold leading-tight mb-2">
                                            <a href="#">5 Tips to Save Money Booking Your Next Hotel Room</a>
                                        </h3>
                                        <p class="hidden md:block text-gray-600 leading-tight mb-1">This is a wider card with supporting text below as a natural lead-in to additional content.</p>
                                        <a class="text-gray-500" href="#"><span class="inline-block h-3 border-l-2 border-red-600 mr-2"></span>Europe</a>
                                    </div>
                                </div>
                            </div>
                            <div class="flex-shrink max-w-full w-full sm:w-1/3 px-3 pb-3 pt-3 sm:pt-0 border-b-2 sm:border-b-0 border-dotted border-gray-100">
                                <div class="flex flex-row sm:block hover-img">
                                    <a href="">
                                        <img class="max-w-full w-full mx-auto" src="src/img/dummy/img12.jpg" alt="alt title">
                                    </a>
                                    <div class="py-0 sm:py-3 pl-3 sm:pl-0">
                                        <h3 class="text-lg font-bold leading-tight mb-2">
                                            <a href="#">5 Tips to Save Money Booking Your Next Hotel Room</a>
                                        </h3>
                                        <p class="hidden md:block text-gray-600 leading-tight mb-1">This is a wider card with supporting text below as a natural lead-in to additional content.</p>
                                        <a class="text-gray-500" href="#"><span class="inline-block h-3 border-l-2 border-red-600 mr-2"></span>Europe</a>
                                    </div>
                                </div>
                            </div>
                            <div class="flex-shrink max-w-full w-full sm:w-1/3 px-3 pb-3 pt-3 sm:pt-0 border-b-2 sm:border-b-0 border-dotted border-gray-100">
                                <div class="flex flex-row sm:block hover-img">
                                    <a href="">
                                        <img class="max-w-full w-full mx-auto" src="src/img/dummy/img8.jpg" alt="alt title">
                                    </a>
                                    <div class="py-0 sm:py-3 pl-3 sm:pl-0">
                                        <h3 class="text-lg font-bold leading-tight mb-2">
                                            <a href="#">5 Tips to Save Money Booking Your Next Hotel Room</a>
                                        </h3>
                                        <p class="hidden md:block text-gray-600 leading-tight mb-1">This is a wider card with supporting text below as a natural lead-in to additional content.</p>
                                        <a class="text-gray-500" href="#"><span class="inline-block h-3 border-l-2 border-red-600 mr-2"></span>Europe</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="flex-shrink max-w-full w-full lg:w-1/3 lg:pr-8 lg:pt-14 lg:pb-8 order-first">
                        <div class="w-full bg-white">
                            <div class="mb-6">
                                <div class="p-4 bg-gray-100">
                                    <h2 class="text-lg font-bold">Most Popular</h2>
                                </div>
                                <ul class="post-number">
                                    <li class="border-b border-gray-100 hover:bg-gray-50">
                                        <a class="text-lg font-bold px-6 py-3 flex flex-row items-center" href="#">Why the world would end without political polls</a>
                                    </li>
                                    <li class="border-b border-gray-100 hover:bg-gray-50">
                                        <a class="text-lg font-bold px-6 py-3 flex flex-row items-center" href="#">Meet The Man Who Designed The Ducati Monster</a>
                                    </li>
                                    <li class="border-b border-gray-100 hover:bg-gray-50">
                                        <a class="text-lg font-bold px-6 py-3 flex flex-row items-center" href="#">2020 Audi R8 Spyder spy shots release</a>
                                    </li>
                                    <li class="border-b border-gray-100 hover:bg-gray-50">
                                        <a class="text-lg font-bold px-6 py-3 flex flex-row items-center" href="#">Lamborghini makes Huracán GT3 racer faster for 2019</a>
                                    </li>
                                    <li class="border-b border-gray-100 hover:bg-gray-50">
                                        <a class="text-lg font-bold px-6 py-3 flex flex-row items-center" href="#">ZF plans $14 billion autonomous vehicle push, concept van</a>
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <div class="text-sm py-6 sticky">
                            <div class="w-full text-center">
                                <a class="uppercase" href="#">Advertisement</a>
                                <a href="#">
                                    <img class="mx-auto" src="src/img/ads/250.jpg" alt="advertisement area">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> -->

    </main>


    <!-- =========={ FOOTER }==========  -->
    @include('layouts.footer')

    <!-- =========={ SCROLL TO TOP }==========  -->
    <a href="#" class="back-top fixed p-4 rounded bg-gray-100 border border-gray-100 text-gray-500 dark:bg-gray-900 dark:border-gray-800 right-4 bottom-4 hidden" aria-label="Scroll To Top">
        <svg width="1rem" height="1rem" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" d="M8 3.5a.5.5 0 01.5.5v9a.5.5 0 01-1 0V4a.5.5 0 01.5-.5z" clip-rule="evenodd"></path>
            <path fill-rule="evenodd" d="M7.646 2.646a.5.5 0 01.708 0l3 3a.5.5 0 01-.708.708L8 3.707 5.354 6.354a.5.5 0 11-.708-.708l3-3z" clip-rule="evenodd"></path>
        </svg>
    </a>

    <script src="{{ asset('src/vendors/hc-sticky/dist/hc-sticky.js') }}"></script>
    <script src="{{ asset('src/vendors/glightbox/dist/js/glightbox.min.js') }}"></script>
    <script src="{{ asset('src/vendors/@splidejs/splide/dist/js/splide.min.js') }}"></script>
    <script src="{{ asset('src/vendors/@splidejs/splide-extension-video/dist/js/splide-extension-video.min.js') }}"></script>

    <script src="{{ asset('src/js/theme.js') }}"></script>

    <!-- <script src="dist/js/scripts.js"></script> -->
</body>

</html>