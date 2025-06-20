@extends('template')

@section('content')

<head>
    <title>Tambah nilai</title>
</head>

<body>

    <div class="container mt-4">
        <h3>Tambah Data nilai</h3>
        <a href="/eas" class="btn btn-secondary btn-sm mb-3">Kembali</a>

        <form action="/eas/store" method="post">
            {{ csrf_field() }}

            <div class="form-group row">
                <label for="id" class="col-sm-2 col-form-label">ID</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" name="id" id="id" required>
                </div>
            </div>

            <div class="form-group row">
                <label for="nomorinduksiswa" class="col-sm-2 col-form-label">NRP</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" name="nomorinduksiswa" id="nomorinduksiswa" required>
                </div>
            </div>

            <div class="form-group row">
                <label for="nilaiangka" class="col-sm-2 col-form-label">Nilai Angka</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" name="nilaiangka" id="nilaiangka" required>
                </div>
            </div>

            <div class="form-group row">
                <label for="sks" class="col-sm-2 col-form-label">SKS</label>
                <div class="col-sm-6">
                    <textarea class="form-control" name="sks" id="sks" required></textarea>
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
