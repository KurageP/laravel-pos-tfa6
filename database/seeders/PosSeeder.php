<?php

namespace Database\Seeders;

use App\Models\Customer;
use App\Models\User;
use Illuminate\Database\Seeder;

class PosSeeder extends Seeder
{
    public function run(): void
    {
        $customers = [
            [
                'full_name' => 'Juan Dela Cruz',
                'email' => 'juan@example.com',
                'phone' => '09170000001',
            ],
            [
                'full_name' => 'Maria Santos',
                'email' => 'maria@example.com',
                'phone' => '09170000002',
            ],
            [
                'full_name' => 'Carlo Reyes',
                'email' => 'carlo@example.com',
                'phone' => '09170000003',
            ],
            [
                'full_name' => 'Ana Garcia',
                'email' => 'ana@example.com',
                'phone' => '09170000004',
            ],
            [
                'full_name' => 'Miguel Ramos',
                'email' => 'miguel@example.com',
                'phone' => '09170000005',
            ],
        ];

        foreach ($customers as $customer) {
            Customer::updateOrCreate(
                ['email' => $customer['email']],
                $customer
            );
        }

        $users = [
            ['username' => 'lanz', 'full_name' => 'Lanz Wayne Villaruel'],
            ['username' => 'jsantos', 'full_name' => 'Julia Santos'],
            ['username' => 'mreyes', 'full_name' => 'Marco Reyes'],
            ['username' => 'agarcia', 'full_name' => 'Andrea Garcia'],
            ['username' => 'pramos', 'full_name' => 'Paolo Ramos'],
        ];

        foreach ($users as $user) {
            User::updateOrCreate(
                ['username' => $user['username']],
                $user
            );
        }
    }
}