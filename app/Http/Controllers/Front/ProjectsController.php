<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Project;
use Illuminate\Http\Request;

class ProjectsController extends Controller
{
    public function list()
    {
        $projects = Project::orderBy('created_at', 'DESC')->paginate(12);
        return view('front.project.list', compact(
            'projects'
        ));
    }

    public function show($id)
    {
        $project = Project::find($id);
        return view('front.project.show', compact(
            'project'
        ));
    }
}
