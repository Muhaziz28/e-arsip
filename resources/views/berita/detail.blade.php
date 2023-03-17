@extends('layouts.layout')

@section('content')
<div class="w-full py-3">
    <h2 class="text-gray-800 text-2xl font-bold">
        <span class="inline-block h-5 border-l-3 border-red-600 mr-2"></span>{{ $news->judul_berita }}
    </h2>
</div>

<div class="flex flex-wrap">
    <div class="w-full md:w-4/12 mx-auto ">
        <div class="relative flex flex-col min-w-0 break-words bg-white w-full mb-6 shadow-lg rounded-lg bg-blueGray-100">
            <div class="px-4">
                <p class="mt-2 mb-4 text-blueGray-500 text-sm text-left">
                    {!! $news->isi_berita !!}
                </p>
            </div>
            <div class="flex flex-row justify-between px-4 py-3 bg-white rounded-b-lg">
                <div class="flex flex-row items-center">
                    <div class="flex flex-col ml-2">
                        <span class="text-sm font-medium text-blueGray-700">Diposting oleh</span>

                    </div>
                </div>
                <div class="flex flex-row items-center">
                    <div class="flex flex-col ml-2">
                        <span class="text-sm font-medium text-blueGray-700">Tanggal</span>
                        <span class="text-xs font-normal text-blueGray-400">{{ $news->created_at }}</span>
                    </div>
                </div>

            </div>
        </div>
    </div>


</div>
@endsection