<?php

namespace App\Http\Controllers;

use App\Event;
use App\Photo;
use App\User;
use Illuminate\Http\Request;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function getAllEvent()
    {
       $events =  Event::all();
       return view('browse',['events'=> $events]);

    }

    public function getBrowseEvent()
    {
        $data = array();

        $events =  Event::take(3)->get();
        foreach($events as $e)
        {
            $photo = Photo::where('id','=',$e->photoId)->first();
            array_push($data,array($e,$photo));

        }

        return view('browse',['data'=> $data]);
    }

    public function getSpesificEvent($id)
    {

        
        $event = Event::where('id','=',$id)->first();
        $seller= User::where('id','=',$event->userId)->first();
        $photo = Photo::where('id','=',$event->photoId)->first();

        return view('eventSeller',['data'=> array($event,$seller,$photo) ]);

    }
    public function index()
    {
        //
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
        //
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
        //x
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
