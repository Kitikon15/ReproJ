@extends('layouts.app')

@section('content')
<style>
    .section-header {
        background: linear-gradient(90deg, #ffd32a 0%, #007bff 100%);
        height: 4px;
        margin-bottom: 30px;
        border-radius: 2px;
    }
    
    .section-title {
        font-size: 1.8rem;
        font-weight: 600;
        color: #2c3e50;
        margin-bottom: 0;
        padding-bottom: 10px;
    }
    
    .faculty-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
        gap: 25px;
        margin-bottom: 50px;
    }
    
    .faculty-card {
        background: white;
        border-radius: 10px;
        padding: 25px;
        text-align: center;
        box-shadow: 0 4px 12px rgba(0,0,0,0.08);
        border: 1px solid #e9ecef;
        transition: transform 0.3s ease;
    }
    
    .faculty-card:hover {
        transform: translateY(-5px);
    }
    
    .faculty-avatar {
        width: 80px;
        height: 80px;
        background: #007bff;
        border-radius: 50%;
        margin: 0 auto 20px;
        display: flex;
        align-items: center;
        justify-content: center;
        color: white;
        font-size: 2rem;
    }
    
    .faculty-name {
        font-size: 1.1rem;
        font-weight: 600;
        color: #2c3e50;
        margin-bottom: 8px;
    }
    
    .faculty-title {
        font-size: 0.95rem;
        color: #6c757d;
        margin-bottom: 5px;
    }
    
    .faculty-department {
        font-size: 0.9rem;
        color: #6c757d;
        margin-bottom: 10px;
    }
    
    .faculty-email {
        font-size: 0.85rem;
        color: #007bff;
    }
    
    .news-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(400px, 1fr));
        gap: 30px;
        margin-bottom: 50px;
    }
    
    .news-item {
        background: white;
        border-radius: 10px;
        padding: 25px;
        box-shadow: 0 4px 12px rgba(0,0,0,0.08);
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
        color: #007bff;
        font-weight: 500;
        margin-bottom: 12px;
    }
    
    .news-description {
        color: #6c757d;
        line-height: 1.6;
        font-size: 0.95rem;
    }
    
    .alumni-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
        gap: 25px;
    }
    
    .alumni-item {
        background: white;
        border-radius: 10px;
        padding: 25px;
        box-shadow: 0 4px 12px rgba(0,0,0,0.08);
        border: 1px solid #e9ecef;
        border-left: 4px solid #007bff;
    }
    
    .alumni-title {
        font-size: 1.1rem;
        font-weight: 600;
        color: #2c3e50;
        margin-bottom: 10px;
    }
    
    .alumni-description {
        color: #6c757d;
        line-height: 1.6;
        font-size: 0.95rem;
        margin-bottom: 10px;
    }
    
    .alumni-meta {
        font-size: 0.85rem;
        color: #007bff;
        font-weight: 500;
    }
    
    @media (max-width: 768px) {
        .faculty-grid,
        .news-grid,
        .alumni-grid {
            grid-template-columns: 1fr;
        }
        
        .news-grid {
            grid-template-columns: 1fr;
        }
    }
</style>

