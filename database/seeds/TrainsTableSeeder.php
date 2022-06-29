<?php

use App\Train;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class TrainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        //
        $companies =  [
            'Trenitalia',
            'Italo',
            'Trenord',
            'FDS'
        ];

        //inserimento dei record all'interno della tabella

        for ($i = 0; $i < 10; $i++) {
            $train = new Train();
            $train->company = $companies[rand(0, count($companies) - 1)];
            $train->departure_station = $faker->city();
            $train->arrival_station = $faker->city();
            $train->time_departure = $faker->time();
            $train->time_arrival = $faker->time();
            $train->train_code = $faker->regexify('[A-Z]{4}[0-9]{4}');
            $train->wagons_number = $faker->numberBetween(4, 40);
            $train->on_time = $faker->boolean();
            $train->save();
        }
    }
}