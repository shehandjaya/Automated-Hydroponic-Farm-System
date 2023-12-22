<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ButtonSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('buttons')->insert([
            'name' => 'water moter',
            'status' => '0',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('buttons')->insert([
            'name' => 'nutrition pump 1',
            'status' => '0',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('buttons')->insert([
            'name' => 'nutrition pump 2 ',
            'status' => '0',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('buttons')->insert([
            'name' => 'fan',
            'status' => '0',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('buttons')->insert([
            'name' => 'Growing Light ',
            'status' => '0',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('buttons')->insert([
            'name' => 'Normal Light',
            'status' => '0',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('buttons')->insert([
            'name' => 'PH control Morter',
            'status' => '0',
            'created_at' => now(),
            'updated_at' => now()
        ]);

    }
}
