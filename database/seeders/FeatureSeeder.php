<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Feature;

class FeatureSeeder extends Seeder
{
    public function run()
    {
        Feature::create([
            'code' => 'CD001',
            'name' => 'LMS',
            'title' => 'Optimalkan potensi karyawan Anda dengan Learning Management System (LMS)',
            'description' => 'Berdayakan tim Anda untuk mencapai kesuksesan dengan data yang akurat dan solusi pembelajaran yang terintegrasi. Transformasikan pengelolaan sumber daya manusia Anda dan hadirkan produktivitas yang unggul dengan LMS kami!.',
            'sub_title1' => 'Issued Certificate',
            'sub_description1' => 'Berikan kemudahan dalam mengatur dan mendistribusikan sertifikat kepada setiap karyawan.',
            'sub_title2' => 'On Boarding',
            'sub_description2' => 'Memastikan setiap karyawan siap memberikan kontribusi maksimal sejak hari pertama mereka bergabung',
            'sub_title3' => 'Training on-demand',
            'sub_description3' => 'Training On-Demand yang berfokus pada pengalaman pengguna, pelatihan berkualitas tinggi menjadi lebih mudah diakses dan disesuaikan dengan kebutuhan Anda.',
        ]);

        Feature::create([
            'code' => 'CD002',
            'name' => 'Featured',
            'title' => 'Tingkatkan Kinerja Bisnis Anda dengan Fitur IT Unggulan',
            'description' => 'Manfaatkan berbagai fitur IT canggih untuk mengoptimalkan operasional bisnis Anda, meningkatkan produktivitas, dan memastikan keamanan data.',
            'sub_title1' => 'Cloud Computing',
            'sub_description1' => 'Manfaatkan kekuatan komputasi awan untuk fleksibilitas dan skalabilitas operasional bisnis Anda.',
            'sub_title2' => 'Cybersecurity',
            'sub_description2' => 'Lindungi data dan sistem Anda dengan solusi keamanan siber yang mutakhir.',
            'sub_title3' => 'Data Analytics',
            'sub_description3' => 'Dapatkan wawasan berharga dari data Anda melalui analitik canggih dan laporan yang mudah dipahami.',
        ]);

        Feature::create([
            'code' => 'CD003',
            'name' => 'Video Learning + Live Webinar',
            'title' => 'Tingkatkan Pembelajaran dengan Video Learning dan Live Webinar',
            'description' => 'Gabungkan pembelajaran video dengan webinar langsung untuk pengalaman belajar yang dinamis dan interaktif. Maksimalkan potensi pelatihan dengan konten yang dapat diakses kapan saja dan di mana saja.',
            'sub_title1' => 'Video Learning',
            'sub_description1' => 'Akses video pembelajaran berkualitas tinggi kapan saja untuk mendukung karyawan Anda.',
            'sub_title2' => 'Live Webinar',
            'sub_description2' => 'Ikuti webinar langsung dengan pakar industri dan dapatkan wawasan terbaru secara real-time.',
            'sub_title3' => 'Interactive Sessions',
            'sub_description3' => 'Sesi interaktif yang memungkinkan tanya jawab langsung dan diskusi mendalam.',
        ]);

        Feature::create([
            'code' => 'CD004',
            'name' => 'Inquiry Learning',
            'title' => 'Mendorong Pembelajaran Berbasis Pertanyaan dengan Inquiry Learning',
            'description' => 'Fasilitasi pembelajaran berbasis penyelidikan untuk mendorong karyawan berpikir kritis dan menemukan solusi inovatif. Tingkatkan keterlibatan dengan proses pembelajaran yang aktif dan eksploratif.',
            'sub_title1' => 'Problem-Solving Skills',
            'sub_description1' => 'Kembangkan keterampilan memecahkan masalah melalui penyelidikan dan analisis.',
            'sub_title2' => 'Research-Based Learning',
            'sub_description2' => 'Dorong pembelajaran berbasis penelitian untuk pemahaman yang mendalam dan aplikatif.',
            'sub_title3' => 'Collaborative Projects',
            'sub_description3' => 'Proyek kolaboratif yang melibatkan kerja tim dan pertukaran ide secara aktif.',
        ]);

    }
}
