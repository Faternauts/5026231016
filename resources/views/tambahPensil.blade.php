@extends('template')

@section('content')

<div class="container mt-5 mb-5">
    <div class="row">
        <div class="col-md-8 offset-md-2">
            <div class="card border-0 shadow-sm rounded">
                <div class="card-header bg-white d-flex justify-content-between align-items-center">
                    <h4 class="font-weight-bold mb-0">Tambah Data Pensil Baru</h4>
                    <a href="{{ route('pensil.index') }}" class="btn btn-secondary">
                        <i class="fas fa-arrow-left"></i> Kembali
                    </a>
                </div>

                <div class="card-body">
                    <form action="{{ route('pensil.store') }}" method="POST">
                        @csrf

                        {{-- Optional: pensil_id jika tidak auto-increment --}}
                        <!-- <input type="hidden" name="pensil_id" value="{{ old('pensil_id') }}"> -->

                        {{-- Merk --}}
                        <div class="form-group">
                            <label for="merk">Merk Pensil</label>
                            <input type="text" class="form-control @error('merk') is-invalid @enderror"
                                   name="merk" id="merk" placeholder="Contoh: Faber-Castell" value="{{ old('merk') }}">
                            @error('merk')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="row">
                            {{-- Price --}}
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="price">Harga</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">Rp</span>
                                        </div>
                                        <input type="number" class="form-control @error('price') is-invalid @enderror"
                                               name="price" id="price" placeholder="Contoh: 15000" value="{{ old('price') }}">
                                    </div>
                                    @error('price')
                                        <div class="invalid-feedback d-block">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>

                            {{-- Weight --}}
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="weight">Berat (gram)</label>
                                    <div class="input-group">
                                        <input type="number" step="0.01" class="form-control @error('weight') is-invalid @enderror"
                                               name="weight" id="weight" placeholder="Contoh: 50.5" value="{{ old('weight') }}">
                                        <div class="input-group-append">
                                            <span class="input-group-text">g</span>
                                        </div>
                                    </div>
                                    @error('weight')
                                        <div class="invalid-feedback d-block">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                        </div>

                        {{-- Availability --}}
                        <div class="form-group">
                            <label for="availability">Ketersediaan</label>
                            <select class="form-control @error('availability') is-invalid @enderror" name="availability" id="availability">
                                <option value="1" {{ old('availability') == '1' ? 'selected' : '' }}>Tersedia</option>
                                <option value="0" {{ old('availability') == '0' ? 'selected' : '' }}>Tidak Tersedia</option>
                            </select>
                            @error('availability')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        {{-- Tombol Simpan --}}
                        <div class="form-group text-right">
                            <button type="submit" class="btn btn-success">
                                <i class="fas fa-save"></i> Simpan Data
                            </button>
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </div>
</div>

@endsection
