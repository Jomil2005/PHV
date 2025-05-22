<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Role;
use App\Models\User;

class RoleUserSeeder extends Seeder
{
    public function run()
    {
        // Create roles
        $adminRole = Role::firstOrCreate(
            ['name' => 'Admin'],
            ['description' => 'Administrator with full access']
        );

        $petOwnerRole = Role::firstOrCreate(
            ['name' => 'Pet Owner'],
            ['description' => 'User with access to their pets']
        );

        // Create admin user
        User::firstOrCreate(
            ['email' => 'jomilgruta22@gmail.com'],
            [
                'firstname' => 'Jomil',
                'lastname' => 'Gruta',
                'password' => bcrypt('admin'),
                'role_id' => $adminRole->id
            ]
        );

        // Create pet owner user
        User::firstOrCreate(
            ['email' => 'ylanaaleria@gmail.com'],
            [
                'firstname' => 'Ylana',
                'lastname' => 'Aleria',
                'password' => bcrypt('user'),
                'role_id' => $petOwnerRole->id
            ]
        );
    }
}

