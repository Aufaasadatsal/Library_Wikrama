@extends('layouts.app')

@section('content')
<div class="bg-white text-gray-800 p-6 rounded-lg shadow-lg w-full">
    <h2 class="text-3xl font-bold mb-4">Add Fun Fact</h2>

    <form action="{{ route('admin.store-funfact') }}" method="POST" class="space-y-6">
        @csrf <!-- Token CSRF untuk keamanan -->

        <!-- Siswa Teraktif -->
        <div class="space-y-2">
            <label for="siswa_teraktif" class="block text-gray-600 font-semibold">Siswa Teraktif*</label>
            <input type="text" id="siswa_teraktif" name="siswa_teraktif"
                class="w-full p-2 border border-gray-300 rounded focus:outline-none focus:border-blue-500"
                placeholder="Masukkan nama siswa teraktif" required>
        </div>

        <!-- Rayon Teraktif -->
        <div class="space-y-2">
            <label for="rayon_teraktif" class="block text-gray-600 font-semibold">Rayon Teraktif*</label>
            <input type="text" id="rayon_teraktif" name="rayon_teraktif"
                class="w-full p-2 border border-gray-300 rounded focus:outline-none focus:border-blue-500"
                placeholder="Masukkan rayon teraktif" required>
        </div>

        <!-- Rombel Teraktif -->
        <div class="space-y-2">
            <label for="rombel_teraktif" class="block text-gray-600 font-semibold">Rombel Teraktif*</label>
            <input type="text" id="rombel_teraktif" name="rombel_teraktif"
                class="w-full p-2 border border-gray-300 rounded focus:outline-none focus:border-blue-500"
                placeholder="Masukkan rombel teraktif" required>
        </div>

        <!-- Buku Terfavorit -->
        <div class="space-y-2">
            <label for="buku_terfavorit" class="block text-gray-600 font-semibold">Buku Terfavorit*</label>
            <input type="text" id="buku_terfavorit" name="buku_terfavorit"
                class="w-full p-2 border border-gray-300 rounded focus:outline-none focus:border-blue-500"
                placeholder="Masukkan buku terfavorit" required>
        </div>

        <!-- Tombol Submit -->
        <button type="submit"
            class="bg-blue-500 text-white py-2 px-6 rounded mt-4 hover:bg-blue-600 transition">
            Simpan
        </button>
    </form>
</div>
@endsection
