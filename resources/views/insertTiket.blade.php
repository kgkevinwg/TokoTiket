@extends('template.template')

@section('title','all Events')

@section('css')
    <link href="{{asset('css/browse.css')}}" rel="stylesheet">
    <link href="{{asset('css/template.css')}}" rel="stylesheet">


@endsection
@section('content')

    <div class="container">
        <div class="row">
            <div class="mx-auto col-sm-6">
                <!-- form user info -->
                <div class="card">
                    <div class="card-header">
                        <h4 class="mb-0">Jual Tiketmu</h4>
                    </div>
                    <div class="card-body">
                        <form class="form" role="form" autocomplete="off" method="post" action="/insertTiket" enctype="multipart/form-data">
                            {{csrf_field()}}
                            <div class="form-group row">
                                <label class="col-lg-3 col-form-label form-control-label">Ticket Title</label>
                                <div class="col-lg-9">
                                    <input class="form-control" type="text" value="Jual ticket cepat" name="ticketName">
                                </div>
                            </div>

                            @if(isset($event))

                                <label class="my-1 mr-2" for="inlineFormCustomSelectPref">Event Type</label>
                                <select class="custom-select my-1 mr-sm-2" id="inlineFormCustomSelectPref" name="eventId">
                                    @foreach($event as $e)
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
                                <input type="file" class="form-control-file" id="exampleFormControlFile1" name="ticketPhoto">
                            </div>
                            <input type="submit" value="Submit">
                        </form>
                    </div>
                </div>
                <!-- /form user info -->
            </div>
        </div>
    </div>



    @endsection
