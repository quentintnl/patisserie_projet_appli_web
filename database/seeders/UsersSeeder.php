<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('users')->insert([
            'name'=>'DUPOND',
            'email'=>\Str::random(12) . '@gmail.com',
            'password' => bcrypt('123456'),
            // 'user_type'=>'1'
        ]);
    }
}
