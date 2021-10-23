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
                'acct_name' => 'Aldri Account',
                'init_invest' => 666737.00,
                'start_date' => '2020-01-03',
                'remarks' => 'Done with normal transaction'
            ],
            [
                'user_id' => 2,
                'acct_name' => 'Ike Account',
                'init_invest' => 420232.00,
                'start_date' => '2020-06-21',
                'remarks' => 'Done with normal transaction'
            ],
            [
                'user_id' => 3,
                'acct_name' => 'Godwin Account	',
                'init_invest' => 112453.00,
                'start_date' => '2020-10-06',
                'remarks' => 'Done with normal transaction'
            ]
        ];

        foreach($data as $acc){
            \App\Account::create($acc);
        }
    }
}
