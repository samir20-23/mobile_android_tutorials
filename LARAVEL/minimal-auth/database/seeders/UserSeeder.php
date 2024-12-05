<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::updateOrCreate(
            ['email' => 'germanysamir1@gmail.com'], // Match on this field
            [
                'name' => 'samir',
                'password' => bcrypt('samir'), // Update or insert
            ]
        );
    }
    
}