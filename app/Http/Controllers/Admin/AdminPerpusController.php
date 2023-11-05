<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminPerpusController extends Controller
{
    public function indexKartu()
    {
        $kartus = User::all();
        return view('admin.kartu.index', compact('kartus'));
    }

    public function indexStruktur()
    {
        $strukturs = User::all();
        return view('admin.struktur.index', compact('strukturs'));
    }

}
