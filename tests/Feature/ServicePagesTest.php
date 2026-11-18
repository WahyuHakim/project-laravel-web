<?php

namespace Tests\Feature;

use Tests\TestCase;

class ServicePagesTest extends TestCase
{
    public function test_each_home_service_category_opens_its_own_page(): void
    {
        $services = [
            'hotel' => ['Hotel', ['Samudra Bali Resort', 'Kota Senja Boutique Hotel', 'Paviliun Padi Ubud'], ['Tipe kamar', 'Fasilitas']],
            'pesawat' => ['Pesawat', ['NA 412', 'LB 208', 'NA 731'], ['Dari', 'Ke', 'Berangkat']],
            'kereta-api' => ['Kereta Api', ['Argo Parahyangan', 'Taksaka', 'Sancaka'], ['Dari', 'Ke', 'Berangkat']],
            'bus-travel' => ['Bus & Travel', ['Maju Lancar Executive', 'Sinar Pagi Premium', 'Lintas Nusa Shuttle'], ['Dari', 'Ke', 'Berangkat']],
            'antar-bandara' => ['Antar Bandara', ['Transfer Bandara Ngurah Rai', 'Transfer Bandara Soekarno-Hatta', 'Transfer Bandara Yogyakarta'], ['Bandara', 'Titik jemput', 'Tujuan', 'Waktu jemput', 'Kapasitas kendaraan']],
            'atraksi' => ['Atraksi', ['Waterbom Bali', 'Jelajah Candi Borobudur', 'Bali Safari & Marine Park'], ['Lokasi', 'Tentang atraksi', 'Tanggal operasional']],
        ];

        $home = $this->get('/');
        $home->assertOk();

        foreach ($services as $slug => [$name, $dummyItems, $fields]) {
            $home->assertSee(route('services.show', ['service' => $slug]), false);
            $page = $this->get(route('services.show', ['service' => $slug]))
                ->assertOk()
                ->assertSee($name)
                ->assertSee('Data dummy')
                ->assertSee('loading="lazy"', false)
                ->assertSee('animate-enter', false)
                ->assertSee('prefers-reduced-motion', false)
                ->assertSee('Contoh relasi ERD')
                ->assertSee('JY-2026-014')
                ->assertSee('JALANYUK10');

            $this->assertSame(4, substr_count($page->getContent(), '<img src='));

            foreach ($dummyItems as $dummyItem) {
                $page->assertSee($dummyItem);
            }

            foreach ($fields as $field) {
                $page->assertSee($field);
            }
        }

        $home->assertDontSee('Rental Mobil');
        $this->get('/layanan/rental-mobil')->assertNotFound();
    }

    public function test_unknown_service_page_returns_not_found(): void
    {
        $this->get('/layanan/tidak-tersedia')->assertNotFound();
    }
}
