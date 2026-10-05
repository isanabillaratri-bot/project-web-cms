<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ActivityController;
use App\Http\Controllers\ExtracurricularController;
use App\Http\Controllers\StudentRegistrationController;

use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\PostController as AdminPostController;
use App\Http\Controllers\Admin\ActivityController as AdminActivityController;
use App\Http\Controllers\Admin\ExtracurricularController as AdminExtracurricularController;
use App\Http\Controllers\Admin\ExtracurricularRegistrationController as AdminExtracurricularRegistrationController;
use App\Http\Controllers\Admin\StudentRegistrationController as AdminStudentRegistrationController;


// ====================
// PUBLIC
// ====================

Route::get('/', [HomeController::class, 'index']);

Route::get('/posts', [PostController::class, 'index']);
Route::get('/posts/{slug}', [PostController::class, 'show']);

Route::get('/activities', [ActivityController::class, 'index']);
Route::get('/activities/{id}', [ActivityController::class, 'show']);

Route::get('/extracurriculars', [ExtracurricularController::class, 'index']);
Route::get('/extracurriculars/{id}', [ExtracurricularController::class, 'show']);

Route::get('/extracurriculars/{id}/register', [ExtracurricularController::class, 'register']);
Route::post('/extracurriculars/{id}/register', [ExtracurricularController::class, 'storeRegistration']);


// STATUS EKSKUL

Route::get('/cek-status-ekskul', function (\Illuminate\Http\Request $request) {

    $registration = null;

    if ($request->filled('student_number')) {

        $registration = \App\Models\ExtracurricularRegistration::with('extracurricular')
            ->where('student_number', $request->student_number)
            ->latest()
            ->first();
    }

    return view('extracurriculars.status', compact('registration'));
});


// PENDAFTARAN SISWA

Route::get('/pendaftaran-siswa', [StudentRegistrationController::class, 'create']);

Route::post('/pendaftaran-siswa', [StudentRegistrationController::class, 'store']);

Route::get('/pendaftaran-siswa/success/{id}', function ($id) {

    $registration = \App\Models\StudentRegistration::findOrFail($id);

    return view('student-registrations.success', compact('registration'));
});


// STATUS PENDAFTARAN SISWA

Route::get('/cek-status-pendaftaran', function (\Illuminate\Http\Request $request) {

    $registration = null;

    if ($request->filled('nik')) {

        $registration = \App\Models\StudentRegistration::where(
            'nik',
            $request->nik
        )->first();
    }

    return view('student-registrations.status', compact('registration'));
});


// KONTAK

Route::get('/kontak', function () {
    return view('contact');
});


// ====================
// ADMIN AUTH
// ====================

Route::get('/admin/login', [AuthController::class, 'showLogin'])
    ->name('login');

Route::post('/admin/login', [AuthController::class, 'login']);

Route::post('/admin/logout', [AuthController::class, 'logout']);


// ====================
// ADMIN
// ====================

Route::middleware('auth')->group(function () {

    Route::get('/admin', [DashboardController::class, 'index']);

    Route::resource('/admin/posts', AdminPostController::class)
        ->except(['show']);

    Route::resource('/admin/activities', AdminActivityController::class)
        ->except(['show']);

    Route::resource('/admin/extracurriculars', AdminExtracurricularController::class)
        ->except(['show']);

    Route::resource('/admin/extracurricular-registrations', AdminExtracurricularRegistrationController::class)
        ->only(['index', 'show', 'update', 'destroy']);

    Route::resource('/admin/student-registrations', AdminStudentRegistrationController::class)
        ->only(['index', 'show', 'update', 'destroy']);
});
