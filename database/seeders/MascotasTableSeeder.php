<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Mascota;

class MascotasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //factory(App\Models\Mascota::class, 1000)->create();

        //\App\Models\Mascota::Factory(1000)->create();

        Mascota::Factory(1000)->create();
    }
}
