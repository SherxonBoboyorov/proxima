<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\CreateQuestion;
use App\Http\Requests\Admin\UpdateQuestion;
use App\Models\Question;
use Illuminate\Http\Request;

class QuestionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $questions = Question::orderBy('created_at', 'DESC')->get();
        return view('admin.question.index', compact('questions'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.question.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  App\Http\Requests\Admin\CreateQuestion  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateQuestion $request)
    {
        $data = $request->all();
        
        if (Question::create($data)) {
            return redirect()->route('question.index')->with('message', 'информация успешно добавлена');
        }
        return redirect()->route('question.index')->with('message', 'Ошибка добавления информация');
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
        $question = Question::find($id);
        return view('admin.question.edit', compact('question'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  App\Http\Requests\Admin\UpdateQuestion  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateQuestion $request, $id)
    {
        $question = Question::find($id);

        $data = $request->all();

        if ($question->update($data)) {
            return redirect()->route('question.index')->with('message', 'изменено успешно!!!');
        }

        return redirect()->route('question.index')->with('message', 'изменено не успешно!!!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $question = Question::find($id);

        if ($question->delete()) {
            return redirect()->route('question.index')->with('message', "успешно удалено!!!");
        }

        return redirect()->route('question.index')->with('message', "не удалось успешно удалить!!!");
    }
}
