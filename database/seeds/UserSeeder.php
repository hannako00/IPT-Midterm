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
                'lname' => 'Blantucas',
                'fname' => 'Hanna Jane',
                'address' => 'Panadtaran, Bohol',
                'phone' => '09123456789',
                'email' => 'hanna@gmail.com',
                'password' => bcrypt('password123')
            ],

            [
                'lname' => 'Cabahug',
                'fname' => 'Cyreen',
                'address' => 'Dauis, Bohol',
                'phone' => '09215562342',
                'email' => 'cy@gmail.com',
                'password' => bcrypt('password123')
            ],

            [
                'lname' => 'Orcullo',
                'fname' => 'Alvin',
                'address' => 'Macaas, Tubigon',
                'phone' => '09215533217',
                'email' => 'alvin@gmail.com',
                'password' => bcrypt('password123')

            ]
        ];

        foreach($data as $usr){
            \App\User::create($usr);
        }
    }
}
