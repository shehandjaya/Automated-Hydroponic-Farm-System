<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(ButtonSeeder::class);
        $this->call(ItemSeeder::class);
        $this->call(UserSeeder::class);
        $this->call(ReadingRecordsSeeder::class);
        $this->call(ReadingUpdatesSeeder::class);
    }
}
