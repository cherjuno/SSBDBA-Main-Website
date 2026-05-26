<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\SiteContent;
use App\Models\Article;
use App\Models\Plugin;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::firstOrCreate(
            ['username' => 'admin123'],
            [
                'name' => 'Administrator',
                'email' => 'admin123@ssbda.itb.ac.id',
                'password' => 'admin1234',
                'role' => 'admin',
            ]
        );

        User::firstOrCreate(
            ['email' => 'test@example.com'],
            [
                'name' => 'Test User',
                'username' => 'testuser',
                'password' => 'password',
                'role' => 'user',
            ]
        );

        foreach (config('landing.defaults') as $key => $value) {
            SiteContent::firstOrCreate(
                ['content_key' => $key],
                ['content_value' => $value]
            );
        }

        Article::firstOrCreate(
            ['slug' => 'welcome-to-ssbda-itb'],
            [
                'title' => 'Welcome to SSBDA ITB',
                'category' => 'Announcement',
                'excerpt' => 'Introduction to the admin dashboard and content workflow.',
                'content' => '<p>Starter article for the dashboard scaffold.</p>',
                'views_count' => 84,
                'published_at' => now(),
                'is_published' => true,
                'user_id' => 1,
            ]
        );

        Plugin::firstOrCreate(
            ['slug' => 'sample-analytics-plugin'],
            [
                'name' => 'Sample Analytics Plugin',
                'version' => '1.0.0',
                'description' => 'Starter plugin record used by the dashboard scaffold.',
                'file_path' => 'plugins/sample-analytics-plugin.zip',
                'is_enabled' => true,
                'user_id' => 1,
            ]
        );

        $this->call([
            EventSeeder::class,
            PeopleSeeder::class,
        ]);
    }
}
