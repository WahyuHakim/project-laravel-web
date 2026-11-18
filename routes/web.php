<?php

use Illuminate\Support\Facades\Route;

$services = [
    'hotel' => [
        'name' => 'Hotel',
        'icon' => 'fa-hotel',
        'images' => [
            'https://img.cnt.traveloka.com/tvlk/apr-asset/dgXfoyh24ryQLRcGq00cIdKHRmotrWLNlvG-TxlcLxGkiDwaUSggleJNPRgIHCX6/hotel/asset/10004607-cd602b5d5dbc65d02fe83abffcca5585.jpeg?tr=q-40,c-at_max,w-960,h-600',
            'https://img.cnt.traveloka.com/tvlk/apr-asset/Ixf4aptF5N2Qdfmh4fGGYhTN274kJXuNMkUAzpL5HuD9jzSxIGG5kZNhhHY-p7nw/hotel/asset/10000126-cc968d77183bab6237a5c3b5de6332cd.png?tr=q-40,c-at_max,w-960,h-600',
            'https://img.cnt.traveloka.com/tvlk/apr-asset/dgXfoyh24ryQLRcGq00cIdKHRmotrWLNlvG-TxlcLxGkiDwaUSggleJNPRgIHCX6/hotel/asset/10013035-1200x845-FIT_AND_TRIM-affbbd70857894e2e5d0a3fbc7e91c67.jpeg?tr=q-40,c-at_max,w-960,h-600',
        ],
        'entity' => 'kamar_hotel',
        'description' => 'Temukan kamar yang pas untuk jeda santai, perjalanan bisnis, atau liburan panjang.',
        'headline' => 'Pulang ke tempat nyaman, di mana pun tujuanmu.',
        'section_title' => 'Kamar pilihan untuk perjalananmu',
        'title_key' => 'nama_hotel',
        'subtitle_key' => 'tipe_kamar',
        'price_key' => 'harga_per_malam',
        'price_unit' => '/ malam',
        'availability_key' => 'stok_kamar',
        'availability_label' => 'Kamar tersedia',
        'availability_unit' => 'kamar',
        'fields' => [
            ['key' => 'tipe_kamar', 'label' => 'Tipe kamar'],
            ['key' => 'fasilitas', 'label' => 'Fasilitas'],
        ],
        'items' => [
            ['id' => 1, 'nama_hotel' => 'Samudra Bali Resort', 'tipe_kamar' => 'Deluxe Ocean View', 'fasilitas' => 'Sarapan, Wi-Fi, kolam renang', 'harga_per_malam' => 1250000, 'stok_kamar' => 8],
            ['id' => 2, 'nama_hotel' => 'Kota Senja Boutique Hotel', 'tipe_kamar' => 'Deluxe City Room', 'fasilitas' => 'Wi-Fi, AC, layanan kamar', 'harga_per_malam' => 785000, 'stok_kamar' => 12],
            ['id' => 3, 'nama_hotel' => 'Paviliun Padi Ubud', 'tipe_kamar' => 'Garden Suite', 'fasilitas' => 'Sarapan, balkon, akses taman', 'harga_per_malam' => 980000, 'stok_kamar' => 5],
        ],
    ],
    'pesawat' => [
        'name' => 'Pesawat',
        'icon' => 'fa-plane-departure',
        'images' => [
            'https://images.unsplash.com/photo-1436491865332-7a61a109cc05?auto=format&fit=crop&w=960&q=85',
            'https://img.cnt.traveloka.com/tvlk/image/imageResource/2024/06/24/1719219766281-3379704fe1a541197c597457608a3365.jpeg?tr=q-75',
            'https://img.cnt.traveloka.com/tvlk/image/imageResource/2024/08/21/1724222591331-ecaaf4eaa667de76ee8a1acd5f81113e.jpeg?tr=q-75',
        ],
        'entity' => 'tiket_pesawat',
        'description' => 'Bandingkan jadwal penerbangan dan temukan kursi untuk perjalanan berikutnya.',
        'headline' => 'Terbang lebih dekat ke cerita baru.',
        'section_title' => 'Jadwal penerbangan pilihan',
        'title_key' => 'maskapai',
        'subtitle_key' => 'kode_penerbangan',
        'price_key' => 'harga',
        'price_unit' => '/ orang',
        'availability_key' => 'stok_kursi',
        'availability_label' => 'Kursi tersedia',
        'availability_unit' => 'kursi',
        'fields' => [
            ['key' => 'bandara_asal', 'label' => 'Dari'],
            ['key' => 'bandara_tujuan', 'label' => 'Ke'],
            ['key' => 'waktu_berangkat', 'label' => 'Berangkat'],
        ],
        'items' => [
            ['id' => 1, 'maskapai' => 'Nusantara Air', 'kode_penerbangan' => 'NA 412', 'bandara_asal' => 'Jakarta (CGK)', 'bandara_tujuan' => 'Denpasar (DPS)', 'waktu_berangkat' => '20 Nov 2026, 07.15 WIB', 'harga' => 1290000, 'stok_kursi' => 18],
            ['id' => 2, 'maskapai' => 'Langit Biru Airways', 'kode_penerbangan' => 'LB 208', 'bandara_asal' => 'Jakarta (CGK)', 'bandara_tujuan' => 'Yogyakarta (YIA)', 'waktu_berangkat' => '21 Nov 2026, 09.30 WIB', 'harga' => 785000, 'stok_kursi' => 24],
            ['id' => 3, 'maskapai' => 'Nusantara Air', 'kode_penerbangan' => 'NA 731', 'bandara_asal' => 'Surabaya (SUB)', 'bandara_tujuan' => 'Lombok (LOP)', 'waktu_berangkat' => '22 Nov 2026, 13.45 WIB', 'harga' => 940000, 'stok_kursi' => 11],
        ],
    ],
    'kereta-api' => [
        'name' => 'Kereta Api',
        'icon' => 'fa-train',
        'images' => [
            'https://images.unsplash.com/photo-1474487548417-781cb71495f3?auto=format&fit=crop&w=960&q=85',
            'https://images.unsplash.com/photo-1532105956626-9569c03602f6?auto=format&fit=crop&w=960&q=85',
            'https://images.unsplash.com/photo-1515169067868-5387ec356754?auto=format&fit=crop&w=960&q=85',
        ],
        'entity' => 'tiket_kereta',
        'description' => 'Nikmati perjalanan antarkota yang nyaman dengan jadwal dan ketersediaan kursi yang jelas.',
        'headline' => 'Perjalanan seru dimulai dari stasiun.',
        'section_title' => 'Jadwal kereta pilihan',
        'title_key' => 'nama_kereta',
        'subtitle_key' => 'stasiun_asal',
        'price_key' => 'harga',
        'price_unit' => '/ orang',
        'availability_key' => 'stok_kursi',
        'availability_label' => 'Kursi tersedia',
        'availability_unit' => 'kursi',
        'fields' => [
            ['key' => 'stasiun_asal', 'label' => 'Dari'],
            ['key' => 'stasiun_tujuan', 'label' => 'Ke'],
            ['key' => 'waktu_berangkat', 'label' => 'Berangkat'],
        ],
        'items' => [
            ['id' => 1, 'nama_kereta' => 'Argo Parahyangan', 'stasiun_asal' => 'Gambir (GMR)', 'stasiun_tujuan' => 'Bandung (BD)', 'waktu_berangkat' => '20 Nov 2026, 08.10 WIB', 'harga' => 185000, 'stok_kursi' => 32],
            ['id' => 2, 'nama_kereta' => 'Taksaka', 'stasiun_asal' => 'Gambir (GMR)', 'stasiun_tujuan' => 'Yogyakarta (YK)', 'waktu_berangkat' => '21 Nov 2026, 20.45 WIB', 'harga' => 460000, 'stok_kursi' => 17],
            ['id' => 3, 'nama_kereta' => 'Sancaka', 'stasiun_asal' => 'Surabaya Gubeng (SGU)', 'stasiun_tujuan' => 'Yogyakarta (YK)', 'waktu_berangkat' => '22 Nov 2026, 07.00 WIB', 'harga' => 235000, 'stok_kursi' => 26],
        ],
    ],
    'bus-travel' => [
        'name' => 'Bus & Travel',
        'icon' => 'fa-bus',
        'images' => [
            'https://images.unsplash.com/photo-1570125909232-eb263c188f7e?auto=format&fit=crop&w=960&q=85',
            'https://images.unsplash.com/photo-1544620347-c4fd4a3d5957?auto=format&fit=crop&w=960&q=85',
            'https://images.unsplash.com/photo-1513506003901-1e6a229e2d15?auto=format&fit=crop&w=960&q=85',
        ],
        'entity' => 'tiket_bus',
        'description' => 'Pilih jadwal bus antarkota dengan detail terminal, harga, dan stok kursi.',
        'headline' => 'Jelajahi kota-kota lewat perjalanan darat.',
        'section_title' => 'Rute bus & travel pilihan',
        'title_key' => 'nama_po',
        'subtitle_key' => 'terminal_asal',
        'price_key' => 'harga',
        'price_unit' => '/ orang',
        'availability_key' => 'stok_kursi',
        'availability_label' => 'Kursi tersedia',
        'availability_unit' => 'kursi',
        'fields' => [
            ['key' => 'terminal_asal', 'label' => 'Dari'],
            ['key' => 'terminal_tujuan', 'label' => 'Ke'],
            ['key' => 'waktu_berangkat', 'label' => 'Berangkat'],
        ],
        'items' => [
            ['id' => 1, 'nama_po' => 'Maju Lancar Executive', 'terminal_asal' => 'Pulo Gebang, Jakarta', 'terminal_tujuan' => 'Terminal Giwangan, Yogyakarta', 'waktu_berangkat' => '20 Nov 2026, 18.00 WIB', 'harga' => 275000, 'stok_kursi' => 14],
            ['id' => 2, 'nama_po' => 'Sinar Pagi Premium', 'terminal_asal' => 'Leuwipanjang, Bandung', 'terminal_tujuan' => 'Tirtonadi, Solo', 'waktu_berangkat' => '21 Nov 2026, 20.15 WIB', 'harga' => 230000, 'stok_kursi' => 9],
            ['id' => 3, 'nama_po' => 'Lintas Nusa Shuttle', 'terminal_asal' => 'Arjosari, Malang', 'terminal_tujuan' => 'Purabaya, Surabaya', 'waktu_berangkat' => '22 Nov 2026, 10.30 WIB', 'harga' => 95000, 'stok_kursi' => 20],
        ],
    ],
    'antar-bandara' => [
        'name' => 'Antar Bandara',
        'icon' => 'fa-van-shuttle',
        'images' => [
            'https://images.unsplash.com/photo-1549317661-bd32c8ce0db2?auto=format&fit=crop&w=960&q=85',
            'https://images.unsplash.com/photo-1511919884226-fd3cad34687c?auto=format&fit=crop&w=960&q=85',
            'https://images.unsplash.com/photo-1500530855697-b586d89ba3ee?auto=format&fit=crop&w=960&q=85',
        ],
        'entity' => 'layanan_antar_bandara',
        'description' => 'Atur perjalanan lanjutan dari bandara dengan titik jemput dan tujuan yang terencana.',
        'headline' => 'Mendarat tenang, lanjut jalan dengan nyaman.',
        'section_title' => 'Layanan antar bandara pilihan',
        'title_key' => 'nama_layanan',
        'subtitle_key' => 'jenis_kendaraan',
        'price_key' => 'harga',
        'price_unit' => '/ perjalanan',
        'availability_key' => 'kapasitas',
        'availability_label' => 'Kapasitas kendaraan',
        'availability_unit' => 'orang',
        'fields' => [
            ['key' => 'bandara', 'label' => 'Bandara'],
            ['key' => 'lokasi_jemput', 'label' => 'Titik jemput'],
            ['key' => 'lokasi_tujuan', 'label' => 'Tujuan'],
            ['key' => 'waktu_penjemputan', 'label' => 'Waktu jemput'],
        ],
        'items' => [
            ['id' => 1, 'nama_layanan' => 'Transfer Bandara Ngurah Rai', 'bandara' => 'I Gusti Ngurah Rai (DPS)', 'lokasi_jemput' => 'Area kedatangan domestik', 'lokasi_tujuan' => 'Seminyak, Bali', 'jenis_kendaraan' => 'MPV Premium', 'waktu_penjemputan' => '20 Nov 2026, 10.00 WITA', 'harga' => 225000, 'kapasitas' => 5],
            ['id' => 2, 'nama_layanan' => 'Transfer Bandara Soekarno-Hatta', 'bandara' => 'Soekarno-Hatta (CGK)', 'lokasi_jemput' => 'Terminal 3, pintu 4', 'lokasi_tujuan' => 'Menteng, Jakarta', 'jenis_kendaraan' => 'City Car', 'waktu_penjemputan' => '21 Nov 2026, 14.30 WIB', 'harga' => 185000, 'kapasitas' => 3],
            ['id' => 3, 'nama_layanan' => 'Transfer Bandara Yogyakarta', 'bandara' => 'Yogyakarta International (YIA)', 'lokasi_jemput' => 'Area penjemputan utama', 'lokasi_tujuan' => 'Pusat Kota Yogyakarta', 'jenis_kendaraan' => 'Van Keluarga', 'waktu_penjemputan' => '22 Nov 2026, 09.00 WIB', 'harga' => 210000, 'kapasitas' => 7],
        ],
    ],
    'atraksi' => [
        'name' => 'Atraksi',
        'icon' => 'fa-ticket',
        'images' => [
            'https://img.cnt.traveloka.com/tvlk/xpe-asset/GZtqLuOqb-33qvDmG1FcMeN1eFEH7PVvlsdFr2AUBT39jzSxIGG5kZNhhHY-p7nw/2001807961267/Waterbom-Bali-Tickets-3b9ac052-4a0a-4013-b63b-9fb3386d9165.jpeg?tr=q-60,c-at_max,w-960,h-600',
            'https://img.cnt.traveloka.com/tvlk/xpe-asset/GZtqLuOqb-33qvDmG1FcMeN1eFEH7PVvlsdFr2AUBT39jzSxIGG5kZNhhHY-p7nw/2001162996890/Borobudur-Temple-Tickets-5be6ac98-f62b-4e1f-9900-b3c50d6ab5de.jpeg?tr=q-60,c-at_max,w-960,h-600',
            'https://img.cnt.traveloka.com/tvlk/xpe-asset/GZtqLuOqb-33qvDmG1FcMeN1eFEH7PVvlsdFr2AUBT39jzSxIGG5kZNhhHY-p7nw/2000068312783/Bali-Zoo-Tickets-e0706c2e-74bb-4471-8497-da4d0ae5612b.jpeg?tr=q-60,c-at_max,w-960,h-600',
        ],
        'entity' => 'atraksi_wisata',
        'description' => 'Isi perjalanan dengan aktivitas seru, lengkap dengan lokasi, harga tiket, dan tanggal operasional.',
        'headline' => 'Buat setiap hari libur punya cerita.',
        'section_title' => 'Atraksi wisata pilihan',
        'title_key' => 'nama_atraksi',
        'subtitle_key' => 'lokasi',
        'price_key' => 'harga_tiket',
        'price_unit' => '/ tiket',
        'availability_key' => 'stok_tiket',
        'availability_label' => 'Tiket tersedia',
        'availability_unit' => 'tiket',
        'fields' => [
            ['key' => 'lokasi', 'label' => 'Lokasi'],
            ['key' => 'deskripsi', 'label' => 'Tentang atraksi'],
            ['key' => 'tanggal_operasional', 'label' => 'Tanggal operasional'],
        ],
        'items' => [
            ['id' => 1, 'nama_atraksi' => 'Waterbom Bali', 'lokasi' => 'Kuta, Bali', 'deskripsi' => 'Taman air untuk liburan seru bersama keluarga.', 'harga_tiket' => 325000, 'stok_tiket' => 120, 'tanggal_operasional' => 'Setiap hari'],
            ['id' => 2, 'nama_atraksi' => 'Jelajah Candi Borobudur', 'lokasi' => 'Magelang, Jawa Tengah', 'deskripsi' => 'Nikmati warisan budaya dan suasana matahari terbit.', 'harga_tiket' => 50000, 'stok_tiket' => 85, 'tanggal_operasional' => '20-30 Nov 2026'],
            ['id' => 3, 'nama_atraksi' => 'Bali Safari & Marine Park', 'lokasi' => 'Gianyar, Bali', 'deskripsi' => 'Pengalaman mengenal satwa dan alam untuk semua usia.', 'harga_tiket' => 150000, 'stok_tiket' => 64, 'tanggal_operasional' => 'Setiap hari'],
        ],
    ],
];

