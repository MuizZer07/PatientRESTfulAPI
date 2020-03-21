<?php

use Illuminate\Database\Seeder;
use App\Permission;

class PermissionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Permission::truncate();

        $roles = [
            [
                'name' => 'Add Single Patient',
                'code' => 'add_single_patient'
            ],
            [
                'name' => 'Remove Single Patient',
                'code' => 'remove_single_patient'
            ],
            [
                'name' => 'Edit Single Patient',
                'code' => 'edit_single_patient'
            ],
            [
                'name' => 'View Single Patients',
                'code' => 'view_multiple_patients'
            ],
            [
                'name' => 'Add Multiple Patients',
                'code' => 'add_multiple_patients'
            ],
            [
                'name' => 'Remove Multiple Patients',
                'code' => 'remove_multiple_patients'
            ],
            [
                'name' => 'Edit Multiple Patients',
                'code' => 'edit_multiple_patients'
            ],
            [
                'name' => 'View All Patients',
                'code' => 'view_all_patients'
            ],
        ];

        foreach ($roles as $role){
            Permission::create($role);
        }
    }
}
