<?php

namespace Database\Seeders;

use App\Models\Genre;
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
        // $this->call(ShopsTableSeeder::class);// \App\Models\User::factory(10)->create();
        $this->call(AreasTableSeeder::class);
        $this->call(GenresTableSeeder::class);
    }
}
