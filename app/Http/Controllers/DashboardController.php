<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mahasiswa;
use App\Models\Dosen;
use App\Models\Matakuliah;
use App\Models\Krs;

class DashboardController extends Controller
{

public function index()
{
   
    $krs = Krs::with([
        'mahasiswa.dosen',
        'matakuliah'
    ])->get();

    return view('dashboard', compact('krs'));
}
}

