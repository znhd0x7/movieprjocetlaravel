<?php

namespace Database\Seeders;

use App\Models\Genre;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MovieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        Genre::create([
            'name' => 'Horror'
        ]);
        Genre::create([
            'name' => 'Cartoon'
        ]);
        Genre::create([
            'name' => 'action'
        ]);
        Genre::create([
            'name' => 'romance'
        ]);
        Genre::create([
            'name' => 'Comedy'
        ]);
    }
}
