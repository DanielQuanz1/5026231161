@extends('template')

@section('content')
    <div class="table-box">
        <h3 class="mb-4 text-primary font-weight-bold">NILAI</h3>

        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>NRP</th>
                    <th>Nilai Angka</th>
                    <th>SKS</th>
                    <th>Nilai Huruf</th>
                    <th>Bobot</th>

                </tr>
            </thead>
            <tbody>
                @foreach ($nilai as $p)
                    <tr>
                        <td>{{ $p->id }}</td>
                        <td>{{ $p->nomorinduksiswa }}</td>
                        <td>{{ $p->nilaiangka }}</td>
                        <td>{{ $p->sks }}</td>
                        <td>{{ $p->nilaihuruf }}</td>
                        <td>{{ $p->bobot }}</td>

                    </tr>
                @endforeach
            </tbody>
        </table>

        <div class="d-flex justify-content-between align-items-center mt-3">
            <a href="/eas/tambah" class="btn btn-info">
                <i class="fas fa-user-plus"></i> Tambah Data
            </a>
            <div>
                {{ $nilai->links() }}
            </div>
        </div>
    </div>
@endsection
