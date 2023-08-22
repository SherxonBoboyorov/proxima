<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\CreateEfficiency;
use App\Http\Requests\Admin\UpdateEfficiency;
use App\Models\Efficiency;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class EfficiencyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $efficiencies = Efficiency::orderBy('created_at', 'DESC')->get();
        return view('admin.efficiency.index', compact('efficiencies'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.efficiency.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  App\Http\Requests\Admin\CreateEfficiency  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateEfficiency $request)
    {
        $data = $request->all();

        $data['icon'] = Efficiency::uploadIcon($request);
        $data['image'] = Efficiency::uploadImage($request);

        if (Efficiency::create($data)) {
            return redirect()->route('efficiency.index')->with('message', 'информация успешно добавлена');
        }
        return redirect()->route('efficiency.index')->with('message', 'Ошибка добавления информация');
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
        $efficiency = Efficiency::find($id);
        return view('admin.efficiency.edit', compact('efficiency'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  App\Http\Requests\Admin\UpdateEfficiency  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateEfficiency $request, $id)
    {
        $efficiency = Efficiency::find($id);

        $data = $request->all();
        $data['icon'] = Efficiency::updateIcon($request, $efficiency);
        $data['image'] = Efficiency::updateImage($request, $efficiency);

        if ($efficiency->update($data)) {
            return redirect()->route('efficiency.index')->with('message', 'изменено успешно!!!');
        }

        return redirect()->route('efficiency.index')->with('message', 'изменено не успешно!!!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $efficiency = Efficiency::find($id);

        if (File::exists(public_path() . $efficiency->efficiency)) {
            File::delete(public_path() . $efficiency->efficiency);
        }

        if ($efficiency->delete()) {
            return redirect()->route('efficiency.index')->with('message', "успешно удалено!!!");
        }

        return redirect()->route('efficiency.index')->with('message', "не удалось успешно удалить!!!");
    }
}
