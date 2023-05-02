@extends('admin.layout.master')

@section('content')
<main class="content">
    <div class="container-fluid p-0">
        <div class="d-flex justify-content-between align-items-center mb-3">
            <h1 class="h3 "><strong>Tingkat Perkembangan</strong></h1>
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalPerkembangan">
                Tambah Data
            </button>

        </div>
        <div class="row">
            <div class="col-xl-12 col-xxl-12 d-flex">
                <div class="w-100">
                    <div class="card ">
                        <div class="card-body">
                            <div class="row">
                                <table class="table table-striped" id="perkembangan" style="width:100%">
                                    <thead>
                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">Judul Berita</th>
                                            <th scope="col">Tanggal</th>
                                            <th scope="col">Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    </tbody>
                                </table>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid p-0">
        <div class="d-flex justify-content-between align-items-center mb-3">
            <h1 class="h3 "><strong>Bentuk</strong></h1>
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalBentuk">
                Tambah Data
            </button>
        </div>
        <div class="row">
            <div class="col-xl-12 col-xxl-12 d-flex">
                <div class="w-100">
                    <div class="card ">
                        <div class="card-body">
                            <div class="row">
                                <table class="table table-striped" id="bentuk" style="width:100%">
                                    <thead>
                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">Bentuk Arsip</th>
                                            <th scope="col">Tanggal</th>
                                            <th scope="col">Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid p-0">
        <div class="d-flex justify-content-between align-items-center mb-3">
            <h1 class="h3 "><strong>Keterangan</strong></h1>
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalKeterangan">
                Tambah Data
            </button>
        </div>
        <div class="row">
            <div class="col-xl-12 col-xxl-12 d-flex">
                <div class="w-100">
                    <div class="card ">
                        <div class="card-body">
                            <div class="row">
                                <table class="table table-striped" id="keterangan" style="width:100%">
                                    <thead>
                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">Keterangan Arsip</th>
                                            <th scope="col">Tanggal</th>
                                            <th scope="col">Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('admin.arsip-setting.modal')
</main>
@endsection

