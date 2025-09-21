<!DOCTYPE html>
<html lang="th">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>หลักสูตรวิศวกรรมซอฟต์แวร์ - ข้อมูลรายละเอียด</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Sarabun:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <style>
        body {
            font-family: 'Sarabun', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f8f9fa;
            line-height: 1.6;
        }

        .top-header {
            background-color: #2c3e50;
            color: white;
            padding: 8px 0;
            font-size: 14px;
        }

        .curriculum-header {
            background: white;
            padding: 40px 0;
            text-align: center;
            border-bottom: 2px solid #e9ecef;
        }

        .curriculum-title {
            font-size: 2.5rem;
            font-weight: 700;
            color: #2c3e50;
            margin-bottom: 10px;
        }

        .curriculum-subtitle {
            font-size: 1.5rem;
            color: #6c757d;
            font-weight: 400;
        }

        .content-section {
            padding: 40px 0;
        }

        .section-title {
            font-size: 1.8rem;
            font-weight: 600;
            color: #2c3e50;
            margin-bottom: 30px;
            padding-bottom: 10px;
            border-bottom: 3px solid #007bff;
            display: inline-block;
        }

        .curriculum-info-card {
            background: white;
            border-radius: 10px;
            padding: 30px;
            box-shadow: 0 4px 12px rgba(0,0,0,0.08);
            margin-bottom: 30px;
            border: 1px solid #e9ecef;
        }

        .info-row {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 40px;
            margin-bottom: 20px;
        }

        .info-item {
            margin-bottom: 15px;
        }

        .info-label {
            font-weight: 600;
            color: #495057;
            margin-bottom: 5px;
        }

        .info-value {
            color: #6c757d;
            font-size: 1rem;
        }

        .news-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 25px;
            margin-bottom: 40px;
        }

        .news-item {
            background: white;
            border-radius: 10px;
            padding: 25px;
            box-shadow: 0 4px 12px rgba(0,0,0,0.08);
            border: 1px solid #e9ecef;
            transition: transform 0.3s ease;
        }

        .news-item:hover {
            transform: translateY(-5px);
        }

        .news-date {
            font-size: 0.9rem;
            color: #007bff;
            font-weight: 500;
            margin-bottom: 10px;
        }

        .news-title {
            font-size: 1.1rem;
            font-weight: 600;
            color: #2c3e50;
            margin-bottom: 10px;
            line-height: 1.4;
        }

        .news-description {
            color: #6c757d;
            font-size: 0.95rem;
            line-height: 1.5;
        }

        .faculty-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            gap: 25px;
            margin-bottom: 40px;
        }

        .faculty-card {
            background: white;
            border-radius: 10px;
            padding: 25px;
            text-align: center;
            box-shadow: 0 4px 12px rgba(0,0,0,0.08);
            border: 1px solid #e9ecef;
        }

        .faculty-name {
            font-size: 1.1rem;
            font-weight: 600;
            color: #2c3e50;
            margin-bottom: 8px;
        }

        .faculty-title {
            font-size: 0.95rem;
            color: #007bff;
            margin-bottom: 10px;
        }

        .faculty-email {
            font-size: 0.9rem;
            color: #6c757d;
        }

        .student-work-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 25px;
        }

        .work-item {
            background: white;
            border-radius: 10px;
            padding: 25px;
            box-shadow: 0 4px 12px rgba(0,0,0,0.08);
            border: 1px solid #e9ecef;
        }

        .work-year {
            font-size: 0.9rem;
            color: #007bff;
            font-weight: 500;
            margin-bottom: 10px;
        }

        .work-title {
            font-size: 1.1rem;
            font-weight: 600;
            color: #2c3e50;
            margin-bottom: 10px;
            line-height: 1.4;
        }

        .work-description {
            color: #6c757d;
            font-size: 0.95rem;
            line-height: 1.5;
        }

        .back-button {
            background: #007bff;
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 25px;
            text-decoration: none;
            font-weight: 500;
            transition: all 0.3s ease;
            display: inline-flex;
            align-items: center;
            gap: 8px;
        }

        .back-button:hover {
            background: #0056b3;
            color: white;
            transform: translateY(-2px);
        }

        @media (max-width: 768px) {
            .curriculum-title {
                font-size: 2rem;
            }
            
            .curriculum-subtitle {
                font-size: 1.2rem;
            }
            
            .info-row {
                grid-template-columns: 1fr;
                gap: 20px;
            }
            
            .news-grid,
            .faculty-grid,
            .student-work-grid {
                grid-template-columns: 1fr;
            }
        }
    </style>
