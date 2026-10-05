<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\StudentRegistration;
use Illuminate\Http\Request;

class StudentRegistrationController extends Controller
{
    public function index()
    {
        $registrations = StudentRegistration::with('documents')
            ->latest()
            ->get();

        return view('admin.student-registrations.index', compact('registrations'));
    }

    public function show(StudentRegistration $studentRegistration)
    {
        $studentRegistration->load('documents');

        return view(
            'admin.student-registrations.show',
            compact('studentRegistration')
        );
    }

    public function update(Request $request, StudentRegistration $studentRegistration)
    {
        $request->validate([
            'status' => 'required|in:pending,verified,accepted,rejected',
        ]);

        $studentRegistration->update([
            'status' => $request->status,
        ]);

        return redirect('/admin/student-registrations')
            ->with('success', 'Status pendaftaran berhasil diperbarui.');
    }

    public function destroy(StudentRegistration $studentRegistration)
    {
        $studentRegistration->delete();

        return redirect('/admin/student-registrations')
            ->with('success', 'Pendaftaran berhasil dihapus.');
    }
}
