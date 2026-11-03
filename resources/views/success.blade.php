<!DOCTYPE html>
<html lang="id" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pembayaran Berhasil - JalanYuk</title>
    
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
                    animation: {
                        'bounce-slow': 'bounce 3s linear infinite',
                    }
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
        /* Efek pop-up saat halaman dimuat */
        .animate-pop-in {
            animation: popIn 0.6s cubic-bezier(0.175, 0.885, 0.32, 1.275) forwards;
        }
        @keyframes popIn {
            0% { opacity: 0; transform: scale(0.8) translateY(20px); }
            100% { opacity: 1; transform: scale(1) translateY(0); }
        }
    </style>
</head>
<body class="bg-slate-50 text-slate-800 antialiased min-h-screen flex items-center justify-center relative overflow-hidden p-4">

    <!-- Ambient Glow di Background -->
    <div class="absolute top-0 left-0 w-[500px] h-[500px] bg-brand-200/40 rounded-full blur-[100px] pointer-events-none -z-10"></div>
    <div class="absolute bottom-0 right-0 w-[600px] h-[600px] bg-emerald-200/30 rounded-full blur-[120px] pointer-events-none -z-10"></div>

    <div class="w-full max-w-lg relative z-10 animate-pop-in">
        
        <div class="glass-card rounded-[2.5rem] p-8 md:p-10 text-center">
            
            <!-- Ikon Sukses -->
            <div class="w-24 h-24 rounded-full bg-emerald-100 border-4 border-white shadow-xl mx-auto flex items-center justify-center mb-6 animate-bounce-slow">
                <div class="w-16 h-16 rounded-full bg-emerald-500 flex items-center justify-center text-white text-3xl">
                    <i class="fa-solid fa-check"></i>
                </div>
            </div>

            <h1 class="text-3xl font-black text-slate-900 tracking-tight mb-2">Hore! Pesanan Berhasil 🎉</h1>
            <p class="text-sm text-slate-500 font-medium mb-8 leading-relaxed">
                Pembayaranmu telah kami terima. Bukti e-tiket dan tanda terima sudah dikirimkan ke alamat emailmu.
            </p>

            <!-- Rincian Singkat -->
            <div class="bg-white/60 backdrop-blur border border-slate-200 rounded-[1.5rem] p-5 mb-8 text-left">
                <div class="flex items-center justify-between mb-3 pb-3 border-b border-slate-200 border-dashed">
                    <span class="text-xs font-bold text-slate-400 uppercase tracking-wider">Kode Booking</span>
                    <span class="font-mono font-black text-brand-600">JY-HTL-99827A</span>
                </div>
                <div class="flex items-center justify-between mb-1">
                    <span class="text-xs font-bold text-slate-500">Total Pembayaran</span>
                    <span class="text-sm font-black text-slate-800">Rp 465.013</span>
                </div>
                <div class="flex items-center justify-between">
                    <span class="text-xs font-bold text-slate-500">Metode</span>
                    <span class="text-xs font-bold text-slate-800">Transfer Bank - BCA</span>
                </div>
            </div>

            <!-- Tombol Aksi -->
            <div class="flex flex-col sm:flex-row gap-3">
                <a href="#" class="flex-1 py-3.5 rounded-2xl bg-brand-600 hover:bg-brand-700 text-white font-bold text-sm shadow-lg shadow-brand-500/30 transition-transform hover:-translate-y-0.5">
                    Lihat E-Tiket
                </a>
                <a href="{{ url('/') }}" class="flex-1 py-3.5 rounded-2xl bg-white border border-slate-200 text-slate-600 hover:bg-slate-50 hover:text-brand-600 font-bold text-sm shadow-sm transition-transform hover:-translate-y-0.5">
                    Kembali ke Beranda
                </a>
            </div>

        </div>
        
        <div class="text-center mt-8 text-xs text-slate-400 font-medium">
            Butuh bantuan? <a href="#" class="text-brand-600 hover:underline">Hubungi Customer Service</a>
        </div>

    </div>

</body>
</html>