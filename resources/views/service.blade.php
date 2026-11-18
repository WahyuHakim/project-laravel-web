<!DOCTYPE html>
<html lang="id" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $service['name'] }} - JalanYuk</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
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
        .glass-card { background: rgba(255,255,255,.78); backdrop-filter: blur(20px); -webkit-backdrop-filter: blur(20px); border: 1px solid rgba(255,255,255,.9); box-shadow: 0 10px 40px -10px rgba(2,132,199,.12); }
        .ambient-glow { filter: blur(90px); }
        .animate-enter { animation: enter-up .7s cubic-bezier(.2,.7,.25,1) both; }
        .float-slow { animation: float-slow 8s ease-in-out infinite; }
        .travel-photo { filter: saturate(.88) contrast(.96); transition: transform .7s cubic-bezier(.2,.7,.25,1), filter .7s ease; }
        .group:hover .travel-photo { filter: saturate(1.05) contrast(1); }
        @keyframes enter-up { from { opacity: 0; transform: translateY(18px); } to { opacity: 1; transform: translateY(0); } }
        @keyframes float-slow { 0%, 100% { transform: translateY(0); } 50% { transform: translateY(-12px); } }
        @media (prefers-reduced-motion: reduce) {
            *, *::before, *::after { scroll-behavior: auto !important; animation-duration: .01ms !important; animation-iteration-count: 1 !important; transition-duration: .01ms !important; }
        }
    </style>
