<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call(ApiSeeder::class);
        $this->call(ClassPlanSeeder::class);
        $this->call(FeatureSeeder::class);
        $this->call(VideoSeeder::class);
    }
}
