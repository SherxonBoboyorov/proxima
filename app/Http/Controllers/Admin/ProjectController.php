<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Project;
use App\Models\ProjectGallary;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $projects = Project::orderBy('created_at', 'DESC')->get();
        return view('admin.project.index', compact('projects'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.project.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return Response
     */
    public function store(Request $request): Response
    {
        $input = $request->all();

        Validator::make($input, [
            'image' => 'required|mimes:jpg,jpeg,png,webp',
            'title_ru' => 'required|max:255',
            'title_uz' => 'required|max:255',
            'sub_content_ru' => 'required',
            'sub_content_uz' => 'required',
            'statistic_ru' => 'required',
            'statistic_uz' => 'required',
            'content_ru' => 'required',
            'content_uz' => 'required',
        ])->validate();

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            if (!File::exists(public_path() . '/upload/project/' . date('d-m-Y')))
            {
                File::makeDirectory(public_path() . '/upload/project/' . date('d-m-Y'), $mode = 0777, true, true);
            }
            $file->move(public_path() . '/upload/project/' . date('d-m-Y'), $file->getClientOriginalName());
            $image = '/upload/project/' . date('d-m-Y') . '/' . $file->getClientOriginalName();
        }

        $project = Project::create([
            'image' => $image,
            'title_ru' => $input['title_ru'] ?? null,
            'title_uz' => $input['title_uz'] ?? null,
            'sub_content_ru' => $input['sub_content_ru'] ?? null,
            'sub_content_uz' => $input['sub_content_uz'] ?? null,
            'statistic_ru' => $input['statistic_ru'] ?? null,
            'statistic_uz' => $input['statistic_uz'] ?? null,
            'content_ru' => $input['content_ru'] ?? null,
            'content_uz' => $input['content_uz'] ?? null,
        ]);


        if (isset($input['galleries']) && $input['galleries'] !== null && json_decode($input['galleries'], true)) {
            foreach(json_decode($input['galleries'], true) as $gallery) {
                ProjectGallary::create([
                    'project_id' => $project->id,
                    'image' => $gallery['image']
                ]);
            }
        }

        return redirect()->route('project.index')->with('message', "Продукт успешно создано");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
