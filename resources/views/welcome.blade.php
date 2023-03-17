@extends('layouts.layout')

@section('content')
<div class="w-full py-3">
    <h2 class="text-gray-800 text-2xl font-bold">
        <span class="inline-block h-5 border-l-3 border-red-600 mr-2"></span>News Video
    </h2>
</div>
<div class="bg-gray-800">
    <div id="main-carousel" class="splide">
        <div class="splide__track">
            <ul class="splide__list">
                <li class="splide__slide" data-splide-youtube="https://www.youtube.com/watch?v=0zlZCHxbLng">
                    <img src="https://img.youtube.com/vi/0zlZCHxbLng/maxresdefault.jpg" alt="Video title">
                </li>
                <li class="splide__slide" data-splide-youtube="https://www.youtube.com/watch?v=Y8ACyHYsb6Q">
                    <img src="https://img.youtube.com/vi/Y8ACyHYsb6Q/maxresdefault.jpg" alt="Video title">
                </li>
                <li class="splide__slide" data-splide-youtube="https://www.youtube.com/watch?v=inBQVChango">
                    <img src="https://img.youtube.com/vi/inBQVChango/maxresdefault.jpg" alt="Video title">
                </li>
                <li class="splide__slide" data-splide-youtube="https://www.youtube.com/watch?v=SJkx9EE3isc">
                    <img src="https://img.youtube.com/vi/SJkx9EE3isc/maxresdefault.jpg" alt="Video title">
                </li>
                <li class="splide__slide" data-splide-youtube="https://www.youtube.com/watch?v=lNLeRmnkug8">
                    <img src="https://img.youtube.com/vi/lNLeRmnkug8/maxresdefault.jpg" alt="Video title">
                </li>
                <li class="splide__slide" data-splide-youtube="https://www.youtube.com/watch?v=leQUhKhTW5c">
                    <img src="https://img.youtube.com/vi/leQUhKhTW5c/maxresdefault.jpg" alt="Video title">
                </li>
                <li class="splide__slide" data-splide-youtube="https://www.youtube.com/watch?v=I5WalMD4FLY">
                    <img src="https://img.youtube.com/vi/I5WalMD4FLY/maxresdefault.jpg" alt="Video title">
                </li>
                <li class="splide__slide" data-splide-youtube="https://www.youtube.com/watch?v=X-XZx1o_w-A">
                    <img src="https://img.youtube.com/vi/X-XZx1o_w-A/maxresdefault.jpg" alt="Video title">
                </li>
                <li class="splide__slide" data-splide-youtube="https://www.youtube.com/watch?v=21YxdZAZo1w">
                    <img src="https://img.youtube.com/vi/21YxdZAZo1w/maxresdefault.jpg" alt="Video title">
                </li>
                <li class="splide__slide" data-splide-youtube="https://www.youtube.com/watch?v=FYOH_54XEJY">
                    <img src="https://img.youtube.com/vi/FYOH_54XEJY/maxresdefault.jpg" alt="Video title">
                </li>
            </ul>
        </div>
    </div>
    <div id="thumbnail-carousel" class="splide p-3 md:px-6 bg-gray-600 text-white">
        <div class="splide__track">
            <ul class="splide__list">
                <li class="splide__slide">
                    <img src="https://img.youtube.com/vi/0zlZCHxbLng/maxresdefault.jpg" alt="Video title">
                </li>
                <li class="splide__slide">
                    <img src="https://img.youtube.com/vi/Y8ACyHYsb6Q/maxresdefault.jpg" alt="Video title">
                </li>
                <li class="splide__slide">
                    <img src="https://img.youtube.com/vi/inBQVChango/maxresdefault.jpg" alt="Video title">
                </li>
                <li class="splide__slide">
                    <img src="https://img.youtube.com/vi/SJkx9EE3isc/maxresdefault.jpg" alt="Video title">
                </li>
                <li class="splide__slide">
                    <img src="https://img.youtube.com/vi/lNLeRmnkug8/maxresdefault.jpg" alt="Video title">
                </li>
                <li class="splide__slide">
                    <img src="https://img.youtube.com/vi/leQUhKhTW5c/maxresdefault.jpg" alt="Video title">
                </li>
                <li class="splide__slide">
                    <img src="https://img.youtube.com/vi/I5WalMD4FLY/maxresdefault.jpg" alt="Video title">
                </li>
                <li class="splide__slide">
                    <img src="https://img.youtube.com/vi/X-XZx1o_w-A/maxresdefault.jpg" alt="Video title">
                </li>
                <li class="splide__slide">
                    <img src="https://img.youtube.com/vi/21YxdZAZo1w/maxresdefault.jpg" alt="Video title">
                </li>
                <li class="splide__slide">
                    <img src="https://img.youtube.com/vi/FYOH_54XEJY/maxresdefault.jpg" alt="Video title">
                </li>
            </ul>
        </div>
    </div>
</div>
@endsection