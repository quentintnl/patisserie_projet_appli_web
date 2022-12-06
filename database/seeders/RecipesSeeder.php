<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RecipesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('recipes')->insert([
            'name'=>'Choux à la crème',
            'manufacturing_process'=>'Mettre le lait a chauffer',
            'preparation_time'=>'20min',
            'cooking_time'=>'15min',
            'conservation_council'=>'Garder 24h',
            'nbr_people'=>'4 personne',
            'photo'=>'Blabla',
        ]);
    }
}
