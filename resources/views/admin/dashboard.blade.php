@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-12">
        <h1>Admin Dashboard</h1>
        <p>ระบบจัดการเนื้อหาประชาสัมพันธ์หลักสูตรวิศวกรรมซอฟต์แวร์</p>
    </div>
</div>

<div class="row g-4 mb-4">
    <div class="col-md-3">
        <div class="card text-center">
            <div class="card-body">
                <i class="fas fa-newspaper fa-2x mb-2 text-primary"></i>
                <h4>{{ $stats['news_count'] }}</h4>
                <p class="mb-0">ข่าวสาร</p>
                <a href="{{ route('admin.news.index') }}" class="btn btn-sm btn-primary mt-2">จัดการ</a>
            </div>
        </div>
    </div>
    
    <div class="col-md-3">
        <div class="card text-center">
            <div class="card-body">
                <i class="fas fa-video fa-2x mb-2 text-danger"></i>
                <h4>{{ $stats['videos_count'] }}</h4>
                <p class="mb-0">วิดีโอ</p>
                <a href="{{ route('admin.videos.index') }}" class="btn btn-sm btn-danger mt-2">จัดการ</a>
            </div>
        </div>
    </div>
    
    <div class="col-md-3">
        <div class="card text-center">
            <div class="card-body">
                <i class="fas fa-trophy fa-2x mb-2 text-warning"></i>
                <h4>{{ $stats['achievements_count'] }}</h4>
                <p class="mb-0">ผลงานนักศึกษา</p>
                <a href="{{ route('admin.achievements.index') }}" class="btn btn-sm btn-warning mt-2">จัดการ</a>
            </div>
        </div>
    </div>
    
    <div class="col-md-3">
        <div class="card text-center">
            <div class="card-body">
                <i class="fas fa-users fa-2x mb-2 text-success"></i>
                <h4>{{ $stats['faculty_count'] }}</h4>
                <p class="mb-0">อาจารย์</p>
                <a href="{{ route('admin.faculty.index') }}" class="btn btn-sm btn-success mt-2">จัดการ</a>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-6">
        <div class="card">
            <div class="card-header">
                <h5>ข่าวสารล่าสุด</h5>
            </div>
            <div class="card-body">
                @forelse($stats['recent_news'] as $news)
                    <div class="mb-2 pb-2 border-bottom">
                        <strong>{{ $news->title_th }}</strong><br>
                        <small class="text-muted">{{ $news->publish_date->format('d/m/Y') }}</small>
                    </div>
                @empty
                    <p class="text-muted">ไม่มีข่าวสาร</p>
                @endforelse
            </div>
        </div>
    </div>
    
    <div class="col-md-6">
        <div class="card">
            <div class="card-header">
                <h5>วิดีโอล่าสุด</h5>
            </div>
            <div class="card-body">
                @forelse($stats['recent_videos'] as $video)
                    <div class="mb-2 pb-2 border-bottom">
                        <strong>{{ $video->title_th }}</strong><br>
                        <small class="text-muted">{{ $video->publish_date->format('d/m/Y') }} | {{ number_format($video->view_count) }} views</small>
                    </div>
                @empty
                    <p class="text-muted">ไม่มีวิดีโอ</p>
                @endforelse
            </div>
        </div>
    </div>
</div>

<div class="row mt-4">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h5>Quick Actions</h5>
            </div>
            <div class="card-body">
                <a href="{{ route('academic') }}" class="btn btn-outline-primary me-2" target="_blank">
                    <i class="fas fa-eye"></i> ดูหน้าเว็บ Academic
                </a>
                <a href="{{ url('/') }}" class="btn btn-outline-secondary me-2" target="_blank">
                    <i class="fas fa-home"></i> ดูหน้าหลัก
                </a>
                <a href="{{ route('program.edit') }}" class="btn btn-outline-info">
                    <i class="fas fa-edit"></i> แก้ไขข้อมูลหลักสูตร
                </a>
            </div>
        </div>
    </div>
</div>
@endsection