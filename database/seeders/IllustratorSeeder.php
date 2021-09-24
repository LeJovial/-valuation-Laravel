<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class IllustratorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('illustrators')->insert([
            [
                'name' => 'Midam',
            ],
            [
                'name' => 'Bruno Gazzotti',
            ],
            [
                'name' => 'Turk',
            ]
        ]);
    }
}
