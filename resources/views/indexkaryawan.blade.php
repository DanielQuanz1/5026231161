@extends('template')

@section('content')
    <div class="table-box">
        <h3 class="mb-4 text-primary font-weight-bold">Data Karyawan</h3>

        <table class="table">
            <thead>
                <tr>
                    <th>Kode Pegawai</th>
                    <th>Nama Lengkap</th>
                    <th>Divisi</th>
                    <th>Departemen</th>
                    <th>Opsi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($karyawan as $p)
                    <tr>
                        <td>{{ $p->kodepegawai }}</td>
                        <td>{{ strtoupper($p->namalengkap) }}</td>
                        <td>{{ $p->divisi }}</td>
                        <td>{{ strtolower($p->departemen) }}</td>
                        <td>
                            <a href="/karyawan/hapus/{{ $p->kodepegawai }}" class="btn btn-danger btn-sm">
                                <i class="fas fa-trash-alt"></i> Hapus
                            </a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        <div class="d-flex justify-content-between align-items-center mt-3">
            <a href="/karyawan/tambah" class="btn btn-info">
                <i class="fas fa-user-plus"></i> Tambah Karyawan Baru
            </a>
            <div>
                {{ $karyawan->links() }}
            </div>
        </div>
    </div>
@endsection
