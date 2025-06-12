@extends('template')

@section('content')

	<h3>Data Pegawai</h3>

	<a href="/pegawai" class="btn btn-info"> Kembali</a>

	<br/>
	<br/>

	<form action="/pegawai/store" method="post" class="form-horizontal">
    {{ csrf_field() }}

    <div class="form-group has-success">
        <label class="control-label col-sm-2" for="kodepegawai">Kode Pegawai</label>
        <div class="col-sm-6">
            <input class="form-control" type="text" id="kodepegawai" name="kodepegawai" placeholder="Masukkan kode pegawai" required>
        </div>
    </div>

    <div class="form-group has-success">
        <label class="control-label col-sm-2" for="namalengkap">Nama Lengkap</label>
        <div class="col-sm-6">
            <input class="form-control" type="text" id="namalengkap" name="namalengkap" placeholder="Masukkan nama lengkap" required>
        </div>
    </div>

    <div class="form-group has-success">
        <label class="control-label col-sm-2" for="divisi">Divisi</label>
        <div class="col-sm-6">
            <input class="form-control" type="text" id="divisi" name="divisi" placeholder="Masukkan divisi" required>
        </div>
    </div>

    <div class="form-group has-success">
        <label class="control-label col-sm-2" for="departemen">Departemen</label>
        <div class="col-sm-6">
            <input class="form-control" type="text" id="departemen" name="departemen" placeholder="Masukkan departemen" required>
        </div>
    </div>

    <input type="submit" value="Simpan Data" class="btn btn-success">
</form>


@endsection
