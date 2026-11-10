<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\StudentRegistration;
use Illuminate\Http\Request;

class StudentRegistrationController extends Controller
{
    // Halaman utama menu pendaftaran
    public function index()
    {
        return view('admin.student-registrations.index');
    }

    // Daftar pendaftar Jalur Prestasi
    public function prestasi()
    {
        $registrations = StudentRegistration::with('documents')
        ->where('admission_path', 'prestasi')
        ->where('is_archived', false)
            ->latest()
            ->get();

        return view('admin.student-registrations.prestasi', compact('registrations'));
    }

    // Daftar pendaftar Jalur Tes
    public function tes()
    {
        $registrations = StudentRegistration::with('documents')
            ->where('admission_path', 'tes')
            ->where('is_archived', false)
            ->latest()
            ->get();

        return view('admin.student-registrations.tes', compact('registrations'));
    }

    // Daftar arsip pendaftar
    public function arsip()
    {
        $registrations = StudentRegistration::with('documents')
            ->where('is_archived', true)
            ->latest()
            ->get();

        return view('admin.student-registrations.arsip', compact('registrations'));
    }

    // Detail pendaftar aktif
    public function show(StudentRegistration $studentRegistration)
    {
        abort_if($studentRegistration->is_archived, 404);

        $studentRegistration->load('documents');
        $isArchive = false;

        return view(
            'admin.student-registrations.show',
            compact('studentRegistration', 'isArchive')
        );
    }

    // Detail pendaftar arsip (hanya dibaca)
    public function showArsip(StudentRegistration $studentRegistration)
    {
        abort_if(!$studentRegistration->is_archived, 404);

        $studentRegistration->load('documents');
        $isArchive = true;

        return view(
            'admin.student-registrations.show',
            compact(
                'studentRegistration',
                'isArchive'
            )
        );
    }

    // Memperbarui status pendaftaran
    public function update(Request $request, StudentRegistration $studentRegistration)
    {
        abort_if($studentRegistration->is_archived, 404);

        $request->validate([
            'status' => 'required|in:pending,accepted,rejected',
        ]);

        $studentRegistration->update([
            'status' => $request->status,
            'is_archived' => $request->status === 'rejected'
                ? true
                : $studentRegistration->is_archived,
        ]);

        $redirect = $studentRegistration->admission_path === 'prestasi'
            ? '/admin/student-registrations/prestasi'
            : '/admin/student-registrations/tes';

        return redirect($redirect)
            ->with('success', 'Status pendaftaran berhasil diperbarui.');
    }
}
