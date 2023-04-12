<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        Storage::disk('public');

        // Storage::disk('public')->deleteDirectory('courses');
        Storage::deleteDirectory('courses');
        Storage::makeDirectory('courses');
        // \App\Models\User::factory(10)->create();

        $this->call(UserSeeder::class);
        $this->call(EventSeeder::class);
        $this->call(DecanaturaSeeder::class);
        $this->call(CourseSeeder::class);
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
