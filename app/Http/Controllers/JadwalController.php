<?php

namespace App\Http\Controllers;

use App\Models\Kelas;
use App\Models\Jadwal;
use App\Models\Ruangan;
use Illuminate\Http\Request;
use App\Models\JadwalMengajar;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class JadwalController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $jadwal = Jadwal::all();
        // return response()->json([
        //     'data' => $kelas,
        //     'data2' => $ruangan,
        //     'data3' => $mengajar
        // ]);
        return view('jadwal.jadwal', compact('jadwal'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $kelas = Kelas::all();
        $ruangan = Ruangan::all();
        $mengajar = JadwalMengajar::get();

        return view('jadwal.create-jadwal', compact('kelas', 'ruangan', 'mengajar'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        DB::table('jadwals')->insert([
            'kelas' => $request->kelas,
            'matakuliah' => $request->matakuliah,
            'dosen' => $request->dosen,
            'hari' => $request->hari,
            'jam_mulai' => $request->jam_mulai,
            'jam_selesai' => $request->jam_selesai,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        return redirect()->route('admin-jadwal.index')->with('success', 'Data berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(Jadwal $jadwal)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Jadwal $jadwal)
    {
        
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Jadwal $jadwal)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Jadwal $jadwal)
    {
        //
    }
}