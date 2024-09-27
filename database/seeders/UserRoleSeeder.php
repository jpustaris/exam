<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\UserRole;

class UserRoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        UserRole::create(['role_name' => 'Admin']);
        UserRole::create(['role_name' => 'Manager']);
        UserRole::create(['role_name' => 'User']);
    }
}
