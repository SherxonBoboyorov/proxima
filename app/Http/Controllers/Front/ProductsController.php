<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function list()
    {
        $products = Product::orderBy('created_at', 'DESC')->paginate(12);
        return view('front.product.list', compact(
            'products'
        ));
    }

    public function show($slug)
    {

        $product = Product::where('slug_uz', $slug)
        ->orWhere('slug_ru', $slug)
        ->first();

        return view('front.product.show', compact(
            'product'
        ));
    }
}
