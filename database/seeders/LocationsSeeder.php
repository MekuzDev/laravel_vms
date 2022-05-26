<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\support\Facades\DB;
use Faker\Factory as Faker;


class LocationsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // DB::table('locations')->truncate();
        $locations = [];
        $faker = Faker::create();
        foreach (range(1,10) as  $index) {
            $locations[] = [
                'location_name'=> $faker->city(),
                'created_at'=>now(),
                'updated_at'=>now()
            ];
        }
        DB::table('locations')->insert($locations);
    }
}
