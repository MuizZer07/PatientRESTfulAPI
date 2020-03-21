<?php

use Illuminate\Database\Seeder;
use App\PermissionRole;
use Illuminate\Support\Facades\Auth;

class PermissionRolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run($user_id = null)
    {
        var_dump($user_id);
        if($user_id == null){
            $user_id = Auth::user()->id;
        }

        $permission_roles = [
            [
                'permission_id' => 1,
                'user_id' => $user_id
            ],
            [
                'permission_id' => 2,
                'user_id' => $user_id
            ],
            [
                'permission_id' => 3,
                'user_id' => $user_id
            ],
            [
                'permission_id' => 4,
                'user_id' => $user_id
            ],
            [
                'permission_id' => 8,
                'user_id' => $user_id
            ],
        ];

        foreach($permission_roles as $permission_role){
            PermissionRole::create($permission_role);
        }
    }
}
