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

        \DB::table('ingredients_recipes')->insert([
            'ingredient_id'=>'2',
            'recipe_id'=>'2',
            'weight'=>'50gr'
        ]);

        \DB::table('ingredients_recipes')->insert([
            'ingredient_id'=>'3',
            'recipe_id'=>'3',
            'weight'=>'60gr'
        ]);

        \DB::table('ingredients_recipes')->insert([
            'ingredient_id'=>'4',
            'recipe_id'=>'4',
            'weight'=>'70gr'
        ]);


        // \DB::table('ingredients_recipes')->insert(['ingredient_id'=>'2']);
        // \DB::table('ingredients_recipes')->insert(['ingredient_id'=>'3']);
        // \DB::table('ingredients_recipes')->insert(['ingredient_id'=>'4']);

        // \DB::table('ingredients_recipes')->insert(['recipe_id'=>'1']);
        // \DB::table('ingredients_recipes')->insert(['recipe_id'=>'2']);
        // \DB::table('ingredients_recipes')->insert(['recipe_id'=>'3']);
        // \DB::table('ingredients_recipes')->insert(['recipe_id'=>'4']);

        // \DB::table('ingredients_recipes')->insert(['weight'=>'40gr']);
        // \DB::table('ingredients_recipes')->insert(['weight'=>'50gr']);
        // \DB::table('ingredients_recipes')->insert(['weight'=>'60gr']);
        // \DB::table('ingredients_recipes')->insert(['weight'=>'70gr']);

        // \DB::table('ingredients_recipes')->insert([
        //     'ingredient_id'=>'1','2','3','4',
        //     'recipe_id'=>'1','2','3','4',
        //     'weight'=>'40gr','50gr','60gr','50gr'
        // ]);
    }
}