</head>

<body>
    <div class="top-header">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <span>ระบบประชาสัมพันธ์หลักสูตรวิศวกรรมซอฟต์แวร์</span>
                </div>
                <div class="col-md-4 text-end">
                    @auth
                        <div class="d-flex gap-2 justify-content-end">
                            <a href="{{ route('admin.dashboard') }}" class="btn btn-sm btn-success">
                                <i class="fas fa-cog"></i> Admin
                            </a>
                            <form method="POST" action="{{ route('logout') }}" style="display:inline">
                                @csrf
                                <button class="btn btn-sm btn-outline-light" type="submit">ออกจากระบบ</button>
                            </form>
                        </div>
                    @else
                        <a class="btn btn-sm btn-outline-light" href="{{ route('login') }}">เข้าสู่ระบบ</a>
                    @endauth
                </div>
            </div>
        </div>
    </div>

    <section class="curriculum-header">
        <div class="container">
            <h1 class="curriculum-title">วิศวกรรมซอฟต์แวร์</h1>
            <p class="curriculum-subtitle">Software Engineering</p>
            
            <div class="mt-4">
                <a href="{{ url('/') }}" class="back-button">
                    <i class="fas fa-arrow-left"></i>
                    กลับหน้าหลัก
                </a>
                <a href="{{ route('academic') }}" class="back-button ms-2">
                    <i class="fas fa-graduation-cap"></i>
                    หน้าวิชาการ
                </a>
            </div>
        </div>
    </section>

    <section class="content-section">
        <div class="container">
            <!-- Curriculum Overview -->
            <h2 class="section-title">ภาพรวมหลักสูตร</h2>
            <div class="curriculum-info-card">
                <div class="info-row">
                    <div>
                        <div class="info-item">
                            <div class="info-label">ชื่อปริญญา (ไทย):</div>
                            <div class="info-value">{{ $program->degree_th ?? 'วิศวกรรมศาสตรบัณฑิต' }}</div>
                        </div>
                        <div class="info-item">
                            <div class="info-label">ชื่อปริญญา (อังกฤษ):</div>
                            <div class="info-value">{{ $program->degree_en ?? 'Bachelor of Engineering' }}</div>
                        </div>
                        <div class="info-item">
                            <div class="info-label">จำนวนหน่วยกิตที่ต้องเรียน:</div>
                            <div class="info-value">{{ $program->credits_required ?? '132' }} หน่วยกิต</div>
                        </div>
                    </div>
                    <div>
                        <div class="info-item">
                            <div class="info-label">ภาษาที่ใช้ในการสอน:</div>
                            <div class="info-value">{{ $program->language_th ?? 'ไทย และ อังกฤษ' }}</div>
                        </div>
                        <div class="info-item">
                            <div class="info-label">ค่าลงทะเบียนต่อปี:</div>
                            <div class="info-value">{{ ($program && $program->tuition_fee) ? number_format($program->tuition_fee) . '.00 บาท' : '60,000.00 บาท' }}</div>
                        </div>
                        <div class="info-item">
                            <div class="info-label">หลักสูตรปี:</div>
                            <div class="info-value">{{ $program->curriculum_year ?? '2025' }}</div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Latest News -->
            <h2 class="section-title">กิจกรรมล่าสุด</h2>
            <div class="news-grid">
                <div class="news-item">
                    <div class="news-date">09 October 2025</div>
                    <h4 class="news-title">แนะนำซึ่งพัฒนาแอปพลิเคชันระดับมหาวิทยาลัย</h4>
                    <p class="news-description">เปิดโครงการพัฒนาแอปพลิเคชันด้วยเทคโนโลยีล่าสุดสำหรับนักเรียนใหม่และนิสิต</p>
                </div>

                <div class="news-item">
                    <div class="news-date">24 September 2025</div>
                    <h4 class="news-title">สัมมนาวิจัย Software Architecture Patterns</h4>
                    <p class="news-description">สัมมนาเพื่อแลกเปลี่ยนประสบการณ์ด้าน Software Architecture</p>
                </div>

                <div class="news-item">
                    <div class="news-date">04 September 2025</div>
                    <h4 class="news-title">โครงการแนะน้องสำหรับน้องใหม่</h4>
                    <p class="news-description">กิจกรรมแนะน้องสำหรับนักศึกษาใหม่ พร้อมกิจกรรม Ice-breaking</p>
                </div>
            </div>

            <!-- Faculty -->
            <h2 class="section-title">อาจารย์ผู้สอน</h2>
            <div class="faculty-grid">
                @forelse($faculties as $faculty)
                <div class="faculty-card">
                    <h4 class="faculty-name">{{ $faculty->name_th }}</h4>
                    <p class="faculty-title">{{ $faculty->title_th }}</p>
                    @if($faculty->email)
                        <p class="faculty-email">{{ $faculty->email }}</p>
                    @endif
                </div>
                @empty
                <div class="faculty-card">
                    <h4 class="faculty-name">ดร.สมชาย ใจดี</h4>
                    <p class="faculty-title">อาจารย์</p>
                    <p class="faculty-email">somchai@university.edu</p>
                </div>

                <div class="faculty-card">
                    <h4 class="faculty-name">ผศ.สุรชัย พัฒนกิจ</h4>
                    <p class="faculty-title">อาจารย์</p>
                    <p class="faculty-email">surachai@university.edu</p>
                </div>

                <div class="faculty-card">
                    <h4 class="faculty-name">ดร.มานพรรณ แสงอุทัย</h4>
                    <p class="faculty-title">อาจารย์</p>
                    <p class="faculty-email">kanokwan@university.edu</p>
                </div>
                @endforelse
            </div>

            <!-- Student Work -->
            <h2 class="section-title">ผลงานนักศึกษา</h2>
            <div class="student-work-grid">
                @forelse($achievements as $achievement)
                <div class="work-item">
                    <div class="work-year">ปี {{ $achievement->achievement_date->format('Y') }}</div>
                    <h4 class="work-title">{{ $achievement->title_th }}</h4>
                    <p class="work-description">{{ Str::limit($achievement->description_th, 150) }}</p>
                </div>
                @empty
                <div class="work-item">
                    <div class="work-year">ปี 2024</div>
                    <h4 class="work-title">แอปพลิเคชันติดตามสุขภาพ</h4>
                    <p class="work-description">แอปพลิเคชันสำหรับติดตามสุขภาพและการออกกำลังกายประจำวัน</p>
                </div>

                <div class="work-item">
                    <div class="work-year">ปี 2024</div>
                    <h4 class="work-title">ระบบจัดการคลังสินค้าอัจฉริยะ</h4>
                    <p class="work-description">ระบบจัดการคลังสินค้าที่ใช้เทคโนโลยี IoT และ AI</p>
                </div>

                <div class="work-item">
                    <div class="work-year">ปี 2023</div>
                    <h4 class="work-title">แพลตฟอร์มเรียนออนไลน์แบบโต้ตอบ</h4>
                    <p class="work-description">แพลตฟอร์มการเรียนออนไลน์ที่มีฟีเจอร์โต้ตอบแบบเรียลไทม์</p>
                </div>
                @endforelse
            </div>
        </div>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>