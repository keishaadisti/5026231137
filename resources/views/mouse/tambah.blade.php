@extends('layout_mouse')
@section('content')
    <h3>Tambah Data Mouse</h3>

    <a href="/mouse" class="btn btn-info mb-3">Kembali</a>

    <form action="/mouse/store" method="post" class="form-horizontal">
        {{ csrf_field() }}

        <div class="form-group row">
            <label class="col-sm-2 col-form-label" for="merkmouse">Merk Mouse</label>
            <div class="col-sm-6">
                <input class="form-control" type="text" id="merkmouse" name="merkmouse" placeholder="Masukkan Merk Mouse" required>
            </div>
        </div>

        <div class="form-group row">
            <label class="col-sm-2 col-form-label" for="hargamouse">Harga</label>
            <div class="col-sm-6">
                <input class="form-control" type="number" id="hargamouse" name="hargamouse" placeholder="Masukkan Harga Mouse" required>
            </div>
        </div>

        <div class="form-group row">
            <label class="col-sm-2 col-form-label" for="tersedia">Tersedia?</label>
            <div class="col-sm-6">
                <select class="form-control" id="tersedia" name="tersedia" required>
                    <option value="1">Ya</option>
                    <option value="0">Tidak</option>
                </select>
            </div>
        </div>

        <div class="form-group row">
            <label class="col-sm-2 col-form-label" for="berat">Berat (gram)</label>
            <div class="col-sm-6">
                <input class="form-control" type="number" step="0.01" id="berat" name="berat" placeholder="Masukkan Berat Mouse" required>
            </div>
        </div>

        <div class="form-group row">
            <div class="col-sm-6 offset-sm-2">
                <input type="submit" class="btn btn-success" value="Simpan Data">
            </div>
        </div>
    </form>
@endsection
