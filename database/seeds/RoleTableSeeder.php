<?php

use Illuminate\Database\Seeder;
use App\Role;

class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Role::truncate();

        $roles = [
            [
                'name' => 'Admin'
            ],
            [
                'name' => 'Normal User'
            ],
            [
                'name' => 'Developer'
            ],
        ];

        foreach ($roles as $role){
            Role::create($role);
        }
    }
}
