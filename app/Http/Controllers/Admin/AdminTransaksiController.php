<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Transaksi;
use App\Models\Buku;
use Illuminate\Http\Request;

class AdminTransaksiController extends Controller
{
    public function index()
    {
        $transaksis = Transaksi::latest()->get();
        return view('admin.transaksi.index', compact('transaksis'));
    }

    public function create()
    {
        return view('admin.transaksi.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'kode_pinjam' => 'required|max:255', 
            'peminjam' => 'required|max:255', 
            'petugas_pinjam' => 'required|max:255', 
            'petugas_kembali' => 'required|max:255', 
            'status' => 'required|max:255', 
            'denda' => 'required', 
            'tanggal_pinjam' => 'required|max:255', 
            'tanggal_kembali' => 'required|max:255', 
            'tanggal_pengembalian' => 'required|max:255',
        ]);

        Transaksi::create($request->all());

        return redirect()->route('admin.transaksi.index')->with('sukses', 'Berhasil Tambah Data!');
    }

    public function show($id)
    {
        $transaksi = Transaksi::findOrFail($id);
        return view('admin.transaksi.read', compact('transaksi'));
    }

    public function edit($id)
    {
        $transaksi = Transaksi::findOrFail($id);
        return view('admin.transaksi.update', compact('transaksi'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'kode_pinjam' => 'required|max:255', 
            'peminjam' => 'required|max:255', 
            'petugas_pinjam' => 'required|max:255', 
            'petugas_kembali' => 'required|max:255', 
            'status' => 'required|max:255', 
            'denda' => 'required', 
            'tanggal_pinjam' => 'required|max:255', 
            'tanggal_kembali' => 'required|max:255', 
            'tanggal_pengembalian' => 'required|max:255',
        ]);

        $transaksi = Transaksi::findOrFail($id);
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
