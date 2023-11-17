<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminKartuController extends Controller
{
    public function index()
    {
        $kartus = User::all();
        return view('admin.kartu.index', compact('kartus'));
    }

    public function show(string $id)
    {
        $kartu = User::where('id', $id)->first();
        return view('admin.kartu.read', compact('kartu'));
    }

    public function edit(string $id)
    {
        $kartu = User::where('id', $id)->first();
        return view('admin.kartu.update', compact('kartu'));
    }

    public function update(Request $request, string $id)
    {
        $request->validate(
            [
                'nama' => 'required|max:255',
                'nisn' => 'required',
                'roles_id' => 'required'
            ],
            [
                'nama.required' => 'Nama harus diisi!',
                'nama.max' => 'Nama maksimal 255 karakter!',
                'nisn.required' => 'NISN harus diisi!',
                'roles_id.required' => 'Roles harus diisi!'
            ]
        );

        $kartu = User::where('id', $id)->first();
        $kartu->update(
            [
                'nama' => $request->nama,
                'nisn' => $request->nisn,
                'roles_id' => $request->roles_id
            ]
        );
        if (auth()->user()->roles_id == 1) {
            return redirect('admin/kartu')->with('sukses', 'Berhasil Edit Data!');
        }
    }

}
