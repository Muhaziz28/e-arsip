@extends('admin.layout.master')

@section('content')
<main class="content">
    <div class="container-fluid p-0">
        <div class="d-flex justify-content-between align-items-center mb-3">
            <h1 class="h3 "><strong>Profile</strong></h1>
        </div>

        <div class="row">
            <div class="col-xl-12 col-xxl-12 d-flex">
                <div class="w-100">
                    <div class="card">
                        <div class="card-body">
                            <form action="{{ route('profile.store') }}" method="POST" enctype="multipart/form-data">
                                @csrf

                                <div class="form-group">
                                    <textarea class="form-control summernote" name="profile" id="summernote" placeholder="Input">
                                    @if($profile->count() > 0)
                                        {{ $profile->first()->profile }}
                                        @else
                                        <p>Tambahkan profile</p>
                                    @endif
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
</main>
@endsection


@push('js')
<script>
    $(document).ready(function() {
        $('.summernote').summernote({
            height: "500",
            disableDragAndDrop: true,
            styleTags: ['p', 'h1', 'h2', 'h3', 'h4', 'h5', 'h6'],

        });
    });
</script>
@endpush