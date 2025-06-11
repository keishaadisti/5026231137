<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KeranjangController extends Controller
{
    public function start()
    {
        return view('keranjang.start');
    }

    public function form()
    {
        return view('keranjang.form');
    }

    public function store(Request $request)
    {
        $jumlah = (int)$request->Jumlah;
        $harga = (float)$request->Harga;
        $total = $jumlah * $harga;

        DB::table('keranjangbelanja')->insert([
            'KodeBarang' => $request->KodeBarang,
            'NamaBarang' => $request->NamaBarang,
            'Jumlah' => $jumlah,
            'Harga' => $harga,
            'TotalHarga' => $total
        ]);

        return redirect('/keranjang/cart');
    }

    public function cart()
    {
        $data = DB::table('keranjangbelanja')->get();
        return view('keranjang.cart', ['data' => $data]);
    }

    public function hapus($id)
    {
        DB::table('keranjangbelanja')->where('id', $id)->delete();
        return redirect('/keranjang/cart');
    }
}
