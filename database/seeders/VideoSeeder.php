<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Video;

class VideoSeeder extends Seeder
{
    public function run()
    {
        Video::create([
            'title' => 'Public Speaking: Merdeka Dalam Bicara',
            'instructor' => 'Pandji Pragiwaksono',
            'instructor_title' => 'Presenter Televisi & Komika',
            'thumbnail_url' => '',
            'video_url' => 'https://www.youtube.com/watch?v=uu0ZD-zTDRY',
        ]);

        Video::create([
            'title' => 'Public Speaking: Merdeka Dalam Bicara',
            'instructor' => 'Pandji Pragiwaksono',
            'instructor_title' => 'Presenter Televisi & Komika',
            'thumbnail_url' => '',
            'video_url' => 'https://www.youtube.com/watch?v=-wdPOWYaE-Y',
        ]);

        Video::create([
            'title' => 'Public Speaking: Merdeka Dalam Bicara',
            'instructor' => 'Pandji Pragiwaksono',
            'instructor_title' => 'Presenter Televisi & Komika',
            'thumbnail_url' => 'path/to/thumbnail3.jpg',
            'video_url' => 'https://www.youtube.com/watch?v=hcr-8e931k4',
        ]);

        Video::create([
            'title' => 'Public Speaking: Merdeka Dalam Bicara',
            'instructor' => 'Pandji Pragiwaksono',
            'instructor_title' => 'Presenter Televisi & Komika',
            'thumbnail_url' => '',
            'video_url' => 'https://www.youtube.com/watch?v=gyUUl_HrOLc',
        ]);
    }
}
