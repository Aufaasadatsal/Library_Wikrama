@extends('layouts.app')

@section('content')
<div class="container mx-auto px-4 sm:px-8">
    <div class="py-8">
        <div class="flex items-center justify-between mb-6">
            <h2 class="text-3xl font-semibold text-gray-200">Daftar Peminjaman Buku</h2>
            <button class="bg-blue-600 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-lg transition duration-300 ease-in-out transform hover:scale-105">
                + Tambah Peminjaman
            </button>
        </div>

        <div class="bg-gray-700 shadow-md rounded-lg overflow-hidden">
            <table class="min-w-full leading-normal">
                <thead>
                    <tr class="bg-gray-600 text-white">
                        <th class="px-5 py-3 border-b-2 border-gray-500 text-left text-xs font-semibold uppercase tracking-wider">
                            Nama Peminjam
                        </th>
                        <th class="px-5 py-3 border-b-2 border-gray-500 text-left text-xs font-semibold uppercase tracking-wider">
                            NIS
                        </th>
                        <th class="px-5 py-3 border-b-2 border-gray-500 text-left text-xs font-semibold uppercase tracking-wider">
                            Buku
                        </th>
                        <th class="px-5 py-3 border-b-2 border-gray-500 text-left text-xs font-semibold uppercase tracking-wider">
                            Tanggal Pinjam
                        </th>
                        <th class="px-5 py-3 border-b-2 border-gray-500 text-center text-xs font-semibold uppercase tracking-wider">
                            Aksi
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <!-- Placeholder data -->
                    @for ($i = 1; $i <= 5; $i++)
                    <tr class="hover:bg-gray-600 transition duration-200 ease-in-out">
                        <td class="px-5 py-5 border-b border-gray-500 text-sm">
                            <div class="flex items-center">
                                <div class="ml-3">
                                    <p class="text-white whitespace-no-wrap">
                                        Nama Peminjam {{ $i }}
                                    </p>
                                </div>
                            </div>
                        </td>
                        <td class="px-5 py-5 border-b border-gray-500 text-sm">
                            <p class="text-white whitespace-no-wrap">12345{{ $i }}</p>
                        </td>
                        <td class="px-5 py-5 border-b border-gray-500 text-sm">
                            <div class="flex items-center">
                                <div class="flex-shrink-0 w-16 h-16">
                                    <img class="w-full h-full rounded-lg object-cover" 
                                         src="https://via.placeholder.com/100" 
                                         alt="Buku {{ $i }}"/>
                                </div>
                                <div class="ml-3">
                                    <p class="text-white whitespace-no-wrap">
                                        Judul Buku {{ $i }}
                                    </p>
                                </div>
                            </div>
                        </td>
                        <td class="px-5 py-5 border-b border-gray-500 text-sm">
                            <p class="text-white whitespace-no-wrap">
                                {{ now()->format('d M Y') }}
                            </p>
                        </td>
                        <td class="px-5 py-5 border-b border-gray-500 text-sm text-center">
                            <div class="flex justify-center space-x-2">
                                <a href="#" class="text-blue-400 hover:text-blue-600 transition duration-300">
                                    <i class="fas fa-edit"></i>
                                </a>
                                <a href="#" class="text-red-400 hover:text-red-600 transition duration-300">
                                    <i class="fas fa-trash"></i>
                                </a>
                            </div>
                        </td>
                    </tr>
                    @endfor
                </tbody>
            </table>
        </div>

        <!-- Pagination -->
        <div class="mt-4">
            <!-- Placeholder pagination -->
            <nav class="flex justify-center">
                <ul class="inline-flex -space-x-px">
                    <li><a href="#" class="px-3 py-2 ml-0 leading-tight text-gray-400 bg-gray-800 border border-gray-700 hover:bg-gray-700">Previous</a></li>
                    <li><a href="#" class="px-3 py-2 leading-tight text-gray-400 bg-gray-800 border border-gray-700 hover:bg-gray-700">1</a></li>
                    <li><a href="#" class="px-3 py-2 leading-tight text-gray-400 bg-gray-800 border border-gray-700 hover:bg-gray-700">2</a></li>
                    <li><a href="#" class="px-3 py-2 leading-tight text-gray-400 bg-gray-800 border border-gray-700 hover:bg-gray-700">3</a></li>
                    <li><a href="#" class="px-3 py-2 leading-tight text-gray-400 bg-gray-800 border border-gray-700 hover:bg-gray-700">Next</a></li>
                </ul>
            </nav>
        </div>
    </div>
</div>
@endsection
