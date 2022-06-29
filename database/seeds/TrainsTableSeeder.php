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
            $train->arrival_stazion = $faker->city();
            $train->departure_time = $faker->time();
            $train->arrive_time = $faker->time();
            $train->race_ID = $faker->regexify('[A-Z]{5}[0-9]{4}');
            $train->wagons_num = $faker->numberBetween(4, 20);
            $train->punctual = $faker->boolean();
            $train->delay = $faker->time();
            $train->cancelled = $faker->boolean();
            $train->save();
        }
    }
}
