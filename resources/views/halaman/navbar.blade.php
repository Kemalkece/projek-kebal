<nav class="fixed top-0 left-0 right-0 z-50 bg-[#0d1117]/80 backdrop-blur-lg border-b border-gray-800/50" x-data="{ showMenu: false }">
    <div class="container mx-auto px-4 lg:px-8">
        <div class="flex items-center justify-between h-20">
            
            <!-- Logo -->
            <a href="#" class="flex items-center space-x-3 group">
                <div class="w-10 h-10 bg-gradient-to-br from-blue-500 to-purple-600 rounded-lg flex items-center justify-center transform group-hover:scale-110 transition-transform duration-300">
                    <svg class="w-6 h-6 text-white" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M12 2L2 7v10c0 5.55 3.84 10.74 9 12 5.16-1.26 9-6.45 9-12V7l-10-5zm0 18c-3.86-.93-7-5.32-7-9V8.3l7-3.11 7 3.11V11c0 3.68-3.14 8.07-7 9z"/>
                        <path d="M9 12l2 2 4-4"/>
                    </svg>
                </div>
                <span class="text-xl font-bold bg-gradient-to-r from-blue-400 to-purple-500 bg-clip-text text-transparent">
                    KeBalservices
                </span>
            </a>

            <!-- Desktop Menu -->
            <div class="hidden md:flex items-center space-x-1">
                <a href="/" class="px-4 py-2 text-sm font-medium text-white hover:text-blue-400 transition-colors rounded-lg hover:bg-white/5">
                    Home
                </a>
                <a href="#teknisi" class="px-4 py-2 text-sm font-medium text-gray-300 hover:text-blue-400 transition-colors rounded-lg hover:bg-white/5">
                    Teknisi
                </a>
                <a href="#price" class="px-4 py-2 text-sm font-medium text-gray-300 hover:text-blue-400 transition-colors rounded-lg hover:bg-white/5">
                    Harga
                </a>
                <a href="#artikel" class="px-4 py-2 text-sm font-medium text-gray-300 hover:text-blue-400 transition-colors rounded-lg hover:bg-white/5">
                    Artikel
                </a>
                <a href="#tentang_kami" class="px-4 py-2 text-sm font-medium text-gray-300 hover:text-blue-400 transition-colors rounded-lg hover:bg-white/5">
                    Tentang
                </a>
            </div>

            <!-- CTA Button -->
            <div class="hidden md:block">
                <a href="#price" class="px-6 py-2.5 bg-gradient-to-r from-blue-500 to-purple-600 hover:from-blue-600 hover:to-purple-700 text-white text-sm font-semibold rounded-lg shadow-lg shadow-blue-500/25 hover:shadow-blue-500/40 transition-all duration-300 transform hover:scale-105">
                    Hubungi Kami
                </a>
            </div>

            <!-- Mobile Menu Button -->
            <button @click="showMenu = !showMenu" class="md:hidden p-2 text-gray-300 hover:text-white hover:bg-white/5 rounded-lg transition-colors">
                <svg x-show="!showMenu" class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/>
                </svg>
                <svg x-show="showMenu" class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" style="display: none;">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
                </svg>
            </button>
        </div>

        <!-- Mobile Menu -->
        <div x-show="showMenu" 
             x-transition:enter="transition ease-out duration-200"
             x-transition:enter-start="opacity-0 -translate-y-4"
             x-transition:enter-end="opacity-100 translate-y-0"
             x-transition:leave="transition ease-in duration-150"
             x-transition:leave-start="opacity-100 translate-y-0"
             x-transition:leave-end="opacity-0 -translate-y-4"
             class="md:hidden pb-4 space-y-1"
             style="display: none;">
            <a href="/" class="block px-4 py-3 text-sm font-medium text-white hover:bg-white/5 rounded-lg transition-colors">
                Home
            </a>
            <a href="#teknisi" class="block px-4 py-3 text-sm font-medium text-gray-300 hover:text-white hover:bg-white/5 rounded-lg transition-colors">
                Teknisi
            </a>
            <a href="#price" class="block px-4 py-3 text-sm font-medium text-gray-300 hover:text-white hover:bg-white/5 rounded-lg transition-colors">
                Harga
            </a>
            <a href="#artikel" class="block px-4 py-3 text-sm font-medium text-gray-300 hover:text-white hover:bg-white/5 rounded-lg transition-colors">
                Artikel
            </a>
            <a href="#tentang_kami" class="block px-4 py-3 text-sm font-medium text-gray-300 hover:text-white hover:bg-white/5 rounded-lg transition-colors">
                Tentang
            </a>
            <a href="#price" class="block mt-2 px-4 py-3 bg-gradient-to-r from-blue-500 to-purple-600 text-white text-sm font-semibold rounded-lg text-center">
                Hubungi Kami
            </a>
        </div>
    </div>
</nav>