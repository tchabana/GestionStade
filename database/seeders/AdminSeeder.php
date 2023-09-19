<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;

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
        $user->assignRole([Role::find(2), Role::find(1)]);
// -------------------------------------------------------------------------
        $user1 = User::create([
            'name' => 'gerant',
            'email' => 'gerant@gmail.com',
            'email_verified_at' => now(),
            'password' => Hash::make('supergerant'),
            'role' => 'gerant'
        ]);
        $user1->assignRole([Role::find(2)]);
// -------------------------------------------------------------------------
        $user2 = User::create([
            'name' => 'client',
            'email' => 'client@gmail.com',
            'email_verified_at' => now(),
            'password' => Hash::make('superclient'),
            'role' => 'client'
        ]);
        $user2->assignRole([Role::find(3)]);
    }
}
