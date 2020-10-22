<?php

use Illuminate\Database\Seeder;

class AccountSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'user_id' => 1,
                'acct_name' => 'hannako',
                'init_invest' => 10000,
                'start_date' => '2020-12-11',
                'remarks' => 'dont through fixer'
            ],
            [
                'user_id' => 2,
                'acct_name' => 'cy',
                'init_invest' => 23512,
                'start_date' => '2018-09-12',
                'remarks' => 'dont through fixer'
            ],
            [
                'user_id' => 3,
                'acct_name' => 'ajsopro',
                'init_invest' => 25321,
                'start_date' => '2019-01-03',
                'remarks' => 'dont through fixer'

            ]
        ];
        foreach($data as $acc){
            \App\Account::create($acc);
        }
    }
}
