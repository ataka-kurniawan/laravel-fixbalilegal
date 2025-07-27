<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        User::firstOrCreate(
            ['email' => 'admin@fixlegalbali.com'],
            [
                'name' => 'Admin Fix Legal Bali',
                'password' => Hash::make('Fixbalilegal12345'),
            ]
        );
    }
}
