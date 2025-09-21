<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\News;
use App\Models\Video;
use App\Models\Achievement;
use App\Models\Faculty;
use App\Models\Program;

class AdminController extends Controller
{
    public function dashboard()
    {
        $stats = [
            'news_count' => News::count(),
            'videos_count' => Video::count(),
            'achievements_count' => Achievement::count(),
            'faculty_count' => Faculty::count(),
            'recent_news' => News::recent()->take(5)->get(),
            'recent_videos' => Video::recent()->take(5)->get(),
        ];
        
        return view('admin.dashboard', compact('stats'));
    }

    public function newsIndex()
    {
        $news = News::orderBy('created_at', 'desc')->paginate(10);
        return view('admin.news.index', compact('news'));
    }

    public function videosIndex()
    {
        $videos = Video::orderBy('created_at', 'desc')->paginate(10);
        return view('admin.videos.index', compact('videos'));
    }

    public function achievementsIndex()
    {
        $achievements = Achievement::orderBy('created_at', 'desc')->paginate(10);
        return view('admin.achievements.index', compact('achievements'));
    }

    public function facultyIndex()
    {
        $faculty = Faculty::orderBy('sort_order')->paginate(10);
        return view('admin.faculty.index', compact('faculty'));
    }
}
