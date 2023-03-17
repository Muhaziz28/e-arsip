@extends('admin.layout.master')

@section('content')
<main class="content">
    <div class="container-fluid p-0">
        <div class="d-flex justify-content-between align-items-center mb-3">
            <h1 class="h3 "><strong>Data Berita</strong></h1>
        </div>
        <div class="row">
            <div class="col-xl-12 col-xxl-12 d-flex">
                <div class="w-100">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="card ">
                                <div class="card-body">
                                    <form action="{{ route('berita.update', $berita->id) }}" method="POST" enctype="multipart/form-data">
                                        @csrf

                                        <div class="form-group">
                                            <label class="form-label">Judul Berita</label>
                                            <input type="text" class="form-control" name="judul_berita" id="judul_berita" placeholder="Input" value="{{ $berita->judul_berita }}">
                                        </div>

                                        <div class="form-group">
                                            <label class="form-label">Isi Berita</label>
                                            <textarea class="form-control summernote" name="isi_berita" id="summernote" placeholder="Input">
                                            {{ $berita->isi_berita }}
                                            </textarea>
                                        </div>
                                        <div class="mb-0 d-flex align-items-center justify-content-between">
                                            <button class="btn btn-primary btn-sm" type="submit">Simpan</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection

@push('js')
<script>
    $(document).ready(function() {
        $('.summernote').summernote({
            height: "500px",
            disableDragAndDrop: true,
            styleTags: ['p', 'h1', 'h2', 'h3', 'h4', 'h5', 'h6'],

        });
    });
</script>
@endpush