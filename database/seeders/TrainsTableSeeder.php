<?php

namespace Database\Seeders;

use App\Models\Train;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        for ($i = 0; $i < 10; $i++) {
            $newTrain = new Train();
            $newTrain->company = $faker->word();
            $newTrain->start_station = $faker->sentence(2);
            $newTrain->start_hour = $faker->date() . ' ' . $faker->time('H:i:s');
            $newTrain->end_station = $faker->sentence(2);
            $newTrain->end_hour = $faker->date() . ' ' . $faker->time('H:i:s');
            $newTrain->train_code = $faker->bothify('??#####');
            $newTrain->carriages = $faker->randomNumber(1, true);
            $newTrain->in_time = $faker->boolean();
            $newTrain->deleted = $faker->boolean();
            $newTrain->save();
        }
    }
}
