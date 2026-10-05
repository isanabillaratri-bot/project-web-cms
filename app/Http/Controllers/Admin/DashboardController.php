<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Post;
use App\Models\Activity;
use App\Models\Extracurricular;
use App\Models\ExtracurricularRegistration;
use App\Models\StudentRegistration;

class DashboardController extends Controller
{
    public function index()
    {
        $postCount = Post::count();
        $activityCount = Activity::count();
        $extracurricularCount = Extracurricular::count();
        $extracurricularRegistrationCount = ExtracurricularRegistration::count();
        $studentRegistrationCount = StudentRegistration::count();

        return view('admin.dashboard', compact(
            'postCount',
            'activityCount',
            'extracurricularCount',
            'extracurricularRegistrationCount',
            'studentRegistrationCount'
        ));
    }
}
