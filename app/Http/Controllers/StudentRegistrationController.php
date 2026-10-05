<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\StudentRegistration;
use App\Models\StudentDocument;

class StudentRegistrationController extends Controller
{
    public function create()
    {
        return view('student-registrations.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'nik' => 'required',
            'birth_place' => 'required',
            'birth_date' => 'required|date',
            'address' => 'required',
            'school_origin' => 'required',
            'parent_name' => 'required',
            'parent_phone' => 'required',
            'document' => 'required|file|mimes:pdf,jpg,jpeg,png|max:2048',
        ]);

        $registration = StudentRegistration::create([
            'name' => $request->name,
            'nik' => $request->nik,
            'birth_place' => $request->birth_place,
            'birth_date' => $request->birth_date,
            'address' => $request->address,
            'school_origin' => $request->school_origin,
            'parent_name' => $request->parent_name,
            'parent_phone' => $request->parent_phone,
            'status' => 'pending',
        ]);

        $path = $request->file('document')->store('documents', 'public');

        StudentDocument::create([
            'student_registration_id' => $registration->id,
            'document_type' => 'Dokumen Persyaratan',
            'file_path' => $path,
        ]);

        return redirect('/pendaftaran-siswa/success/' . $registration->id);
    }
}
