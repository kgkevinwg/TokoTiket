@extends('template.template')

@section('title','all Events')

@section('css')
    <link href="{{asset('css/browse.css')}}" rel="stylesheet">
    <link href="{{asset('css/template.css')}}" rel="stylesheet">
@endsection
@section('content')
    <div class="row" style="width: 100%;margin-top: 50px;">
        <div class="mx-auto col-sm-6">
            <!-- form user info -->
            <div class="card">
                <div class="card-header">
                    <h4 class="mb-0">Jual Tiketmu</h4>
                </div>
                <div class="card-body">
                    <form class="form" role="form" autocomplete="off" method="post" action="/doEditTicket/{{$ticket['id']}}" enctype="multipart/form-data">
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
                    <form action="/doDeleteTicket/{{$ticket['id']}}" method="post">{{csrf_field()}}<input type="submit" value="Delete" class="btn btn-danger" style="width: 100%;"></form>

                </div>
            </div>
            <!-- /form user info -->
        </div>
    </div>
    @endcontent


