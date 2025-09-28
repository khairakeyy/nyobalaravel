{{-- File: resources/views/layouts/app.blade.php (Versi Final) --}}

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ config('app.name', 'Laravel') }}</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap');

        body {
            font-family: 'Inter', sans-serif;
            background-color: #f8f9fa;
        }
    </style>
</head>

<body class="bg-gray-100 flex flex-col min-h-screen"> {{-- Tambahkan flex-col dan min-h-screen --}}

    <header class="bg-white shadow-sm">
        <div class="container mx-auto px-6 py-4">
            <div class="flex items-center justify-between">
                {{-- DIUBAH: Menggunakan logo dari asset lokal --}}
                <a href="{{ route('home') }}">
                    <img src="{{ asset('assets/logo.png') }}" alt="KPPU Logo" class="h-10">
                </a>
                <nav class="hidden md:flex items-center space-x-6 text-sm font-semibold text-gray-700">
                    <a href="#" class="hover:text-blue-700">TENTANG KAMI</a>
                    <a href="#" class="hover:text-blue-700">PENEGAKAN HUKUM</a>
                    <a href="#" class="hover:text-blue-700">PENCEGAHAN</a>
                    <a href="#" class="hover:text-blue-700">MEDIA & PUBLIKASI</a>
                    <a href="#" class="hover:text-blue-700">LAYANAN PUBLIK</a>
                    <a href="#" class="hover:text-blue-700">KANWIL</a>
                    <a href="#" class="hover:text-blue-700">KONTAK</a>
                </nav>
                <div class="flex items-center space-x-2">
                    <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/9/9f/Flag_of_Indonesia.svg/255px-Flag_of_Indonesia.svg.png" alt="Indonesia Flag" class="h-4 rounded-sm">
                    <span class="text-sm font-semibold text-gray-700">IND</span>
                    <i class="fas fa-chevron-down text-xs text-gray-500"></i>
                </div>
            </div>
        </div>
    </header>

    {{-- Hapus section 'Akses Cepat' dan 'Running Text' dari layout utama --}}
    {{-- Biarkan bagian ini diisi oleh halaman konten jika diperlukan --}}

    {{-- Wrapper utama untuk konten dan footer --}}
    <div class="flex-grow">
        <main>
            @yield('content')
        </main>
    </div>


    {{-- DITAMBAHKAN: Memanggil file footer --}}
    @include('layouts.partials.footer')

    {{-- DIPERBAIKI: Kode untuk maskot --}}
    <div class="fixed bottom-6 right-6 z-50">
        <img src="{{ asset('assets/maskot.png') }}" alt="KPPU Maskot" class="h-25">
    </div>

</body>

</html>