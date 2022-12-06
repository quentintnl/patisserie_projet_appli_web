<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            RecipesSeeder::class,
            IngredientsSeeder::class,
            CategoriesSeeder::class,
            EventsSeeder::class,
            Ingredients_RecipeSeeder::class,
            Events_RecipeSeeder::class,
            UsersSeeder::class,
            Categories_RecipeSeeder::class
        ]);
    }
}
