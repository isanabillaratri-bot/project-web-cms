<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Extracurricular;
use App\Models\ExtracurricularRegistration;

class ExtracurricularController extends Controller
{
    public function index()
    {
        $extracurriculars = Extracurricular::where('status', 'active')->get();

        return view('extracurriculars.index', compact('extracurriculars'));
    }

    public function show($id)
    {
        $extracurricular = Extracurricular::findOrFail($id);

        return view('extracurriculars.show', compact('extracurricular'));
    }

    public function register($id)
    {
        $extracurricular = Extracurricular::findOrFail($id);

        return view('extracurriculars.register', compact('extracurricular'));
    }

    public function storeRegistration(Request $request, $id)
    {
        $request->validate([
            'student_name' => 'required',
            'class' => 'required',
            'student_number' => 'required',
            'phone' => 'required',
        ]);

        $registration = ExtracurricularRegistration::create([
            'extracurricular_id' => $id,
            'student_name' => $request->student_name,
            'class' => $request->class,
            'student_number' => $request->student_number,
            'phone' => $request->phone,
            'status' => 'pending',
        ]);

        return view('extracurriculars.success', [
            'extracurricular' => $registration->extracurricular,
            'registration' => $registration,
        ]);
    }
}
