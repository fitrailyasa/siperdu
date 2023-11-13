<?php

namespace App\Http\Controllers\Admin;

use App\Models\Struktur;
use Illuminate\Support\Facades\Hash;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminStrukturController extends Controller
{

    public function edit($id)
    {
        $struktur = Struktur::findOrFail($id);
        return view('admin.struktur.index', compact('struktur'));
    }

    public function update(Request $request, $id)
    {
        $struktur = Struktur::findOrFail($id);

        if ($request->hasFile('gambar')) {
            $gambar = $request->file('gambar');
            $nama_file = time() . '_' . $gambar->getClientOriginalName();
            
            $struktur->gambar = $nama_file;
            
            $struktur->save();
            
            $gambar->move(public_path('assets/struktur/'), $nama_file);
        }

    }
}