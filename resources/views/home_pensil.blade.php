@extends('template')

@section('content')

<div class="container mt-5 mb-5">
    @if (session('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @endif

    <div class="row">
        <div class="col-md-12">
            <div class="card border-0 shadow-sm rounded">
                <div class="card-header bg-white d-flex justify-content-between align-items-center">
                    <h4 class="font-weight-bold mb-0">Manajemen Data Pensil</h4>
                    <a href="{{ url('/tambah') }}" class="btn btn-primary">
                        <i class="fas fa-plus"></i> Tambah Baru
                    </a>
                </div>

                <div class="card-body">
                    <form action="{{ url('/cari') }}" method="GET" class="mb-4">
                        <div class="input-group">
                            <input type="text" name="cari" class="form-control" placeholder="Cari berdasarkan merk ..." value="{{ request('cari') }}">
                            <div class="input-group-append">
                                <button class="btn btn-outline-secondary" type="submit">
                                    <i class="fas fa-search"></i> Cari
                                </button>
                            </div>
                        </div>
                    </form>

                    <div class="table-responsive">
                        <table class="table table-hover table-striped">
                            <thead class="thead-dark">
                                <tr>
                                    <th scope="col" class="text-center">Merk</th>
                                    <th scope="col" class="text-center">Harga</th>
                                    <th scope="col" class="text-center">Berat (g)</th>
                                    <th scope="col" class="text-center">Ketersediaan</th>
                                    <th scope="col" class="text-center" style="width: 15%">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($pensil as $t)
                                <tr>
                                    <td class="text-center">{{ $t->merk }}</td>
                                    <td class="text-center">Rp. {{ number_format($t->price, 0, ',', '.') }}</td>
                                    <td class="text-center">{{ number_format($t->weight, 2, ',', '.') }} g</td>
                                    <td class="text-center">
                                        @if($t->availability == 1)
                                            <span class="badge badge-success">Tersedia</span>
                                        @else
                                            <span class="badge badge-secondary">Tidak Tersedia</span>
                                        @endif
                                    </td>
                                    <td class="text-center">
                                        <div class="d-flex justify-content-center align-items-center" style="gap: 5px;">
                                            <a href="{{ url('/edit/'.$t->pensil_id) }}" class="btn btn-sm btn-info">
                                                <i class="fas fa-edit"></i> Edit
                                            </a>
                                            <a href="{{ url('/hapus/'.$t->pensil_id) }}" class="btn btn-sm btn-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">
                                                <i class="fas fa-trash-alt"></i> Hapus
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                                @empty
                                <tr>
                                    <td colspan="5" class="text-center">
                                        <div class="alert alert-danger">
                                            Data pensil belum tersedia atau tidak ditemukan.
                                        </div>
                                    </td>
                                </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>

                <div class="card-footer bg-white d-flex justify-content-end">
                    {{ $pensil->links() }}
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
