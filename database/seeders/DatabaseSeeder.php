<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        \App\Models\User::factory()->create([
                'name' => 'Test Account',
                'email' => 'test@example.com',
                'password' => bcrypt('laravel_test'),
                'profile_photo_path' => 'profile-photos/user.png',
         ]);
         $this->call(MaterialSeeder::class);
    }
}
