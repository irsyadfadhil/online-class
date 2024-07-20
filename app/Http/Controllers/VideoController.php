<?php

namespace App\Http\Controllers;

use App\Models\Video;
use Illuminate\Http\Request;

class VideoController extends Controller
{
    public function index()
    {
        $videos = Video::all();
        return response()->json($videos);
    }

    public function store(Request $request)
    {
        $video = Video::create($request->all());
        return response()->json($video, 201);
    }

    public function show($id)
    {
        $video = Video::findOrFail($id);
        return response()->json($video);
    }

    public function update(Request $request, $id)
    {
        $video = Video::findOrFail($id);
        $video->update($request->all());
        return response()->json($video);
    }

    public function destroy($id)
    {
        Video::destroy($id);
        return response()->json(null, 204);
    }
}
