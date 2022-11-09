<?php

namespace App\Http\Controllers;

use App\Models\Pegawai;
use App\Models\Tamplate;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    public function index(){
        // $pegawai = Pegawai::count();
        $template = Tamplate::count();
        $users = User::Where('role','pegawai')->count();

        return view('dashboard', compact('template','users'));
    }
}