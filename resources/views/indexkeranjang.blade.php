@extends('template')

@section('content')
	<h3>Data Keranjang Belanja</h3>
    <br>

	<table class="table table-striped table-hover">
		<tr>
			<th>Kode Pembelian</th>
			<th>Kode Barang</th>
			<th>Jumlah Pembelian</th>
			<th>Harga per Item</th>
			<th>Total</th>
            <th>Action</th>
		</tr>
		@foreach($keranjangbelanja as $k)
		<tr>
			<td>{{ $k->ID }}</td>
            <td>{{ $k->KodeBarang }}</td>
            <td>{{ $k->Jumlah }}</td>
            <td>{{ number_format($k->Harga, 0, ',', '.') }}</td>
            <td>{{ number_format($k->Jumlah * $k->Harga, 0, ',', '.') }}</td>
			<td>
				<a href="/keranjangbelanja/beli" class="btn btn-success">Beli</a>
				<a href="/keranjangbelanja/batal/{{ $k->ID }}" class="btn btn-danger" onclick="return confirm('Apakah Anda yakin ingin membatalkan pembelian ini?')">Batal</a>
			</td>
		</tr>
		@endforeach
	</table>

    <div class="mt-3">
        <strong>Total Data: {{ count($keranjangbelanja) }}</strong>
    </div>
@endsection
