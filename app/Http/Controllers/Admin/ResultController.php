<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Callback;
use Illuminate\Http\Request;

class ResultController extends Controller
{
    public function index()
    {
        $feedbacks = Callback::orderBy('created_at', 'DESC')->paginate(12);
        return view('admin.feedback.index', compact('feedbacks'));
    }


    public function show($id)
    {
        $feedback = Callback::find($id);
        return view('admin.feedback.show', compact('feedback'));
    }

    public function destroy($id)
    {
        $feedback = Callback::find($id);
        $feedback->delete();
        return redirect()->route('feedback.index')->with('message', "deleted successfully");
    }
}
