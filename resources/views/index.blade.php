@extends('template')

@section('content')

    <h3>Data Pegawai</h3>

    <a href="/pegawai/tambah" class="btn btn-primary mb-3">+ Tambah Pegawai Baru</a>

    <p>Cari Data Pegawai:</p>
    <form action="/pegawai/cari" method="GET" class="form-inline mb-3">
        <input type="text" class="form-control mr-2" name="cari" placeholder="Cari Pegawai .." value="{{ request('cari') }}">
        <input type="submit" value="CARI" class="btn btn-info">
    </form>

    <table class="table table-bordered table-striped">
        <thead class="thead-dark">
            <tr>
                <th>Kode Pegawai</th>
                <th>Nama Lengkap</th>
                <th>Divisi</th>
                <th>Departemen</th>
                <th>Opsi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($pegawai as $p)
            <tr>
                <td>{{ $p->kodepegawai }}</td>
                <td>{{ $p->namalengkap }}</td>
                <td>{{ $p->divisi }}</td>
                <td>{{ $p->departemen }}</td>
                <td>
                    <a href="/pegawai/edit/{{ $p->kodepegawai }}" class="btn btn-success btn-sm">Edit</a>
                    <a href="/pegawai/hapus/{{ $p->kodepegawai }}" class="btn btn-danger btn-sm" onclick="return confirm('Yakin ingin menghapus data ini?')">Hapus</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

    {{ $pegawai->links() }}

@endsection
