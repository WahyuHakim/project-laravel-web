<!DOCTYPE html>
<html lang="id" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>404 Tersesat - JalanYuk</title>
    
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800;900&display=swap" rel="stylesheet">
    
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: { sans: ['"Plus Jakarta Sans"', 'sans-serif'] },
                    colors: { brand: { 200: '#bae6fd', 500: '#0ea5e9', 600: '#0284c7', 700: '#0369a1' } }
                }
            }
        }
    </script>
    <style>
        .glass-card { background: rgba(255, 255, 255, 0.75); backdrop-filter: blur(20px); border: 1px solid rgba(255, 255, 255, 0.8); box-shadow: 0 10px 40px -10px rgba(2, 132, 199, 0.1); }
        .float-anim { animation: float 6s ease-in-out infinite; }
        @keyframes float { 0%, 100% { transform: translateY(0px); } 50% { transform: translateY(-20px); } }
    </style>
</head>
<body class="bg-slate-50 text-slate-800 min-h-screen flex items-center justify-center relative overflow-hidden">
    
    <div class="absolute top-[-10%] left-[-10%] w-[500px] h-[500px] bg-brand-200/40 rounded-full blur-[120px] -z-10"></div>
    <div class="absolute bottom-[-10%] right-[-10%] w-[600px] h-[600px] bg-rose-200/30 rounded-full blur-[120px] -z-10"></div>

    <div class="text-center px-4 max-w-lg z-10">
        <div class="float-anim mb-8">
            <h1 class="text-[8rem] font-black text-slate-900 leading-none tracking-tighter drop-shadow-lg">
                4<span class="text-brand-500">0</span>4
            </h1>
        </div>
        
        <div class="glass-card rounded-[2rem] p-8 mb-6">
            <h2 class="text-2xl font-black text-slate-900 mb-2">Waduh, Kamu Tersesat! 🗺️</h2>
            <p class="text-sm text-slate-500 font-medium mb-6">Halaman yang kamu cari sepertinya sudah pindah alamat atau tiketnya sudah hangus. Yuk putar balik!</p>
            <a href="{{ url('/') }}" class="inline-block px-8 py-4 rounded-2xl bg-brand-600 hover:bg-brand-700 text-white font-bold text-sm shadow-lg shadow-brand-500/30 transition-transform hover:-translate-y-0.5">
                <i class="fa-solid fa-arrow-left mr-2"></i> Kembali ke Beranda
            </a>
        </div>
    </div>
</body>
</html>