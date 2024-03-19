<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $admins = [
            [
                'name'              => 'Learning Curve',
                'email'             => 'admin@learningcurve.com',
                'email_verified_at' => now(),
                'password'          => Hash::make('adminadmin'),
                'remember_token'    => Str::random(10),
            ]
        ];


        foreach ($admins as $admin) {
            if (is_null(User::where('email', $admin['email'])->first()))
                User::create($admin);
        }
    }
}
