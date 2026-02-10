<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Restaurant;
use App\Models\Plat;

class RestaurantSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Restaurant::factory(10)->create();
        Restaurant::factory(10)->create()->each(function ($restaurant) {
            $plats = \App\Models\Plat::inRandomOrder()->take(rand(1, 5))->pluck('id_plat');
            $restaurant->plats()->attach($plats, ['prix_plat' => rand(10, 50)]);
            $restaurant->images()->createMany([
                ['path_image' => 'https://source.unsplash.com/400x300/?restaurant'],
            ]);
        });
    }
}
