<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Database\Seeders\RoleSeeder;
use Database\Seeders\RestaurantSeeder;
use Database\Seeders\PlatSeeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([RoleSeeder::class]);
        User::factory(3)->create();
        User::factory(2)->create([
            'role_id' => 3, // restaurateur
        ]);
        User::factory()->create([
            'name' => 'YouCo\'Done Admin',
            'email' => 'admin@youco_done.come',
        ]);

        $this->call([PlatSeeder::class]);
        $this->call([RestaurantSeeder::class]);
    }
}
