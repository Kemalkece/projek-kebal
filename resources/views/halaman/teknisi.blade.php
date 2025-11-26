<section id="teknisi" class="py-20 bg-white">
    <div class="container mx-auto px-6 lg:px-16">
        
        <!-- Heading -->
        <div class="text-center">
            <h2 class="text-4xl font-bold text-gray-800 relative inline-block">
                Teknisi Kami
                <span class="absolute -right-10 -top-6 hidden lg:block text-gray-200">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-14 h-14" fill="currentColor"
                         viewBox="0 0 975.036 975.036">
                        <path d="M925.036 57.197h-304c-27.6 0-50 22.4-50 50v304c0 27.601 22.4 50 50 50h145.5c-1.9 79.601-20.4 143.3-55.4 191.2-27.6 37.8-69.399 69.1-125.3 93.8-25.7 11.3-36.8 41.7-24.8 67.101l36 76c11.6 24.399 40.3 35.1 65.1 24.399 66.2-28.6 122.101-64.8 167.7-108.8 55.601-53.7 93.7-114.3 114.3-181.9 20.601-67.6 30.9-159.8 30.9-276.8v-239c0-27.599-22.401-50-50-50z"></path>
                    </svg>
                </span>
            </h2>

            <div class="w-40 mx-auto mt-4 h-1 bg-purple-400 rounded-full"></div>
        </div>

        <!-- List Teknisi -->
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-10 mt-14">
            @forelse($teknisis as $teknisi)
                <div class="bg-white shadow-md rounded-xl p-6 border border-gray-100 hover:shadow-xl transition-all duration-300">
                    
                    <!-- Foto Profil -->
                    <div class="flex justify-center mb-5">
                        <div class="w-24 h-24 rounded-full overflow-hidden border-4 border-purple-400 shadow-lg">
                            <img src="{{ asset('storage/' . $teknisi->path_foto) }}"
                                 alt="Foto {{ $teknisi->name }}"
                                 class="w-full h-full object-cover">
                        </div>
                    </div>

                    <!-- Informasi Teknisi -->
                    <div class="space-y-4">
                        <!-- Nama -->
                        <div class="text-center">
                            <h4 class="text-2xl font-bold text-gray-800">{{ $teknisi->name }}</h4>
                        </div>

                        <!-- Divider -->
                        <div class="border-t border-gray-200"></div>

                        <!-- Nomor HP -->
                        <div>
                            <p class="text-xs font-semibold text-purple-600 uppercase mb-1">Nomor Hp</p>
                            <p class="text-gray-800 font-medium">{{ $teknisi->no_hp }}</p>
                        </div>

                        <!-- Keahlian -->
                        <div>
                            <p class="text-xs font-semibold text-purple-600 uppercase mb-1">Keahlian</p>
                            <p class="text-gray-800 font-medium">{{ $teknisi->keahlian }}</p>
                        </div>

                        <!-- Deskripsi -->
                        <div>
                            <p class="text-xs font-semibold text-purple-600 uppercase mb-1">Deskripsi</p>
                            <p class="text-gray-700 leading-relaxed">{{ $teknisi->deskripsi }}</p>
                        </div>
                    </div>

                </div>
            @empty
                <div class="col-span-full text-center py-12">
                    <p class="text-gray-500 text-lg">Tidak ada teknisi tersedia.</p>
                </div>
            @endforelse
        </div>

    </div>
</section>