@extends('layouts.app')

@section('content')
<div class="bg-white text-gray-800 p-6 rounded-lg shadow-lg w-full">
    <h2 class="text-3xl font-bold mb-4">Edit Visi, Misi, and Moto</h2>

    <form action="{{ route('admin.update-visimisi', $visimisi->id)}}" method="POST" class="space-y-4">
        @csrf
        @method('PUT')

        <div class="space-y-2">
            <label for="visi" class="block text-gray-600 font-semibold">Visi*</label>
            <textarea id="visi" name="visi" rows="4" class="w-full p-2 border border-gray-300 rounded focus:outline-none focus:border-blue-500" placeholder="Enter vision">{{ old('visi', $visimisi->visi)}}</textarea>
        </div>

        <div class="space-y-2">
            <label for="misi" class="block text-gray-600 font-semibold">Misi*</label>
            <textarea id="misi" name="misi" rows="4" class="w-full p-2 border border-gray-300 rounded focus:outline-none focus:border-blue-500" placeholder="Enter mission">{{ old('misi', $visimisi->misi)}}</textarea>
        </div>

        <div class="space-y-2">
            <label for="motto" class="block text-gray-600 font-semibold">Moto*</label>
            <textarea id="motto" name="motto" rows="4" class="w-full p-2 border border-gray-300 rounded focus:outline-none focus:border-blue-500" placeholder="Enter motto">{{ old('motto', $visimisi->motto)}}</textarea>
        </div>

        <button type="submit" class="bg-blue-500 text-white py-2 px-6 rounded mt-4">Update</button>
    </form>
</div>
@endsection