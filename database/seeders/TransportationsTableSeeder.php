<?php

namespace Database\Seeders;

use App\Models\Transportation;
use App\Models\Location;
use Illuminate\Database\Seeder;

class TransportationsTableSeeder extends Seeder
{
    public function run()
    {
        $Denpasar = Location::where('city', 'Denpasar')->first();
        $jakarta = Location::where('city', 'Jakarta Pusat')->first();

        Transportation::create([
            'type' => 'Bus',
            'name' => 'Denpasar Shuttle Service',
            'price' => 150000,
            'provider' => 'Denpasar Transport Co.',
            'location_id' => $Denpasar->id,
        ]);

        Transportation::create([
            'type' => 'Private Car',
            'name' => 'Luxury Car Hire',
            'price' => 500000,
            'provider' => 'Luxury Car Rentals',
            'location_id' => $Denpasar->id,
        ]);

        Transportation::create([
            'type' => 'Flight',
            'name' => 'Garuda Indonesia Flight',
            'price' => 1200000,
            'provider' => 'Garuda Indonesia',
            'location_id' => $jakarta->id,
        ]);
    }
}

