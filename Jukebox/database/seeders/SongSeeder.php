<?php

namespace Database\Seeders;

use App\Models\Song;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SongSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Song::create([
            "name" => "Habiba",
            "duration" => 160,
            "genre_id" => 1
        ]);

        Song::factory()->count(5000)->create();
    }
}
