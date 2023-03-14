@extends('admin.layout.master')

@section('content')
<main class="content">
    <div class="container-fluid p-0">
        <div class="d-flex justify-content-between align-items-center mb-3">
            <h1 class="h3 "><strong>Galeri Kegiatan</strong></h1>
            <a href="{{ route('kegiatan.create') }}" class="btn btn-primary">Tambah Kegiatan Baru</a>
        </div>
        <div class="row">
            <div class="col-xl-12 col-xxl-12 d-flex">
                <div class="w-100">
                    @if ($kegiatan->count() > 0)
                    <div class="row">

                        @foreach ($kegiatan as $k)
                        <div class="col-sm-12">
                            <div class="card ">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col mt-0">
                                            <h5 class="card-title">#jjs</h5>
                                        </div>

                                        <!-- <div class="col-auto">
                                            <div class="stat text-primary">
                                                <i class="align-middle" data-feather="truck"></i>
                                            </div>
                                        </div> -->
                                    </div>
                                    <h3 class="mt-1 mb-3">{{ $k->title }}</h3>
                                    <p class="mb-3">
                                        {{ strip_tags(Str::limit($k->content, '100')) }}
                                    </p>
                                    <div class="mb-0 d-flex align-items-center justify-content-between">
                                        <span class="badge rounded-pill text-bg-warning">
                                            {{ $k->created_at->diffForHumans() }}
                                        </span>
                                        <div class="btn-group">
                                            <a href="{{ route('kegiatan.detail', $k->slug) }}" class="btn btn-outline-primary"><i class="align-middle" data-feather="eye"></i> Lihat</a>
                                            <a href="{{ route('kegiatan.delete', $k->id) }}" class="btn btn-outline-danger"><i class="align-middle" data-feather="trash"></i> Hapus</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                        <ul class="pagination d-flex justify-content-center">
                            {{ $kegiatan->links()}}
                        </ul>
                    </div>
                    @else
                    <p class="text-center">Belum ada kegiatan</p>
                    @endif
                </div>
            </div>
        </div>
    </div>
</main>
@endsection