<div class="container-fluid" style="max-width: 1200px;">
    <!-- Faculty Section -->
    <div class="mb-5">
        <h2 class="section-title">อาจารย์ผู้สอน</h2>
        <div class="section-header"></div>
        
        <div class="faculty-grid">
            <div class="faculty-card">
                <div class="faculty-avatar">
                    <i class="fas fa-user"></i>
                </div>
                <h4 class="faculty-name">ผศ.ดร.สุชาญ์ ภักดีศรธุรกุลดี</h4>
                <p class="faculty-title">ประธานคณะ สาขาวิชา</p>
                <p class="faculty-department"></p>
                <p class="faculty-email">suchan@university.edu</p>
            </div>
            
            <div class="faculty-card">
                <div class="faculty-avatar">
                    <i class="fas fa-user"></i>
                </div>
                <h4 class="faculty-name">ผศ.ดร. วราเชษฐ์ ธุหรา</h4>
                <p class="faculty-title">รองประธานคณะ (ประธานสาขา)</p>
                <p class="faculty-department"></p>
                <p class="faculty-email">warachet@university.edu</p>
            </div>
            
            <div class="faculty-card">
                <div class="faculty-avatar">
                    <i class="fas fa-user"></i>
                </div>
                <h4 class="faculty-name">ผศ.สมเกียรติ ช่องเพื่อน</h4>
                <p class="faculty-title">รองประธานคณะ ฝ่ายโครงการและธุรกิจแนะแนม</p>
                <p class="faculty-department"></p>
                <p class="faculty-email">somkiat@university.edu</p>
            </div>
            
            <div class="faculty-card">
                <div class="faculty-avatar">
                    <i class="fas fa-user"></i>
                </div>
                <h4 class="faculty-name">ผศ.นฤพงค์ สุวรรณวิจักร</h4>
                <p class="faculty-title">รองประธานคณะ ฝ่ายประกันคุณภาพ</p>
                <p class="faculty-department"></p>
                <p class="faculty-email">naruphong@university.edu</p>
            </div>
            
            <div class="faculty-card">
                <div class="faculty-avatar">
                    <i class="fas fa-user"></i>
                </div>
                <h4 class="faculty-name">อาจารย์ ดร.สุพินชฏ์ จันทร์เรือง</h4>
                <p class="faculty-title">รองประธานคณะ ฝ่ายกิจการนักศึกษา</p>
                <p class="faculty-department"></p>
                <p class="faculty-email">supinchot@university.edu</p>
            </div>
        </div>
    </div>

    <!-- Student Work Section -->
    <div class="mb-5">
        <h2 class="section-title">ผลงานนักศึกษา</h2>
        <div class="section-header"></div>
        
        <div class="news-grid">
            <div class="news-item">
                <h4 class="news-title">ปันเนะและเกษตรขมข่าค 2566</h4>
                <p class="news-year">ปี 2023</p>
                <p class="news-description">โครงการเก็บข้อมูลด้านการเรียนการสอนและโครงการและเกษตรขมข่าคคุณภาพการศึกษาสำหรับปี 2566</p>
            </div>
            
            <div class="news-item">
                <h4 class="news-title">เอกสาร และคู่มือการใช้งาน 2565</h4>
                <p class="news-year">ปี 2022</p>
                <p class="news-description">งานประชุมวิชาการสัมนาทาง ครั้งที่ 15 มกราคม2566เรื่อง นายกปัญญา</p>
            </div>
            
            <div class="news-item">
                <h4 class="news-title">โครงการพัฒนาแอปพลิเคชันมือถือ</h4>
                <p class="news-year">ปี 2024</p>
                <p class="news-description">นักศึกษาชั้นปีที่ 4 พัฒนาแอปพลิเคชันสำหรับการจัดการข้อมูลนักศึกษาและการเรียนการสอน</p>
            </div>
            
            <div class="news-item">
                <h4 class="news-title">การแข่งขันเขียนโปรแกรมระดับชาติ</h4>
                <p class="news-year">ปี 2024</p>
                <p class="news-description">นักศึกษาเข้าร่วมการแข่งขันเขียนโปรแกรมระดับชาติ ACM-ICPC และได้รับรางวัลชมเชย</p>
            </div>
            
            <div class="news-item">
                <h4 class="news-title">โครงการสหกิจศึกษา</h4>
                <p class="news-year">ปี 2023</p>
                <p class="news-description">นักศึกษาเข้าร่วมโครงการสหกิจศึกษากับบริษัทชั้นนำในด้านเทคโนโลยีสารสนเทศ</p>
            </div>
            
            <div class="news-item">
                <h4 class="news-title">งานวิจัยด้าน AI และ Machine Learning</h4>
                <p class="news-year">ปี 2023</p>
                <p class="news-description">นักศึกษาและอาจารย์ร่วมกันทำวิจัยด้านปัญญาประดิษฐ์และการเรียนรู้ของเครื่อง</p>
            </div>
        </div>
    </div>

    <!-- Alumni Section -->
    <div class="mb-5">
        <h2 class="section-title">ศิษย์เก่าเด่น</h2>
        <div class="section-header"></div>
        
        <div class="alumni-grid">
            <div class="alumni-item">
                <h4 class="alumni-title">ศิษย์เก่าเข้าร่วมโครงการปรับปรุงเทค</h4>
                <p class="alumni-description">วิทยาการโครงการเก็บข้อมูลการบรรณานิเทศวิปปิยภิชัยนำวิศวกรรมซอฟต์แวร์</p>
                <p class="alumni-meta">มหาวิทยาลัยเทคโนโลยีพระจอมเกล้า</p>
            </div>
            
            <div class="alumni-item">
                <h4 class="alumni-title">นักศึกษาได้รับเปลี่ยนภาษาที่เวียดนาม</h4>
                <p class="alumni-description">นักศึกษาที่ได้รับทุนเปลี่ยนภาษา</p>
                <p class="alumni-meta">สถาบันการศึกษาในเวียดนาม</p>
            </div>
            
            <div class="alumni-item">
                <h4 class="alumni-title">คิษย์เก่าที่ทำงานในบริษัทชั้นนำ</h4>
                <p class="alumni-description">ศิษย์เก่าที่ไปทำงานในบริษัทเทคโนโลยีชั้นนำอย่าง Google, Microsoft, Apple</p>
                <p class="alumni-meta">Software Engineer ที่ Silicon Valley</p>
            </div>
            
            <div class="alumni-item">
                <h4 class="alumni-title">ผู้พัฒนา Startup ด้านเทคโนโลยี</h4>
                <p class="alumni-description">ศิษย์เก่าที่ก่อตั้งบริษัท Startup ด้าน FinTech และ E-commerce ที่ประสบความสำเร็จ</p>
                <p class="alumni-meta">CEO/CTO ของบริษัท Startup</p>
            </div>
            
            <div class="alumni-item">
                <h4 class="alumni-title">นักวิจัยและผู้พัฒนาระบบ AI</h4>
                <p class="alumni-description">ศิษย์เก่าที่เป็นนักวิจัยและผู้พัฒนาระบบปัญญาประดิษฐ์และ Machine Learning</p>
                <p class="alumni-meta">Research Scientist และ AI Developer</p>
            </div>
            
            <div class="alumni-item">
                <h4 class="alumni-title">อาจารย์มหาวิทยาลัย</h4>
                <p class="alumni-description">ศิษย์เก่าที่กลับมาทำงานสอนและถ่ายทอดความรู้ให้กับรุ่นหลัง</p>
                <p class="alumni-meta">อาจารย์ประจำของมหาวิทยาลัยชั้นนำ</p>
            </div>
        </div>
    </div>
</div>

<!-- Navigation -->
<div class="text-center mt-4">
    <a href="{{ url('/') }}" class="btn btn-primary me-2">
        <i class="fas fa-home"></i> หน้าหลัก
    </a>
    <a href="{{ route('academic') }}" class="btn btn-secondary me-2">
        <i class="fas fa-graduation-cap"></i> หน้าวิชาการ
    </a>
    <a href="{{ route('curriculum') }}" class="btn btn-outline-primary">
        <i class="fas fa-book"></i> หลักสูตร
    </a>
</div>
@endsection