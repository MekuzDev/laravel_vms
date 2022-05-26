<?php

namespace Database\Seeders;

use App\Models\Location;
use App\Models\VehicleUser;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\support\Facades\DB;
use Faker\Factory as Faker;

class VehicleUsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       DB::table('vehicle_users')->truncate();
       $faker =  Faker::create();
       $vehicle_users = [];
      

       foreach (range(1,30) as $index) {
           $vehicle_users[] = [
               'fullname' => $faker->name(),
               'location_id'=> Location::pluck('id')->random(),
               'created_at'=> now(),
               'updated_at'=> now(),
           ];
       }
       DB::table('vehicle_users')->insert($vehicle_users);
    }
}
