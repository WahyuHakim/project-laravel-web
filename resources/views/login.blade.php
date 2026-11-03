<!DOCTYPE html>
<html lang="id" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Masuk - JalanYuk</title>
    
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
    </style>
</head>
<body class="bg-slate-50 text-slate-800 antialiased min-h-screen flex items-center justify-center relative overflow-hidden">

    <!-- Ambient Glow di Background -->
    <div class="absolute top-0 left-0 w-[500px] h-[500px] bg-brand-200/40 rounded-full blur-[100px] pointer-events-none -z-10"></div>
    <div class="absolute bottom-0 right-0 w-[600px] h-[600px] bg-blue-200/30 rounded-full blur-[120px] pointer-events-none -z-10"></div>

    <div class="w-full max-w-md px-4">
        
        <!-- Logo Header -->
        <div class="text-center mb-8">
            <a href="/" class="inline-flex items-center gap-2.5">
                <div class="w-10 h-10 rounded-full bg-brand-600 flex items-center justify-center text-white shadow-md">
                    <i class="fa-solid fa-paper-plane text-lg"></i>
                </div>
                <span class="text-2xl font-black text-slate-900 tracking-tight">JalanYuk<span class="text-brand-500">.</span></span>
            </a>
            <p class="text-xs text-slate-500 mt-2 font-medium">Masuk untuk melanjutkan perjalananmu</p>
        </div>

        <!-- Form Card Glassmorphism -->
        <div class="glass-card rounded-[2.5rem] p-8">
            <form action="#" method="POST" class="space-y-5">
                
                <!-- Email -->
                <div>
                    <label class="block text-xs font-bold text-slate-500 uppercase tracking-wider mb-2">Email</label>
                    <div class="glass-input rounded-2xl px-4 py-3 flex items-center gap-3">
                        <i class="fa-regular fa-envelope text-slate-400"></i>
                        <input type="email" placeholder="nama@email.com" required class="w-full bg-transparent border-none outline-none text-slate-900 font-bold text-sm placeholder-slate-400">
                    </div>
                </div>

                <!-- Password -->
                <div>
                    <label class="block text-xs font-bold text-slate-500 uppercase tracking-wider mb-2">Password</label>
                    <div class="glass-input rounded-2xl px-4 py-3 flex items-center gap-3">
                        <i class="fa-regular fa-lock text-slate-400"></i>
                        <input type="password" placeholder="••••••••" required class="w-full bg-transparent border-none outline-none text-slate-900 font-bold text-sm placeholder-slate-400">
                    </div>
                </div>

                <!-- Remember & Lupa Password -->
                <div class="flex items-center justify-between text-xs font-bold">
                    <label class="flex items-center gap-2 text-slate-600 cursor-pointer">
                        <input type="checkbox" class="w-4 h-4 rounded text-brand-600 focus:ring-brand-500">
                        Ingat saya
                    </label>
                    <a href="#" class="text-brand-600 hover:underline">Lupa password?</a>
                </div>

                <!-- Tombol Submit -->
                <button type="submit" class="w-full py-3.5 rounded-2xl bg-brand-600 hover:bg-brand-700 text-white font-bold text-sm shadow-lg shadow-brand-500/30 transition-transform hover:-translate-y-0.5">
                    Masuk Sekarang
                </button>

            </form>

            <!-- Footer Card: Belum punya akun -->
            <div class="mt-6 text-center pt-6 border-t border-slate-200/60 text-xs font-medium text-slate-500">
                Belum punya akun? <a href="#" class="font-bold text-brand-600 hover:underline">Daftar di sini</a>
            </div>
        </div>

        <div class="text-center mt-8 text-xs text-slate-400 font-medium">
            &copy; 2026 JalanYuk — Proyek Rekayasa Perangkat Lunak
        </div>

    </div>

</body>
</html>s