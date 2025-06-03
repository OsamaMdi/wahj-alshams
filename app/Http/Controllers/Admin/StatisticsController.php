<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Statistic;
use Illuminate\Http\Request;

class StatisticsController extends Controller
{
    public function index()
    {
        $statistics = Statistic::first();
        return view('admin.statistics.index', compact('statistics'));
    }


    public function edit($id)
    {
        $statistics = Statistic::findOrFail($id);
        return view('admin.statistics.edit', compact('statistics'));
    }

    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'number_of_plays' => 'required|integer|min:0',
            'number_of_awards' => 'required|integer|min:0',
            'number_of_volunteers' => 'required|integer|min:0',
        ]);

        try {
            $stat = Statistic::findOrFail($id);
            $stat->update($validated);

            return redirect()->route('admin.statistics.index')->with('success', 'Statistics updated successfully.');
        } catch (\Exception $e) {
            return back()->with('error', 'Update failed. Please try again.');
        }
    }
}
