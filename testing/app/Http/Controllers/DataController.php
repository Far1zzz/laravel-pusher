<?php

namespace App\Http\Controllers;

use App\Models\Data;
use Illuminate\Http\Request;

class DataController extends Controller
{
    public function index()
    {
        $count = Data::count();
        return view('data', compact('count'));
    }

    public function checkData()
    {
        $count = Data::count();
        return response()->json(['count' => $count]);
    }
}
