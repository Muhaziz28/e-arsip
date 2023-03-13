@extends('admin.layout.master')

@section('content')
<div class="content flex-column-fluid" id="kt_content">
    <div class="toolbar d-flex flex-stack flex-wrap mb-5 mb-lg-7" id="kt_toolbar">
        <div class="page-title d-flex flex-column py-1">
            <h1 class="d-flex align-items-center my-1">
                <span class="text-dark fw-bold fs-1">Data Kegiatan</span>
            </h1>
        </div>
        <div class="d-flex align-items-center py-1">
            <a href="{{ route('kegiatan.create') }}" class="btn btn-flex btn-xs btn-primary fw-bold border-0 fs-6 h-40px" id="kt_toolbar_primary_button">Kegiatan</a>
        </div>
    </div>
    <div class="post" id="kt_post">

        <div class="mb-10">
            <div class="separator separator-dashed border-gray-300 my-8"></div>
            @foreach ($kegiatan as $k)

            <div class="mb-0">
                <div class="d-flex align-items-center mb-4">
                    <a href="#" class="fs-2 fw-bold text-gray-900 text-hover-primary me-1">{{ $k->title }}</a>
                </div>

                <div class="fs-base fw-normal text-gray-700 mb-4">
                    {{ strip_tags(Str::limit($k->content, 100)) }}
                </div>

                <div class="d-flex flex-stack flex-wrap">
                    <div class="d-flex align-items-center py-1">
                        <div class="symbol symbol-35px me-2">
                            <div class="symbol-label bg-light-success fs-3 fw-semibold text-success text-uppercase">J</div>
                        </div>
                        <div class="d-flex flex-column align-items-start justify-content-center">
                            <span class="text-gray-900 fs-7 fw-semibold lh-1 mb-2">James Hunt</span>
                            <span class="text-muted fs-8 fw-semibold lh-1">
                                {{ $k->created_at->diffForHumans() }}
                            </span>
                        </div>
                    </div>

                    <div class="d-flex align-items-center py-1">
                        <a href="#" class="btn btn-sm btn-outline btn-outline-dashed btn-outline-default px-4 me-2">16 Answers</a>
                        <a href="{{ route('kegiatan.delete', $k->id) }}" class="btn btn-sm btn-danger px-4 me-2">
                            <i class="fas fa-trash-alt"></i>
                            Hapus
                        </a>
                    </div>
                </div>
            </div>

            <div class="separator separator-dashed border-gray-300 my-8"></div>
            @endforeach
        </div>

        <div class="d-flex flex-center mb-0">
            <a href="#" class="btn btn-icon btn-light btn-active-light-primary h-30px w-30px fw-semibold fs-6 mx-2">1</a>
            <a href="#" class="btn btn-icon btn-light btn-active-light-primary h-30px w-30px fw-semibold fs-6 mx-2 active">2</a>
            <a href="#" class="btn btn-icon btn-light btn-active-light-primary h-30px w-30px fw-semibold fs-6 mx-2">3</a>
            <a href="#" class="btn btn-icon btn-light btn-active-light-primary h-30px w-30px fw-semibold fs-6 mx-2">4</a>
            <a href="#" class="btn btn-icon btn-light btn-active-light-primary h-30px w-30px fw-semibold fs-6 mx-2">5</a>
            <span class="text-muted fw-semibold fs-6 mx-2">..</span>
            <a href="#" class="btn btn-icon btn-light btn-active-light-primary h-30px w-30px fw-semibold fs-6 mx-2">19</a>
        </div>
    </div>
</div>
@endsection