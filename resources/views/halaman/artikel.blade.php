<section class="py-20 bg-[#0d141c]" id="artikel">

    <style>
        .article-card {
            position: relative;
            border-radius: 22px;
            overflow: hidden;
            background: linear-gradient(145deg, #0e1621, #121b29);
            border: 1px solid rgba(255,255,255,0.08);
            transition: 0.45s ease;
            transform-style: preserve-3d;
            perspective: 900px;
            padding: 18px;
        }
        .article-card:hover {
            transform: translateY(-10px) rotateX(6deg) rotateY(-3deg);
            box-shadow: 0 20px 45px rgba(0,0,0,0.6);
            border-color: rgba(0, 255, 255, 0.25);
        }
        .article-card img {
            width: 100%;
            height: 210px;
            border-radius: 18px;
            object-fit: cover;
            transition: 0.45s;
        }
        .article-card:hover img {
            transform: scale(1.12);
            filter: brightness(1.15);
        }

        /* FULLSCREEN PANEL */
        .read-panel {
            position: fixed;
            inset: 0;
            background: rgba(10, 15, 20, 0.98);
            backdrop-filter: blur(10px);
            padding: 40px;
            z-index: 999;
            overflow-y: auto;
            display: none;
        }
        .read-panel.active {
            display: block;
        }
        .close-panel {
            color: #ff6b6b;
            font-weight: bold;
            margin-top: 20px;
        }
    </style>

    <div class="max-w-6xl mx-auto px-4 grid sm:grid-cols-2 lg:grid-cols-3 gap-10">

        @foreach ($artikels as $artikel)
        <div class="article-card">

            <img src="{{ asset('storage/' . $artikel->thumbnail) }}" />

            <h3 class="text-white text-xl font-semibold mt-4">
                {{ $artikel->title }}
            </h3>

            <p class="text-gray-400 mt-2">
                {{ $artikel->excerpt }}
            </p>

            <button 
                class="read-btn mt-4 text-cyan-400 font-semibold"
                data-title="{{ $artikel->title }}"
                data-content="{!! htmlspecialchars($artikel->content) !!}"
                data-thumb="{{ asset('storage/' . $artikel->thumbnail) }}"
            >
                Baca selengkapnya →
            </button>

        </div>
        @endforeach

    </div>

    <!-- FULLSCREEN PANEL -->
    <div id="readPanel" class="read-panel">

        <img id="panelThumb" class="w-full max-h-[320px] object-cover rounded-xl">
        
        <h2 id="panelTitle" class="text-3xl text-white font-bold mt-5"></h2>

        <p id="panelContent" class="text-gray-300 mt-4 leading-relaxed"></p>

        <button class="close-panel" onclick="closePanel()">Tutup ✕</button>
    </div>

    <script>
        const panel = document.getElementById("readPanel");
        const title = document.getElementById("panelTitle");
        const content = document.getElementById("panelContent");
        const thumb = document.getElementById("panelThumb");

        document.querySelectorAll('.read-btn').forEach(btn => {
            btn.addEventListener('click', () => {
                title.textContent = btn.dataset.title;
                content.innerHTML = btn.dataset.content.replace(/\n/g, "<br>");
                thumb.src = btn.dataset.thumb;

                panel.classList.add('active');
            });
        });

        function closePanel() {
            panel.classList.remove('active');
        }
    </script>

</section>
