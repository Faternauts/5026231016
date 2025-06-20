@extends('template')

@section('content')

<div class="container mt-4">
    <h3>Log Aktivitas Pengguna</h3>

    <table class="table table-bordered table-striped mt-3">
        <thead class="thead-dark">
            <tr>
                <th>ID</th>
                <th>Nama Route</th>
                
            </tr>
        </thead>
        <tbody>
            @foreach($logs as $log)
            <tr>
                <td>{{ $log->id }}</td>
                <td>{{ $log->namaroute }}</td>

            </tr>
            @endforeach
        </tbody>
    </table>

    <a href="/pensil" class="btn btn-secondary mt-3">← Kembali ke Halaman Pensil</a>
</div>

@endsection
