<?php

namespace Database\Seeders;

// database/seeders/UsersTableSeeder.php

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    public function run()
    {
        User::create([
            'name' => 'John Doe',
            'email' => 'john@example.com',
            'password' => Hash::make('password'),
            // Add any other fields as needed
        ]);

        // Add more dummy entries if required
    }
}
