@extends('template')
@section('content')

	<h3>Data pensil</h3>

	<a href="/pensil" class="btn btn-info"> Kembali</a>

	<br/>
	<br/>

	<form action="/pensil/store" method="post" class="form-horizontal">
		{{ csrf_field() }}

        <div class="form-group has-success">
                <label class="control-label col-sm-2" for="merkpensil">
                    Merk pensil
                </label>
                <div class="col-sm-6">
                    <input class="form-control"
                           type="text"
                           id="merkpensil"
                           placeholder="Masukkan Merk Lengkap"
                           name="merkpensil" required="required">
                </div>
        </div>
        <div class="form-group has-success">
                <label class="control-label col-sm-2" for="hargapensil">
                    Harga pensil
                </label>
                <div class="col-sm-6">
                    <input class="form-control"
                           type="text"
                           id="hargapensil"
                           placeholder="Masukkan Harga pensil"
                           name="hargapensil" required="required">
                </div>
        </div>

        <div class="form-group has-success">
                <label class="control-label col-sm-2" for="tersedia">
                    Ketersediaan
                </label>
                <div class="col-sm-6">
                    <select class="form-control" name="tersedia" id="tersedia" required="required">
                        <option value="1">Tersedia</option>
                        <option value="0">Tidak Tersedia</option>
                    </select>
                </div>
        </div>

		<div class="form-group has-success">
                <label class="control-label col-sm-2" for="berat">
                    Berat (Kg)
                </label>
                <div class="col-sm-6">
                    <input class="form-control"
                            type="number"
                            step="0.01"
                           id="berat"
                           placeholder="Masukkan Berat pensil (kg)"
                           name="berat" required="required">
                </div>
        </div>

		<input type="submit" value="Simpan Data" class="btn btn-success">
	</form>