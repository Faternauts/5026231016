@extends('template')

@section('content')

<div class="container mt-4">
  <div class="card shadow">
    <div class="card-header bg-primary text-white">
      <h4 class="mb-0">Form Tambah Data Pensil</h4>
    </div>
    <div class="card-body">

      <a href="/pensil" class="btn btn-secondary mb-3">← Kembali</a>

      <form action="/pensil/store" method="post">
        {{ csrf_field() }}

        <div class="form-group">
          <label for="merkpensil">Merk Pensil</label>
          <input type="text" class="form-control" id="merkpensil" name="merkpensil" placeholder="Masukkan Merk Lengkap" required>
        </div>

        <div class="form-group">
          <label for="hargapensil">Harga Pensil</label>
          <input type="text" class="form-control" id="hargapensil" name="hargapensil" placeholder="Masukkan Harga Pensil" required>
        </div>

        <div class="form-group">
          <label for="tersedia">Ketersediaan</label>
          <select class="form-control" id="tersedia" name="tersedia" required>
            <option value="1">Tersedia</option>
            <option value="0">Tidak Tersedia</option>
          </select>
        </div>

        <div class="form-group">
          <label for="berat">Berat (Kg)</label>
          <input type="number" class="form-control" id="berat" name="berat" step="0.01" placeholder="Masukkan Berat Pensil (kg)" required>
        </div>

        <button type="submit" class="btn btn-success">Simpan Data</button>
      </form>

    </div>
  </div>
</div>

@endsection
