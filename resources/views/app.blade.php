<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'JalanYuk — Pesan Tiket Perjalanan Praktis')</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-[#FBF9F5] text-stone-800 min-h-screen flex flex-col antialiased selection:bg-[#F6E7B0]">

    <header class="bg-white border-b-2 border-stone-800 sticky top-0 z-50">
        <div class="max-w-6xl mx-auto px-4 sm:px-6 h-20 flex items-center justify-between">
            <a href="/" class="flex items-center gap-2">
                <span class="w-8 h-8 rounded-lg bg-[#C86D51] border-2 border-stone-800 flex items-center justify-center text-white font-black text-lg shadow-[2px_2px_0px_0px_#292524]">
                    J
                </span>
                <span class="text-2xl font-extrabold tracking-tight font-heading text-stone-900">
                    Jalan<span class="text-[#C86D51]">Yuk.</span>
                </span>
            </a>

            <nav class="flex items-center gap-4">
                <a href="#" class="hidden sm:inline-block font-semibold text-stone-600 hover:text-stone-900 px-3 py-2">Cek Tiket</a>
                <a href="#" class="bg-white hover:bg-stone-50 text-stone-900 font-bold px-4 py-2 rounded-xl border-2 border-stone-800 shadow-[3px_3px_0px_0px_#292524] active:translate-x-[2px] active:translate-y-[2px] active:shadow-none transition-all text-sm">
                    Masuk
                </a>
            </nav>
        </div>
    </header>

    <main class="flex-grow">
        @yield('content')
    </main>

    <footer class="bg-white border-t-2 border-stone-800 mt-20 py-8 text-center text-sm font-medium text-stone-500">
        <p>© 2026 JalanYuk — Proyek Rekayasa Perangkat Lunak</p>
    </footer>

</body>
</html>