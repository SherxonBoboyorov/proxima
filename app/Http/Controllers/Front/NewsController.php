<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Article;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function list()
    {
        $news = Article::orderBy('created_at', 'DESC')->paginate(12);
        return view('front.news.list', compact(
            'news'
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
