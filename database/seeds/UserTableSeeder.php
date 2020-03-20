<?php

use Illuminate\Database\Seeder;
use App\User;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::truncate();
        $faker = \Faker\Factory::create();

        $users = [
            [
                'name' =>  'Muiz Ahmed',
                'email' => 'muizxzer07@gmail.com',
                'password' => 'patient@123',
            ],
            [
                'name' =>  $faker->name,
                'email' => $faker->email,
                'password' => 'patient@123',
            ],
            [
                'name' =>  $faker->name,
                'email' => $faker->email,
                'password' => 'patient@123',
            ],
            [
                'name' =>  $faker->name,
                'email' => $faker->email,
                'password' => 'patient@123',
            ],
            [
                'name' =>  $faker->name,
                'email' => $faker->email,
                'password' => 'patient@123',
            ],
            [
                'name' =>  $faker->name,
                'email' => $faker->email,
                'password' => 'patient@123',
            ],
            [
                'name' =>  $faker->name,
                'email' => $faker->email,
                'password' => 'patient@123',
            ],
            [
                'name' =>  $faker->name,
                'email' => $faker->email,
                'password' => 'patient@123',
            ],
        ];

        foreach ($users as $user){
            User::create($user);
        }
    }
}
