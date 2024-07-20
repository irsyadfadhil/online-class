<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Feature;
use App\Models\ClassPlan;
use App\Models\Video;

class HomeController extends Controller
{
    public function index()
    {
        $feature = Feature::get();
        $class_plan = ClassPlan::get();
        $video = Video::get();

        // $code_feature = Feature::pluck('code','name');
        // $code_video = Video::pluck('code');
// return [      "feature" => $feature,
// "class_plan" => $class_plan,
// "video" => $video
// ];
        return view('landing_page')
        ->with([
            "feature" => $feature,
            "class_plan" => $class_plan,
            "video" => $video,
        ]);
    }

}
