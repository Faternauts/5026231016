@extends('template')

@section('content')

	<h3>Data Pegawai</h3>

	<a href="/pegawai" class="btn btn-info"> Kembali</a>

	<br/>
	<br/>

	<form action="/pegawai/store" method="post" class="form-horizontal">
		{{ csrf_field() }}
        <div class="form-group has-success">
            <label class="control-label col-sm-2" for="nama">
                {{-- for="nama" merefer ke id pada input --}}
                Nama
            </label>
            <div class="col-sm-6">
                <input class="form-control"
                    type="text"
                    id="nama"
                    placeholder="Masukkan nama lengkap"
                    name="nama" required="required">
            </div>
        </div>

        <div class="form-group has-success">
            <label class="control-label col-sm-2" for="jabatan">
                {{-- for="nama" merefer ke id pada input --}}
                Jabatan
            </label>
            <div class="col-sm-6">
                <input class="form-control"
                    type="text"
                    id="jabatan"
                    placeholder="Masukkan jabatan saat ini"
                    name="jabatan" required="required">
            </div>
        </div>

        <div class="form-group has-success">
            <label class="control-label col-sm-2" for="umur">
                {{-- for="nama" merefer ke id pada input --}}
                Umur
            </label>
            <div class="col-sm-6">
                <input class="form-control"
                    type="text"
                    id="umur"
                    placeholder="Masukkan umur"
                    name="umur" required="required">
            </div>
        </div>

        <div class="form-group has-success">
            <label class="control-label col-sm-2" for="alamat">
                {{-- for="nama" merefer ke id pada input --}}
                Alamat
            </label>
            <div class="col-sm-6">
                <textarea class="form-control"
                    type="text"
                    id="alamat"
                    placeholder="Masukkan  lengkap dan kota"
                    name="alamat" required="required">
                </textarea>
            </div>
        </div>
		<input type="submit" value="Simpan Data" class="btn btn-success">
	</form>

@endsection
