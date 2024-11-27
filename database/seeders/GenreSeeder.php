<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GenreSeeder extends Seeder
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
