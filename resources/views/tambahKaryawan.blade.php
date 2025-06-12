@extends('template')

@section('content')

<style>
    .card-header {
        font-weight: bold;
    }
</style>

<div class="row">
    <div class="col-md-10 offset-md-1">
        <div class="card border-0 shadow-sm rounded">
            <div class="card-header bg-white d-flex justify-content-between align-items-center">
                <h4 class="mb-0">Form Tambah Karyawan</h4>
                {{-- Tombol Kembali, mengarah ke route index karyawan (/kodeX2) --}}
                <a href="{{ route('karyawan.index') }}" class="btn btn-secondary">
                    <i class="fas fa-arrow-left"></i> Kembali
                </a>
            </div>

            <div class="card-body">
                {{-- Form ini akan mengirim request ke method store() dengan route name 'karyawan.store' --}}
                <form action="{{ route('karyawan.store') }}" method="POST">
                    @csrf

                    {{-- 1. Input untuk Kode Pegawai --}}
                    <div class="form-group row">
                        <label for="kode" class="col-sm-3 col-form-label">Kode Pegawai</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control @error('kode') is-invalid @enderror" name="kode" id="kode"
                                placeholder="Masukkan 5 karakter kode" maxlength="5" required value="{{ old('kode') }}">

                            {{-- TAMBAHKAN BLOK INI UNTUK MENAMPILKAN ERROR --}}
                            @error('kode')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>

                    {{-- 2. Input untuk Nama Lengkap --}}
                    <div class="form-group row">
                        <label for="nama" class="col-sm-3 col-form-label">Nama Lengkap</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="nama" id="nama"
                                   placeholder="Masukkan nama lengkap karyawan (huruf KAPITAL)" maxlength="50" required>
                        </div>
                    </div>

                    {{-- 3. Input untuk Divisi --}}
                    <div class="form-group row">
                        <label for="divisi" class="col-sm-3 col-form-label">Divisi</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="divisi" id="divisi"
                                   placeholder="Contoh: IT, HRD" maxlength="5" required>
                        </div>
                    </div>

                    {{-- 4. Input untuk Departemen --}}
                    <div class="form-group row">
                        <label for="departemen" class="col-sm-3 col-form-label">Departemen</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="departemen" id="departemen"
                                   placeholder="Contoh: support (huruf kecil semua)" maxlength="10" required>
                        </div>
                    </div>

                    {{-- Garis pemisah sebelum tombol --}}
                    <hr>

                    {{-- Tombol Aksi --}}
                    <div class="form-group row">
                        <div class="col-sm-9 offset-sm-3">
                            <button type="submit" class="btn btn-success">
                                <i class="fas fa-save"></i> SIMPAN
                            </button>
                            <button type="reset" class="btn btn-warning">
                                <i class="fas fa-undo"></i> RESET
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection
