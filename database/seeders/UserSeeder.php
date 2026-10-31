<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        $users = [
            ['Test',  'test@example.com',            '12345678']
         
        ];

        foreach ($users as [$name, $email, $password]) {
            User::firstOrCreate(
                ['email' => $email],
                ['name' => $name, 'password' => $password]
            );
        }
    }
}