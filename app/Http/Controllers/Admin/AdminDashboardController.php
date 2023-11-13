<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use App\Models\Buku;
use App\Models\Kategori;
use App\Models\Rak;
use Illuminate\Support\Facades\Hash;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminDashboardController extends Controller
{
    public function index()
    {
        $users = User::all()->count();
        $bukus = Buku::all()->count();
        $kategoris = Kategori::all()->count();
        $raks = Rak::all()->count();
        return view('admin.dashboard', compact('users', 'bukus', 'kategoris', 'raks'));
    }
}
