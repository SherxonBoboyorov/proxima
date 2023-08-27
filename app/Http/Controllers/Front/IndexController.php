<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Article;
use App\Models\Efficiency;
use App\Models\Options;
use App\Models\Page;
use App\Models\Project;
use App\Models\Promotional;
use App\Models\Slider;
use App\Models\Video;
use Butschster\Head\Facades\Meta;
use Illuminate\Http\Request;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

class IndexController extends Controller
{
    public function homepage()
    {

        Meta::setTitle(Options::where('key', 'meta_title_' . LaravelLocalization::getCurrentLocale())->first()->value);
        Meta::setDescription(Options::where('key', 'meta_description_' . LaravelLocalization::getCurrentLocale())->first()->value);

        $sliders = Slider::orderBy('created_at', 'DESC')->get();
        $promotionals = Promotional::orderBy('created_at', 'DESC')->get();
        $videos = Video::all();
        $pages = Page::all();
        $efficiencies = Efficiency::all();
        $projects = Project::orderBy('created_at', 'DESC')->take(1)->get();
        $news = Article::orderBy('created_at', 'DESC')->paginate(3);
        return view('front.index',  compact(
            'sliders',
            'promotionals',
            'videos',
            'pages',
            'efficiencies',
            'projects',
            'news'
        ));
    }
}
