<x-layout>
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6">
        @foreach ($Kegiatans as $Kegiatan)
            <div 
                x-data="{ y: 0 }"
                x-init="window.addEventListener('scroll', () => { y = window.scrollY / 10 })"
                :style="'transform: translateY(' + y + 'px)'"
                class="max-w-sm bg-white border border-gray-200 rounded-lg shadow-md overflow-hidden transition duration-300 ease-in-out transform hover:scale-105 hover:shadow-lg hover:border-green-500"
            >
                <div class="flex items-center p-4">
                    <div class="flex-shrink-0 w-16 h-16 bg-green-500 rounded-full text-white flex items-center justify-center">
                        <span class="text-xl font-bold">{{ strtoupper(substr($Kegiatan->nama_kegiatan, 0, 1)) }}</span>
                    </div>
                    <div class="ml-4">
                        <h2 class="text-xl font-semibold text-gray-900">{{ $Kegiatan->nama_kegiatan }}</h2>
                        <p class="text-sm text-gray-500">Waktu: {{ $Kegiatan->tanggal_mulai }}</p>
                        <p class="text-sm text-gray-500">Tempat: {{ $Kegiatan->lokasi }}</p>
                    </div>
                </div>
                <div class="p-4">
                    <p class="text-gray-700 text-sm">{{ $Kegiatan->deskripsi }}</p>
                </div>
            </div>
        @endforeach
    </div>
</x-layout>
