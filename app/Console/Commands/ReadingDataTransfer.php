<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\reading_update;
use App\Models\reading_record;

class ReadingDataTransfer extends Command
{
    protected $signature = 'reading:data-transfer';
    protected $description = 'Transfer data from reading_updates to reading_records';

    public function handle()
    {


                // Get the latest row from reading_updates
                $latestReadingUpdate = reading_update::latest()->first();

                // Check if there is any data to transfer
                if ($latestReadingUpdate) {
                    // Create a new ReadingRecord using the data from the latest ReadingUpdate
                    $newReadingRecord = new reading_record([
                        'water_capacity' => $latestReadingUpdate->water_capacity,
                        'ambient_temperature' => $latestReadingUpdate->ambient_temperature,
                        'ambient_humidity' => $latestReadingUpdate->ambient_humidity,
                        'water_temperature' => $latestReadingUpdate->water_temperature,
                        'ph' => $latestReadingUpdate->ph,
                        'ec' => $latestReadingUpdate->ec,
                        'ambient_light' => $latestReadingUpdate->ambient_light,
                        'water_motor' => $latestReadingUpdate->water_motor,
                        'nutrition_pump_1' => $latestReadingUpdate->nutrition_pump_1,
                        'nutrition_pump_2' => $latestReadingUpdate->nutrition_pump_2,
                        'fan' => $latestReadingUpdate->fan,
                        'growing_light' => $latestReadingUpdate->growing_light,
                        'normal_light' => $latestReadingUpdate->normal_light,
                        'ph_control_motor' => $latestReadingUpdate->ph_control_motor,
                        'time' => $latestReadingUpdate->time,
                        'date' => $latestReadingUpdate->date,
                    ]);

                    // Save the new ReadingRecord
                    $newReadingRecord->save();

                    $this->info('Data transferred successfully!');
                } else {
                    $this->info('No data to transfer.');
                }
    }
}
