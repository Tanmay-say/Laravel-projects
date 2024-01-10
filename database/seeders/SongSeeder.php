<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Song;

class SongSeeder extends Seeder
{
    

    public function run(): void
    {

        // Seed a few songs
        Song::create([
            'artist' => 'Eminem',
            'title' => 'Stan',
        ]);

        Song::create([
            'artist' => 'A P Dhillon',
            'title' => 'With You',
        ]);

        Song::create([
            'artist' => 'J D Daku',
            'title' => 'May I got',
        ]);

        Song::create([
            'artist' => 'A P Hello',
            'title' => 'Jab we met ',
        ]);
        

    }
}