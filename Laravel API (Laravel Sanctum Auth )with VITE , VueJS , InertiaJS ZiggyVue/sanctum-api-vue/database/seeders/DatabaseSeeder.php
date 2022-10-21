<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Product;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

foreach (range(10, 50) as $a) {
    Product::factory()->create([
        'name' => fake()->title(),
        'price' => fake()->numberBetween(1, 100),
    ]);
}

    }
}
