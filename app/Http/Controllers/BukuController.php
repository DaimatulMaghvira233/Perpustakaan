<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BukuController extends Controller
{
    public function index()
    {
        $dataBuku = [
            'Pemrograman dasar',
            'Statistika',
            'Basis Data'
        ];

        return view('buku', ['buku' => $dataBuku]);
    }
}
