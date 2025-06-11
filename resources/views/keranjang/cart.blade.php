@extends('keranjang.layout')

@section('content')
<div class="d-flex align-items-center mb-4">
    <img src="https://img.icons8.com/color/40/000000/shopping-cart.png" class="logo" />
    <h4 style="font-weight: 500; margin: 0;">Shopping Cart - Keisha Store</h4>
</div>

@foreach($data as $item)
    <div class="card mb-3 p-3">
        <div class="row">
            <div class="col-md-10">
                <strong>{{ $item->NamaBarang }}</strong><br>
                Kode: {{ $item->KodeBarang }}<br>
                Jumlah: {{ $item->Jumlah }}<br>
                Harga: Rp{{ number_format($item->Harga, 0, ',', '.') }}<br>
                <strong>Total: Rp{{ number_format($item->TotalHarga, 0, ',', '.') }}</strong>
            </div>
            <div class="col-md-2 text-right d-flex align-items-center">
                <a href="/keranjang/hapus/{{ $item->id }}" class="btn btn-red">BATAL</a>
            </div>
        </div>
    </div>
@endforeach

<div class="text-center mt-4">
    <a href="/keranjang/tambah" class="btn btn-green">Cari Barang Lain</a>
</div>
@endsection
