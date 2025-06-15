@extends('template')

@section('title', '5026231161 - Muhammad Daniel Alfarisi    ')

@section('content')
    <h2>Selamat Datang di Web Counter</h2>

    <div class="alert alert-success fs-4">
    Anda Pengunjung ke: <strong>{{ $jumlah }}</strong>
</div>

    @if ($jumlah == 1)
        <p class="text-muted">saat pertama kali script dijalankan</p>
    @else
        <p class="text-muted">bertambah 1 setelah di refresh</p>
    @endif
@endsection
