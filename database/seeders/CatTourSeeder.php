<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CatTourSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('category_tours')->insert([
            'cat_name' => 'Leiture Travel',
        ]);

        DB::table('category_tours')->insert([
            'cat_name' => 'Adventure Travel',
        ]);

        DB::table('category_tours')->insert([
            'cat_name' => 'Diving Tour',
        ]);
    }
}
