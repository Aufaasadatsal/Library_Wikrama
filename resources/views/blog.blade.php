@extends('layouts.template')

@section('content')
<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
    @if($artikels->isEmpty())
        <div class="col-span-1 md:col-span-2 lg:col-span-3 text-center p-6 bg-gray-100 rounded-lg shadow-md">
            <h2 class="text-2xl font-bold text-gray-800">Tidak ada artikel yang tersedia.</h2>
            <p class="mt-2 text-gray-600">Silakan cek kembali nanti atau tambahkan artikel baru.</p>
        </div>
    @else
        @foreach ($artikels as $artikel)
            <div class="bg-white rounded-lg shadow-lg overflow-hidden">
                <div class="bg-cover bg-center h-48" style="background-image: url('{{ $artikel->image }}');"></div>
                <div class="p-4">
                    <h2 class="text-xl font-semibold text-[#201A09]">{{ $artikel->judul_artikel }}</h2>
                    <p class="text-gray-600 mt-2">{{ Str::limit($artikel->isi_artikel, 150) }}</p>
                    <a href="{{ route('admin.blog.show', $artikel->artikel_id) }}" class="inline-block mt-4 text-[#A07D1C] font-bold hover:underline">Baca Selengkapnya</a>
                </div>
            </div>
        @endforeach
    @endif
</div>
@endsection