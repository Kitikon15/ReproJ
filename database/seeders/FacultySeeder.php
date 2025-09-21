<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Faculty;

class FacultySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Faculty::create([
            'name_th' => 'ผศ.ดร.จงณัฏ ภักดีศรนิกุลคดี',
            'name_en' => 'Asst.Prof.Dr.Jongnat Pakseeraniculkit',
            'title_th' => 'ประธานคณะ สาขาวิชา',
            'title_en' => 'Dean of Faculty',
            'department_th' => 'สาขาวิชาวิศวกรรมซอฟต์แวร์',
            'department_en' => 'Software Engineering Department',
            'email' => 'jongnat@university.edu',
            'sort_order' => 1,
            'is_active' => true,
        ]);

        Faculty::create([
            'name_th' => 'ผศ.ดร.วาเซฮ์ อาหะรา',
            'name_en' => 'Asst.Prof.Dr.Waseh Ahara',
            'title_th' => 'รองประธานคณะ (ประธานสาขา)',
            'title_en' => 'Vice Dean (Head of Department)',
            'department_th' => 'สาขาวิชาวิศวกรรมซอฟต์แวร์',
            'department_en' => 'Software Engineering Department',
            'email' => 'waseh@university.edu',
            'sort_order' => 2,
            'is_active' => true,
        ]);

        Faculty::create([
            'name_th' => 'ผศ.สมเกียรติ ช่องเพลือน',
            'name_en' => 'Asst.Prof.Somkiat Chongpluean',
            'title_th' => 'รองประธานคณะ ฝ่ายโครงการและธุรกิจแนม',
            'title_en' => 'Vice Dean for Projects and Business',
            'department_th' => 'สาขาวิชาวิศวกรรมซอฟต์แวร์',
            'department_en' => 'Software Engineering Department',
            'email' => 'somkiat@university.edu',
            'sort_order' => 3,
            'is_active' => true,
        ]);

        Faculty::create([
            'name_th' => 'ผศ.นฤพงค สุวรรณวิจักร',
            'name_en' => 'Asst.Prof.Naruphong Suvanvijak',
            'title_th' => 'รองประธานคณะ ฝ่ายประกันคุณภาพ',
            'title_en' => 'Vice Dean for Quality Assurance',
            'department_th' => 'สาขาวิชาวิศวกรรมซอฟต์แวร์',
            'department_en' => 'Software Engineering Department',
            'email' => 'naruphong@university.edu',
            'sort_order' => 4,
            'is_active' => true,
        ]);

        Faculty::create([
            'name_th' => 'อาจารย์ ดร.ศุภินฏ์ จันทร์เรือง',
            'name_en' => 'Dr.Supin Chanreuang',
            'title_th' => 'รองประธานคณะ ฝ่ายกิจการนักศึกษา',
            'title_en' => 'Vice Dean for Student Affairs',
            'department_th' => 'สาขาวิชาวิศวกรรมซอฟต์แวร์',
            'department_en' => 'Software Engineering Department',
            'email' => 'supin@university.edu',
            'sort_order' => 5,
            'is_active' => true,
        ]);
    }
}
