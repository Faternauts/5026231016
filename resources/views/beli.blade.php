@extends('template')

@section('content')Add commentMore actions
    <h3>Tambah Data Keranjang Belanja</h3>

    <a href="/keranjangbelanja" class="btn btn-info">Kembali</a>
    <br>
    <br>

    <form action="/keranjangbelanja/store" method="post" class="form-horizontal">
        {{ csrf_field() }}

        <div class="form-group has-success">
            <label class="control-label col-sm-2" for="KodeBarang">Kode Barang</label>
            <div class="col-sm-6">
                <input class="form-control" type="text" id="KodeBarang" name="KodeBarang" placeholder="Masukkan Kode Barang" required>
            </div>
        </div>

        <div class="form-group has-success">
            <label class="control-label col-sm-2" for="Jumlah">Jumlah</label>
            <div class="col-sm-6">
                <input class="form-control" type="text" id="Jumlah" name="Jumlah" placeholder="Masukkan Jumlah" required>
            </div>
        </div>

        <div class="form-group has-success">
            <label class="control-label col-sm-2" for="Harga">Harga per Item</label>
            <div class="col-sm-6">
                <input class="form-control" type="text" id="Harga" name="Harga" placeholder="Masukkan Harga per Item" required>
            </div>
        </div>

        <input type="submit" value="Simpan Data" class="btn btn-success">
    </form>
@endsection