<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Kategori;
use Illuminate\Http\Request;

class AdminKategoriController extends Controller
{
    public function index()
    {
        $kategoris = Kategori::latest()->get();
        return view('admin.kategori.index', compact('kategoris'));
    }

    public function create()
    {
        return view('admin.kategori.create');
    }

    public function store(Request $request)
    {
        $kategori = Kategori::create([
            'nama' => $request->nama,
        ]);

        if ($request->hasFile('gambar')) {
            $gambar = $request->file('gambar');
            $nama_file = time() . '_' . $gambar->getClientOriginalName();
            $kategori->gambar = $nama_file;
            $kategori->update();
            $gambar->move('../public/assets/images/kategori/', $nama_file);
        }

        return redirect()->route('admin.kategori.index')->with('sukses', 'Berhasil Tambah Data!');
    }

    public function show($id)
    {
        $kategori = Kategori::findOrFail($id);
        return view('admin.kategori.read', compact('kategori'));
    }

    public function edit($id)
    {
        $kategori = Kategori::findOrFail($id);
        return view('admin.kategori.update', compact('kategori'));
    }

    public function update(Request $request, $id)
    {
        $kategori = Kategori::where('id', $id)->first();
        $request->validate([
            'nama' => 'required|max:255',
        ]);

        if ($request->hasFile('gambar')) {
            $gambar = $request->file('gambar');
            $nama_file = time() . '_' . $gambar->getClientOriginalName();
            $kategori->gambar = $nama_file;
            $kategori->update();
            $gambar->move('../public/assets/images/kategori/', $nama_file);
        }

        $kategori->update($request->all());

        return redirect()->route('admin.kategori.index')->with('sukses', 'Berhasil Edit Data!');
    }

    public function destroy($id)
    {
        $kategori = Kategori::findOrFail($id);
        $kategori->delete();

        return redirect()->route('admin.kategori.index')->with('sukses', 'Berhasil Hapus Data!');
    }
}
