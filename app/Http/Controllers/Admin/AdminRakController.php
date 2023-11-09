<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Rak;
use App\Models\Kategori;
use Illuminate\Http\Request;

class AdminRakController extends Controller
{
    public function index()
    {
        $raks = Rak::all();
        return view('admin.rak.index', compact('raks'));
    }

    public function create()
    {
        $kategoris = Kategori::all();
        return view('admin.rak.create', compact('kategoris'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'kode_rak' => 'required|max:255',
            'nama_rak' => 'required|max:255',
        ]);

        Rak::create($request->all());

        return redirect()->route('admin.rak.index')->with('sukses', 'Berhasil Tambah Data!');
    }

    public function show($id)
    {
        $rak = Rak::findOrFail($id);
        return view('admin.rak.read', compact('rak'));
    }

    public function edit($id)
    {
        $rak = Rak::findOrFail($id);
        $kategoris = Kategori::all();
        return view('admin.rak.update', compact('rak', 'kategoris'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'kode_rak' => 'required|max:255',
            'nama_rak' => 'required|max:255',
        ]);

        $rak = Rak::findOrFail($id);
        $rak->update($request->all());

        return redirect()->route('admin.rak.index')->with('sukses', 'Berhasil Edit Data!');
    }

    public function destroy($id)
    {
        $rak = Rak::findOrFail($id);
        $rak->delete();

        return redirect()->route('admin.rak.index')->with('sukses', 'Berhasil Hapus Data!');
    }
}
