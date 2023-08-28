<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\Project;
use Illuminate\Http\Request;

class SerachController extends Controller
{
    public function search(Request $request)
    {
        if(strlen($request->phrase) < 0) {
            return redirect()->route('/');
        }

        $projects = Project::whereLike(['title_uz', 'title_ru'], $request->phrase)->get();
        $products = Product::whereLike(['title_uz', 'title_ru'], $request->phrase)->get();

        return view('front.search', compact(
            'projects',
            'products',
        ));
    }
}
