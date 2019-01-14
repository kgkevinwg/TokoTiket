@extends('template.template')

@section('title','all Events')

@section('css')
    <link href="{{asset('css/browse.css')}}" rel="stylesheet">
    <link href="{{asset('css/template.css')}}" rel="stylesheet">
@endsection
@section('content')

    <div class="container">

        <!-- Page Heading -->
        <h1 class="my-4 text-center">My Tickets<br>
            <small>Manage your tickets</small>
        </h1>

        <div class="row text-center">


            @if(isset($data) && count($data) != 0)
                @foreach($data as $d)


                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <img class="card-img-top list-thumb item-list" src="{{asset($d[2]['path'])}}" alt="">
                            <div class="card-body">
                                <h4 class="card-title">{{$d[1]['name']}}</h4>
                                <h5 class="card-title">{{$d[0]['title']}}</h5>
                                <p class="card-text">{{$d[0]['description']}}</p>
                            </div>
                            <div class="card-footer">
                                <a href="{{url('editTicket').'/'.$d[0]['id']}}" class="btn btn-primary">Edit</a>
                            </div>
                        </div>
                    </div>


                @endforeach
            @else
                <h1 style="margin: 0 auto;">Oops, no data yet! stay tune for more info</h1>
            @endif






        </div>


    </div>


    @endsection