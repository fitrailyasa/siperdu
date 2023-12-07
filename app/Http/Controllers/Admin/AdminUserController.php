<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminUserController extends Controller
{
    public function index()
    {
        $users = User::all();
        return view('admin.user.index', compact('users'));
    }

    public function showKartu(string $id)
    {
        $kartu = User::where('id', $id)->first();
        return view('admin.kartu.read', compact('kartu'));
    }

    public function verif()
    {
        $users = User::where('roles_id', 99)->get();
        return view('admin.user.verif', compact('users'));
    }

    public function create()
    {
        return view('admin.user.create');
    }

    public function store(Request $request)
    {
        $request->validate(
            [
                'nama' => 'required|max:255',
                'email' => 'required|max:255|unique:users,email',
                'nisn' => 'required',
                'password' => 'required',
                'roles_id' => 'required'
            ],
            [
                'nama.required' => 'Nama harus diisi!',
                'nama.max' => 'Nama maksimal 255 karakter!',
                'email.required' => 'Email harus diisi!',
                'email.max' => 'Email maksimal 255 karakter!',
                'email.unique' => 'Email sudah terdaftar!',
                'nisn.required' => 'NISN harus diisi!',
                'password.required' => 'Password harus diisi!',
                'roles_id.required' => 'Roles harus diisi!'
            ]
        );
        
        $user = User::create([
            'nama' => $request->nama,
            'email' => $request->email,
            'nisn' => $request->nisn,
            'password' => Hash::make($request->password),
            'roles_id' => $request->roles_id
        ]);

        if (auth()->user()->roles_id == 1) {
            return redirect('admin/user')->with('sukses', 'Berhasil Tambah Data!');
        }
    }

    public function show(string $id)
    {
        $user = User::where('id', $id)->first();
        return view('admin.user.read', compact('user'));
    }

    public function edit(string $id)
    {
        $user = User::where('id', $id)->first();
        return view('admin.user.update', compact('user'));
    }

    public function update(Request $request, string $id)
    {
        $request->validate(
            [
                'nama' => 'required|max:255',
                'email' => 'required|max:255',
                'nisn' => 'required',
                'roles_id' => 'required'
            ],
            [
                'nama.required' => 'Nama harus diisi!',
                'nama.max' => 'Nama maksimal 255 karakter!',
                'email.required' => 'Email harus diisi!',
                'email.max' => 'Email maksimal 255 karakter!',
                'nisn.required' => 'NISN harus diisi!',
                'roles_id.required' => 'Roles harus diisi!'
            ]
        );

        $user = User::where('id', $id)->first();
        $user->update(
            [
                'nama' => $request->nama,
                'email' => $request->email,
                'nisn' => $request->nisn,
                'password' => Hash::make($request->password),
                'roles_id' => $request->roles_id
            ]
        );
        if (auth()->user()->roles_id == 1) {
            return redirect('admin/user')->with('sukses', 'Berhasil Edit Data!');
        }
    }

    public function destroy(string $id)
    {
        $data = User::findOrFail($id);
        $data->delete();

        if (auth()->user()->roles_id == 1) {
            return redirect('admin/user')->with('sukses', 'Berhasil Hapus Data!');
        }
    }
}
