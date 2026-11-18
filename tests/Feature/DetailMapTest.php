<?php

namespace Tests\Feature;

use Tests\TestCase;

class DetailMapTest extends TestCase
{
    public function test_hotel_detail_shows_an_interactive_map_and_map_links(): void
    {
        $this->get('/detail')
            ->assertOk()
            ->assertSee('title="Peta lokasi grandkemang Hotel"', false)
            ->assertSee('https://www.openstreetmap.org/export/embed.html?', false)
            ->assertSee('marker=-6.2609%2C106.8135', false)
            ->assertSee('https://www.google.com/maps/search/?api=1', false)
            ->assertSee('Stasiun+MRT+Blok+M', false)
            ->assertSee('Lippo+Mall+Kemang', false)
            ->assertDontSee('hero_maps_static.png');
    }
}
