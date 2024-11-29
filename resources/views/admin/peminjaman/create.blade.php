@extends('layouts.app')

@section('content')
<div class="container mx-auto p-8 bg-gray-800 rounded-lg shadow-lg">
    <h1 class="text-3xl font-semibold text-gray-200 mb-6 text-center">Tambah Peminjaman Buku</h1>
    <form action="#" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="mb-4">
            <label for="id_anggota" class="block text-gray-400 font-medium mb-2">Nama Peminjam</label>
            <input type="text" class="w-full p-3 border border-gray-700 rounded-lg bg-gray-700 text-gray-300 placeholder-gray-500 focus:outline-none focus:ring-2 focus:ring-blue-500" id="id_anggota" name="id_anggota" placeholder="Masukkan Nama Peminjam" required>
        </div>

        <div class="mb-4">
            <label for="id_buku" class="block text-gray-400 font-medium mb-2">Buku yang Dipinjam</label>
            <input type="text" class="w-full p-3 border border-gray-700 rounded-lg bg-gray-700 text-gray-300 placeholder-gray-500 focus:outline-none focus:ring-2 focus:ring-blue-500" id="id_buku" name="id_buku" placeholder="Masukkan ID Buku" required>
        </div>

        <div class="mb-4">
            <label for="cover_img" class="block text-gray-400 font-medium mb-2">Image Buku</label>
            <input type="file" class="w-full p-3 border border-gray-700 rounded-lg bg-gray-700 text-gray-300 placeholder-gray-500 focus:outline-none focus:ring-2 focus:ring-blue-500" id="cover_img" name="cover_img" accept="image/*" required>
            <p class="text-sm text-gray-400">Format: JPG, PNG, PDF, DOC (max: 10 MB)</p>
            <div id="imagePreview" class="mt-4"></div>
        </div>

        <div class="mb-4">
            <label for="tgl_kembali" class="block text-gray-400 font-medium mb-2">Tanggal Kembali</label>
            <input type="date" class="w-full p-3 border border-gray-700 rounded-lg bg-gray-700 text-gray-300 placeholder-gray-500 focus:outline-none focus:ring-2 focus:ring-blue-500" id="tgl_kembali" name="tgl_kembali" required>
            <p class="text-sm text-gray-400">Tanggal meminjam telah disetel otomatis.</p>
        </div>

        <button type="submit" class="w-full bg-blue-600 text-white font-semibold py-3 rounded-lg hover:bg-blue-700 transition duration-300">Simpan</button>
    </form>
</div>

<script>
    document.getElementById('cover_img').addEventListener('change', function(event) {
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
