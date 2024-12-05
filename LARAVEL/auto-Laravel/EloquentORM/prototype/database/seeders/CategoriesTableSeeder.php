<?php

namespace Database\Seeders;
use App\Models\Category ;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    public function run(): void
    {
         // Insertion de données directement
        /* 
         Category::firstOrCreate([
            'name' => 'Catégorie 1',
          
        ]);

        Category::firstOrCreate([
            'name' => 'Catégorie 2',
            
        ]);

        Category::firstOrCreate([
            'name' => 'Catégorie 3',
            
        ]); */
        Category::factory()->count(10)->create();
       
    }
}

