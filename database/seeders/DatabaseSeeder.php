<?php

namespace Database\Seeders;

use App\Models\Blog;
use App\Models\Category;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([CategorySeeder::class, UserSeeder::class, ScheduleSeeder::class, ServiceSeeder::class]);
        Blog::factory(100)->recycle([
            Category::all(),
            User::all(),
        ])->create();
    }
}
