<?php

namespace sinbie\Http\Controllers;

use Illuminate\Http\Request;
use sinbie\Models\Rooms;

class RoomController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $rooms = Rooms::orderBy('created_at','desc')->paginate(5);

        //return $question->items()[0]->getAttributes();
        //dump($rooms->items()[0]->getAttributeValue('email'));
        //dump($rooms->items()[0]);

        return view('room.index', [ 'rooms' =>  $rooms->items()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('room.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $region)
    {
        //
        $data = $request->only(['title','content','image','address','phone']);
        $room = Rooms::create($data);
        return \Redirect::route('room.index',$region);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($region, $id)
    {
        $room = Rooms::find($id);
        if (is_null($room)) {
            abort(403, 'No data found sorry');
        }
        return view('room.show', compact('room'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($region, $id)
    {
        $room = Rooms::find($id);
        if (is_null($room)) {
            dump($id);
            abort(403, 'No data found sorry');
        }
        return view('room.edit', compact('room'));
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
        $data = $request->only(['title','content','image','address','phone']);
        $room = Rooms::find($id);
        $room->update($data);
        return \Redirect::route('room.index',$region);
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
