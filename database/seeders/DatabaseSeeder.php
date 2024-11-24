<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Tag;
use App\Models\Job;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        // Create Tags
        $tags = Tag::factory(10)->create();

        // Create Jobs and attach Tags
        Job::factory(20)
            ->hasAttached($tags->random(3))
            ->create();
    }
}
