<?php

namespace Database\Seeders;

use App\Models\Artist;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ArtistSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Artist::create([
            "name" => "Snoop Dogg",
            "woonplaats" => "Long Beach",
            "geboortedatum" => Carbon::now()
        ]);

        Artist::factory()->count(11000)->create();
    }
}
