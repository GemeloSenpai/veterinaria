<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Persona;

class PersonasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //factory(App\Models\Persona::class, 1000)->create();

        //\App\Models\Persona::factory(1000)->create();

        Persona::Factory(1000)->create();

    }
}
