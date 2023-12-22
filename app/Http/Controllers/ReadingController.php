<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\reading_update;
class ReadingController extends Controller
{
    public function getReading(Request $request)
    {
        $id =  "1";
        // Assuming you have a "Reading" model representing your table.
        $reading = reading_update::find($id);
        if (!$reading) {
            return response()->json(['error' => 'Reading not found'], 404);
        }
        $date = date_create($reading->date);
        $dateFormat = date_format($date, "d-m-Y");
        $myObj = [
            'id' => $reading->id,
            'water_capacity' => $reading->water_capacity,
            'ambient_temperature' => $reading->ambient_temperature,
            'ambient_humidity' => $reading->ambient_humidity,
            'water_temperature' => $reading->water_temperature,
            'ph' => $reading->ph,
            'ec' => $reading->ec,
            'water_motor' => $reading->water_motor,
            'nutrition_pump_1' => $reading->nutrition_pump_1,
            'nutrition_pump_2' => $reading->nutrition_pump_2,
            'fan' => $reading->fan,
            'growing_light' => $reading->growing_light,
            'normal_light' => $reading->normal_light,
            'ph_control_motor' => $reading->ph_control_motor,
            'ls_time' => $reading->time,
            'ls_date' => $dateFormat,
        ];
        return response()->json($myObj);
    }
}
