<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Dinas Arsip dan Perpustakaan</title>
    <meta name="description" content="Dinas Arsip dan Perpustakaan Kota Padang">

    @vite('resources/css/app.css')
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.8.0/dist/alpine.min.js" defer=""></script>
    <script src="https://kit.fontawesome.com/aeb56c9891.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tw-elements/dist/css/index.min.css" />
    <script src="https://cdn.tailwindcss.com/3.2.4"></script>
    @include('layouts.style')
</head>

<body>
    <section class="h-full w-full border-box transition-all duration-500 linear" x-data="{ dropdownOpen2: true }">
        @include('layouts.navbar')
    </section>

    <div class="flex flex-row flex-wrap">
        @yield('content')

        <div class="flex-shrink max-w-full w-full lg:w-1/3 lg:pl-8 lg:pb-8 order-first lg:order-last">
            <div class="w-full h-full">
                <div class="text-sm py-6 sticky">
                    <div class="w-full">
                        <h2 class="text-gray-800 text-2xl font-bold">
                            <span class="inline-block h-5 border-l-3 border-red-600 mr-2"></span>
                            Berita Terbaru
                        </h2>
                        @if ($berita_terbaru->count() > 0)
                        @foreach ($berita_terbaru as $b)
                        <ul>
                            <li class="flex flex-row items-center py-3 border-b border-gray-100 card rounded">
                                <?php
                                $dom = new \DomDocument();
                                @$dom->loadHtml($b->isi_berita, LIBXML_HTML_NOIMPLIED | LIBXML_HTML_NODEFDTD);
                                if ($dom->getElementsByTagName('img')->length > 0) {
                                    $images = $dom->getElementsByTagName('img');
                                    $img = $images->item(0);
                                    $src = $img->getAttribute('src');
                                } else {
                                    $src = str_replace('"', '', asset('logo.png'));
                                }
                                ?>

                                <img src="{{ $src }}" alt="alt title" class="float-left ml-3 rounded-lg" style="height: 80px; width: 80px">

                                <div class="flex flex-col items-start">
                                    <a class="text-md font-bold px-6 flex flex-row items-center" href="">
                                        {{ Str::limit($b->judul_berita, 80) }}
                                    </a>
                                    <div class="row px-6 flex flex-row items-center pt-3">
                                        <div class="flex flex-row items-center">
                                            <i class="fa fa-calendar text-gray-500 mr-2"></i>
                                            <span class="text-gray-500 text-xs">{{ $b->created_at }}</span>
                                        </div>
                                        <div class="flex flex-row items-center">
                                            <span class="text-xs text-gray-500 mx-2">|</span>
                                            <span class="text-xs text-gray-500">2 days ago</span>
                                        </div>
                                    </div>

                                </div>
                            </li>
                        </ul>
                        @endforeach
                        @else
                        <div class="border-b border-gray-100 hover:bg-gray-50 py-3">
                            <p class="text-center">Belum ada berita</p>
                        </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('layouts.footer')
    <script src="{{ asset('src/vendors/hc-sticky/dist/hc-sticky.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/tw-elements/dist/js/index.min.js"></script>

</body>

</html>