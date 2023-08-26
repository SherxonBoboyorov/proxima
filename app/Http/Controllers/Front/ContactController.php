<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Office;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function contact()
    {
         $offices = Office::orderBy('created_at', 'DESC')->get();
         return view('front.contacts', compact(
            'offices'
         ));
    }
}
