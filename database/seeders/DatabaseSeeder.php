<?php

namespace Database\Seeders;

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

        //Metodo enseñado por el lic
        /*
         *
        $this->call(PersonasTableSeeder::class);
        $this->call(MascotasTableSeeder::class);
        $this->call(CostosTableSeeder::class);
        */

        $this->call([
            PersonasTableSeeder::class,
            MascotasTableSeeder::class,
            CostosTableSeeder::class
            ]);
    }
}
