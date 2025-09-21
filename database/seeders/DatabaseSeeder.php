<?php

namespace Database\Seeders;

use App\Models\User;
use Database\Seeders\AdminUserSeeder;
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
        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);

        // create admin user
        $this->call(AdminUserSeeder::class);
        
        // Seed program data
        $this->call(ProgramSeeder::class);
        
        // Seed faculty, news, and achievements
        $this->call(FacultySeeder::class);
        $this->call(NewsSeeder::class);
        $this->call(AchievementSeeder::class);
        $this->call(VideoSeeder::class);
    }
}
