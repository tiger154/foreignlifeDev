<?php

namespace sinbie\Http\Controllers;

use sinbie\Models\Boards;
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
        return view('question.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('question.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $region)
    {
        $data = $request->only(['title','content','tags']);
        $board = Boards::create($data);
        return \Redirect::route('question.index',$region);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($region, $id)
    {

        $question = Boards::find($id);
        if (is_null($question)) {
            abort(403, 'No data found sorry');
        }
        return view('question.show', compact('question'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($region, $id)
    {

        $question = Boards::find($id);
        if (is_null($question)) {
            abort(403, 'No data found sorry');
        }
        return view('question.edit', compact('question'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $region, $id)
    {
        $data = $request->only('title','content','tags');
        $board = Boards::find($id);
        $board->update($data);
        return \Redirect::route('question.index',$region);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($region, $id)
    {
        //
    }

    /**
     * It return data
     */
    public function get() {
        $question = Boards::orderBy('created_at','desc')->paginate(5);
        return $question;
        //return $question->items()[0]->getAttributes();
        //dump($question->items()[0]->getAttributeValue('tags'));
        //dump($question->items()[0]);
    }
}
