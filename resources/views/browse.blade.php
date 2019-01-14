@extends('template.template')

@section('title','all Events')

@section('css')
    <link href="{{asset('css/browse.css')}}" rel="stylesheet">
    <link href="{{asset('css/template.css')}}" rel="stylesheet">
@endsection
@section('content')


    <div class="container">

        <!-- Page Heading -->
        <h1 class="my-4 text-center">Events<br>
            <small>Don't miss your favourite shows!</small>
        </h1>

        @foreach($data as $d)
            <div class="row">
                <div class="col-md-7">
                    <a href="#">
                        <img class="img-fluid rounded mb-3 mb-md-0 browse-banner" src="{{$d[1]['path']}}" alt="">
                    </a>
                </div>
                <div class="col-md-5">
                    <h3>{{$d[0]['name']}} </h3>
                    <p>{{$d[0]['description']}}</p>
                    <a class="btn btn-primary" href="{{url('listEvent').'/'.$d[0]['id']}}">View Tickets</a>
                    </div>
            </div>
            <hr>

            @endforeach


        <!-- /.row -->

        <hr>





    </div>

    @endsection
@section('script')
    <script src="{{asset('js/template.js')}}"></script>
    <script>

    </script>
@endsection