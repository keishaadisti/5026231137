@extends('layout_mouse')
@section('content')

<h3>Daftar Mouse</h3>

<a href="/mouse/tambah" class="btn btn-primary mb-3">+ Tambah Mouse</a>

<table class="table table-bordered table-striped">
    <thead class="thead-light">
        <tr>
            <th>ID</th>
            <th>Merk</th>
            <th>Harga</th>
            <th>Tersedia</th>
            <th>Berat (gram)</th>
        </tr>
    </thead>
    <tbody>
        @foreach($mouse as $m)
        <tr>
            <td>{{ $m->id }}</td>
            <td>{{ $m->merkmouse }}</td>
            <td>{{ $m->hargamouse }}</td>
            <td>{{ $m->tersedia ? 'Ya' : 'Tidak' }}</td>
            <td>{{ $m->berat }}</td>
        </tr>
        @endforeach
    </tbody>
</table>

{{ $mouse->links() }}

@endsection
s
