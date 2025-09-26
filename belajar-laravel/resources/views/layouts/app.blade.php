{{-- File: resources/views/layouts/app.blade.php --}}

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
<body class="bg-gray-100">

    <header class="bg-white shadow-sm">
        <div class="container mx-auto px-6 py-4">
            <div class="flex items-center justify-between">
                <a href="/">
                    <img src="https://kppu.go.id/wp-content/uploads/2018/09/logo-kppu.png" alt="KPPU Logo" class="h-10">
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

    <section class="bg-[#0a2240]">
        <div class="container mx-auto px-6 py-3">
            <div class="flex items-center space-x-8">
                <h3 class="text-white font-bold text-md">Akses Cepat</h3>
                <div class="flex items-center space-x-8 text-sm text-gray-300">
                    <a href="#" class="hover:text-white">Lapor Pelanggaran</a>
                    <a href="#" class="hover:text-white">Putusan</a>
                    <a href="#" class="hover:text-white">Jadwal Sidang</a>
                    <a href="#" class="hover:text-white">Siaran Pers</a>
                    <a href="#" class="hover:text-white">Materi Edukasi</a>
                    <a href="#" class="hover:text-white">Notifikasi Merger</a>
                </div>
            </div>
        </div>
    </section>

    <section class="bg-red-600">
        <div class="container mx-auto px-6 py-2">
            <div class="flex items-center text-white text-sm">
                <marquee behavior="scroll" direction="left">Segera Laporkan Transaksi Penggabungan, Peleburan, dan Pengambilalihan Saham Melalui https://notifikasi.kppu.go.id !</marquee>
            </div>
        </div>
    </section>

    <main>
        @yield('content')
    </main>

    <div class="fixed bottom-6 right-6">
        <img src="https://statik.tempo.co/data/2016/06/20/id_516906/516906_620.jpg" alt="KPPU Logo" class="h-10">
    </div>

</body>
</html>