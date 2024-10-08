<?php

namespace Database\Seeders;

use App\Models\Project;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory()
            ->count(200)
            ->create();

        /**
         * Creates 10 random projects and associates them with 10 random users.
         */
        User::query()->inRandomOrder()->limit(10)->get()
            ->each(fn(User $u) => Project::factory()->create(['created_by' => $u->id]));
    }
}
