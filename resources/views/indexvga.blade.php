@extends('template')

@section('content')
<h3>Data VGA</h3>

<a href="/vga/tambah" class="btn btn-info"> + Tambah VGA Baru</a>
    <br />
    <br />


	<form action="/vga/cari" method="GET" class="form-inline">
        <label class="form -label"> Cari Data VGA :</label>
        <input type="text" name="cari" placeholder="Cari VGA .." value="{{ old('cari') }}">
		<input type="submit" value="CARI" class="btn btn-primary">
	</form>

	<br/>

    <table class="table table-striped">

        <tr>
            <th>ID</th>
            <th>Merk VGA</th>
            <th>Harga VGA</th>
            <th>Tersedia</th>
            <th>Berat(kg)</th>
            <th>Opsi</th>
        </tr>
        @foreach ($vga as $p)
            <tr>
                <td>{{ $p->id }}</td>
                <td>{{ $p->merkVGA }}</td>
                <td>{{ $p->hargaVGA }}</td>
                <td>
                    @if ($p->tersedia == 1)
                        <span class="badge badge-success">Tersedia</span>
                    @else
                        <span class="badge badge-danger">Tidak Tersedia</span>
                    @endif
                </td>
                <td>{{ $p->berat }}</td>

                <td>
                    <a href="/vga/edit/{{ $p->id }}" class="btn btn-success">Edit</a>
                    |
                    <a href="/vga/hapus/{{ $p->id }}" class="btn btn-danger">Hapus</a>
                </td>
            </tr>
        @endforeach
    </table>
</body>
 {{ $vga->links() }}
@endsection
