<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Question;
use Illuminate\Http\Request;

class QuestionsController extends Controller
{
    public function question()
    {
        $questions = Question::orderBy('created_at', 'DESC')->get();
        return view('front.questions', compact(
            'questions'
        ));
    }
}
