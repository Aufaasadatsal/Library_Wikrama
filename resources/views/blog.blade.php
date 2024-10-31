@extends('layouts.template')

@section('content')
<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
    @if($blogs->isEmpty())
        <div class="col-span-1 md:col-span-2 lg:col-span-3 text-center p-6 bg-gray-100 rounded-lg shadow-md">
            <h2 class="text-2xl font-bold text-gray-800">Tidak ada blog yang tersedia.</h2>
            <p class="mt-2 text-gray-600">Silakan cek kembali nanti atau tambahkan blog baru.</p>
        </div>
    @else
        @foreach ($blogs as $blog)
            <div class="bg-white rounded-lg shadow-lg overflow-hidden transition-transform transform hover:scale-105">
                <div class="bg-cover bg-center h-80" style="background-image: url('{{ asset('storage/' . $blog->image) }}');"></div>
                <div class="p-4">
                    <h2 class="text-xl font-semibold text-[#201A09]">{{ $blog->judul }}</h2>
                    <p class="text-gray-600 mt-2">{{ Str::limit($blog->isi, 100) }}</p> <!-- Batasi panjang teks untuk tampilan lebih rapi -->
                    <a href="{{ route('admin.show-blog', $blog->id) }}" class="inline-block mt-4 bg-[#A07D1C] text-white px-4 py-2 rounded-lg font-bold hover:bg-[#A07D1C]/80">Baca Selengkapnya</a>
                </div>
            </div>
        @endforeach
    @endif
</div>
@endsection
