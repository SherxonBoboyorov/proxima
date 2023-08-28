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
        $news = Article::select(DB::raw('*, Year(created_at) as year'))->orderBy('created_at', 'DESC');
        if($request->year){
            $news = $news->whereYear('created_at', $request->year);
        }
        $news = $news->paginate(6);
        $years = Article::select(DB::raw('Month(created_at) as month'))->distinct()->pluck('month')->toArray();
        
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
            'new',
        ));
    }
}
