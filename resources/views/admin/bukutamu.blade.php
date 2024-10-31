@extends('layouts.app')

@section('content')
    <div class="flex h-screen">
        <!-- Main Content -->
        <div class="flex-1 flex flex-col overflow-hidden">
            <!-- Top Navigation -->
            <header class="bg-white shadow-md p-4 flex justify-between items-center">
                <div class="flex space-x-2">
                    <button class="px-4 py-2 bg-blue-500 text-white rounded">Previous</button>
                    <button class="px-4 py-2 bg-gray-200 text-gray-700 rounded">1</button>
                    <button class="px-4 py-2 bg-gray-200 text-gray-700 rounded">2</button>
                    <button class="px-4 py-2 bg-blue-500 text-white rounded">Next</button>
                </div>
                <div>
                    <button onclick="window.location.href='{{ route('admin.create-bukutamu') }}'" class="bg-blue-500 text-white px-4 py-2 rounded">
                        Add
                    </button>
                </div>
            </header>

            <!-- Content Table -->
            <main class="flex-1 overflow-x-hidden overflow-y-auto bg-gray-200 p-4">
                <table class="w-full bg-white shadow-md rounded">
                    <thead>
                        <tr class="bg-gray-200 text-gray-600 uppercase text-sm leading-normal">
                            <th class="py-3 px-6 text-left">No</th>
                            <th class="py-3 px-6 text-left">Tanggal</th>
                            <th class="py-3 px-6 text-left">Nama</th>
                            <th class="py-3 px-6 text-center">Email</th>
                            <th class="py-3 px-6 text-center">Pesan</th>
                            <th class="py-3 px-6 text-center">Aksi</th>
                        </tr>
                    </thead>
                    <tbody class="text-gray-600 text-sm font-light">
                        @foreach ($bukutamus as $bukutamu)
                            <tr class="border-b border-gray-200 hover:bg-gray-100">
                                <td class="py-3 px-6 text-left whitespace-nowrap">{{ $loop->iteration }}</td>
                                <td class="py-3 px-6 text-center">{{ $bukutamu->tanggal }}</td>
                                <td class="py-3 px-6 text-center">{{ $bukutamu->name }}</td>
                                <td class="py-3 px-6 text-center">{{ $bukutamu->email }}</td>
                                <td class="py-3 px-6 text-center">{{ $bukutamu->pesan }}</td>
                                <td class="py-3 px-6 text-center">
                                    <button onclick="toggleOptions({{ $bukutamu->id }})" class="bg-blue-500 text-white px-3 py-1 rounded text-xs">
                                        Lihat
                                    </button>
                                    <!-- Dropdown Opsi -->
                                    <div id="options-{{ $bukutamu->id }}" class="hidden mt-2 space-y-2">
                                        <a href="{{ route('admin.edit-bukutamu', $bukutamu->id) }}"
                                            class="block bg-green-100 px-4 py-1 rounded hover:bg-green-200">Edit</a>
                                        <button onclick="confirmDelete({{ $bukutamu->id }})"
                                            class="block bg-red-100 px-4 py-1 rounded hover:bg-red-200">Hapus</button>
                                        <form id="delete-form-{{ $bukutamu->id }}" action="{{ route('admin.delete-bukutamu', $bukutamu->id) }}" method="POST" style="display: none;">
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
            const confirmed = confirm('Apakah Anda yakin ingin menghapus bukutamu ini?');
            if (confirmed) {
                // Submit form dengan metode DELETE
                document.getElementById(`delete-form-${id}`).submit();
            }
        }
    </script>
@endsection
