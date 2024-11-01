<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Galeri;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class GaleriAdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data['galeris'] = Galeri::all();
        return view('admin.galeri', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.galeri.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validate = $request->validate([
            'file' => 'required|file|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'kategori' => 'required',
            'keterangan' => 'required',
            'oleh' => 'required|string',
            'tanggal' => 'required|date',
        ]);
        $validate['file'] = $request->file('file')->store('galeri', 'public');
        Galeri::create($validate);
        return redirect()->route('admin.galeri')->with('succes', 'Data Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show($cr)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $data['galeri'] = Galeri::findorfail($id);
        return view('admin.galeri.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        // Validasi input
        $request->validate([
            'kategori' => 'required|string|max:255',
            'keterangan' => 'required|string|max:255',
            'oleh' => 'required|string|max:255',
            'tanggal' => 'required|date',
            'gambar' => 'nullable|image|mimes:jpg,png,jpeg,gif,svg|max:10240' // validasi gambar, opsional
        ]);

        // Temukan galeri berdasarkan ID
        $galeri = Galeri::findOrFail($id);

        // Jika ada gambar yang diupload
        if ($request->hasFile('gambar')) {
            // Hapus gambar lama jika ada
            if ($galeri->file) {
                Storage::delete('public/' . $galeri->file);
            }

            // Upload gambar baru
            $path = $request->file('gambar')->store('public/galeri'); // simpan di folder 'storage/app/public/galeri'
            $galeri->file = str_replace('public/', '', $path); // Simpan path gambar di database tanpa 'public/'
        }

        // Update data lainnya
        $galeri->kategori = $request->input('kategori');
        $galeri->keterangan = $request->input('keterangan');
        $galeri->oleh = $request->input('oleh');
        $galeri->tanggal = $request->input('tanggal');

        // Simpan perubahan
        $galeri->save();

        // Redirect kembali dengan pesan sukses
        return redirect()->route('admin.galeri')->with('success', 'Data galeri berhasil diupdate');
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $galeri = Galeri::findOrFail($id);
        $galeri->delete();

        return redirect()->route('admin.galeri')->with('success', 'Data Berhasil Dihapus');
    }
}
