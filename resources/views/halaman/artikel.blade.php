<section class="py-20 lg:py-32 bg-[#0a0e14] relative overflow-hidden" id="artikel">

    <!-- Background Effects -->
    <div class="absolute inset-0 overflow-hidden pointer-events-none opacity-30">
        <div class="absolute top-1/3 right-1/3 w-96 h-96 bg-purple-500/20 rounded-full blur-3xl"></div>
        <div class="absolute bottom-1/3 left-1/3 w-96 h-96 bg-blue-500/20 rounded-full blur-3xl"></div>
    </div>

    <div class="container relative z-10 mx-auto px-4 lg:px-8 max-w-7xl">
        
        <!-- Section Header -->
        <div class="text-center max-w-3xl mx-auto mb-16">
            <div class="inline-flex items-center space-x-2 px-4 py-2 bg-purple-500/10 border border-purple-500/20 rounded-full mb-6">
                <svg class="w-4 h-4 text-purple-400" fill="currentColor" viewBox="0 0 24 24">
                    <path d="M19 3H5c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zM9 17H7v-7h2v7zm4 0h-2V7h2v10zm4 0h-2v-4h2v4z"/>
                </svg>
                <span class="text-sm text-purple-400 font-medium">Blog & Tips</span>
            </div>
            
            <h2 class="text-4xl lg:text-5xl font-bold text-white mb-4">
                Artikel <span class="bg-gradient-to-r from-purple-400 to-pink-500 bg-clip-text text-transparent">Terbaru</span>
            </h2>
            
            <p class="text-lg text-gray-400">
                Tips dan panduan seputar perawatan elektronik
            </p>
        </div>

        <!-- Articles Grid -->
        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
            @foreach ($artikels as $artikel)
            <article class="group cursor-pointer" data-article-trigger
                     data-title="{{ $artikel->title }}"
                     data-content="{!! htmlspecialchars($artikel->content) !!}"
                     data-thumb="{{ asset('storage/' . $artikel->thumbnail) }}">
                
                <div class="relative bg-gradient-to-br from-[#151b23] to-[#0d1117] rounded-2xl overflow-hidden border border-gray-800 hover:border-purple-500/50 transition-all duration-300 hover:shadow-xl hover:shadow-purple-500/10 transform hover:-translate-y-2">
                    
                    <!-- Image -->
                    <div class="relative h-48 overflow-hidden">
                        <div class="absolute inset-0 bg-gradient-to-t from-[#0d1117] via-transparent to-transparent z-10"></div>
                        <img src="{{ asset('storage/' . $artikel->thumbnail) }}" 
                             alt="{{ $artikel->title }}"
                             class="w-full h-full object-cover transform group-hover:scale-110 transition-transform duration-500">
                    </div>

                    <!-- Content -->
                    <div class="p-6">
                        <h3 class="text-xl font-bold text-white mb-3 group-hover:text-purple-400 transition-colors line-clamp-2">
                            {{ $artikel->title }}
                        </h3>

                        <p class="text-gray-400 text-sm mb-4 line-clamp-3">
                            {{ $artikel->excerpt }}
                        </p>

                        <div class="flex items-center justify-between pt-4 border-t border-gray-800">
                            <span class="text-purple-400 text-sm font-semibold group-hover:text-purple-300 transition-colors">
                                Baca Selengkapnya
                            </span>
                            <svg class="w-5 h-5 text-purple-400 transform group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"/>
                            </svg>
                        </div>
                    </div>

                </div>
            </article>
            @endforeach
        </div>

    </div>

         <!-- Article Modal -->
            <div id="articleModal" class="fixed inset-0 bg-black/95 backdrop-blur-sm z-50 overflow-y-auto hidden">
            <div class="min-h-screen px-4 py-20">
            <div class="max-w-4xl mx-auto">
                
                <!-- Close Button -->
                <button onclick="closeArticle()" class="fixed top-8 right-8 w-12 h-12 bg-white/10 hover:bg-white/20 rounded-full flex items-center justify-center text-white transition-all duration-300 group">
                    <svg class="w-6 h-6 transform group-hover:rotate-90 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
                    </svg>
                </button>

                <!-- Article Content -->
                <div class="bg-gradient-to-br from-[#151b23] to-[#0d1117] rounded-2xl overflow-hidden border border-gray-800 shadow-2xl">
                    
                    <!-- Featured Image -->
                    <div class="relative h-96 overflow-hidden">
                        <img id="modalThumb" src="" alt="" class="w-full h-full object-cover">
                        <div class="absolute inset-0 bg-gradient-to-t from-[#0d1117] via-transparent to-transparent"></div>
                    </div>

                    <!-- Article Body -->
                    <div class="p-8 lg:p-12">
                        <h1 id="modalTitle" class="text-3xl lg:text-4xl font-bold text-white mb-6"></h1>
                        
                        <div id="modalContent" class="prose prose-invert prose-lg max-w-none">
                            <!-- Content will be inserted here -->
                        </div>

                        <div class="mt-12 pt-8 border-t border-gray-800">
                            <button onclick="closeArticle()" class="inline-flex items-center px-6 py-3 bg-purple-500/10 hover:bg-purple-500/20 text-purple-400 font-semibold rounded-xl border border-purple-500/20 hover:border-purple-500/40 transition-all duration-300">
                                <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"/>
                                </svg>
                                Kembali ke Artikel
                            </button>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <style>
        /* Line clamp utilities */
        .line-clamp-2 {
            display: -webkit-box;
            -webkit-line-clamp: 2;
            -webkit-box-orient: vertical;
            overflow: hidden;
        }
        .line-clamp-3 {
            display: -webkit-box;
            -webkit-line-clamp: 3;
            -webkit-box-orient: vertical;
            overflow: hidden;
        }

        /* Prose styling for article content */
        .prose-invert {
            color: #d1d5db;
        }
        .prose-invert h1, .prose-invert h2, .prose-invert h3 {
            color: #ffffff;
            font-weight: 700;
            margin-top: 2em;
            margin-bottom: 1em;
        }
        .prose-invert p {
            margin-bottom: 1.5em;
            line-height: 1.8;
        }
        .prose-invert strong {
            color: #ffffff;
            font-weight: 600;
        }
    </style>

    <script>
        const modal = document.getElementById('articleModal');
        const modalTitle = document.getElementById('modalTitle');
        const modalContent = document.getElementById('modalContent');
        const modalThumb = document.getElementById('modalThumb');

        // Open article
        document.querySelectorAll('[data-article-trigger]').forEach(trigger => {
            trigger.addEventListener('click', () => {
                modalTitle.textContent = trigger.dataset.title;
                modalContent.innerHTML = trigger.dataset.content.replace(/\n/g, '<br>');
                modalThumb.src = trigger.dataset.thumb;
                modalThumb.alt = trigger.dataset.title;
                
                modal.classList.remove('hidden');
                document.body.style.overflow = 'hidden';
            });
        });

        // Close article
        function closeArticle() {
            modal.classList.add('hidden');
            document.body.style.overflow = 'auto';
        }

        // Close on ESC key
        document.addEventListener('keydown', (e) => {
            if (e.key === 'Escape' && !modal.classList.contains('hidden')) {
                closeArticle();
            }
        });

        // Close on backdrop click
        modal.addEventListener('click', (e) => {
            if (e.target === modal) {
                closeArticle();
            }
        });
    </script>

</section>