<?php

namespace App\Http\Controllers;

use App\Models\Beli;
use Illuminate\Http\Request;

class BeliController extends Controller
{
    public function index()
    {
        $beli = Beli::all();
        $count = Beli::count();
        return response()->json([
            'data' => $beli->map(function ($beli) {
                return [
                    'id' => $beli->id,
                    'nama_barang' => $beli->nama_barang,
                    'kode_baran' => $beli->kode_barang,
                ];
            }),
            'count' => $count
        ]);
    }

    public function show()
    {
        $beli = Beli::all();
        $count = Beli::count();
        return view('beli', ['beli' => $beli, 'count' => $count]);
    }
}
