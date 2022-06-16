<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::factory(10)->create();

        \App\Models\User::factory()->create([
            'username' => 'User',
            'email' => 'user@example.com',
        ]);

        \App\Models\User::factory()->create([
            'username' => 'Admin',
            'email' => 'admin@example.com',
            'admin' => true,
        ]);
    }
}
