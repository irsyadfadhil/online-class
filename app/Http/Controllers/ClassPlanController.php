<?php

namespace App\Http\Controllers;

use App\Models\ClassPlan;
use Illuminate\Http\Request;

class ClassPlanController extends Controller
{
    public function index()
    {
        $ClassPlans = ClassPlan::all();
        return response()->json($ClassPlans);
    }

    public function store(Request $request)
    {
        $ClassPlan = ClassPlan::create($request->all());
        return response()->json($ClassPlan, 201);
    }

    public function show($id)
    {
        $ClassPlan = ClassPlan::findOrFail($id);
        return response()->json($ClassPlan);
    }

    public function update(Request $request, $id)
    {
        $ClassPlan = ClassPlan::findOrFail($id);
        $ClassPlan->update($request->all());
        return response()->json($ClassPlan);
    }

    public function destroy($id)
    {
        ClassPlan::destroy($id);
        return response()->json(null, 204);
    }
}
