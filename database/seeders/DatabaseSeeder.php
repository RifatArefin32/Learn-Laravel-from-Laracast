<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Tag;
use App\Models\Job;
use App\Models\Employer;


// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Create 10 Users
        User::factory(10)->create();

        // Create 5 Employers
        $employers = Employer::factory(5)
            ->has(
                Job::factory(3)->hasAttached(
                    Tag::factory(2)->create(),
                    [], // Pivot table data if any
                )
            )->create();
        
        // Log seeded data
        $this->command->info("Seeded 10 users, 5 employers, and 15 jobs with tags!");
    }
}
