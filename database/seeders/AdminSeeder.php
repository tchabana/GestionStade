<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $user = User::create([
            'name' => 'admin',
            'email' => 'admin@gmail.com',
            'email_verified_at' => now(),
            'password' => Hash::make('superadmin'),
            'role' => 'admin'
        ]);
        $user->assignRole('admin');

        $user1 = User::create([
            'name' => 'gerant',
            'email' => 'gerant@gmail.com',
            'email_verified_at' => now(),
            'password' => Hash::make('supergerant'),
            'role' => 'gerant'
        ]);
        $user1->assignRole('gerant');
    }
}
