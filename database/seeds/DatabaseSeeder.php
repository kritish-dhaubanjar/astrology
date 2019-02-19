<?php

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
        DB::table('users')->insert([
            'name' => 'John Doe',
            'email' =>'kritish.dhaubanjar@gmail.com',
            'password' => '$2y$10$RA.ZTgwdkpwALQwsEaHJS.3JTH3cSdLvfixqJibvA0LaXT8C1B4UW',
        ]);               
    }
}