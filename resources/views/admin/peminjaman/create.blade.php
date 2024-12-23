@extends('layouts.app')

@section('content')
<div class="container mx-auto p-8 bg-gray-800 rounded-lg shadow-lg">
    <h1 class="text-3xl font-semibold text-gray-200 mb-6 text-center">Tambah Peminjaman Buku</h1>
    <form action="{{ route('admin.store-peminjaman') }}" method="POST" enctype="multipart/form-data">
        @csrf

    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    @if (session('error'))
        <div class="alert alert-danger">
            {{ session('error') }}
        </div>
    @endif

        <!-- Nama Peminjam -->
        <div class="mb-4">
            <label for="nama_peminjam" class="block text-gray-400 font-medium mb-2">Nama Peminjam</label>
            <input type="text" class="w-full p-3 border border-gray-700 rounded-lg bg-gray-700 text-gray-300 placeholder-gray-500 focus:outline-none focus:ring-2 focus:ring-blue-500" id="nama_peminjam" name="nama_peminjam" placeholder="Masukkan Nama Peminjam" required>
        </div>

        <!-- NIS -->
        <div class="mb-4">
            <label for="nis" class="block text-gray-400 font-medium mb-2">NIS</label>
            <input type="text" class="w-full p-3 border border-gray-700 rounded-lg bg-gray-700 text-gray-300 placeholder-gray-500 focus:outline-none focus:ring-2 focus:ring-blue-500" id="nis" name="nis" placeholder="Masukkan NIS" required>
        </div>

        <!-- Gambar (Image Buku) -->
        <div class="mb-4">
            <label for="gambar" class="block text-gray-400 font-medium mb-2">Gambar Buku</label>
            <input type="file" class="w-full p-3 border border-gray-700 rounded-lg bg-gray-700 text-gray-300 placeholder-gray-500 focus:outline-none focus:ring-2 focus:ring-blue-500" id="gambar" name="gambar" accept="image/*" required>
            <p class="text-sm text-gray-400">Format: JPG, PNG (max: 10 MB)</p>
            <div id="imagePreview" class="mt-4"></div>
        </div>

        <!-- Tanggal Pinjam (Auto-filled) -->
        <div class="mb-4">
            <label for="tanggal_pinjam" class="block text-gray-400 font-medium mb-2">Tanggal Pinjam</label>
            <input type="date" class="w-full p-3 border border-gray-700 rounded-lg bg-gray-700 text-gray-300 placeholder-gray-500 focus:outline-none focus:ring-2 focus:ring-blue-500" id="tanggal_pinjam" name="tanggal_pinjam" required readonly>
        </div>

        <!-- Tanggal Kembali -->
        <div class="mb-4">
            <label for="tanggal_kembali" class="block text-gray-400 font-medium mb-2">Tanggal Kembali</label>
            <input type="date" class="w-full p-3 border border-gray-700 rounded-lg bg-gray-700 text-gray-300 placeholder-gray-500 focus:outline-none focus:ring-2 focus:ring-blue-500" id="tanggal_kembali" name="tanggal_kembali" required>
        </div>

        <button type="submit" class="w-full bg-blue-600 text-white font-semibold py-3 rounded-lg hover:bg-blue-700 transition duration-300 ease-in-out transform hover:scale-105">Simpan</button>
    </form>
</div>

<script>
    // Set today's date as the default value for the tanggal_pinjam input
    document.addEventListener('DOMContentLoaded', function() {
        const today = new Date();
        const formattedDate = today.toISOString().split('T')[0]; // Format as YYYY-MM-DD
        document.getElementById('tanggal_pinjam').value = formattedDate;
    });

    document.getElementById('gambar').addEventListener('change', function(event) {
        const imagePreview = document.getElementById('imagePreview');
        imagePreview.innerHTML = ""; // Clear previous preview
        const file = event.target.files[0];
        if (file) {
            const reader = new FileReader();
            reader.onload = function(e) {
                const img = document.createElement('img');
                img.src = e.target.result;
                img.alt = "Preview Image";
                img.className = "w-full h-48 object-cover mt-2 rounded-lg border border-gray-700";
                imagePreview.appendChild(img);
            };
            reader.readAsDataURL(file);
        }
    });
</script>
@endsection
