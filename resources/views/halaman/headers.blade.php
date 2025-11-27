<section class="relative min-h-screen flex items-center bg-gradient-to-br from-[#0a0e14] via-[#0d1117] to-[#151b23] pt-20 overflow-hidden">
    
    <!-- Background Effects -->
    <div class="absolute inset-0 overflow-hidden pointer-events-none">
        <div class="absolute top-1/4 -right-48 w-96 h-96 bg-blue-500/10 rounded-full blur-3xl"></div>
        <div class="absolute bottom-1/4 -left-48 w-96 h-96 bg-purple-500/10 rounded-full blur-3xl"></div>
    </div>

    <div class="container relative z-10 mx-auto px-4 lg:px-8 py-16 lg:py-24">
        <div class="grid lg:grid-cols-2 gap-12 lg:gap-16 items-center">
            
            <!-- Content -->
            <div class="space-y-8">
                <div class="inline-flex items-center space-x-2 px-4 py-2 bg-blue-500/10 border border-blue-500/20 rounded-full">
                    <span class="w-2 h-2 bg-blue-500 rounded-full animate-pulse"></span>
                    <span class="text-sm text-blue-400 font-medium">Service Elektronik Profesional</span>
                </div>

                <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold leading-tight">
                    <span class="text-white">Solusi Tepat untuk</span>
                    <span class="block mt-2 bg-gradient-to-r from-blue-400 via-purple-500 to-pink-500 bg-clip-text text-transparent">
                        Elektronik Bermasalah
                    </span>
                </h1>

                <p class="text-lg text-gray-400 leading-relaxed max-w-xl">
                    Teknisi profesional siap membantu perbaikan elektronik Anda dengan cepat, tepat, dan terpercaya. Hubungi kami sekarang!
                </p>

                <div class="flex flex-col sm:flex-row gap-4">
                    <a href="#price" class="group inline-flex items-center justify-center px-8 py-4 bg-gradient-to-r from-blue-500 to-purple-600 hover:from-blue-600 hover:to-purple-700 text-white font-semibold rounded-xl shadow-lg shadow-blue-500/25 hover:shadow-blue-500/40 transition-all duration-300 transform hover:scale-105">
                        <span>Mulai Service</span>
                        <svg class="w-5 h-5 ml-2 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"/>
                        </svg>
                    </a>
                    
                    <a href="#tentang_kami" class="inline-flex items-center justify-center px-8 py-4 bg-white/5 hover:bg-white/10 text-white font-semibold rounded-xl border border-gray-700 hover:border-gray-600 transition-all duration-300">
                        Pelajari Lebih Lanjut
                    </a>
                </div>

                <!-- Stats -->
                <div class="grid grid-cols-3 gap-6 pt-8 border-t border-gray-800">
                    <div>
                        <div class="text-3xl font-bold text-white">500+</div>
                        <div class="text-sm text-gray-400 mt-1">Service Selesai</div>
                    </div>
                    <div>
                        <div class="text-3xl font-bold text-white">98%</div>
                        <div class="text-sm text-gray-400 mt-1">Kepuasan</div>
                    </div>
                    <div>
                        <div class="text-3xl font-bold text-white">24/7</div>
                        <div class="text-sm text-gray-400 mt-1">Support</div>
                    </div>
                </div>
            </div>

            <!-- Image -->
            <div class="relative lg:h-[600px] flex items-center justify-center">
                <div class="relative w-full max-w-lg">
                    <!-- Glow effect -->
                    <div class="absolute inset-0 bg-gradient-to-r from-blue-500/20 to-purple-500/20 blur-3xl rounded-full"></div>
                    
                    <!-- Image -->
                    <img src="{{ asset('kert-removebg-preview.png') }}" 
                         alt="Service Elektronik" 
                         class="relative z-10 w-full h-auto drop-shadow-2xl transform hover:scale-105 transition-transform duration-500">
                </div>
            </div>

        </div>
    </div>

    <!-- Scroll Indicator -->
    <div class="absolute bottom-8 left-1/2 transform -translate-x-1/2">
        <a href="#teknisi" class="flex flex-col items-center text-gray-400 hover:text-white transition-colors group">
            <span class="text-sm mb-2">Scroll</span>
            <svg class="w-6 h-6 animate-bounce" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 14l-7 7m0 0l-7-7m7 7V3"/>
            </svg>
        </a>
    </div>
</section>