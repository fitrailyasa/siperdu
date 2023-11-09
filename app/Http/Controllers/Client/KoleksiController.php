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
        $bukus = Buku::latest('id')->get();
        return view('client.koleksi-buku', compact('bukus'));
    }

    public function show($id)
    {
        $buku = Buku::find($id);
        return view('client.detail-buku', compact('buku'));
    }

    public function search(Request $request)
    {
        $query = $request->input('query');

        $bukus = Buku::where('judul', 'like', "%$query%")
                    ->orWhere('penulis', 'like', "%$query%")
                    ->get();

        return view('client.search', compact('bukus'));
    }

}
