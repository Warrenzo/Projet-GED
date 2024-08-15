<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Classification;
use Illuminate\Http\Request;

class ClassificationController extends Controller
{
    public function index()
    {
        $classifications = Classification::whereNull('parent_id')->with('children')->get();
        return view('admin.classifications.index', compact('classifications'));
    }

    public function create()
    {
        $classifications = Classification::all();
        return view('admin.classifications.create', compact('classifications'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'parent_id' => 'nullable|exists:classifications,id',
        ]);

        Classification::create($request->all());

        return redirect()->route('classifications.index')->with('success', 'Classification created successfully.');
    }

    public function edit(Classification $classification)
    {
        $classifications = Classification::all();
        return view('admin.classifications.edit', compact('classification', 'classifications'));
    }

    public function update(Request $request, Classification $classification)
    {
        $request->validate([
            'name' => 'required',
            'parent_id' => 'nullable|exists:classifications,id',
        ]);

        $classification->update($request->all());

        return redirect()->route('classifications.index')->with('success', 'Classification updated successfully.');
    }

    public function destroy(Classification $classification)
    {
        $classification->delete();

        return redirect()->route('classifications.index')->with('success', 'Classification deleted successfully.');
    }
}
