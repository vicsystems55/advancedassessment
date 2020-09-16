<?php

use Illuminate\Database\Seeder;

class DemoLoanApplications extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('loan_applications')->insert([

            [
                
                'user_id' => '1',
                'status' => 'approved',
                'amount_request' => '100000000',
                'loan_schedule_id' => '1',
                'created_at' => now(),
                'updated_at' => now()
            ],

            [
                
                'user_id' => '2',
                'status' => 'pending',
                'amount_request' => '400000000',
                'loan_schedule_id' => '4',
                'created_at' => now(),
                'updated_at' => now()
            ],

            [
                
                'user_id' => '3',
                'status' => 'cancelled',
                'amount_request' => '550000000',
                'loan_schedule_id' => '7',
                'created_at' => now(),
                'updated_at' => now()
            ],

            [
                
                'user_id' => '4',
                'status' => 'approved',
                'amount_request' => '450000000',
                'loan_schedule_id' => '5',
                'created_at' => now(),
                'updated_at' => now()
            ],

            

        ]);
        
    }
}
