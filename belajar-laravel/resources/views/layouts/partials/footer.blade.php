{{-- File: resources/views/layouts/partials/footer.blade.php --}}

<footer class="bg-[#1e1e1e] text-gray-300 mt-auto rounded-t-2xl">
    <div class="container mx-auto px-6 py-8">
        
        {{-- Bagian Atas Footer (Mirip Header) --}}
        <div class="flex flex-col md:flex-row items-center justify-between pb-8 border-b border-gray-700 space-y-4 md:space-y-0">
            <a href="{{ route('home') }}">
                <img src="{{ asset('assets/logo.png') }}" alt="KPPU Logo" class="h-10">
            </a>
        </div>

        {{-- Bagian Bawah Footer (Grid Menu) --}}
        <div class="pt-10">
            <h2 class="text-white font-bold text-2xl mb-8">Komisi Pengawas Persaingan Usaha</h2>
            
            <div class="grid grid-cols-2 md:grid-cols-4 lg:grid-cols-6 gap-8 text-sm">
                
                {{-- Kolom 1: Tentang Kami --}}
                <div>
                    <h3 class="font-semibold text-yellow-500 border-b border-yellow-500 inline-block pb-1 mb-3">Tentang Kami</h3>
                    <ul class="space-y-2">
                        <li><a href="#" class="hover:text-white">Visi Misi</a></li>
                        <li><a href="#" class="hover:text-white">Pimpinan Komisi</a></li>
                        <li><a href="#" class="hover:text-white">Struktur Organisasi</a></li>
                        <li><a href="#" class="hover:text-white">Rencana Strategis</a></li>
                        <li><a href="#" class="hover:text-white">Laporan Tahunan</a></li>
                    </ul>
                </div>

                {{-- Kolom 2: Penegakan Hukum --}}
                <div>
                    <h3 class="font-semibold text-yellow-500 border-b border-yellow-500 inline-block pb-1 mb-3">Penegakan Hukum</h3>
                    <ul class="space-y-2">
                        <li><a href="#" class="hover:text-white">Status Perkara</a></li>
                        <li><a href="#" class="hover:text-white">Putusan</a></li>
                        <li><a href="#" class="hover:text-white">Jadwal Sidang</a></li>
                    </ul>
                </div>

                {{-- Kolom 3: Pencegahan --}}
                <div>
                    <h3 class="font-semibold text-yellow-500 border-b border-yellow-500 inline-block pb-1 mb-3">Pencegahan</h3>
                    <ul class="space-y-2">
                        <li><a href="#" class="hover:text-white">Indeks Persaingan Usaha</a></li>
                        <li><a href="#" class="hover:text-white">Program Kepatuhan</a></li>
                        <li><a href="#" class="hover:text-white">KPPU Mendengar</a></li>
                    </ul>
                </div>

                {{-- Kolom 4: Media dan Publikasi --}}
                <div>
                    <h3 class="font-semibold text-yellow-500 border-b border-yellow-500 inline-block pb-1 mb-3">Media & Publikasi</h3>
                    <ul class="space-y-2">
                        <li><a href="#" class="hover:text-white">Siaran Pers</a></li>
                        <li><a href="#" class="hover:text-white">Buku</a></li>
                        <li><a href="#" class="hover:text-white">Majalah Kompetisi</a></li>
                        <li><a href="#" class="hover:text-white">FAQ</a></li>
                    </ul>
                </div>
                
                {{-- Kolom 5: Layanan Publik --}}
                <div>
                    <h3 class="font-semibold text-yellow-500 border-b border-yellow-500 inline-block pb-1 mb-3">Layanan Publik</h3>
                    <ul class="space-y-2">
                        <li><a href="#" class="hover:text-white">Notifikasi Merger</a></li>
                        <li><a href="#" class="hover:text-white">Informasi Publik</a></li>
                        <li><a href="#" class="hover:text-white">Perpustakaan</a></li>
                        <li><a href="#" class="hover:text-white">Pengaduan</a></li>
                    </ul>
                </div>

                {{-- Kolom 6: Kontak --}}
                <div>
                    <h3 class="font-semibold text-yellow-500 border-b border-yellow-500 inline-block pb-1 mb-3">Kontak</h3>
                </div>

            </div>
        </div>
    </div>
</footer>