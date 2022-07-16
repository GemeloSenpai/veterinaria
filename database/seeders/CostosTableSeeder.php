<?php

namespace Database\Seeders;
use App\Models\Costo;

use Illuminate\Database\Seeder;

class CostosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //factory(App\Models\Costo::class, 1000)->create();

       // \App\Models\Costo::factory(1000)->create();

        Costo::Factory(1000)->create();
    }
}
