<?php

namespace Database\Seeders;

use App\Models\User;
use Faker\Generator;
use Illuminate\Database\Seeder;
use App\Models\SuperAdmin\Login;
use Illuminate\Support\Facades\Hash;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Generator $faker)
    {
        $demoUser1 = User::create([
            'first_name'              => $faker->firstName(),
            'last_name'              => $faker->lastName(),
            'phone'              => $faker->phoneNumber(),
            'email'             => 'admin@admin.com',
            'password'          => Hash::make('Admin@123'),
            'user_type' => "0",
            'email_verified_at' => now(),
        ]);

        $demoUser = User::create([
            'first_name'              => $faker->firstName(),
            'last_name'              => $faker->lastName(),
            'phone'             => $faker->phoneNumber(),
            'email'             => 'propertyowner@sgt.com',
            'password'          => Hash::make('Demo@123'),
            'user_type' => "1",
            'email_verified_at' => now(),
        ]);

        $demoUser = User::create([
            'first_name'              => $faker->firstName(),
            'last_name'              => $faker->lastName(),
            'email'             => 'guard@guard.com',
            'password'          => Hash::make('Guard@123'),
            'user_type' => "2",
            'email_verified_at' => now(),
        ]);
    }
}
