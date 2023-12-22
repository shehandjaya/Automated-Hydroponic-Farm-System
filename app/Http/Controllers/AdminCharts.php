<?php

namespace App\Http\Controllers;
use App\Models\reading_record;

use Illuminate\Http\Request;

class AdminCharts extends Controller
{
    // function adminMeterIndex(){
    //     $data = reading_record::all();
    //     $groupedData = $data->groupBy('date');

    //     $averages = [];
    //     foreach ($groupedData as $date => $records) {
    //         $totalTemperature = $records->sum('water_temperature');
    //         $averageTemperature = $totalTemperature / $records->count();

    //         $averages[] = [
    //             'date' => $date,
    //             'water_temperature' => $averageTemperature,
    //         ];
    //     }

    //     return view('admin.charts.meterIndex')->with('data', $averages);

    // }

    function adminMeterIndex(){
        $data = reading_record::all();
        $groupedData = $data->groupBy('date');

        $averages = [];
        foreach ($groupedData as $date => $records) {
            $totalTemperature = $records->sum('water_temperature');
            $averageTemperature = $totalTemperature / $records->count();

            $totalHumidity = $records->sum('ambient_humidity');
            $averageHumidity = $totalHumidity / $records->count();

            $totalPh = $records->sum('ph');
            $averagePh = $totalPh / $records->count();

            $totalEc = $records->sum('ec');
            $averageEc = $totalEc / $records->count();

            $totalLight = $records->sum('ambient_light');
            $averageLight = $totalLight / $records->count();

            $averages[] = [
                'date' => $date,
                'water_temperature' => $averageTemperature,
                'ambient_humidity' => $averageHumidity,
                'ph' => $averagePh,
                'ec' => $averageEc,
                'ambient_light' => $averageLight,
            ];
        }

        return view('admin.charts.meterIndex')->with('data', $averages);
    }

}
