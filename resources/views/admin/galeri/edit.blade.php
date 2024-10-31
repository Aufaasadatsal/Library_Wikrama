@extends('layouts.app')

@section('content')
<div class="bg-white text-gray-800 p-6 rounded-lg shadow-lg w-full">
    <h2 class="text-3xl font-bold mb-4">Edit Data</h2>

    <form action="{{ route('admin.update-galeri', $galeri->id) }}" method="POST" enctype="multipart/form-data" class="space-y-6">
        @csrf <!-- Token CSRF untuk keamanan -->
        @method('PUT')
        <!-- Error Handling -->
        @if($errors->any())
        <div class="bg-red-100 text-red-600 p-4 rounded-lg">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif


<!-- Upload Gambar Baru -->
        <div class="space-y-2">
            <label for="gambar" class="block text-gray-600 font-semibold">Upload Gambar</label>
            <input type="file" id="gambar" name="gambar" class="w-full p-2 border border-gray-300 rounded focus:outline-none focus:border-blue-500">
            <div class="mt-2">
                <p class="text-sm text-gray-600">Gambar Saat Ini:</p>
                <img src="{{ asset('storage/' . $galeri->file) }}" alt="{{ $galeri->file }}" class="w-32 h-24 mt-2 rounded-lg">
                <p class="text-sm text-gray-400">Format: JPG, PNG (max: 10 MB). Kosongkan jika tidak ingin mengubah gambar.</p>
            </div>
        </div>

        <!-- Kategori -->
        <div class="space-y-2">
            <label for="kategori" class="block text-gray-600 font-semibold">Kategori*</label>
            <input type="text" id="kategori" name="kategori"
                class="w-full p-2 border border-gray-300 rounded focus:outline-none focus:border-blue-500"
                placeholder="Masukkan kategori" required value="{{old('kategori', $galeri->kategori)}}">
        </div>

        <!-- Keterangan -->
        <div class="space-y-2">
            <label for="keterangan" class="block text-gray-600 font-semibold">Keterangan*</label>
            <input type="text" id="keterangan" name="keterangan"
                class="w-full p-2 border border-gray-300 rounded focus:outline-none focus:border-blue-500"
                placeholder="Masukkan keterangan" required value="{{old('keterangan', $galeri->keterangan)}} ">
        </div>

        <!-- Oleh -->
        <div class="space-y-2">
            <label for="oleh" class="block text-gray-600 font-semibold">Oleh*</label>
            <input type="text" id="oleh" name="oleh"
                class="w-full p-2 border border-gray-300 rounded focus:outline-none focus:border-blue-500"
                placeholder="Nama penginput data" required value="{{old('oleh', $galeri->oleh)}}">
        </div>

        <!-- Tanggal -->
        <div class="space-y-2">
            <label for="tanggal" class="block text-gray-600 font-semibold">Tanggal*</label>
            <input type="date" id="tanggal" name="tanggal"
                class="w-full p-2 border border-gray-300 rounded focus:outline-none focus:border-blue-500"
                required value="{{old('tanggal', $galeri->tanggal) }}">
        </div>

        <!-- Tombol Submit -->
        <button type="submit"
            class="bg-blue-500 text-white py-2 px-6 rounded mt-4 hover:bg-blue-600 transition">
            Save
        </button>
    </form>
</div>
@endsection
