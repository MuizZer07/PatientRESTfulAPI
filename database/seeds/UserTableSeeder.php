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
                'role' => 1
            ],
            [
                'name' =>  $faker->name,
                'email' => $faker->email,
                'password' => 'patient@123',
                'role' => 2
            ],
            [
                'name' =>  $faker->name,
                'email' => $faker->email,
                'password' => 'patient@123',
                'role' => 3
            ],
            [
                'name' =>  $faker->name,
                'email' => $faker->email,
                'password' => 'patient@123',
                'role' => 2
            ],
            [
                'name' =>  $faker->name,
                'email' => $faker->email,
                'password' => 'patient@123',
                'role' => 2
            ],
            [
                'name' =>  $faker->name,
                'email' => $faker->email,
                'password' => 'patient@123',
                'role' => 2
            ],
            [
                'name' =>  $faker->name,
                'email' => $faker->email,
                'password' => 'patient@123',
                'role' => 2
            ],
            [
                'name' =>  $faker->name,
                'email' => $faker->email,
                'password' => 'patient@123',
                'role' => 2
            ],
        ];

        foreach ($users as $user){
            $new_user = User::create($user);

            if($new_user->role == 2){
                $this->resolve(PermissionRolesTableSeeder::class)->run($new_user->id);
            }
        }
    }
}
