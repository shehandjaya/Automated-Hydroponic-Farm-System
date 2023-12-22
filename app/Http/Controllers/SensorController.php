<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


use App\Models\reading_update;
use App\Models\reading_record;

class SensorController extends Controller
{
    public function updateSensorData(Request $request)
    {
        // Retrieve the POST data
        // $data = $request->all();
        $data = [
            'id' => '1',
            'board'=>'esp32',
            'water_capacity' => 80.5,
            'ambient_temperature' => 25,
            'ambient_humidity' => 60,
            'water_temperature' => 22,
            'ph' => 6,
            'ec' => 1,
            'ambient_light' => 100,
            'water_motor' => 1,
            'nutrition_pump_1' => 0,
            'nutrition_pump_2' => 1,
            'fan' => 1,
            'growing_light' => 0,
            'normal_light' => 1,
            'ph_control_motor' => 1,
            'time' => '14:30:00',
            'date' => '2023-10-04',
        ];

        // Get the current time and date
        $tm = now();
        $dt = now();

        // Update the data in the database (assuming ReadingUpdate model)
        reading_update::where('id', $data['id'])->update([
            'water_capacity' => $data['water_capacity'],
            'ambient_temperature' => $data['ambient_temperature'],
            'ambient_humidity' => $data['ambient_humidity'],
            'water_temperature' => $data['water_temperature'],
            'ph' => $data['ph'],
            'ec' => $data['ec'],
            'ambient_light' => $data['ambient_light'],
            'water_motor' => $data['water_motor'],
            'nutrition_pump_1' => $data['nutrition_pump_1'],
            'nutrition_pump_2' => $data['nutrition_pump_2'],
            'fan' => $data['fan'],
            'growing_light' => $data['growing_light'],
            'normal_light' => $data['normal_light'],
            'ph_control_motor' => $data['ph_control_motor'],
            'time' => $tm,
            'date' => $dt,
        ]);

        // Create a new unique ID (assuming ReadingRecord model)
        $id_key = $this->generateStringId(10);

        // Check if the generated ID is unique
        while (reading_record::where('id', $id_key)->exists()) {
            $id_key = $this->generateStringId(10);
        }

        // Insert data into the database (assuming ReadingRecord model)
        reading_record::create([
            //'id' => $id_key,
            'board' => $data['board'],
            'water_capacity' => $data['water_capacity'],
            'ambient_temperature' => $data['ambient_temperature'],
            'ambient_humidity' => $data['ambient_humidity'],
            'water_temperature' => $data['water_temperature'],
            'ph' => $data['ph'],
            'ec' => $data['ec'],
            'ambient_light' => $data['ambient_light'],
            'water_motor' => $data['water_motor'],
            'nutrition_pump_1' => $data['nutrition_pump_1'],
            'nutrition_pump_2' => $data['nutrition_pump_2'],
            'fan' => $data['fan'],
            'growing_light' => $data['growing_light'],
            'normal_light' => $data['normal_light'],
            'ph_control_motor' => $data['ph_control_motor'],
            'time' => $tm,
            'date' => $dt,
        ]);

        return response()->json(['message' => 'Data updated and recorded successfully']);
    }

    private function generateStringId($strength = 16)
    {
        $permittedChars = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        return substr(str_shuffle($permittedChars), 0, $strength);
    }
}
