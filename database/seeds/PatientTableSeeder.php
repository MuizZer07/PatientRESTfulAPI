<?php

use Illuminate\Database\Seeder;
use App\Patient;

class PatientTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Patient::truncate();
        $faker = \Faker\Factory::create();

        $patients = [
            [
                'first_name' =>  $faker->firstName,
                'last_name' =>  $faker->lastName,
                'age' => 23,
                'on_medication' => false,
                'address' => $faker->address,
                'phone_no' => $faker->phoneNumber,
                'symptoms' => $faker->paragraph,
                'occupation' => 'Student'
            ],
            [
                'first_name' =>  $faker->firstName,
                'last_name' =>  $faker->lastName,
                'age' => 56,
                'on_medication' => false,
                'address' => $faker->address,
                'phone_no' => $faker->phoneNumber,
                'symptoms' => $faker->paragraph,
                'occupation' => 'Service Holder'
            ],
            [
                'first_name' =>  $faker->firstName,
                'last_name' =>  $faker->lastName,
                'age' => 36,
                'on_medication' => false,
                'address' => $faker->address,
                'phone_no' => $faker->phoneNumber,
                'symptoms' => $faker->paragraph,
                'occupation' => 'Service Holder'
            ],
            [
                'first_name' =>  $faker->firstName,
                'last_name' =>  $faker->lastName,
                'age' => 19,
                'on_medication' => false,
                'address' => $faker->address,
                'phone_no' => $faker->phoneNumber,
                'symptoms' => $faker->paragraph,
                'occupation' => 'Student'
            ],
            [
                'first_name' =>  $faker->firstName,
                'last_name' =>  $faker->lastName,
                'age' => 45,
                'on_medication' => false,
                'address' => $faker->address,
                'phone_no' => $faker->phoneNumber,
                'symptoms' => $faker->paragraph,
                'occupation' => 'Service Holder'
            ],
            [
                'first_name' =>  $faker->firstName,
                'last_name' =>  $faker->lastName,
                'age' => 51,
                'on_medication' => false,
                'address' => $faker->address,
                'phone_no' => $faker->phoneNumber,
                'symptoms' => $faker->paragraph,
                'occupation' => 'Service Holder'
            ],
            [
                'first_name' =>  $faker->firstName,
                'last_name' =>  $faker->lastName,
                'age' => 34,
                'on_medication' => false,
                'address' => $faker->address,
                'phone_no' => $faker->phoneNumber,
                'symptoms' => $faker->paragraph,
                'occupation' => 'Service Holder'
            ],
            [
                'first_name' =>  $faker->firstName,
                'last_name' =>  $faker->lastName,
                'age' => 34,
                'on_medication' => false,
                'address' => $faker->address,
                'phone_no' => $faker->phoneNumber,
                'symptoms' => $faker->paragraph,
                'occupation' => 'Service Holder'
            ],
            [
                'first_name' =>  $faker->firstName,
                'last_name' =>  $faker->lastName,
                'age' => 34,
                'on_medication' => false,
                'address' => $faker->address,
                'phone_no' => $faker->phoneNumber,
                'symptoms' => $faker->paragraph,
                'occupation' => 'Service Holder'
            ],
            [
                'first_name' =>  $faker->firstName,
                'last_name' =>  $faker->lastName,
                'age' => 34,
                'on_medication' => true,
                'address' => $faker->address,
                'phone_no' => $faker->phoneNumber,
                'symptoms' => $faker->paragraph,
                'occupation' => 'Service Holder'
            ],
            [
                'first_name' =>  $faker->firstName,
                'last_name' =>  $faker->lastName,
                'age' => 34,
                'on_medication' => false,
                'address' => $faker->address,
                'phone_no' => $faker->phoneNumber,
                'symptoms' => $faker->paragraph,
                'occupation' => 'Service Holder'
            ],
            [
                'first_name' =>  $faker->firstName,
                'last_name' =>  $faker->lastName,
                'age' => 34,
                'on_medication' => false,
                'address' => $faker->address,
                'phone_no' => $faker->phoneNumber,
                'symptoms' => $faker->paragraph,
                'occupation' => 'Service Holder'
            ],
            [
                'first_name' =>  $faker->firstName,
                'last_name' =>  $faker->lastName,
                'age' => 34,
                'on_medication' => false,
                'address' => $faker->address,
                'phone_no' => $faker->phoneNumber,
                'symptoms' => $faker->paragraph,
                'occupation' => 'Service Holder'
            ],
            [
                'first_name' =>  $faker->firstName,
                'last_name' =>  $faker->lastName,
                'age' => 34,
                'on_medication' => false,
                'address' => $faker->address,
                'phone_no' => $faker->phoneNumber,
                'symptoms' => $faker->paragraph,
                'occupation' => 'Service Holder'
            ],
            [
                'first_name' =>  $faker->firstName,
                'last_name' =>  $faker->lastName,
                'age' => 14,
                'on_medication' => false,
                'address' => $faker->address,
                'phone_no' => $faker->phoneNumber,
                'symptoms' => $faker->paragraph,
                'occupation' => 'Service Holder'
            ],
            [
                'first_name' =>  $faker->firstName,
                'last_name' =>  $faker->lastName,
                'age' => 34,
                'on_medication' => false,
                'address' => $faker->address,
                'phone_no' => $faker->phoneNumber,
                'symptoms' => $faker->paragraph,
                'occupation' => 'Service Holder'
            ],
            [
                'first_name' =>  $faker->firstName,
                'last_name' =>  $faker->lastName,
                'age' => 34,
                'on_medication' => false,
                'address' => $faker->address,
                'phone_no' => $faker->phoneNumber,
                'symptoms' => $faker->paragraph,
                'occupation' => 'Service Holder'
            ],
            [
                'first_name' =>  $faker->firstName,
                'last_name' =>  $faker->lastName,
                'age' => 34,
                'on_medication' => false,
                'address' => $faker->address,
                'phone_no' => $faker->phoneNumber,
                'symptoms' => $faker->paragraph,
                'occupation' => 'Service Holder'
            ],
            [
                'first_name' =>  $faker->firstName,
                'last_name' =>  $faker->lastName,
                'age' => 33,
                'on_medication' => false,
                'address' => $faker->address,
                'phone_no' => $faker->phoneNumber,
                'symptoms' => $faker->paragraph,
                'occupation' => 'Service Holder'
            ],
            [
                'first_name' =>  $faker->firstName,
                'last_name' =>  $faker->lastName,
                'age' => 24,
                'on_medication' => false,
                'address' => $faker->address,
                'phone_no' => $faker->phoneNumber,
                'symptoms' => $faker->paragraph,
                'occupation' => 'Service Holder'
            ],
            [
                'first_name' =>  $faker->firstName,
                'last_name' =>  $faker->lastName,
                'age' => 11,
                'on_medication' => false,
                'address' => $faker->address,
                'phone_no' => $faker->phoneNumber,
                'symptoms' => $faker->paragraph,
                'occupation' => 'Service Holder'
            ],
            [
                'first_name' =>  $faker->firstName,
                'last_name' =>  $faker->lastName,
                'age' => 23,
                'on_medication' => false,
                'address' => $faker->address,
                'phone_no' => $faker->phoneNumber,
                'symptoms' => $faker->paragraph,
                'occupation' => 'Service Holder'
            ],
            [
                'first_name' =>  $faker->firstName,
                'last_name' =>  $faker->lastName,
                'age' => 23,
                'on_medication' => false,
                'address' => $faker->address,
                'phone_no' => $faker->phoneNumber,
                'symptoms' => $faker->paragraph,
                'occupation' => 'Service Holder'
            ],
            [
                'first_name' =>  $faker->firstName,
                'last_name' =>  $faker->lastName,
                'age' => 54,
                'on_medication' => false,
                'address' => $faker->address,
                'phone_no' => $faker->phoneNumber,
                'symptoms' => $faker->paragraph,
                'occupation' => 'Service Holder'
            ],
            [
                'first_name' =>  $faker->firstName,
                'last_name' =>  $faker->lastName,
                'age' => 43,
                'on_medication' => false,
                'address' => $faker->address,
                'phone_no' => $faker->phoneNumber,
                'symptoms' => $faker->paragraph,
                'occupation' => 'Service Holder'
            ],
            [
                'first_name' =>  $faker->firstName,
                'last_name' =>  $faker->lastName,
                'age' => 24,
                'on_medication' => false,
                'address' => $faker->address,
                'phone_no' => $faker->phoneNumber,
                'symptoms' => $faker->paragraph,
                'occupation' => 'Service Holder'
            ],
            [
                'first_name' =>  $faker->firstName,
                'last_name' =>  $faker->lastName,
                'age' => 23,
                'on_medication' => false,
                'address' => $faker->address,
                'phone_no' => $faker->phoneNumber,
                'symptoms' => $faker->paragraph,
                'occupation' => 'Service Holder'
            ],
            [
                'first_name' =>  $faker->firstName,
                'last_name' =>  $faker->lastName,
                'age' => 12,
                'on_medication' => false,
                'address' => $faker->address,
                'phone_no' => $faker->phoneNumber,
                'symptoms' => $faker->paragraph,
                'occupation' => 'Service Holder'
            ],
            [
                'first_name' =>  $faker->firstName,
                'last_name' =>  $faker->lastName,
                'age' => 23,
                'on_medication' => false,
                'address' => $faker->address,
                'phone_no' => $faker->phoneNumber,
                'symptoms' => $faker->paragraph,
                'occupation' => 'Student'
            ],
            [
                'first_name' =>  $faker->firstName,
                'last_name' =>  $faker->lastName,
                'age' => 23,
                'on_medication' => false,
                'address' => $faker->address,
                'phone_no' => $faker->phoneNumber,
                'symptoms' => $faker->paragraph,
                'occupation' => 'Student'
            ],
            [
                'first_name' =>  $faker->firstName,
                'last_name' =>  $faker->lastName,
                'age' => 23,
                'on_medication' => false,
                'address' => $faker->address,
                'phone_no' => $faker->phoneNumber,
                'symptoms' => $faker->paragraph,
                'occupation' => 'Student'
            ],
            [
                'first_name' =>  $faker->firstName,
                'last_name' =>  $faker->lastName,
                'age' => 23,
                'on_medication' => false,
                'address' => $faker->address,
                'phone_no' => $faker->phoneNumber,
                'symptoms' => $faker->paragraph,
                'occupation' => 'Student'
            ],
            [
                'first_name' =>  $faker->firstName,
                'last_name' =>  $faker->lastName,
                'age' => 23,
                'on_medication' => false,
                'address' => $faker->address,
                'phone_no' => $faker->phoneNumber,
                'symptoms' => $faker->paragraph,
                'occupation' => 'Student'
            ],
            [
                'first_name' =>  $faker->firstName,
                'last_name' =>  $faker->lastName,
                'age' => 23,
                'on_medication' => false,
                'address' => $faker->address,
                'phone_no' => $faker->phoneNumber,
                'symptoms' => $faker->paragraph,
                'occupation' => 'Student'
            ],
            [
                'first_name' =>  $faker->firstName,
                'last_name' =>  $faker->lastName,
                'age' => 23,
                'on_medication' => false,
                'address' => $faker->address,
                'phone_no' => $faker->phoneNumber,
                'symptoms' => $faker->paragraph,
                'occupation' => 'Student'
            ],
            [
                'first_name' =>  $faker->firstName,
                'last_name' =>  $faker->lastName,
                'age' => 23,
                'on_medication' => false,
                'address' => $faker->address,
                'phone_no' => $faker->phoneNumber,
                'symptoms' => $faker->paragraph,
                'occupation' => 'Student'
            ],
            [
                'first_name' =>  $faker->firstName,
                'last_name' =>  $faker->lastName,
                'age' => 23,
                'on_medication' => false,
                'address' => $faker->address,
                'phone_no' => $faker->phoneNumber,
                'symptoms' => $faker->paragraph,
                'occupation' => 'Student'
            ],
            [
                'first_name' =>  $faker->firstName,
                'last_name' =>  $faker->lastName,
                'age' => 23,
                'on_medication' => false,
                'address' => $faker->address,
                'phone_no' => $faker->phoneNumber,
                'symptoms' => $faker->paragraph,
                'occupation' => 'Student'
            ],
            [
                'first_name' =>  $faker->firstName,
                'last_name' =>  $faker->lastName,
                'age' => 23,
                'on_medication' => false,
                'address' => $faker->address,
                'phone_no' => $faker->phoneNumber,
                'symptoms' => $faker->paragraph,
                'occupation' => 'Student'
            ],
            [
                'first_name' =>  $faker->firstName,
                'last_name' =>  $faker->lastName,
                'age' => 23,
                'on_medication' => false,
                'address' => $faker->address,
                'phone_no' => $faker->phoneNumber,
                'symptoms' => $faker->paragraph,
                'occupation' => 'Student'
            ],
            [
                'first_name' =>  $faker->firstName,
                'last_name' =>  $faker->lastName,
                'age' => 23,
                'on_medication' => false,
                'address' => $faker->address,
                'phone_no' => $faker->phoneNumber,
                'symptoms' => $faker->paragraph,
                'occupation' => 'Student'
            ],
            [
                'first_name' =>  $faker->firstName,
                'last_name' =>  $faker->lastName,
                'age' => 23,
                'on_medication' => false,
                'address' => $faker->address,
                'phone_no' => $faker->phoneNumber,
                'symptoms' => $faker->paragraph,
                'occupation' => 'Student'
            ],
            [
                'first_name' =>  $faker->firstName,
                'last_name' =>  $faker->lastName,
                'age' => 23,
                'on_medication' => false,
                'address' => $faker->address,
                'phone_no' => $faker->phoneNumber,
                'symptoms' => $faker->paragraph,
                'occupation' => 'Student'
            ],
            [
                'first_name' =>  $faker->firstName,
                'last_name' =>  $faker->lastName,
                'age' => 23,
                'on_medication' => false,
                'address' => $faker->address,
                'phone_no' => $faker->phoneNumber,
                'symptoms' => $faker->paragraph,
                'occupation' => 'Student'
            ],
            [
                'first_name' =>  $faker->firstName,
                'last_name' =>  $faker->lastName,
                'age' => 23,
                'on_medication' => false,
                'address' => $faker->address,
                'phone_no' => $faker->phoneNumber,
                'symptoms' => $faker->paragraph,
                'occupation' => 'Student'
            ],
            [
                'first_name' =>  $faker->firstName,
                'last_name' =>  $faker->lastName,
                'age' => 23,
                'on_medication' => false,
                'address' => $faker->address,
                'phone_no' => $faker->phoneNumber,
                'symptoms' => $faker->paragraph,
                'occupation' => 'Student'
            ],
            [
                'first_name' =>  $faker->firstName,
                'last_name' =>  $faker->lastName,
                'age' => 23,
                'on_medication' => false,
                'address' => $faker->address,
                'phone_no' => $faker->phoneNumber,
                'symptoms' => $faker->paragraph,
                'occupation' => 'Student'
            ],
            [
                'first_name' =>  $faker->firstName,
                'last_name' =>  $faker->lastName,
                'age' => 23,
                'on_medication' => false,
                'address' => $faker->address,
                'phone_no' => $faker->phoneNumber,
                'symptoms' => $faker->paragraph,
                'occupation' => 'Student'
            ],
            [
                'first_name' =>  $faker->firstName,
                'last_name' =>  $faker->lastName,
                'age' => 23,
                'on_medication' => false,
                'address' => $faker->address,
                'phone_no' => $faker->phoneNumber,
                'symptoms' => $faker->paragraph,
                'occupation' => 'Student'
            ],
            [
                'first_name' =>  $faker->firstName,
                'last_name' =>  $faker->lastName,
                'age' => 23,
                'on_medication' => false,
                'address' => $faker->address,
                'phone_no' => $faker->phoneNumber,
                'symptoms' => $faker->paragraph,
                'occupation' => 'Student'
            ],
            [
                'first_name' =>  $faker->firstName,
                'last_name' =>  $faker->lastName,
                'age' => 23,
                'on_medication' => false,
                'address' => $faker->address,
                'phone_no' => $faker->phoneNumber,
                'symptoms' => $faker->paragraph,
                'occupation' => 'Student'
            ],
            [
                'first_name' =>  $faker->firstName,
                'last_name' =>  $faker->lastName,
                'age' => 23,
                'on_medication' => false,
                'address' => $faker->address,
                'phone_no' => $faker->phoneNumber,
                'symptoms' => $faker->paragraph,
                'occupation' => 'Student'
            ],
            [
                'first_name' =>  $faker->firstName,
                'last_name' =>  $faker->lastName,
                'age' => 23,
                'on_medication' => false,
                'address' => $faker->address,
                'phone_no' => $faker->phoneNumber,
                'symptoms' => $faker->paragraph,
                'occupation' => 'N/A'
            ],
            [
                'first_name' =>  $faker->firstName,
                'last_name' =>  $faker->lastName,
                'age' => 23,
                'on_medication' => false,
                'address' => $faker->address,
                'phone_no' => $faker->phoneNumber,
                'symptoms' => $faker->paragraph,
                'occupation' => 'Student'
            ],
            [
                'first_name' =>  $faker->firstName,
                'last_name' =>  $faker->lastName,
                'age' => 23,
                'on_medication' => false,
                'address' => $faker->address,
                'phone_no' => $faker->phoneNumber,
                'symptoms' => $faker->paragraph,
                'occupation' => 'N/A'
            ],
            [
                'first_name' =>  $faker->firstName,
                'last_name' =>  $faker->lastName,
                'age' => 23,
                'on_medication' => false,
                'address' => $faker->address,
                'phone_no' => $faker->phoneNumber,
                'symptoms' => $faker->paragraph,
                'occupation' => 'N/A'
            ],[
                'first_name' =>  $faker->firstName,
                'last_name' =>  $faker->lastName,
                'age' => 23,
                'on_medication' => true,
                'address' => $faker->address,
                'phone_no' => $faker->phoneNumber,
                'symptoms' => $faker->paragraph,
                'occupation' => 'N/A'
            ],
            [
                'first_name' =>  $faker->firstName,
                'last_name' =>  $faker->lastName,
                'age' => 21,
                'on_medication' => true,
                'address' => $faker->address,
                'phone_no' => $faker->phoneNumber,
                'symptoms' => $faker->paragraph,
                'occupation' => 'Student'
            ],
            [
                'first_name' =>  $faker->firstName,
                'last_name' =>  $faker->lastName,
                'age' => 21,
                'on_medication' => true,
                'address' => $faker->address,
                'phone_no' => $faker->phoneNumber,
                'symptoms' => $faker->paragraph,
                'occupation' => 'Student'
            ],
            [
                'first_name' =>  $faker->firstName,
                'last_name' =>  $faker->lastName,
                'age' => 22,
                'on_medication' => true,
                'address' => $faker->address,
                'phone_no' => $faker->phoneNumber,
                'symptoms' => $faker->paragraph,
                'occupation' => 'Student'
            ],
            [
                'first_name' =>  $faker->firstName,
                'last_name' =>  $faker->lastName,
                'age' => 12,
                'on_medication' => false,
                'address' => $faker->address,
                'phone_no' => $faker->phoneNumber,
                'symptoms' => $faker->paragraph,
                'occupation' => 'Student'
            ],
        ];

        foreach ($patients as $patient){
            Patient::create($patient);
        }
    }
}
