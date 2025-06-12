@extends('template')

@section('content')
    <h3>Edit Data pensil</h3>

    <a href="/pensil" class="btn btn-info">Kembali</a>
    <br /><br />

    <form action="/pensil/update" method="post" class="form-horizontal">
        {{ csrf_field() }}
        <input type="hidden" name="id" value="{{ $pensil->id_pensil }}">

        <div class="form-group has-success">
            <label class="control-label col-sm-2" for="merkpensil">Merk pensil</label>
            <div class="col-sm-6">
                <input class="form-control" type="text" id="merkpensil" name="merkpensil"
                    value="{{ $pensil->merkpensil }}" placeholder="Masukkan Merk pensil" required>
            </div>
        </div>

        <div class="form-group has-success">
            <label class="control-label col-sm-2" for="hargapensil">Harga pensil</label>
            <div class="col-sm-6">
                <input class="form-control" type="number" id="hargapensil" name="hargapensil"
                    value="{{ $pensil->hargapensil }}" placeholder="Masukkan Harga pensil" required>
            </div>
        </div>

        <div class="form-group has-success">
            <label class="control-label col-sm-2" for="tersedia">Ketersediaan</label>
            <div class="col-sm-6">
                <select class="form-control" id="tersedia" name="tersedia" required>
                    <option value="1" {{ $pensil->tersedia == 1 ? 'selected' : '' }}>Tersedia</option>
                    <option value="0" {{ $pensil->tersedia == 0 ? 'selected' : '' }}>Tidak Tersedia</option>
                </select>
            </div>
        </div>

        <div class="form-group has-success">
            <label class="control-label col-sm-2" for="berat">Berat (Kg)</label>
            <div class="col-sm-6">
                <input class="form-control" type="number" step="0.01" id="berat"
                    name="berat" value="{{ $pensil->berat }}" placeholder="Masukkan Berat pensil (kg)" required>
            </div>
        </div>

        <input type="submit" value="Simpan Data" class="btn btn-success">
    </form>
@endsection
