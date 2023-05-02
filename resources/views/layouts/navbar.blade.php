<div class="header-6-3" style="font-family: 'Poppins', sans-serif">
    <header class="mx-auto flex flex-wrap content-start flex-row items-center lg:px-24 md:px-20 px-8 py-8 justify-between bg-white">
        <a class="flex font-medium items-center">
            <img src="{{ asset('logo.png') }}" alt="logo" class="w-16 h-16">
        </a>
        <label for="menu-toggle" class="cursor-pointer lg:hidden block">
            <svg class="w-6 h-6" fill="none" stroke="#092A33" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
            </svg>
        </label>
        <input class="hidden" type="checkbox" id="menu-toggle">
        <div class="hidden lg:flex lg:items-center lg:w-auto w-full lg:ml-auto lg:mr-auto xl:mr-52 flex-wrap items-center text-base justify-center" id="menu">
            <nav class="lg:space-x-9 space-x-0 lg:flex items-center justify-between text-sm font-light pt-8 lg:pt-0 lg:space-y-0 space-y-6">
                <a href="#" class="block nav-text active font-semibold">Beranda</a>
                <a href="#" class="block nav-text">Profile</a>
                <a href="#" class="block nav-text">Publikasi</a>
                <div class="dropdown-header  cursor-pointer" x-data="{ dropdownOpen: true }">
                    <div @click="dropdownOpen = !dropdownOpen" @click.away="dropdownOpen = true">
                        <a class="lg:justify-start justify-start flex items-center leading-6 relative nav-text">
                            <span class="mr-2.5">Perpustakaan</span>
                            <svg :class="{'block': dropdownOpen, 'hidden': !dropdownOpen}" class="block dropdown-header-icon-drop" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M12 6L8 10L4 6" stroke="#FF984E" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                            </svg>
                            <svg :class="{'block': !dropdownOpen, 'hidden': dropdownOpen}" class="hidden dropdown-header-icon-close" width="17" height="17" viewBox="0 0 17 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M11.8452 4.42969L8.34521 8.42969L4.84521 4.42969" stroke="#FF984E" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                <path d="M4.84521 12.4297L8.34522 8.42969L11.8452 12.4297" stroke="#FF984E" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                            </svg>
                        </a>
                        <input id="people_target" type="hidden" name="people">
                    </div>

                    <ul :class="{'block z-10': !dropdownOpen, 'hidden': dropdownOpen}" class="dropdown-header-menu hidden absolute bg-white sm:p-5 p-4 rounded-xl mt-7">
                        <li id="people1" class="cursor-pointer">
                            <div class="dropdown-header-hover h-full flex sm:p-4 p-2 items-center justify-center text-left">
                                <div class="flex-grow">
                                    <h2 class="title-font font-semibold text-sm mb-1 text-black-1">
                                        Profile
                                    </h2>
                                </div>
                                <svg class="dropdown-header-icon-arrow hidden" width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M14.5237 9.42011L10.7887 13.1701C10.6687 13.2901 10.5187 13.3501 10.3687 13.3501C10.2187 13.3501 10.0687 13.2901 9.94871 13.1701C9.70871 12.9301 9.70871 12.5551 9.94871 12.3151L12.6637 9.58512H3.90371C3.57371 9.58512 3.30371 9.31512 3.30371 8.98512C3.30371 8.65512 3.57371 8.38512 3.90371 8.38512H12.6637L9.94871 5.65512C9.70871 5.41512 9.70871 5.04012 9.94871 4.80012C10.1887 4.56012 10.5637 4.56012 10.8037 4.80012L14.5387 8.55012C14.7637 8.80512 14.7637 9.19511 14.5237 9.42011Z" fill="#FF984E"></path>
                                </svg>
                            </div>
                        </li>
                        <li id="people2" class="cursor-pointer">
                            <div class="dropdown-header-hover h-full flex sm:p-4 p-2 items-center justify-center text-left">
                                <div class="flex-grow">
                                    <h2 class="title-font font-semibold text-sm mb-1 text-black-1">
                                        Informasi
                                    </h2>
                                </div>
                                <svg class="dropdown-header-icon-arrow hidden" width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M14.5237 9.42011L10.7887 13.1701C10.6687 13.2901 10.5187 13.3501 10.3687 13.3501C10.2187 13.3501 10.0687 13.2901 9.94871 13.1701C9.70871 12.9301 9.70871 12.5551 9.94871 12.3151L12.6637 9.58512H3.90371C3.57371 9.58512 3.30371 9.31512 3.30371 8.98512C3.30371 8.65512 3.57371 8.38512 3.90371 8.38512H12.6637L9.94871 5.65512C9.70871 5.41512 9.70871 5.04012 9.94871 4.80012C10.1887 4.56012 10.5637 4.56012 10.8037 4.80012L14.5387 8.55012C14.7637 8.80512 14.7637 9.19511 14.5237 9.42011Z" fill="#FF984E"></path>
                                </svg>
                            </div>
                        </li>
                        <li id="people3" class="cursor-pointer">
                            <div class="dropdown-header-hover h-full flex sm:p-4 p-2 items-center justify-center text-left">
                                <div class="flex-grow">
                                    <h2 class="title-font font-semibold text-sm mb-1 text-black-1">
                                        Galeri Kegiatan
                                    </h2>
                                </div>
                                <svg class="dropdown-header-icon-arrow hidden" width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M14.5237 9.42011L10.7887 13.1701C10.6687 13.2901 10.5187 13.3501 10.3687 13.3501C10.2187 13.3501 10.0687 13.2901 9.94871 13.1701C9.70871 12.9301 9.70871 12.5551 9.94871 12.3151L12.6637 9.58512H3.90371C3.57371 9.58512 3.30371 9.31512 3.30371 8.98512C3.30371 8.65512 3.57371 8.38512 3.90371 8.38512H12.6637L9.94871 5.65512C9.70871 5.41512 9.70871 5.04012 9.94871 4.80012C10.1887 4.56012 10.5637 4.56012 10.8037 4.80012L14.5387 8.55012C14.7637 8.80512 14.7637 9.19511 14.5237 9.42011Z" fill="#FF984E"></path>
                                </svg>
                            </div>
                        </li>
                        <li id="people4" class="cursor-pointer">
                            <div class="dropdown-header-hover h-full flex sm:p-4 p-2 items-center justify-center text-left">
                                <div class="flex-grow">
                                    <h2 class="title-font font-semibold text-sm mb-1 text-black-1">
                                        Pencarian Buku
                                    </h2>
                                </div>
                                <svg class="dropdown-header-icon-arrow hidden" width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M14.5237 9.42011L10.7887 13.1701C10.6687 13.2901 10.5187 13.3501 10.3687 13.3501C10.2187 13.3501 10.0687 13.2901 9.94871 13.1701C9.70871 12.9301 9.70871 12.5551 9.94871 12.3151L12.6637 9.58512H3.90371C3.57371 9.58512 3.30371 9.31512 3.30371 8.98512C3.30371 8.65512 3.57371 8.38512 3.90371 8.38512H12.6637L9.94871 5.65512C9.70871 5.41512 9.70871 5.04012 9.94871 4.80012C10.1887 4.56012 10.5637 4.56012 10.8037 4.80012L14.5387 8.55012C14.7637 8.80512 14.7637 9.19511 14.5237 9.42011Z" fill="#FF984E"></path>
                                </svg>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="dropdown-header  cursor-pointer" x-data="{ dropdownOpen: true }">
                    <div @click="dropdownOpen = !dropdownOpen" @click.away="dropdownOpen = true">
                        <a class="lg:justify-start justify-start flex items-center leading-6 relative nav-text">
                            <span class="mr-2.5">Arsip</span>
                            <svg :class="{'block': dropdownOpen, 'hidden': !dropdownOpen}" class="block dropdown-header-icon-drop" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M12 6L8 10L4 6" stroke="#FF984E" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                            </svg>
                            <svg :class="{'block': !dropdownOpen, 'hidden': dropdownOpen}" class="hidden dropdown-header-icon-close" width="17" height="17" viewBox="0 0 17 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M11.8452 4.42969L8.34521 8.42969L4.84521 4.42969" stroke="#FF984E" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                <path d="M4.84521 12.4297L8.34522 8.42969L11.8452 12.4297" stroke="#FF984E" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                            </svg>
                        </a>
                        <input id="people_target" type="hidden" name="people">
                    </div>

                    <ul :class="{'block z-10': !dropdownOpen, 'hidden': dropdownOpen}" class="dropdown-header-menu hidden absolute bg-white sm:p-5 p-4 rounded-xl mt-7">
                        <li id="people1" class="cursor-pointer">
                            <div class="dropdown-header-hover h-full flex sm:p-4 p-2 items-center justify-center text-left">
                                <div class="flex-grow">
                                    <h2 class="title-font font-semibold text-sm mb-1 text-black-1">
                                        Deskripsi
                                    </h2>
                                </div>
                                <svg class="dropdown-header-icon-arrow hidden" width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M14.5237 9.42011L10.7887 13.1701C10.6687 13.2901 10.5187 13.3501 10.3687 13.3501C10.2187 13.3501 10.0687 13.2901 9.94871 13.1701C9.70871 12.9301 9.70871 12.5551 9.94871 12.3151L12.6637 9.58512H3.90371C3.57371 9.58512 3.30371 9.31512 3.30371 8.98512C3.30371 8.65512 3.57371 8.38512 3.90371 8.38512H12.6637L9.94871 5.65512C9.70871 5.41512 9.70871 5.04012 9.94871 4.80012C10.1887 4.56012 10.5637 4.56012 10.8037 4.80012L14.5387 8.55012C14.7637 8.80512 14.7637 9.19511 14.5237 9.42011Z" fill="#FF984E"></path>
                                </svg>
                            </div>
                        </li>
                        <li id="people2" class="cursor-pointer">
                            <div class="dropdown-header-hover h-full flex sm:p-4 p-2 items-center justify-center text-left">
                                <div class="flex-grow">
                                    <h2 class="title-font font-semibold text-sm mb-1 text-black-1">
                                        Informasi
                                    </h2>
                                </div>
                                <svg class="dropdown-header-icon-arrow hidden" width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M14.5237 9.42011L10.7887 13.1701C10.6687 13.2901 10.5187 13.3501 10.3687 13.3501C10.2187 13.3501 10.0687 13.2901 9.94871 13.1701C9.70871 12.9301 9.70871 12.5551 9.94871 12.3151L12.6637 9.58512H3.90371C3.57371 9.58512 3.30371 9.31512 3.30371 8.98512C3.30371 8.65512 3.57371 8.38512 3.90371 8.38512H12.6637L9.94871 5.65512C9.70871 5.41512 9.70871 5.04012 9.94871 4.80012C10.1887 4.56012 10.5637 4.56012 10.8037 4.80012L14.5387 8.55012C14.7637 8.80512 14.7637 9.19511 14.5237 9.42011Z" fill="#FF984E"></path>
                                </svg>
                            </div>
                        </li>
                        <li id="people3" class="cursor-pointer">
                            <div class="dropdown-header-hover h-full flex sm:p-4 p-2 items-center justify-center text-left">
                                <div class="flex-grow">
                                    <h2 class="title-font font-semibold text-sm mb-1 text-black-1">
                                        Layanan Audio Visual Arsip Statis
                                    </h2>
                                </div>
                                <svg class="dropdown-header-icon-arrow hidden" width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M14.5237 9.42011L10.7887 13.1701C10.6687 13.2901 10.5187 13.3501 10.3687 13.3501C10.2187 13.3501 10.0687 13.2901 9.94871 13.1701C9.70871 12.9301 9.70871 12.5551 9.94871 12.3151L12.6637 9.58512H3.90371C3.57371 9.58512 3.30371 9.31512 3.30371 8.98512C3.30371 8.65512 3.57371 8.38512 3.90371 8.38512H12.6637L9.94871 5.65512C9.70871 5.41512 9.70871 5.04012 9.94871 4.80012C10.1887 4.56012 10.5637 4.56012 10.8037 4.80012L14.5387 8.55012C14.7637 8.80512 14.7637 9.19511 14.5237 9.42011Z" fill="#FF984E"></path>
                                </svg>
                            </div>
                        </li>
                        <li id="people4" class="cursor-pointer">
                            <div class="dropdown-header-hover h-full flex sm:p-4 p-2 items-center justify-center text-left">
                                <div class="flex-grow">
                                    <h2 class="title-font font-semibold text-sm mb-1 text-black-1">
                                        Pencarian Buku
                                    </h2>
                                </div>
                                <svg class="dropdown-header-icon-arrow hidden" width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M14.5237 9.42011L10.7887 13.1701C10.6687 13.2901 10.5187 13.3501 10.3687 13.3501C10.2187 13.3501 10.0687 13.2901 9.94871 13.1701C9.70871 12.9301 9.70871 12.5551 9.94871 12.3151L12.6637 9.58512H3.90371C3.57371 9.58512 3.30371 9.31512 3.30371 8.98512C3.30371 8.65512 3.57371 8.38512 3.90371 8.38512H12.6637L9.94871 5.65512C9.70871 5.41512 9.70871 5.04012 9.94871 4.80012C10.1887 4.56012 10.5637 4.56012 10.8037 4.80012L14.5387 8.55012C14.7637 8.80512 14.7637 9.19511 14.5237 9.42011Z" fill="#FF984E"></path>
                                </svg>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
        <div class="hidden lg:flex lg:items-center lg:w-auto w-full" id="menu">
            <a class="btn-register text-white items-center border-0 py-4 px-8 focus:outline-none rounded-2xl font-medium text-sm mt-6 lg:mt-0" href="{{ route('login') }}">
                Login
            </a>
        </div>
    </header>

    <!-- Hero-header -->
    <div>
        <div class="mx-auto flex pt-16 pb-20 lg:px-24 md:px-16 sm:px-8 px-8 lg:flex-row flex-col">
            <!-- Left Column -->
            <div class="lg:flex-grow lg:w-2/3 flex flex-col lg:items-start lg:text-left mb-3 md:mb-12 lg:mb-0 items-center text-center">
                <h1 class="title-font sm:text-5xl lg:text-6xl text-4xl mb-8 font-bold sm:leading-tight text-blue-1" style="line-height: 1.2">
                    Dinas Arsip dan Pustaka<br class="lg:block hidden">
                    Kota Padang
                </h1>
                <p class="leading-7 tracking-wide mb-20 text-gray-2">
                    Dinas Arsip dan Pustaka Kota Padang merupakan salah satu unsur pelaksana pemerintahan
                    <br class="md:block hidden">
                    di bidang arsip dan pustaka yang berada di bawah dan bertanggung jawab kepada Walikota Padang.
                </p>
            </div>
            <!-- Right Column -->
            <div class="lg:w-1/3 flex">
                <!-- <div class="card bg-white rounded-2xl lg:py-2.5 py-6 lg:pl-8 lg:pr-2.5 px-6">
                    <div class="grid lg:grid-cols-4 gap-8 items-center">
                        <div class="dropdown-header block lg:mx-0 mx-auto cursor-pointer" x-data="{ dropdownOpen1: true }">
                            <div @click="dropdownOpen1 = !dropdownOpen1" @click.away="dropdownOpen1 = true">
                                <a class="lg:justify-start justify-center font-medium flex items-center leading-6 mb-1 relative text-black-1">
                                    <span class="mr-2.5">Location</span>
                                    <svg :class="{'block': dropdownOpen1, 'hidden': !dropdownOpen1}" class="block dropdown-header-icon-drop" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M12 6L8 10L4 6" stroke="#FF984E" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                    </svg>
                                    <svg :class="{'block': !dropdownOpen1, 'hidden': dropdownOpen1}" class="hidden dropdown-header-icon-close" width="17" height="17" viewBox="0 0 17 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M11.8452 4.42969L8.34521 8.42969L4.84521 4.42969" stroke="#FF984E" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                        <path d="M4.84521 12.4297L8.34522 8.42969L11.8452 12.4297" stroke="#FF984E" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                    </svg>
                                </a>
                                <input id="location_target" type="hidden" name="location">
                                <p id="location" class="lg:text-left text-center text-sm font-light text-gray-1">
                                    Enter your campsites
                                </p>
                            </div>
                            <ul :class="{'block z-20': !dropdownOpen1, 'hidden': dropdownOpen1}" class="dropdown-header-menu hidden absolute bg-white sm:p-5 p-4 rounded-xl mt-7">
                                <li id="loc1" class="cursor-pointer">
                                    <div class="dropdown-header-hover h-full flex sm:p-4 p-2 items-center justify-center text-left">
                                        <div class="flex-grow">
                                            <h2 class="title-font font-semibold text-sm mb-1 text-black-1">
                                                Ragunan Camp
                                            </h2>
                                            <p class="mb-0 text-xs text-gray-3">
                                                Jakarta, Indonesia
                                            </p>
                                        </div>
                                        <svg class="dropdown-header-icon-arrow hidden" width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M14.5237 9.42011L10.7887 13.1701C10.6687 13.2901 10.5187 13.3501 10.3687 13.3501C10.2187 13.3501 10.0687 13.2901 9.94871 13.1701C9.70871 12.9301 9.70871 12.5551 9.94871 12.3151L12.6637 9.58512H3.90371C3.57371 9.58512 3.30371 9.31512 3.30371 8.98512C3.30371 8.65512 3.57371 8.38512 3.90371 8.38512H12.6637L9.94871 5.65512C9.70871 5.41512 9.70871 5.04012 9.94871 4.80012C10.1887 4.56012 10.5637 4.56012 10.8037 4.80012L14.5387 8.55012C14.7637 8.80512 14.7637 9.19511 14.5237 9.42011Z" fill="#FF984E"></path>
                                        </svg>
                                    </div>
                                </li>
                                <li id="loc2" class="cursor-pointer">
                                    <div class="dropdown-header-hover h-full flex sm:p-4 p-2 items-center justify-center text-left">
                                        <div class="flex-grow">
                                            <h2 class="title-font font-semibold text-sm mb-1 text-black-1">
                                                Highland Camp
                                            </h2>
                                            <p class="mb-0 text-xs text-gray-3">
                                                Bogor, Indonesia
                                            </p>
                                        </div>
                                        <svg class="dropdown-header-icon-arrow hidden" width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M14.5237 9.42011L10.7887 13.1701C10.6687 13.2901 10.5187 13.3501 10.3687 13.3501C10.2187 13.3501 10.0687 13.2901 9.94871 13.1701C9.70871 12.9301 9.70871 12.5551 9.94871 12.3151L12.6637 9.58512H3.90371C3.57371 9.58512 3.30371 9.31512 3.30371 8.98512C3.30371 8.65512 3.57371 8.38512 3.90371 8.38512H12.6637L9.94871 5.65512C9.70871 5.41512 9.70871 5.04012 9.94871 4.80012C10.1887 4.56012 10.5637 4.56012 10.8037 4.80012L14.5387 8.55012C14.7637 8.80512 14.7637 9.19511 14.5237 9.42011Z" fill="#FF984E"></path>
                                        </svg>
                                    </div>
                                </li>
                                <li id="loc3" class="cursor-pointer">
                                    <div class="dropdown-header-hover h-full flex sm:p-4 p-2 items-center justify-center text-left">
                                        <div class="flex-grow">
                                            <h2 class="title-font font-semibold text-sm mb-1 text-black-1">
                                                Rimba Camp
                                            </h2>
                                            <p class="mb-0 text-xs text-gray-3">
                                                Kalimantan, Indonesia
                                            </p>
                                        </div>
                                        <svg class="dropdown-header-icon-arrow hidden" width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M14.5237 9.42011L10.7887 13.1701C10.6687 13.2901 10.5187 13.3501 10.3687 13.3501C10.2187 13.3501 10.0687 13.2901 9.94871 13.1701C9.70871 12.9301 9.70871 12.5551 9.94871 12.3151L12.6637 9.58512H3.90371C3.57371 9.58512 3.30371 9.31512 3.30371 8.98512C3.30371 8.65512 3.57371 8.38512 3.90371 8.38512H12.6637L9.94871 5.65512C9.70871 5.41512 9.70871 5.04012 9.94871 4.80012C10.1887 4.56012 10.5637 4.56012 10.8037 4.80012L14.5387 8.55012C14.7637 8.80512 14.7637 9.19511 14.5237 9.42011Z" fill="#FF984E"></path>
                                        </svg>
                                    </div>
                                </li>
                            </ul>
                        </div>

                        <div class="relative my-auto lg:mx-0 mx-auto z-10">
                            <div class="antialiased">
                                <div x-data="app()" x-init="[initDate(), getNoOfDays()]">
                                    <div class="relative">
                                        <div class="cursor-pointer" @click="showDatepicker = !showDatepicker">
                                            <h5 class="lg:justify-start justify-center text-base font-medium flex items-center mb-1 text-black-1">
                                                Date
                                                <span>
                                                    <svg :class="{'block': !showDatepicker, 'hidden': showDatepicker}" class="block dropdown-header-icon-drop ml-1.5" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M12 6L8 10L4 6" stroke="#FF984E" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                                    </svg>
                                                    <svg :class="{'block': showDatepicker, 'hidden': !showDatepicker}" class="hidden dropdown-header-icon-close ml-1.5" width="17" height="17" viewBox="0 0 17 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M11.8452 4.42969L8.34521 8.42969L4.84521 4.42969" stroke="#FF984E" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                                        <path d="M4.84521 12.4297L8.34522 8.42969L11.8452 12.4297" stroke="#FF984E" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                                    </svg>
                                                </span>
                                            </h5>
                                            <input type="hidden" name="date" x-ref="date">
                                            <input type="text" readonly="" placeholder="When will it start" x-model="datepickerValue1" @keydown.escape="showDatepicker = false" style="height: 20px" class="date-input w-full focus:outline-none lg:text-left text-center">
                                        </div>
                                        <div>
                                            <div class="dropdown-header-menu date-card bg-white rounded-xl sm:p-5 p-4 absolute top-0 left-0" x-show.transition="showDatepicker" @click.away="showDatepicker = false" style="display: none;">
                                                <div class="flex justify-between items-center mb-2">
                                                    <div>
                                                        <button type="button" class="transition ease-in-out duration-100 inline-flex cursor-pointer p-1 focus:outline-none" :class="{'cursor-not-allowed opacity-25': month == 0 }" :disabled="month == 0 ? true : false" @click="month--; getNoOfDays()">
                                                            <svg class="h-4 w-4 text-gray-500 inline-flex" width="17" height="17" viewBox="0 0 17 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <path d="M6.92734 4.44067L2.52734 8.94067M2.52734 8.94067L6.92734 13.4407M2.52734 8.94067L13.5273 8.94067" stroke="#FF984E" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                                            </svg>
                                                        </button>
                                                    </div>
                                                    <div class="text-black-1">
                                                        <span x-text="MONTH_NAMES[month]" class="text-sm font-medium">March</span>
                                                        <span x-text="year" class="ml-1 text-sm font-medium">2023</span>
                                                    </div>
                                                    <div>
                                                        <button type="button" class="transition ease-in-out duration-100 inline-flex cursor-pointer p-1 focus:outline-none" :class="{'cursor-not-allowed opacity-25': month == 11 }" :disabled="month == 11 ? true : false" @click="month++; getNoOfDays()">
                                                            <svg class="h-4 w-4 text-gray-500 inline-flex" width="17" height="17" viewBox="0 0 17 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <path d="M9.12734 3.50659L13.5273 8.00659M13.5273 8.00659L9.12734 12.5066M13.5273 8.00659L2.52734 8.00659" stroke="#FF984E" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                                            </svg>
                                                        </button>
                                                    </div>
                                                </div>

                                                <div class="flex flex-wrap mb-3 -mx-1 text-blue-2">
                                                    <template x-for="(day, index) in DAYS" :key="index">
                                                        <div style="width: 14.26%" class="px-1">
                                                            <div x-text="day" :id="day" class="font-medium text-center text-xs"></div>
                                                        </div>
                                                    </template>

                                                    <div style="width: 14.26%" class="px-1">
                                                        <div x-text="day" :id="day" class="font-medium text-center text-xs" id="Sun">Sun</div>
                                                    </div>

                                                    <div style="width: 14.26%" class="px-1">
                                                        <div x-text="day" :id="day" class="font-medium text-center text-xs" id="Mon">Mon</div>
                                                    </div>

                                                    <div style="width: 14.26%" class="px-1">
                                                        <div x-text="day" :id="day" class="font-medium text-center text-xs" id="Tue">Tue</div>
                                                    </div>

                                                    <div style="width: 14.26%" class="px-1">
                                                        <div x-text="day" :id="day" class="font-medium text-center text-xs" id="Wed">Wed</div>
                                                    </div>

                                                    <div style="width: 14.26%" class="px-1">
                                                        <div x-text="day" :id="day" class="font-medium text-center text-xs" id="Thu">Thu</div>
                                                    </div>

                                                    <div style="width: 14.26%" class="px-1">
                                                        <div x-text="day" :id="day" class="font-medium text-center text-xs" id="Fri">Fri</div>
                                                    </div>

                                                    <div style="width: 14.26%" class="px-1">
                                                        <div x-text="day" :id="day" class="font-medium text-center text-xs" id="Sat">Sat</div>
                                                    </div>
                                                </div>

                                                <div class="flex flex-wrap -mx-1 text-blue-2">
                                                    <template x-for="blankday in blankdays">
                                                        <div style="width: 14.28%" class="text-center border p-1 border-transparent text-sm">
                                                        </div>
                                                    </template>

                                                    <div style="width: 14.28%" class="text-center border p-1 border-transparent text-sm">
                                                    </div>

                                                    <div style="width: 14.28%" class="text-center border p-1 border-transparent text-sm">
                                                    </div>

                                                    <div style="width: 14.28%" class="text-center border p-1 border-transparent text-sm">
                                                    </div>
                                                    <template x-for="(date, dateIndex) in no_of_days" :key="dateIndex">
                                                        <div style="width: 14.28%" class="px-1 mb-1">
                                                            <div @click="getDateValue(date)" x-text="date" class="cursor-pointer text-center text-xs leading-loose transition ease-in-out duration-100" :class="{'date-selected text-white': isToday(date) == true, 'date-hover': isToday(date) == false }">
                                                            </div>
                                                        </div>
                                                    </template>

                                                    <div style="width: 14.28%" class="px-1 mb-1">
                                                        <div @click="getDateValue(date)" x-text="date" class="cursor-pointer text-center text-xs leading-loose transition ease-in-out duration-100 date-hover" :class="{'date-selected text-white': isToday(date) == true, 'date-hover': isToday(date) == false }">1</div>
                                                    </div>

                                                    <div style="width: 14.28%" class="px-1 mb-1">
                                                        <div @click="getDateValue(date)" x-text="date" class="cursor-pointer text-center text-xs leading-loose transition ease-in-out duration-100 date-hover" :class="{'date-selected text-white': isToday(date) == true, 'date-hover': isToday(date) == false }">2</div>
                                                    </div>

                                                    <div style="width: 14.28%" class="px-1 mb-1">
                                                        <div @click="getDateValue(date)" x-text="date" class="cursor-pointer text-center text-xs leading-loose transition ease-in-out duration-100 date-hover" :class="{'date-selected text-white': isToday(date) == true, 'date-hover': isToday(date) == false }">3</div>
                                                    </div>

                                                    <div style="width: 14.28%" class="px-1 mb-1">
                                                        <div @click="getDateValue(date)" x-text="date" class="cursor-pointer text-center text-xs leading-loose transition ease-in-out duration-100 date-hover" :class="{'date-selected text-white': isToday(date) == true, 'date-hover': isToday(date) == false }">4</div>
                                                    </div>

                                                    <div style="width: 14.28%" class="px-1 mb-1">
                                                        <div @click="getDateValue(date)" x-text="date" class="cursor-pointer text-center text-xs leading-loose transition ease-in-out duration-100 date-hover" :class="{'date-selected text-white': isToday(date) == true, 'date-hover': isToday(date) == false }">5</div>
                                                    </div>

                                                    <div style="width: 14.28%" class="px-1 mb-1">
                                                        <div @click="getDateValue(date)" x-text="date" class="cursor-pointer text-center text-xs leading-loose transition ease-in-out duration-100 date-hover" :class="{'date-selected text-white': isToday(date) == true, 'date-hover': isToday(date) == false }">6</div>
                                                    </div>

                                                    <div style="width: 14.28%" class="px-1 mb-1">
                                                        <div @click="getDateValue(date)" x-text="date" class="cursor-pointer text-center text-xs leading-loose transition ease-in-out duration-100 date-hover" :class="{'date-selected text-white': isToday(date) == true, 'date-hover': isToday(date) == false }">7</div>
                                                    </div>

                                                    <div style="width: 14.28%" class="px-1 mb-1">
                                                        <div @click="getDateValue(date)" x-text="date" class="cursor-pointer text-center text-xs leading-loose transition ease-in-out duration-100 date-hover" :class="{'date-selected text-white': isToday(date) == true, 'date-hover': isToday(date) == false }">8</div>
                                                    </div>

                                                    <div style="width: 14.28%" class="px-1 mb-1">
                                                        <div @click="getDateValue(date)" x-text="date" class="cursor-pointer text-center text-xs leading-loose transition ease-in-out duration-100 date-hover" :class="{'date-selected text-white': isToday(date) == true, 'date-hover': isToday(date) == false }">9</div>
                                                    </div>

                                                    <div style="width: 14.28%" class="px-1 mb-1">
                                                        <div @click="getDateValue(date)" x-text="date" class="cursor-pointer text-center text-xs leading-loose transition ease-in-out duration-100 date-hover" :class="{'date-selected text-white': isToday(date) == true, 'date-hover': isToday(date) == false }">10</div>
                                                    </div>

                                                    <div style="width: 14.28%" class="px-1 mb-1">
                                                        <div @click="getDateValue(date)" x-text="date" class="cursor-pointer text-center text-xs leading-loose transition ease-in-out duration-100 date-hover" :class="{'date-selected text-white': isToday(date) == true, 'date-hover': isToday(date) == false }">11</div>
                                                    </div>

                                                    <div style="width: 14.28%" class="px-1 mb-1">
                                                        <div @click="getDateValue(date)" x-text="date" class="cursor-pointer text-center text-xs leading-loose transition ease-in-out duration-100 date-hover" :class="{'date-selected text-white': isToday(date) == true, 'date-hover': isToday(date) == false }">12</div>
                                                    </div>

                                                    <div style="width: 14.28%" class="px-1 mb-1">
                                                        <div @click="getDateValue(date)" x-text="date" class="cursor-pointer text-center text-xs leading-loose transition ease-in-out duration-100 date-hover" :class="{'date-selected text-white': isToday(date) == true, 'date-hover': isToday(date) == false }">13</div>
                                                    </div>

                                                    <div style="width: 14.28%" class="px-1 mb-1">
                                                        <div @click="getDateValue(date)" x-text="date" class="cursor-pointer text-center text-xs leading-loose transition ease-in-out duration-100 date-hover" :class="{'date-selected text-white': isToday(date) == true, 'date-hover': isToday(date) == false }">14</div>
                                                    </div>

                                                    <div style="width: 14.28%" class="px-1 mb-1">
                                                        <div @click="getDateValue(date)" x-text="date" class="cursor-pointer text-center text-xs leading-loose transition ease-in-out duration-100 date-hover" :class="{'date-selected text-white': isToday(date) == true, 'date-hover': isToday(date) == false }">15</div>
                                                    </div>

                                                    <div style="width: 14.28%" class="px-1 mb-1">
                                                        <div @click="getDateValue(date)" x-text="date" class="cursor-pointer text-center text-xs leading-loose transition ease-in-out duration-100 date-hover" :class="{'date-selected text-white': isToday(date) == true, 'date-hover': isToday(date) == false }">16</div>
                                                    </div>

                                                    <div style="width: 14.28%" class="px-1 mb-1">
                                                        <div @click="getDateValue(date)" x-text="date" class="cursor-pointer text-center text-xs leading-loose transition ease-in-out duration-100 date-hover" :class="{'date-selected text-white': isToday(date) == true, 'date-hover': isToday(date) == false }">17</div>
                                                    </div>

                                                    <div style="width: 14.28%" class="px-1 mb-1">
                                                        <div @click="getDateValue(date)" x-text="date" class="cursor-pointer text-center text-xs leading-loose transition ease-in-out duration-100 date-hover" :class="{'date-selected text-white': isToday(date) == true, 'date-hover': isToday(date) == false }">18</div>
                                                    </div>

                                                    <div style="width: 14.28%" class="px-1 mb-1">
                                                        <div @click="getDateValue(date)" x-text="date" class="cursor-pointer text-center text-xs leading-loose transition ease-in-out duration-100 date-hover" :class="{'date-selected text-white': isToday(date) == true, 'date-hover': isToday(date) == false }">19</div>
                                                    </div>

                                                    <div style="width: 14.28%" class="px-1 mb-1">
                                                        <div @click="getDateValue(date)" x-text="date" class="cursor-pointer text-center text-xs leading-loose transition ease-in-out duration-100 date-hover" :class="{'date-selected text-white': isToday(date) == true, 'date-hover': isToday(date) == false }">20</div>
                                                    </div>

                                                    <div style="width: 14.28%" class="px-1 mb-1">
                                                        <div @click="getDateValue(date)" x-text="date" class="cursor-pointer text-center text-xs leading-loose transition ease-in-out duration-100 date-hover" :class="{'date-selected text-white': isToday(date) == true, 'date-hover': isToday(date) == false }">21</div>
                                                    </div>

                                                    <div style="width: 14.28%" class="px-1 mb-1">
                                                        <div @click="getDateValue(date)" x-text="date" class="cursor-pointer text-center text-xs leading-loose transition ease-in-out duration-100 date-hover" :class="{'date-selected text-white': isToday(date) == true, 'date-hover': isToday(date) == false }">22</div>
                                                    </div>

                                                    <div style="width: 14.28%" class="px-1 mb-1">
                                                        <div @click="getDateValue(date)" x-text="date" class="cursor-pointer text-center text-xs leading-loose transition ease-in-out duration-100 date-hover" :class="{'date-selected text-white': isToday(date) == true, 'date-hover': isToday(date) == false }">23</div>
                                                    </div>

                                                    <div style="width: 14.28%" class="px-1 mb-1">
                                                        <div @click="getDateValue(date)" x-text="date" class="cursor-pointer text-center text-xs leading-loose transition ease-in-out duration-100 date-hover" :class="{'date-selected text-white': isToday(date) == true, 'date-hover': isToday(date) == false }">24</div>
                                                    </div>

                                                    <div style="width: 14.28%" class="px-1 mb-1">
                                                        <div @click="getDateValue(date)" x-text="date" class="cursor-pointer text-center text-xs leading-loose transition ease-in-out duration-100 date-hover" :class="{'date-selected text-white': isToday(date) == true, 'date-hover': isToday(date) == false }">25</div>
                                                    </div>

                                                    <div style="width: 14.28%" class="px-1 mb-1">
                                                        <div @click="getDateValue(date)" x-text="date" class="cursor-pointer text-center text-xs leading-loose transition ease-in-out duration-100 date-hover" :class="{'date-selected text-white': isToday(date) == true, 'date-hover': isToday(date) == false }">26</div>
                                                    </div>

                                                    <div style="width: 14.28%" class="px-1 mb-1">
                                                        <div @click="getDateValue(date)" x-text="date" class="cursor-pointer text-center text-xs leading-loose transition ease-in-out duration-100 date-hover" :class="{'date-selected text-white': isToday(date) == true, 'date-hover': isToday(date) == false }">27</div>
                                                    </div>

                                                    <div style="width: 14.28%" class="px-1 mb-1">
                                                        <div @click="getDateValue(date)" x-text="date" class="cursor-pointer text-center text-xs leading-loose transition ease-in-out duration-100 date-hover" :class="{'date-selected text-white': isToday(date) == true, 'date-hover': isToday(date) == false }">28</div>
                                                    </div>

                                                    <div style="width: 14.28%" class="px-1 mb-1">
                                                        <div @click="getDateValue(date)" x-text="date" class="cursor-pointer text-center text-xs leading-loose transition ease-in-out duration-100 date-selected text-white" :class="{'date-selected text-white': isToday(date) == true, 'date-hover': isToday(date) == false }">29</div>
                                                    </div>

                                                    <div style="width: 14.28%" class="px-1 mb-1">
                                                        <div @click="getDateValue(date)" x-text="date" class="cursor-pointer text-center text-xs leading-loose transition ease-in-out duration-100 date-hover" :class="{'date-selected text-white': isToday(date) == true, 'date-hover': isToday(date) == false }">30</div>
                                                    </div>

                                                    <div style="width: 14.28%" class="px-1 mb-1">
                                                        <div @click="getDateValue(date)" x-text="date" class="cursor-pointer text-center text-xs leading-loose transition ease-in-out duration-100 date-hover" :class="{'date-selected text-white': isToday(date) == true, 'date-hover': isToday(date) == false }">31</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="dropdown-header block lg:mx-0 mx-auto cursor-pointer" x-data="{ dropdownOpen: true }">
                            <div @click="dropdownOpen = !dropdownOpen" @click.away="dropdownOpen = true">
                                <a class="lg:justify-start justify-center font-medium flex items-center leading-6 mb-1 relative text-black-1">
                                    <span class="mr-2.5">People</span>
                                    <svg :class="{'block': dropdownOpen, 'hidden': !dropdownOpen}" class="block dropdown-header-icon-drop" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M12 6L8 10L4 6" stroke="#FF984E" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                    </svg>
                                    <svg :class="{'block': !dropdownOpen, 'hidden': dropdownOpen}" class="hidden dropdown-header-icon-close" width="17" height="17" viewBox="0 0 17 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M11.8452 4.42969L8.34521 8.42969L4.84521 4.42969" stroke="#FF984E" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                        <path d="M4.84521 12.4297L8.34522 8.42969L11.8452 12.4297" stroke="#FF984E" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                    </svg>
                                </a>
                                <input id="people_target" type="hidden" name="people">
                                <p id="people" class="lg:text-left text-center text-sm font-light text-gray-1">
                                    How many people?
                                </p>
                            </div>

                            <ul :class="{'block z-10': !dropdownOpen, 'hidden': dropdownOpen}" class="dropdown-header-menu hidden absolute bg-white sm:p-5 p-4 rounded-xl mt-7">
                                <li id="people1" class="cursor-pointer">
                                    <div class="dropdown-header-hover h-full flex sm:p-4 p-2 items-center justify-center text-left">
                                        <div class="flex-grow">
                                            <h2 class="title-font font-semibold text-sm mb-1 text-black-1">
                                                Solo
                                            </h2>
                                            <p class="mb-0 text-xs text-gray-3">
                                                1 People
                                            </p>
                                        </div>
                                        <svg class="dropdown-header-icon-arrow hidden" width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M14.5237 9.42011L10.7887 13.1701C10.6687 13.2901 10.5187 13.3501 10.3687 13.3501C10.2187 13.3501 10.0687 13.2901 9.94871 13.1701C9.70871 12.9301 9.70871 12.5551 9.94871 12.3151L12.6637 9.58512H3.90371C3.57371 9.58512 3.30371 9.31512 3.30371 8.98512C3.30371 8.65512 3.57371 8.38512 3.90371 8.38512H12.6637L9.94871 5.65512C9.70871 5.41512 9.70871 5.04012 9.94871 4.80012C10.1887 4.56012 10.5637 4.56012 10.8037 4.80012L14.5387 8.55012C14.7637 8.80512 14.7637 9.19511 14.5237 9.42011Z" fill="#FF984E"></path>
                                        </svg>
                                    </div>
                                </li>
                                <li id="people2" class="cursor-pointer">
                                    <div class="dropdown-header-hover h-full flex sm:p-4 p-2 items-center justify-center text-left">
                                        <div class="flex-grow">
                                            <h2 class="title-font font-semibold text-sm mb-1 text-black-1">
                                                Couple
                                            </h2>
                                            <p class="mb-0 text-xs text-gray-3">
                                                1-2 People
                                            </p>
                                        </div>
                                        <svg class="dropdown-header-icon-arrow hidden" width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M14.5237 9.42011L10.7887 13.1701C10.6687 13.2901 10.5187 13.3501 10.3687 13.3501C10.2187 13.3501 10.0687 13.2901 9.94871 13.1701C9.70871 12.9301 9.70871 12.5551 9.94871 12.3151L12.6637 9.58512H3.90371C3.57371 9.58512 3.30371 9.31512 3.30371 8.98512C3.30371 8.65512 3.57371 8.38512 3.90371 8.38512H12.6637L9.94871 5.65512C9.70871 5.41512 9.70871 5.04012 9.94871 4.80012C10.1887 4.56012 10.5637 4.56012 10.8037 4.80012L14.5387 8.55012C14.7637 8.80512 14.7637 9.19511 14.5237 9.42011Z" fill="#FF984E"></path>
                                        </svg>
                                    </div>
                                </li>
                                <li id="people3" class="cursor-pointer">
                                    <div class="dropdown-header-hover h-full flex sm:p-4 p-2 items-center justify-center text-left">
                                        <div class="flex-grow">
                                            <h2 class="title-font font-semibold text-sm mb-1 text-black-1">
                                                Group
                                            </h2>
                                            <p class="mb-0 text-xs text-gray-3">
                                                10-50+ People
                                            </p>
                                        </div>
                                        <svg class="dropdown-header-icon-arrow hidden" width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M14.5237 9.42011L10.7887 13.1701C10.6687 13.2901 10.5187 13.3501 10.3687 13.3501C10.2187 13.3501 10.0687 13.2901 9.94871 13.1701C9.70871 12.9301 9.70871 12.5551 9.94871 12.3151L12.6637 9.58512H3.90371C3.57371 9.58512 3.30371 9.31512 3.30371 8.98512C3.30371 8.65512 3.57371 8.38512 3.90371 8.38512H12.6637L9.94871 5.65512C9.70871 5.41512 9.70871 5.04012 9.94871 4.80012C10.1887 4.56012 10.5637 4.56012 10.8037 4.80012L14.5387 8.55012C14.7637 8.80512 14.7637 9.19511 14.5237 9.42011Z" fill="#FF984E"></path>
                                        </svg>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="lg:ml-auto mx-auto">
                            <button class="btn-explore text-white py-4 px-7 font-semibold text-base rounded-xl focus:outline-none">
                                Explore Now
                            </button>
                        </div>
                    </div>
                </div> -->
            </div>
        </div>
    </div>
</div>