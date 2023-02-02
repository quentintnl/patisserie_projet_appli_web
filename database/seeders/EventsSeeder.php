<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EventsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $datas = [
            "Anniversaire",
            "noel",
            "enterrement",
            "paques"
        ];
        foreach($datas as $data) {
            \DB::table('events')->insert(['name'=>$data]);
        }
    }
}
