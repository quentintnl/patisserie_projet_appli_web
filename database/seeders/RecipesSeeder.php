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
                'name'=>'Choux',
                'manufacturing_process'=>'Congeler',
                'preparation_time'=>'20min',
                'cooking_time'=>'15min',
                'conservation_council'=>'Garder 24h',
                'nbr_people'=>'4 personne',
                'photo'=>'toto'
            ]);

            \DB::table('recipes')->insert([
                'name'=>'Fraise',
                'manufacturing_process'=>'Couper',
                'preparation_time'=>'30min',
                'cooking_time'=>'25min',
                'conservation_council'=>'Garder 34h',
                'nbr_people'=>'6 personne',
                'photo'=>'titi'
            ]);

            \DB::table('recipes')->insert([
                'name'=>'Tomate',
                'manufacturing_process'=>'Cuire',
                'preparation_time'=>'40min',
                'cooking_time'=>'45min',
                'conservation_council'=>'Garder 44h',
                'nbr_people'=>'8 personne',
                'photo'=>'tutu'
            ]);

            \DB::table('recipes')->insert([
                'name'=>'Pomme',
                'manufacturing_process'=>'Bouillir',
                'preparation_time'=>'50min',
                'cooking_time'=>'55min',
                'conservation_council'=>'Garder 54h',
                'nbr_people'=>'10 personne',
                'photo'=>'tata'
            ]);
    }
}
