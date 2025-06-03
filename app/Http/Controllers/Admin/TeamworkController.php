<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Teamwork;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class TeamworkController extends Controller
{
    public function index(Request $request)
    {
        $search = $request->input('search');

        $teamworks = Teamwork::when($search, function ($query, $search) {
                return $query->where('name', 'like', "%$search%");
            })
            ->latest()
            ->paginate(10);

        return view('admin.teamwork.index', compact('teamworks', 'search'));
    }

    public function create()
    {
        return view('admin.teamwork.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'image_path' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
        ]);

        if ($request->hasFile('image_path')) {
            $validated['image_path'] = $request->file('image_path')->store('teamwork', 'public');
        }

        Teamwork::create($validated);

        return redirect()->route('admin.teamwork.index')->with('success', 'Team member added successfully.');
    }

    public function show(Teamwork $teamwork)
    {
        return view('admin.teamwork.show', compact('teamwork'));
    }

    public function edit(Teamwork $teamwork)
    {
        return view('admin.teamwork.edit', compact('teamwork'));
    }

    public function update(Request $request, Teamwork $teamwork)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'image_path' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
        ]);

        if ($request->hasFile('image_path')) {
            if ($teamwork->image_path) {
                Storage::disk('public')->delete($teamwork->image_path);
            }
            $validated['image_path'] = $request->file('image_path')->store('teamwork', 'public');
        }

        $teamwork->update($validated);

        return redirect()->route('admin.teamwork.index')->with('success', 'Team member updated successfully.');
    }

    public function destroy(Teamwork $teamwork)
    {
        if ($teamwork->image_path) {
            Storage::disk('public')->delete($teamwork->image_path);
        }

        $teamwork->delete();

        return redirect()->route('admin.teamwork.index')->with('success', 'Team member deleted successfully.');
    }
}
