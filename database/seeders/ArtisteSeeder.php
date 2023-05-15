<?php

namespace Database\Seeders;

use App\Models\Artiste;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ArtisteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Artiste::factory()->count(30)->create();
    }
}
