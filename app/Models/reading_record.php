<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class reading_record extends Model
{
    use HasFactory;
    protected $table = 'reading_records';

    protected $fillable = [
        'board',
        'water_capacity',
        'ambient_temperature',
        'ambient_humidity',
        'water_temperature',
        'ph',
        'ec',
        'ambient_light',
        'water_motor',
        'nutrition_pump_1',
        'nutrition_pump_2',
        'fan',
        'growing_light',
        'normal_light',
        'ph_control_motor',
        'time',
        'date',
    ];
}
