@extends('layouts.app')

@section('content')
<div class="bg-white text-gray-800 p-6 rounded-lg shadow-lg w-full">
    <h2 class="text-3xl font-bold mb-4">Add Profile</h2>

    <form action="{{ route('admin.store-profil') }}" method="POST" enctype="multipart/form-data" class="space-y-4">
        @csrf
        <div class="space-y-2">
            <label for="judul_profil" class="block text-gray-600 font-semibold">Profile Title*</label>
            <input type="text" id="judul_profil" name="judul_profil" class="w-full p-2 border border-gray-300 rounded focus:outline-none focus:border-blue-500" placeholder="Enter profile title">
        </div>

        <div class="space-y-2">
            <label for="isi_profil" class="block text-gray-600 font-semibold">Profile Content*</label>
            <textarea id="isi_profil" name="isi_profil" rows="5" class="w-full p-2 border border-gray-300 rounded focus:outline-none focus:border-blue-500" placeholder="Enter profile content"></textarea>
        </div>

        <div class="space-y-2">
            <label for="status" class="block text-gray-600 font-semibold">Status*</label>
            <select name="status" id="status">
                <option value="aktif">Aktif</option>
                <option value="tidak-aktif">Non Aktif</option>
            </select>
        </div>

        <div class="space-y-2">
            <label for="gambar" class="block text-gray-600 font-semibold">Image*</label>
            <input type="file" id="gambar" name="gambar" class="w-full p-2 border border-gray-300 rounded focus:outline-none focus:border-blue-500">
        </div>

        <button type="submit" class="bg-blue-500 text-white py-2 px-6 rounded mt-4">Save</button>
    </form>
</div>
@endsection
