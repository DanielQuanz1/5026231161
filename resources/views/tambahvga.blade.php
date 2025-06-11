@extends('template')

@section('content')

<head>
    <title>Tambah VGA</title>
</head>

<body>

    <h3>Data VGA</h3>

    <a href="/vga"> Kembali</a>

    <br />
    <br />
    {{-- action mengarah ke pegawai/store untuk dilakukan routing --}}
    <form action="/vga/store" method="post">
        {{ csrf_field() }}
        <div class="row">
            <div class="col-2">
                 <label class="control-label">Merk VGA </label>
            </div>
            <div class="col-6">
            </div>
        </div>
        <input type="text" name="merkVGA" required="required"> <br />

        <div class="row">
            <div class="col-2">
                 <label class="control-label">Harga VGA </label>
            </div>
            <div class="col-6">
            </div>
        </div>
        <input type="text" name="hargaVGA" required="required"> <br />

        <div class="row">
            <div class="col-2">
                 <label class="control-label">Tersedia </label>
            </div>
            <div class="col-6">
            </div>
        </div>
        <input type="number" name="tersedia" required="required"> <br />

        <div class="row">
            <div class="col-2">
                 <label class="control-label">Berat </label>
            </div>
            <div class="col-6">
            </div>
        </div>
        <textarea name="berat" required="required"></textarea> <br />


        <input type="submit" value="Simpan Data">
    </form>

</body>

@endsection
