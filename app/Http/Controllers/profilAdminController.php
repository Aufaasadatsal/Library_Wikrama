<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Profil;
use Illuminate\Http\Request;

class profilAdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data['profils'] = Profil::all();
        return view('admin.profil',$data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.profil.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validate = $request->validate([
            'judul_profil' => 'required',
            'isi_profil' => 'required',
            'status' => 'required',
            'gambar' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
        $validate['gambar'] = $request->file('gambar')->store('profil', 'public');
        Profil::create($validate);
        return redirect()->route('admin.profil')->with('success', 'Data Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(cr $cr)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $data['profil'] = Profil::findorfail($id);
        return view('admin.profil.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $profil = Profil::findOrFail($id);
    
        $validate = $request->validate([
            'judul_profil' => 'required',
            'isi_profil' => 'required',
            'status' => 'required',
            'gambar' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048', // Gambar opsional
        ]);
    
        if ($request->hasFile('gambar')) {
            // Jika ada gambar baru diunggah, simpan dan hapus gambar lama
            $validate['gambar'] = $request->file('gambar')->store('profil', 'public');
        }
    
        $profil->update($validate);
        return redirect()->route('admin.profil')->with('success', 'Profil berhasil diperbarui');
    }
    

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $profil = Profil::findOrFail($id);
        $profil->delete();
    
        return redirect()->route('admin.profil')->with('success', 'Visimisi berhasil dihapus.');
    }
}
