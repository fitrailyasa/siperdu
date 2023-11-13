<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Buku;
use App\Models\Penerbit;
use App\Models\Rak;
use App\Models\Kategori;
use Illuminate\Http\Request;

class AdminBukuController extends Controller
{
    public function index()
    {
        $bukus = Buku::latest()->get();
        return view('admin.buku.index', compact('bukus'));
    }

    public function create()
    {
        $bukus = Buku::all();
        $penerbits = Penerbit::all();
        $raks = Rak::all();
        $kategoris = Kategori::all();
        return view('admin.buku.create', compact('penerbits', 'raks', 'kategoris', 'bukus'));
    }

    public function store(Request $request)
{
    $request->validate([
        'judul' => 'required|max:255',
        'tanggal' => 'required|date',
        'penulis' => 'required|max:255',
        'tahun_terbit' => 'required|max:255',
        'tempat_terbit' => 'required|max:255',
        'sumber_buku' => 'required|max:255',
        'keterangan' => 'required|max:255',
        'penerbit_id' => 'required',
        'kategori_id' => 'required',
        'rak_id' => 'required',
        'stok' => 'required|numeric',
        'halaman' => 'required|numeric',
        'tinggi' => 'required|numeric',
        'ddc' => 'required|max:255',
        'isbn' => 'required|max:255',
    ]);

    // Create a new Buku instance with the actual values
    $buku = Buku::create([
        'judul' => $request->input('judul'),
        'tanggal' => $request->input('tanggal'),
        'penulis' => $request->input('penulis'),
        'tahun_terbit' => $request->input('tahun_terbit'),
        'tempat_terbit' => $request->input('tempat_terbit'),
        'sumber_buku' => $request->input('sumber_buku'),
        'keterangan' => $request->input('keterangan'),
        'penerbit_id' => $request->input('penerbit_id'),
        'kategori_id' => $request->input('kategori_id'),
        'rak_id' => $request->input('rak_id'),
        'stok' => $request->input('stok'),
        'halaman' => $request->input('halaman'),
        'tinggi' => $request->input('tinggi'),
        'ddc' => $request->input('ddc'),
        'isbn' => $request->input('isbn'),
    ]);

    if ($request->hasFile('sampul')) {
        $sampul = $request->file('sampul');
        $nama_file = time() . '_' . $sampul->getClientOriginalName();
        $buku->sampul = $nama_file;
        $buku->update();  // Update the model to save the 'sampul' field
        $sampul->move(public_path('assets/images/buku/'), $nama_file);
    }

    return redirect()->route('admin.buku.index')->with('sukses', 'Berhasil Tambah Data!');
}


    public function show($id)
    {
        $buku = Buku::findOrFail($id);
        return view('admin.buku.read', compact('buku'));
    }

    public function edit($id)
    {
        $buku = Buku::findOrFail($id);
        $penerbits = Penerbit::all();
        $raks = Rak::all();
        $kategoris = Kategori::all();
        return view('admin.buku.update', compact('buku', 'penerbits', 'raks', 'kategoris'));
    }

    public function update(Request $request, $id)
    {
        $buku = Buku::where('id', $id)->first();
        $request->validate([
            'judul' => 'required|max:255',
            'tanggal' => now(),
            'penulis' => 'required|max:255',
            'tahun_terbit' => 'required|max:255',
            'tempat_terbit' => 'required|max:255',
            'sumber_buku' => 'required|max:255',
            'keterangan' => 'required|max:255',
            'penerbit_id' => 'required',
            'kategori_id' => 'required',
            'rak_id' => 'required',
            'stok' => 'required|numeric',
            'halaman' => 'required|numeric',
            'tinggi' => 'required|numeric',
            'ddc' => 'required|max:255',
            'isbn' => 'required|max:255',
        ]);

        if ($request->hasFile('sampul')) {
            $sampul = $request->file('sampul');
            $nama_file = time() . '_' . $sampul->getClientOriginalName();
            $buku->sampul = $nama_file;
            $buku->update();
            $sampul->move(public_path('assets/images/buku/'), $nama_file);
        }

        return redirect()->route('admin.buku.index')->with('sukses', 'Berhasil Edit Data!');
    }

    public function destroy($id)
    {
        $buku = Buku::findOrFail($id);
        $buku->delete();

        return redirect()->route('admin.buku.index')->with('sukses', 'Berhasil Hapus Data!');
    }
}
