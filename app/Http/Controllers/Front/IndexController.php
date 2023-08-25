<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Promotional;
use App\Models\Slider;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function homepage()
    {
        $sliders = Slider::orderBy('created_at', 'DESC')->get();
        $promotionals = Promotional::orderBy('created_at', 'DESC')->get();
        return view('front.index',  compact(
            'sliders',
            'promotionals'
        ));
    }
}
