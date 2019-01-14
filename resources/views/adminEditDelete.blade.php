@extends('template.adminTemplate')

@section('title','all Events')

@section('css')

    <link href="{{asset('css/template.css')}}" rel="stylesheet">
    <link href="{{asset('css/sellerList.css')}}" rel="stylesheet">

@endsection
@section('content')


    @if(isset($event))
        <div class="row" style="width: 100%;margin-top: 50px;">
            <div class="mx-auto col-sm-6">
                <!-- form user info -->
                <div class="card">
                    <div class="card-header">
                        <h4 class="mb-0">Edit Event</h4>
                    </div>
                    <div class="card-body">
                        <form class="form" role="form" autocomplete="off" method="post" action="/doEditDelete/e/e/{{$event['id']}}" enctype="multipart/form-data">
                            {{csrf_field()}}
                            <div class="form-group">
                                <label for="exampleFormControlSelect1">Category</label>
                                @if(isset($categories))
                                    <select class="form-control" id="exampleFormControlSelect1" name="category">
                                        @foreach($categories as $c)
                                            <option value="{{$c['id']}}">{{$c['name']}}</option>

                                        @endforeach
                                    </select>
                                @endif

                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlSelect1">Artist</label>
                                @if(isset($artists))
                                    <select class="form-control" id="exampleFormControlSelect1" name="artist">
                                        @foreach($artists as $a)
                                            <option value="{{$a['id']}}">{{$a['name']}}</option>

                                        @endforeach

                                    </select>
                                @endif

                            </div>
                            <div class="form-group row">
                                <label class="col-lg-3 col-form-label form-control-label">Event Name</label>
                                <div class="col-lg-9">
                                    <input class="form-control" type="text" name="name" value="{{$event['name']}}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-lg-3 col-form-label form-control-label">Event ID</label>
                                <div class="col-lg-9">
                                    <input class="form-control" type="text" name="id" value="{{$event['id']}}" disabled>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-lg-3 col-form-label form-control-label">Event Date</label>
                                <div class="col-lg-9">
                                    <input class="form-control" type="date" name="date" value="{{$event['date']}}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="exampleFormControlTextarea1" class="col-lg-3 col-form-label form-control-label">Description</label>
                                <div class="col-lg-9">
                                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="description">{{$event['description']}}</textarea>

                                </div>
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlFile1">Event Photo</label>
                                <input type="file" class="form-control-file" id="exampleFormControlFile1" name="photo">
                            </div>
                            <div class="form-group row">
                                <div class="col-lg-12">

                                    <input type="submit" class="btn btn-primary" value="Save Changes" style="width: 100%;">
                                </div>
                            </div>

                        </form>
                        <form action="/doEditDelete/e/d/{{$event['id']}}" method="post">{{csrf_field()}}<input type="submit" value="Delete" class="btn btn-danger" style="width: 100%;"></form>
                    </div>
                </div>
                <!-- /form user info -->
            </div>
        </div>
        @endif

    @if(isset($user))
        <div class="row" style="width: 100%;margin-top: 50px;">
            <div class="mx-auto col-sm-6">
                <!-- form user info -->
                <div class="card">
                    <div class="card-header">
                        <h4 class="mb-0">Edit User</h4>
                    </div>
                    <div class="card-body">
                        <form class="form" role="form" autocomplete="off" method="post" action="/doEditDelete/u/e/{{$user['id']}}">
                            {{csrf_field()}}
                            <div class="form-group row">
                                <label class="col-lg-3 col-form-label form-control-label">User ID</label>
                                <div class="col-lg-9">
                                    <input class="form-control" type="text" name="id" value="{{$user['id']}}" disabled>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-lg-3 col-form-label form-control-label">Name</label>
                                <div class="col-lg-9">
                                    <input class="form-control" type="text" value="Jane" name="name" value="{{$user['name']}}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-lg-3 col-form-label form-control-label">Email</label>
                                <div class="col-lg-9">
                                    <input class="form-control" type="email" value="Jane" name="email" value="{{$user['email']}}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-lg-3 col-form-label form-control-label">Password</label>
                                <div class="col-lg-9">
                                    <input class="form-control" type="password" name="password" >
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-lg-3 col-form-label form-control-label">Phone</label>
                                <div class="col-lg-9">
                                    <input class="form-control" type="number" name="phone" value="{{$user['phone']}}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="exampleFormControlTextarea1" class="col-lg-3 col-form-label form-control-label">Address</label>
                                <div class="col-lg-9">
                                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="address">{{$user['address']}}</textarea>

                                </div>
                            </div>
                            <div class="form-group row">

                                <div class="col-lg-12">
                                    <input type="submit" class="btn btn-primary" value="Save Changes" style="width: 100%;">
                                </div>
                            </div>
                        </form>
                        <form action="/doEditDelete/u/d/{{$user['id']}}" method="post">{{csrf_field()}}<input type="submit" value="Delete" class="btn btn-danger" style="width: 100%;"></form>

                    </div>
                </div>
                <!-- /form user info -->
            </div>
        </div>

    @endif

    @if(isset($category))
        <div class="row" style="width: 100%;margin-top: 50px;">
            <div class="mx-auto col-sm-6">
                <!-- form user info -->
                <div class="card">
                    <div class="card-header">
                        <h4 class="mb-0">Edit Category</h4>
                    </div>
                    <div class="card-body">
                        <form class="form" role="form" autocomplete="off" action="/doEditDelete/c/e/{{$category['id']}}" method="post">
                            {{csrf_field()}}
                            <div class="form-group row">
                                <label class="col-lg-3 col-form-label form-control-label">Category ID</label>
                                <div class="col-lg-9">
                                    <input class="form-control" type="text" name="id" value="{{$category['id']}}" disabled>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-lg-3 col-form-label form-control-label">Category Name</label>
                                <div class="col-lg-9">
                                    <input class="form-control" type="text"  name="name" value="{{$category['name']}}">
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-lg-12">

                                    <input type="submit" class="btn btn-primary" value="Save Changes" style="width: 100%;">
                                </div>
                            </div>
                        </form>
                        <form action="/doEditDelete/c/d/{{$category['id']}}" method="post">{{csrf_field()}}<input type="submit" value="Delete" class="btn btn-danger" style="width: 100%;"></form>

                    </div>
                </div>
                <!-- /form user info -->
            </div>
        </div>


    @endif

    @if(isset($ticket))
        <div class="row" style="width: 100%;margin-top: 50px;">
            <div class="mx-auto col-sm-6">
                <!-- form user info -->
                <div class="card">
                    <div class="card-header">
                        <h4 class="mb-0">Jual Tiketmu</h4>
                    </div>
                    <div class="card-body">
                        <form class="form" role="form" autocomplete="off" method="post" action="/doEditDelete/t/e/{{$ticket['id']}}" enctype="multipart/form-data">
                            {{csrf_field()}}
                            <div class="form-group row">
                                <label class="col-lg-3 col-form-label form-control-label">Category ID</label>
                                <div class="col-lg-9">
                                    <input class="form-control" type="text" name="id" value="{{$ticket['id']}}" disabled>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-lg-3 col-form-label form-control-label">Ticket Title</label>
                                <div class="col-lg-9">
                                    <input class="form-control" type="text" value="Jual ticket cepat" name="ticketName">
                                </div>
                            </div>

                            @if(isset($events))

                                <label class="my-1 mr-2" for="inlineFormCustomSelectPref">Event Type</label>
                                <select class="custom-select my-1 mr-sm-2" id="inlineFormCustomSelectPref" name="eventId">
                                    @foreach($events as $e)
                                        <option value="{{$e['id']}}">{{$e['name']}}</option>

                                    @endforeach

                                </select>
                            @endif
                            @if(isset($users))

                                <label class="my-1 mr-2" for="inlineFormCustomSelectPref">User Name</label>
                                <select class="custom-select my-1 mr-sm-2" id="inlineFormCustomSelectPref" name="userId">
                                    @foreach($users as $e)
                                        <option value="{{$e['id']}}">{{$e['name']}}</option>

                                    @endforeach

                                </select>
                            @endif




                            <div class="form-group row">
                                <label for="exampleFormControlTextarea1" class="col-lg-3 col-form-label form-control-label">Description</label>
                                <div class="col-lg-9">
                                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="ticketDescription"></textarea>

                                </div>
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlFile1">Event Photo</label>
                                <input type="file" class="form-control-file" id="exampleFormControlFile1" name="photo">
                            </div>
                            <div class="form-group row">
                                <div class="col-lg-12">

                                    <input type="submit" class="btn btn-primary" value="Save Changes" style="width: 100%;">
                                </div>
                            </div>
                        </form>
                        <form action="/doEditDelete/t/d/{{$ticket['id']}}" method="post">{{csrf_field()}}<input type="submit" value="Delete" class="btn btn-danger" style="width: 100%;"></form>

                    </div>
                </div>
                <!-- /form user info -->
            </div>
        </div>


    @endif




    @endsection