<?php

use Illuminate\Database\Seeder;

class WeightDeviation extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('weight_deviations')->insert([

            
            [
            'weight1' => '5',
            'change_' => '2',
            ],

            [
            'weight1' => '10',
            'change_' => '3',
            ],
            [
            'weight1' => '15',
            'change_' => '4',
            ],

            [
            'weight1' => '20',
            'change_' => '5',
            ],
            [
            'weight1' => '25',
            'change_' => '6',
            ],

            [
            'weight1' => '30',
            'change_' => '7',
            ],
            [
            'weight1' => '35',
            'change_' => '8',
            ],

            [
            'weight1' => '40',
            'change_' => '9',
            ],

            [
            'weight1' => '45',
            'change_' => '10',
            ],

            [
            'weight1' => '50',
            'change_' => '11',
            ],

            [
            'weight1' => '60',
            'change_' => '12',
            ],

            [
            'weight1' => '65',
            'change_' => '13',
            ],
            [
            'weight1' => '65',
            'change_' => '14',
            ],
            [
            'weight1' => '70',
            'change_' => '15',
            ],

            [
            'weight1' => '75',
            'change_' => '16',
            ],
                
               
                
                
                
                
            ]);
    }
}
