<!DOCTYPE html>
<html lang="id" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Checkout Pemesanan - JalanYuk</title>
    
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
        .glass-input {
            background: rgba(255, 255, 255, 0.6);
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.9);
            transition: all 0.3s ease;
        }
        .glass-input:focus-within {
            background: rgba(255, 255, 255, 0.95);
            border-color: #38bdf8;
            box-shadow: 0 0 0 4px rgba(56, 189, 248, 0.15);
        }
        /* Custom Radio Button styling */
        input[type="radio"]:checked + div {
            border-color: #0ea5e9;
            background-color: #f0f9ff;
        }
        input[type="radio"]:checked + div .radio-dot {
            background-color: #0ea5e9;
            border-color: #0ea5e9;
        }
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
            <div class="flex items-center gap-3 text-sm font-bold text-slate-500">
                <span class="text-brand-600"><i class="fa-solid fa-circle-check mr-1"></i> Pesan</span>
                <i class="fa-solid fa-chevron-right text-[10px] mx-1"></i>
                <span>Bayar</span>
                <i class="fa-solid fa-chevron-right text-[10px] mx-1"></i>
                <span>Selesai</span>
            </div>
        </div>
    </div>

    <main class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
        
        <div class="mb-8">
            <h1 class="text-3xl font-black text-slate-900 tracking-tight">Selesaikan Pesananmu</h1>
            <p class="text-sm text-slate-500 font-medium mt-1">Pastikan semua data terisi dengan benar sebelum membayar.</p>
        </div>

        <form action="#" method="POST" class="grid grid-cols-1 lg:grid-cols-3 gap-8">
            
            <!-- KOLOM KIRI: FORMULIR PENGISIAN -->
            <div class="lg:col-span-2 space-y-6">
                
                <!-- Card Data Pemesan -->
                <div class="glass-card rounded-[2rem] p-6 sm:p-8">
                    <h2 class="text-xl font-black text-slate-900 mb-6 flex items-center gap-2">
                        <i class="fa-solid fa-address-card text-brand-500"></i> Data Pemesan
                    </h2>
                    
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-5">
                        <div class="md:col-span-2">
                            <label class="block text-xs font-bold text-slate-500 uppercase tracking-wider mb-2">Nama Lengkap (Sesuai KTP/Paspor)</label>
                            <div class="glass-input rounded-2xl px-4 py-3 flex items-center gap-3">
                                <i class="fa-regular fa-user text-slate-400"></i>
                                <input type="text" placeholder="Masukkan nama lengkap" required class="w-full bg-transparent border-none outline-none text-slate-900 font-bold text-sm placeholder-slate-400">
                            </div>
                        </div>

                        <div>
                            <label class="block text-xs font-bold text-slate-500 uppercase tracking-wider mb-2">Nomor Handphone</label>
                            <div class="glass-input rounded-2xl px-4 py-3 flex items-center gap-3">
                                <span class="text-slate-900 font-bold text-sm border-r border-slate-300 pr-2">+62</span>
                                <input type="tel" placeholder="81234567890" required class="w-full bg-transparent border-none outline-none text-slate-900 font-bold text-sm placeholder-slate-400">
                            </div>
                        </div>

                        <div>
                            <label class="block text-xs font-bold text-slate-500 uppercase tracking-wider mb-2">Alamat Email</label>
                            <div class="glass-input rounded-2xl px-4 py-3 flex items-center gap-3">
                                <i class="fa-regular fa-envelope text-slate-400"></i>
                                <input type="email" placeholder="nama@email.com" required class="w-full bg-transparent border-none outline-none text-slate-900 font-bold text-sm placeholder-slate-400">
                            </div>
                        </div>
                    </div>
                    
                    <div class="mt-5 pt-5 border-t border-slate-200">
                        <label class="flex items-start gap-3 cursor-pointer">
                            <input type="checkbox" class="mt-1 w-4 h-4 rounded text-brand-600 focus:ring-brand-500">
                            <div>
                                <span class="text-sm font-bold text-slate-800 block">Pesan untuk orang lain?</span>
                                <span class="text-xs text-slate-500 font-medium">Centang jika kamu memesankan akomodasi ini untuk tamu lain.</span>
                            </div>
                        </label>
                    </div>
                </div>

                <!-- Card Permintaan Khusus -->
                <div class="glass-card rounded-[2rem] p-6 sm:p-8">
                    <h2 class="text-xl font-black text-slate-900 mb-6 flex items-center gap-2">
                        <i class="fa-solid fa-bell-concierge text-brand-500"></i> Permintaan Khusus (Opsional)
                    </h2>
                    <p class="text-xs text-slate-500 mb-4 font-medium">Permintaanmu akan disampaikan ke pihak hotel, namun ketersediaannya tidak dijamin.</p>
                    
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-3 mb-5">
                        <label class="flex items-center gap-3 p-3 rounded-2xl border border-slate-200 bg-white/50 cursor-pointer hover:border-brand-300 transition">
                            <input type="checkbox" class="w-4 h-4 rounded text-brand-600 focus:ring-brand-500">
                            <span class="text-sm font-bold text-slate-700">Kamar Bebas Asap Rokok</span>
                        </label>
                        <label class="flex items-center gap-3 p-3 rounded-2xl border border-slate-200 bg-white/50 cursor-pointer hover:border-brand-300 transition">
                            <input type="checkbox" class="w-4 h-4 rounded text-brand-600 focus:ring-brand-500">
                            <span class="text-sm font-bold text-slate-700">Kamar di Lantai Atas</span>
                        </label>
                        <label class="flex items-center gap-3 p-3 rounded-2xl border border-slate-200 bg-white/50 cursor-pointer hover:border-brand-300 transition">
                            <input type="checkbox" class="w-4 h-4 rounded text-brand-600 focus:ring-brand-500">
                            <span class="text-sm font-bold text-slate-700">Ranjang Ukuran Besar</span>
                        </label>
                        <label class="flex items-center gap-3 p-3 rounded-2xl border border-slate-200 bg-white/50 cursor-pointer hover:border-brand-300 transition">
                            <input type="checkbox" class="w-4 h-4 rounded text-brand-600 focus:ring-brand-500">
                            <span class="text-sm font-bold text-slate-700">Cek-in Lebih Awal</span>
                        </label>
                    </div>

                    <label class="block text-xs font-bold text-slate-500 uppercase tracking-wider mb-2">Catatan Tambahan</label>
                    <textarea rows="3" placeholder="Tulis permintaan lainnya di sini..." class="glass-input w-full rounded-2xl p-4 text-slate-900 font-bold text-sm placeholder-slate-400 outline-none resize-none"></textarea>
                </div>

                <!-- Card Metode Pembayaran -->
                <div class="glass-card rounded-[2rem] p-6 sm:p-8">
                    <h2 class="text-xl font-black text-slate-900 mb-6 flex items-center gap-2">
                        <i class="fa-solid fa-wallet text-brand-500"></i> Pilih Metode Pembayaran
                    </h2>
                    
                    <div class="space-y-3">
                        <!-- Transfer Bank -->
                        <label class="relative block cursor-pointer group">
                            <input type="radio" name="payment" class="peer sr-only" checked>
                            <div class="glass-input rounded-[1.5rem] p-4 flex items-center gap-4 border-2 border-transparent transition-all">
                                <div class="w-5 h-5 rounded-full border-2 border-slate-300 radio-dot flex items-center justify-center peer-checked:border-brand-500 peer-checked:bg-brand-500 transition-colors">
                                    <div class="w-2 h-2 rounded-full bg-white"></div>
                                </div>
                                <div class="w-10 h-10 rounded-xl bg-slate-100 flex items-center justify-center text-slate-600 flex-shrink-0">
                                    <i class="fa-solid fa-building-columns"></i>
                                </div>
                                <div class="flex-1">
                                    <h4 class="font-black text-slate-900 text-sm">Transfer Bank Virtual Account</h4>
                                    <p class="text-[11px] text-slate-500 font-medium">BCA, Mandiri, BNI, BRI, Permata</p>
                                </div>
                            </div>
                        </label>

                        <!-- E-Wallet -->
                        <label class="relative block cursor-pointer group">
                            <input type="radio" name="payment" class="peer sr-only">
                            <div class="glass-input rounded-[1.5rem] p-4 flex items-center gap-4 border-2 border-transparent transition-all">
                                <div class="w-5 h-5 rounded-full border-2 border-slate-300 radio-dot flex items-center justify-center peer-checked:border-brand-500 peer-checked:bg-brand-500 transition-colors">
                                    <div class="w-2 h-2 rounded-full bg-white"></div>
                                </div>
                                <div class="w-10 h-10 rounded-xl bg-slate-100 flex items-center justify-center text-slate-600 flex-shrink-0">
                                    <i class="fa-solid fa-mobile-screen"></i>
                                </div>
                                <div class="flex-1">
                                    <h4 class="font-black text-slate-900 text-sm">E-Wallet (Gopay, OVO, DANA)</h4>
                                    <p class="text-[11px] text-slate-500 font-medium">Otomatis terkonfirmasi, proses instan.</p>
                                </div>
                            </div>
                        </label>

                        <!-- Kartu Kredit -->
                        <label class="relative block cursor-pointer group">
                            <input type="radio" name="payment" class="peer sr-only">
                            <div class="glass-input rounded-[1.5rem] p-4 flex items-center gap-4 border-2 border-transparent transition-all">
                                <div class="w-5 h-5 rounded-full border-2 border-slate-300 radio-dot flex items-center justify-center peer-checked:border-brand-500 peer-checked:bg-brand-500 transition-colors">
                                    <div class="w-2 h-2 rounded-full bg-white"></div>
                                </div>
                                <div class="w-10 h-10 rounded-xl bg-slate-100 flex items-center justify-center text-slate-600 flex-shrink-0">
                                    <i class="fa-regular fa-credit-card"></i>
                                </div>
                                <div class="flex-1">
                                    <h4 class="font-black text-slate-900 text-sm">Kartu Kredit / Debit</h4>
                                    <p class="text-[11px] text-slate-500 font-medium">Visa, Mastercard, JCB, Amex</p>
                                </div>
                            </div>
                        </label>
                    </div>
                </div>

            </div>

            <!-- KOLOM KANAN: RINGKASAN PESANAN (Sticky) -->
            <div class="lg:col-span-1">
                <div class="sticky top-24 space-y-6">
                    
                    <!-- Card Ringkasan Item -->
                    <div class="glass-card rounded-[2rem] p-6">
                        <h3 class="font-black text-slate-900 mb-4 text-lg">Detail Pesanan</h3>
                        
                        <div class="flex gap-4 mb-4 pb-4 border-b border-slate-200">
                            <img src="https://img.cnt.traveloka.com/tvlk/apr-asset/dgXfoyh24ryQLRcGq00cIdKHRmotrWLNlvG-TxlcLxGkiDwaUSggleJNPRgIHCX6/hotel/asset/10013035-1200x845-FIT_AND_TRIM-affbbd70857894e2e5d0a3fbc7e91c67.jpeg?tr=q-40,w-200" class="w-20 h-20 rounded-[1rem] object-cover flex-shrink-0">
                            <div>
                                <h4 class="font-black text-slate-900 text-sm leading-tight">grandkemang Hotel</h4>
                                <div class="flex text-amber-400 text-[10px] my-1"><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i></div>
                                <p class="text-[10px] text-slate-500 font-bold mt-1">Deluxe Twin Room</p>
                            </div>
                        </div>

                        <div class="grid grid-cols-2 gap-4 text-sm mb-4">
                            <div>
                                <p class="text-[10px] font-bold text-slate-400 uppercase">Check-in</p>
                                <p class="font-bold text-slate-800">12 Okt 2026</p>
                                <p class="text-xs text-slate-500">Mulai 14:00</p>
                            </div>
                            <div>
                                <p class="text-[10px] font-bold text-slate-400 uppercase">Check-out</p>
                                <p class="font-bold text-slate-800">13 Okt 2026</p>
                                <p class="text-xs text-slate-500">Sebelum 12:00</p>
                            </div>
                        </div>
                        <div class="bg-brand-50 rounded-xl p-3 flex items-start gap-2 text-xs font-medium text-brand-700">
                            <i class="fa-solid fa-circle-info mt-0.5"></i>
                            <p>Pesanan ini tidak dapat di-*refund* atau dibatalkan.</p>
                        </div>
                    </div>

                    <!-- Card Rincian Harga -->
                    <div class="glass-card rounded-[2rem] p-6">
                        <h3 class="font-black text-slate-900 mb-4 text-lg">Rincian Harga</h3>
                        
                        <div class="space-y-2 text-sm text-slate-600 font-medium pb-4 border-b border-slate-200 mb-4">
                            <div class="flex justify-between">
                                <span>Harga Kamar (1 Malam)</span>
                                <span>Rp 436.513</span>
                            </div>
                            <div class="flex justify-between">
                                <span>Pajak & Biaya Layanan</span>
                                <span>Rp 28.500</span>
                            </div>
                        </div>

                        <!-- Kupon -->
                        <div class="mb-5">
                            <div class="flex items-center gap-2">
                                <input type="text" placeholder="Masukkan Kode Promo" class="glass-input flex-1 rounded-xl px-3 py-2 text-sm font-bold text-slate-900 placeholder-slate-400 outline-none uppercase">
                                <button type="button" class="px-4 py-2 bg-slate-900 text-white font-bold rounded-xl text-sm hover:bg-brand-600 transition">Pakai</button>
                            </div>
                        </div>

                        <div class="flex justify-between items-end mb-6">
                            <div>
                                <span class="block text-xs font-bold text-slate-500 uppercase">Total Pembayaran</span>
                            </div>
                            <div class="text-right">
                                <span class="font-black text-brand-accent text-2xl">Rp 465.013</span>
                            </div>
                        </div>

                        <button type="submit" class="w-full py-4 rounded-2xl bg-brand-accent hover:bg-orange-600 text-white font-black text-base shadow-lg shadow-brand-accent/30 transition-transform hover:-translate-y-0.5">
                            Bayar Sekarang <i class="fa-solid fa-arrow-right ml-2"></i>
                        </button>
                        
                        <p class="text-[10px] text-center text-slate-400 font-medium mt-4">Dengan menekan tombol, kamu menyetujui Syarat & Ketentuan yang berlaku.</p>
                    </div>

                </div>
            </div>

        </form>
    </main>

</body>
</html>