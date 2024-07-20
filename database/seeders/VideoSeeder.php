<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Video;

class VideoSeeder extends Seeder
{
    public function run()
    {
        Video::create([
            'code' => 'CDV001',
            'type' => 'Kelas.com',
            'title' => 'Mengajarkan Personal Branding',
            'instructor' => 'Pandji Pragiwaksono',
            'instructor_title' => 'Presenter Televisi & Komika',
            'thumbnail_url' => '',
            'video_url' => 'https://www.youtube.com/watch?v=uu0ZD-zTDRY',
        ]);

        Video::create([
            'code' => 'CDV002',
            'type' => 'kelas.work',
            'title' => 'GUE BUKA KELAS PERSONAL BRANDING!',
            'instructor' => 'Pandji Pragiwaksono',
            'instructor_title' => 'Presenter Televisi & Komika',
            'thumbnail_url' => '',
            'video_url' => 'https://www.youtube.com/watch?v=-wdPOWYaE-Y',
        ]);

        Video::create([
            'code' => 'CDV003',
            'type' => 'Bootcamp',
            'title' => 'NGINTIP KELAS ONLINE PUBLIC SPEAKING PANDJI',
            'instructor' => 'Pandji Pragiwaksono',
            'instructor_title' => 'Presenter Televisi & Komika',
            'thumbnail_url' => '',
            'video_url' => 'https://www.youtube.com/watch?v=hcr-8e931k4',
        ]);

        Video::create([
            'code' => 'CDV001',
            'type' => 'kelas.com',
            'title' => 'Mengajarkan Penulisan Skenario',
            'instructor' => 'Ernest Prakasa',
            'instructor_title' => 'Presenter Televisi & Komika',
            'thumbnail_url' => '',
            'video_url' => 'https://www.youtube.com/watch?v=gyUUl_HrOLc',
        ]);
    }
}
