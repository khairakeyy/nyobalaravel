{{-- File: resources/views/home.blade.php --}}

@extends('layouts.app')

@section('content')

{{-- 1. Hero Section --}}
<section class="relative h-[60vh] bg-cover bg-center text-white" style="background-image: url('https://images.unsplash.com/photo-1506744038136-46273834b3fb?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8Mnx8Y2l0eSUyMGJhY2tncm91bmR8ZW58MHx8MHx8fDA%3D&w=1000&q=80');">
    {{-- Overlay gelap untuk membuat teks lebih terbaca --}}
    <div class="absolute inset-0 bg-black bg-opacity-50"></div>

    <div class="relative z-10 container mx-auto flex flex-col justify-center h-full px-6">
        <h1 class="text-4xl md:text-6xl font-bold max-w-2xl leading-tight">
            KPPU selesaikan proses transformasi kepegawaiannya
        </h1>
        <a href="/berita.blade.php" class="mt-6 border border-white px-8 py-3 w-max hover:bg-white hover:text-black transition duration-300">
            Baca Selengkapnya
        </a>
    </div>
</section>

{{-- 2. Menu Ikon di Bawah Hero --}}
<section class="bg-gray-100 -mt-16 relative z-20">
    <div class="container mx-auto px-6 py-10">
        {{-- Grid container --}}
        <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-6 gap-5">

            {{-- Tombol 1: Regulasi --}}
            <a href="#" class="bg-white rounded-lg shadow-md p-4 flex flex-col items-center justify-center text-center hover:shadow-xl hover:-translate-y-1 transition-all duration-300">
                <div class="border-2 border-gray-200 rounded-md p-3 mb-3">
                    <i class="fas fa-file-alt fa-2x text-gray-600"></i>
                </div>
                <span class="font-semibold text-sm text-gray-700">Regulasi</span>
            </a>

            {{-- Tombol 2: Putusan --}}
            <a href="#" class="bg-white rounded-lg shadow-md p-4 flex flex-col items-center justify-center text-center hover:shadow-xl hover:-translate-y-1 transition-all duration-300">
                <div class="border-2 border-gray-200 rounded-md p-3 mb-3">
                    <i class="fas fa-gavel fa-2x text-gray-600"></i>
                </div>
                <span class="font-semibold text-sm text-gray-700">Putusan</span>
            </a>

            {{-- Tombol 3: Jadwal Sidang --}}
            <a href="#" class="bg-white rounded-lg shadow-md p-4 flex flex-col items-center justify-center text-center hover:shadow-xl hover:-translate-y-1 transition-all duration-300">
                <div class="border-2 border-gray-200 rounded-md p-3 mb-3">
                    <i class="fas fa-balance-scale fa-2x text-gray-600"></i>
                </div>
                <span class="font-semibold text-sm text-gray-700">Jadwal Sidang</span>
            </a>

            {{-- Tombol 4: Siaran Pers --}}
            <a href="#" class="bg-white rounded-lg shadow-md p-4 flex flex-col items-center justify-center text-center hover:shadow-xl hover:-translate-y-1 transition-all duration-300">
                <div class="border-2 border-gray-200 rounded-md p-3 mb-3">
                    <i class="fas fa-newspaper fa-2x text-gray-600"></i>
                </div>
                <span class="font-semibold text-sm text-gray-700">Siaran Pers</span>
            </a>

            {{-- Tombol 5: Tanya Jawab --}}
            <a href="#" class="bg-white rounded-lg shadow-md p-4 flex flex-col items-center justify-center text-center hover:shadow-xl hover:-translate-y-1 transition-all duration-300">
                <div class="border-2 border-gray-200 rounded-md p-3 mb-3">
                    <i class="fas fa-search fa-2x text-gray-600"></i>
                </div>
                <span class="font-semibold text-sm text-gray-700">Tanya Jawab</span>
            </a>

            {{-- Tombol 6: PPID --}}
            <a href="#" class="bg-white rounded-lg shadow-md p-4 flex flex-col items-center justify-center text-center hover:shadow-xl hover:-translate-y-1 transition-all duration-300">
                <div class="border-2 border-red-200 rounded-md p-3 mb-3">
                    <i class="fas fa-envelope-open-text fa-2x text-red-500"></i>
                </div>
                <span class="font-semibold text-sm text-gray-700">PPID</span>
            </a>

        </div>
    </div>
</section>

{{-- Kamu bisa menambahkan section lain di sini, misalnya section berita --}}

@endsection