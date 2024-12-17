<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Donation;
use Illuminate\Support\Facades\Hash;

class DemoAccountsSeeder extends Seeder
{
    public function run()
    {
        // Create admin user
        User::create([
            'name' => 'Admin User',
            'email' => 'admin@example.com',
            'password' => Hash::make('password'),
        ]);

        // Create regular user
        User::create([
            'name' => 'Regular User',
            'email' => 'user@example.com',
            'password' => Hash::make('password'),
        ]);

        // Create some sample donations
        Donation::create([
            'amount' => 50.00,
            'currency' => 'USD',
            'paypal_order_id' => 'DEMO1234567890',
            'status' => 'completed',
        ]);

        Donation::create([
            'amount' => 100.00,
            'currency' => 'USD',
            'paypal_order_id' => 'DEMO0987654321',
            'status' => 'pending',
        ]);
    }
}

