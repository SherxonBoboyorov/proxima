<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Efficiency;
use App\Models\Page;
use App\Models\Project;
use App\Models\Promotional;
use App\Models\Slider;
use App\Models\Video;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function homepage()
    {
        $sliders = Slider::orderBy('created_at', 'DESC')->get();
        $promotionals = Promotional::orderBy('created_at', 'DESC')->get();
        $videos = Video::all();
        $pages = Page::all();
        $efficiencies = Efficiency::all();

        $projects = Project::orderBy('created_at', 'DESC')->take(1)->get();
        return view('front.index',  compact(
            'sliders',
            'promotionals',
            'videos',
            'pages',
            'efficiencies',
            'projects'
        ));
    }
}
