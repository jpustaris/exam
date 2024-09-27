<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */

     
    protected static ?string $password;

    
    public function run(): void
    {
        User::create([
            'name' => 'Admin',
            'email' => 'admin.1@gmail.com',
            'role_id' => 1,
            'password' => static::$password ??= Hash::make('password'),
            'remember_token' => Str::random(10),
        ]);

        User::create([
            'name' => 'Manager',
            'email' => 'manager@gmail.com',
            'role_id' => 2,
            'password' => static::$password ??= Hash::make('password'),
            'remember_token' => Str::random(10),
        ]);

        User::create([
            'name' => 'User',
            'email' => 'user@gmail.com',
            'role_id' => 3,
            'password' => static::$password ??= Hash::make('password'),
            'remember_token' => Str::random(10),
        ]);
    }
}
