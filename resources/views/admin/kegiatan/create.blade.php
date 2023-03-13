@extends('admin.layout.master')

@push('css')

<!-- <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script> -->

<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">

<link href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" rel="stylesheet">
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
@endpush

@section('content')
<div class="content flex-column-fluid" id="kt_content">
    <div class="toolbar d-flex flex-stack flex-wrap mb-5 mb-lg-7" id="kt_toolbar">
        <div class="page-title d-flex flex-column py-1">
            <h1 class="d-flex align-items-center my-1">
                <span class="text-dark fw-bold fs-1">Tambah Kegiatan Baru</span>
            </h1>
        </div>
    </div>
    <div class="post" id="kt_post">
        <form class="form" action="{{ route('kegiatan.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="d-flex flex-column mb-8 fv-row">
                <label class="d-flex align-items-center mb-2">
                    <span class="text-gray-700 fs-6 fw-bold required">Title</span>
                    <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" aria-label="Specify your question's title" data-kt-initialized="1"></i>
                </label>
                <input type="text" class="form-control" placeholder="Nama Kegiatan" name="title" id="title">
            </div>
            <div class="d-flex flex-column mb-8">
                <label class="mb-2">
                    <span class="text-gray-700 fs-6 fw-bold required">Content</span>
                </label>
                <div class="fv-row">
                    <textarea class="form-control mb-3" id="summernote" name="content" rows="10" style="height: 500px"></textarea>
                </div>
            </div>

            <div class=" d-flex flex-stack">
                <label class="form-check form-switch form-check-custom form-check-solid">
                    <input class="form-check-input" type="checkbox" name="public" value="1" checked="checked">
                    <span class="form-check-label fs-7 fw-bold text-gray-800">Public
                        <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" data-bs-dismiss="click" aria-label="Make your question public to help others with solutions" data-kt-initialized="1"></i></span>
                </label>
                <div class="mt-2 text-center">
                    <button id="btnToggleStyle" class="btn btn-primary">Toggle Corrected Styles</button>
                </div>
                <button type="submit" class="btn btn-primary">
                    <span class="indicator-label">Submit</span>
                </button>
            </div>
        </form>
    </div>
</div>
@endsection

@push('js')
<script src="{{ asset('summernote/summernote.min.js') }}"></script>
<script>
    $(document).ready(function() {
        $('#summernote').summernote({
            height: 450,
        });

        // $("button#btnToggleStyle").on("click", function(e) {
        //     e.preventDefault();
        var styleEle = $("style#fixed");
        if (styleEle.length == 0)
            $("<style id=\"fixed\">.note-editor .dropdown-toggle::after { all: unset; } .note-editor .note-dropdown-menu { box-sizing: content-box; } .note-editor .note-modal-footer { box-sizing: content-box; }</style>")
            .prependTo("body");
        else
            styleEle.remove();
        // })
    });
</script>
@endpush