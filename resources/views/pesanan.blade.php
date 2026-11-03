<!DOCTYPE html>
<html lang="id" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Riwayat Pesanan - JalanYuk</title>
    
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

    <!-- Ambient Glow -->
    <div class="fixed top-[-20%] left-[-10%] w-[500px] h-[500px] bg-brand-200/40 rounded-full blur-[120px] pointer-events-none -z-10"></div>
    <div class="fixed bottom-[-10%] right-[-5%] w-[600px] h-[600px] bg-blue-200/30 rounded-full blur-[120px] pointer-events-none -z-10"></div>

    <!-- Navbar -->
    <div class="sticky top-0 z-50 px-4 sm:px-6 lg:px-8 py-3 bg-white/80 backdrop-blur-md border-b border-slate-200 shadow-sm">
        <div class="max-w-7xl mx-auto flex items-center justify-between">
            <a href="{{ url('/') }}" class="flex items-center gap-2.5">
                <span class="text-2xl font-black text-slate-900 tracking-tight">JalanYuk<span class="text-brand-500">.</span></span>
            </a>
            <div class="flex items-center gap-4">
                <a href="{{ url('/') }}" class="text-sm font-bold text-slate-500 hover:text-brand-600 transition">Beranda</a>
                <div class="w-8 h-8 rounded-full bg-brand-100 flex items-center justify-center text-brand-600 font-bold border border-brand-200">
                    WH
                </div>
            </div>
        </div>
    </div>

    <main class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
        
        <div class="mb-8">
            <h1 class="text-3xl font-black text-slate-900 tracking-tight">Pesanan Saya</h1>
            <p class="text-sm text-slate-500 font-medium mt-1">Pantau status tiket dan pemesanan hotelmu di sini.</p>
        </div>

        <!-- Filter Tabs -->
        <div class="flex items-center gap-2 mb-8 overflow-x-auto hide-scroll pb-2">
            <button class="px-5 py-2.5 rounded-full bg-slate-900 text-white font-bold text-sm shadow-md whitespace-nowrap">Semua Pesanan</button>
            <button class="px-5 py-2.5 rounded-full bg-white border border-slate-200 text-slate-600 hover:bg-slate-50 font-bold text-sm shadow-sm whitespace-nowrap">Belum Bayar <span class="ml-1.5 bg-rose-500 text-white px-2 py-0.5 rounded-full text-[10px]">1</span></button>
            <button class="px-5 py-2.5 rounded-full bg-white border border-slate-200 text-slate-600 hover:bg-slate-50 font-bold text-sm shadow-sm whitespace-nowrap">E-Tiket Aktif</button>
            <button class="px-5 py-2.5 rounded-full bg-white border border-slate-200 text-slate-600 hover:bg-slate-50 font-bold text-sm shadow-sm whitespace-nowrap">Selesai</button>
        </div>

        <!-- Daftar Pesanan -->
        <div class="space-y-5">

            <!-- Card 1: Pesanan Berhasil (E-Tiket Aktif) -->
            <div class="glass-card rounded-[2rem] p-5">
                <div class="flex items-center justify-between pb-4 border-b border-slate-200 mb-4">
                    <div class="flex items-center gap-3">
                        <div class="w-10 h-10 rounded-full bg-emerald-100 flex items-center justify-center text-emerald-600">
                            <i class="fa-solid fa-bed"></i>
                        </div>
                        <div>
                            <p class="text-[10px] font-bold text-slate-400 uppercase tracking-wider">Hotel & Stay</p>
                            <p class="text-xs font-black text-slate-900">JY-HTL-99827A</p>
                        </div>
                    </div>
                    <div class="px-3 py-1 rounded-full bg-emerald-50 border border-emerald-200 text-emerald-600 text-[10px] font-bold uppercase tracking-wider flex items-center gap-1.5">
                        <i class="fa-solid fa-circle-check"></i> E-Tiket Terbit
                    </div>
                </div>

                <div class="flex flex-col sm:flex-row gap-5">
                    <img src="https://img.cnt.traveloka.com/tvlk/apr-asset/dgXfoyh24ryQLRcGq00cIdKHRmotrWLNlvG-TxlcLxGkiDwaUSggleJNPRgIHCX6/hotel/asset/10013035-1200x845-FIT_AND_TRIM-affbbd70857894e2e5d0a3fbc7e91c67.jpeg?tr=q-40,w-200" class="w-full sm:w-32 h-24 rounded-[1.2rem] object-cover flex-shrink-0">
                    <div class="flex-1 flex flex-col justify-between">
                        <div>
                            <h3 class="text-lg font-black text-slate-900 leading-tight">grandkemang Hotel</h3>
                            <p class="text-sm text-slate-500 font-medium mt-1"><i class="fa-regular fa-calendar mr-1.5"></i> 12 Okt 2026 - 13 Okt 2026</p>
                            <p class="text-xs text-slate-500 mt-1"><i class="fa-solid fa-door-open mr-1.5"></i> 1x Deluxe Twin Room</p>
                        </div>
                    </div>
                    <div class="flex flex-col justify-end sm:text-right sm:min-w-[150px] mt-4 sm:mt-0 pt-4 sm:pt-0 border-t sm:border-t-0 border-slate-100">
                        <p class="text-[10px] font-bold text-slate-400 uppercase">Total Harga</p>
                        <p class="text-lg font-black text-brand-accent mb-3">Rp 465.013</p>
                        <button class="w-full sm:w-auto px-5 py-2.5 bg-brand-50 text-brand-600 hover:bg-brand-600 hover:text-white font-bold text-xs rounded-xl transition">Lihat E-Tiket</button>
                    </div>
                </div>
            </div>

            <!-- Card 2: Menunggu Pembayaran -->
            <div class="glass-card rounded-[2rem] p-5 opacity-90">
                <div class="flex items-center justify-between pb-4 border-b border-slate-200 mb-4">
                    <div class="flex items-center gap-3">
                        <div class="w-10 h-10 rounded-full bg-rose-50 flex items-center justify-center text-rose-500">
                            <i class="fa-solid fa-plane-departure"></i>
                        </div>
                        <div>
                            <p class="text-[10px] font-bold text-slate-400 uppercase tracking-wider">Tiket Pesawat</p>
                            <p class="text-xs font-black text-slate-900">JY-FLT-88214B</p>
                        </div>
                    </div>
                    <div class="px-3 py-1 rounded-full bg-rose-50 border border-rose-200 text-rose-600 text-[10px] font-bold uppercase tracking-wider flex items-center gap-1.5">
                        <i class="fa-regular fa-clock"></i> Belum Dibayar
                    </div>
                </div>

                <div class="flex flex-col sm:flex-row gap-5">
                    <div class="w-full sm:w-32 h-24 rounded-[1.2rem] bg-slate-100 flex items-center justify-center flex-shrink-0">
                        <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/1/10/Garuda_Indonesia_logo.svg/2560px-Garuda_Indonesia_logo.svg.png" class="w-20 object-contain opacity-70">
                    </div>
                    <div class="flex-1 flex flex-col justify-between">
                        <div>
                            <h3 class="text-lg font-black text-slate-900 leading-tight">Jakarta (CGK) <i class="fa-solid fa-arrow-right mx-1.5 text-slate-400 text-xs"></i> Denpasar (DPS)</h3>
                            <p class="text-sm text-slate-500 font-medium mt-1">Garuda Indonesia • GA-404</p>
                            <p class="text-xs text-rose-500 font-bold mt-2"><i class="fa-solid fa-stopwatch mr-1"></i> Bayar sebelum 14:30 WIB</p>
                        </div>
                    </div>
                    <div class="flex flex-col justify-end sm:text-right sm:min-w-[150px] mt-4 sm:mt-0 pt-4 sm:pt-0 border-t sm:border-t-0 border-slate-100">
                        <p class="text-[10px] font-bold text-slate-400 uppercase">Total Harga</p>
                        <p class="text-lg font-black text-slate-900 mb-3">Rp 1.450.000</p>
                        <button class="w-full sm:w-auto px-5 py-2.5 bg-brand-accent hover:bg-orange-600 text-white font-bold text-xs rounded-xl shadow-lg shadow-brand-accent/30 transition">Lanjut Bayar</button>
                    </div>
                </div>
            </div>

            <!-- Card 3: Pesanan Selesai -->
            <div class="glass-card rounded-[2rem] p-5 opacity-70 grayscale-[30%]">
                <div class="flex items-center justify-between pb-4 border-b border-slate-200 mb-4">
                    <div class="flex items-center gap-3">
                        <div class="w-10 h-10 rounded-full bg-slate-100 flex items-center justify-center text-slate-500">
                            <i class="fa-solid fa-bed"></i>
                        </div>
                        <div>
                            <p class="text-[10px] font-bold text-slate-400 uppercase tracking-wider">Hotel & Stay</p>
                            <p class="text-xs font-black text-slate-900">JY-HTL-11299C</p>
                        </div>
                    </div>
                    <div class="px-3 py-1 rounded-full bg-slate-100 text-slate-500 text-[10px] font-bold uppercase tracking-wider flex items-center gap-1.5">
                        <i class="fa-solid fa-flag-checkered"></i> Selesai
                    </div>
                </div>

                <div class="flex flex-col sm:flex-row gap-5">
                    <img src="https://img.cnt.traveloka.com/tvlk/apr-asset/Ixf4aptF5N2Qdfmh4fGGYhTN274kJXuNMkUAzpL5HuD9jzSxIGG5kZNhhHY-p7nw/hotel/asset/10000126-cc968d77183bab6237a5c3b5de6332cd.png?tr=q-40,w-200" class="w-full sm:w-32 h-24 rounded-[1.2rem] object-cover flex-shrink-0">
                    <div class="flex-1 flex flex-col justify-between">
                        <div>
                            <h3 class="text-lg font-black text-slate-900 leading-tight">Stark Boutique Hotel and Spa Bali</h3>
                            <p class="text-sm text-slate-500 font-medium mt-1">Selesai pada: 20 Sep 2026</p>
                        </div>
                    </div>
                    <div class="flex flex-col justify-end sm:text-right sm:min-w-[150px] mt-4 sm:mt-0 pt-4 sm:pt-0 border-t sm:border-t-0 border-slate-100">
                        <button class="w-full sm:w-auto px-5 py-2.5 border-2 border-brand-500 text-brand-600 hover:bg-brand-500 hover:text-white font-bold text-xs rounded-xl transition"><i class="fa-solid fa-star mr-1"></i> Beri Ulasan</button>
                    </div>
                </div>
            </div>

        </div>

    </main>
</body>
</html>