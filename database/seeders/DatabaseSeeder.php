<?php

namespace Database\Seeders;

use App\Models\Greeting;
use App\Models\User;
//use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);

        Greeting::Create(['greeting' => 'Hello',]);
        Greeting::Create(['greeting' => 'Hi',]);
        Greeting::Create(['greeting' => 'Hey',]);
        Greeting::Create(['greeting' => 'Howdy',]);
    }
}
