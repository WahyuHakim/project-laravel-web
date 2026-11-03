<!DOCTYPE html>
<html lang="id" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Hotel - JalanYuk</title>
    
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
        .hide-scroll::-webkit-scrollbar { display: none; }
        .hide-scroll { -ms-overflow-style: none; scrollbar-width: none; }
    </style>
</head>
<body class="bg-slate-50 text-slate-800 antialiased selection:bg-brand-400 selection:text-white relative">

    <!-- Ambient Glow di Background -->
    <div class="fixed top-0 left-0 w-[500px] h-[500px] bg-brand-200/40 rounded-full blur-[100px] pointer-events-none -z-10"></div>
    <div class="fixed bottom-0 right-0 w-[600px] h-[600px] bg-blue-200/30 rounded-full blur-[120px] pointer-events-none -z-10"></div>

    <!-- Navbar Sederhana -->
    <div class="sticky top-0 z-50 px-4 sm:px-6 lg:px-8 py-3 bg-white/80 backdrop-blur-md border-b border-slate-200 shadow-sm">
        <div class="max-w-7xl mx-auto flex items-center justify-between">
            <a href="{{ url('/') }}" class="flex items-center gap-2.5">
                <span class="text-2xl font-black text-slate-900 tracking-tight">JalanYuk<span class="text-brand-500">.</span></span>
            </a>
            <div class="flex items-center gap-3">
                <a href="{{ url('/search') }}" class="px-4 py-2 rounded-full text-sm font-bold text-slate-600 hover:bg-slate-100 transition"><i class="fa-solid fa-arrow-left mr-2"></i>Kembali ke Pencarian</a>
            </div>
        </div>
    </div>

    <main class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
        
        <!-- Header Judul & Navigasi Cepat -->
        <div class="flex flex-col md:flex-row md:items-end justify-between gap-4 mb-6">
            <div>
                <div class="flex items-center gap-2 mb-2">
                    <span class="px-2.5 py-1 rounded-md bg-brand-50 text-brand-600 text-[10px] font-black uppercase tracking-wide">Hotel & Stay</span>
                    <div class="flex text-amber-400 text-[10px]"><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i></div>
                </div>
                <h1 class="text-3xl font-black text-slate-900 tracking-tight">grandkemang Hotel</h1>
                <p class="text-sm text-slate-500 font-medium mt-1.5 flex items-center gap-1.5">
                    <i class="fa-solid fa-location-dot text-brand-500"></i> Jl. Kemang Raya No. 2 H, Kemang, Jakarta Selatan
                </p>
            </div>
            <div class="flex items-center gap-3">
                <div class="text-right">
                    <p class="text-[11px] font-bold text-slate-400 uppercase">Mulai dari</p>
                    <p class="text-2xl font-black text-brand-accent">Rp 436.513 <span class="text-sm font-normal text-slate-500">/malam</span></p>
                </div>
                <a href="#rooms" class="px-6 py-3 rounded-full bg-brand-600 hover:bg-brand-700 text-white font-bold text-sm shadow-md transition">Pilih Kamar</a>
            </div>
        </div>

        <!-- Galeri Foto (Grid Layout) -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-3 mb-10 h-auto md:h-[450px]">
            <div class="md:col-span-2 relative rounded-[2rem] overflow-hidden group cursor-pointer h-[250px] md:h-full">
                <img src="https://img.cnt.traveloka.com/tvlk/apr-asset/dgXfoyh24ryQLRcGq00cIdKHRmotrWLNlvG-TxlcLxGkiDwaUSggleJNPRgIHCX6/hotel/asset/10013035-1200x845-FIT_AND_TRIM-affbbd70857894e2e5d0a3fbc7e91c67.jpeg?tr=q-80,w-1200" class="w-full h-full object-cover group-hover:scale-105 transition duration-500">
            </div>
            <div class="grid grid-cols-2 md:grid-cols-1 gap-3 h-[150px] md:h-full">
                <div class="relative rounded-[1.5rem] md:rounded-[2rem] overflow-hidden group cursor-pointer h-full">
                    <img src="https://img.cnt.traveloka.com/tvlk/apr-asset/dgXfoyh24ryQLRcGq00cIdKHRmotrWLNlvG-TxlcLxGkiDwaUSggleJNPRgIHCX6/hotel/asset/10013035-3d5f3d35a8bc5edbf6eb77efbdf32223.jpeg?tr=q-80,w-600" class="w-full h-full object-cover group-hover:scale-105 transition duration-500">
                </div>
                <div class="relative rounded-[1.5rem] md:rounded-[2rem] overflow-hidden group cursor-pointer h-full">
                    <img src="https://img.cnt.traveloka.com/tvlk/apr-asset/dgXfoyh24ryQLRcGq00cIdKHRmotrWLNlvG-TxlcLxGkiDwaUSggleJNPRgIHCX6/hotel/asset/10013035-cc4c6883733ceef12574043b44b93fb2.jpeg?tr=q-80,w-600" class="w-full h-full object-cover group-hover:scale-105 transition duration-500">
                    <div class="absolute inset-0 bg-black/40 flex items-center justify-center">
                        <span class="text-white font-bold text-sm">+12 Foto Lainnya</span>
                    </div>
                </div>
            </div>
        </div>

        <!-- Kolom Konten -->
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-10">
            
            <!-- Kiri: Detail & Fasilitas -->
            <div class="lg:col-span-2 space-y-8">
                
                <!-- Info Utama -->
                <div class="glass-card rounded-[2rem] p-6 sm:p-8">
                    <h2 class="text-xl font-black text-slate-900 mb-4">Tentang Akomodasi Ini</h2>
                    <p class="text-slate-600 text-sm leading-relaxed mb-4">
                        Menawarkan akomodasi bintang 4 di kawasan elit Kemang, Jakarta Selatan. Grandkemang Hotel menyediakan oasis yang tenang di tengah hiruk pikuk kota. Cocok untuk perjalanan bisnis maupun liburan akhir pekan bersama keluarga. 
                    </p>
                    <p class="text-slate-600 text-sm leading-relaxed">
                        Nikmati fasilitas kolam renang *outdoor*, pusat kebugaran, dan restoran VIVA yang menyajikan hidangan lokal hingga internasional sepanjang hari. Tersedia juga akses WiFi berkecepatan tinggi di seluruh area properti.
                    </p>
                </div>

                <!-- Fasilitas -->
                <div class="glass-card rounded-[2rem] p-6 sm:p-8">
                    <h2 class="text-xl font-black text-slate-900 mb-6">Fasilitas Populer</h2>
                    <div class="grid grid-cols-2 sm:grid-cols-4 gap-4">
                        <div class="flex flex-col items-center justify-center p-4 rounded-[1.5rem] bg-slate-50 border border-slate-100 text-center gap-2">
                            <i class="fa-solid fa-water text-2xl text-brand-500"></i>
                            <span class="text-xs font-bold text-slate-700">Kolam Renang</span>
                        </div>
                        <div class="flex flex-col items-center justify-center p-4 rounded-[1.5rem] bg-slate-50 border border-slate-100 text-center gap-2">
                            <i class="fa-solid fa-wifi text-2xl text-brand-500"></i>
                            <span class="text-xs font-bold text-slate-700">WiFi Gratis</span>
                        </div>
                        <div class="flex flex-col items-center justify-center p-4 rounded-[1.5rem] bg-slate-50 border border-slate-100 text-center gap-2">
                            <i class="fa-solid fa-utensils text-2xl text-brand-500"></i>
                            <span class="text-xs font-bold text-slate-700">Restoran</span>
                        </div>
                        <div class="flex flex-col items-center justify-center p-4 rounded-[1.5rem] bg-slate-50 border border-slate-100 text-center gap-2">
                            <i class="fa-solid fa-dumbbell text-2xl text-brand-500"></i>
                            <span class="text-xs font-bold text-slate-700">Gym</span>
                        </div>
                        <div class="flex flex-col items-center justify-center p-4 rounded-[1.5rem] bg-slate-50 border border-slate-100 text-center gap-2">
                            <i class="fa-solid fa-square-parking text-2xl text-brand-500"></i>
                            <span class="text-xs font-bold text-slate-700">Parkir</span>
                        </div>
                        <div class="flex flex-col items-center justify-center p-4 rounded-[1.5rem] bg-slate-50 border border-slate-100 text-center gap-2">
                            <i class="fa-solid fa-spa text-2xl text-brand-500"></i>
                            <span class="text-xs font-bold text-slate-700">Spa & Pijat</span>
                        </div>
                        <div class="flex flex-col items-center justify-center p-4 rounded-[1.5rem] bg-slate-50 border border-slate-100 text-center gap-2">
                            <i class="fa-solid fa-bell-concierge text-2xl text-brand-500"></i>
                            <span class="text-xs font-bold text-slate-700">Resepsionis 24J</span>
                        </div>
                        <div class="flex flex-col items-center justify-center p-4 rounded-[1.5rem] bg-slate-50 border border-slate-100 text-center gap-2">
                            <i class="fa-solid fa-martini-glass-citrus text-2xl text-brand-500"></i>
                            <span class="text-xs font-bold text-slate-700">Bar/Lounge</span>
                        </div>
                    </div>
                </div>

            </div>

            <!-- Kanan: Widget Ringkasan & Peta -->
            <aside class="space-y-6">
                <!-- Peta Mini -->
                <div class="glass-card rounded-[2rem] p-3">
                    <div class="w-full h-48 bg-slate-200 rounded-[1.5rem] overflow-hidden relative">
                        <!-- Placeholder Peta Google -->
                        <img src="https://developers.google.com/static/maps/images/landing/hero_maps_static_api.png" class="w-full h-full object-cover opacity-80">
                        <div class="absolute inset-0 flex items-center justify-center">
                            <button class="px-5 py-2 bg-white text-slate-900 text-xs font-bold rounded-full shadow-lg hover:scale-105 transition"><i class="fa-solid fa-map-location-dot text-brand-500 mr-2"></i>Buka Peta</button>
                        </div>
                    </div>
                    <div class="mt-4 px-3 pb-2 text-xs text-slate-600">
                        <div class="flex justify-between items-center mb-2">
                            <span class="font-medium"><i class="fa-solid fa-train text-slate-400 mr-1.5"></i> Stasiun MRT Blok M</span>
                            <span class="font-bold">1.8 km</span>
                        </div>
                        <div class="flex justify-between items-center">
                            <span class="font-medium"><i class="fa-solid fa-shop text-slate-400 mr-1.5"></i> Lippo Mall Kemang</span>
                            <span class="font-bold">850 m</span>
                        </div>
                    </div>
                </div>

                <!-- Skor Ulasan -->
                <div class="glass-card rounded-[2rem] p-6 flex items-center gap-4">
                    <div class="w-16 h-16 rounded-[1.2rem] bg-brand-50 border border-brand-100 flex items-center justify-center text-brand-600 text-2xl font-black flex-shrink-0">
                        8.4
                    </div>
                    <div>
                        <h3 class="font-black text-slate-900 text-lg">Mengesankan</h3>
                        <p class="text-xs text-slate-500 font-medium">Berdasarkan 5.021 ulasan tamu</p>
                    </div>
                </div>
            </aside>
        </div>

        <!-- Daftar Kamar Tersedia -->
        <div id="rooms" class="mt-12">
            <h2 class="text-2xl font-black text-slate-900 mb-6">Pilihan Kamar Tersedia</h2>
            
            <div class="space-y-5">
                
                <!-- Tipe Kamar 1 -->
                <div class="glass-card rounded-[2rem] p-4 sm:p-6 flex flex-col md:flex-row gap-6">
                    <div class="w-full md:w-64 h-48 bg-slate-200 rounded-[1.5rem] overflow-hidden flex-shrink-0">
                        <img src="https://img.cnt.traveloka.com/tvlk/apr-asset/dgXfoyh24ryQLRcGq00cIdKHRmotrWLNlvG-TxlcLxGkiDwaUSggleJNPRgIHCX6/hotel/asset/10013035-7d4323c347963be8deef4d528b9fb634.jpeg?tr=q-80" class="w-full h-full object-cover">
                    </div>
                    <div class="flex-1 flex flex-col justify-between">
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                            <!-- Info Kamar -->
                            <div>
                                <h3 class="text-xl font-black text-slate-900">Deluxe Twin Room</h3>
                                <div class="flex items-center gap-3 text-xs text-slate-500 mt-2 font-medium">
                                    <span><i class="fa-solid fa-bed mr-1"></i> 2 Kasur Single</span>
                                    <span><i class="fa-solid fa-maximize mr-1"></i> 28.0 m²</span>
                                    <span><i class="fa-solid fa-user-group mr-1"></i> 2 Tamu</span>
                                </div>
                                <div class="mt-4 space-y-2">
                                    <div class="flex items-center text-xs font-bold text-emerald-600"><i class="fa-solid fa-check mr-2"></i> Sarapan Gratis untuk 2 orang</div>
                                    <div class="flex items-center text-xs font-bold text-emerald-600"><i class="fa-solid fa-check mr-2"></i> WiFi Gratis</div>
                                    <div class="flex items-center text-xs font-bold text-rose-500"><i class="fa-solid fa-xmark mr-2"></i> Tidak bisa *refund*</div>
                                </div>
                            </div>
                            <!-- Harga & Tombol -->
                            <div class="md:text-right flex flex-col justify-end">
                                <div class="mb-3">
                                    <p class="text-xs text-slate-400 line-through">Rp 743.802</p>
                                    <p class="text-2xl font-black text-brand-accent">Rp 436.513</p>
                                    <p class="text-[10px] text-slate-500 font-bold uppercase mt-0.5">Termasuk Pajak & Biaya</p>
                                </div>
                                <!-- Arahkan ke halaman Checkout -->
                                <a href="{{ url('/checkout') }}" class="block text-center md:inline-block px-8 py-3 rounded-2xl bg-brand-600 hover:bg-brand-700 text-white font-bold text-sm shadow-md transition">Pesan Sekarang</a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Tipe Kamar 2 -->
                <div class="glass-card rounded-[2rem] p-4 sm:p-6 flex flex-col md:flex-row gap-6">
                    <div class="w-full md:w-64 h-48 bg-slate-200 rounded-[1.5rem] overflow-hidden flex-shrink-0">
                        <img src="https://img.cnt.traveloka.com/tvlk/apr-asset/dgXfoyh24ryQLRcGq00cIdKHRmotrWLNlvG-TxlcLxGkiDwaUSggleJNPRgIHCX6/hotel/asset/10013035-7cdbb35b5a45b6dbfa5693d25838ccb2.jpeg?tr=q-80" class="w-full h-full object-cover">
                    </div>
                    <div class="flex-1 flex flex-col justify-between">
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                            <!-- Info Kamar -->
                            <div>
                                <h3 class="text-xl font-black text-slate-900">Grand Deluxe King</h3>
                                <div class="flex items-center gap-3 text-xs text-slate-500 mt-2 font-medium">
                                    <span><i class="fa-solid fa-bed mr-1"></i> 1 Kasur King</span>
                                    <span><i class="fa-solid fa-maximize mr-1"></i> 32.0 m²</span>
                                    <span><i class="fa-solid fa-user-group mr-1"></i> 2 Tamu</span>
                                </div>
                                <div class="mt-4 space-y-2">
                                    <div class="flex items-center text-xs font-bold text-emerald-600"><i class="fa-solid fa-check mr-2"></i> Sarapan Gratis untuk 2 orang</div>
                                    <div class="flex items-center text-xs font-bold text-emerald-600"><i class="fa-solid fa-check mr-2"></i> WiFi Gratis</div>
                                    <div class="flex items-center text-xs font-bold text-emerald-600"><i class="fa-solid fa-check mr-2"></i> Gratis Pembatalan</div>
                                </div>
                            </div>
                            <!-- Harga & Tombol -->
                            <div class="md:text-right flex flex-col justify-end">
                                <div class="mb-3">
                                    <p class="text-2xl font-black text-brand-accent">Rp 612.000</p>
                                    <p class="text-[10px] text-slate-500 font-bold uppercase mt-0.5">Termasuk Pajak & Biaya</p>
                                </div>
                                <a href="{{ url('/checkout') }}" class="block text-center md:inline-block px-8 py-3 rounded-2xl bg-brand-600 hover:bg-brand-700 text-white font-bold text-sm shadow-md transition">Pesan Sekarang</a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>

    </main>
</body>
</html>