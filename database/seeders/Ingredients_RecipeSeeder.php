<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Ingredients_RecipeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('ingredients_recipes')->insert([
            'ingredient_id'=>'1',
            'recipe_id'=>'1',
            'weight'=>'40gr'
        ]);
    }
}