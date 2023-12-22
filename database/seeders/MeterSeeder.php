<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MeterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('meters')->insert([
            'name' => 'water capacity',
            'status' => '1',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('meters')->insert([
            'name' => 'ambient temperature',
            'status' => '1',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('meters')->insert([
            'name' => 'ambient humidity',
            'status' => '1',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('meters')->insert([
            'name' => 'water temperature ',
            'status' => '1',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('meters')->insert([
            'name' => 'ph',
            'status' => '1',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('meters')->insert([
            'name' => 'ec',
            'status' => '1',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('meters')->insert([
            'name' => ' ambient light',
            'status' => '1',
            'created_at' => now(),
            'updated_at' => now()
        ]);

    }
}
