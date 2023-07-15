<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EmployeesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
         DB::table('employees')->insert([
            [
                'fullname' => 'ammarin pansai',
                'gender' => 'male',
                'email' => 'ammarin@email.com',
                'tel' => '0888888888',
                'age' => 30,
                'address' => '8/80 m.1 bangkok',
                'avartar' => 'test.jpg',
                'status' => 1
            ],
            [
                'fullname' => 'Test Test',
                'gender' => 'male',
                'email' => 'test1@email.com',
                'tel' => '0888888888',
                'age' => 30,
                'address' => '8/80 m.1 bangkok',
                'avartar' => 'test.jpg',
                'status' => 1
            ],
            [
                'fullname' => 'Test Test',
                'gender' => 'male',
                'email' => 'test2@email.com',
                'tel' => '0888888888',
                'age' => 30,
                'address' => '8/80 m.1 bangkok',
                'avartar' => 'test.jpg',
                'status' => 1
            ]
            ]
        );

    }
}
