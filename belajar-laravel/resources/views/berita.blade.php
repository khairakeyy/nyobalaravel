{{-- File: resources/views/berita.blade.php --}}

@extends('layouts.app') {{-- Memberitahu Blade untuk menggunakan layout app.blade.php --}}

@section('content') {{-- Mendefinisikan bagian konten yang akan dimasukkan ke @yield('content') --}}
<div class="container mx-auto px-6 py-10">
    <div class="flex justify-between items-center mb-6">
        <h2 class="text-2xl font-bold text-gray-800">Berita Terbaru</h2>
        <a href="#" class="text-sm font-semibold text-blue-600 hover:underline">Lihat Semua →</a>
    </div>

    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">

        <div class="bg-white rounded-lg shadow-md overflow-hidden flex flex-col">
            <img src="https://picsum.photos/seed/kppu1/400/250" alt="Berita 1" class="w-full h-40 object-cover">
            <div class="p-4 flex flex-col flex-grow">
                <div class="flex items-center mb-3">
                    <img src="https://i.pravatar.cc/150?u=saanepi" alt="Author" class="w-6 h-6 rounded-full mr-2">
                    <span class="text-xs text-gray-600">Saanepi Putra</span>
                </div>
                <h3 class="font-semibold text-gray-800 mb-4 flex-grow">KPPU Kembali Gelar Sidang Perkara Tender Mesin Induk MTU di Dirjen Bea Cukai</h3>
                <a href="#" class="text-xs font-semibold text-white bg-[#00897b] py-1 px-3 rounded-full w-max hover:bg-teal-700">Baca Selengkapnya</a>
            </div>
        </div>

        <div class="bg-white rounded-lg shadow-md overflow-hidden flex flex-col">
            <img src="https://picsum.photos/seed/kppu2/400/250" alt="Berita 2" class="w-full h-40 object-cover">
            <div class="p-4 flex flex-col flex-grow">
                <div class="flex items-center mb-3">
                    <img src="https://i.pravatar.cc/150?u=saras" alt="Author" class="w-6 h-6 rounded-full mr-2">
                    <span class="text-xs text-gray-600">Saras Larasati</span>
                </div>
                <h3 class="font-semibold text-gray-800 mb-4 flex-grow">Audiensi dan Diskusi Kantor Wilayah VI KPPU Makassar dan Badan Pusat Statistik (BPS)</h3>
                <a href="#" class="text-xs font-semibold text-white bg-[#00897b] py-1 px-3 rounded-full w-max hover:bg-teal-700">Baca Selengkapnya</a>
            </div>
        </div>

        {{-- Kamu bisa duplikat kartu berita di sini sesuai kebutuhan --}}
        <div class="bg-white rounded-lg shadow-md overflow-hidden flex flex-col">
            <img src="https://picsum.photos/seed/kppu3/400/250" alt="Berita 3" class="w-full h-40 object-cover">
            <div class="p-4 flex flex-col flex-grow">
                <div class="flex items-center mb-3">
                    <img src="https://i.pravatar.cc/150?u=saanepi3" alt="Author" class="w-6 h-6 rounded-full mr-2">
                    <span class="text-xs text-gray-600">Saanepi Putra</span>
                </div>
                <h3 class="font-semibold text-gray-800 mb-4 flex-grow">KPPU Kembali Gelar Sidang Perkara Tender Mesin Induk MTU di Dirjen Bea Cukai</h3>
                <a href="#" class="text-xs font-semibold text-white bg-[#00897b] py-1 px-3 rounded-full w-max hover:bg-teal-700">Baca Selengkapnya</a>
            </div>
        </div>
        
        <div class="bg-white rounded-lg shadow-md overflow-hidden flex flex-col">
            <img src="https://picsum.photos/seed/kppu4/400/250" alt="Berita 4" class="w-full h-40 object-cover">
            <div class="p-4 flex flex-col flex-grow">
                <div class="flex items-center mb-3">
                    <img src="https://i.pravatar.cc/150?u=saras4" alt="Author" class="w-6 h-6 rounded-full mr-2">
                    <span class="text-xs text-gray-600">Saras Larasati</span>
                </div>
                <h3 class="font-semibold text-gray-800 mb-4 flex-grow">Audiensi dan Diskusi Kantor Wilayah VI KPPU Makassar dan Badan Pusat Statistik (BPS)</h3>
                <a href="#" class="text-xs font-semibold text-white bg-[#00897b] py-1 px-3 rounded-full w-max hover:bg-teal-700">Baca Selengkapnya</a>
            </div>
        </div>
        
    </div>
</div>
@endsection