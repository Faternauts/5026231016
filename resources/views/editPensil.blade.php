@extends('template')

@section('content')

<div class="container mt-5 mb-5">
    <div class="row">
        <div class="col-md-8 offset-md-2">

            <div class="card border-0 shadow-sm rounded">
                <div class="card-header bg-white d-flex justify-content-between align-items-center">
                    <h4 class="font-weight-bold mb-0">Edit Data </h4>
                    {{-- Tombol Kembali, mengarah ke halaman utama --}}
                    <a href="{{ route('.index') }}" class="btn btn-secondary">
                        <i class="fas fa-arrow-left"></i> Kembali
                    </a>
                </div>

                <div class="card-body">
                    {{-- Arahkan action ke route yang menangani method update, sambil mengirim ID  --}}
                    <form action="{{ route('.update', $->ID) }}" method="POST">
                        {{-- Token keamanan dan method spoofing untuk request PUT/PATCH --}}
                        @csrf
                        @method('PUT')

                        {{-- Input tersembunyi untuk ID, jika controller Anda masih membutuhkannya dari request --}}
                        <input type="hidden" name="id" value="{{ $->ID }}">

                        {{-- 1. Input untuk Merk  --}}
                        <div class="form-group">
                            <label for="merk">Merk </label>
                            <input type="text" class="form-control @error('merk') is-invalid @enderror"
                                   name="merk" id="merk" placeholder="Contoh: Hino Dutro 130 HD"
                                   value="{{ old('merk', $->merk) }}">

                            @error('merk')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="row">
                            {{-- 2. Input untuk Harga  --}}
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="harga">Harga </label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">Rp.</span>
                                        </div>
                                        <input type="number" class="form-control @error('harga') is-invalid @enderror"
                                               name="harga" id="harga" placeholder="Contoh: 520000000"
                                               value="{{ old('harga', $->harga) }}">
                                    </div>
                                    @error('harga')
                                        <div class="invalid-feedback d-block">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>

                            {{-- 3. Input untuk Berat  --}}
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="berat">Berat (Kg)</label>
                                    <div class="input-group">
                                        <input type="number" step="0.01" class="form-control @error('berat') is-invalid @enderror"
                                               name="berat" id="berat" placeholder="Contoh: 8500.50"
                                               value="{{ old('berat', $->berat) }}">
                                        <div class="input-group-append">
                                            <span class="input-group-text">Kg</span>
                                        </div>
                                    </div>
                                     @error('berat')
                                        <div class="invalid-feedback d-block">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                        </div>

                        {{-- 4. Input untuk Ketersediaan --}}
                        <div class="form-group">
                            <label for="tersedia">Ketersediaan</label>
                            <select class="form-control @error('tersedia') is-invalid @enderror" name="tersedia" id="tersedia">
                                {{-- Logika untuk memilih opsi yang sesuai dengan data saat ini --}}
                                <option value="1" {{ old('tersedia', $->tersedia) == 1 ? 'selected' : '' }}>Tersedia</option>
                                <option value="0" {{ old('tersedia', $->tersedia) == 0 ? 'selected' : '' }}>Tidak Tersedia</option>
                            </select>
                             @error('tersedia')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        {{-- Tombol Aksi --}}
                        <div class="form-group text-right">
                            <button type="submit" class="btn btn-primary">
                                <i class="fas fa-sync-alt"></i> Update Data
                            </button>
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </div>
</div>

@endsection
