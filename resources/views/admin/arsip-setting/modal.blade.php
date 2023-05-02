<div class="modal fade" id="modalPerkembangan" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Tingkat Perkembangan</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="{{ route('arsip-setting.createTingkatPerkembangan') }}" method="POST" id="add-tingkat-perkembangan-form">
                <div class="modal-body">
                    @csrf
                    <div class="input-group mb-3">
                        <label>Nama Tingkat Perkembangan</label>
                        <div class="input-group">
                            <input type="text" class="form-control @error('nama_tingkat_perkembangan') is-invalid @enderror" placeholder="Nama Level" id="nama_tingkat_perkembangan" name="nama_tingkat_perkembangan" value="{{ old('nama_tingkat_perkembangan') }}">
                            @error('nama_tingkat_perkembangan')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="modal-footer justify-content-between">
                    <button type="button" class="btn btn-default" data-bs-dismiss="modal">Tutup</button>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
            </form>
        </div>
    </div>
</div>

<div class="modal fade" id="modalEditPerkembangan" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Ubah Tingkat Perkembangan</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="{{ route('arsip-setting.updateTingkatPerkembangan') }}" method="POST" id="edit-tingkat-perkembangan-form">
                <div class="modal-body">
                    @csrf
                    @method('PUT')
                    <div class="input-group mb-3">
                        <label>Nama Tingkat Perkembangan</label>
                        <div class="input-group">
                            <input type="text" class="form-control @error('nama_tingkat_perkembangan') is-invalid @enderror" placeholder="Nama Tingkat Perkembangan" id="nama_tingkat_perkembangan" name="nama_tingkat_perkembangan" value="{{ old('nama_tingkat_perkembangan') }}">
                            @error('nama_tingkat_perkembangan')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="modal-footer justify-content-between">
                    <input type="text" name="id" id="id">
                    <button type="button" class="btn btn-default" data-bs-dismiss="modal">Tutup</button>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
            </form>
        </div>
    </div>
</div>

<div class="modal fade" id="modalBentuk" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Bentuk Arsip</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="{{ route('arsip-setting.createBentuk') }}" method="POST" id="add-bentuk-form">
                <div class="modal-body">
                    @csrf
                    <div class="input-group mb-3">
                        <label>Nama Bentuk Arsip</label>
                        <div class="input-group">
                            <input type="text" class="form-control @error('nama_bentuk') is-invalid @enderror" placeholder="Nama Level" id="nama_bentuk" name="nama_bentuk" value="{{ old('nama_bentuk') }}">
                            @error('nama_bentuk')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="modal-footer justify-content-between">
                    <button type="button" class="btn btn-default" data-bs-dismiss="modal">Tutup</button>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
            </form>
        </div>
    </div>
</div>

<div class="modal fade" id="modalEditBentuk" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Ubah Bentuk Arsip</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="{{ route('arsip-setting.updateBentuk') }}" method="POST" id="edit-bentuk-form">
                <div class="modal-body">
                    @csrf
                    @method('PUT')
                    <div class="input-group mb-3">
                        <label>Nama Bentuk Arsip</label>
                        <div class="input-group">
                            <input type="text" class="form-control @error('nama_bentuk') is-invalid @enderror" placeholder="Nama Bentuk Arsip" id="nama_bentuk" name="nama_bentuk" value="{{ old('nama_bentuk') }}">
                            @error('nama_bentuk')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="modal-footer justify-content-between">
                    <input type="hidden" name="id" id="id">
                    <button type="button" class="btn btn-default" data-bs-dismiss="modal">Tutup</button>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
            </form>
        </div>
    </div>
</div>

<div class="modal fade" id="modalKeterangan" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Keterangan Arsip</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="{{ route('arsip-setting.createKeterangan') }}" method="POST" id="add-keterangan-form">
                <div class="modal-body">
                    @csrf
                    <div class="input-group mb-3">
                        <label>Nama Keterangan Arsip</label>
                        <div class="input-group">
                            <input type="text" class="form-control @error('nama_keterangan') is-invalid @enderror" placeholder="Nama Keterangan Arsip" id="nama_keterangan" name="nama_keterangan" value="{{ old('nama_keterangan') }}">
                            @error('nama_keterangan')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="modal-footer justify-content-between">
                    <button type="button" class="btn btn-default" data-bs-dismiss="modal">Tutup</button>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
            </form>
        </div>
    </div>
</div>

<div class="modal fade" id="modalEditKeterangan" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Ubah Keterangan Arsip</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="{{ route('arsip-setting.updateKeterangan') }}" method="POST" id="edit-keterangan-form">
                <div class="modal-body">
                    @csrf
                    @method('PUT')
                    <div class="input-group mb-3">
                        <label>Nama Keterangan Arsip</label>
                        <div class="input-group">
                            <input type="text" class="form-control @error('nama_keterangan') is-invalid @enderror" placeholder="Nama Keterangan Arsip" id="nama_keterangan" name="nama_keterangan" value="{{ old('nama_keterangan') }}">
                            @error('nama_keterangan')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="modal-footer justify-content-between">
                    <input type="hidden" name="id" id="id">
                    <button type="button" class="btn btn-default" data-bs-dismiss="modal">Tutup</button>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
            </form>
        </div>
    </div>
</div>