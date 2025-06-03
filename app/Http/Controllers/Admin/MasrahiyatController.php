<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Masrahiya;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class MasrahiyatController extends Controller
{
    public function index(Request $request)
    {
        $search = $request->input('search');

        $masrahiyat = Masrahiya::when($search, function ($query, $search) {
                return $query->where('title', 'like', "%$search%");
            })
            ->orderByDesc('created_at')
            ->paginate(10);

        return view('admin.masrahiyat.index', compact('masrahiyat', 'search'));
    }

    public function create()
    {
        return view('admin.masrahiyat.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'author' => 'required|string|max:255',
            'director' => 'required|string|max:255',
            'assistant_director' => 'nullable|string|max:255',
            'music_composer' => 'nullable|string|max:255',
            'artistic_consultant' => 'nullable|string|max:255',
            'collaborators' => 'nullable|string',
            'number_participants' => 'required|integer|min:0',
            'performance_dates' => 'required|date',
            'performance_locations' => 'required|string',
            'play_type' => 'required|string',
            'significance' => 'required|string',
            'inspiration_source' => 'required|string',
            'artistic_paragraph' => 'required|string',
            'characters' => 'nullable|array',
            'characters.*' => 'nullable|string|max:255',
            'image_path' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
            'youtube_url' => 'nullable|url',
        ]);

        try {
            if ($request->hasFile('image_path')) {
                $validated['image_path'] = $request->file('image_path')->store('masrahiyat', 'public');
            }

            $validated['characters'] = array_values(array_filter($validated['characters'] ?? []));

            Masrahiya::create($validated);

            return redirect()->route('admin.masrahiyat.index')
                ->with('success', 'Play created successfully.');
        } catch (\Exception $e) {
            return back()->withInput()
                ->with('error', 'Something went wrong while saving. Please try again.');
        }
    }

    public function show(Masrahiya $masrahiyat)
    {
        $masrahiya = $masrahiyat;
        return view('admin.masrahiyat.show', compact('masrahiya'));
    }

    public function edit(Masrahiya $masrahiyat)
    {
        return view('admin.masrahiyat.edit', compact('masrahiyat'));
    }

    public function update(Request $request, Masrahiya $masrahiyat)
    {
        $masrahiya = $masrahiyat;

        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'author' => 'required|string|max:255',
            'director' => 'required|string|max:255',
            'assistant_director' => 'nullable|string|max:255',
            'music_composer' => 'nullable|string|max:255',
            'artistic_consultant' => 'nullable|string|max:255',
            'collaborators' => 'nullable|string',
            'number_participants' => 'required|integer|min:0',
            'performance_dates' => 'required|date',
            'performance_locations' => 'required|string',
            'play_type' => 'required|string',
            'significance' => 'required|string',
            'inspiration_source' => 'required|string',
            'artistic_paragraph' => 'required|string',
            'characters' => 'nullable|array',
            'characters.*' => 'nullable|string|max:255',
            'image_path' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
            'youtube_url' => 'nullable|url',
        ]);

        try {
            if ($request->hasFile('image_path')) {
                if ($masrahiya->image_path) {
                    Storage::disk('public')->delete($masrahiya->image_path);
                }
                $validated['image_path'] = $request->file('image_path')->store('masrahiyat', 'public');
            }

            $validated['characters'] = array_values(array_filter($validated['characters'] ?? []));

            $masrahiya->update($validated);

            return redirect()->route('admin.masrahiyat.index')
                ->with('success', 'Play updated successfully.');
        } catch (\Exception $e) {
            return back()->withInput()
                ->with('error', 'Update failed. Please try again.');
        }
    }

    public function destroy(Masrahiya $masrahiya)
    {
        try {
            if ($masrahiya->image_path) {
                Storage::disk('public')->delete($masrahiya->image_path);
            }

            $masrahiya->delete();

            return redirect()->route('admin.masrahiyat.index')
                ->with('success', 'Play deleted successfully.');
        } catch (\Exception $e) {
            return back()->with('error', 'Delete failed. Please try again.');
        }
    }
}
