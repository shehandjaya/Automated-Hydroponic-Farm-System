<?php

namespace Database\Seeders;
use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class ReadingRecordsSeeder extends Seeder
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

        DB::table('reading_records')->insert([

          'water_capacity'=>'100.00',
          'ambient_temperature'=>'100.00',
          'ambient_humidity'=>'100.00',
          'water_temperature'=>'100.00',
          'ph'=>'100.00',
          'ec'=>'100.00',
          'ambient_light'=>'100.00',
          'water_motor'=>'1',
          'nutrition_pump_1'=>'0',
          'nutrition_pump_2'=>'1',
          'fan'=>'1',
          'growing_light'=>'0',
          'normal_light'=>'0',
          'ph_control_motor'=>'1',
          'time'=>$currentTime,
          'date'=>$currentDate,
        ]);


        DB::table('reading_records')->insert([

            'water_capacity'=>'100.00',
            'ambient_temperature'=>'100.00',
            'ambient_humidity'=>'100.00',
            'water_temperature'=>'56.00',
            'ph'=>'100.00',
            'ec'=>'100.00',
            'ambient_light'=>'100.00',
            'water_motor'=>'1',
            'nutrition_pump_1'=>'0',
            'nutrition_pump_2'=>'1',
            'fan'=>'1',
            'growing_light'=>'0',
            'normal_light'=>'0',
            'ph_control_motor'=>'1',
            'time'=>$currentTime,
            'date'=>$currentDate,
          ]);


        DB::table('reading_records')->insert([

            'water_capacity'=>'100.00',
            'ambient_temperature'=>'100.00',
            'ambient_humidity'=>'100.00',
            'water_temperature'=>'57.00',
            'ph'=>'100.00',
            'ec'=>'100.00',
            'ambient_light'=>'100.00',
            'water_motor'=>'1',
            'nutrition_pump_1'=>'0',
            'nutrition_pump_2'=>'1',
            'fan'=>'1',
            'growing_light'=>'0',
            'normal_light'=>'0',
            'ph_control_motor'=>'1',
            'time'=>$currentTime,
            'date'=>$currentDate,
          ]);

          DB::table('reading_records')->insert([

      'water_capacity'=>'100.00',
      'ambient_temperature'=>'100.00',
      'ambient_humidity'=>'100.00',
      'water_temperature'=>'76.00',
      'ph'=>'100.00',
      'ec'=>'100.00',
      'ambient_light'=>'100.00',
      'water_motor'=>'1',
      'nutrition_pump_1'=>'0',
      'nutrition_pump_2'=>'1',
      'fan'=>'1',
      'growing_light'=>'0',
      'normal_light'=>'0',
      'ph_control_motor'=>'1',
      'time'=>$currentTime,
      'date'=>$currentDate,
    ]);

    DB::table('reading_records')->insert([

  'water_capacity'=>'100.00',
  'ambient_temperature'=>'68.00',
  'ambient_humidity'=>'100.00',
  'water_temperature'=>'100.00',
  'ph'=>'100.00',
  'ec'=>'100.00',
  'ambient_light'=>'100.00',
  'water_motor'=>'1',
  'nutrition_pump_1'=>'0',
  'nutrition_pump_2'=>'1',
  'fan'=>'1',
  'growing_light'=>'0',
  'normal_light'=>'0',
  'ph_control_motor'=>'1',
  'time'=>$currentTime,
  'date'=>$currentDate,
]);

DB::table('reading_records')->insert([

'water_capacity'=>'100.00',
'ambient_temperature'=>'26.00',
'ambient_humidity'=>'100.00',
'water_temperature'=>'100.00',
'ph'=>'100.00',
'ec'=>'100.00',
'ambient_light'=>'100.00',
'water_motor'=>'1',
'nutrition_pump_1'=>'0',
'nutrition_pump_2'=>'1',
'fan'=>'1',
'growing_light'=>'0',
'normal_light'=>'0',
'ph_control_motor'=>'1',
'time'=>$currentTime,
'date'=>$currentDate,
]);


DB::table('reading_records')->insert([

'water_capacity'=>'100.00',
'ambient_temperature'=>'47.00',
'ambient_humidity'=>'100.00',
'water_temperature'=>'100.00',
'ph'=>'100.00',
'ec'=>'100.00',
'ambient_light'=>'100.00',
'water_motor'=>'1',
'nutrition_pump_1'=>'0',
'nutrition_pump_2'=>'1',
'fan'=>'1',
'growing_light'=>'0',
'normal_light'=>'0',
'ph_control_motor'=>'1',
'time'=>$currentTime,
'date'=>$currentDate,
]);


DB::table('reading_records')->insert([

'water_capacity'=>'100.00',
'ambient_temperature'=>'58.00',
'ambient_humidity'=>'100.00',
'water_temperature'=>'100.00',
'ph'=>'100.00',
'ec'=>'100.00',
'ambient_light'=>'100.00',
'water_motor'=>'1',
'nutrition_pump_1'=>'0',
'nutrition_pump_2'=>'1',
'fan'=>'1',
'growing_light'=>'0',
'normal_light'=>'0',
'ph_control_motor'=>'1',
'time'=>$currentTime,
'date'=>$currentDate,
]);

DB::table('reading_records')->insert([

'water_capacity'=>'100.00',
'ambient_temperature'=>'100.00',
'ambient_humidity'=>'100.00',
'water_temperature'=>'36.00',
'ph'=>'100.00',
'ec'=>'100.00',
'ambient_light'=>'100.00',
'water_motor'=>'1',
'nutrition_pump_1'=>'0',
'nutrition_pump_2'=>'1',
'fan'=>'1',
'growing_light'=>'0',
'normal_light'=>'0',
'ph_control_motor'=>'1',
'time'=>$currentTime,
'date'=>$currentDate,
]);   DB::table('reading_records')->insert([

'water_capacity'=>'100.00',
'ambient_temperature'=>'100.00',
'ambient_humidity'=>'100.00',
'water_temperature'=>'78.00',
'ph'=>'100.00',
'ec'=>'100.00',
'ambient_light'=>'100.00',
'water_motor'=>'1',
'nutrition_pump_1'=>'0',
'nutrition_pump_2'=>'1',
'fan'=>'1',
'growing_light'=>'0',
'normal_light'=>'0',
'ph_control_motor'=>'1',
'time'=>$currentTime,
'date'=>$currentDate,
]);
DB::table('reading_records')->insert([

'water_capacity'=>'100.00',
'ambient_temperature'=>'100.00',
'ambient_humidity'=>'100.00',
'water_temperature'=>'68.00',
'ph'=>'100.00',
'ec'=>'100.00',
'ambient_light'=>'100.00',
'water_motor'=>'1',
'nutrition_pump_1'=>'0',
'nutrition_pump_2'=>'1',
'fan'=>'1',
'growing_light'=>'0',
'normal_light'=>'0',
'ph_control_motor'=>'1',
'time'=>$currentTime,
'date'=>$currentDate,
]);   DB::table('reading_records')->insert([

'water_capacity'=>'100.00',
'ambient_temperature'=>'45.00',
'ambient_humidity'=>'100.00',
'water_temperature'=>'45.00',
'ph'=>'100.00',
'ec'=>'100.00',
'ambient_light'=>'100.00',
'water_motor'=>'1',
'nutrition_pump_1'=>'0',
'nutrition_pump_2'=>'1',
'fan'=>'1',
'growing_light'=>'0',
'normal_light'=>'0',
'ph_control_motor'=>'1',
'time'=>$currentTime,
'date'=>$currentDate,
]);
    }
}
