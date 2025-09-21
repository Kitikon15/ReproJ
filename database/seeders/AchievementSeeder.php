<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Achievement;
use Carbon\Carbon;

class AchievementSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Achievement::create([
            'student_name_th' => 'นายสมารถ วิศวกรรมซอฟต์แวร์',
            'student_name_en' => 'Mr. Samart Software Engineer',
            'title_th' => 'คิษย์นักเข้าเรียนโครงการประกันบัณฑิต',
            'title_en' => 'Outstanding Student in Graduate Project',
            'description_th' => 'วิทยาการโครงการค้นหาข้อมูลกับคำสั่งของผู้ใช้บริการผ่านมิตรสวัสดิการแมชชินเลิร์นนิง',
            'description_en' => 'Research project on data search with user service commands through machine learning friendship dimensions',
            'category' => 'academic',
            'achievement_date' => Carbon::parse('2023-05-01'),
            'award_level' => 'university',
            'is_published' => true,
            'is_featured' => true,
            'sort_order' => 1,
        ]);

        Achievement::create([
            'student_name_th' => 'นายวิทยาการ โครงการพัฒนา',
            'student_name_en' => 'Mr. Science Development Project',
            'title_th' => 'นักศึกษาได้รับเลือกภาษาที่เวียดนาม',
            'title_en' => 'Student Received Vietnam Language Selection',
            'description_th' => 'สามารถพัฒนาด้านการศึกษาและได้รับการสนับสนุนจากหน่วยงานที่เกี่ยวข้อง',
            'description_en' => 'Able to develop education and receive support from relevant agencies',
            'category' => 'competition',
            'achievement_date' => Carbon::parse('2023-03-15'),
            'award_level' => 'national',
            'is_published' => true,
            'is_featured' => false,
            'sort_order' => 2,
        ]);
    }
}
