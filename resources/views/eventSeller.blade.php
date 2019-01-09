@extends('template.template')

@section('title','all Events')

@section('css')
    <link href="{{asset('css/browse.css')}}" rel="stylesheet">
    <link href="{{asset('css/template.css')}}" rel="stylesheet">
    <link href="{{asset('css/sellerList.css')}}" rel="stylesheet">

@endsection
@section('content')

    <div class="container">

        <!-- Jumbotron Header -->
        <header class="jumbotron my-4">
            <h1 class="display-3">Browse trough number of seller!</h1>
            <p class="lead">Don't waste your time, your favourite artist is waiting for you.</p>

        </header>

        <!-- Page Features -->
        <div class="row text-center">


            @if(isset($data) && count($data) != 0)
                @foreach($data as $d)


                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <img class="card-img-top list-thumb" src="{{asset($d[2]['path'])}}" alt="">
                            <div class="card-body">
                                <h4 class="card-title">{{$d[1]['name']}}</h4>
                                <p class="card-text">{{$d[0]['description']}}</p>
                            </div>
                            <div class="card-footer">
                                <a href="{{url('ticketDetail').'/'.$d[0]['id']}}" class="btn btn-primary">Find Out More!</a>
                            </div>
                        </div>
                    </div>


                    @endforeach
                @else
                <h1 style="margin: 0 auto;">Oops, no data yet! stay tune for more info</h1>
                @endif






        </div>
        <!-- /.row -->

    </div>


    @endsection