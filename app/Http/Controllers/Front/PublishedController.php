<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Article;
use Illuminate\Http\Request;

class PublishedController extends Controller
{
    public function show(Article $news)
    {

    $previousNews = Article::where('published_at', '<', $news->published_at)
        ->orderBy('published_at', 'desc')
        ->first();

    $nextNews = Article::where('published_at', '>', $news->published_at)
        ->orderBy('published_at', 'asc')
        ->first();

    return view('front.news.show', [
        'news' => $news,
        'previousNews' => $previousNews,
        'nextNews' => $nextNews,
    ]);
}

}
