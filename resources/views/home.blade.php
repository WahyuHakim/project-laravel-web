<!DOCTYPE html>
<html lang="id" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JalanYuk - Travel & Booking Platform</title>
    
    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <!-- Google Fonts: Plus Jakarta Sans -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800;900&display=swap" rel="stylesheet">
    
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: {
                        sans: ['"Plus Jakarta Sans"', 'sans-serif'],
                    },
                    colors: {
                        brand: {
                            50: '#f0f9ff',
                            100: '#e0f2fe',
                            200: '#bae6fd',
                            300: '#7dd3fc',
                            400: '#38bdf8',
                            500: '#0ea5e9',
                            600: '#0284c7',
                            700: '#0369a1',
                            800: '#075985',
                            900: '#0c4a6e',
                            accent: '#f97316' // Orange Traveloka-ish
                        }
                    },
                    boxShadow: {
                        'glass': '0 8px 32px 0 rgba(2, 132, 199, 0.08)',
                        'glass-hover': '0 12px 40px 0 rgba(2, 132, 199, 0.15)',
                    }
                }
            }
        }
    </script>

    <style>
        .no-scrollbar::-webkit-scrollbar { display: none; }
        .no-scrollbar { -ms-overflow-style: none; scrollbar-width: none; }
        
        /* Light Glossy Glassmorphism Utilities */
        .glass-card {
            background: rgba(255, 255, 255, 0.75);
            backdrop-filter: blur(20px);
            -webkit-backdrop-filter: blur(20px);
            border: 1px solid rgba(255, 255, 255, 0.8);
            box-shadow: 0 10px 40px -10px rgba(2, 132, 199, 0.1);
        }
        
        .glass-input {
            background: rgba(255, 255, 255, 0.6);
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.9);
            box-shadow: inset 0 2px 4px rgba(0, 0, 0, 0.02);
            transition: all 0.3s ease;
        }
        .glass-input:focus-within {
            background: rgba(255, 255, 255, 0.95);
            border-color: #38bdf8;
            box-shadow: 0 0 0 4px rgba(56, 189, 248, 0.15);
        }

        /* Lekukan Kupon Estetik */
        .coupon-notch-left {
            position: absolute;
            left: -10px;
            top: 50%;
            transform: translateY(-50%);
            width: 20px;
            height: 20px;
            background-color: #f8fafc;
            border-radius: 50%;
            box-shadow: inset -2px 0 5px rgba(0,0,0,0.03);
        }
        .coupon-notch-right {
            position: absolute;
            right: -10px;
            top: 50%;
            transform: translateY(-50%);
            width: 20px;
            height: 20px;
            background-color: #f8fafc;
            border-radius: 50%;
            box-shadow: inset 2px 0 5px rgba(0,0,0,0.03);
        }
    </style>
