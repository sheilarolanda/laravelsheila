<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa;
use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //ambil data mahasiswa beserta relasi prodi
        $Mahasiswa = Mahasiswa::with('prodi')->get();
        return view('mahasiswa', compact('mahasiswa'));
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
        //valisasi data
        $request->validate([
            'nama' => 'required',
            'nim' => 'required|unique:mahasiswa',
            'prodi_id' => 'required|exists:prodi,id',
            'foto' => 'nullable|image|max:2048'
        ]);
        $input = $request->all();
        if($request->hasFile('foto')) {
            $filename = $input['nim'].'.' .  $request->file('foto')->getClientOriginalExtension();
            $input['foto'] = $request->file('foto')->storeAs('fotos', $filename, 'public');
        }
        else {
            $input['foto'] = null;
        }
        Mahasiswa::create($request->all());
        return redirect()->route('mahasiswa.index')->with('success', 'Data mahasiswa berhasil disimpan');


    }

    /**
     * Display the specified resource.
     */
    public function show(Mahasiswa $mahasiswa)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Mahasiswa $mahasiswa)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Mahasiswa $mahasiswa)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Mahasiswa $mahasiswa)
    {
        //
    }
}
