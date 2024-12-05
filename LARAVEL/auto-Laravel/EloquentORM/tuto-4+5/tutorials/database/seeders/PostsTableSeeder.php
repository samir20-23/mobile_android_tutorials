<?php

namespace Database\Seeders;
use App\Models\Post ;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PostsTableSeeder extends Seeder
{
   
    public function run(): void
    {
        //
        Post::firstOrCreate(
            [
                "title" => 'le titre de post ' ,
                'body' => 'Contenu du premier post',
                'category_id' => 3,
            ]
        );
    }
}
