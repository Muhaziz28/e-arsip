@extends('admin.layout.master')

@section('content')
<main class="content">
    <div class="container-fluid p-0">
        <div class="d-flex justify-content-between align-items-center mb-3">
            <h1 class="h3 "><strong>Data Arsip</strong></h1>
            <a class="btn btn-primary" href="{{ route('arsip.add') }}">
                Tambah Data
            </a>
        </div>
        <div class="row">
            <div class="col-xl-12 col-xxl-12 d-flex">
                <div class="w-100">
                    <div class="card ">
                        <div class="card-body">
                            <form id="filter">
                                <div class="row">
                                    <div class="col-6">
                                        <div class="input-group">
                                            <div class="input-group">
                                                <select class="form-control select2 filter" name="indeks" id="indeks">
                                                    <option value="">Pilih Indeks</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="input-group">
                                            <div class="input-group">
                                                <input type="text" class="form-control filter" placeholder="Pilih Tahun ..." id="tahun" name="tahun">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                            <div class="row my-3">
                                <div class="col-12">
                                    <button class="btn btn-warning" id="resetFilter">
                                        <i class="fa fa-refresh"></i>
                                        Reset Filter
                                    </button>
                                    <button class="btn btn-success" id="exportExcel">
                                        <i class="fa fa-file-excel"></i>
                                        Export Excel
                                    </button>
                                </div>
                            </div>
                            <div class="row">
                                <table class="table table-striped" id="arsip" style="width:100%">
                                    <thead>
                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">Indeks</th>
                                            <th scope="col">Deskripsi</th>
                                            <th scope="col">Bentuk</th>
                                            <th scope="col">Tingkat Perkembangan</th>
                                            <th scope="col">Keterangan</th>
                                            <th scope="col">Waktu</th>
                                            <th scope="col">Tanggal Ditambahkan</th>
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
</main>
@endsection

@push('js')
<script>
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    $('#resetFilter').on('click', function() {
        $('#indeks').val('').trigger('change')
        $('#tahun').val('')
        $('#arsip').DataTable().ajax.reload(null, false);
    })

    $('#exportExcel').on('click', function() {
        let indeks = $('#indeks').val(),
            tahun = $('#tahun').val()
        window.location.href = "{{ route('arsip.exportExcel') }}?indeks=" + indeks + "&tahun=" + tahun
    })

    let indeks = $('#indeks').val(),
        tahun = $('#tahun').val()

    $('.filter').on('change', function() {
        indeks = $('#indeks').val()
        tahun = $('#tahun').val()
        $('#arsip').DataTable().ajax.reload(null, false);
        console.log(indeks)
    })

    $(document).ready(function() {
        $('#modalArsip').on('shown.bs.modal', function() {
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
        });

        $('#modalArsip').on('hidden.bs.modal', function() {
            $('#tingkat_perkembangan_id').empty();
        });

        $('#indeks').select2({
            ajax: {
                url: '{{ route("arsip.getIndeks") }}',
                dataType: 'json',
                delay: 250,
                data: function(params) {
                    return {
                        q: params.term,
                        page: params.page
                    }
                },
                processResults: function(data, params) {
                    params.page = params.page || 1;
                    return {
                        results: $.map(data, function(item) {
                            return {
                                id: item,
                                text: item
                            }
                        }),
                        pagination: {
                            more: (params.page * 30) < data.total_count
                        }
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

        var table1 = $('#arsip')
        if (table1.length) {
            table1.DataTable({
                processing: true,
                serverSide: true,
                ajax: {
                    url: "{{ route('arsip.getArsip') }}",
                    type: "GET",
                    data: function(q) {
                        q.indeks = indeks
                        q.tahun = tahun
                        return q
                    }
                },
                columns: [{
                        data: 'DT_RowIndex',
                        name: 'DT_RowIndex'
                    },
                    {
                        data: 'indeks',
                        name: 'indeks'
                    },
                    {
                        data: 'deskripsi',
                        name: 'deskripsi',
                        render: function(data, type, row) {
                            if (data.length > 50) {
                                return data.substr(0, 50) + '...';
                            } else {
                                return data;
                            }
                        }
                    },
                    {
                        data: 'bentuk.nama_bentuk',
                        name: 'bentuk.nama_bentuk'
                    },
                    {
                        data: 'tingkat_perkembangan.nama_tingkat_perkembangan',
                        name: 'tingkat_perkembangan.nama_tingkat_perkembangan'
                    },
                    {
                        data: 'keterangan.nama_keterangan',
                        name: 'keterangan.nama_keterangan'
                    },
                    {
                        data: 'tahun',
                        name: 'tahun'
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

    })
</script>
@endpush