<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $event = Event::all();
        return view('Admin.event')->with('event',$event);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $imageName = rand(1000,1322).'.'.$request->image->getClientOriginalName();
        $request->image->move('Event_Image', $imageName);
        $event = Event::create([
            'title'=> $request->title,
            'date'=> $request->date,
            'image'=> $imageName,
            'desc'=> $request->desc
        ]);
        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function show(Event $event)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $event = Event::find($id)->get()->first();
        return view('Admin.editEvent',)->with('data',$event);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $input = $request->all();
        $event = Event::find($id);
        if ($image = $request->file('image')) {
            $imageName = rand(1000,1322).'.'.$request->image->getClientOriginalName();
            $request->image->move('Event_Image', $imageName);
            $input['image'] = "$imageName";
        }else{
            unset($input['image']);
        }
        $event->update($input);
        return redirect()->route('adminevent.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $event = Event::find($id);
        $event->delete();
        return back();
    }
}
