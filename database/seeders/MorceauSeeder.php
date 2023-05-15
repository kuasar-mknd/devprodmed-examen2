<?php

namespace Database\Seeders;

use App\Models\Genre;
use App\Models\Morceau;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;

class MorceauSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        

        Morceau::factory()->count(100)->create();
    }
}
