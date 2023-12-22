<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\reading_update;
use App\Models\reading_record;

class ReadingRecordUpdater extends Command
{


    protected $signature = 'update:reading-record';
    protected $description = 'Update reading_records table with data from reading_updates every 5 seconds';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
            // Fetch the latest row from reading_updates
            $latestReadingUpdate = reading_update::latest()->first();

            // Insert the data into reading_records
            reading_record::create([
                'water_capacity' => $latestReadingUpdate->water_capacity,
                'ambient_temperature' => $latestReadingUpdate->ambient_temperature,
                'ambient_humidity' => $latestReadingUpdate->ambient_humidity,
                'water_temperature' => $latestReadingUpdate->water_capacity,
                'ph' => $latestReadingUpdate->ambient_temperature,
                'ec' => $latestReadingUpdate->ambient_humidity,
                'ambient_light' => $latestReadingUpdate->water_capacity,
                'water_motor' => $latestReadingUpdate->ambient_temperature,
                'nutrition_pump_1' => $latestReadingUpdate->ambient_humidity,
                'nutrition_pump_2' => $latestReadingUpdate->water_capacity,
                'fan' => $latestReadingUpdate->ambient_temperature,
                'growing_light' => $latestReadingUpdate->ambient_humidity,
                'normal_light' => $latestReadingUpdate->water_capacity,
                'ph_control_motor' => $latestReadingUpdate->ambient_temperature,
                'time' => $latestReadingUpdate->ambient_humidity,
                'date' => $latestReadingUpdate->ambient_humidity,

            ]);

            $this->info('Reading record updated successfully!');
    }
}
