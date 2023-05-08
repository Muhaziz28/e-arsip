@extends('admin.layout.master')

@section('content')
<main class="content">
    <div class="container-fluid p-0">
        <div class="d-flex justify-content-between align-items-center mb-3">
            <h1 class="h3 "><strong>Tambah Data Arsip</strong></h1>
        </div>
        <div class="row">
            <div class="col-xl-12 col-xxl-12 d-flex">
                <div class="w-100">
                    <div class="card ">
                        <div class="card-body">
                            <div class="row">
                                <form action="{{ route('arsip.store') }}" method="POST" id="add-arsip-form">
                                    @csrf
                                    <div class="row">
                                        <div class="col-6">
                                            <div class="input-group mb-3">
                                                <label>Indeks</label>
                                                <div class="input-group">
                                                    <input type="text" class="form-control  @error('indeks') is-invalid @enderror" placeholder="Indeks" id="indeks" name="indeks" value="{{ old('indeks') }}">
                                                    @error('indeks')
                                                    <div class="invalid-feedback">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="input-group mb-3">
                                                <label>Deskripsi</label>
                                                <div class="input-group">
                                                    <textarea type="text" class="form-control  @error('deskripsi') is-invalid @enderror" placeholder="Deskripsi" id="deskripsi" name="deskripsi" value="{{ old('deskripsi') }}"> </textarea>
                                                    @error('deskripsi')
                                                    <div class="invalid-feedback">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="input-group mb-3">
                                                <label>Tahun</label>
                                                <div class="input-group">
                                                    <input type="text" class="form-control " placeholder="Pilih Tahun ..." id="tahun" name="tahun">
                                                    @error('tahun')
                                                    <div class="invalid-feedback">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="input-group mb-3">
                                                <label>Tingkat Perkembangan Arsip</label>
                                                <div class="input-group">
                                                    <select class="form-control  select2" name="tingkat_perkembangan_id" id="tingkat_perkembangan_id" style="width: 100%;">
                                                        <option value="">Pilih Tingkat Perkembangan Arsip</option>
                                                    </select>
                                                    @error('tingkat_perkembangan_id')
                                                    <div class="invalid-feedback">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="input-group mb-3">
                                                <label>Jumlah</label>
                                                <div class="input-group">
                                                    <input type="number" class="form-control " name="jumlah" id="jumlah" placeholder="Jumlah ...">
                                                    @error('jumlah')
                                                    <div class="invalid-feedback">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="input-group mb-3">
                                                <label>Keterangan Arsip</label>
                                                <div class="input-group">
                                                    <select class="form-control select2" name="keterangan_id" id="keterangan_id">
                                                        <option value="">Pilih Keterangan Arsip</option>
                                                    </select>
                                                    @error('keterangan_id')
                                                    <div class="invalid-feedback">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="input-group mb-3">
                                                <label>Bentuk Arsip</label>
                                                <div class="input-group">
                                                    <select class="form-control  select2" name="bentuk_id" id="bentuk_id" style="width: 100%;">
                                                        <option value="">Pilih Bentuk Arsip</option>
                                                    </select>
                                                    @error('bentuk_id')
                                                    <div class="invalid-feedback">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="card">
                                                <div class="card-header text-center" style="background-color: #00AA9E;">
                                                    <h4 class="text-white">Lokasi Simpan</h4>
                                                </div>
                                                <div class="card-body" style="background-color: #e7ecec;">
                                                    <div data-height="260">
                                                        <div class="row">
                                                            <div class="col-12 col-md-6 col-lg-6">
                                                                <div class="form-group">
                                                                    <label>Rak</label>
                                                                    <input name="rak" type="number" class="form-control ">
                                                                </div>
                                                            </div>
                                                            <div class="col-12 col-md-6 col-lg-6">
                                                                <div class="form-group">
                                                                    <label>Roll O Pack</label>
                                                                    <input name="roll_o_pack" type="number" class="form-control ">
                                                                </div>
                                                            </div>
                                                            <div class="col-12 col-md-6 col-lg-6">
                                                                <div class="form-group">
                                                                    <label>Boks</label>
                                                                    <input name="boks" type="number" class="form-control ">
                                                                </div>
                                                            </div>
                                                            <div class="col-12 col-md-6 col-lg-6">
                                                                <div class="form-group">
                                                                    <label>Bungkus</label>
                                                                    <input name="bungkus" type="number" class="form-control ">
                                                                </div>
                                                            </div>
                                                            <div class="col-12 col-md-6 col-lg-6">
                                                                <div class="form-group">
                                                                    <label>Buku</label>
                                                                    <input name="buku" type="number" class="form-control ">
                                                                </div>
                                                            </div>
                                                            <div class="col-12 col-md-6 col-lg-6">
                                                                <div class="form-group">
                                                                    <label>Sampul</label>
                                                                    <input name="sampul" type="number" class="form-control ">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="btn-group">
                                        <button type="submit" class="btn btn-primary">Simpan</button>
                                    </div>
                                </form>
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
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    $(document).ready(function() {
        $('#tingkat_perkembangan_id').select2({
            ajax: {
                url: '{{ route("arsip.getTingkatPerkembangan") }}',
                dataType: 'json',
                delay: 250,
                processResults: function(data) {
                    return {
                        results: $.map(data, function(item) {
                            return {
                                id: item.id,
                                text: item.nama_tingkat_perkembangan
                            }
                        })
                    };
                },
                cache: true
            },
        });

        $('#keterangan_id').select2({
            ajax: {
                url: '{{ route("arsip.getKeterangan") }}',
                dataType: 'json',
                delay: 250,
                processResults: function(data) {
                    return {
                        results: $.map(data, function(item) {
                            return {
                                id: item.id,
                                text: item.nama_keterangan
                            }
                        })
                    };
                },
                cache: true
            },
        });

        $('#bentuk_id').select2({
            ajax: {
                url: '{{ route("arsip.getBentuk") }}',
                dataType: 'json',
                delay: 250,
                processResults: function(data) {
                    return {
                        results: $.map(data, function(item) {
                            return {
                                id: item.id,
                                text: item.nama_bentuk
                            }
                        })
                    };
                },
                cache: true
            },
        });
    });

    $(function() {
        $('#tahun').datepicker({
            format: "yyyy",
            viewMode: "years",
            minViewMode: "years",
            autoclose: true
        });

        $('#add-arsip-form').submit(function(e) {
            e.preventDefault()
            var form = this
            $.ajax({
                url: $(form).attr('action'),
                method: 'POST',
                data: new FormData(form),
                processData: false,
                dataType: 'json',
                contentType: false,
                beforeSend: function() {},
                success: function(data) {
                    if (data.code == 0) {
                        Swal.fire({
                            icon: 'error',
                            title: 'Oops...',
                            text: data.msg,
                        })
                    } else {
                        $(form)[0].reset()
                        Swal.fire({
                            icon: 'success',
                            title: 'Sukses',
                            text: data.msg,
                            // navigation to index after click ok
                            confirmButtonColor: '#3085d6',
                            confirmButtonText: 'Ok',
                        }).then((result) => {
                            if (result.isConfirmed) {
                                window.location.href = "{{ route('arsip.index') }}"
                            }
                        })
                    }
                }
            })
        })
    })
</script>
@endpush