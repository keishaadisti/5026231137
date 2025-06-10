<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MouseController extends Controller
{
    public function index()
    {
        $mouse = DB::table('mouse')->paginate(10);
        return view('mouse.list', ['mouse' => $mouse]);
    }

    public function tambah()
    {
        return view('mouse.tambah');
    }

    public function store(Request $request)
    {
        DB::table('mouse')->insert([
            'merkmouse' => $request->merkmouse,
            'hargamouse' => $request->hargamouse,
            'tersedia' => $request->tersedia,
            'berat' => $request->berat
        ]);
        return redirect('/mouse');
    }
}