@push('js')
<script>
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    $(function() {
        var table1 = $('#perkembangan')
        var table2 = $('#bentuk')
        var table3 = $('#keterangan')

        if (table1.length) {
            table1.DataTable({
                processing: true,
                serverSide: true,
                ajax: {
                    url: "{{ route('arsip-setting.getTingkatPerkembangan') }}",
                    type: "GET",
                },
                columns: [{
                        data: 'DT_RowIndex',
                        name: 'DT_RowIndex'
                    },
                    {
                        data: 'nama_tingkat_perkembangan',
                        name: 'nama_tingkat_perkembangan'
                    },
                    {
                        data: 'created_at',
                        name: 'created_at',
                        render: function(data, type, row) {
                            var date = new Date(data);
                            var month = date.getMonth() + 1;
                            var day = date.getDate();
                            var year = date.getFullYear();
                            var hours = date.getHours();
                            var minutes = date.getMinutes();

                            return day + '/' + month + '/' + year + '  ' + hours + ':' + minutes;
                        }
                    },
                    {
                        data: 'action',
                        name: 'action'
                    }
                ]
            })
        }

        $('#add-tingkat-perkembangan-form').submit(function(e) {
            e.preventDefault()
            var form = this
            $.ajax({
                url: $(form).attr('action'),
                method: 'POST',
                data: new FormData(form),
                processData: false,
                dataType: 'json',
                contentType: false,
                beforeSend: function() {
                    $('#add-tingkat-perkembangan-form button[type=submit]').attr('disabled', true)
                },
                success: function(data) {
                    if (data.code == 0) {
                        $('#add-tingkat-perkembangan-form button[type=submit]').attr('disabled', false)
                        Swal.fire({
                            icon: 'error',
                            title: 'Oops...',
                            text: data.msg,
                        })
                    } else {
                        $(form)[0].reset()
                        $('#modalPerkembangan').modal('hide')
                        table1.DataTable().ajax.reload(null, false)
                        $('#add-tingkat-perkembangan-form button[type=submit]').attr('disabled', false)
                        Swal.fire({
                            icon: 'success',
                            title: 'Sukses',
                            text: data.msg,
                        })
                    }
                }
            })
        })

        $('#edit-tingkat-perkembangan-form').submit(function(e) {
            e.preventDefault();
            var form = this;
            $.ajax({
                url: $(form).attr('action'),
                method: 'POST',
                data: new FormData(form),
                processData: false,
                dataType: 'JSON',
                contentType: false,
                beforeSend: function() {
                    $('#edit-tingkat-perkembangan-form button[type="submit"]').attr('disabled', false)
                },
                success: function(data) {
                    if (data.code == 0) {
                        $('#edit-tingkat-perkembangan-form button[type="submit"]').attr('disabled', false)
                        Swal.fire({
                            icon: 'error',
                            title: 'Oops...',
                            text: data.msg,
                        })
                    } else {
                        $(form)[0].reset();
                        $('#modalEditPerkembangan').modal('hide');
                        table1.DataTable().ajax.reload(null, false)
                        $('#edit-tingkat-perkembangan-form button[type="submit"]').html('Save');
                        Swal.fire({
                            icon: 'success',
                            title: 'Success',
                            text: data.msg,
                        })
                    }
                }
            })
        });

        $(document).on("click", '.btn-edit', function() {
            let id = $(this).attr("data-id");
            $.ajax({
                url: "{{ route('arsip-setting.showTingkatPerkembangan') }}",
                type: "POST",
                dataType: "JSON",
                data: {
                    id: id,
                    _token: "{{ csrf_token() }}"
                },
                success: function(data) {
                    var data = data.data;
                    $('#edit-tingkat-perkembangan-form input[name="nama_tingkat_perkembangan"]').val(data.nama_tingkat_perkembangan);
                    $("#edit-tingkat-perkembangan-form input[name='id']").val(data.id);
                    $('#modalEditPerkembangan').modal('show');
                },
            });
        });

        $(document).on("click", '.btn-delete', function() {
            let id = $(this).attr("data-id");
            let name = $(this).attr("data-name");
            Swal.fire({
                title: 'Are you sure?',
                text: "You won't be able to revert this!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, delete it!'
            }).then((result) => {
                if (result.isConfirmed) {
                    $.ajax({
                        url: "{{ route('arsip-setting.deleteTingkatPerkembangan') }}",
                        type: "POST",
                        method: "DELETE",
                        dataType: "JSON",
                        data: {
                            id: id,
                            _token: "{{ csrf_token() }}"
                        },
                        success: function(data) {
                            if (data.code == 1) {
                                table1.DataTable().ajax.reload(null, false);
                                Swal.fire(
                                    'Deleted!',
                                    'Your file has been deleted.',
                                    'success'
                                )
                            } else {
                                Swal.fire(
                                    'Failed!',
                                    'Your file has been failed.',
                                    'error'
                                )
                            }
                        },
                    });
                }
            })
        });

        if (table2.length) {
            table2.DataTable({
                processing: true,
                serverSide: true,
                ajax: {
                    url: "{{ route('arsip-setting.getBentuk') }}",
                    type: "GET",
                },
                columns: [{
                        data: 'DT_RowIndex',
                        name: 'DT_RowIndex'
                    },
                    {
                        data: 'nama_bentuk',
                        name: 'nama_bentuk'
                    },
                    {
                        data: 'created_at',
                        name: 'created_at',
                        render: function(data, type, row) {
                            var date = new Date(data);
                            var month = date.getMonth() + 1;
                            var day = date.getDate();
                            var year = date.getFullYear();
                            var hours = date.getHours();
                            var minutes = date.getMinutes();

                            return day + '/' + month + '/' + year + '  ' + hours + ':' + minutes;
                        }
                    },
                    {
                        data: 'action',
                        name: 'action'
                    }
                ]
            })
        }

        $('#add-bentuk-form').submit(function(e) {
            e.preventDefault()
            var form = this
            $.ajax({
                url: $(form).attr('action'),
                method: 'POST',
                data: new FormData(form),
                processData: false,
                dataType: 'json',
                contentType: false,
                beforeSend: function() {
                    $('#add-bentuk-form button[type=submit]').attr('disabled', true)
                },
                success: function(data) {
                    if (data.code == 0) {
                        $('#add-bentuk-form button[type=submit]').attr('disabled', false)
                        Swal.fire({
                            icon: 'error',
                            title: 'Oops...',
                            text: data.msg,
                        })
                    } else {
                        $(form)[0].reset()
                        $('#modalBentuk').modal('hide')
                        table2.DataTable().ajax.reload(null, false)
                        $('#add-bentuk-form button[type=submit]').attr('disabled', false)
                        Swal.fire({
                            icon: 'success',
                            title: 'Sukses',
                            text: data.msg,
                        })
                    }
                }
            })
        })

        $('#edit-bentuk-form').submit(function(e) {
            e.preventDefault();
            var form = this;
            $.ajax({
                url: $(form).attr('action'),
                method: 'POST',
                data: new FormData(form),
                processData: false,
                dataType: 'JSON',
                contentType: false,
                beforeSend: function() {
                    $('#edit-bentuk-form button[type="submit"]').attr('disabled', false)
                },
                success: function(data) {
                    if (data.code == 0) {
                        $('#edit-bentuk-form button[type="submit"]').attr('disabled', false)
                        Swal.fire({
                            icon: 'error',
                            title: 'Oops...',
                            text: data.msg,
                        })
                    } else {
                        $(form)[0].reset();
                        $('#modalEditBentuk').modal('hide');
                        table2.DataTable().ajax.reload(null, false)
                        $('#edit-bentuk-form button[type="submit"]').html('Save');
                        Swal.fire({
                            icon: 'success',
                            title: 'Success',
                            text: data.msg,
                        })
                    }
                }
            })
        });

        $(document).on("click", '.btn-edit-bentuk', function() {
            let id = $(this).attr("data-id");
            $.ajax({
                url: "{{ route('arsip-setting.showBentuk') }}",
                type: "POST",
                dataType: "JSON",
                data: {
                    id: id,
                    _token: "{{ csrf_token() }}"
                },
                success: function(data) {
                    var data = data.data;
                    $('#edit-bentuk-form input[name="nama_bentuk"]').val(data.nama_bentuk);
                    $("#edit-bentuk-form input[name='id']").val(data.id);
                    $('#modalEditBentuk').modal('show');
                },
            });
        });

        $(document).on("click", '.btn-delete-bentuk', function() {
            let id = $(this).attr("data-id");
            let name = $(this).attr("data-name");
            Swal.fire({
                title: 'Are you sure?',
                text: "You won't be able to revert this!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, delete it!'
            }).then((result) => {
                if (result.isConfirmed) {
                    $.ajax({
                        url: "{{ route('arsip-setting.deleteBentuk') }}",
                        type: "POST",
                        method: "DELETE",
                        dataType: "JSON",
                        data: {
                            id: id,
                            _token: "{{ csrf_token() }}"
                        },
                        success: function(data) {
                            if (data.code == 1) {
                                table2.DataTable().ajax.reload(null, false);
                                Swal.fire(
                                    'Deleted!',
                                    'Your file has been deleted.',
                                    'success'
                                )
                            } else {
                                Swal.fire(
                                    'Failed!',
                                    'Your file has been failed.',
                                    'error'
                                )
                            }
                        },
                    });
                }
            })
        });

        if (table3.length) {
            table3.DataTable({
                processing: true,
                serverSide: true,
                ajax: {
                    url: "{{ route('arsip-setting.getKeterangan') }}",
                    type: "GET",
                },
                columns: [{
                        data: 'DT_RowIndex',
                        name: 'DT_RowIndex'
                    },
                    {
                        data: 'nama_keterangan',
                        name: 'nama_keterangan'
                    },
                    {
                        data: 'created_at',
                        name: 'created_at',
                        render: function(data, type, row) {
                            var date = new Date(data);
                            var month = date.getMonth() + 1;
                            var day = date.getDate();
                            var year = date.getFullYear();
                            var hours = date.getHours();
                            var minutes = date.getMinutes();

                            return day + '/' + month + '/' + year + '  ' + hours + ':' + minutes;
                        }
                    },
                    {
                        data: 'action',
                        name: 'action'
                    }
                ]
            })
        }

        $('#add-keterangan-form').submit(function(e) {
            e.preventDefault()
            var form = this
            $.ajax({
                url: $(form).attr('action'),
                method: 'POST',
                data: new FormData(form),
                processData: false,
                dataType: 'json',
                contentType: false,
                beforeSend: function() {
                    $('#add-keterangan-form button[type=submit]').attr('disabled', true)
                },
                success: function(data) {
                    if (data.code == 0) {
                        $('#add-keterangan-form button[type=submit]').attr('disabled', false)
                        Swal.fire({
                            icon: 'error',
                            title: 'Oops...',
                            text: data.msg,
                        })
                    } else {
                        $(form)[0].reset()
                        $('#modalKeterangan').modal('hide')
                        table3.DataTable().ajax.reload(null, false)
                        $('#add-keterangan-form button[type=submit]').attr('disabled', false)
                        Swal.fire({
                            icon: 'success',
                            title: 'Sukses',
                            text: data.msg,
                        })
                    }
                }
            })
        })

        $('#edit-keterangan-form').submit(function(e) {
            e.preventDefault();
            var form = this;
            $.ajax({
                url: $(form).attr('action'),
                method: 'POST',
                data: new FormData(form),
                processData: false,
                dataType: 'JSON',
                contentType: false,
                beforeSend: function() {
                    $('#edit-keterangan-form button[type="submit"]').attr('disabled', false)
                },
                success: function(data) {
                    if (data.code == 0) {
                        $('#edit-keterangan-form button[type="submit"]').attr('disabled', false)
                        Swal.fire({
                            icon: 'error',
                            title: 'Oops...',
                            text: data.msg,
                        })
                    } else {
                        $(form)[0].reset();
                        $('#modalEditKeterangan').modal('hide');
                        table3.DataTable().ajax.reload(null, false)
                        $('#edit-keterangan-form button[type="submit"]').html('Save');
                        Swal.fire({
                            icon: 'success',
                            title: 'Success',
                            text: data.msg,
                        })
                    }
                }
            })
        });

        $(document).on("click", '.btn-edit-keterangan', function() {
            let id = $(this).attr("data-id");
            $.ajax({
                url: "{{ route('arsip-setting.showKeterangan') }}",
                type: "POST",
                dataType: "JSON",
                data: {
                    id: id,
                    _token: "{{ csrf_token() }}"
                },
                success: function(data) {
                    var data = data.data;
                    $('#edit-keterangan-form input[name="nama_keterangan"]').val(data.nama_keterangan);
                    $("#edit-keterangan-form input[name='id']").val(data.id);
                    $('#modalEditKeterangan').modal('show');
                },
            });
        });

        $(document).on("click", '.btn-delete-keterangan', function() {
            let id = $(this).attr("data-id");
            let name = $(this).attr("data-name");
            Swal.fire({
                title: 'Are you sure?',
                text: "You won't be able to revert this!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, delete it!'
            }).then((result) => {
                if (result.isConfirmed) {
                    $.ajax({
                        url: "{{ route('arsip-setting.deleteKeterangan') }}",
                        type: "POST",
                        method: "DELETE",
                        dataType: "JSON",
                        data: {
                            id: id,
                            _token: "{{ csrf_token() }}"
                        },
                        success: function(data) {
                            if (data.code == 1) {
                                table3.DataTable().ajax.reload(null, false);
                                Swal.fire(
                                    'Deleted!',
                                    'Your file has been deleted.',
                                    'success'
                                )
                            } else {
                                Swal.fire(
                                    'Failed!',
                                    'Your file has been failed.',
                                    'error'
                                )
                            }
                        },
                    });
                }
            })
        });
    })
</script>
@endpush