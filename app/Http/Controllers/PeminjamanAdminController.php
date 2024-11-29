<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Peminjaman;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;


class PeminjamanAdminController extends Controller
{
    public function index()
    {
        return view('admin.peminjaman');
    }


    public function create()

    {
        return view('admin.peminjaman.create');
    }

    public function store(Request $request)
    {
        $validate = $request->validate([
            'nama_peminjaman' => 'required',
            'nis' => 'required|integer',
            'gambar' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'tanggal_peminjaman' => 'required|date',
        ]);
        $validated['gambar'] = $request->file('gambar')->store('peminjaman', 'public');
        Peminjaman::create($validate);
        return redirect()->route('admin.peminjaman')->with('success', 'Data Peminjaman Berhasil Ditambahkan');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $data['peminjaman'] = Peminjaman::findorfail($id);
        return view('admin.peminjaman.edit', $data);
    }

    public function update(Request $request, $id)
    {
        $peminjaman = Peminjaman::findorfail($id);
        $validate = $request->validate([
            'nama_peminjaman' => 'required',
            'nis' => 'required|integer',
            'gambar' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'tanggal_peminjaman' => 'required|date',
        ]);

        if ($request->hasFile('gambar')) {
            Storage::disk('public')->delete($peminjaman->gambar);
            $validate['gambar'] = $request->file('gambar')->store('peminjaman', 'public');
        } else {
            $validate['gambar'] = $peminjaman->gambar;
        }

        $peminjaman->update($validate);
        return redirect()->route('admin.peminjaman')->with('success', 'Data Peminjaman Berhasil Diubah');
    }

    public function destroy($id)
    {
        $peminjaman = Peminjaman::findorfail($id);
        $peminjaman->delete();

        return redirect()->route('admin.peminjaman')->with('success', 'Data Peminjaman Berhasil Dihapus');
    }
}
