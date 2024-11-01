@extends('layouts.template')

@section('content')
<div class="max-w-4xl mx-auto py-10">
    <h1 class="text-2xl font-bold mb-6 text-[#201A09]">Latest Blogs</h1>

    <div class="space-y-8">
        @if($blogs->isEmpty())
            <div class="text-center p-6 bg-gray-50 rounded-lg shadow-lg">
                <h2 class="text-3xl font-extrabold text-gray-800">Tidak ada blog yang tersedia.</h2>
                <p class="mt-2 text-gray-500">Silakan cek kembali nanti atau tambahkan blog baru.</p>
            </div>
        @else
            @foreach ($blogs as $blog)
                <div class="bg-white rounded-xl shadow-lg overflow-hidden transform transition duration-300 hover:scale-105 hover:shadow-2xl">
                    <div class="bg-cover bg-center h-96" style="background-image: url('{{ asset('storage/' . $blog->image) }}');"></div>
                    <div class="p-6">
                        <h2 class="text-3xl font-bold text-[#201A09]">{{ $blog->judul }}</h2>
                        <p class="text-gray-600 mt-4">{{ Str::limit($blog->isi, 150) }}</p>
                        <div class="mt-6">
                            <a href="{{ route('admin.show-blog', $blog->id) }}" class="inline-block bg-[#A07D1C] text-white px-6 py-3 rounded-lg font-bold hover:bg-[#8C6B14] transition-colors duration-200">Read More</a>
                        </div>
                    </div>
                </div>
            @endforeach
        @endif
    </div>
</div>
@endsection
