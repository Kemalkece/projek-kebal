@vite('resources/css/app.css')
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>

<section class="py-20 min-h-screen flex items-center justify-center bg-gradient-to-br from-[#0d1117] to-[#0a0e14] relative overflow-hidden">

    <!-- Glow Background -->
    <div class="absolute inset-0 overflow-hidden pointer-events-none">
        <div class="absolute top-20 left-20 w-72 h-72 bg-purple-600/30 blur-[120px] rounded-full"></div>
        <div class="absolute bottom-20 right-20 w-72 h-72 bg-blue-600/30 blur-[120px] rounded-full"></div>
    </div>

    <div class="relative w-full max-w-lg px-6">
        <div class="bg-[#0f1624]/60 backdrop-blur-xl border border-white/10 shadow-2xl rounded-2xl p-8">

            <h2 class="text-3xl font-bold text-white mb-1 text-center">
                Form Pemesanan Paket
            </h2>

            <p class="text-transparent bg-clip-text bg-gradient-to-r from-purple-400 to-blue-400 
                      font-semibold text-xl text-center mb-8">
                {{ ucfirst($paket) }}
            </p>

            <form action="{{ route('order.store') }}" method="POST" class="space-y-6">
                @csrf
                <input type="hidden" name="paket" value="{{ $paket }}">

                <!-- NAMA -->
                <div>
                    <label class="text-gray-300 font-medium block mb-1">Nama</label>
                    <input
                        type="text"
                        name="nama"
                        class="w-full p-3 bg-[#111827] border border-white/10 rounded-lg text-white
                               focus:ring-2 focus:ring-purple-500 focus:border-purple-500 transition"
                        placeholder="Masukkan nama Anda"
                        required>
                </div>

                <!-- TELEPON -->
                <div>
                    <label class="text-gray-300 font-medium block mb-1">Telepon</label>
                    <input
                        type="text"
                        name="telepon"
                        class="w-full p-3 bg-[#111827] border border-white/10 rounded-lg text-white
                               focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition"
                        placeholder="Nomor WhatsApp aktif"
                        required>
                </div>

                <!-- CATATAN -->
                <div>
                    <label class="text-gray-300 font-medium block mb-1">Catatan (opsional)</label>
                    <textarea
                        name="catatan"
                        rows="4"
                        class="w-full p-3 bg-[#111827] border border-white/10 rounded-lg text-white
                               focus:ring-2 focus:ring-purple-500 focus:border-purple-500 transition"
                        placeholder="Contoh: lokasi, detail masalah, atau permintaan khusus"
                    ></textarea>
                </div>

                <!-- SUBMIT -->
                <button
                    type="submit"
                    class="w-full py-3 rounded-xl font-semibold text-white text-lg
                           bg-gradient-to-r from-purple-500 to-blue-500 
                           hover:from-purple-600 hover:to-blue-600
                           shadow-lg shadow-purple-500/30 transition">
                    Kirim Pemesanan
                </button>
            </form>

        </div>
    </div>
</section>
