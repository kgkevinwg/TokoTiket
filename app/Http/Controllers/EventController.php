<?php

namespace App\Http\Controllers;

use App\Artist;
use App\Category;
use App\Event;
use App\Photo;
use App\Ticket;
use App\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use \Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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

    public function getAllEventTable()
    {
        $events =  Event::all();

        return view('admin',['events'=> $events]);

    }

    public function getAllTicketTable()
    {
        $tickets = Ticket::all();
        return view('admin',['tickets'=>$tickets]);
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

    public function  newTicket(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'ticketName' => 'required',
            'ticketDescription' => 'required',
            'ticketPhoto'=>'required'
        ]);


        if($validator->fails()){
            return response()->json($validator->errors()->toJson(), 400);
        }

        $photo = implode('.',[
            time(),
            $request->ticketPhoto->getClientOriginalExtension()
        ]);


        $request->ticketPhoto->move('img/events/concerts/',$photo);

        $newphoto = new Photo;
        $newphoto->path= "img/events/concerts/".$photo;
        $newphoto->save();

        $photoId = DB::table('photos')->orderBy('id', 'desc')->first()->id;

        $ticket = new Ticket;
        $ticket->userId = Auth::user()['id'];
        $ticket->photoId= $photoId;
        $ticket->title = $request->ticketName;
        $ticket->description = $request->ticketDescription;
        $ticket->eventId = $request->eventId;
        $ticket->save();

        

        return Redirect::back();
        
    }

    public function getInsertTiketPage()
    {
        $event = Event::all();
        return view('insertTiket',['event'=>$event]);
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

    public function createEvent()
    {
        $categories = Category::all();
        $artists = Artist::all();


        return view('adminEvent',["categories"=>$categories,'artists'=>$artists]);
    }

    public function newAdminEvent(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'category' => 'required',
            'artist' => 'required',
            'name'=>'required',
            'description'=>'required',
            'date'=>'required',

        ]);


        $photo = implode('.',[
            time(),
            $request->photo->getClientOriginalExtension()
        ]);


        $request->photo->move('img/events/concerts/',$photo);

        $newphoto = new Photo;
        $newphoto->path= "img/events/concerts/".$photo;
        $newphoto->save();


        if($validator->fails()){
            return response()->json($validator->errors()->toJson(), 400);
        }

        $photoId = DB::table('photos')->orderBy('id', 'desc')->first()->id;



        $event = new Event;
        $event->categoryId = $request->category;
        $event->artistId = $request->artist;
        $event->photoId = $photoId;
        $event->name = $request->name;
        $event->description = $request->description;
        $event->date = $request->date;
        $event->save();
        return Redirect::back();
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
