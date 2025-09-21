<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Video;
use Carbon\Carbon;

class VideoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Video::create([
            'title_th' => 'แนะนำสาขา วิศวกรรมซอฟต์แวร์',
            'title_en' => 'Software Engineering Program Introduction',
            'description_th' => 'วิดีโอแนะนำหลักสูตรและโอกาสการทำงานในสาขา',
            'description_en' => 'Video introducing the curriculum and career opportunities in the field',
            'video_url' => 'https://www.youtube.com/watch?v=dQw4w9WgXcQ', // Sample YouTube URL
            'video_type' => 'youtube',
            'duration' => 180, // 3 minutes
            'category' => 'introduction',
            'publish_date' => Carbon::parse('2023-08-01'),
            'view_count' => 1250,
            'is_published' => true,
            'is_featured' => true,
            'sort_order' => 1,
        ]);

        Video::create([
            'title_th' => 'กิจกรรมนักศึกษาในสาขา',
            'title_en' => 'Student Activities in the Department',
            'description_th' => 'ภาพบรรยากาศการเรียนรู้และกิจกรรมนักศึกษาในสาขา',
            'description_en' => 'Atmosphere of learning and student activities in the department',
            'video_url' => 'https://www.youtube.com/watch?v=oHg5SJYRHA0', // Sample YouTube URL
            'video_type' => 'youtube',
            'duration' => 240, // 4 minutes
            'category' => 'activities',
            'publish_date' => Carbon::parse('2023-07-15'),
            'view_count' => 875,
            'is_published' => true,
            'is_featured' => false,
            'sort_order' => 2,
        ]);

        Video::create([
            'title_th' => 'บรรยากาศพิเศษวิทยาลัยกำลังศึกษา',
            'title_en' => 'Special Academic Lecture',
            'description_th' => 'บรรยายพิเศษจากผู้เชี่ยวชาญด้านเทคโนโลยี',
            'description_en' => 'Special lecture from technology experts',
            'video_url' => 'https://www.youtube.com/watch?v=9bZkp7q19f0', // Sample YouTube URL
            'video_type' => 'youtube',
            'duration' => 3600, // 1 hour
            'category' => 'lecture',
            'publish_date' => Carbon::parse('2023-06-20'),
            'view_count' => 2100,
            'is_published' => true,
            'is_featured' => true,
            'sort_order' => 3,
        ]);
    }
}
