<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\News;
use Carbon\Carbon;

class NewsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        News::create([
            'title_th' => 'ปันเคลื่อนประกาศผล 2566',
            'title_en' => 'Achievement Announcement 2566',
            'content_th' => 'โครงการเกับข้อมูลด้านการเรียนการสอนและผลงานความสามารถของคุณภาพการศึกษาสำหรับปี 2566',
            'content_en' => 'Project for collecting data on teaching and learning performance and student educational quality for the year 2566',
            'excerpt_th' => 'ปี 2023',
            'excerpt_en' => 'Year 2023',
            'publish_date' => Carbon::parse('2023-09-01'),
            'is_published' => true,
            'is_featured' => true,
            'sort_order' => 1,
        ]);

        News::create([
            'title_th' => 'เอกสาร และคู่มือการใช้งาน 2565',
            'title_en' => 'Documents and User Manual 2565',
            'content_th' => 'งานประชุมวิชาการสันนิษฐาน ครั้งที่ 15 มกราคม 2566 นายกวิเศษ เรื่อง นายกปัญญา',
            'content_en' => 'Academic Conference Meeting on January 15, 2566 by Mr. Wises about Mr. Problem',
            'excerpt_th' => 'ปี 2022',
            'excerpt_en' => 'Year 2022',
            'publish_date' => Carbon::parse('2022-01-15'),
            'is_published' => true,
            'is_featured' => false,
            'sort_order' => 2,
        ]);
    }
}
