<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <link rel="icon" type="image/png" href="{{ asset('images/wikrama-logo.png') }}">
</head>
<body class="bg-gray-800 text-white">
    <div class="flex">
        <div class="w-64 bg-gray-800 text-white">
            <div class="p-3 flex items-center">
                <img src="{{ asset('images/wikrama-logo.png') }}" alt="Wikrama Logo" class="w-12 h-12 mr-4"> <!-- Image of Wikrama -->
                <h1 class="text-2xl font-bold">SMK WIKRAMA</h1>
            </div>            
            <nav class="mt-4">
                <a href="/admin" class="block py-2 px-4 hover:bg-gray-700">Dashboard</a>
                <a href="/admin/blog" class="block py-2 px-4 hover:bg-gray-700">Blog</a>
                <a href="/admin/galeri" class="block py-2 px-4 hover:bg-gray-700">Galeri</a>
                <a href="/admin/peminjaman" class="block py-2 px-4 hover:bg-gray-700">Peminjaman</a>
                <a href="/admin/profil" class="block py-2 px-4 hover:bg-gray-700">Profile</a>
                <a href="/admin/user" class="block py-2 px-4 hover:bg-gray-700">Users</a>
                <a href="/admin/visimisi" class="block py-2 px-4 hover:bg-gray-700">Visi Misi</a>
                <a href="/admin/bukutamu" class="block py-2 px-4 hover:bg-gray-700">Buku Tamu</a>
                <a href="/admin/buku" class="block py-2 px-4 hover:bg-gray-700">Buku</a>
                <a href="/admin/funfact" class="block py-2 px-4 hover:bg-gray-700">Funfact</a>
            </nav>
        </div>
        <div class="w-5/6 p-6">
            <header class="flex justify-between items-center mb-6">
                <h2 class="text-2xl font-bold">Dashboard</h2>
                <div class="flex items-center">
                    <span class="mr-2 font-bold">Admin</span>
                    <img src="{{ asset('images/logo-login.jpg') }}" alt="Profile" class="w-10 h-10 rounded-full">
                </div>
            </header>
            <main>
                @yield('content')
            </main>
        </div>
    </div>
</body>
</html>
