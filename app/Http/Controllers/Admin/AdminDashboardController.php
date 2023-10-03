<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use App\Models\Menara;
use App\Models\Permohonan;
use Illuminate\Support\Facades\Hash;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminDashboardController extends Controller
{
    public function index()
    {
        
        $acc = [1, 2, 3];

        $user_acc = User::whereIn('roles_id', $acc)->count();
        $user_verif = User::where('roles_id', 99)->count();
        $menara = Menara::all()->count();
        $permohonan = Permohonan::all()->count();
        return view('admin.dashboard', compact('menara', 'permohonan', 'user_acc', 'user_verif'));
    }
}
