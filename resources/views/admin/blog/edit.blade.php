@extends('layouts.app')

@section('content')
<div class="bg-white text-gray-800 p-6 rounded-lg shadow-lg w-full">
    <h2 class="text-3xl font-bold mb-4">Edit Blog</h2>

    <form action="{{ route('admin.update-blog', $blog->id) }}" method="POST" enctype="multipart/form-data" class="space-y-6">
        @csrf
        @method('PUT')

        <!-- Judul Blog -->
        <div class="space-y-2">
            <label for="judul" class="block text-gray-600 font-semibold">Judul Blog*</label>
            <input type="text" id="judul" name="judul"
                class="w-full p-2 border border-gray-300 rounded focus:outline-none focus:border-blue-500"
                value="{{ old('judul', $blog->judul) }}" placeholder="Masukkan judul blog" required>
        </div>

        <!-- Isi Blog -->
        <div class="space-y-2">
            <label for="isi" class="block text-gray-600 font-semibold">Isi Blog*</label>
            <textarea id="isi" name="isi" rows="8"
                class="w-full p-2 border border-gray-300 rounded focus:outline-none focus:border-blue-500"
                placeholder="Tulis konten blog di sini..." required>{{ old('isi', $blog->isi) }}</textarea>
        </div>

<!-- Upload Gambar Baru -->
        <div class="space-y-2">
            <label for="gambar" class="block text-gray-600 font-semibold">Upload Gambar</label>
            <input type="file" id="gambar" name="image" class="w-full p-2 border border-gray-300 rounded focus:outline-none focus:border-blue-500">
            <div class="mt-2">
                <p class="text-sm text-gray-600">Gambar Saat Ini:</p>
                <img src="{{ asset('storage/' . $blog->image) }}" alt="{{ $blog->image }}" class="w-32 h-24 mt-2 rounded-lg">
                <p class="text-sm text-gray-400">Format: JPG, PNG (max: 10 MB). Kosongkan jika tidak ingin mengubah gambar.</p>
            </div>
        </div>

        <select id="status" name="status"
            class="w-full p-2 border border-gray-300 rounded focus:outline-none focus:border-blue-500" required>
            <option value="{{$blog->status == 'aktif' ? 'aktif' : 'tidak aktif'}}" {{ old('status', $blog->status) == 'aktif' ? 'selected' : '' }}>{{$blog->status == 'aktif' ? 'aktif' : 'tidak aktif'}}</option>
            <option value="{{$blog->status == 'tidak aktif' ? 'aktif' : 'tidak aktif'}}" {{ old('status', $blog->status) == 'tidak aktif' ? 'selected' : '' }}>{{$blog->status == 'tidak aktif' ? 'aktif' : 'tidak aktif'}}</option>
        </select>

        <!-- Tombol Submit -->
        <button type="submit"
            class="bg-blue-500 text-white py-2 px-6 rounded mt-4 hover:bg-blue-600 transition">
            Update
        </button>
    </form>
</div>
@endsection
