@extends('layouts.app')

@section('content')
<div class="bg-white text-gray-800 p-6 rounded-lg shadow-lg w-full">
    <div class="flex h-screen">
        <div class="flex-1 flex flex-col overflow-hidden">
            <header class="bg-white shadow-md p-4 flex justify-between items-center">
                <div class="flex space-x-2">
                    <button class="px-4 py-2 bg-blue-500 text-white rounded">Previous</button>
                    <button class="px-4 py-2 bg-gray-200 text-gray-700 rounded">1</button>
                    <button class="px-4 py-2 bg-gray-200 text-gray-700 rounded">2</button>
                    <button class="px-4 py-2 bg-blue-500 text-white rounded">Next</button>
                </div>
                <div>
                    <button onclick="window.location.href='{{ route('admin.create-blog') }}'" class="bg-blue-500 text-white px-4 py-2 rounded">
                        Add
                    </button>
                </div>
            </header>

            <main class="flex-1 overflow-x-hidden overflow-y-auto bg-gray-200 p-4">
                <table class="w-full bg-white shadow-md rounded">
                    <thead>
                        <tr class="bg-gray-200 text-gray-600 uppercase text-sm leading-normal">
                            <th class="py-3 px-6 text-left">No</th>
                            <th class="py-3 px-6 text-left">Judul</th>
                            <th class="py-3 px-6 text-left">Isi</th>
                            <th class="py-3 px-6 text-center">Gambar</th>
                            <th class="py-3 px-6 text-center">Status</th>
                            <th class="py-3 px-6 text-center">Aksi</th>
                        </tr>
                    </thead>
                    <tbody class="text-gray-600 text-sm font-light">
                        @foreach ($blogs as $blog)
                        <tr class="border-b border-gray-200 hover:bg-gray-100">
                            <td class="py-3 px-6 text-left whitespace-nowrap">{{ $loop->iteration }}</td>
                            <td class="py-3 px-6 text-left">{{ $blog->judul }}</td>
                            <td class="py-3 px-6 text-left">
                                {{ $blog->isi }}
                            </td>
                            <td class="py-3 px-6 text-center">
                                <img src="{{ asset('storage/' . $blog->image)}}" alt="" class="w-auto h-auto mx-auto">
                            </td>
                            <td class="py-3 px-6 text-center">
                                <span class="bg-green-200 text-green-600 py-1 px-3 rounded-full text-xs">Aktif</span>
                            </td>
                            <td class="py-3 px-6 text-center">
                                <button onclick="toggleOptions({{ $blog->id }})" class="bg-blue-500 text-white px-3 py-1 rounded text-xs">
                                    Lihat
                                </button>
                                <!-- Dropdown Opsi -->
                                <div id="options-{{ $blog->id }}" class="hidden mt-2 space-y-2">
                                    <a href="{{ route('admin.edit-blog', $blog->id) }}"
                                            class="block bg-green-100 px-4 py-1 rounded hover:bg-green-200">Edit</a>
                                    <button onclick="confirmDelete({{ $blog->id }})"
                                            class="block bg-red-100 px-4 py-1 rounded hover:bg-red-200">Hapus</button>
                                        <form id="delete-form-{{ $blog->id }}" action="{{ route('admin.delete-blog', $blog->id) }}" method="POST" style="display: none;">
                                            @csrf
                                            @method('DELETE')
                                        </form>
                                </div>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </main>
        </div>
    </div>

    <script>
        function toggleOptions(id) {
            const element = document.getElementById(`options-${id}`);
            element.classList.toggle('hidden');
        }

        function confirmDelete(id) {
            const confirmed = confirm('Apakah Anda yakin ingin menghapus visi/misi ini?');
            if (confirmed) {
                document.getElementById(`delete-form-${id}`).submit();
            }
        }
    </script>
@endsection
