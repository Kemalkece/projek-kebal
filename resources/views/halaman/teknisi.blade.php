<section id="teknisi" class="py-20 lg:py-32 bg-[#0a0e14] relative overflow-hidden">
    
    <!-- Background Effects -->
    <div class="absolute inset-0 overflow-hidden pointer-events-none opacity-40">
        <div class="absolute top-1/3 left-1/4 w-96 h-96 bg-blue-500/10 rounded-full blur-3xl"></div>
        <div class="absolute bottom-1/3 right-1/4 w-96 h-96 bg-purple-500/10 rounded-full blur-3xl"></div>
    </div>

    <div class="container relative z-10 mx-auto px-4 lg:px-8">
        
        <!-- Section Header -->
        <div class="text-center max-w-3xl mx-auto mb-16">
            <div class="inline-flex items-center space-x-2 px-4 py-2 bg-blue-500/10 border border-blue-500/20 rounded-full mb-6">
                <svg class="w-4 h-4 text-blue-400" fill="currentColor" viewBox="0 0 24 24">
                    <path d="M12 12c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm0 2c-2.67 0-8 1.34-8 4v2h16v-2c0-2.66-5.33-4-8-4z"/>
                </svg>
                <span class="text-sm text-blue-400 font-medium">Tim Profesional</span>
            </div>
            
            <h2 class="text-4xl lg:text-5xl font-bold text-white mb-4">
                Teknisi <span class="bg-gradient-to-r from-blue-400 to-purple-500 bg-clip-text text-transparent">Berpengalaman</span>
            </h2>
            
            <p class="text-lg text-gray-400">
                Dipercaya oleh ratusan pelanggan dengan layanan terbaik dan profesional
            </p>
        </div>

        <!-- Teknisi Cards -->
        <div class="relative">
            <!-- Gradient fade on edges for scroll effect -->
            <div class="absolute left-0 top-0 bottom-0 w-20 bg-gradient-to-r from-[#0a0e14] to-transparent z-10 pointer-events-none"></div>
            <div class="absolute right-0 top-0 bottom-0 w-20 bg-gradient-to-l from-[#0a0e14] to-transparent z-10 pointer-events-none"></div>
            
            <div class="overflow-x-auto pb-4 scrollbar-hide">
                <div class="flex gap-6 px-4 min-w-max">
                    @forelse($teknisis as $teknisi)
                        <div class="group relative w-80 flex-shrink-0">
                            <!-- Card -->
                            <div class="relative bg-gradient-to-br from-[#151b23] to-[#0d1117] rounded-2xl p-8 border border-gray-800 hover:border-blue-500/50 transition-all duration-300 hover:shadow-xl hover:shadow-blue-500/10 transform hover:-translate-y-2">
                                
                                <!-- Avatar with gradient ring -->
                                <div class="flex justify-center mb-6">
                                    <div class="relative">
                                        <div class="absolute inset-0 bg-gradient-to-r from-blue-500 to-purple-600 rounded-full blur-lg opacity-50 group-hover:opacity-75 transition-opacity"></div>
                                        <div class="relative w-28 h-28 rounded-full p-1 bg-gradient-to-r from-blue-500 to-purple-600">
                                            <img src="{{ asset('storage/' . $teknisi->path_foto) }}"
                                                 alt="{{ $teknisi->name }}"
                                                 class="w-full h-full object-cover rounded-full border-4 border-[#0d1117]">
                                        </div>
                                    </div>
                                </div>

                                <!-- Info -->
                                <div class="text-center space-y-4">
                                    <h3 class="text-2xl font-bold text-white">{{ $teknisi->name }}</h3>
                                    
                                    <div class="inline-flex items-center px-3 py-1 bg-blue-500/10 border border-blue-500/20 rounded-full">
                                        <svg class="w-4 h-4 text-blue-400 mr-2" fill="currentColor" viewBox="0 0 24 24">
                                            <path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-2 15l-5-5 1.41-1.41L10 14.17l7.59-7.59L19 8l-9 9z"/>
                                        </svg>
                                        <span class="text-sm text-blue-400 font-medium">{{ $teknisi->keahlian }}</span>
                                    </div>
                                </div>

                                <!-- Details -->
                                <div class="mt-6 space-y-4 pt-6 border-t border-gray-800">
                                    <div class="flex items-start space-x-3">
                                        <svg class="w-5 h-5 text-gray-400 mt-0.5 flex-shrink-0" fill="currentColor" viewBox="0 0 24 24">
                                            <path d="M6.62 10.79c1.44 2.83 3.76 5.14 6.59 6.59l2.2-2.2c.27-.27.67-.36 1.02-.24 1.12.37 2.33.57 3.57.57.55 0 1 .45 1 1V20c0 .55-.45 1-1 1-9.39 0-17-7.61-17-17 0-.55.45-1 1-1h3.5c.55 0 1 .45 1 1 0 1.25.2 2.45.57 3.57.11.35.03.74-.25 1.02l-2.2 2.2z"/>
                                        </svg>
                                        <div>
                                            <p class="text-xs text-gray-500 uppercase tracking-wider mb-1">Kontak</p>
                                            <p class="text-white font-medium">{{ $teknisi->no_hp }}</p>
                                        </div>
                                    </div>

                                    <div class="flex items-start space-x-3">
                                        <svg class="w-5 h-5 text-gray-400 mt-0.5 flex-shrink-0" fill="currentColor" viewBox="0 0 24 24">
                                            <path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm1 15h-2v-6h2v6zm0-8h-2V7h2v2z"/>
                                        </svg>
                                        <div>
                                            <p class="text-xs text-gray-500 uppercase tracking-wider mb-1">Deskripsi</p>
                                            <p class="text-gray-300 text-sm leading-relaxed">{{ $teknisi->deskripsi }}</p>
                                        </div>
                                    </div>
                                </div>

                                <!-- CTA -->
                                <a href="https://wa.me/{{ $teknisi->no_hp }}" 
                                   target="_blank"
                                   class="block w-full mt-6 px-6 py-3 bg-gradient-to-r from-blue-500 to-purple-600 hover:from-blue-600 hover:to-purple-700 text-white font-semibold rounded-xl transition-all duration-300 transform hover:scale-105 shadow-lg shadow-blue-500/25 text-center">
                                    Hubungi Teknisi
                                </a>
                            </div>
                        </div>
                    @empty
                        <div class="w-full text-center py-20">
                            <div class="inline-flex items-center justify-center w-16 h-16 bg-gray-800 rounded-full mb-4">
                                <svg class="w-8 h-8 text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"/>
                                </svg>
                            </div>
                            <p class="text-gray-500 text-lg">Tidak ada teknisi tersedia saat ini</p>
                        </div>
                    @endforelse
                </div>
            </div>
        </div>

    </div>

    <style>
        .scrollbar-hide::-webkit-scrollbar {
            display: none;
        }
        .scrollbar-hide {
            -ms-overflow-style: none;
            scrollbar-width: none;
        }
    </style>
</section>