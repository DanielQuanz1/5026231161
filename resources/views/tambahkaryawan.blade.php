@extends('template')

@section('content')

<head>
    <title>Tambah Karyawan</title>
</head>

<body>

    <div class="container mt-4">
        <h3>Tambah Data Karyawan</h3>
        <a href="/karyawan" class="btn btn-secondary btn-sm mb-3">Kembali</a>

        <form action="/karyawan/store" method="post">
            {{ csrf_field() }}

            <div class="form-group row">
                <label for="kodepegawai" class="col-sm-2 col-form-label">Kode Pegawai</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" name="kodepegawai" id="kodepegawai" required>
                </div>
            </div>

            <div class="form-group row">
                <label for="namalengkap" class="col-sm-2 col-form-label">Nama Lengkap</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" name="namalengkap" id="namalengkap" required>
                </div>
            </div>

            <div class="form-group row">
                <label for="divisi" class="col-sm-2 col-form-label">Divisi</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" name="divisi" id="divisi" required>
                </div>
            </div>

            <div class="form-group row">
                <label for="departemen" class="col-sm-2 col-form-label">Departemen</label>
                <div class="col-sm-6">
                    <textarea class="form-control" name="departemen" id="departemen" required></textarea>
                </div>
            </div>

            <div class="form-group row">
                <div class="col-sm-2"></div>
                <div class="col-sm-6">
                    <button type="submit" class="btn btn-primary">Simpan Data</button>
                </div>
            </div>
        </form>
    </div>

</body>

@endsection
