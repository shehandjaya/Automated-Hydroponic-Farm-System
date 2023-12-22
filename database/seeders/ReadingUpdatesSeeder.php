<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;
use Carbon\Carbon;
class ReadingUpdatesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $currentDate = Carbon::now()->toDateString();
        $currentTime = Carbon::now()->toTimeString();

        DB::table('reading_updates')->insert([
          'id'=>1,
          'water_capacity'=>'99',
          'ambient_temperature'=>'60',
          'ambient_humidity'=>'70',
          'water_temperature'=>'60',
          'ph'=>'10',
          'ec'=>'50',
          'ambient_light'=>'70',
          'water_motor'=>'OFF',
          'nutrition_pump_1'=>'OFF',
          'nutrition_pump_2'=>'OFF',
          'fan'=>'OFF',
          'growing_light'=>'OFF',
          'normal_light'=>'OFF',
          'ph_control_motor'=>'OFF',
          'time'=>$currentTime,
          'date'=>$currentDate,
        ]);
    }
}
