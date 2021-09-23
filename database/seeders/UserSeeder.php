<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    public function run() 
    {
        $this->call([
            PhotoSeeder::class,
            GenderSeeder::class,
        ]);

        // Admin Default            
        User::create([ 
            'photo_id'          => 1,
            'gender_id'         => 1,
            'first_name'        => 'Admin',
            'last_name'         => 'F',
            'username'          => 'adminff',
            'email'             => 'adminf@gmail.com',
            'email_verified_at' => now(),
            'password'          => Hash::make('password'),
            'active'            => 1,
            'remember_token'    => Str::random(10)
        ])->admin()->create();
    }
}
