<?php

use Illuminate\Database\Seeder;

use App\HookeVariation;

class HookeValue extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\HookeVariation::class, 10)->create();
    }
}
