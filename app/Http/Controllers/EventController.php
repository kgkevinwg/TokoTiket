<?php

namespace App\Http\Controllers;

use App\Event;
use App\Photo;
use App\Ticket;
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


        $data = array();

        $event = Event::where('id','=',$id)->first();
        $ticket = Ticket::where('eventId','=',$event->id)->get();
        foreach($ticket as $t){
            $user = User::where('id','=',$t->userId)->first();
            $photo = Photo::where('id','=',$t->photoId)->first();

            array_push($data,[$t,$user,$photo]);

        }



        return view('eventSeller',['data'=> $data ]);

    }

    public function getTicketDetail($id)
    {
        $ticket = Ticket::where('id','=',$id)->first();
        $event = Event::where('id','=',$ticket->eventId)->first();
        $user = User::where('id','=',$ticket->userId)->first();
        $photo = Photo::where('id','=',$ticket->photoId)->first();


        return view('event',['ticket'=>$ticket,'event'=>$event,'user'=>$user,'photo'=>$photo]);
    }
    public function index()
    {
        return Event::take(3)->get();
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
