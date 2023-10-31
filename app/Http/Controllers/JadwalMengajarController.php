<?php

namespace App\Http\Controllers;

use App\Models\JadwalMengajar;
use App\Models\Dosen;
use App\Models\MataKuliah;
use Illuminate\Http\Request;

class JadwalMengajarController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $dosen = Dosen::all();
        $matkul = MataKuliah::all();
        return view('jadwal-mengajar', compact('dosen', 'matkul'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(JadwalMengajar $jadwalMengajar)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(JadwalMengajar $jadwalMengajar)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, JadwalMengajar $jadwalMengajar)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(JadwalMengajar $jadwalMengajar)
    {
        //
    }
}