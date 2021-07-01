<?php

namespace Database\Seeders;

<<<<<<< HEAD
use App\Models\Tour;
=======
>>>>>>> first commit
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
<<<<<<< HEAD
        // \App\Models\User::factory(10)->create();
        $this->call([
            CatTourSeeder::class,
=======
        $this->call([
>>>>>>> first commit
            TourSeeder::class
        ]);
    }
}
