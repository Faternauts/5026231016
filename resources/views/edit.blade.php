@extends('template')

@section('content')

<div class="container mt-5 mb-5">
    <div class="row">
        <div class="col-md-8 offset-md-2">

            <div class="card border-0 shadow-sm rounded">
                <div class="card-header bg-white d-flex justify-content-between align-items-center">
                    <h4 class="font-weight-bold mb-0">Edit Data Pensil</h4>
                    <a href="{{ route('pensil.index') }}" class="btn btn-secondary">
                        <i class="fas fa-arrow-left"></i> Kembali
                    </a>
                </div>

                <div class="card-body">
                    <form action="{{ route('pensil.update', $pensil->pensil_id) }}" method="POST">
                        @csrf
                        @method('PUT')

                        <input type="hidden" name="pensil_id" value="{{ $pensil->pensil_id }}">

                        {{-- Merk --}}
                        <div class="form-group">
                            <label for="merk">Merk Pensil</label>
                            <input type="text" class="form-control @error('merk') is-invalid @enderror"
                                   name="merk" id="merk" placeholder="Contoh: Faber-Castell"
                                   value="{{ old('merk', $pensil->merk) }}">

                            @error('merk')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="row">
                            {{-- Harga --}}
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="price">Harga</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">Rp.</span>
                                        </div>
                                        <input type="number" class="form-control @error('price') is-invalid @enderror"
                                               name="price" id="price" placeholder="Contoh: 5000"
                                               value="{{ old('price', $pensil->price) }}">
                                    </div>
                                    @error('price')
                                        <div class="invalid-feedback d-block">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>

                            {{-- Berat --}}
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="weight">Berat (gram)</label>
                                    <div class="input-group">
                                        <input type="number" step="0.01" class="form-control @error('weight') is-invalid @enderror"
                                               name="weight" id="weight" placeholder="Contoh: 8.5"
                                               value="{{ old('weight', $pensil->weight) }}">
                                        <div class="input-group-append">
                                            <span class="input-group-text">gram</span>
                                        </div>
                                    </div>
                                    @error('weight')
                                        <div class="invalid-feedback d-block">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                        </div>

                        {{-- Ketersediaan --}}
                        <div class="form-group">
                            <label for="availability">Ketersediaan</label>
                            <select class="form-control @error('availability') is-invalid @enderror" name="availability" id="availability">
                                <option value="1" {{ old('availability', $pensil->availability) == 1 ? 'selected' : '' }}>Tersedia</option>
                                <option value="0" {{ old('availability', $pensil->availability) == 0 ? 'selected' : '' }}>Tidak Tersedia</option>
                            </select>
                            @error('availability')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        {{-- Tombol --}}
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
