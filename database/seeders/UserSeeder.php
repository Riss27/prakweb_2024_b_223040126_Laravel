<?php

namespace Database\Seeders;

use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Faris',
            'username' => 'faris',
            'email' => 'faris@gmail.com',
            'email_verified_at' => now(),
            'password'=> Hash::make('password'),
            'remember_token' => Str::random(10)
        ]);

        User::factory(5)->create();
    }
}
