<?php

namespace Database\Seeders;

// database/seeders/AdminsTableSeeder.php

use Illuminate\Database\Seeder;
use App\Models\Admin;
use Illuminate\Support\Facades\Hash;

class AdminsTableSeeder extends Seeder
{
    public function run()
    {
        Admin::create([
            'name' => 'Admin User',
            'email' => 'admin@example.com',
            'password' => Hash::make('password'),
            // Add any other fields as needed
        ]);

        // Add more dummy entries if required
    }
}
