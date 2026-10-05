<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Activity;
use App\Models\Extracurricular;

class HomeController extends Controller
{
    public function index()
    {
        $posts = Post::where('status', 'published')
            ->latest()
            ->take(3)
            ->get();

        $activities = Activity::where('status', 'upcoming')
            ->orderBy('date')
            ->take(3)
            ->get();

        $extracurriculars = Extracurricular::where('status', 'active')
            ->take(4)
            ->get();

        return view('welcome', compact(
            'posts',
            'activities',
            'extracurriculars'
        ));
    }
}
