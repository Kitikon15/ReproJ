<!DOCTYPE html>
<html lang="th">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ระบบประชาสัมพันธ์หลักสูตรวิศวกรรมซอฟต์แวร์</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Sarabun:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <style>
        body {
            font-family: 'Sarabun', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f8f9fa;
        }

        .top-header {
            background-color: #2c3e50;
            color: white;
            padding: 8px 0;
            font-size: 14px;
        }

        .main-header {
            background: linear-gradient(135deg, #1e5799 0%, #2989d8 50%, #207cca 51%, #7db9e8 100%);
            color: white;
            padding: 40px 0;
            position: relative;
        }

        .main-header::before {
            content: '';
            position: absolute;
            top: 20px;
            right: 40px;
            width: 80px;
            height: 60px;
            border: 3px solid rgba(255,255,255,0.8);
            border-radius: 8px;
            background: transparent;
        }

        .program-title {
            font-size: 3rem;
            font-weight: 700;
            margin-bottom: 0.5rem;
            line-height: 1.2;
        }

        .program-subtitle {
            font-size: 1.2rem;
            margin-bottom: 1rem;
            opacity: 0.9;
        }

        .program-details {
            font-size: 1rem;
            margin-bottom: 0.5rem;
            opacity: 0.9;
        }

        .stats-section {
            background: white;
            padding: 30px 0;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
        }

        .stat-item {
            text-align: center;
            padding: 20px;
            border-radius: 10px;
            background: #f8f9fa;
            margin: 0 10px;
        }

        .stat-icon {
            font-size: 2rem;
            color: #2989d8;
            margin-bottom: 10px;
        }

        .stat-label {
            font-size: 0.9rem;
            color: #666;
            margin-bottom: 5px;
        }

        .stat-value {
            font-size: 1.2rem;
            font-weight: 600;
            color: #2c3e50;
        }

        .content-section {
            padding: 40px 0;
        }

        .filter-tabs {
            background: white;
            border-radius: 10px;
            padding: 20px;
            margin-bottom: 30px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.05);
        }

        .tab-button {
            background: transparent;
            border: 1px solid #ddd;
            padding: 10px 20px;
            margin: 5px;
            border-radius: 25px;
            color: #666;
            font-weight: 500;
            cursor: pointer;
            transition: all 0.3s ease;
        }

        .tab-button.active {
            background: #2989d8;
            color: white;
            border-color: #2989d8;
            transform: translateY(-2px);
            box-shadow: 0 4px 12px rgba(41, 137, 216, 0.3);
        }

        .tab-button:hover {
            background: #f0f8ff;
            border-color: #2989d8;
            transform: translateY(-1px);
        }

        .news-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
            gap: 25px;
        }

        .news-card {
            background: white;
            border-radius: 15px;
            overflow: hidden;
            box-shadow: 0 5px 15px rgba(0,0,0,0.08);
            transition: all 0.3s ease;
            opacity: 1;
            transform: translateY(0);
        }

        .news-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 25px rgba(0,0,0,0.15);
        }

        .news-card.hiding {
            opacity: 0;
            transform: translateY(20px);
        }

        .news-date {
            background: #f8f9fa;
            padding: 15px 20px;
            border-bottom: 1px solid #eee;
        }

        .news-date i {
            color: #2989d8;
            margin-right: 8px;
        }

        .news-content {
            padding: 20px;
        }

        .news-title {
            font-size: 1.1rem;
            font-weight: 600;
            color: #2c3e50;
            margin-bottom: 10px;
            line-height: 1.4;
        }

        .news-description {
            color: #666;
            font-size: 0.95rem;
            line-height: 1.6;
        }

        .video-section {
            background: white;
            border-radius: 15px;
            padding: 30px;
            margin-top: 40px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.08);
        }

        .section-title {
            font-size: 1.8rem;
            font-weight: 600;
            color: #2c3e50;
            margin-bottom: 30px;
            display: flex;
            align-items: center;
        }

        .section-title i {
            margin-right: 15px;
            color: #2989d8;
        }

        .video-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 25px;
        }

        .video-card {
            background: #f8f9fa;
            border-radius: 10px;
            padding: 20px;
            text-align: center;
        }

        .video-thumbnail {
            width: 80px;
            height: 80px;
            background: #2989d8;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 15px;
            cursor: pointer;
            transition: background 0.3s ease;
        }

        .video-thumbnail:hover {
            background: #1e5799;
        }

        .video-thumbnail i {
            color: white;
            font-size: 2rem;
        }

        .video-title {
            font-size: 1.1rem;
            font-weight: 600;
            color: #2c3e50;
            margin-bottom: 10px;
        }

        .video-description {
            color: #666;
            font-size: 0.9rem;
            line-height: 1.5;
            margin-bottom: 15px;
        }

        .watch-btn {
            background: #2989d8;
            color: white;
            border: none;
            padding: 8px 20px;
            border-radius: 20px;
            font-size: 0.9rem;
            cursor: pointer;
            transition: background 0.3s ease;
        }

        .watch-btn:hover {
            background: #1e5799;
        }

        .video-duration,
        .video-views {
            font-size: 0.85rem;
            color: #666;
            margin-bottom: 8px;
        }

        .video-duration i,
        .video-views i {
            margin-right: 5px;
            color: #2989d8;
        }

        .video-thumbnail img {
            cursor: pointer;
            transition: transform 0.3s ease;
        }

        .video-thumbnail img:hover {
            transform: scale(1.05);
        }

        /* Featured Cards for All/Home content */
        .featured-card {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
            border-radius: 15px;
            padding: 30px;
            box-shadow: 0 10px 25px rgba(0,0,0,0.15);
            grid-column: span 2;
            margin-bottom: 20px;
        }

        .featured-header {
            display: flex;
            align-items: center;
            margin-bottom: 20px;
        }

        .featured-header i {
            font-size: 2.5rem;
            margin-right: 20px;
            color: rgba(255,255,255,0.9);
        }

        .featured-header h3 {
            font-size: 1.5rem;
            font-weight: 600;
            margin: 0;
        }

        .featured-content p {
            font-size: 1.1rem;
            margin-bottom: 20px;
            opacity: 0.9;
            line-height: 1.6;
        }

        .stats-row {
            display: flex;
            justify-content: space-around;
            text-align: center;
        }

        .stat {
            display: flex;
            flex-direction: column;
        }

        .stat strong {
            font-size: 2rem;
            font-weight: 700;
            margin-bottom: 5px;
        }

        .stat span {
            font-size: 0.9rem;
            opacity: 0.8;
        }

        .tech-tags {
            display: flex;
            flex-wrap: wrap;
            gap: 10px;
        }

        .tech-tag {
            background: rgba(255,255,255,0.2);
            padding: 5px 12px;
            border-radius: 20px;
            font-size: 0.9rem;
            border: 1px solid rgba(255,255,255,0.3);
        }

        .footer {
            background: #2c3e50;
            color: white;
            padding: 40px 0;
            margin-top: 60px;
        }

        .footer-content {
            display: grid;
            grid-template-columns: 2fr 1fr;
            gap: 40px;
        }

        .footer-title {
            font-size: 1.1rem;
            font-weight: 600;
            margin-bottom: 15px;
        }

        .footer-text {
            color: #bdc3c7;
            line-height: 1.6;
        }

        .contact-info {
            color: #bdc3c7;
        }

        .contact-info p {
            margin-bottom: 8px;
        }

        /* Language Toggle */
        .language-toggle {
            display: flex;
            gap: 5px;
        }

        .lang-btn {
            background: rgba(255,255,255,0.2);
            border: 1px solid rgba(255,255,255,0.3);
            color: white;
            padding: 6px 12px;
            border-radius: 4px;
            font-size: 0.85rem;
            cursor: pointer;
            transition: all 0.3s ease;
        }

        .lang-btn:hover {
            background: rgba(255,255,255,0.3);
        }

        .lang-btn.active {
            background: rgba(255,255,255,0.9);
            color: #2c3e50;
            border-color: white;
        }

        @media (max-width: 768px) {
            .program-title {
                font-size: 2rem;
            }
            
            .main-header::before {
                width: 60px;
                height: 45px;
                right: 20px;
            }
            
            .news-grid,
            .video-grid {
                grid-template-columns: 1fr;
            }
            
            .featured-card {
                grid-column: span 1;
                padding: 20px;
            }
            
            .featured-header {
                flex-direction: column;
                text-align: center;
                margin-bottom: 15px;
            }
            
            .featured-header i {
                margin-right: 0;
                margin-bottom: 10px;
            }
            
            .stats-row {
                flex-direction: column;
                gap: 15px;
            }
            
            .footer-content {
                grid-template-columns: 1fr;
                gap: 20px;
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
                    <span style="margin-left: 20px;">
                        <a href="{{ url('/') }}" style="color: #bdc3c7; text-decoration: none; margin-right: 15px;">
                            <i class="fas fa-home"></i> หน้าหลัก
                        </a>
                        <a href="{{ route('curriculum') }}" style="color: #bdc3c7; text-decoration: none; margin-right: 15px;">
                            <i class="fas fa-book"></i> หลักสูตร
                        </a>
                        <a href="{{ route('showcase') }}" style="color: #bdc3c7; text-decoration: none;">
                            <i class="fas fa-users"></i> อาจารย์
                        </a>
                    </span>
                </div>
                <div class="col-md-4 text-end">
                    <div class="d-flex align-items-center justify-content-end gap-3">
                        <div class="language-toggle">
                            <button class="lang-btn active" data-lang="th">
                                <i class="fas fa-globe"></i> TH
                            </button>
                            <button class="lang-btn" data-lang="en">
                                <i class="fas fa-globe"></i> EN
                            </button>
                        </div>
                        @auth
                            <div class="d-flex gap-2">
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
    </div>

    <section class="main-header">
        <div class="container">
            <div class="row">
                <div class="col-lg-10">
                    <h1 class="program-title">วิศวกรรมซอฟต์แวร์</h1>
                    <p class="program-subtitle">Software Engineering</p>
                    <p class="program-details">วิทยาศาสตรบัณฑิต (วิศวกรรมซอฟต์แวร์) | Bachelor of Science (Software Engineering)</p>
                    <p class="program-details">จำนวนหน่วยกิต: 128 | ค่าเล่าเรียน: 11,400.00 บาท/เทอม</p>
                </div>
            </div>
        </div>
    </section>

    <section class="stats-section">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="stat-item">
                        <div class="stat-icon">
                            <i class="fas fa-language"></i>
                        </div>
                        <div class="stat-label">ภาษาที่ใช้</div>
                        <div class="stat-value">ไทย/Thai</div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="stat-item">
                        <div class="stat-icon">
                            <i class="fas fa-calendar"></i>
                        </div>
                        <div class="stat-label">หลักสูตรปี</div>
                        <div class="stat-value">2564</div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="stat-item">
                        <div class="stat-icon">
                            <i class="fas fa-clock"></i>
                        </div>
                        <div class="stat-label">ระยะเวลาเรียน</div>
                        <div class="stat-value">4 ปี</div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="content-section">
        <div class="container">
            <div class="filter-tabs">
                <div class="d-flex flex-column flex-md-row justify-content-between align-items-start align-items-md-center gap-3">
                    <div class="d-flex flex-wrap align-items-center">
                        <button class="tab-button active" data-filter="all">
                            <i class="fas fa-home"></i> หนักเรื่อง
                        </button>
                        <button class="tab-button" data-filter="news">
                            <i class="fas fa-newspaper"></i> ข่าวสาร
                        </button>
                        <button class="tab-button" data-filter="research">
                            <i class="fas fa-flask"></i> ผลงาน
                        </button>
                        <button class="tab-button" data-filter="activity">
                            <i class="fas fa-calendar-check"></i> กิจกรรม
                        </button>
                        <button class="tab-button" data-filter="media">
                            <i class="fas fa-photo-video"></i> สื่อประชาสัมพันธ์
                        </button>
                        <button class="tab-button" data-filter="other">
                            <i class="fas fa-ellipsis-h"></i> อื่นๆ
                        </button>
                    </div>
                    <div class="search-container">
                        <div class="input-group" style="width: 300px;">
                            <input type="text" class="form-control" id="searchInput" placeholder="ค้นหาข่าวสาร...">
                            <button class="btn btn-outline-secondary" type="button" id="searchBtn">
                                <i class="fas fa-search"></i>
                            </button>
                            <button class="btn btn-outline-secondary" type="button" id="clearBtn">
                                <i class="fas fa-times"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="news-grid" id="newsGrid">
                <!-- All/Home content - special cards -->
                <div class="featured-card all-content" data-category="all">
                    <div class="featured-header">
                        <i class="fas fa-graduation-cap"></i>
                        <h3>เจาะลึกนักศึกษาวิศวกรรมซอฟต์แวร์</h3>
                    </div>
                    <div class="featured-content">
                        <p>ตรวจสอบและประเมินคุณภาพของซอฟต์แวร์ที่พัฒนา</p>
                        <div class="stats-row">
                            <div class="stat">
                                <strong>120+</strong>
                                <span>นักศึกษา</span>
                            </div>
                            <div class="stat">
                                <strong>15+</strong>
                                <span>อาจารย์</span>
                            </div>
                            <div class="stat">
                                <strong>95%</strong>
                                <span>มีงานทำ</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="featured-card all-content" data-category="all">
                    <div class="featured-header">
                        <i class="fas fa-code"></i>
                        <h3>โปรแกรมเมอร์</h3>
                    </div>
                    <div class="featured-content">
                        <p>เรียนรู้การพัฒนาโปรแกรมด้วยภาษาที่ทันสมัย</p>
                        <div class="tech-tags">
                            <span class="tech-tag">Python</span>
                            <span class="tech-tag">Java</span>
                            <span class="tech-tag">JavaScript</span>
                            <span class="tech-tag">React</span>
                            <span class="tech-tag">Laravel</span>
                        </div>
                    </div>
                </div>

                @foreach($news as $newsItem)
                <div class="news-card" data-category="news">
                    <div class="news-date">
                        <i class="fas fa-calendar"></i>
                        {{ $newsItem->publish_date->format('d F Y') }}
                    </div>
                    <div class="news-content">
                        <h4 class="news-title">{{ $newsItem->title_th }}</h4>
                        <p class="news-description">{{ Str::limit($newsItem->content_th, 150) }}</p>
                    </div>
                </div>
                @endforeach

                <!-- Research/Academic Content -->
                <div class="news-card" data-category="research">
                    <div class="news-date">
                        <i class="fas fa-calendar"></i>
                        29 September 2025
                    </div>
                    <div class="news-content">
                        <h4 class="news-title">สัมมนาวิจัย Software Architecture Patterns</h4>
                        <p class="news-description">สัมมนาเพื่อแลกเปลี่ยนประสบการณ์ด้าน Software Architecture และแนวโน้มการพัฒนาในอนาคต</p>
                    </div>
                </div>

                <div class="news-card" data-category="research">
                    <div class="news-date">
                        <i class="fas fa-calendar"></i>
                        15 August 2025
                    </div>
                    <div class="news-content">
                        <h4 class="news-title">เจาะลึกนวัตกรรมคอมพิวเตอร์ซอฟต์แวร์</h4>
                        <p class="news-description">ตรวจสอบและประเมินคุณภาพของซอฟต์แวร์ที่พัฒนา</p>
                    </div>
                </div>

                <div class="news-card" data-category="research">
                    <div class="news-date">
                        <i class="fas fa-calendar"></i>
                        10 July 2025
                    </div>
                    <div class="news-content">
                        <h4 class="news-title">วิศวกรรมซอฟต์แวร์</h4>
                        <p class="news-description">องค์ประกอบและเซอร์วิสของซอฟต์แวร์ที่มีคุณภาพดีมีการ</p>
                    </div>
                </div>

                <!-- Activity Content -->
                <div class="news-card" data-category="activity">
                    <div class="news-date">
                        <i class="fas fa-calendar"></i>
                        24 September 2025
                    </div>
                    <div class="news-content">
                        <h4 class="news-title">โครงการแนะน้องใหม่ด้านการเก็บข้อมูลใหม่</h4>
                        <p class="news-description">กิจกรรมแนะแนวด้านการเก็บข้อมูลใหม่ พร้อมกิจกรรม Ice breaking</p>
                    </div>
                </div>

                <div class="news-card" data-category="activity">
                    <div class="news-date">
                        <i class="fas fa-calendar"></i>
                        14 September 2025
                    </div>
                    <div class="news-content">
                        <h4 class="news-title">ตรวจประกันคุณภาพการศึกษาตามใน ระดับหลักสูตร 2566</h4>
                        <p class="news-description">กิจกรรมการตรวจประกันคุณภาพการศึกษาตามในหลักสูตร</p>
                    </div>
                </div>

                <div class="news-card" data-category="activity">
                    <div class="news-date">
                        <i class="fas fa-calendar"></i>
                        01 September 2025
                    </div>
                    <div class="news-content">
                        <h4 class="news-title">โปรแกรมแนะน้อง</h4>
                        <p class="news-description">เชิญนิสิตและพี่เมนต์ในโครงการเมนทอร์ไซต์</p>
                    </div>
                </div>

                <div class="news-card" data-category="activity">
                    <div class="news-date">
                        <i class="fas fa-calendar"></i>
                        20 August 2025
                    </div>
                    <div class="news-content">
                        <h4 class="news-title">นักศึกษาขอขยาย</h4>
                        <p class="news-description">กลยุทธ์ระบบขอขยายเวลาที่นำมาจึงยื่นขยายเวลาต่อ</p>
                    </div>
                </div>

                <!-- Media Content -->
                <div class="news-card" data-category="media">
                    <div class="news-date">
                        <i class="fas fa-calendar"></i>
                        04 September 2025
                    </div>
                    <div class="news-content">
                        <h4 class="news-title">พักผ่อนยองใจ</h4>
                        <p class="news-description">กิจกรรมพักผ่อนยองใจสำหรับนักศึกษา</p>
                    </div>
                </div>

                <div class="news-card" data-category="media">
                    <div class="news-date">
                        <i class="fas fa-calendar"></i>
                        12 August 2025
                    </div>
                    <div class="news-content">
                        <h4 class="news-title">สื่อประชาสัมพันธ์หลักสูตร</h4>
                        <p class="news-description">วิดีโอแนะนำหลักสูตรและกิจกรรมต่างๆ ของภาควิชา</p>
                    </div>
                </div>

                <!-- Other Content -->
                <div class="news-card" data-category="other">
                    <div class="news-date">
                        <i class="fas fa-calendar"></i>
                        19 September 2025
                    </div>
                    <div class="news-content">
                        <h4 class="news-title">เตรียมความพร้อม 2567</h4>
                        <p class="news-description">กิจกรรมเตรียมความพร้อมสำหรับนักศึกษาใหม่ ปี 2567</p>
                    </div>
                </div>

                <div class="news-card" data-category="other">
                    <div class="news-date">
                        <i class="fas fa-calendar"></i>
                        05 August 2025
                    </div>
                    <div class="news-content">
                        <h4 class="news-title">ประกาศผลการรับสมัคร</h4>
                        <p class="news-description">ประกาศรายชื่อผู้ผ่านการคัดเลือกเข้าศึกษาต่อ</p>
                    </div>
                </div>
            </div>
                @foreach($news as $newsItem)
                <div class="news-card" data-category="news">
                    <div class="news-date">
                        <i class="fas fa-calendar"></i>
                        {{ $newsItem->publish_date->format('d F Y') }}
                    </div>
                    <div class="news-content">
                        <h4 class="news-title">{{ $newsItem->title_th }}</h4>
                        <p class="news-description">{{ Str::limit($newsItem->content_th, 150) }}</p>
                    </div>
                </div>
                @endforeach

                <!-- Research/Academic Content -->
                <div class="news-card" data-category="research">
                    <div class="news-date">
                        <i class="fas fa-calendar"></i>
                        29 September 2025
                    </div>
                    <div class="news-content">
                        <h4 class="news-title">สัมมนาวิจัย Software Architecture Patterns</h4>
                        <p class="news-description">สัมมนาเพื่อแลกเปลี่ยนประสบการณ์ด้าน Software Architecture และแนวโน้มการพัฒนาในอนาคต</p>
                    </div>
                </div>

                <div class="news-card" data-category="research">
                    <div class="news-date">
                        <i class="fas fa-calendar"></i>
                        15 August 2025
                    </div>
                    <div class="news-content">
                        <h4 class="news-title">เจาะลึกนวัตกรรมคอมพิวเตอร์ซอฟต์แวร์</h4>
                        <p class="news-description">ตรวจสอบและประเมินคุณภาพของซอฟต์แวร์ที่พัฒนา</p>
                    </div>
                </div>

                <div class="news-card" data-category="research">
                    <div class="news-date">
                        <i class="fas fa-calendar"></i>
                        10 July 2025
                    </div>
                    <div class="news-content">
                        <h4 class="news-title">วิศวกรรมซอฟต์แวร์</h4>
                        <p class="news-description">องค์ประกอบและเซอร์วิสของซอฟต์แวร์ที่มีคุณภาพดีมีการ</p>
                    </div>
                </div>

                <!-- Activity Content -->
                <div class="news-card" data-category="activity">
                    <div class="news-date">
                        <i class="fas fa-calendar"></i>
                        24 September 2025
                    </div>
                    <div class="news-content">
                        <h4 class="news-title">โครงการแนะน้องใหม่ด้านการเก็บข้อมูลใหม่</h4>
                        <p class="news-description">กิจกรรมแนะแนวด้านการเก็บข้อมูลใหม่ พร้อมกิจกรรม Ice breaking</p>
                    </div>
                </div>

                <div class="news-card" data-category="activity">
                    <div class="news-date">
                        <i class="fas fa-calendar"></i>
                        14 September 2025
                    </div>
                    <div class="news-content">
                        <h4 class="news-title">ตรวจประกันคุณภาพการศึกษาตามใน ระดับหลักสูตร 2566</h4>
                        <p class="news-description">กิจกรรมการตรวจประกันคุณภาพการศึกษาตามในหลักสูตร</p>
                    </div>
                </div>

                <div class="news-card" data-category="activity">
                    <div class="news-date">
                        <i class="fas fa-calendar"></i>
                        01 September 2025
                    </div>
                    <div class="news-content">
                        <h4 class="news-title">โปรแกรมแนะน้อง</h4>
                        <p class="news-description">เชิญนิสิตและพี่เมนต์ในโครงการเมนทอร์ไซต์</p>
                    </div>
                </div>

                <div class="news-card" data-category="activity">
                    <div class="news-date">
                        <i class="fas fa-calendar"></i>
                        20 August 2025
                    </div>
                    <div class="news-content">
                        <h4 class="news-title">นักศึกษาขอขยาย</h4>
                        <p class="news-description">กลยุทธ์ระบบขอขยายเวลาที่นำมาจึงยื่นขยายเวลาต่อ</p>
                    </div>
                </div>

                <!-- Media Content -->
                <div class="news-card" data-category="media">
                    <div class="news-date">
                        <i class="fas fa-calendar"></i>
                        04 September 2025
                    </div>
                    <div class="news-content">
                        <h4 class="news-title">พักผ่อนยองใจ</h4>
                        <p class="news-description">กิจกรรมพักผ่อนยองใจสำหรับนักศึกษา</p>
                    </div>
                </div>

                <div class="news-card" data-category="media">
                    <div class="news-date">
                        <i class="fas fa-calendar"></i>
                        12 August 2025
                    </div>
                    <div class="news-content">
                        <h4 class="news-title">สื่อประชาสัมพันธ์หลักสูตร</h4>
                        <p class="news-description">วิดีโอแนะนำหลักสูตรและกิจกรรมต่างๆ ของภาควิชา</p>
                    </div>
                </div>

                <!-- Other Content -->
                <div class="news-card" data-category="other">
                    <div class="news-date">
                        <i class="fas fa-calendar"></i>
                        19 September 2025
                    </div>
                    <div class="news-content">
                        <h4 class="news-title">เตรียมความพร้อม 2567</h4>
                        <p class="news-description">กิจกรรมเตรียมความพร้อมสำหรับนักศึกษาใหม่ ปี 2567</p>
                    </div>
                </div>

                <div class="news-card" data-category="other">
                    <div class="news-date">
                        <i class="fas fa-calendar"></i>
                        05 August 2025
                    </div>
                    <div class="news-content">
                        <h4 class="news-title">ประกาศผลการรับสมัคร</h4>
                        <p class="news-description">ประกาศรายชื่อผู้ผ่านการคัดเลือกเข้าศึกษาต่อ</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="video-section">
        <div class="container">
            <h2 class="section-title">
                <i class="fas fa-play-circle"></i>
                วิดีโอแนะนำ
            </h2>
            
            <div class="video-grid">
                @foreach($videos as $video)
                <div class="video-card">
                    <div class="video-thumbnail" data-video-url="{{ $video->video_url }}" data-video-type="{{ $video->video_type }}">
                        @if($video->video_type === 'youtube' && $video->youtube_id)
                            <img src="https://img.youtube.com/vi/{{ $video->youtube_id }}/maxresdefault.jpg" alt="{{ $video->title_th }}" style="width: 100%; height: 120px; object-fit: cover; border-radius: 8px; margin-bottom: 15px;">
                        @else
                            <i class="fas fa-play"></i>
                        @endif
                    </div>
                    <h4 class="video-title">{{ $video->title_th }}</h4>
                    <p class="video-description">{{ Str::limit($video->description_th, 100) }}</p>
                    @if($video->formatted_duration)
                        <p class="video-duration"><i class="fas fa-clock"></i> {{ $video->formatted_duration }}</p>
                    @endif
                    <p class="video-views"><i class="fas fa-eye"></i> {{ number_format($video->view_count) }} ครั้ง</p>
                    <button class="watch-btn" data-video-url="{{ $video->video_url }}">
                        <i class="fas fa-play"></i> ดูวิดีโอ
                    </button>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    <footer class="footer">
        <div class="container">
            <div class="footer-content">
                <div>
                    <h4 class="footer-title">ระบบประชาสัมพันธ์หลักสูตรวิศวกรรมซอฟต์แวร์</h4>
                    <p class="footer-text">
                        คณะวิศวกรรมศาสตร์ สาขา และสำคัญการกันตี่บทีเครื่องในหลักสูตรวิศวกรรมซอฟต์แวร์
                    </p>
                </div>
                <div>
                    <h4 class="footer-title">ติดต่อเรา</h4>
                    <div class="contact-info">
                        <p>ภาควิชาวิศวกรรมซอฟต์แวร์</p>
                        <p>โทรศัพท์: 02-XXX-XXXX</p>
                        <p>อีเมล: se@university.edu</p>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        // Filter functionality
        document.addEventListener('DOMContentLoaded', function() {
            const filterButtons = document.querySelectorAll('.tab-button');
            const newsCards = document.querySelectorAll('.news-card, .featured-card');
            const langButtons = document.querySelectorAll('.lang-btn');

            // Filter tabs functionality
            filterButtons.forEach(button => {
                button.addEventListener('click', function() {
                    // Update active button
                    filterButtons.forEach(btn => btn.classList.remove('active'));
                    this.classList.add('active');

                    // Filter cards with animation
                    const filter = this.getAttribute('data-filter');
                    
                    newsCards.forEach((card, index) => {
                        const cardCategory = card.getAttribute('data-category');
                        
                        setTimeout(() => {
                            if (filter === 'all') {
                                // Show all content
                                card.style.display = 'block';
                                card.classList.remove('hiding');
                            } else if (cardCategory === filter) {
                                // Show specific category
                                card.style.display = 'block';
                                card.classList.remove('hiding');
                            } else if (cardCategory === 'all' && filter !== 'all') {
                                // Hide 'all' content when specific filter is selected
                                card.classList.add('hiding');
                                setTimeout(() => {
                                    card.style.display = 'none';
                                }, 300);
                            } else {
                                // Hide content that doesn't match
                                card.classList.add('hiding');
                                setTimeout(() => {
                                    card.style.display = 'none';
                                }, 300);
                            }
                        }, index * 50); // Stagger animation
                    });

                    // Clear search when filtering
                    const searchInput = document.getElementById('searchInput');
                    if (searchInput) {
                        searchInput.value = '';
                    }
                });
            });

            // Language toggle functionality
            langButtons.forEach(button => {
                button.addEventListener('click', function() {
                    // Update active language button
                    langButtons.forEach(btn => btn.classList.remove('active'));
                    this.classList.add('active');

                    const selectedLang = this.getAttribute('data-lang');
                    
                    // Here you would typically make an AJAX call to change language
                    // For now, we'll just show an alert
                    if (selectedLang === 'en') {
                        alert('English language mode activated');
                        // You could reload the page with ?lang=en parameter
                        // window.location.href = window.location.pathname + '?lang=en';
                    } else {
                        alert('เปลี่ยนเป็นภาษาไทยแล้ว');
                        // window.location.href = window.location.pathname + '?lang=th';
                    }
                });
            });

            // Search functionality
            const searchInput = document.getElementById('searchInput');
            const searchBtn = document.getElementById('searchBtn');
            const clearBtn = document.getElementById('clearBtn');

            function performSearch() {
                const searchTerm = searchInput.value.toLowerCase().trim();
                
                newsCards.forEach(card => {
                    const title = card.querySelector('.news-title, .featured-header h3')?.textContent.toLowerCase() || '';
                    const description = card.querySelector('.news-description, .featured-content p')?.textContent.toLowerCase() || '';
                    
                    if (searchTerm === '' || title.includes(searchTerm) || description.includes(searchTerm)) {
                        card.style.display = 'block';
                    } else {
                        card.style.display = 'none';
                    }
                });
                
                // Also reset filter to 'all' when searching
                if (searchTerm) {
                    filterButtons.forEach(btn => btn.classList.remove('active'));
                    document.querySelector('[data-filter="all"]').classList.add('active');
                }
            }

            function clearSearch() {
                searchInput.value = '';
                performSearch();
            }

            searchBtn.addEventListener('click', performSearch);
            clearBtn.addEventListener('click', clearSearch);
            
            searchInput.addEventListener('keypress', function(e) {
                if (e.key === 'Enter') {
                    performSearch();
                }
            });
            
            searchInput.addEventListener('input', function() {
                if (this.value === '') {
                    performSearch();
                }
            });

            // Video play functionality
            const videoThumbnails = document.querySelectorAll('.video-thumbnail');
            videoThumbnails.forEach(thumbnail => {
                thumbnail.addEventListener('click', function() {
                    const videoUrl = this.getAttribute('data-video-url');
                    const videoType = this.getAttribute('data-video-type');
                    
                    if (videoUrl) {
                        window.open(videoUrl, '_blank');
                    } else {
                        alert('วิดีโอจะเปิดในหน้าต่างใหม่');
                    }
                });
            });

            const watchBtns = document.querySelectorAll('.watch-btn');
            watchBtns.forEach(btn => {
                btn.addEventListener('click', function() {
                    const videoUrl = this.getAttribute('data-video-url');
                    
                    if (videoUrl) {
                        window.open(videoUrl, '_blank');
                    } else {
                        alert('วิดีโอจะเปิดในหน้าต่างใหม่');
                    }
                });
            });
        });
    </script>
</body>

</html>