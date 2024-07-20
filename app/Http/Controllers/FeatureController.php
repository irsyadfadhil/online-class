<?php

namespace App\Http\Controllers;

use App\Models\Feature;
use Illuminate\Http\Request;

class FeatureController extends Controller
{
    public function index()
    {
        $features = Feature::all();
        return response()->json($features);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'sub_title1' => 'nullable|string|max:255',
            'sub_description1' => 'nullable|string',
            'sub_title2' => 'nullable|string|max:255',
            'sub_description2' => 'nullable|string',
            'sub_title3' => 'nullable|string|max:255',
            'sub_description3' => 'nullable|string',
        ]);

        $feature = Feature::create($validatedData);
        return response()->json($feature, 201);
    }

    public function show($id)
    {
        $feature = Feature::findOrFail($id);
        return response()->json($feature);
    }

    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'sub_title1' => 'nullable|string|max:255',
            'sub_description1' => 'nullable|string',
            'sub_title2' => 'nullable|string|max:255',
            'sub_description2' => 'nullable|string',
            'sub_title3' => 'nullable|string|max:255',
            'sub_description3' => 'nullable|string',
        ]);

        $feature = Feature::findOrFail($id);
        $feature->update($validatedData);
        return response()->json($feature);
    }

    public function destroy($id)
    {
        Feature::destroy($id);
        return response()->json(null, 204);
    }
}
