<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\ClassPlan;
class ClassPlanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        ClassPlan::create([
            'name' => 'Starter',
            'features' => json_encode(['LMS + kelas by Kelas.Center', 'Up to 5 users', 'No charge per user', 'Up to 20 pilihan kelas', 'Update pergantian kelas / 3 bulan', 'Sertifikat', 'Konsultasi Gratis', 'Dedicated assistant', 'Full support 7x24 jam']),
            'max_users' => 5,
            'class_options' => 20,
            'price' => 159000,
        ]);

        ClassPlan::create([
            'name' => 'Basic',
            'features' => json_encode(['LMS + kelas by Kelas.Center', '6-49 users', 'No charge per user', 'Up to 50 pilihan kelas', 'Update pergantian kelas / 3 bulan', 'Sertifikat', 'Konsultasi Gratis', 'Dedicated assistant', 'Full support 7x24 jam']),
            'max_users' => 49,
            'class_options' => 50,
            'price' => 159000,
        ]);

        ClassPlan::create([
            'name' => 'Pro',
            'features' => json_encode(['LMS + kelas by Kelas.Center', '50-100 users', 'No charge per user', 'All Access Class', 'Update pergantian kelas / 3 bulan', 'Sertifikat', 'Konsultasi Gratis', 'Dedicated assistant', 'Full support 7x24 jam']),
            'max_users' => 100,
            'class_options' => -1,  // Assuming -1 means all access
            'price' => 2900000,
        ]);
    }
}