</head>
<body class="relative min-h-screen overflow-x-hidden bg-slate-50 font-sans text-slate-800 antialiased selection:bg-brand-400 selection:text-white">
    <div class="ambient-glow pointer-events-none fixed -left-32 -top-32 -z-10 h-96 w-96 rounded-full bg-sky-200/50"></div>
    <div class="ambient-glow pointer-events-none fixed -bottom-40 -right-32 -z-10 h-[30rem] w-[30rem] rounded-full bg-blue-200/40"></div>

    <header class="sticky top-0 z-30 px-3 pt-3 sm:px-6">
        <nav class="glass-card mx-auto flex max-w-7xl items-center justify-between rounded-full px-4 py-3 sm:px-6">
            <a href="{{ url('/') }}" class="flex items-center gap-2.5">
                <img src="{{ asset('images/logo.jpeg') }}" alt="Logo JalanYuk" class="h-9 w-9 rounded-full object-cover shadow-sm">
                <span class="text-xl font-black tracking-tight text-slate-900 sm:text-2xl">JalanYuk<span class="text-brand-500">.</span></span>
            </a>
            <div class="hidden items-center gap-6 text-sm font-bold text-slate-600 md:flex">
                <a href="{{ url('/') }}" class="transition hover:text-brand-600"><i class="fa-solid fa-house mr-2"></i>Beranda</a>
                <a href="{{ url('/pesanan') }}" class="transition hover:text-brand-600"><i class="fa-solid fa-ticket mr-2"></i>Pesanan</a>
            </div>
            <a href="{{ url('/') }}" class="rounded-full bg-brand-50 px-4 py-2 text-sm font-extrabold text-brand-700 transition hover:bg-brand-100">
                <i class="fa-solid fa-arrow-left mr-2"></i><span class="hidden sm:inline">Kembali ke </span>Beranda
            </a>
        </nav>
    </header>

    <main class="mx-auto max-w-7xl px-4 pb-14 pt-7 sm:px-6 sm:pt-10 lg:px-8">
        <nav aria-label="Kategori layanan" class="no-scrollbar mb-7 flex gap-2 overflow-x-auto pb-2">
            @foreach ($services as $slug => $category)
                <a href="{{ route('services.show', ['service' => $slug]) }}"
                   @class([
                       'flex shrink-0 items-center gap-2 rounded-full border px-4 py-2.5 text-sm font-extrabold transition',
                       'border-brand-600 bg-brand-600 text-white shadow-lg shadow-brand-500/25' => $slug === $serviceSlug,
                       'border-white bg-white/75 text-slate-600 shadow-sm hover:border-brand-200 hover:text-brand-600' => $slug !== $serviceSlug,
                   ])>
                    <i class="fa-solid {{ $category['icon'] }}"></i>{{ $category['name'] }}
                </a>
            @endforeach
        </nav>

        @php
            $minimumPrice = min(array_column($service['items'], $service['price_key']));
            $totalAvailability = array_sum(array_column($service['items'], $service['availability_key']));
            $maximumAvailability = max(array_column($service['items'], $service['availability_key']));
        @endphp

        <section class="animate-enter relative isolate overflow-hidden rounded-[2rem] bg-gradient-to-br from-brand-900 via-brand-700 to-brand-500 px-6 py-9 text-white shadow-2xl shadow-brand-900/15 sm:px-10 sm:py-12">
            <div class="float-slow absolute -right-20 -top-28 -z-10 h-80 w-80 rounded-full bg-sky-300/25 blur-3xl"></div>
            <div class="float-slow absolute -bottom-24 right-1/4 -z-10 h-64 w-64 rounded-full bg-orange-300/20 blur-3xl" style="animation-delay: -3s"></div>
            <i class="float-slow fa-solid {{ $service['icon'] }} absolute -bottom-6 -right-3 -z-10 text-[10rem] text-white/[.08] sm:right-12 sm:text-[14rem]"></i>

            <div class="relative max-w-3xl">
                <span class="inline-flex items-center gap-2 rounded-full border border-white/25 bg-white/10 px-4 py-2 text-xs font-extrabold uppercase tracking-[.14em] text-white/90">
                    <i class="fa-solid fa-sparkles text-amber-300"></i> Jelajah {{ $service['name'] }} bersama JalanYuk
                </span>
                <h1 class="mt-5 text-3xl font-black leading-tight tracking-tight sm:text-5xl">{{ $service['headline'] }}</h1>
                <p class="mt-4 max-w-2xl text-sm leading-7 text-white/85 sm:text-base">{{ $service['description'] }}</p>
                <a href="#pilihan" class="mt-7 inline-flex items-center gap-2 rounded-full bg-white px-6 py-3 text-sm font-black text-brand-700 shadow-lg transition hover:-translate-y-0.5 hover:bg-brand-50">
                    Lihat pilihan <i class="fa-solid fa-arrow-down text-xs"></i>
                </a>
            </div>

            <div class="relative mt-9 grid max-w-3xl grid-cols-1 gap-3 sm:grid-cols-3">
                <div class="rounded-2xl border border-white/20 bg-white/10 p-4 backdrop-blur-md">
                    <p class="text-xs font-bold text-white/70">Pilihan tersedia</p>
                    <p class="mt-1 text-2xl font-black">{{ count($service['items']) }} <span class="text-sm font-bold text-white/75">contoh</span></p>
                </div>
                <div class="rounded-2xl border border-white/20 bg-white/10 p-4 backdrop-blur-md">
                    <p class="text-xs font-bold text-white/70">Harga mulai</p>
                    <p class="mt-1 text-2xl font-black">Rp {{ number_format($minimumPrice, 0, ',', '.') }}</p>
                </div>
                <div class="rounded-2xl border border-white/20 bg-white/10 p-4 backdrop-blur-md">
                    <p class="text-xs font-bold text-white/70">{{ $service['availability_label'] }} (total)</p>
                    <p class="mt-1 text-2xl font-black">{{ number_format($totalAvailability, 0, ',', '.') }} <span class="text-sm font-bold text-white/75">{{ $service['availability_unit'] }}</span></p>
                </div>
            </div>
        </section>

        <section id="pilihan" class="scroll-mt-28 pt-12">
            <div class="mb-6 flex flex-col gap-3 sm:flex-row sm:items-end sm:justify-between">
                <div>
                    <p class="text-xs font-black uppercase tracking-[.18em] text-brand-600">Rekomendasi JalanYuk</p>
                    <h2 class="mt-2 text-2xl font-black tracking-tight text-slate-900 sm:text-3xl">{{ $service['section_title'] }}</h2>
                    <p class="mt-2 text-sm text-slate-500">Contoh data untuk kerangka halaman, disusun mengikuti atribut ERD.</p>
                </div>
                <span class="inline-flex w-fit items-center gap-2 rounded-full border border-orange-100 bg-orange-50 px-3 py-2 text-xs font-extrabold text-orange-700">
                    <i class="fa-solid fa-wand-magic-sparkles"></i> Data dummy
                </span>
            </div>

            <div class="grid gap-5 md:grid-cols-2 xl:grid-cols-3">
                @foreach ($service['items'] as $index => $item)
                    @php
                        $availabilityPercent = max(15, min(100, ($item[$service['availability_key']] / max(1, $maximumAvailability)) * 100));
                    @endphp
                    <article class="glass-card animate-enter group relative flex flex-col overflow-hidden rounded-[1.75rem] p-3 transition duration-300 hover:-translate-y-1 hover:shadow-xl hover:shadow-brand-900/10 sm:p-4" style="animation-delay: {{ $index * 100 }}ms">
                        <div class="relative mb-4 h-48 overflow-hidden rounded-[1.25rem] bg-gradient-to-br from-brand-100 to-slate-200 sm:h-52">
                            <img src="{{ $service['images'][$index] }}" alt="{{ $service['name'] }} - {{ $item[$service['title_key']] }}" loading="lazy" decoding="async" class="travel-photo h-full w-full object-cover transition duration-700 group-hover:scale-110">
                            <div class="absolute inset-0 bg-gradient-to-t from-slate-950/65 via-slate-900/5 to-slate-900/10"></div>
                            <span class="absolute left-3 top-3 inline-flex items-center gap-1.5 rounded-full border border-white/60 bg-white/90 px-3 py-1.5 text-[10px] font-black uppercase tracking-wide text-brand-800 shadow-sm backdrop-blur">
                                <i class="fa-solid {{ $service['icon'] }}"></i>{{ $service['name'] }}
                            </span>
                            <span class="absolute bottom-3 left-3 right-3 truncate text-sm font-extrabold text-white drop-shadow">{{ $item[$service['subtitle_key']] }}</span>
                            <span class="absolute bottom-3 right-3 rounded-full border border-white/20 bg-slate-900/40 px-2.5 py-1 text-[10px] font-bold text-white backdrop-blur">
                                {{ $item[$service['availability_key']] }} tersedia
                            </span>
                        </div>
                        <div class="relative flex items-start justify-between gap-3">
                            <div class="flex h-12 w-12 shrink-0 items-center justify-center rounded-2xl bg-gradient-to-br from-brand-100 to-sky-50 text-xl text-brand-700 shadow-inner">
                                <i class="fa-solid {{ $service['icon'] }}"></i>
                            </div>
                            <span class="rounded-full border border-brand-100 bg-white/80 px-3 py-1.5 text-[10px] font-black uppercase tracking-wider text-brand-700">
                                {{ $service['name'] }}
                            </span>
                        </div>

                        <div class="relative mt-5 min-h-[4.5rem]">
                            <h3 class="text-lg font-black leading-snug text-slate-900">{{ $item[$service['title_key']] }}</h3>
                            <p class="mt-1 text-sm font-bold text-brand-700">{{ $item[$service['subtitle_key']] }}</p>
                        </div>

                        <dl class="relative mt-4 grid gap-3 rounded-2xl border border-slate-100 bg-white/65 p-4">
                            @foreach ($service['fields'] as $field)
                                <div class="flex items-start gap-3 text-sm">
                                    <dt class="w-24 shrink-0 text-xs font-bold text-slate-400">{{ $field['label'] }}</dt>
                                    <dd class="font-bold leading-5 text-slate-700">{{ $item[$field['key']] }}</dd>
                                </div>
                            @endforeach
                        </dl>

                        <div class="relative mt-5 flex items-end justify-between gap-3 border-t border-dashed border-slate-200 pt-4">
                            <div>
                                <p class="text-[10px] font-black uppercase tracking-wider text-slate-400">Mulai dari</p>
                                <p class="mt-1 text-xl font-black text-brand-700">Rp {{ number_format($item[$service['price_key']], 0, ',', '.') }}</p>
                                <p class="text-[11px] font-semibold text-slate-400">{{ $service['price_unit'] }}</p>
                            </div>
                            <div class="text-right">
                                <p class="text-[10px] font-black uppercase tracking-wider text-slate-400">{{ $service['availability_label'] }}</p>
                                <p class="mt-1 text-sm font-black text-slate-800">{{ number_format($item[$service['availability_key']], 0, ',', '.') }} {{ $service['availability_unit'] }}</p>
                            </div>
                        </div>
                        <div class="relative mt-3 h-1.5 overflow-hidden rounded-full bg-slate-100">
                            <div class="h-full rounded-full bg-gradient-to-r from-brand-400 to-brand-accent" style="width: {{ $availabilityPercent }}%"></div>
                        </div>
                    </article>
                @endforeach
            </div>
        </section>

        <section class="pt-14">
            <div class="mb-6">
                <p class="text-xs font-black uppercase tracking-[.18em] text-brand-600">Contoh relasi ERD</p>
                <h2 class="mt-2 text-2xl font-black tracking-tight text-slate-900 sm:text-3xl">Alur pesanan dalam satu ringkasan</h2>
                <p class="mt-2 text-sm text-slate-500">Data berikut hanya pratinjau dummy untuk menggambarkan hubungan pengguna, layanan, kupon, pesanan, dan pembayaran.</p>
            </div>

            <div class="relative overflow-hidden rounded-[2rem] bg-gradient-to-br from-slate-900 via-brand-900 to-brand-800 p-5 text-white shadow-xl shadow-brand-900/15 sm:p-8">
                <div class="absolute -right-20 -top-24 h-72 w-72 rounded-full bg-brand-400/20 blur-3xl"></div>
                <div class="relative grid gap-5 lg:grid-cols-[1.1fr_1fr_1fr]">
                    <article class="rounded-2xl border border-white/15 bg-white/10 p-5 backdrop-blur-md">
                        <div class="flex items-center justify-between">
                            <span class="text-xs font-extrabold uppercase tracking-wider text-white/65">Pesanan</span>
                            <i class="fa-solid fa-receipt text-brand-200"></i>
                        </div>
                        <h3 class="mt-3 text-xl font-black">{{ $orderPreview['pesanan']['id'] }}</h3>
                        <p class="mt-1 text-sm font-bold text-white/80">{{ $orderPreview['user']['nama'] }}</p>
                        <div class="mt-5 flex items-end justify-between gap-3">
                            <div>
                                <p class="text-[10px] font-bold uppercase text-white/55">Total harga</p>
                                <p class="mt-1 text-lg font-black">Rp {{ number_format($orderPreview['pesanan']['total_harga'], 0, ',', '.') }}</p>
                            </div>
                            <span class="rounded-full bg-amber-300/15 px-3 py-1.5 text-[10px] font-extrabold text-amber-200">{{ $orderPreview['pesanan']['status_pesanan'] }}</span>
                        </div>
                        <p class="mt-4 text-xs font-semibold text-white/55">Dipesan {{ $orderPreview['pesanan']['tanggal_pesan'] }}</p>
                    </article>

                    <article class="rounded-2xl border border-white/15 bg-white/10 p-5 backdrop-blur-md">
                        <div class="flex items-center justify-between">
                            <span class="text-xs font-extrabold uppercase tracking-wider text-white/65">Detail & kupon</span>
                            <i class="fa-solid fa-tags text-orange-200"></i>
                        </div>
                        <div class="mt-4 space-y-3 text-sm">
                            <div class="flex justify-between gap-3"><span class="text-white/60">Layanan</span><span class="font-extrabold">{{ $orderPreview['detail']['layanan_type'] }} #{{ $orderPreview['detail']['layanan_id'] }}</span></div>
                            <div class="flex justify-between gap-3"><span class="text-white/60">Harga satuan</span><span class="font-extrabold">Rp {{ number_format($orderPreview['detail']['harga_satuan'], 0, ',', '.') }}</span></div>
                            <div class="flex justify-between gap-3"><span class="text-white/60">Kuantitas</span><span class="font-extrabold">{{ $orderPreview['detail']['kuantitas'] }}</span></div>
                        </div>
                        <div class="mt-4 rounded-xl border border-dashed border-white/25 bg-white/5 p-3">
                            <p class="text-[10px] font-bold uppercase tracking-wider text-white/55">Kupon promo</p>
                            <p class="mt-1 font-mono text-sm font-black text-orange-200">{{ $orderPreview['kupon']['kode_kupon'] }}</p>
                            <p class="mt-1 text-xs text-white/65">{{ $orderPreview['kupon']['nilai_diskon'] }}% diskon · kuota {{ $orderPreview['kupon']['kuota'] }}</p>
                        </div>
                    </article>

                    <article class="rounded-2xl border border-white/15 bg-white/10 p-5 backdrop-blur-md">
                        <div class="flex items-center justify-between">
                            <span class="text-xs font-extrabold uppercase tracking-wider text-white/65">Pembayaran</span>
                            <i class="fa-solid fa-credit-card text-emerald-200"></i>
                        </div>
                        <p class="mt-5 text-lg font-black">{{ $orderPreview['pembayaran']['metode_bayar'] }}</p>
                        <span class="mt-2 inline-flex items-center gap-2 rounded-full bg-emerald-300/15 px-3 py-1.5 text-xs font-extrabold text-emerald-200">
                            <span class="h-1.5 w-1.5 rounded-full bg-emerald-300"></span>{{ $orderPreview['pembayaran']['status_bayar'] }}
                        </span>
                        <div class="mt-5 border-t border-white/15 pt-4">
                            <p class="text-[10px] font-bold uppercase tracking-wider text-white/55">Akun pemesan</p>
                            <p class="mt-1 text-sm font-extrabold">{{ $orderPreview['user']['email'] }}</p>
                        </div>
                    </article>
                </div>
            </div>
        </section>
    </main>

    <footer class="border-t border-slate-200/80 bg-white/70 px-4 py-8 text-center text-sm font-medium text-slate-500 backdrop-blur">
        © 2026 JalanYuk — Temukan perjalanan favoritmu.
    </footer>
</body>
</html>
