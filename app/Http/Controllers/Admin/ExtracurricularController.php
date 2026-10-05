<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Extracurricular;
use Illuminate\Http\Request;

class ExtracurricularController extends Controller
{
    public function index()
    {
        $extracurriculars = Extracurricular::latest()->get();

        return view('admin.extracurriculars.index', compact('extracurriculars'));
    }

    public function create()
    {
        return view('admin.extracurriculars.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'coach' => 'required',
            'schedule' => 'required',
            'location' => 'required',
            'quota' => 'required|integer|min:1',
            'status' => 'required|in:active,inactive',
            'whatsapp_group_link' => 'nullable|url',
            'image' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        $imagePath = null;

        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('extracurriculars', 'public');
        }

        Extracurricular::create([
            'name' => $request->name,
            'description' => $request->description,
            'coach' => $request->coach,
            'schedule' => $request->schedule,
            'location' => $request->location,
            'quota' => $request->quota,
            'status' => $request->status,
            'whatsapp_group_link' => $request->whatsapp_group_link,
            'image' => $imagePath,
        ]);

        return redirect('/admin/extracurriculars')
            ->with('success', 'Ekstrakurikuler berhasil ditambahkan.');
    }

    public function edit(Extracurricular $extracurricular)
    {
        return view('admin.extracurriculars.edit', compact('extracurricular'));
    }

    public function update(Request $request, Extracurricular $extracurricular)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'coach' => 'required',
            'schedule' => 'required',
            'location' => 'required',
            'quota' => 'required|integer|min:1',
            'status' => 'required|in:active,inactive',
            'whatsapp_group_link' => 'nullable|url',
            'image' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        $data = [
            'name' => $request->name,
            'description' => $request->description,
            'coach' => $request->coach,
            'schedule' => $request->schedule,
            'location' => $request->location,
            'quota' => $request->quota,
            'status' => $request->status,
            'whatsapp_group_link' => $request->whatsapp_group_link,
        ];

        if ($request->hasFile('image')) {
            $data['image'] = $request->file('image')->store('extracurriculars', 'public');
        }

        $extracurricular->update($data);

        return redirect('/admin/extracurriculars')
            ->with('success', 'Ekstrakurikuler berhasil diperbarui.');
    }

    public function destroy(Extracurricular $extracurricular)
    {
        $extracurricular->delete();

        return redirect('/admin/extracurriculars')
            ->with('success', 'Ekstrakurikuler berhasil dihapus.');
    }
}
