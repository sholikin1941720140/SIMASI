<?php

namespace App\Http\Controllers;

use App\Models\JadwalMengajar;
use App\Models\Dosen;
use App\Models\MataKuliah;
use Illuminate\Http\Request;
use DB;

class JadwalMengajarController extends Controller
{
    public function index()
    {
        $mengajars = JadwalMengajar::all();
        return view('jadwal-dosen.jadwal-mengajar', compact('mengajars'));
    }

    public function create()
    {
        $dosen = Dosen::all();
        $matkul = MataKuliah::all();
        return view('jadwal-dosen.create-jadwal-mengajar', compact('dosen', 'matkul'));
    }

    public function store(Request $request)
    {
        DB::table('jadwal_mengajars')->insert([
            'nama_dosen' => $request->nama_dosen,
            'nip' => $request->nip,
            'matakuliah' => $request->matakuliah,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        return redirect()->route('admin-jadwal-mengajar.index')->with('success', 'Data berhasil ditambahkan');
    }

    public function edit(JadwalMengajar $jadwalMengajar ,String $id)
    {
        $jadwalMengajar = JadwalMengajar::where('id', $id)->first();
        return response()->json([
            'data' => $jadwalMengajar
        ]);
        return view('jadwal-dosen.edit-jadwal-mengajar', compact('jadwalMengajar'));
    }

    public function update(Request $request, JadwalMengajar $jadwalMengajar)
    {
        //
    }

    public function destroy(String $id)
    {
        $jadwalMengajar = JadwalMengajar::find($id);
        $jadwalMengajar->delete();
        
        return redirect()->route('admin-jadwal-mengajar.index')->with('success', 'Data berhasil dihapus');  
    }

    public function getNip(Request $request)
    {
        $nip = $request->nip;
        $dosen = Dosen::where('nip', $nip)->first();
        return response()->json([
            'data' =>$dosen
        ]);
    }
}