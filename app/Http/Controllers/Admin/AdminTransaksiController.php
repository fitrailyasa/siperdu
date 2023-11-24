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
        $bukus = Buku::all();
        return view('admin.transaksi.create', compact('bukus'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'buku_id' => 'required',
            'peminjam' => 'required|max:255',
            'petugas_pinjam' => 'required|max:255',
            'petugas_kembali' => 'nullable|max:255',
            'status' => 'required|max:255',
            'denda' => 'required',
            'tanggal_pinjam' => 'required|max:255',
            'tanggal_kembali' => 'required|max:255',
            'tanggal_pengembalian' => 'nullable|max:255',
        ]);

        // Validasi tambahan untuk memastikan bahwa tanggal_pengembalian dan petugas_kembali diisi
        if ($request->input('status') === 'Sudah Dikembalikan') {
            $request->validate([
                'tanggal_pengembalian' => 'required',
                'petugas_kembali' => 'required',
            ]);
        }

        $request['tanggal_pengembalian'] = $request->has('tanggal_pengembalian') ? $request->tanggal_pengembalian : null;
        $request['kategori'] = $request->input('kategori'); // Menambahkan kategori ke request data

        // Mengubah nilai denda menjadi null jika nilainya adalah 0
        $request['denda'] = ($request->input('denda') == 0) ? null : $request->input('denda');

        $kode_pinjam = now()->format('YmdHis') . 'trnsks' . rand(1000, 9999);
        $request->merge(['kode_pinjam' => $kode_pinjam]);

        Transaksi::create($request->all());

        $buku = Buku::findOrFail($request->input('buku_id'));
        $statusBaru = $request->input('status');

        if ($statusBaru == 'Sudah Dikembalikan') {
            $buku->stok += 1;
            $buku->save();
        } elseif ($statusBaru == 'Sedang Dipinjam') {
            if ($buku->stok > 0) {
                $buku->stok -= 1;
                $buku->save();
            }
        }

        return redirect()->route('admin.transaksi.index')->with('sukses', 'Berhasil Tambah Data!');
    }


    public function show($id)
    {
        $transaksi = Transaksi::findOrFail($id);
        return view('admin.transaksi.read', compact('transaksi'));
    }

    public function edit($id)
    {
        $bukus = Buku::all();
        $transaksi = Transaksi::findOrFail($id);
        return view('admin.transaksi.update', compact('transaksi', 'bukus'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'buku_id' => 'required',
            'peminjam' => 'required|max:255',
            'petugas_pinjam' => 'required|max:255',
            'petugas_kembali' => 'nullable|max:255',
            'status' => 'required|max:255',
            'denda' => 'required',
            'tanggal_pinjam' => 'required|max:255',
            'tanggal_kembali' => 'required|max:255',
            'tanggal_pengembalian' => 'nullable|max:255',
        ]);

        if ($request->input('status') === 'Sudah Dikembalikan') {
            $request->validate([
                'tanggal_pengembalian' => 'required',
                'petugas_kembali' => 'required',
            ]);
        }

        $request['tanggal_pengembalian'] = $request->has('tanggal_pengembalian') ? $request->tanggal_pengembalian : null;
        $request['kategori'] = $request->input('kategori'); // Menambahkan kategori ke request data

        // Mengubah nilai denda menjadi null jika nilainya adalah 0
        $request['denda'] = ($request->input('denda') == 0) ? null : $request->input('denda');

        $transaksi = Transaksi::findOrFail($id);

        $statusLama = $transaksi->status;
        $transaksi->update($request->all());
        $statusBaru = $request->input('status');

        if ($statusLama == 'Sedang Dipinjam' && $statusBaru == 'Sudah Dikembalikan') {
            $buku = Buku::findOrFail($request->input('buku_id'));
            $buku->stok += 1;
            $buku->save();
        } elseif ($statusLama == 'Sudah Dikembalikan' && $statusBaru == 'Sedang Dipinjam') {
            $buku = Buku::findOrFail($request->input('buku_id'));
            if ($buku->stok > 0) {
                $buku->stok -= 1;
                $buku->save();
            }
        }

        return redirect()->route('admin.transaksi.index')->with('sukses', 'Berhasil Edit Data!');
    }

    public function destroy($id)
    {
        $transaksi = Transaksi::findOrFail($id);

        if ($transaksi->status == 'Sedang Dipinjam') {
            // Tambahkan stok buku yang terkait
            $buku = $transaksi->buku;
            $buku->stok += 1;
            $buku->save();
        }

        $transaksi->delete();

        return redirect()->route('admin.transaksi.index')->with('sukses', 'Berhasil Hapus Data!');
    }

}
