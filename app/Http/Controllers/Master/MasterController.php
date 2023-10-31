<?php

namespace App\Http\Controllers\Master;

use App\Models\Dosen;
use App\Models\Kelas;
use App\Models\MataKuliah;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MasterController extends Controller
{
    public function dosen()
    {
        $dosen = Dosen::all();
        return view('master.dosen', compact('dosen'));
    }
    
    public function matakuliah()
    {
        $matkul = MataKuliah::all();
        return view('master.matakuliah', compact('matkul'));
    }
    
    public function kelas()
    {
        $kelas = Kelas::all();
        return view('master.kelas', compact('kelas'));
    }
}