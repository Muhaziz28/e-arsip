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

                    <div class="d-flex align-items-center">
                        <span class="ms-1" data-bs-toggle="tooltip" title="New question">
                            <span class="svg-icon svg-icon-primary svg-icon-1">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10" fill="currentColor" />
                                    <rect x="11" y="17" width="7" height="2" rx="1" transform="rotate(-90 11 17)" fill="currentColor" />
                                    <rect x="11" y="9" width="2" height="2" rx="1" transform="rotate(-90 11 9)" fill="currentColor" />
                                </svg>
                            </span>
                            <!--end::Svg Icon-->
                        </span>
                        <span class="ms-1" data-bs-toggle="tooltip" title="User replied">
                            <!--begin::Svg Icon | path: icons/duotune/communication/com010.svg-->
                            <span class="svg-icon svg-icon-danger svg-icon-1">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M6 8.725C6 8.125 6.4 7.725 7 7.725H14L18 11.725V12.925L22 9.725L12.6 2.225C12.2 1.925 11.7 1.925 11.4 2.225L2 9.725L6 12.925V8.725Z" fill="currentColor" />
                                    <path opacity="0.3" d="M22 9.72498V20.725C22 21.325 21.6 21.725 21 21.725H3C2.4 21.725 2 21.325 2 20.725V9.72498L11.4 17.225C11.8 17.525 12.3 17.525 12.6 17.225L22 9.72498ZM15 11.725H18L14 7.72498V10.725C14 11.325 14.4 11.725 15 11.725Z" fill="currentColor" />
                                </svg>
                            </span>
                            <!--end::Svg Icon-->
                        </span>
                    </div>
                    <!--end::Icons-->
                </div>

                <div class="fs-base fw-normal text-gray-700 mb-4">{!! $k->content !!}</div>

                <div class="d-flex flex-stack flex-wrap">
                    <div class="d-flex align-items-center py-1">
                        <div class="symbol symbol-35px me-2">
                            <div class="symbol-label bg-light-success fs-3 fw-semibold text-success text-uppercase">J</div>
                        </div>
                        <div class="d-flex flex-column align-items-start justify-content-center">
                            <span class="text-gray-900 fs-7 fw-semibold lh-1 mb-2">James Hunt</span>
                            <span class="text-muted fs-8 fw-semibold lh-1">24 minutes ago</span>
                        </div>
                    </div>

                    <div class="d-flex align-items-center py-1">
                        <a href="#" class="btn btn-sm btn-outline btn-outline-dashed btn-outline-default px-4 me-2">16 Answers</a>
                        <a href="{{ route('kegiatan.delete', $k->id) }}" class="btn btn-sm btn-danger px-4 me-2">
                            <i class="fas fa-trash-alt"></i>
                            Hapus
                        </a>

                        <a href="#" class="btn btn-sm btn-flex btn-light px-3" data-bs-toggle="tooltip" title="Upvote this question" data-bs-dismiss="click">23
                            <!--begin::Svg Icon | path: icons/duotune/arrows/arr062.svg-->
                            <span class="svg-icon svg-icon-7ms-2 me-0">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path opacity="0.5" d="M13 9.59998V21C13 21.6 12.6 22 12 22C11.4 22 11 21.6 11 21V9.59998H13Z" fill="currentColor" />
                                    <path d="M5.7071 7.89291C5.07714 8.52288 5.52331 9.60002 6.41421 9.60002H17.5858C18.4767 9.60002 18.9229 8.52288 18.2929 7.89291L12.7 2.3C12.3 1.9 11.7 1.9 11.3 2.3L5.7071 7.89291Z" fill="currentColor" />
                                </svg>
                            </span>
                            <!--end::Svg Icon--></a>
                        <!--end::Upvote-->
                    </div>
                    <!--end::Info-->
                </div>
                <!--end::Foot-->
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