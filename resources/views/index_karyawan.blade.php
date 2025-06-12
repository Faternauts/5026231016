@extends('template')

@section('content')

<style>
    .card-header {
        font-weight: bold;
        background-color: #343a40;
        color: white;
    }
    .btn-action {
        width: 100px;
    }
    /* Style untuk pagination agar rapi */
    .pagination {
        margin-bottom: 0;
    }
</style>

<div class="row">
    <div class="col-md-12">

        {{-- Pesan Sukses (sesuai dengan redirect()->with('success',...)) --}}
        @if (session('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('success') }}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        @endif

        {{-- Card untuk membungkus tabel dan tombol --}}
        <div class="card border-0 shadow-sm rounded">
            <div class="card-header text-center">
                <h4>Manajemen Data Karyawan</h4>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered table-striped table-hover">
                        <thead class="thead-dark">
                            <tr>
                                <th scope="col" class="text-center">No</th>
                                <th scope="col" class="text-center">Kode Pegawai</th>
                                <th scope="col" class="text-center">Nama Lengkap</th>
                                <th scope="col" class="text-center">Divisi</th>
                                <th scope="col" class="text-center">Departemen</th>
                                <th scope="col" class="text-center" style="width: 15%">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            {{-- Loop data dari collection paginasi $karyawan --}}
                            @forelse ($karyawan as $index => $item)
                            <tr>
                                {{-- Menggunakan firstItem() untuk nomor urut yang benar pada paginasi --}}
                                <td class="text-center">{{ $karyawan->firstItem() + $index }}</td>
                                <td class="text-center">{{ $item->kodepegawai }}</td>
                                <td>{{ strtoupper($item->namalengkap) }}</td>
                                <td class="text-center">{{ $item->divisi }}</td>
                                <td class="text-center">{{ strtolower($item->departemen) }}</td>
                                <td class="text-center">
                                    {{-- Link ini mengarah ke route 'karyawan.hapus' --}}
                                    <a href="{{ route('karyawan.hapus', ['kodepegawai' => $item->kodepegawai]) }}" class="btn btn-sm btn-danger btn-action" onclick="return confirm('Apakah Anda Yakin ingin menghapus data ini?');">
                                        <i class="fas fa-trash-alt"></i> HAPUS
                                    </a>
                                </td>
                            </tr>
                            @empty
                            <tr>
                                <td colspan="6" class="text-center">
                                    <div class="alert alert-danger">
                                        Data Karyawan belum tersedia.
                                    </div>
                                </td>
                            </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="card-footer bg-white d-flex justify-content-between align-items-center">
                {{-- Tombol ini mengarah ke route 'karyawan.tambah' --}}
                <a href="{{ route('karyawan.tambah') }}" class="btn btn-primary">
                    <i class="fas fa-plus"></i> Tambah Data
                </a>
                {{-- Menampilkan link Paginasi --}}
                {{ $karyawan->links() }}
            </div>
        </div>
    </div>
</div>

@endsection
