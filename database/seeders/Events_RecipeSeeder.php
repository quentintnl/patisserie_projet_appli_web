<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Events_RecipeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        \DB::table('events_recipes')->insert([
            'event_id'=>'1',
            'recipe_id'=>'1',
        ]);

        \DB::table('events_recipes')->insert([
            'event_id'=>'2',
            'recipe_id'=>'2',
        ]);

        \DB::table('events_recipes')->insert([
            'event_id'=>'3',
            'recipe_id'=>'3',
        ]);

        \DB::table('events_recipes')->insert([
            'event_id'=>'4',
            'recipe_id'=>'4',
        ]);
    }
}
