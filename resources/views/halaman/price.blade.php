<section class="py-20 lg:py-32 bg-gradient-to-br from-[#0d1117] to-[#0a0e14] relative overflow-visible" id="price">
    
    <!-- Background Effects -->
    <div class="absolute inset-0 overflow-hidden pointer-events-none opacity-30 -z-10">
        <div class="absolute top-1/4 right-1/4 w-96 h-96 bg-blue-500/20 rounded-full blur-3xl"></div>
        <div class="absolute bottom-1/4 left-1/4 w-96 h-96 bg-purple-500/20 rounded-full blur-3xl"></div>
    </div>

    <div class="container relative z-10 mx-auto px-4 lg:px-8 max-w-7xl">
        
        <!-- Section Header -->
        <div class="text-center max-w-3xl mx-auto mb-16">
            <div class="inline-flex items-center space-x-2 px-4 py-2 bg-blue-500/10 border border-blue-500/20 rounded-full mb-6">
                <svg class="w-4 h-4 text-blue-400" fill="currentColor" viewBox="0 0 24 24">
                    <path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm1.41 16.09V20h-2.67v-1.93c-1.71-.36-3.16-1.46-3.27-3.4h1.96c.1 1.05.82 1.87 2.65 1.87 1.96 0 2.4-.98 2.4-1.59 0-.83-.44-1.61-2.67-2.14-2.48-.6-4.18-1.62-4.18-3.67 0-1.72 1.39-2.84 3.11-3.21V4h2.67v1.95c1.86.45 2.79 1.86 2.85 3.39H14.3c-.05-1.11-.64-1.87-2.22-1.87-1.5 0-2.4.68-2.4 1.64 0 .84.65 1.39 2.67 1.91s4.18 1.39 4.18 3.91c-.01 1.83-1.38 2.83-3.12 3.16z"/>
                </svg>
                <span class="text-sm text-blue-400 font-medium">Paket Layanan</span>
            </div>
            
            <h2 class="text-4xl lg:text-5xl font-bold text-white mb-4">
                Harga <span class="bg-gradient-to-r from-blue-400 to-purple-500 bg-clip-text text-transparent">Transparan</span>
            </h2>
            
            <p class="text-lg text-gray-400">
                Pilih paket yang sesuai dengan kebutuhan service Anda
            </p>
        </div>

        <!-- Pricing Cards -->
        <div class="grid lg:grid-cols-3 gap-8 max-w-6xl mx-auto">
            
            <!-- Starter Package -->
            <div class="group relative">
                <div class="relative bg-gradient-to-br from-[#151b23] to-[#0d1117] rounded-2xl p-8 border border-gray-800 hover:border-blue-500/50 transition-all duration-300 h-full flex flex-col">
                    
                    <div class="mb-8">
                        <h3 class="text-2xl font-bold text-white mb-2">Starter</h3>
                        <p class="text-gray-400 text-sm">Cocok untuk masalah sederhana</p>
                    </div>

                    <div class="mb-8">
                        <div class="flex items-end gap-2">
                            <span class="text-5xl font-bold text-white">100K</span>
                            <span class="text-gray-400 mb-2">/ perbaikan</span>
                        </div>
                    </div>

                    <ul class="space-y-4 mb-8 flex-grow">
                        <li class="flex items-start gap-3">
                            <svg class="w-5 h-5 text-blue-400 flex-shrink-0 mt-0.5" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41L9 16.17z"/>
                            </svg>
                            <span class="text-gray-300">Diagnosis Masalah</span>
                        </li>
                        <li class="flex items-start gap-3">
                            <svg class="w-5 h-5 text-blue-400 flex-shrink-0 mt-0.5" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41L9 16.17z"/>
                            </svg>
                            <span class="text-gray-300">Perbaikan Sederhana</span>
                        </li>
                        <li class="flex items-start gap-3">
                            <svg class="w-5 h-5 text-blue-400 flex-shrink-0 mt-0.5" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41L9 16.17z"/>
                            </svg>
                            <span class="text-gray-300">Garansi 1 Bulan</span>
                        </li>
                    </ul>

                    <a href="{{ route('order.form', 'starter') }}">
                        <button class="w-full py-3 bg-white/5 hover:bg-white/10 text-white font-semibold rounded-xl border border-gray-700 hover:border-gray-600 transition-all duration-300">
                            Pilih Paket
                        </button>
                    </a>
                </div>
            </div>

            <!-- Basic Package -->
            <div class="group relative lg:-mt-4">
                <div class="absolute -top-4 left-1/2 transform -translate-x-1/2 z-20">
                    <span class="inline-flex items-center px-4 py-1 bg-gradient-to-r from-blue-500 to-purple-600 text-white text-sm font-semibold rounded-full shadow-lg">
                        <svg class="w-4 h-4 mr-1" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21 12 17.27z"/>
                        </svg>
                        Populer
                    </span>
                </div>

                <div class="relative bg-gradient-to-br from-blue-600/20 to-purple-600/20 rounded-2xl p-8 border-2 border-blue-500/50 shadow-xl shadow-blue-500/25 h-full flex flex-col">
                    
                    <div class="mb-8">
                        <h3 class="text-2xl font-bold text-white mb-2">Basic</h3>
                        <p class="text-gray-300 text-sm">Paling banyak dipilih</p>
                    </div>

                    <div class="mb-8">
                        <div class="flex items-end gap-2">
                            <span class="text-5xl font-bold bg-gradient-to-r from-blue-400 to-purple-500 bg-clip-text text-transparent">150K</span>
                            <span class="text-gray-300 mb-2">/ perbaikan</span>
                        </div>
                    </div>

                    <ul class="space-y-4 mb-8 flex-grow">
                        <li class="flex items-start gap-3">
                            <svg class="w-5 h-5 text-blue-400 flex-shrink-0 mt-0.5" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41L9 16.17z"/>
                            </svg>
                            <span class="text-white font-medium">Diagnosis mendalam</span>
                        </li>
                        <li class="flex items-start gap-3">
                            <svg class="w-5 h-5 text-blue-400 flex-shrink-0 mt-0.5" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41L9 16.17z"/>
                            </svg>
                            <span class="text-white font-medium">Perbaikan komponen</span>
                        </li>
                        <li class="flex items-start gap-3">
                            <svg class="w-5 h-5 text-blue-400 flex-shrink-0 mt-0.5" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41L9 16.17z"/>
                            </svg>
                            <span class="text-white font-medium">Garansi 3 Bulan</span>
                        </li>
                        <li class="flex items-start gap-3">
                            <svg class="w-5 h-5 text-blue-400 flex-shrink-0 mt-0.5" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41L9 16.17z"/>
                            </svg>
                            <span class="text-white font-medium">Konsultasi Gratis</span>
                        </li>
                        <li class="flex items-start gap-3">
                            <svg class="w-5 h-5 text-blue-400 flex-shrink-0 mt-0.5" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41L9 16.17z"/>
                            </svg>
                            <span class="text-white font-medium">Gratis Antar Jemput</span>
                        </li>
                    </ul>

                    <a href="{{ route('order.form', 'basic') }}">
                        <button class="w-full py-3 bg-gradient-to-r from-blue-500 to-purple-600 hover:from-blue-600 hover:to-purple-700 text-white font-semibold rounded-xl shadow-lg shadow-blue-500/25 transition-all duration-300 transform hover:scale-105">
                            Pilih Paket
                        </button>
                    </a>
                </div>
            </div>

            <!-- Plus Package -->
            <div class="group relative">
                <div class="relative bg-gradient-to-br from-[#151b23] to-[#0d1117] rounded-2xl p-8 border border-gray-800 hover:border-purple-500/50 transition-all duration-300 h-full flex flex-col">
                    
                    <div class="mb-8">
                        <h3 class="text-2xl font-bold text-white mb-2">Plus</h3>
                        <p class="text-gray-400 text-sm">Service kompleks & menyeluruh</p>
                    </div>

                    <div class="mb-8">
                        <div class="flex items-end gap-2">
                            <span class="text-5xl font-bold text-white">250K</span>
                            <span class="text-gray-400 mb-2">/ perbaikan</span>
                        </div>
                    </div>

                    <ul class="space-y-4 mb-8 flex-grow">
                        <li class="flex items-start gap-3">
                            <svg class="w-5 h-5 text-purple-400 flex-shrink-0 mt-0.5" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41L9 16.17z"/>
                            </svg>
                            <span class="text-gray-300">Semua fitur Basic</span>
                        </li>
                        <li class="flex items-start gap-3">
                            <svg class="w-5 h-5 text-purple-400 flex-shrink-0 mt-0.5" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41L9 16.17z"/>
                            </svg>
                            <span class="text-gray-300">Service Menyeluruh</span>
                        </li>
                        <li class="flex items-start gap-3">
                            <svg class="w-5 h-5 text-purple-400 flex-shrink-0 mt-0.5" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41L9 16.17z"/>
                            </svg>
                            <span class="text-gray-300">Garansi 6 Bulan</span>
                        </li>
                        <li class="flex items-start gap-3">
                            <svg class="w-5 h-5 text-purple-400 flex-shrink-0 mt-0.5" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41L9 16.17z"/>
                            </svg>
                            <span class="text-gray-300">Prioritas Layanan</span>
                        </li>
                    </ul>

                    <a href="{{ route('order.form', 'plus') }}">
                        <button class="w-full py-3 bg-white/5 hover:bg-white/10 text-white font-semibold rounded-xl border border-gray-700 hover:border-gray-600 transition-all duration-300">
                            Pilih Paket
                        </button>
                    </a>
                </div>
            </div>

        </div>

        <!-- Additional Info -->
        <div class="mt-16 text-center">
            <p class="text-gray-400">
                Butuh paket khusus? 
                <a href="#" class="text-blue-400 hover:text-blue-300 font-medium underline">Hubungi kami</a> 
                untuk penawaran custom
            </p>
        </div>

    </div>
</section>
