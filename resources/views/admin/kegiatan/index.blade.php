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
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <table class="table table-striped" id="kegiatan" style="width:100%">
                                    <thead>
                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">Kegiatan</th>
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
</main>
@endsection

@push('js')
<script>
    $(function() {
        var table = $('#kegiatan')

        if (table.length) {
            table.DataTable({
                processing: true,
                serverSide: true,
                ajax: {
                    url: "{{ route('kegiatan.getKegiatanList') }}",
                    type: "GET",
                },
                columns: [{
                        data: 'DT_RowIndex',
                        name: 'DT_RowIndex'
                    },
                    {
                        data: 'title',
                        name: 'title'
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
    })
</script>
@endpush