<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\CreateVideo;
use App\Http\Requests\Admin\UpdateVideo;
use App\Models\Video;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class VideoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $videos = Video::orderby('created_at', 'DESC')->get();
        return view('admin.video.index', compact('videos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.video.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  App\Http\Requests\Admin\CreateVideo  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateVideo $request)
    {
        $data = $request->all();

        $data['image'] = Video::uploadImage($request);
        $data['video'] = Video::uploadVideo($request);

        if (Video::create($data)) {
            return redirect()->route('video.index')->with('message', 'Видео успешно добавлено');
        }
        return redirect()->route('video.index')->back()->with('message', 'Ошибка добавления видео');
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
        $video = Video::find($id);
        return view('admin.video.edit', compact('video'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  App\Http\Requests\Admin\UpdateVideo  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateVideo $request, $id)
    {
        $video = Video::find($id);

        $data = $request->all();
        $data['image'] = Video::updateImage($request, $video);
        $data['video'] = Video::updateVideo($request, $video);

        if ($video->update($data)) {
            return redirect()->route('video.index')->with('message', 'изменено успешно!!!');
        }

        return redirect()->route('video.index')->with('message', 'изменено не успешно!!!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $video = Video::find($id);

        if (File::exists(public_path() . $video->video)) {
            File::delete(public_path() . $video->video);
        }

        if ($video->delete()) {
            return redirect()->route('video.index')->with('message', "успешно удалено!!!");
        }

        return redirect()->route('video.index')->with('message', "не удалось успешно удалить!!!");
    }
}
