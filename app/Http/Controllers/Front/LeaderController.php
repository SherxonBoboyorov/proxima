<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Team;
use Illuminate\Http\Request;

class LeaderController extends Controller
{
    public function team()
    {
        $teams = Team::orderBy('created_at','DESC')->get();
        return view('front.team', compact(
            'teams'
        ));
    }
}
