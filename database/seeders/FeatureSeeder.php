<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Feature;

class FeatureSeeder extends Seeder
{
    public function run()
    {
        Feature::create([
            'name' => 'Certificate',
            'title' => 'Issued Certificate',
            'description' => 'Berikan kemudahan dalam mengatur dan mendistribusikan sertifikat kepada setiap karyawan.',
            'sub_title1' => 'Digital Certificate',
            'sub_description1' => 'Distribusi sertifikat digital dengan mudah.',
            'sub_title2' => 'Physical Certificate',
            'sub_description2' => 'Opsional untuk sertifikat fisik.',
            'sub_title3' => 'Verification',
            'sub_description3' => 'Verifikasi sertifikat online.',
        ]);

        Feature::create([
            'name' => 'Onboarding',
            'title' => 'On Boarding',
            'description' => 'Memastikan setiap karyawan siap memberikan kontribusi maksimal sejak hari pertama mereka bergabung.',
            'sub_title1' => 'Welcome Kit',
            'sub_description1' => 'Paket selamat datang untuk karyawan baru.',
            'sub_title2' => 'Initial Training',
            'sub_description2' => 'Pelatihan awal untuk karyawan baru.',
            'sub_title3' => 'Mentorship',
            'sub_description3' => 'Program mentorship untuk karyawan baru.',
        ]);

        Feature::create([
            'name' => 'Training',
            'title' => 'Training on-demand',
            'description' => 'Training On-Demand yang berfokus pada pengalaman pengguna, pelatihan berkualitas tinggi menjadi lebih mudah diakses dan disesuaikan dengan kebutuhan Anda.',
            'sub_title1' => 'Custom Training',
            'sub_description1' => 'Pelatihan yang dapat disesuaikan.',
            'sub_title2' => '24/7 Access',
            'sub_description2' => 'Akses pelatihan kapan saja.',
            'sub_title3' => 'Tracking Progress',
            'sub_description3' => 'Melacak kemajuan pelatihan.',
        ]);
    }
}
