<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'admin',
            'fname'=> 'Anupama',
            'lname'=> 'Botheju',
            'address1'=> '',
            'address2'=> '',
            'address3'=> '',
            'B_date'=> '2023-10-01',
            'gender'=> '', 
            'email' => 'admin@gmail.com',
            'avatar' => '/images/defult-avatar.png',
            'email_verified_at'=> now(),
            'password' => bcrypt('password'),
            'role'=> "admin",
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('users')->insert([
            'name' => 'director',
            'fname'=> 'Shanaka',
            'lname'=> 'Botheju',
            'address1'=> '',
            'address2'=> '',
            'address3'=> '',
            'B_date'=> '2023-10-01',
            'gender'=> '', 
            'email' => 'director@gmail.com',
            'avatar' => '/images/defult-avatar.png',
            'email_verified_at'=> now(),
            'password' => bcrypt('password'),
            'role'=> "director",
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('users')->insert([
            'name' => 'cEngineer',
            'fname'=> 'Anupama',
            'lname'=> 'Botheju',
            'address1'=> '',
            'address2'=> '',
            'address3'=> '',
            'B_date'=> '2023-10-03',
            'gender'=> '', 
            'email' => 'cEngineer@gmail.com',
            'avatar' => '/images/defult-avatar.png',
            'email_verified_at'=> now(),
            'password' => bcrypt('password'),
            'role'=> "cEngineer",
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('users')->insert([
            'name' => 'user',
            'fname'=> 'Anupama',
            'lname'=> 'Botheju',
            'address1'=> '',
            'address2'=> '',
            'address3'=> '',
            'B_date'=> '2023-10-01',
            'gender'=> '', 
            'email' => 'user@gmail.com',
            'avatar' => '/images/defult-avatar.png',
            'email_verified_at'=> now(),
            'password' => bcrypt('password'),
            'role'=> "user",
            'created_at' => now(),
            'updated_at' => now()
        ]);
    }
}
