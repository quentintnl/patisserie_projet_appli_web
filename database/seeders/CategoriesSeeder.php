<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $datas = [
            "fruit",
            "legume",
            "viande",
            "vegan"
        ];
        foreach($datas as $data) {
            \DB::table('categories')->insert(['name'=>$data]);
        }
    }
}