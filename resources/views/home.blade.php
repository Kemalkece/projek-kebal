<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KeBalservices - Solusi Service Elektronik Terpercaya</title>

    @vite('resources/css/app.css')
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    
    <style>
        body {
            background: #0a0e14;
            font-family: 'Inter', system-ui, -apple-system, sans-serif;
        }
        
        /* Smooth scrolling */
        html {
            scroll-behavior: smooth;
        }
    </style>
</head>
<body class="bg-[#0a0e14] text-gray-100">
    @include('halaman.navbar')
    <main>
        @include('halaman.headers')
    </main>
    @include('halaman.teknisi')
    @include('halaman.price')
    @include('halaman.artikel')
    @include('halaman.tentang_kami')
    @include('halaman.footer')
</body>
</html>