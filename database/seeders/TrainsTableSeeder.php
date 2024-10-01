<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Train; // Importa il modello Train per interagire con la tabella dei treni
use Faker\Factory as Faker; // Importa la fabbrica Faker per generare dati fittizi

class TrainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Inizializza Faker per generare dati fittizi
        $faker = Faker::create();

        // Crea 50 record di treni
        for ($i = 0; $i < 50; $i++) {
            Train::create([
                'company' => $faker->company,
                'departure_station' => $faker->city,
                'arrival_station' => $faker->city,
                'departure_time' => $faker->time('H:i'),
                'arrival_time' => $faker->time('H:i'),
                'train_code' => strtoupper($faker->bothify('??###')),
                'number_of_carriages' => $faker->numberBetween(3, 15),
                'on_time' => $faker->boolean,
                'cancelled' => $faker->boolean,
            ]);
        }
    }
}
