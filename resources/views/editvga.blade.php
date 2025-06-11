@extends('template')

@section('content')


    <h3>Edit VGA</h3>

    <a href="/vga"> Kembali</a>

    <br />
    <br />

    @foreach ($vga as $p)
        <form action="/vga/update" method="post">
            {{ csrf_field() }}
            <input type="hidden" name="id" value="{{ $p->id }}"> <br />
            Merk VGA <input type="text" required="required" name="merkVGA" value="{{ $p->merkVGA }}"> <br />
            Harga VGA <input type="text" required="required" name="hargaVGA" value="{{ $p->hargaVGA }}"> <br />
            Tersedia <input type="number" required="required" name="tersedia" value="{{ $p->tersedia }}"> <br />
            Berat
            <textarea required="required" name="berat">{{ $p->berat }}</textarea> <br />
            <input type="submit" value="Simpan Data">
        </form>
    @endforeach



@endsection
