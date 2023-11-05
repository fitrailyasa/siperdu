<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Peminjaman;
use App\Models\Buku;
use Illuminate\Http\Request;

class AdminTransaksiController extends Controller
{
    public function index()
    {
        $transaksis = Peminjaman::all();
        return view('admin.transaksi.index', compact('transaksis'));
    }

    public function create()
    {
        return view('admin.transaksi.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|max:255',
            'slug' => 'required|max:255',
        ]);

        Peminjaman::create($request->all());

        return redirect()->route('admin.transaksi.index')->with('sukses', 'Berhasil Tambah Data!');
    }

    public function show($id)
    {
        $transaksi = Peminjaman::findOrFail($id);
        return view('admin.transaksi.read', compact('transaksi'));
    }

    public function edit($id)
    {
        $transaksi = Peminjaman::findOrFail($id);
        return view('admin.transaksi.update', compact('transaksi'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nama' => 'required|max:255',
            'slug' => 'required|max:255',
        ]);

        $transaksi = Peminjaman::findOrFail($id);
        $transaksi->update($request->all());

        return redirect()->route('admin.transaksi.index')->with('sukses', 'Berhasil Edit Data!');
    }

    public function destroy($id)
    {
        $transaksi = Peminjaman::findOrFail($id);
        $transaksi->delete();

        return redirect()->route('admin.transaksi.index')->with('sukses', 'Berhasil Hapus Data!');
    }
}
