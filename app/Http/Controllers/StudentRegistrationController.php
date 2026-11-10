<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\StudentRegistration;
use App\Models\StudentDocument;

class StudentRegistrationController extends Controller
{
    // Halaman pilihan jalur pendaftaran
    public function create()
    {
        return view('student-registrations.create');
    }

    // Formulir Jalur Prestasi
    public function prestasi()
    {
        return view('student-registrations.prestasi');
    }

    // Formulir Jalur Tes
    public function tes()
    {
        return view('student-registrations.tes');
    }

    // Proses pendaftaran Jalur Prestasi
    public function storePrestasi(Request $request)
    {
        return $this->saveRegistration($request, 'prestasi', true);
    }

    // Proses pendaftaran Jalur Tes
    public function storeTes(Request $request)
    {
        return $this->saveRegistration($request, 'tes', false);
    }

    // Proses penyimpanan data dan dokumen
    private function saveRegistration(
        Request $request,
        string $admissionPath,
        bool $hasCertificates
    ) {
        $rules = [
            'name' => 'required',
            'nik' => 'required',
            'birth_place' => 'required',
            'birth_date' => 'required|date',
            'address' => 'required',
            'school_origin' => 'required',
            'parent_name' => 'required',
            'parent_phone' => 'required',
            'document' => 'required|file|mimes:pdf|max:2048',
        ];

        if ($hasCertificates) {
            $rules['certificates'] = 'required|file|mimes:pdf|max:2048';
        }

        $request->validate($rules);

        $registration = StudentRegistration::create([
            'name' => $request->name,
            'nik' => $request->nik,
            'birth_place' => $request->birth_place,
            'birth_date' => $request->birth_date,
            'address' => $request->address,
            'school_origin' => $request->school_origin,
            'parent_name' => $request->parent_name,
            'parent_phone' => $request->parent_phone,
            'admission_path' => $admissionPath,
            'status' => 'pending',
        ]);

        $documentPath = $request->file('document')
        ->store('documents', 'public');

        StudentDocument::create([
            'student_registration_id' => $registration->id,
            'document_type' => 'Dokumen Persyaratan',
            'file_path' => $documentPath,
        ]);

        if ($hasCertificates) {
            $certificatePath = $request->file('certificates')
            ->store('documents', 'public');

            StudentDocument::create([
                'student_registration_id' => $registration->id,
                'document_type' => 'Sertifikat Prestasi',
                'file_path' => $certificatePath,
            ]);
        }

        return redirect('/pendaftaran-siswa/success/' . $registration->id);
    }
}
