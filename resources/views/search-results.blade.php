<!DOCTYPE html>
<html lang="id" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hasil Pencarian - JalanYuk</title>
    
    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <!-- Google Fonts: Plus Jakarta Sans -->
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800;900&display=swap" rel="stylesheet">
    
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: { sans: ['"Plus Jakarta Sans"', 'sans-serif'] },
                    colors: {
                        brand: {
                            50: '#f0f9ff', 100: '#e0f2fe', 200: '#bae6fd', 300: '#7dd3fc',
                            400: '#38bdf8', 500: '#0ea5e9', 600: '#0284c7', 700: '#0369a1',
                            800: '#075985', 900: '#0c4a6e', accent: '#f97316'
                        }
                    },
                    boxShadow: { 'glass': '0 8px 32px 0 rgba(2, 132, 199, 0.08)' }
                }
            }
        }
    </script>

    <style>
        .glass-card {
            background: rgba(255, 255, 255, 0.75);
            backdrop-filter: blur(20px);
            -webkit-backdrop-filter: blur(20px);
            border: 1px solid rgba(255, 255, 255, 0.8);
            box-shadow: 0 10px 40px -10px rgba(2, 132, 199, 0.1);
        }
    </style>
</head>
<body class="bg-slate-50 text-slate-800 antialiased selection:bg-brand-400 selection:text-white">

    <!-- Navbar Sederhana -->
    <div class="sticky top-0 z-50 px-4 sm:px-6 lg:px-8 py-3 bg-white/80 backdrop-blur-md border-b border-slate-200">
        <div class="max-w-7xl mx-auto flex items-center justify-between">
            <a href="/" class="flex items-center gap-2.5">
                <span class="text-2xl font-black text-slate-900 tracking-tight">JalanYuk<span class="text-brand-500">.</span></span>
            </a>
            <div class="flex items-center gap-3">
                <a href="/" class="px-4 py-2 rounded-full text-sm font-bold text-slate-600 hover:bg-slate-100 transition">Ubah Pencarian</a>
            </div>
        </div>
    </div>

    <!-- Main Content -->
    <main class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
        
        <!-- Info Ringkasan Pencarian -->
        <div class="glass-card rounded-2xl p-4 sm:p-6 mb-8 flex flex-col sm:flex-row items-start sm:items-center justify-between gap-4">
            <div>
                <h1 class="text-xl font-black text-slate-900">Hasil Pencarian di: <span class="text-brand-600">Bali, Indonesia</span></h1>
                <p class="text-xs text-slate-500 font-medium mt-1">12 Okt - 13 Okt (1 malam) • 2 Tamu, 1 Kamar • Ditemukan 24 pilihan</p>
            </div>
            <div class="flex items-center gap-2">
                <span class="text-xs font-bold text-slate-400">Urutkan:</span>
                <select class="glass-card px-3 py-2 rounded-xl text-xs font-bold text-slate-700 outline-none cursor-pointer">
                    <option>Harga Termurah</option>
                    <option>Rating Tertinggi</option>
                    <option>Paling Populer</option>
                </select>
            </div>
        </div>

        <!-- Layout Grid: Filter di Kiri, Daftar Hasil di Kanan -->
        <div class="grid grid-cols-1 lg:grid-cols-4 gap-8">
            
            <!-- SIDEBAR FILTER -->
            <aside class="space-y-6">
                <div class="glass-card rounded-[2rem] p-6">
                    <h3 class="font-black text-slate-900 text-base mb-4 flex items-center justify-between">
                        <span>Filter Harga & Bintang</span>
                        <i class="fa-solid fa-sliders text-brand-500 text-sm"></i>
                    </h3>
                    
                    <!-- Filter Bintang Hotel -->
                    <div class="space-y-3 pb-6 border-b border-slate-200">
                        <label class="block text-xs font-bold text-slate-500 uppercase tracking-wider mb-2">Rating Bintang</label>
                        <label class="flex items-center gap-3 text-sm font-medium text-slate-700 cursor-pointer">
                            <input type="checkbox" class="w-4 h-4 rounded text-brand-600 focus:ring-brand-500">
                            <span class="flex text-amber-400 text-xs"><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i></span> (Bintang 5)
                        </label>
                        <label class="flex items-center gap-3 text-sm font-medium text-slate-700 cursor-pointer">
                            <input type="checkbox" class="w-4 h-4 rounded text-brand-600 focus:ring-brand-500">
                            <span class="flex text-amber-400 text-xs"><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i></span> (Bintang 4)
                        </label>
                        <label class="flex items-center gap-3 text-sm font-medium text-slate-700 cursor-pointer">
                            <input type="checkbox" class="w-4 h-4 rounded text-brand-600 focus:ring-brand-500">
                            <span class="flex text-amber-400 text-xs"><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i></span> (Bintang 3)
                        </label>
                    </div>

                    <!-- Filter Fasilitas -->
                    <div class="space-y-3 pt-6">
                        <label class="block text-xs font-bold text-slate-500 uppercase tracking-wider mb-2">Fasilitas Populer</label>
                        <label class="flex items-center gap-3 text-sm font-medium text-slate-700 cursor-pointer">
                            <input type="checkbox" class="w-4 h-4 rounded text-brand-600 focus:ring-brand-500"> Kolam Renang
                        </label>
                        <label class="flex items-center gap-3 text-sm font-medium text-slate-700 cursor-pointer">
                            <input type="checkbox" class="w-4 h-4 rounded text-brand-600 focus:ring-brand-500"> WiFi Gratis
                        </label>
                        <label class="flex items-center gap-3 text-sm font-medium text-slate-700 cursor-pointer">
                            <input type="checkbox" class="w-4 h-4 rounded text-brand-600 focus:ring-brand-500"> Sarapan Termasuk
                        </label>
                    </div>
                </div>
            </aside>

            <!-- DAFTAR KARTU HASIL PENCARIAN -->
            <div class="lg:col-span-3 space-y-4">
                
                <!-- Item Hasil 1 -->
                <div class="glass-card rounded-[2rem] p-4 sm:p-5 flex flex-col sm:flex-row gap-5 hover:shadow-lg transition">
                    <div class="relative w-full sm:w-56 h-48 rounded-[1.5rem] overflow-hidden flex-shrink-0">
                        <img src="https://img.cnt.traveloka.com/tvlk/apr-asset/dgXfoyh24ryQLRcGq00cIdKHRmotrWLNlvG-TxlcLxGkiDwaUSggleJNPRgIHCX6/hotel/asset/10004607-cd602b5d5dbc65d02fe83abffcca5585.jpeg?tr=q-40,c-at_max,w-540,h-960" class="w-full h-full object-cover">
                        <span class="absolute top-2 left-2 bg-white/90 backdrop-blur text-slate-900 px-3 py-1 rounded-full text-[10px] font-black">Denpasar Barat</span>
                    </div>
                    <div class="flex-1 flex flex-col justify-between">
                        <div>
                            <div class="flex items-center justify-between">
                                <span class="text-[10px] font-bold px-2.5 py-0.5 rounded-md bg-brand-50 text-brand-600 uppercase">Hotel & Stay</span>
                                <div class="flex text-amber-400 text-xs"><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i></div>
                            </div>
                            <h2 class="font-black text-slate-900 text-lg mt-1">Choice Stay Hotel Denpasar</h2>
                            <p class="text-xs text-slate-500 mt-0.5">Denpasar, Bali • Lokasi strategis dekat pusat kota</p>
                            <div class="mt-2 inline-flex items-center gap-1.5 px-2.5 py-1 rounded-full bg-emerald-50 text-emerald-600 text-[11px] font-bold">
                                8.6/10 Luar Biasa (2.6rb ulasan)
                            </div>
                        </div>
                        <div class="mt-4 pt-4 border-t border-slate-100 flex items-center justify-between">
                            <div>
                                <span class="text-xs text-slate-400 line-through block">Rp 282.555</span>
                                <span class="font-black text-brand-accent text-xl">Rp 259.859 <span class="text-xs font-normal text-slate-500">/mlm</span></span>
                            </div>
                            <a href="{{ url('/detail') }}" class="px-6 py-2.5 rounded-full bg-brand-600 hover:bg-brand-700 text-white font-bold text-sm shadow-md transition">
                                Pilih Kamar
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Item Hasil 2 -->
                <div class="glass-card rounded-[2rem] p-4 sm:p-5 flex flex-col sm:flex-row gap-5 hover:shadow-lg transition">
                    <div class="relative w-full sm:w-56 h-48 rounded-[1.5rem] overflow-hidden flex-shrink-0">
                        <img src="https://img.cnt.traveloka.com/tvlk/apr-asset/Ixf4aptF5N2Qdfmh4fGGYhTN274kJXuNMkUAzpL5HuD9jzSxIGG5kZNhhHY-p7nw/hotel/asset/10000126-cc968d77183bab6237a5c3b5de6332cd.png?tr=q-40,c-at_max,w-540,h-960" class="w-full h-full object-cover">
                        <span class="absolute top-2 left-2 bg-white/90 backdrop-blur text-slate-900 px-3 py-1 rounded-full text-[10px] font-black">Kuta, Bali</span>
                    </div>
                    <div class="flex-1 flex flex-col justify-between">
                        <div>
                            <div class="flex items-center justify-between">
                                <span class="text-[10px] font-bold px-2.5 py-0.5 rounded-md bg-brand-50 text-brand-600 uppercase">Hotel & Stay</span>
                                <div class="flex text-amber-400 text-xs"><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i></div>
                            </div>
                            <h2 class="font-black text-slate-900 text-lg mt-1">Stark Boutique Hotel and Spa Bali</h2>
                            <p class="text-xs text-slate-500 mt-0.5">Kuta, Bali • Dekat pantai dan pusat hiburan</p>
                            <div class="mt-2 inline-flex items-center gap-1.5 px-2.5 py-1 rounded-full bg-emerald-50 text-emerald-600 text-[11px] font-bold">
                                8.2/10 Sangat Bagus (3.3rb ulasan)
                            </div>
                        </div>
                        <div class="mt-4 pt-4 border-t border-slate-100 flex items-center justify-between">
                            <div>
                                <span class="text-xs text-slate-400 line-through block">Rp 350.469</span>
                                <span class="font-black text-brand-accent text-xl">Rp 341.559 <span class="text-xs font-normal text-slate-500">/mlm</span></span>
                            </div>
                            <a href="{{ url('/detail') }}" class="px-6 py-2.5 rounded-full bg-brand-600 hover:bg-brand-700 text-white font-bold text-sm shadow-md transition">
                                Pilih Kamar
                            </a>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </main>

</body>
</html>