$orderPreview = [
    'user' => ['nama' => 'Nadia Putri', 'email' => 'nadia@example.test'],
    'pesanan' => ['id' => 'JY-2026-014', 'total_harga' => 1290000, 'status_pesanan' => 'Menunggu pembayaran', 'tanggal_pesan' => '11 Nov 2026'],
    'detail' => ['layanan_id' => 1, 'layanan_type' => 'tiket_pesawat', 'harga_satuan' => 1290000, 'kuantitas' => 1],
    'kupon' => ['kode_kupon' => 'JALANYUK10', 'nilai_diskon' => 10, 'tipe_diskon' => 'Persen', 'kuota' => 48],
    'pembayaran' => ['metode_bayar' => 'Virtual Account', 'status_bayar' => 'Menunggu'],
];

Route::get('/', function () {
    return view('home');
});

Route::get('/layanan/{service}', function (string $service) use ($services, $orderPreview) {
    abort_unless(isset($services[$service]), 404);

    return view('service', [
        'service' => $services[$service],
        'serviceSlug' => $service,
        'services' => $services,
        'orderPreview' => $orderPreview,
    ]);
})->name('services.show');

Route::get('/search', function () {
    return view('search-results');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/register', function () {
    return view('register');
});

Route::get('/detail', function () {
    return view('detail');
});

Route::get('/checkout', function () {
    return view('checkout');
});

Route::get('/success', function () {
    return view('success');
});

Route::get('/pesanan', function () {
    return view('pesanan');
});
