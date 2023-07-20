<?php

namespace Database\Seeders;

use Database\Factories\EstudioFactory;
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
        // \App\Models\User::factory(10)->create();
        EstudioFactory::factoryForModel('Estudio')->count(2)->create();
    }
}
