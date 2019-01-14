<?php

namespace App\Http\Controllers;

use App\Artist;
use App\Category;
use App\Event;
use App\Photo;
use App\Ticket;
use App\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
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

        $events =  Event::all();
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

    public function getEditForm($mode,$id)
    {

        if($mode == 'e')
        {
            $data = Event::where('id','=',$id)->first();
            $category = Category::all();
            $artist  = Artist::all();
            return view("adminEditDelete",['event'=>$data,'categories'=>$category,'artists'=>$artist]);
        }
        else if($mode == 'u')
        {
            $data = User::where('id','=',$id)->first();

            return view("adminEditDelete",['user'=>$data]);
        }
        else if($mode == 'c')
        {
            $data = Category::where('id','=',$id)->first();
            return view("adminEditDelete",['category'=>$data]);
        }
        else if($mode == 't')
        {
            $data = Ticket::where('id','=',$id)->first();
            $user = User::all();
            $event = Event::all();
            return view("adminEditDelete",['ticket'=>$data,'users'=>$user,'events'=>$event]);
        }

    }

    public function doAdminEditDelete($action,$mode,$id,Request $request)
    {
        if($action == 'e')
        {
            $event = Event::where('id','=',$id)->first();

            if($mode == 'e')
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


                $event->categoryId = $request->category;
                $event->artistId = $request->artist;
                $event->photoId = $photoId;
                $event->name = $request->name;
                $event->description = $request->description;
                $event->date = $request->date;
                $event->save();
            }
            else
            {
                $event->delete();
            }
        }
        else if($action == 'u')
        {
            $user = User::where('id','=',$id)->first();
            if($mode == 'e')
            {
                $validator = Validator::make($request->all(), [
                    'email' => 'required|string|email|max:255|unique:users',
                    'password' => 'required|string|min:6',
                    'name' =>'required',
                    'phone'=>'required',
                    'address'=>'required',

                ]);

                if($validator->fails()){
                    return response()->json($validator->errors()->toJson(), 400);
                }

                $user->name = $request->name;
                $user->address  = $request->address;
                $user->email = $request->email;
                $user->password = Hash::make($request->get('password'));
                $user->phone = $request->phone;
                $user->save();

            }
            else
            {
                $user->delete();
            }



        }
        else if($action == 'c')
        {
            $category = Category::where('id','=',$id)->first();
            if($mode == 'e')
            {
                $category->name = $request->name;
                $category->save();
            }
            else
            {$category->delete();}

        }
        else if($action == 't')
        {
            $ticket = Ticket::where('id','=',$id)->first();
            if($mode == 'e')
            {
                $photo = implode('.',[
                    time(),
                    $request->photo->getClientOriginalExtension()
                ]);


                $request->photo->move('img/events/concerts/',$photo);

                $newphoto = new Photo;
                $newphoto->path= "img/events/concerts/".$photo;
                $newphoto->save();


                $photoId = DB::table('photos')->orderBy('id', 'desc')->first()->id;


                $ticket->userId= $request->userId;
                $ticket->photoId=  $photoId;
                $ticket->title = $request->ticketName;
                $ticket->description = $request->ticketDescription;
                $ticket->eventId = $request->eventId;
                $ticket->save();


            }
            else
            {$ticket->delete();}


        }

        return redirect('/admin');

    }

    public function getMyTicket()
    {
        $tickets = Ticket::where('userId','=',Auth::user()['id'])->get();
        $data = array();


        foreach($tickets as $t){
            $user = User::where('id','=',$t->userId)->first();
            $photo = Photo::where('id','=',$t->photoId)->first();

            array_push($data,[$t,$user,$photo]);

        }
        return view('myTicket',['data'=>$data]);

    }

    public function editMyTicket($id)
    {
        $data = Ticket::where('id','=',$id)->first();
        $user = User::all();
        $event = Event::all();
        return view("editTicket",['ticket'=>$data,'users'=>$user,'events'=>$event]);
    }

    public function doEditMyTicket($id,Request $request)
    {
        $ticket = Ticket::where('id','=',$id)->first();

        $photo = implode('.',[
            time(),
            $request->photo->getClientOriginalExtension()
        ]);


        $request->photo->move('img/events/concerts/',$photo);

        $newphoto = new Photo;
        $newphoto->path= "img/events/concerts/".$photo;
        $newphoto->save();


        $photoId = DB::table('photos')->orderBy('id', 'desc')->first()->id;



        $ticket->photoId=  $photoId;
        $ticket->title = $request->ticketName;
        $ticket->description = $request->ticketDescription;
        $ticket->eventId = $request->eventId;
        $ticket->save();
        return redirect('/myTicket');


    }

    public function doDeleteMyTicket($id,Request $request)
    {
        $ticket = Ticket::where('id','=',$id)->first();
        $ticket->delete();
        return redirect('/myTicket');
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
