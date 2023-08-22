<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\CreatePageIn;
use App\Http\Requests\Admin\UpdatePageIn;
use App\Models\PageIn;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class PageInController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $page_ins = PageIn::orderBy('created_at', 'DESC')->get();
        return view('admin.page_in.index', compact('page_ins'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.page_in.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  App\Http\Requests\Admin\CreatePageIn  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreatePageIn $request)
    {
        $data = $request->all();

        $data['icon'] = PageIn::uploadIcon($request);
        $data['image'] = PageIn::uploadImage($request);

        if (PageIn::create($data)) {
            return redirect()->route('page_in.index')->with('message', 'информация успешно добавлена');
        }
        return redirect()->route('page_in.index')->with('message', 'Ошибка добавления информация');
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
        $page_in = PageIn::find($id);
        return view('admin.page_in.edit', compact('page_in'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  App\Http\Requests\Admin\UpdatePageIn  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePageIn $request, $id)
    {
        $page_in = PageIn::find($id);

        $data = $request->all();
        $data['icon'] = PageIn::updateIcon($request, $page_in);
        $data['image'] = PageIn::updateImage($request, $page_in);

        if ($page_in->update($data)) {
            return redirect()->route('page_in.index')->with('message', 'изменено успешно!!!');
        }

        return redirect()->route('page_in.index')->with('message', 'изменено не успешно!!!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $page_in = PageIn::find($id);

        if (File::exists(public_path() . $page_in->page_in)) {
            File::delete(public_path() . $page_in->page_in);
        }

        if ($page_in->delete()) {
            return redirect()->route('page_in.index')->with('message', "успешно удалено!!!");
        }

        return redirect()->route('page_in.index')->with('message', "не удалось успешно удалить!!!");
    }
}
