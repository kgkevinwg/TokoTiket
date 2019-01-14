@extends('template.template')

@section('title','all Events')

@section('css')
    <link href="{{asset('css/browse.css')}}" rel="stylesheet">
    <link href="{{asset('css/template.css')}}" rel="stylesheet">
@endsection
@section('content')

    <div class="container">

        <div class="row">

            <!-- Post Content Column -->
            <div class="col-lg-8">

                <!-- Title -->
                <h1 class="mt-4">{{$ticket['title']}}</h1>

                <!-- Author -->
                <p class="lead">
                    by
                    {{$user['name']}}
                </p>

                <hr>

                <!-- Date/Time -->
                <p>{{$event['date']}}</p>

                <hr>

                <!-- Preview Image -->
                <img class="img-fluid rounded mb-3 mb-md-0 browse-banner" src="{{asset($photo['path'])}}" alt="">


                <hr>

                <!-- Post Content -->
                {{$ticket['desctiption']}}



            </div>


            <div class="col-md-8">
                <!-- Categories Widget -->
                <div class="card my-4">
                    <h5 class="card-header">Seller Contact</h5>
                    <div class="card-body">
                        <div class="col-lg-12">
                            <div class="col-md-4 d-inline-block" ><b>Name: </b></div>
                            <div class="col-md-6 d-inline-block"> {{$user['name']}} </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="col-md-4 d-inline-block" ><b>Email: </b></div>
                            <div class="col-md-6 d-inline-block"> {{$user['email']}}</div>
                        </div>
                        <div class="col-lg-12">
                            <div class="col-md-4 d-inline-block" ><b>Phone: </b></div>
                            <div class="col-md-6 d-inline-block"> {{$user['phone']}} </div>
                        </div>

                    </div>
                </div>
            </div>

        </div>
        <!-- /.row -->

    </div>



@endsection

