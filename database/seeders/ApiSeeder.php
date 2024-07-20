<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use App\Models\Mentor;
use App\Models\ClassModel;
use App\Models\WatchTime;

class ApiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            [
                'name' => 'Mikasa',
                'email' => 'mikasa@example.com',
                'email_verified_at' => now(),
                'password' => Hash::make('password123'),
                'remember_token' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Eren',
                'email' => 'eren@example.com',
                'email_verified_at' => now(),
                'password' => Hash::make('123password'),
                'remember_token' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
        // Tambahkan data untuk Mentor
        $mentors = [
            ['name' => 'Mentor Irsyad'],
            ['name' => 'Mentor Fadhil'],
        ];

        foreach ($mentors as $mentor) {
            Mentor::create($mentor);
        }

        // Tambahkan data untuk ClassModel
        $classes = [
            ['mentor_id' => 1, 'name' => 'Kelas Laravel'],
            ['mentor_id' => 1, 'name' => 'Kelas Golang'],
            ['mentor_id' => 1, 'name' => 'Kelas React'],
            ['mentor_id' => 2, 'name' => 'Kelas Flutter'],
            ['mentor_id' => 2, 'name' => 'Kelas Java'],
        ];

        foreach ($classes as $class) {
            ClassModel::create($class);
        }

        // Tambahkan data untuk WatchTime
        $watchTimes = [
            ['user_id' => 1, 'class_id' => 1, 'minutes' => 20],
            ['user_id' => 1, 'class_id' => 2, 'minutes' => 50],
            ['user_id' => 2, 'class_id' => 3, 'minutes' => 30],
            ['user_id' => 2, 'class_id' => 4, 'minutes' => 40],
            ['user_id' => 3, 'class_id' => 5, 'minutes' => 60],
        ];

        foreach ($watchTimes as $watchTime) {
            WatchTime::create($watchTime);
        }
    }
}
