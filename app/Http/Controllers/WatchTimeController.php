<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WatchTimeController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'user_id' => 'required|exists:users,id',
            'class_id' => 'required|exists:classes,id',
            'minutes' => 'required|integer|min:1',
        ]);

        WatchTime::create($request->all());

        return response()->json(['message' => 'Watch time recorded successfully.']);
    }

    public function destroy($id)
    {
        $watchTime = WatchTime::find($id);

        if (!$watchTime) {
            return response()->json(['message' => 'Watch time record not found.'], Response::HTTP_NOT_FOUND);
        }

        $watchTime->delete();

        return response()->json(['message' => 'Watch time record deleted successfully.']);
    }
}
