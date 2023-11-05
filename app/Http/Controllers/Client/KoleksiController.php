<?php

namespace App\Http\Controllers\Client;

use App\Models\Buku;
use Illuminate\Support\Facades\Hash;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class KoleksiController extends Controller
{
    public function index()
    {
        $bukus = Buku::all();
        return view('client.koleksi-buku', compact('bukus'));
    }

    public function show($id)
    {
        $buku = Buku::find($id);
        return view('client.detail-buku', compact('buku'));
    }
}
