<?php

use Illuminate\Database\Seeder;

class DemoLoanSchedules extends Seeder
{
    /**
     * Run the database seeds.
     * 
     
     
     * @return void
     */
    public function run()
    {
            DB::table('loan_repayment_schedules')->insert([

                [
                'grade_level'=>'7',
                'approved_ceiling'=>'150000000',
                'interest_rate'=>'3',
                'monthly_repayment5'=>'2729258',
                'monthly_repayment10'=>'1465416',
                'monthly_repayment15'=>'1047077',
                'monthly_repayment20'=>'840223',
                'monthly_repayment25'=>'717855',
                ],

                [

                    'grade_level'=>'8',
                    'approved_ceiling'=>'300000000',
                    'interest_rate'=>'3',
                    'monthly_repayment5'=>'5458515',
                    'monthly_repayment10'=>'2930832',
                    'monthly_repayment15'=>'2094153',
                    'monthly_repayment20'=>'1680446',
                    'monthly_repayment25'=>'1435709',
                    
                    ],

                    [
                    
                    'grade_level'=>'9',
                    'approved_ceiling'=>'350000000',
                    'interest_rate'=>'3',
                    'monthly_repayment5'=>'6368268',
                    'monthly_repayment10'=>'3419304',
                    'monthly_repayment15'=>'2443179',
                    'monthly_repayment20'=>'1960521',
                    'monthly_repayment25'=>'1674994',
                    
                    ],

                    [
                    
                    'grade_level'=>'10',
                    'approved_ceiling'=>'400000000',
                    'interest_rate'=>'3',
                    'monthly_repayment5'=>'7278020',
                    'monthly_repayment10'=>'3907777',
                    'monthly_repayment15'=>'2792204',
                    'monthly_repayment20'=>'2240595',
                    'monthly_repayment25'=>'1914279',
                    
                    ],

                    [
                    
                    'grade_level'=>'12',
                    'approved_ceiling'=>'450000000',
                    'interest_rate'=>'3',
                    'monthly_repayment5'=>'8187773',
                    'monthly_repayment10'=>'4396249',
                    'monthly_repayment15'=>'3141230',
                    'monthly_repayment20'=>'2520670',
                    'monthly_repayment25'=>'2153563',
                    
                    ],

                    [
                    
                    'grade_level'=>'13',
                    'approved_ceiling'=>'500000000',
                    'interest_rate'=>'3',
                    'monthly_repayment5'=>'9097526',
                    'monthly_repayment10'=>'4884721',
                    'monthly_repayment15'=>'3490255',
                    'monthly_repayment20'=>'2800744',
                    'monthly_repayment25'=>'2392848',
                    
                    ],

                    [
                    
                    'grade_level'=>'14',
                    'approved_ceiling'=>'550000000',
                    'interest_rate'=>'3',
                    'monthly_repayment5'=>'10007278',
                    'monthly_repayment10'=>'5373193',
                    'monthly_repayment15'=>'3839281',
                    'monthly_repayment20'=>'3080818',
                    'monthly_repayment25'=>'2632133',
                    
                    ],

                    [
                    
                    'grade_level'=>'15',
                    'approved_ceiling'=>'600000000',
                    'interest_rate'=>'3',
                    'monthly_repayment5'=>'10917031',
                    'monthly_repayment10'=>'5861665',
                    'monthly_repayment15'=>'4188306',
                    'monthly_repayment20'=>'3360893',
                    'monthly_repayment25'=>'2871418',
                    
                    ],

                    [
                    
                    'grade_level'=>'16',
                    'approved_ceiling'=>'650000000',
                    'interest_rate'=>'3',
                    'monthly_repayment5'=>'11826783',
                    'monthly_repayment10'=>'6350137',
                    'monthly_repayment15'=>'4537332',
                    'monthly_repayment20'=>'3640967',
                    'monthly_repayment25'=>'3110703',
                    
                    ],

                    [
                    
                    'grade_level'=>'17',
                    'approved_ceiling'=>'800000000',
                    'interest_rate'=>'3',
                    'monthly_repayment5'=>'14556041',
                    'monthly_repayment10'=>'7815553',
                    'monthly_repayment15'=>'5584408',
                    'monthly_repayment20'=>'4481190',
                    'monthly_repayment25'=>'3828557',
            
                    ],  

                    [
                    
                    'grade_level'=>'PS & OTHERS',
                    'approved_ceiling'=>'1500000000',
                    'interest_rate'=>'3',
                    'monthly_repayment5'=>'27292576',
                    'monthly_repayment10'=>'14654162',
                    'monthly_repayment15'=>'10470762',
                    'monthly_repayment20'=>'8402232',
                    'monthly_repayment25'=>'7178545',
                    
                    ],
            ]);
    }
}
