<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KeBalservices</title>

    @vite('resources/css/app.css')
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
</head>
<body>
    @include('halaman.navbar')
    <main>
        @include('halaman.headers')
    </main>
    @include('halaman.teknisi')
    @include('halaman.price')
    @include('halaman.artikel')
</body>
</html>