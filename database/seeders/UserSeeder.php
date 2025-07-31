<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = [
            [
                'id'                 => 1,
                'name'               => 'Admin',
                'email'              => 'admin@admin.com',
                'password'           => Hash::make('password'),
                'remember_token'     => null,
                'email_verified_at'  => now(),
                'created_at'         => now(),
                'updated_at'         => now(),
            ],
            [
                'id'                 => 2,
                'name'               => 'User',
                'email'              => 'user@user.com',
                'password'           => Hash::make('password'),
                'remember_token'     => null,
                'email_verified_at'  => now(),
                'created_at'         => now(),
                'updated_at'         => now(),
            ]         
        ];

        User::insert($users);

        User::factory()->count(50)->create();
    }
}