</head>
<body class="bg-slate-50 text-slate-800 antialiased selection:bg-brand-400 selection:text-white relative">

    <!-- Ambient Glow di Background Body (Biar nggak flat) -->
    <div class="fixed top-0 left-0 w-[500px] h-[500px] bg-brand-200/40 rounded-full blur-[100px] pointer-events-none -z-10"></div>
    <div class="fixed bottom-0 right-0 w-[600px] h-[600px] bg-blue-200/30 rounded-full blur-[120px] pointer-events-none -z-10"></div>

    <!-- ========================================================================= -->
    <!-- 1. FLOATING GLASS NAVBAR                                                  -->
    <!-- ========================================================================= -->
    <div class="fixed top-4 left-0 right-0 z-50 px-4 sm:px-6 lg:px-8 transition-all duration-300" id="navbar-wrapper">
        <nav id="navbar" class="max-w-7xl mx-auto glass-card rounded-full px-6 py-3 transition-all duration-300">
            <div class="flex items-center justify-between">
                
                <!-- Logo -->
                    <a href="#" class="flex items-center gap-2.5 mb-6">
                        <img src="{{ asset('images/logo.jpeg') }}" alt="Logo JalanYuk" class="w-10 h-10 rounded-full object-cover shadow-md">
                        <span class="text-2xl font-black text-slate-900 tracking-tight">JalanYuk<span class="text-brand-500">.</span></span>
                    </a>

                <!-- Navigasi Tengah -->
                <div class="hidden md:flex items-center gap-6 text-sm font-bold text-slate-600">
                    <a href="#" class="flex items-center gap-2 hover:text-brand-600 transition p-2 rounded-full hover:bg-brand-50">
                        <img src="https://flagcdn.com/w20/id.png" alt="IDR" class="w-5 h-3.5 rounded-[3px] shadow-sm">
                        <span>IDR</span>
                        <i class="fa-solid fa-chevron-down text-[10px] text-slate-400"></i>
                    </a>
                    <a href="#" class="hover:text-brand-600 transition flex items-center gap-1.5 p-2 rounded-full hover:bg-brand-50">
                        <i class="fa-solid fa-percent text-brand-accent"></i> Promo
                    </a>
                    <a href="#" class="hover:text-brand-600 transition flex items-center gap-1.5 p-2 rounded-full hover:bg-brand-50">
                        <i class="fa-solid fa-mobile-screen text-emerald-500"></i> Unduh App
                    </a>
                    <a href="#" class="hover:text-brand-600 transition p-2">Pesanan</a>
                </div>

                <!-- Tombol Aksi -->
                <div class="flex items-center gap-3">
                    <a href="#" class="hidden sm:block px-5 py-2.5 rounded-full text-slate-700 font-bold hover:bg-slate-100 transition text-sm">
                        Sign In
                    </a>
                    <a href="#" class="px-6 py-2.5 rounded-full bg-brand-600 hover:bg-brand-700 text-white font-bold text-sm shadow-lg shadow-brand-500/30 transition-all hover:-translate-y-0.5">
                        Daftar
                    </a>
                </div>
            </div>
        </nav>
    </div>

    <!-- ========================================================================= -->
    <!-- 2. HERO SECTION DENGAN GAMBAR MELENGKUNG & GLOSSY SEARCH CARD             -->
    <!-- ========================================================================= -->
    <header class="relative pt-28 pb-32">
        <!-- Hero Image melengkung ke bawah -->
        <div class="absolute inset-x-0 top-0 h-[650px] overflow-hidden rounded-b-[3rem] shadow-sm">
            <img src="https://img.cnt.traveloka.com/tvlk/image/imageResource/2026/09/29/1790678504067-aecaa35272e6e6f806b9a0c35da3ed59.jpeg?tr=q-80" alt="Hero" class="w-full h-full object-cover">
            <div class="absolute inset-0 bg-gradient-to-b from-brand-900/60 via-brand-800/30 to-brand-900/10"></div>
        </div>

        <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 pt-10">
            
            <!-- Judul -->
            <div class="text-center max-w-3xl mx-auto mb-12">
                <span class="inline-flex items-center gap-2 px-4 py-1.5 rounded-full bg-white/20 backdrop-blur-md border border-white/30 text-white text-xs font-bold mb-4 shadow-sm">
                    <i class="fa-solid fa-sparkles text-amber-300"></i> Pilihan Utama Jelajahi Dunia
                </span>
                <h1 class="text-4xl md:text-5xl lg:text-6xl font-black text-white tracking-tight leading-tight drop-shadow-md">
                    Ke Mana Pun Perginya,<br> Nyaman Terus Di Hati.
                </h1>
            </div>

            <!-- GLOSSY SEARCH ENGINE CARD (Ini yang tidak kaku/ngotak) -->
            <div class="glass-card rounded-[2.5rem] p-4 sm:p-6 md:p-8 max-w-5xl mx-auto transform translate-y-12">
                
                <!-- Bubble Tabs (Melengkung penuh) -->
                <div class="flex items-center gap-3 overflow-x-auto no-scrollbar pb-6 border-b border-slate-200/50">
                    <button class="flex flex-col items-center justify-center gap-1.5 min-w-[90px] h-[80px] rounded-[1.5rem] bg-brand-600 text-white shadow-lg shadow-brand-500/30 transition-transform hover:-translate-y-1 flex-shrink-0">
                        <i class="fa-solid fa-hotel text-2xl"></i>
                        <span class="text-[11px] font-bold">Hotel</span>
                    </button>
                    
                    <button class="flex flex-col items-center justify-center gap-1.5 min-w-[90px] h-[80px] rounded-[1.5rem] bg-white/60 hover:bg-white text-slate-600 hover:text-brand-600 transition-all hover:-translate-y-1 flex-shrink-0 shadow-sm border border-white">
                        <i class="fa-solid fa-plane-departure text-2xl"></i>
                        <span class="text-[11px] font-bold">Pesawat</span>
                    </button>

                    <button class="relative flex flex-col items-center justify-center gap-1.5 min-w-[90px] h-[80px] rounded-[1.5rem] bg-white/60 hover:bg-white text-slate-600 hover:text-brand-600 transition-all hover:-translate-y-1 flex-shrink-0 shadow-sm border border-white">
                        <span class="absolute -top-2.5 bg-brand-accent text-white text-[9px] font-black px-2 py-0.5 rounded-full shadow-sm">Baru!</span>
                        <i class="fa-solid fa-train text-2xl"></i>
                        <span class="text-[11px] font-bold">Kereta Api</span>
                    </button>

                    <button class="flex flex-col items-center justify-center gap-1.5 min-w-[90px] h-[80px] rounded-[1.5rem] bg-white/60 hover:bg-white text-slate-600 hover:text-brand-600 transition-all hover:-translate-y-1 flex-shrink-0 shadow-sm border border-white">
                        <i class="fa-solid fa-bus text-2xl"></i>
                        <span class="text-[11px] font-bold">Bus & Travel</span>
                    </button>

                    <button class="flex flex-col items-center justify-center gap-1.5 min-w-[90px] h-[80px] rounded-[1.5rem] bg-white/60 hover:bg-white text-slate-600 hover:text-brand-600 transition-all hover:-translate-y-1 flex-shrink-0 shadow-sm border border-white">
                        <i class="fa-solid fa-van-shuttle text-2xl"></i>
                        <span class="text-[11px] font-bold text-center">Antar Bandara</span>
                    </button>

                    <button class="flex flex-col items-center justify-center gap-1.5 min-w-[90px] h-[80px] rounded-[1.5rem] bg-white/60 hover:bg-white text-slate-600 hover:text-brand-600 transition-all hover:-translate-y-1 flex-shrink-0 shadow-sm border border-white">
                        <i class="fa-solid fa-car text-2xl"></i>
                        <span class="text-[11px] font-bold">Rental Mobil</span>
                    </button>

                    <button class="flex flex-col items-center justify-center gap-1.5 min-w-[90px] h-[80px] rounded-[1.5rem] bg-white/60 hover:bg-white text-slate-600 hover:text-brand-600 transition-all hover:-translate-y-1 flex-shrink-0 shadow-sm border border-white">
                        <i class="fa-solid fa-ticket text-2xl"></i>
                        <span class="text-[11px] font-bold text-center">Atraksi</span>
                    </button>
                </div>

                <!-- Formulir Pencarian (Bentuk Kapsul/Rounded Penuh) -->
                <form class="mt-6 flex flex-col md:flex-row gap-3">
                    
                    <!-- Destinasi -->
                    <div class="flex-1 glass-input rounded-3xl p-3 px-5 flex items-center gap-4 cursor-text">
                        <div class="w-10 h-10 rounded-full bg-brand-100 flex items-center justify-center text-brand-600 flex-shrink-0">
                            <i class="fa-solid fa-location-dot text-lg"></i>
                        </div>
                        <div class="flex-1">
                            <label class="block text-[10px] font-bold text-slate-500 uppercase tracking-wider mb-0.5">Destinasi / Hotel</label>
                            <input type="text" placeholder="Mau ke mana?" value="Bali, Indonesia" class="w-full bg-transparent border-none outline-none text-slate-900 font-extrabold text-sm sm:text-base placeholder-slate-400">
                        </div>
                    </div>

                    <!-- Tanggal (Gabung) -->
                    <div class="flex-[0.8] glass-input rounded-3xl p-3 px-5 flex items-center gap-4 cursor-pointer">
                        <div class="w-10 h-10 rounded-full bg-brand-100 flex items-center justify-center text-brand-600 flex-shrink-0">
                            <i class="fa-regular fa-calendar-days text-lg"></i>
                        </div>
                        <div class="flex-1 overflow-hidden">
                            <label class="block text-[10px] font-bold text-slate-500 uppercase tracking-wider mb-0.5">Tanggal Inap</label>
                            <div class="text-slate-900 font-extrabold text-sm sm:text-base truncate">
                                12 Okt - 13 Okt (1 mlm)
                            </div>
                        </div>
                    </div>

                    <!-- Tamu -->
                    <div class="flex-[0.7] glass-input rounded-3xl p-3 px-5 flex items-center gap-4 cursor-pointer">
                        <div class="w-10 h-10 rounded-full bg-brand-100 flex items-center justify-center text-brand-600 flex-shrink-0">
                            <i class="fa-solid fa-user-group text-sm"></i>
                        </div>
                        <div class="flex-1">
                            <label class="block text-[10px] font-bold text-slate-500 uppercase tracking-wider mb-0.5">Kapasitas</label>
                            <div class="text-slate-900 font-extrabold text-sm sm:text-base whitespace-nowrap flex items-center justify-between">
                                <span>2 Tamu, 1 Kmr</span>
                                <i class="fa-solid fa-angle-down text-xs text-slate-400"></i>
                            </div>
                        </div>
                    </div>

                    <!-- Tombol Cari -->
                    <button type="button" class="md:w-[72px] h-[72px] w-full rounded-3xl bg-brand-accent hover:bg-orange-600 text-white flex items-center justify-center text-2xl shadow-lg shadow-orange-500/30 transition-transform hover:scale-105 flex-shrink-0">
                        <i class="fa-solid fa-magnifying-glass"></i>
                    </button>

                </form>

                <!-- Sub filter Tipe (Pills) -->
                <div class="flex items-center gap-2 mt-5 overflow-x-auto no-scrollbar">
                    <span class="text-[11px] font-bold text-slate-400 mr-2">Filter Cepat:</span>
                    <button class="px-4 py-1.5 rounded-full bg-brand-50 border border-brand-200 text-brand-600 text-xs font-bold flex-shrink-0">Semua Tipe</button>
                    <button class="px-4 py-1.5 rounded-full bg-white/60 hover:bg-white border border-slate-200 text-slate-600 hover:text-brand-600 transition text-xs font-bold flex-shrink-0 flex items-center gap-1.5"><i class="fa-solid fa-hotel text-slate-400"></i> Hotel</button>
                    <button class="px-4 py-1.5 rounded-full bg-white/60 hover:bg-white border border-slate-200 text-slate-600 hover:text-brand-600 transition text-xs font-bold flex-shrink-0 flex items-center gap-1.5"><i class="fa-solid fa-house-chimney text-slate-400"></i> Villa</button>
                    <button class="px-4 py-1.5 rounded-full bg-white/60 hover:bg-white border border-slate-200 text-slate-600 hover:text-brand-600 transition text-xs font-bold flex-shrink-0 flex items-center gap-1.5"><i class="fa-solid fa-building text-slate-400"></i> Apartemen</button>
                </div>

            </div>
        </div>
    </header>

    <!-- PENGGANJAL UNTUK OVERLAP HERO -->
    <div class="h-12 md:h-24"></div>

    <!-- ========================================================================= -->
    <!-- 3. KUPON PENGGUNA BARU (Glass Aesthetic)                                  -->
    <!-- ========================================================================= -->
    <section class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 mb-16">
        <div class="flex items-end justify-between mb-6">
            <div>
                <h2 class="text-2xl font-black text-slate-900 tracking-tight">Kupon Sambutan ✨</h2>
                <p class="text-sm text-slate-500 mt-1 font-medium">Biar liburan pertamamu makin hemat dan asyik.</p>
            </div>
            <a href="#" class="hidden sm:flex px-4 py-2 rounded-full bg-brand-50 text-brand-600 text-xs font-bold items-center gap-1 hover:bg-brand-100 transition">
                Semua Promo <i class="fa-solid fa-chevron-right text-[10px]"></i>
            </a>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-5">
            
            <!-- Kupon 1 -->
            <div class="relative glass-card rounded-[2rem] p-6 group hover:-translate-y-1 transition-all duration-300">
                <div class="coupon-notch-left"></div>
                <div class="coupon-notch-right"></div>
                
                <div class="flex items-start gap-4 mb-4">
                    <div class="w-12 h-12 rounded-2xl bg-blue-100 text-brand-600 flex items-center justify-center text-xl font-black flex-shrink-0">
                        <i class="fa-solid fa-bed"></i>
                    </div>
                    <div>
                        <span class="inline-block px-2 py-0.5 rounded-md bg-brand-50 text-brand-600 text-[10px] font-black uppercase mb-1">Hotel & Stay</span>
                        <h3 class="font-black text-slate-900 leading-tight text-base">Diskon s.d 10%</h3>
                        <p class="text-xs text-slate-500 mt-1">Tanpa minimal transaksi.</p>
                    </div>
                </div>

                <div class="pt-4 border-t border-dashed border-slate-200 flex items-center justify-between">
                    <div class="flex flex-col">
                        <span class="text-[10px] text-slate-400 font-bold uppercase">Kode Promo</span>
                        <span class="font-mono font-black text-slate-800 text-sm">YUKHOTELBARU</span>
                    </div>
                    <button class="w-10 h-10 rounded-full bg-slate-100 hover:bg-brand-50 text-slate-600 hover:text-brand-600 flex items-center justify-center transition" title="Salin Kode">
                        <i class="fa-regular fa-copy"></i>
                    </button>
                </div>
            </div>

            <!-- Kupon 2 -->
            <div class="relative glass-card rounded-[2rem] p-6 group hover:-translate-y-1 transition-all duration-300">
                <div class="coupon-notch-left"></div>
                <div class="coupon-notch-right"></div>
                
                <div class="flex items-start gap-4 mb-4">
                    <div class="w-12 h-12 rounded-2xl bg-rose-100 text-rose-500 flex items-center justify-center text-xl font-black flex-shrink-0">
                        <i class="fa-solid fa-ticket"></i>
                    </div>
                    <div>
                        <span class="inline-block px-2 py-0.5 rounded-md bg-rose-50 text-rose-600 text-[10px] font-black uppercase mb-1">Atraksi Wisata</span>
                        <h3 class="font-black text-slate-900 leading-tight text-base">Potongan Rp 50rb</h3>
                        <p class="text-xs text-slate-500 mt-1">Berlaku untuk semua wahana.</p>
                    </div>
                </div>

                <div class="pt-4 border-t border-dashed border-slate-200 flex items-center justify-between">
                    <div class="flex flex-col">
                        <span class="text-[10px] text-slate-400 font-bold uppercase">Kode Promo</span>
                        <span class="font-mono font-black text-slate-800 text-sm">MAINSERU50</span>
                    </div>
                    <button class="w-10 h-10 rounded-full bg-slate-100 hover:bg-rose-50 text-slate-600 hover:text-rose-500 flex items-center justify-center transition" title="Salin Kode">
                        <i class="fa-regular fa-copy"></i>
                    </button>
                </div>
            </div>

            <!-- Kupon 3 -->
            <div class="relative glass-card rounded-[2rem] p-6 group hover:-translate-y-1 transition-all duration-300">
                <div class="coupon-notch-left"></div>
                <div class="coupon-notch-right"></div>
                
                <div class="flex items-start gap-4 mb-4">
                    <div class="w-12 h-12 rounded-2xl bg-emerald-100 text-emerald-600 flex items-center justify-center text-xl font-black flex-shrink-0">
                        <i class="fa-solid fa-car"></i>
                    </div>
                    <div>
                        <span class="inline-block px-2 py-0.5 rounded-md bg-emerald-50 text-emerald-600 text-[10px] font-black uppercase mb-1">Bandara & Rental</span>
                        <h3 class="font-black text-slate-900 leading-tight text-base">Cashback 15%</h3>
                        <p class="text-xs text-slate-500 mt-1">Antar jemput tepat waktu.</p>
                    </div>
                </div>

                <div class="pt-4 border-t border-dashed border-slate-200 flex items-center justify-between">
                    <div class="flex flex-col">
                        <span class="text-[10px] text-slate-400 font-bold uppercase">Kode Promo</span>
                        <span class="font-mono font-black text-slate-800 text-sm">JALANDULU</span>
                    </div>
                    <button class="w-10 h-10 rounded-full bg-slate-100 hover:bg-emerald-50 text-slate-600 hover:text-emerald-600 flex items-center justify-center transition" title="Salin Kode">
                        <i class="fa-regular fa-copy"></i>
                    </button>
                </div>
            </div>

        </div>
    </section>

    <!-- ========================================================================= -->
    <!-- 4. BANNER PROMO SEDANG BERLANGSUNG                                        -->
    <!-- ========================================================================= -->
    <section class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 mb-16">
        <div class="flex items-center justify-between mb-6">
            <h2 class="text-2xl font-black text-slate-900 tracking-tight">Promo Sedang Berlangsung</h2>
            <div class="flex gap-2">
                <button class="w-10 h-10 rounded-full bg-white border border-slate-200 text-slate-500 hover:bg-brand-50 hover:text-brand-600 transition flex items-center justify-center shadow-sm"><i class="fa-solid fa-chevron-left"></i></button>
                <button class="w-10 h-10 rounded-full bg-white border border-slate-200 text-slate-500 hover:bg-brand-50 hover:text-brand-600 transition flex items-center justify-center shadow-sm"><i class="fa-solid fa-chevron-right"></i></button>
            </div>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            <!-- Banner 1 -->
            <div class="rounded-[2rem] overflow-hidden aspect-[16/9] shadow-glass hover:shadow-glass-hover relative group cursor-pointer border border-white">
                <img src="https://img.cnt.traveloka.com/tvlk/image/imageResource/2026/09/25/1790321254543-5d4929173f344031f17058c1f1ac5a4b.png?tr=q-75&tvlk-w=1200&tvlk-h=600" alt="Vietnam" class="w-full h-full object-cover group-hover:scale-105 transition duration-700">
            </div>
            <!-- Banner 2 -->
            <div class="rounded-[2rem] overflow-hidden aspect-[16/9] shadow-glass hover:shadow-glass-hover relative group cursor-pointer border border-white">
                <img src="https://img.cnt.traveloka.com/tvlk/image/imageResource/2026/09/30/1790753654053-739d4a53529f36158ac5520c2557843b.png?tr=q-75&tvlk-w=1200&tvlk-h=600" alt="Thailand" class="w-full h-full object-cover group-hover:scale-105 transition duration-700">
            </div>
            <!-- Banner 3 -->
            <div class="rounded-[2rem] overflow-hidden aspect-[16/9] shadow-glass hover:shadow-glass-hover relative group cursor-pointer border border-white">
                <img src="https://img.cnt.traveloka.com/tvlk/image/imageResource/2026/09/10/1789013971443-f0f5b2de4d719742f05e3b967ca13bc2.png?tr=q-75&tvlk-w=1200&tvlk-h=600" alt="China" class="w-full h-full object-cover group-hover:scale-105 transition duration-700">
            </div>
        </div>
    </section>

    <!-- ========================================================================= -->
    <!-- 5. KATALOG TIKET PESAWAT (Rounded Clean UI)                               -->
    <!-- ========================================================================= -->
    <section class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 mb-16">
        <div class="mb-6">
            <h2 class="text-2xl font-black text-slate-900 tracking-tight">Rute Terbang Favorit ✈️</h2>
        </div>

        <div class="flex items-center gap-2 overflow-x-auto no-scrollbar pb-2 mb-4">
            <button class="px-5 py-2.5 rounded-full bg-brand-600 text-white text-sm font-bold shadow-md shadow-brand-500/30 whitespace-nowrap">Domestik</button>
            <button class="px-5 py-2.5 rounded-full bg-white border border-slate-200 text-slate-600 hover:bg-slate-50 text-sm font-bold whitespace-nowrap transition">Singapura</button>
            <button class="px-5 py-2.5 rounded-full bg-white border border-slate-200 text-slate-600 hover:bg-slate-50 text-sm font-bold whitespace-nowrap transition">Malaysia</button>
            <button class="px-5 py-2.5 rounded-full bg-white border border-slate-200 text-slate-600 hover:bg-slate-50 text-sm font-bold whitespace-nowrap transition">Jepang</button>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
            
            <!-- Rute 1 -->
            <div class="glass-card rounded-[2rem] overflow-hidden group hover:-translate-y-1 transition duration-300">
                <div class="relative h-40 overflow-hidden m-2 rounded-[1.5rem]">
                    <img src="https://img.cnt.traveloka.com/tvlk/image/imageResource/2025/03/17/1742182911182-4271e8ef8476f3a5d672d36cb68c0d85.jpeg?tr=q-75" class="w-full h-full object-cover group-hover:scale-110 transition duration-700">
                    <div class="absolute inset-0 bg-gradient-to-t from-slate-900/60 to-transparent"></div>
                    <span class="absolute bottom-3 left-3 bg-white/90 backdrop-blur text-slate-900 text-[10px] font-black px-2.5 py-1 rounded-full uppercase">Sekali Jalan</span>
                </div>
                <div class="p-4 pt-2">
                    <h3 class="font-black text-slate-800 text-sm">Jakarta (CGK) <i class="fa-solid fa-arrow-right text-xs mx-1 text-slate-400"></i> Yogyakarta (YIA)</h3>
                    <p class="text-xs text-slate-500 mt-1 font-medium"><i class="fa-regular fa-calendar mr-1"></i> 22 Okt 2026</p>
                    <div class="mt-4 flex items-center justify-between">
                        <span class="text-xs text-slate-400 font-bold">Mulai</span>
                        <span class="text-brand-accent font-black text-lg">Rp 684.400</span>
                    </div>
                </div>
            </div>

            <!-- Rute 2 -->
            <div class="glass-card rounded-[2rem] overflow-hidden group hover:-translate-y-1 transition duration-300">
                <div class="relative h-40 overflow-hidden m-2 rounded-[1.5rem]">
                    <img src="https://img.cnt.traveloka.com/tvlk/image/imageResource/2024/06/24/1719219766281-3379704fe1a541197c597457608a3365.jpeg?tr=q-75" class="w-full h-full object-cover group-hover:scale-110 transition duration-700">
                    <div class="absolute inset-0 bg-gradient-to-t from-slate-900/60 to-transparent"></div>
                    <span class="absolute bottom-3 left-3 bg-white/90 backdrop-blur text-slate-900 text-[10px] font-black px-2.5 py-1 rounded-full uppercase">Sekali Jalan</span>
                </div>
                <div class="p-4 pt-2">
                    <h3 class="font-black text-slate-800 text-sm">Jakarta (CGK) <i class="fa-solid fa-arrow-right text-xs mx-1 text-slate-400"></i> Surabaya (SUB)</h3>
                    <p class="text-xs text-slate-500 mt-1 font-medium"><i class="fa-regular fa-calendar mr-1"></i> 25 Okt 2026</p>
                    <div class="mt-4 flex items-center justify-between">
                        <span class="text-xs text-slate-400 font-bold">Mulai</span>
                        <span class="text-brand-accent font-black text-lg">Rp 876.800</span>
                    </div>
                </div>
            </div>

            <!-- Rute 3 -->
            <div class="glass-card rounded-[2rem] overflow-hidden group hover:-translate-y-1 transition duration-300">
                <div class="relative h-40 overflow-hidden m-2 rounded-[1.5rem]">
                    <img src="https://img.cnt.traveloka.com/tvlk/image/imageResource/2024/08/21/1724222591331-ecaaf4eaa667de76ee8a1acd5f81113e.jpeg?tr=q-75" class="w-full h-full object-cover group-hover:scale-110 transition duration-700">
                    <div class="absolute inset-0 bg-gradient-to-t from-slate-900/60 to-transparent"></div>
                    <span class="absolute bottom-3 left-3 bg-white/90 backdrop-blur text-slate-900 text-[10px] font-black px-2.5 py-1 rounded-full uppercase">Sekali Jalan</span>
                </div>
                <div class="p-4 pt-2">
                    <h3 class="font-black text-slate-800 text-sm">Jakarta (CGK) <i class="fa-solid fa-arrow-right text-xs mx-1 text-slate-400"></i> Lombok (LOP)</h3>
                    <p class="text-xs text-slate-500 mt-1 font-medium"><i class="fa-regular fa-calendar mr-1"></i> 13 Okt 2026</p>
                    <div class="mt-4 flex items-center justify-between">
                        <span class="text-xs text-slate-400 font-bold">Mulai</span>
                        <span class="text-brand-accent font-black text-lg">Rp 1.213.200</span>
                    </div>
                </div>
            </div>

            <!-- Rute 4 -->
            <div class="glass-card rounded-[2rem] overflow-hidden group hover:-translate-y-1 transition duration-300">
                <div class="relative h-40 overflow-hidden m-2 rounded-[1.5rem]">
                    <img src="https://img.cnt.traveloka.com/tvlk/image/imageResource/2024/06/24/1719218779617-3f0ae6b59dd5dd5186f4b177af52d230.jpeg?tr=q-75" class="w-full h-full object-cover group-hover:scale-110 transition duration-700">
                    <div class="absolute inset-0 bg-gradient-to-t from-slate-900/60 to-transparent"></div>
                    <span class="absolute bottom-3 left-3 bg-white/90 backdrop-blur text-slate-900 text-[10px] font-black px-2.5 py-1 rounded-full uppercase">Sekali Jalan</span>
                </div>
                <div class="p-4 pt-2">
                    <h3 class="font-black text-slate-800 text-sm">Jakarta (CGK) <i class="fa-solid fa-arrow-right text-xs mx-1 text-slate-400"></i> Bali (DPS)</h3>
                    <p class="text-xs text-slate-500 mt-1 font-medium"><i class="fa-regular fa-calendar mr-1"></i> 13 Okt 2026</p>
                    <div class="mt-4 flex items-center justify-between">
                        <span class="text-xs text-slate-400 font-bold">Mulai</span>
                        <span class="text-brand-accent font-black text-lg">Rp 1.240.900</span>
                    </div>
                </div>
            </div>

        </div>
    </section>

    <!-- ========================================================================= -->
    <!-- 6. KATALOG HOTEL (Floating Rounded Elements)                              -->
    <!-- ========================================================================= -->
    <section class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 mb-16 relative">
        <!-- Glow effect behind hotel section -->
        <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-full h-full bg-brand-50/50 rounded-full blur-[100px] pointer-events-none -z-10"></div>

        <div class="flex items-end justify-between mb-6">
            <div>
                <h2 class="text-2xl font-black text-slate-900 tracking-tight">Staycation Aesthetic 🏨</h2>
                <p class="text-sm text-slate-500 mt-1 font-medium">Hotel dan resor dengan rating tertinggi buat leyeh-leyeh.</p>
            </div>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
            
            <!-- Hotel 1 -->
            <div class="glass-card rounded-[2rem] p-2 hover:-translate-y-1 transition duration-300 group cursor-pointer flex flex-col">
                <div class="relative h-48 rounded-[1.5rem] overflow-hidden">
                    <img src="https://img.cnt.traveloka.com/tvlk/apr-asset/dgXfoyh24ryQLRcGq00cIdKHRmotrWLNlvG-TxlcLxGkiDwaUSggleJNPRgIHCX6/hotel/asset/10004607-cd602b5d5dbc65d02fe83abffcca5585.jpeg?tr=q-40,c-at_max,w-540,h-960" alt="Hotel" class="w-full h-full object-cover group-hover:scale-110 transition duration-700">
                    <div class="absolute top-2 left-2 bg-white/90 backdrop-blur text-slate-900 px-3 py-1 rounded-full text-[10px] font-black shadow-sm">Denpasar Barat</div>
                    <button class="absolute top-2 right-2 w-8 h-8 rounded-full bg-white/90 backdrop-blur flex items-center justify-center text-slate-400 hover:text-rose-500 transition shadow-sm"><i class="fa-solid fa-heart"></i></button>
                </div>
                <div class="p-4 flex-1 flex flex-col justify-between">
                    <div>
                        <div class="flex text-amber-400 text-[10px] mb-1.5"><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i></div>
                        <h3 class="font-black text-slate-900 text-sm leading-snug line-clamp-2">Choice Stay Hotel Denpasar</h3>
                        <p class="text-[11px] font-bold text-brand-600 mt-1">8.6/10 <span class="text-slate-400 font-medium">(2.6rb ulasan)</span></p>
                    </div>
                    <div class="mt-4 pt-3 border-t border-slate-100 flex items-end justify-between">
                        <div>
                            <span class="text-[10px] text-slate-400 line-through block mb-0.5">Rp 282.555</span>
                            <span class="font-black text-accent text-lg">Rp 259.859</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Hotel 2 -->
            <div class="glass-card rounded-[2rem] p-2 hover:-translate-y-1 transition duration-300 group cursor-pointer flex flex-col">
                <div class="relative h-48 rounded-[1.5rem] overflow-hidden">
                    <img src="https://img.cnt.traveloka.com/tvlk/apr-asset/Ixf4aptF5N2Qdfmh4fGGYhTN274kJXuNMkUAzpL5HuD9jzSxIGG5kZNhhHY-p7nw/hotel/asset/10000126-cc968d77183bab6237a5c3b5de6332cd.png?tr=q-40,c-at_max,w-540,h-960" alt="Hotel" class="w-full h-full object-cover group-hover:scale-110 transition duration-700">
                    <div class="absolute top-2 left-2 bg-white/90 backdrop-blur text-slate-900 px-3 py-1 rounded-full text-[10px] font-black shadow-sm">Kuta, Bali</div>
                    <button class="absolute top-2 right-2 w-8 h-8 rounded-full bg-white/90 backdrop-blur flex items-center justify-center text-slate-400 hover:text-rose-500 transition shadow-sm"><i class="fa-solid fa-heart"></i></button>
                </div>
                <div class="p-4 flex-1 flex flex-col justify-between">
                    <div>
                        <div class="flex text-amber-400 text-[10px] mb-1.5"><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i></div>
                        <h3 class="font-black text-slate-900 text-sm leading-snug line-clamp-2">Stark Boutique Hotel and Spa Bali</h3>
                        <p class="text-[11px] font-bold text-brand-600 mt-1">8.2/10 <span class="text-slate-400 font-medium">(3.3rb ulasan)</span></p>
                    </div>
                    <div class="mt-4 pt-3 border-t border-slate-100 flex items-end justify-between">
                        <div>
                            <span class="text-[10px] text-slate-400 line-through block mb-0.5">Rp 350.469</span>
                            <span class="font-black text-accent text-lg">Rp 341.559</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Hotel 3 -->
            <div class="glass-card rounded-[2rem] p-2 hover:-translate-y-1 transition duration-300 group cursor-pointer flex flex-col">
                <div class="relative h-48 rounded-[1.5rem] overflow-hidden">
                    <img src="https://img.cnt.traveloka.com/tvlk/apr-asset/dgXfoyh24ryQLRcGq00cIdKHRmotrWLNlvG-TxlcLxGkiDwaUSggleJNPRgIHCX6/hotel/asset/10013035-1200x845-FIT_AND_TRIM-affbbd70857894e2e5d0a3fbc7e91c67.jpeg?tr=q-40,c-at_max,w-540,h-960" alt="Hotel" class="w-full h-full object-cover group-hover:scale-110 transition duration-700">
                    <div class="absolute top-2 left-2 bg-white/90 backdrop-blur text-slate-900 px-3 py-1 rounded-full text-[10px] font-black shadow-sm">Kemang</div>
                    <div class="absolute bottom-2 right-2 bg-rose-500 text-white px-2.5 py-1 rounded-full text-[10px] font-black shadow-lg">HEMAT 41%</div>
                </div>
                <div class="p-4 flex-1 flex flex-col justify-between">
                    <div>
                        <div class="flex text-amber-400 text-[10px] mb-1.5"><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i></div>
                        <h3 class="font-black text-slate-900 text-sm leading-snug line-clamp-2">grandkemang Hotel</h3>
                        <p class="text-[11px] font-bold text-brand-600 mt-1">8.4/10 <span class="text-slate-400 font-medium">(5rb ulasan)</span></p>
                    </div>
                    <div class="mt-4 pt-3 border-t border-slate-100 flex items-end justify-between">
                        <div>
                            <span class="text-[10px] text-slate-400 line-through block mb-0.5">Rp 743.802</span>
                            <span class="font-black text-accent text-lg">Rp 436.513</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Hotel 4 -->
            <div class="glass-card rounded-[2rem] p-2 hover:-translate-y-1 transition duration-300 group cursor-pointer flex flex-col">
                <div class="relative h-48 rounded-[1.5rem] overflow-hidden">
                    <img src="https://img.cnt.traveloka.com/tvlk/apr-asset/Ixf4aptF5N2Qdfmh4fGGYhTN274kJXuNMkUAzpL5HuD9jzSxIGG5kZNhhHY-p7nw/hotel/asset/20047598-f8a7c7b6207e60a0bed6705fcc07e6bb.jpeg?tr=q-40,c-at_max,w-540,h-960" alt="Hotel" class="w-full h-full object-cover group-hover:scale-110 transition duration-700">
                    <div class="absolute top-2 left-2 bg-white/90 backdrop-blur text-slate-900 px-3 py-1 rounded-full text-[10px] font-black shadow-sm">Lembang</div>
                    <div class="absolute bottom-2 right-2 bg-rose-500 text-white px-2.5 py-1 rounded-full text-[10px] font-black shadow-lg">HEMAT 15%</div>
                </div>
                <div class="p-4 flex-1 flex flex-col justify-between">
                    <div>
                        <div class="flex text-amber-400 text-[10px] mb-1.5"><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i></div>
                        <h3 class="font-black text-slate-900 text-sm leading-snug line-clamp-2">Emaki Resort Lembang</h3>
                        <p class="text-[11px] font-bold text-brand-600 mt-1">8.8/10 <span class="text-slate-400 font-medium">(450 ulasan)</span></p>
                    </div>
                    <div class="mt-4 pt-3 border-t border-slate-100 flex items-end justify-between">
                        <div>
                            <span class="text-[10px] text-slate-400 line-through block mb-0.5">Rp 462.162</span>
                            <span class="font-black text-accent text-lg">Rp 392.763</span>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>

    <!-- ========================================================================= -->
    <!-- 7. ATRAKSI WISATA (Glass Cards)                                           -->
    <!-- ========================================================================= -->
    <section class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 mb-20">
        <div class="flex items-end justify-between mb-6">
            <div>
                <h2 class="text-2xl font-black text-slate-900 tracking-tight">Atraksi & Hiburan 🎢</h2>
                <p class="text-sm text-slate-500 mt-1 font-medium">Beli tiket instan tanpa perlu antre di loket.</p>
            </div>
            <a href="#" class="hidden sm:flex px-4 py-2 rounded-full bg-brand-50 text-brand-600 text-xs font-bold items-center gap-1 hover:bg-brand-100 transition">
                Lihat Semua <i class="fa-solid fa-chevron-right text-[10px]"></i>
            </a>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
            
            <div class="glass-card rounded-[2rem] p-2 hover:-translate-y-1 transition duration-300 group cursor-pointer flex flex-col">
                <div class="relative h-48 rounded-[1.5rem] overflow-hidden">
                    <img src="https://img.cnt.traveloka.com/tvlk/xpe-asset/GZtqLuOqb-33qvDmG1FcMeN1eFEH7PVvlsdFr2AUBT39jzSxIGG5kZNhhHY-p7nw/2000914218743/Tiket-Pertunjukan-Tari-Kecak-dan-Tari-Api-di-Pura-Uluwatu-b3ffbd6c-f4f9-4ebc-b619-3988f2dff966.jpeg?tr=q-60,c-at_max,w-540,h-960" alt="Atraksi" class="w-full h-full object-cover group-hover:scale-110 transition duration-700">
                    <div class="absolute top-2 left-2 bg-rose-500/90 backdrop-blur text-white px-3 py-1 rounded-full text-[10px] font-black shadow-sm">Pecatu, Bali</div>
                </div>
                <div class="p-4 flex-1 flex flex-col justify-between">
                    <div>
                        <h3 class="font-black text-slate-900 text-sm leading-snug line-clamp-2">Tiket Pertunjukan Tari Kecak dan Tari Api Uluwatu</h3>
                        <p class="text-[11px] font-bold text-brand-600 mt-1.5">⭐ 9.2/10 <span class="text-slate-400 font-medium">(15.5rb ulasan)</span></p>
                    </div>
                    <div class="mt-4 pt-3 border-t border-slate-100 flex items-end justify-between">
                        <div>
                            <span class="text-[10px] text-slate-400 line-through block mb-0.5">Rp 150.000</span>
                            <span class="font-black text-accent text-lg">Rp 140.000</span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="glass-card rounded-[2rem] p-2 hover:-translate-y-1 transition duration-300 group cursor-pointer flex flex-col">
                <div class="relative h-48 rounded-[1.5rem] overflow-hidden">
                    <img src="https://img.cnt.traveloka.com/tvlk/xpe-asset/GZtqLuOqb-33qvDmG1FcMeN1eFEH7PVvlsdFr2AUBT39jzSxIGG5kZNhhHY-p7nw/2001807961267/Waterbom-Bali-Tickets-3b9ac052-4a0a-4013-b63b-9fb3386d9165.jpeg?tr=q-60,c-at_max,w-540,h-960" alt="Atraksi" class="w-full h-full object-cover group-hover:scale-110 transition duration-700">
                    <div class="absolute top-2 left-2 bg-rose-500/90 backdrop-blur text-white px-3 py-1 rounded-full text-[10px] font-black shadow-sm">Kuta, Bali</div>
                </div>
                <div class="p-4 flex-1 flex flex-col justify-between">
                    <div>
                        <h3 class="font-black text-slate-900 text-sm leading-snug line-clamp-2">Waterbom Bali Tiket</h3>
                        <p class="text-[11px] font-bold text-brand-600 mt-1.5">⭐ 9.4/10 <span class="text-slate-400 font-medium">(21.1rb ulasan)</span></p>
                    </div>
                    <div class="mt-4 pt-3 border-t border-slate-100 flex items-end justify-between">
                        <div>
                            <span class="text-[10px] text-slate-400 line-through block mb-0.5">Rp 370.000</span>
                            <span class="font-black text-accent text-lg">Rp 333.000</span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="glass-card rounded-[2rem] p-2 hover:-translate-y-1 transition duration-300 group cursor-pointer flex flex-col">
                <div class="relative h-48 rounded-[1.5rem] overflow-hidden">
                    <img src="https://img.cnt.traveloka.com/tvlk/xpe-asset/GZtqLuOqb-33qvDmG1FcMeN1eFEH7PVvlsdFr2AUBT39jzSxIGG5kZNhhHY-p7nw/2000068312783/Bali-Zoo-Tickets-e0706c2e-74bb-4471-8497-da4d0ae5612b.jpeg?tr=q-60,c-at_max,w-540,h-960" alt="Atraksi" class="w-full h-full object-cover group-hover:scale-110 transition duration-700">
                    <div class="absolute top-2 left-2 bg-rose-500/90 backdrop-blur text-white px-3 py-1 rounded-full text-[10px] font-black shadow-sm">Ubud</div>
                    <div class="absolute bottom-2 right-2 bg-rose-500 text-white px-2.5 py-1 rounded-full text-[10px] font-black shadow-lg">HEMAT 27%</div>
                </div>
                <div class="p-4 flex-1 flex flex-col justify-between">
                    <div>
                        <h3 class="font-black text-slate-900 text-sm leading-snug line-clamp-2">Bali Zoo Tiket</h3>
                        <p class="text-[11px] font-bold text-brand-600 mt-1.5">⭐ 9.0/10 <span class="text-slate-400 font-medium">(34.7rb ulasan)</span></p>
                    </div>
                    <div class="mt-4 pt-3 border-t border-slate-100 flex items-end justify-between">
                        <div>
                            <span class="text-[10px] text-slate-400 line-through block mb-0.5">Rp 140.000</span>
                            <span class="font-black text-accent text-lg">Rp 102.790</span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="glass-card rounded-[2rem] p-2 hover:-translate-y-1 transition duration-300 group cursor-pointer flex flex-col">
                <div class="relative h-48 rounded-[1.5rem] overflow-hidden">
                    <img src="https://img.cnt.traveloka.com/tvlk/xpe-asset/GZtqLuOqb-33qvDmG1FcMeN1eFEH7PVvlsdFr2AUBT39jzSxIGG5kZNhhHY-p7nw/2001162996890/Borobudur-Temple-Tickets-5be6ac98-f62b-4e1f-9900-b3c50f6ab5de.jpeg?tr=q-60,c-at_max,w-540,h-960" alt="Atraksi" class="w-full h-full object-cover group-hover:scale-110 transition duration-700">
                    <div class="absolute top-2 left-2 bg-rose-500/90 backdrop-blur text-white px-3 py-1 rounded-full text-[10px] font-black shadow-sm">Borobudur</div>
                    <div class="absolute bottom-2 right-2 bg-rose-500 text-white px-2.5 py-1 rounded-full text-[10px] font-black shadow-lg">HEMAT 20%</div>
                </div>
                <div class="p-4 flex-1 flex flex-col justify-between">
                    <div>
                        <h3 class="font-black text-slate-900 text-sm leading-snug line-clamp-2">Tiket Candi Borobudur</h3>
                        <p class="text-[11px] font-bold text-brand-600 mt-1.5">⭐ 9.3/10 <span class="text-slate-400 font-medium">(110.7rb ulasan)</span></p>
                    </div>
                    <div class="mt-4 pt-3 border-t border-slate-100 flex items-end justify-between">
                        <div>
                            <span class="text-[10px] text-slate-400 line-through block mb-0.5">Rp 50.000</span>
                            <span class="font-black text-accent text-lg">Rp 40.000</span>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>

    <!-- ========================================================================= -->
    <!-- 8. FOOTER YANG BERSIH & MODERN                                            -->
    <!-- ========================================================================= -->
    <footer class="bg-white border-t border-slate-200 pt-16 pb-8 mt-auto">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-5 gap-10 pb-12 border-b border-slate-100">
                
                <div class="lg:col-span-2">
                    <a href="#" class="flex items-center gap-2.5 mb-6">
                        <div class="w-10 h-10 rounded-full bg-brand-600 flex items-center justify-center text-white shadow-md">
                            <i class="fa-solid fa-paper-plane text-lg"></i>
                        </div>
                        <span class="text-2xl font-black text-slate-900 tracking-tight">JalanYuk<span class="text-brand-500">.</span></span>
                    </a>
                    <p class="text-slate-500 text-sm leading-relaxed mb-6 max-w-sm">
                        Satu platform untuk segala kebutuhan perjalananmu. Temukan harga terbaik, pesan tanpa ribet, dan ciptakan memori yang tak terlupakan.
                    </p>
                    <div class="flex items-center gap-3">
                        <a href="#" class="w-9 h-9 rounded-full bg-slate-100 text-slate-600 flex items-center justify-center hover:bg-brand-600 hover:text-white transition shadow-sm"><i class="fa-brands fa-instagram"></i></a>
                        <a href="#" class="w-9 h-9 rounded-full bg-slate-100 text-slate-600 flex items-center justify-center hover:bg-brand-600 hover:text-white transition shadow-sm"><i class="fa-brands fa-tiktok"></i></a>
                        <a href="#" class="w-9 h-9 rounded-full bg-slate-100 text-slate-600 flex items-center justify-center hover:bg-brand-600 hover:text-white transition shadow-sm"><i class="fa-brands fa-x-twitter"></i></a>
                    </div>
                </div>

                <div>
                    <h4 class="font-bold text-slate-900 mb-4">Layanan Kami</h4>
                    <ul class="space-y-3 text-sm text-slate-500 font-medium">
                        <li><a href="#" class="hover:text-brand-600 transition">Hotel & Resort</a></li>
                        <li><a href="#" class="hover:text-brand-600 transition">Tiket Pesawat</a></li>
                        <li><a href="#" class="hover:text-brand-600 transition">Kereta Api</a></li>
                        <li><a href="#" class="hover:text-brand-600 transition">Rental Mobil</a></li>
                    </ul>
                </div>

                <div>
                    <h4 class="font-bold text-slate-900 mb-4">Dukungan</h4>
                    <ul class="space-y-3 text-sm text-slate-500 font-medium">
                        <li><a href="#" class="hover:text-brand-600 transition">Pusat Bantuan</a></li>
                        <li><a href="#" class="hover:text-brand-600 transition">Kebijakan Privasi</a></li>
                        <li><a href="#" class="hover:text-brand-600 transition">Syarat & Ketentuan</a></li>
                        <li><a href="#" class="hover:text-brand-600 transition">Hubungi Kami</a></li>
                    </ul>
                </div>

                <div>
                    <h4 class="font-bold text-slate-900 mb-4">Pembayaran Aman</h4>
                    <p class="text-slate-500 text-xs mb-3">Dilindungi enkripsi SSL 256-bit.</p>
                    <div class="flex items-center gap-2 text-2xl text-slate-300">
                        <i class="fa-brands fa-cc-visa"></i>
                        <i class="fa-brands fa-cc-mastercard"></i>
                        <i class="fa-brands fa-cc-paypal"></i>
                    </div>
                </div>

            </div>
            
            <div class="pt-8 text-center text-xs font-medium text-slate-400">
                &copy; 2026 PT JalanYuk Wisata Nusantara. Seluruh Hak Cipta Dilindungi.
            </div>
        </div>
    </footer>

    <!-- ========================================================================= -->
    <!-- JAVASCRIPT: NAVBAR SCROLL EFFECT                                          -->
    <!-- ========================================================================= -->
    <script>
        const navbarWrapper = document.getElementById('navbar-wrapper');
        const navbar = document.getElementById('navbar');

        window.addEventListener('scroll', () => {
            if (window.scrollY > 50) {
                // Saat scroll, navbar menjadi nempel penuh di atas
                navbarWrapper.classList.remove('top-4', 'px-4', 'sm:px-6', 'lg:px-8');
                navbarWrapper.classList.add('top-0', 'px-0');
                
                navbar.classList.remove('rounded-full', 'glass-card', 'max-w-7xl');
                navbar.classList.add('rounded-none', 'bg-white/90', 'backdrop-blur-md', 'shadow-sm', 'border-b', 'border-slate-200');
            } else {
                // Saat paling atas, navbar kembali menjadi melayang (floating pill)
                navbarWrapper.classList.add('top-4', 'px-4', 'sm:px-6', 'lg:px-8');
                navbarWrapper.classList.remove('top-0', 'px-0');
                
                navbar.classList.add('rounded-full', 'glass-card', 'max-w-7xl');
                navbar.classList.remove('rounded-none', 'bg-white/90', 'backdrop-blur-md', 'shadow-sm', 'border-b', 'border-slate-200');
            }
        });
    </script>

</body>
</html>