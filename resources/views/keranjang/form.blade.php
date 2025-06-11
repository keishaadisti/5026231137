@extends('keranjang.layout')

@section('content')
<h4 class="mb-4">Input Barang</h4>
<form action="/keranjang/store" method="POST">
    @csrf
    <div class="form-group">
        <label>Kode Barang</label>
        <input type="text" class="form-control" name="KodeBarang" required>
    </div>
    <div class="form-group">
        <label>Nama Barang</label>
        <input type="text" class="form-control" name="NamaBarang" required>
    </div>
    <div class="form-group">
        <label>Jumlah</label>
        <input type="number" class="form-control" name="Jumlah" id="jumlah" required>
    </div>
    <div class="form-group">
        <label>Harga</label>
        <input type="number" class="form-control" name="Harga" id="harga" required>
    </div>
    <div class="form-group">
        <label>Total Harga</label>
        <input type="text" class="form-control" id="total" readonly>
    </div>
    <button type="submit" class="btn btn-pink">Beli</button>
</form>

<script>
    const jumlah = document.getElementById('jumlah');
    const harga = document.getElementById('harga');
    const total = document.getElementById('total');

    function updateTotal() {
        const j = parseInt(jumlah.value) || 0;
        const h = parseFloat(harga.value) || 0;
        const t = j * h;
        total.value = "Rp" + t.toLocaleString("id-ID");
    }

    jumlah.addEventListener('input', updateTotal);
    harga.addEventListener('input', updateTotal);
</script>
@endsection
