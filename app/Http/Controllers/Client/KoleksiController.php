<?php

namespace App\Http\Controllers\Client;

use App\Models\Buku;

use App\Models\Kategori;
use Illuminate\Support\Facades\Hash;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class KoleksiController extends Controller
{
    public function index()
    {
        $bukus = Buku::latest('id')->get();
        $kategoris = Kategori::all();
        return view('client.koleksi-buku', compact('bukus', 'kategoris'));
    }

    public function showKategori(string $id)
    {
        $kategoris = Kategori::findOrFail($id);
        $bukus = Buku::where('kategori_id', $id)->get();
        return view('client.kategori-buku', compact('kategoris', 'bukus'));
    }

    public function showBuku($id)
    {
        $buku = Buku::find($id);
        return view('client.detail-buku', compact('buku'));
    }

    public function search(Request $request)
    {
        $query = $request->input('query');

        $bukus = Buku::where('judul', 'like', "%$query%")
            ->orWhere('penulis', 'like', "%$query%")
            ->orWhere('isbn', 'like', "%$query%")
            ->orWhere('ddc', 'like', "%$query%")
            ->orWhere('sumber_buku', 'like', "%$query%")
            ->orWhere('tempat_terbit', 'like', "%$query%")
            ->orWhere('tahun_terbit', 'like', "%$query%")
            ->get();

        return view('client.search', compact('bukus'));
    }

}
