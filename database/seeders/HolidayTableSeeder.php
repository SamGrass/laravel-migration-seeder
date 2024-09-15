<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Models\Holiday;

class HolidayTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    { {
            for ($i = 0; $i < 20; $i++) {
                $new_holiday = new Holiday();
                $new_holiday->name = $faker->city();
                $new_holiday->days = $faker->numberBetween(1, 21);
                $new_holiday->price = $faker->randomFloat(2, 200, 30000);
                $new_holiday->description = $faker->text(200);
                dump($new_holiday);
                $new_holiday->save();
            }
        }
    }
}
