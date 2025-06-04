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
        return view('admin.dashboard', compact('statistics'));
    }


    public function edit($id)
    {
        $statistics = Statistic::findOrFail($id);
        return view('admin.statistics.edit', compact('statistics'));
    }

    public function update(Request $request, $id)
    {

        $validated = $request->validate([
            'number_of_plays' => 'required|integer',
            'number_of_awards' => 'required|integer',
            'number_of_volunteers' => 'required|integer',
            'number_of_governorates' => 'required|integer',
        ]);

        try {
            $stat = Statistic::findOrFail($id);
            $stat->update($validated);

            return redirect()->route('admin.dashboard.index')->with('success', 'Statistics updated successfully.');
        } catch (\Exception $e) {
            return back()->with('error', 'Update failed. Please try again.');
        }
    }
}
