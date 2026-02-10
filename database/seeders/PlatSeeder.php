<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Plat;

class PlatSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Plat::factory(100)->create()->each(function ($plat) {
            $plat->image()->create(
                ['path_image' => 'https://source.unsplash.com/400x300/?food'],
            );
        });
    }
}
