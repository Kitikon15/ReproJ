<!DOCTYPE html>
<html lang="th">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ระบบประชาสัมพันธ์หลักสูตรวิศวกรรมซอฟต์แวร์</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Sarabun:wght@300;400;500;600;700&display=swap"
        rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <style>
        body {
            font-family: 'Sarabun', sans-serif;
            margin: 0;
            padding: 0;
        }

        .top-header {
            background-color: #2c3e50;
            color: white;
            padding: 8px 0;
            font-size: 14px;
        }

        .hero-section {
            background: linear-gradient(135deg, #6c5ce7 0%, #5f3dc4 100%);
            color: white;
            padding: 80px 0;
            position: relative;
        }

        .hero-section::before {
            /* show a computer icon inside a rounded badge */
            content: '💻';
            position: absolute;
            top: 24px;
            right: 24px;
            width: 96px;
            height: 96px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 48px;
            background: rgba(255, 255, 255, 0.08);
            border-radius: 12px;
            color: rgba(255,255,255,0.95);
            box-shadow: 0 8px 20px rgba(15,23,42,0.12);
        }

        .hero-title {
            font-size: 3.5rem;
            font-weight: 700;
            margin-bottom: 0.5rem;
            line-height: 1.2;
        }

        .hero-subtitle {
            font-size: 2rem;
            font-weight: 300;
            margin-bottom: 1rem;
            opacity: 0.9;
        }

        .hero-description {
            font-size: 1.1rem;
            margin-bottom: 2rem;
            opacity: 0.8;
        }

        .btn-guide {
            background-color: white;
            color: #6c5ce7;
            border: none;
            padding: 12px 30px;
            border-radius: 25px;
            font-weight: 500;
            font-size: 1rem;
            transition: all 0.3s ease;
        }

        .btn-guide:hover {
            background-color: #f8f9fa;
            color: #5f3dc4;
            transform: translateY(-2px);
        }

        .content-section {
            padding: 60px 0;
            background-color: #f8f9fa;
        }

        .section-title {
            font-size: 2rem;
            font-weight: 600;
            color: #2c3e50;
            margin-bottom: 2rem;
            position: relative;
        }

        .section-title::after {
            content: '';
            position: absolute;
            bottom: -10px;
            left: 0;
            width: 60px;
            height: 4px;
            background: linear-gradient(90deg, #ffd32a 0%, #6c5ce7 100%);
            border-radius: 2px;
        }

        .info-card {
            background: white;
            border-radius: 15px;
            padding: 30px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.08);
            height: 100%;
            border: 1px solid #e9ecef;
        }

        .info-title {
            font-size: 1.3rem;
            font-weight: 600;
            color: #2c3e50;
            margin-bottom: 1.5rem;
        }

        .info-item {
            margin-bottom: 1rem;
            font-size: 1rem;
            line-height: 1.6;
        }

        .info-label {
            font-weight: 600;
            color: #2c3e50;
        }

        .info-value {
            color: #6c757d;
        }

        /* Faculty Cards */
        .faculty-card {
            background: white;
            border-radius: 15px;
            padding: 25px;
            text-align: center;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.08);
            height: 100%;
            border: 1px solid #e9ecef;
            transition: transform 0.3s ease;
        }

        .faculty-card:hover {
            transform: translateY(-5px);
        }

        .faculty-avatar {
            margin-bottom: 20px;
        }

        .avatar-circle {
            width: 80px;
            height: 80px;
            border-radius: 50%;
            background: linear-gradient(135deg, #6c5ce7 0%, #5f3dc4 100%);
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto;
            color: white;
            font-size: 30px;
        }

        .faculty-name {
            font-size: 1.1rem;
            font-weight: 600;
            color: #2c3e50;
            margin-bottom: 8px;
        }

        .faculty-title {
            font-size: 0.95rem;
            color: #6c5ce7;
            margin-bottom: 5px;
            font-weight: 500;
        }

        .faculty-dept {
            font-size: 0.9rem;
            color: #6c757d;
            margin-bottom: 8px;
        }

        .faculty-email {
            font-size: 0.85rem;
            color: #868e96;
            margin-bottom: 0;
        }

        /* News Cards */
        .news-card {
            background: white;
            border-radius: 15px;
            padding: 25px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.08);
            height: 100%;
            border: 1px solid #e9ecef;
            border-left: 4px solid #ffd32a;
        }

        .news-title {
            font-size: 1.2rem;
            font-weight: 600;
            color: #2c3e50;
            margin-bottom: 10px;
        }

        .news-year {
            font-size: 0.9rem;
            color: #6c5ce7;
            font-weight: 500;
            margin-bottom: 12px;
        }

        .news-description {
            font-size: 0.95rem;
            color: #6c757d;
            line-height: 1.6;
            margin-bottom: 0;
        }

        /* Achievement Cards */
        .achievement-card {
            background: white;
            border-radius: 15px;
            padding: 25px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.08);
            height: 100%;
            border: 1px solid #e9ecef;
            border-left: 4px solid #6c5ce7;
        }

        .achievement-title {
            font-size: 1.2rem;
            font-weight: 600;
            color: #2c3e50;
            margin-bottom: 12px;
        }

        .achievement-description {
            font-size: 0.95rem;
            color: #6c757d;
            line-height: 1.6;
            margin-bottom: 15px;
        }

        .achievement-meta {
            font-size: 0.9rem;
            color: #6c5ce7;
            font-weight: 500;
            margin-bottom: 0;
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
                            <a href="{{ route('admin.dashboard') }}" class="auth-btn" style="background:#28a745;">
                                <i class="fas fa-cog"></i> Admin
                            </a>
                            <form method="POST" action="{{ route('logout') }}" style="display:inline">
                                @csrf
                                <button class="auth-btn secondary" type="submit">Logout</button>
                            </form>
                        </div>
                    @else
                        <a class="auth-btn" href="{{ route('login') }}">Login</a>
                    @endauth
                </div>
            </div>
        </div>
    </div>

    <section class="hero-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <h1 class="hero-title">{{ $program->program_name_th ?? 'ยังไม่ได้ตั้งค่าหลักสูตร' }}</h1>
                    <h2 class="hero-subtitle">{{ $program->program_name_en ?? '' }}</h2>
                    <p class="hero-description">
                        หลักสูตรวิศวกรรมซอฟต์แวร์ สาขาวิชาวิศวกรรมซอฟต์แวร์
                    </p>
                    <div style="display:flex;gap:10px;flex-wrap:wrap">
                        <a href="{{ route('curriculum') }}" class="btn btn-guide">คู่มือหลักสูตร</a>
                        <a href="{{ route('academic') }}" class="btn btn-guide" style="background:rgba(255,255,255,0.12);color:#fff;text-decoration:none">หน้าวิชาการ</a>
                        <a href="{{ route('showcase') }}" class="btn btn-guide" style="background:rgba(255,255,255,0.12);color:#fff;text-decoration:none">อาจารย์และผลงาน</a>
                        @auth
                            <a href="{{ route('program.edit') }}" class="btn btn-guide" style="background:rgba(255,255,255,0.12);color:#fff">แก้ไขหลักสูตร</a>
                        @endauth
                    </div>
                    @if(isset($updatedAt))
                        <div style="margin-top:12px;color:rgba(255,255,255,0.9)">อัปเดตล่าสุด: {{ $updatedAt->format('Y-m-d H:i') }}</div>
                    @endif
                </div>
            </div>
        </div>
    </section>

    <section class="content-section">
        <div class="container">
            <h2 class="section-title">อาจารย์ผู้สอน</h2>

            <div class="row g-4 mb-5">
                @foreach($faculties as $faculty)
                <div class="col-lg-4 col-md-6">
                    <div class="faculty-card">
                        <div class="faculty-avatar">
                            <div class="avatar-circle">
                                <i class="fas fa-user"></i>
                            </div>
                        </div>
                        <div class="faculty-info">
                            <h4 class="faculty-name">{{ $faculty->name_th }}</h4>
                            <p class="faculty-title">{{ $faculty->title_th }}</p>
                            <p class="faculty-dept">{{ $faculty->department_th }}</p>
                            @if($faculty->email)
                                <p class="faculty-email">{{ $faculty->email }}</p>
                            @endif
                        </div>
                    </div>
                </div>
                @endforeach
            </div>

            <h2 class="section-title">ผลงานนักศึกษา</h2>

            <div class="row g-4 mb-5">
                @forelse($news as $newsItem)
                <div class="col-lg-6">
                    <div class="news-card">
                        <div class="news-content">
                            <h4 class="news-title">{{ $newsItem->title_th }}</h4>
                            <p class="news-year">ปี {{ $newsItem->excerpt_th }}</p>
                            <p class="news-description">{{ $newsItem->content_th }}</p>
                        </div>
                    </div>
                </div>
                @empty
                <div class="col-12">
                    <p class="text-center text-muted">ไม่มีข่าวสารในขณะนี้</p>
                </div>
                @endforelse
            </div>

            <h2 class="section-title">ศิษย์เก่าเด่น</h2>

            <div class="row g-4 mb-5">
                @forelse($achievements as $achievement)
                <div class="col-lg-6">
                    <div class="achievement-card">
                        <div class="achievement-content">
                            <h4 class="achievement-title">{{ $achievement->title_th }}</h4>
                            <p class="achievement-description">{{ $achievement->description_th }}</p>
                            <p class="achievement-meta">{{ $achievement->student_name_th }}</p>
                        </div>
                    </div>
                </div>
                @empty
                <div class="col-12">
                    <p class="text-center text-muted">ไม่มีข้อมูลศิษย์เก่าเด่นในขณะนี้</p>
                </div>
                @endforelse
            </div>

            <h2 class="section-title">ภาพรวมหลักสูตร</h2>

            <div class="row g-4">
                <div class="col-lg-6">
                    <div class="info-card">
                        <h3 class="info-title">ข้อมูลหลักสูตร</h3>

                        <div class="info-item">
                            <span class="info-label">ชื่อปริญญา (ไทย):</span>
                            <span class="info-value">{{ $program->degree_th ?? '-' }}</span>
                        </div>

                        <div class="info-item">
                            <span class="info-label">ชื่อปริญญา (อังกฤษ):</span>
                            <span class="info-value">{{ $program->degree_en ?? '-' }}</span>
                        </div>

                        <div class="info-item">
                            <span class="info-label">จำนวนหน่วยกิตที่ต้องเรียน:</span>
                            <span class="info-value">{{ $program->credits_required ?? '-' }}</span>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="info-card">
                        <h3 class="info-title">รายละเอียดการศึกษา</h3>

                        <div class="info-item">
                            <span class="info-label">ภาษาที่ใช้ในการสอน:</span>
                            <span class="info-value">{{ $program->language_th ?? '-' }}</span>
                        </div>

                        <div class="info-item">
                            <span class="info-label">ค่าลงทะเบียนต่อปี:</span>
                            <span class="info-value">{{ ($program && $program->tuition_fee) ? number_format($program->tuition_fee) . ' บาท' : '-' }}</span>
                        </div>

                        <div class="info-item">
                            <span class="info-label">หลักสูตรปี:</span>
                            <span class="info-value">{{ $program->curriculum_year ?? '-' }}</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>