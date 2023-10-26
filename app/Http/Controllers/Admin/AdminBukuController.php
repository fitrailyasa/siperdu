<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Buku;
use Illuminate\Http\Request;

class AdminBukuController extends Controller
{
    public function index()
    {
        $bukus = Buku::all();
        return view('admin.buku.index', compact('bukus'));
    }

    public function create()
    {
        return view('admin.buku.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'judul' => 'required|max:255',
            'tanggal' => 'required|date',
            'slug' => 'required|max:255',
            'sampul' => 'required|max:2048',
            'penulis' => 'required|max:255',
            'tahun_terbit' => 'required|max:255',
            'tempat_terbit' => 'required|max:255',
            'no_inventaris' => 'required|integer',
            'sumber_buku' => 'required|max:255',
            'keterangan' => 'required|max:255',
            'penerbit_id' => 'required',
            'kategori_id' => 'required',
            'rak_id' => 'required',
            'stok' => 'required|integer',
            'halaman' => 'required|integer',
            'tinggi' => 'required|integer',
            'ddc' => 'required|max:255',
            'isbn' => 'required|max:255',
        ]);

        Buku::create($request->all());

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
        return view('admin.buku.update', compact('buku'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'judul' => 'required|max:255',
            'tanggal' => 'required|date',
            'slug' => 'required|max:255',
            'sampul' => 'required|max:255',
            'penulis' => 'required|max:255',
            'tahun_terbit' => 'required|max:255',
            'tempat_terbit' => 'required|max:255',
            'no_inventaris' => 'required|integer',
            'sumber_buku' => 'required|max:255',
            'keterangan' => 'required|max:255',
            'penerbit_id' => 'required',
            'kategori_id' => 'required',
            'rak_id' => 'required',
            'stok' => 'required|integer',
            'halaman' => 'required|integer',
            'tinggi' => 'required|integer',
            'ddc' => 'required|max:255',
            'isbn' => 'required|max:255',
        ]);

        $buku = Buku::findOrFail($id);
        $buku->update($request->all());

        return redirect()->route('admin.buku.index')->with('sukses', 'Berhasil Edit Data!');
    }

    public function destroy($id)
    {
        $buku = Buku::findOrFail($id);
        $buku->delete();

        return redirect()->route('admin.buku.index')->with('sukses', 'Berhasil Hapus Data!');
    }
}
