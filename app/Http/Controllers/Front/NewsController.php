<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Article;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class NewsController extends Controller
{
    public function list(Request $request)
    {
        $news = Article::orderBy('created_at', 'DESC')->paginate(6);
        $years = Article::whereYear('created_at', '=', $request->year)->get();

        // dd($request);
        return view('front.news.list', compact(
            'news',
            'years'
        ));
    }

    public function show($slug)
    {
        $new = Article::where('slug_uz', $slug)
        ->orWhere('slug_ru', $slug)
        ->first();

        return view('front.news.show', compact(
            'new'
        ));
    }
}
