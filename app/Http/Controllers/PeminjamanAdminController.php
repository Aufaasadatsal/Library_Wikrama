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
        $peminjamen = Peminjaman::with('buku')->get(); // Memuat relasi 'buku' dengan peminjaman
        // dd($peminjamen);

        return view('admin.peminjaman', compact('peminjamen'));
    }

    public function create()
    {
        return view('admin.peminjaman.create');
    }

    public function store(Request $request)
    {
        // Validation with correct field names
        $validate = $request->validate([
            'nama_peminjam' => 'required',
            'nis' => 'required|integer',
            'gambar' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'tanggal_pinjam' => 'required|date',
        ]);

        // Store the image
        $validate['gambar'] = $request->file('gambar')->store('peminjaman', 'public');

        // Create the Peminjaman record
        Peminjaman::create($validate);

        // Redirect to the list of peminjaman records with success message
        return redirect()->route('admin.peminjaman')->with('success', 'Data Peminjaman Berhasil Ditambahkan');
    }

    public function show($id)
    {
        // Show specific peminjaman record
    }

    public function edit($id)
    {
        $data['peminjaman'] = Peminjaman::findOrFail($id);
        return view('admin.peminjaman.edit', $data);
    }

    public function update(Request $request, $id)
    {
        $peminjaman = Peminjaman::findOrFail($id);

        // Validation with correct field names
        $validate = $request->validate([
            'nama_peminjam' => 'required',
            'nis' => 'required|integer',
            'gambar' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'tanggal_pinjam' => 'required|date',
        ]);

        // If there's a new image, delete the old one and update with the new image
        if ($request->hasFile('gambar')) {
            Storage::disk('public')->delete($peminjaman->gambar);
            $validate['gambar'] = $request->file('gambar')->store('peminjaman', 'public');
        } else {
            $validate['gambar'] = $peminjaman->gambar;
        }

        // Update the record
        $peminjaman->update($validate);

        // Redirect to the list of peminjaman records with success message
        return redirect()->route('admin.peminjaman')->with('success', 'Data Peminjaman Berhasil Diubah');
    }

    public function destroy($id)
    {
        $peminjaman = Peminjaman::findOrFail($id);

        // Delete the record
        $peminjaman->delete();

        // Redirect to the list of peminjaman records with success message
        return redirect()->route('admin.peminjaman')->with('success', 'Data Peminjaman Berhasil Dihapus');
    }
}
