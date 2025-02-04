<?php

namespace App\Http\Controllers;

use App\Models\Mobil;
use Illuminate\Http\Request;

class MobilController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        // membuat variabel untuk menampikan semua data.
        $mobil = Mobil::all();
        return view('mobil.index', compact('mobil'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('mobil.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $input = $request->all();
        $request->validate([
            'merek' => 'required|string|min:3|max:50',
            'tahun_keluar' => 'required|string|min:4|max:4',
            'jenis' => 'required',
            'deskripsi' => 'required'
        ]);
        Mobil::create($input);
        return redirect()->route('mobil.index')->with('success', 'Data berhasil dibuat');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $data = Mobil::findOrFail($id);
        return view('mobil.detail', compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return 'Ini halaman edit data mobil';
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $input = $request->all();
        $data = Mobil::findOrFail($id);
        $request->validate([
            'merek' => 'required|string|min:3|max:50',
            'tahun_keluar' => 'required|string|min:4|max:4',
            'jenis' => 'required',
            'deskripsi' => 'required'
        ]);
        $data->update($input);
        return back()->with('success', 'Data berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $data = Mobil::findOrFail($id);
        $data->delete();
        return redirect()->route('mobil.index')->with('success', 'Data berhasil dihapus');
    }
}
