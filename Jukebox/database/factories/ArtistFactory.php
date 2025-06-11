<?php

namespace Database\Factories;

use App\Models\Artist;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Artist>
 */
class ArtistFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "name" => "Snoop Dogg",
            "woonplaats" => "Long Beach",
            "geboortedatum" => Carbon::now()
        ];
    }
}
