<?php

use Illuminate\Database\Seeder;

class DemoUsers extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([

            
[
    'id' => '1',
    'name' => 'Super Admin',
    'email' => 'admin@advancedassessment.com.ng',
    'email_verified_at' => '2020-07-01',
    'password' => Hash::make('passmyword2020'),
    'role' => 'admin',
    'type' => 'standard',
    'payment_status' => 'paid',
    'status' => 'unverified',
    'remember_token' => null,
    'created_at' => now(),
    'updated_at' => now(),
    ],
    
    [
    'id' => '2',
    'name' => 'School Admin',
    'email' => 'schooladmin@advancedassessment.com.ng',
    'email_verified_at' => '2020-07-01',
    'password' => Hash::make('passmyword2020'),
    'role' => 'partners',
    'type' => 'standard',
    'payment_status' => 'unpaid',
    'status' => 'unverified',
    'remember_token' => null,
    'created_at' => now(),
    'updated_at' => now(),
    ],
    
    [
    'id' => '3',
    'name' => 'Victor Asuquo',
    'email' => 'victorasuquob@gmail.com',
    'email_verified_at' => '2020-07-01',
    'password' => Hash::make('passmyword2020'),
    'role' => 'user',
    'type' => 'standard',
    'payment_status' => 'unpaid',
    'status' => 'unverified',
    'remember_token' => null,
    'created_at' => now(),  
    'updated_at' => now(),
    ],
    
    
        ]);
    }
}
