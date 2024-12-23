@extends('layouts.app')

@section('content')
<div class="container mx-auto px-4 sm:px-8">
    <div class="py-8">
        <h2 class="text-3xl font-semibold text-gray-200 mb-6">Edit Book</h2>

        <form action="{{ route('admin.update-buku', $book->id) }}" method="POST" enctype="multipart/form-data" class="space-y-6 bg-gray-700 p-8 rounded-lg shadow-md">
            @csrf
            @method('PUT') <!-- Use PUT for updating the resource -->

            <!-- Book Title -->
            <div class="space-y-2">
                <label for="judul" class="block text-gray-300 font-semibold">Judul Buku*</label>
                <input type="text" id="judul" name="judul"
                    class="w-full p-3 border border-gray-600 bg-gray-800 text-gray-300 rounded focus:outline-none focus:border-blue-500"
                    placeholder="Masukkan judul buku" value="{{ old('judul', $book->judul) }}" required>
            </div>

            <!-- Author -->
            <div class="space-y-2">
                <label for="penulis" class="block text-gray-300 font-semibold">Penulis*</label>
                <input type="text" id="penulis" name="penulis"
                    class="w-full p-3 border border-gray-600 bg-gray-800 text-gray-300 rounded focus:outline-none focus:border-blue-500"
                    placeholder="Masukkan nama penulis" value="{{ old('penulis', $book->penulis) }}" required>
            </div>

            <!-- Publisher -->
            <div class="space-y-2">
                <label for="penerbit" class="block text-gray-300 font-semibold">Penerbit*</label>
                <input type="text" id="penerbit" name="penerbit"
                    class="w-full p-3 border border-gray-600 bg-gray-800 text-gray-300 rounded focus:outline-none focus:border-blue-500"
                    placeholder="Masukkan nama penerbit" value="{{ old('penerbit', $book->penerbit) }}" required>
            </div>

            <!-- Publication Year -->
            <div class="space-y-2">
                <label for="tahun_terbit" class="block text-gray-300 font-semibold">Tahun Terbit*</label>
                <input type="number" id="tahun_terbit" name="tahun_terbit"
                    class="w-full p-3 border border-gray-600 bg-gray-800 text-gray-300 rounded focus:outline-none focus:border-blue-500"
                    placeholder="Masukkan tahun terbit" value="{{ old('tahun_terbit', $book->tahun_terbit) }}" required>
            </div>

            <!-- ISBN -->
            <div class="space-y-2">
                <label for="isbn" class="block text-gray-300 font-semibold">ISBN*</label>
                <input type="text" id="isbn" name="isbn"
                    class="w-full p-3 border border-gray-600 bg-gray-800 text-gray-300 rounded focus:outline-none focus:border-blue-500"
                    placeholder="Masukkan ISBN" value="{{ old('isbn', $book->isbn) }}" required>
            </div>

            <!-- Image Upload -->
            <div class="space-y-2">
                <label for="gambar" class="block text-gray-300 font-semibold">Upload Gambar</label>
                <input type="file" id="gambar" name="gambar"
                    class="w-full p-3 border border-gray-600 bg-gray-800 text-gray-300 rounded focus:outline-none focus:border-blue-500"
                    accept="image/*">
                <p class="text-sm text-gray-400">Format gambar: JPG, PNG, GIF (max: 2 MB)</p>

                <!-- Display existing image if it exists -->
                @if($book->gambar)
                    <div class="mt-4">
                        <img src="{{ asset('storage/' . $book->gambar) }}" alt="Book Image" class="h-32 rounded-md">
                        <p class="text-sm text-gray-400 mt-2">Current Image</p>
                    </div>
                @endif
            </div>

            <!-- Submit Button -->
            <button type="submit"
                class="bg-blue-600 hover:bg-blue-700 text-white font-bold py-2 px-6 rounded-lg transition duration-300 ease-in-out transform hover:scale-105">
                Update
            </button>
        </form>
    </div>
</div>
@endsection
