<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => env('DEFAULT_USER_NAME','User mcuserface'),
            'email' => env('DEFAULT_USER_EMAIL','USER"GMAIL.COM'),
            'password' => bcrypt(env('DEFAULT_USER_PASSWORD_HASH','password'))
        ]);
         User::factory(10)->create();
    }
}
