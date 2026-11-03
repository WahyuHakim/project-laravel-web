<!DOCTYPE html>
<html lang="id" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'JalanYuk — Pesan Tiket Praktis')</title>
    
    <!-- Vite Tailwind & Font Awesome -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800;900&display=swap" rel="stylesheet">
    
    <style>
        .glass-card { background: rgba(255, 255, 255, 0.75); backdrop-filter: blur(20px); border: 1px solid rgba(255, 255, 255, 0.8); box-shadow: 0 10px 40px -10px rgba(2, 132, 199, 0.1); }
        .hide-scroll::-webkit-scrollbar { display: none; }
        .hide-scroll { -ms-overflow-style: none; scrollbar-width: none; }
    </style>
</head>
<body class="bg-slate-50 text-slate-800 antialiased selection:bg-brand-400 selection:text-white relative">

    <!-- Ambient Glow Background -->
    <div class="fixed top-[-20%] left-[-10%] w-[500px] h-[500px] bg-brand-200/40 rounded-full blur-[120px] pointer-events-none -z-10"></div>
    <div class="fixed bottom-[-10%] right-[-5%] w-[600px] h-[600px] bg-blue-200/30 rounded-full blur-[120px] pointer-events-none -z-10"></div>

    <!-- Master Navbar Glassmorphism -->
    <div class="sticky top-0 z-50 px-4 sm:px-6 lg:px-8 py-3 bg-white/80 backdrop-blur-md border-b border-slate-200 shadow-sm">
        <div class="max-w-7xl mx-auto flex items-center justify-between">
            <a href="{{ url('/') }}" class="flex items-center gap-2.5">
                <span class="text-2xl font-black text-slate-900 tracking-tight">JalanYuk<span class="text-brand-500">.</span></span>
            </a>
            <div class="flex items-center gap-3">
                <a href="{{ url('/pesanan') }}" class="text-sm font-bold text-slate-600 hover:text-brand-600 transition hidden sm:block mr-4">Pesanan Saya</a>
                <a href="{{ url('/login') }}" class="px-5 py-2.5 rounded-full text-slate-700 font-bold hover:bg-slate-100 transition text-sm">Sign In</a>
                <a href="{{ url('/register') }}" class="px-6 py-2.5 rounded-full bg-brand-600 hover:bg-brand-700 text-white font-bold text-sm shadow-md transition">Daftar</a>
            </div>
        </div>
    </div>

    <!-- Area Konten Dinamis -->
    <main class="flex-grow">
        @yield('content')
    </main>

    <!-- Footer -->
    <footer class="bg-white/80 backdrop-blur border-t border-slate-200 mt-20 py-8 text-center text-sm font-medium text-slate-500 relative z-10">
        <p>© 2026 JalanYuk — Proyek Rekayasa Perangkat Lunak</p>
    </footer>

</body>
</html>