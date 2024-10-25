<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}"> <!-- Ganti dengan path CSS Anda -->
    <script src="{{ asset('js/app.js') }}" defer></script> <!-- Ganti dengan path JS Anda -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"> <!-- Contoh Font Awesome -->
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        .container {
            margin: 20px auto;
            padding: 20px;
            border: 1px solid #ddd;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }
        h1 {
            color: #333;
        }
    </style>
</head>
<body>
    <nav>
        <ul>
            <li><a href="{{ route('inventaris.index') }}">Inventaris</a></li>
            <li><a href="{{ route('peminjaman.index') }}">Peminjaman</a></li>
            <li><a href="{{ route('perbaikan.index') }}">Perbaikan</a></li>
            <li><a href="{{ route('kerusakan.index') }}">Kerusakan</a></li>
            <li><a href="{{ route('pengembalian.index') }}">Pengembalian</a></li>
        </ul>
    </nav>

    <div class="container">
        @yield('content') <!-- Konten spesifik untuk setiap halaman -->
    </div>
</body>
</html>
