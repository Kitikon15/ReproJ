<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Program;
use App\Models\Faculty;
use App\Models\News;
use App\Models\Achievement;
use App\Models\Video;

class PublicController extends Controller
{
    public function index()
    {
        $program = Program::first();
        $updatedAt = $program?->updated_at;
        
        // Get faculty members for display
        $faculties = Faculty::active()->ordered()->take(6)->get();
        
        // Get recent news
        $news = News::published()->recent()->take(2)->get();
        
        // Get recent achievements
        $achievements = Achievement::published()->recent()->take(2)->get();

        return view('index', compact('program', 'updatedAt', 'faculties', 'news', 'achievements'));
    }

    public function curriculum()
    {
        $program = Program::first();
        
        // Get faculty members
        $faculties = Faculty::active()->ordered()->take(6)->get();
        
        // Get recent achievements for student work section
        $achievements = Achievement::published()->recent()->take(6)->get();
        
        return view('curriculum', compact('program', 'faculties', 'achievements'));
    }

    public function showcase()
    {
        // This page shows faculty, student work, and alumni sections
        // Data can be pulled from database models when needed
        
        return view('showcase');
    }

    public function academic()
    {
        $program = Program::first();
        
        // Get all published news for the academic page
        $news = News::published()->recent()->get();
        
        // Get published videos
        $videos = Video::published()->recent()->get();
        
        return view('academic', compact('program', 'news', 'videos'));
    }
}
