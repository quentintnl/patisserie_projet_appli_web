<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class IngredientsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $datas = [
            "lait",
            "nutella",
            "chocolat",
            "petit pois"
        ];
        foreach($datas as $data) {
            \DB::table('ingredients')->insert(['name'=>$data]);
        }
    }
}
