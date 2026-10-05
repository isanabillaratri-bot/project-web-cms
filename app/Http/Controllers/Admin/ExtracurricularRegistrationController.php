<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ExtracurricularRegistration;
use Illuminate\Http\Request;

class ExtracurricularRegistrationController extends Controller
{
    public function index()
    {
        $registrations = ExtracurricularRegistration::with('extracurricular')
            ->latest()
            ->get();

        return view('admin.extracurricular-registrations.index', compact('registrations'));
    }

    public function show(ExtracurricularRegistration $extracurricularRegistration)
    {
        $extracurricularRegistration->load('extracurricular');

        return view(
            'admin.extracurricular-registrations.show',
            compact('extracurricularRegistration')
        );
    }

    public function update(Request $request, ExtracurricularRegistration $extracurricularRegistration)
    {
        $request->validate([
            'status' => 'required|in:pending,approved,rejected',
        ]);

        $extracurricularRegistration->update([
            'status' => $request->status,
        ]);

        return redirect('/admin/extracurricular-registrations')
            ->with('success', 'Status pendaftaran berhasil diperbarui.');
    }

    public function destroy(ExtracurricularRegistration $extracurricularRegistration)
    {
        $extracurricularRegistration->delete();

        return redirect('/admin/extracurricular-registrations')
            ->with('success', 'Pendaftaran berhasil dihapus.');
    }
}
