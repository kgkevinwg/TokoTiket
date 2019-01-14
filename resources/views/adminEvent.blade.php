@extends('template.adminTemplate')

@section('title','all Events')

@section('css')

    <link href="{{asset('css/template.css')}}" rel="stylesheet">
    <link href="{{asset('css/sellerList.css')}}" rel="stylesheet">

@endsection
@section('content')

    <div class="row" style="width: 100%;margin-top: 50px;">
        <div class="mx-auto col-sm-6">
            <!-- form user info -->
            <div class="card">
                <div class="card-header">
                    <h4 class="mb-0">New Event</h4>
                </div>
                <div class="card-body">
                    <form class="form" role="form" autocomplete="off" method="post" action="/newEvent" enctype="multipart/form-data">
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
                                <input class="form-control" type="text" name="name">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-lg-3 col-form-label form-control-label">Event Date</label>
                            <div class="col-lg-9">
                                <input class="form-control" type="date" name="date">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="exampleFormControlTextarea1" class="col-lg-3 col-form-label form-control-label">Description</label>
                            <div class="col-lg-9">
                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="description"></textarea>

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
                </div>
            </div>
            <!-- /form user info -->
        </div>
    </div>

    @endsection