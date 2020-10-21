<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Grocery;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Grocery::create([
            'name' => ('Brood'),
            'amount' => (1),
            'price' => (2),
        ]);
        Grocery::create([
            'name' => ('Kaas'),
            'amount' => (1),
            'price' => (6),
        ]);
        Grocery::create([
            'name' => ('Water'),
            'amount' => (1),
            'price' => (1),
        ]);  

    }
}
