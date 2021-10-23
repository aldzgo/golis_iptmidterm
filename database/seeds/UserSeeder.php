<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
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
                'lname' => 'Golis',
                'fname' => 'Aldri John',
                'address' => 'Pooc Oriental, Tubigon, Bohol',
                'phone' => '0948.865.9720',
                'email' => 'golis@yahoo.com',
                'password' => bcrypt('aldri123')
            ],
            [
                'lname' => 'Belida',
                'fname' => 'Ike',
                'address' => 'Panaytayon, Tubigon, Bohol',
                'phone' => '0931.987.1375',
                'email' => 'ike@yahoo.com',
                'password' => bcrypt('thenoob')
            ],
            [
                'lname' => 'Atabelo',
                'fname' => 'Godwin',
                'address' => 'Pooc Oriental, Tubigon, Bohol',
                'phone' => '0918.323.9821',
                'email' => 'godwin@yahoo.com',
                'password' => bcrypt('god666')
            ]
        ];

        foreach($data as $user){
            \App\User::create($user);
        }
    }
}
