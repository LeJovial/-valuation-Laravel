<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CharacterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('characters')->insert([
            [
                'name' => 'Kid Paddle',
                'date' => 1993,
                'title' => 'Kid Paddle',
                'illustrator_id' => 1
            ],
            [
                'name' => 'Dodji',
                'date' => 2006,
                'title' => 'Seuls',
                'illustrator_id' => 2
            ],
            [
                'name' => 'Le disciple Basile',
                'date' => 1974,
                'title' => 'Léonard',
                'illustrator_id' => 3
            ]
        ]); 
    }
}
