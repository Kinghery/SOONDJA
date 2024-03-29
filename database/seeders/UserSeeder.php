<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class UserSeeder extends Seeder
{
    public function run()
    {
        // Create an admin user
        User::insert([
            [
                'id' => 1,
                'name' => 'Admin',
                'email' => 'admin@gmail.co.id',
                'email_verified_at' => null,
                'password' => Hash::make('Password.1'), // Replace 'your_password_here' with the desired password
                'remember_token' => null,
                'role' => 'Super Admin',
                'last_login' => '2023-08-15 11:38:49',
                'login_counter' => 1,
                'is_active' => '1',
                'created_at' => '2023-07-08 05:42:25',
                'updated_at' => '2023-08-15 11:38:49',
            ],
            // Add more users if needed
        ]);
    }
}
