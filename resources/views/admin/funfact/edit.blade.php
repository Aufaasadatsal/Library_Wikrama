@extends('layouts.app')

@section('content')
<div class="bg-white text-gray-800 p-6 rounded-lg shadow-lg w-full">
    <h2 class="text-3xl font-bold mb-4">Edit Data Fun Fact</h2>

    <form action="{{ route('admin.update-funfact', $funfact->id) }}" method="POST" class="space-y-6">
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

        <!-- Siswa Interaktif -->
        <div class="space-y-2">
            <label for="siswa_teraktif" class="block text-gray-600 font-semibold">Siswa Interaktif*</label>
            <input type="text" id="siswa_teraktif" name="siswa_teraktif"
                class="w-full p-2 border border-gray-300 rounded focus:outline-none focus:border-blue-500"
                placeholder="Masukkan nama siswa interaktif" required value="{{ old('siswa_teraktif', $funfact->siswa_teraktif) }}">
        </div>

        <!-- Rayon Interaktif -->
        <div class="space-y-2">
            <label for="rayon_teraktif" class="block text-gray-600 font-semibold">Rayon Interaktif*</label>
            <input type="text" id="rayon_teraktif" name="rayon_teraktif"
                class="w-full p-2 border border-gray-300 rounded focus:outline-none focus:border-blue-500"
                placeholder="Masukkan rayon interaktif" required value="{{ old('rayon_teraktif', $funfact->rayon_teraktif) }}">
        </div>

        <!-- Rombel Interaktif -->
        <div class="space-y-2">
            <label for="rombel_teraktif" class="block text-gray-600 font-semibold">Rombel Interaktif*</label>
            <input type="text" id="rombel_teraktif" name="rombel_teraktif"
                class="w-full p-2 border border-gray-300 rounded focus:outline-none focus:border-blue-500"
                placeholder="Masukkan rombel interaktif" required value="{{ old('rombel_teraktif', $funfact->rombel_teraktif) }}">
        </div>

        <!-- Buku Terfavorit -->
        <div class="space-y-2">
            <label for="buku_terfavorit" class="block text-gray-600 font-semibold">Buku Terfavorit*</label>
            <input type="text" id="buku_terfavorit" name="buku_terfavorit"
                class="w-full p-2 border border-gray-300 rounded focus:outline-none focus:border-blue-500"
                placeholder="Masukkan buku terfavorit" required value="{{ old('buku_terfavorit', $funfact->buku_terfavorit) }}">
        </div>

        <!-- Tombol Submit -->
        <button type="submit"
            class="bg-blue-500 text-white py-2 px-6 rounded mt-4 hover:bg-blue-600 transition">
            Save
        </button>
    </form>
</div>
@endsection
