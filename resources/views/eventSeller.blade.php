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

            <div class="col-lg-3 col-md-6 mb-4">
                <div class="card">
                    <img class="card-img-top list-thumb" src="{{asset('img/events/concerts/twiceland-thumb.jpg')}}" alt="">
                    <div class="card-body">
                        <h4 class="card-title">Seller Name</h4>
                        <p class="card-text">Description (20) words</p>
                    </div>
                    <div class="card-footer">
                        <a href="#" class="btn btn-primary">Find Out More!</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-4">
                <div class="card">
                    <img class="card-img-top list-thumb" src="{{asset('img/events/concerts/twiceland-thumb.jpg')}}" alt="">
                    <div class="card-body">
                        <h4 class="card-title">Seller Name</h4>
                        <p class="card-text">Description (20) words</p>
                    </div>
                    <div class="card-footer">
                        <a href="#" class="btn btn-primary">Find Out More!</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-4">
                <div class="card">
                    <img class="card-img-top list-thumb" src="{{asset('img/events/concerts/twiceland-thumb.jpg')}}" alt="">
                    <div class="card-body">
                        <h4 class="card-title">Seller Name</h4>
                        <p class="card-text">Description (20) words</p>
                    </div>
                    <div class="card-footer">
                        <a href="#" class="btn btn-primary">Find Out More!</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-4">
                <div class="card">
                    <img class="card-img-top list-thumb" src="{{asset('img/events/concerts/twiceland-thumb.jpg')}}" alt="">
                    <div class="card-body">
                        <h4 class="card-title">Seller Name</h4>
                        <p class="card-text">Description (20) words</p>
                    </div>
                    <div class="card-footer">
                        <a href="#" class="btn btn-primary">Find Out More!</a>
                    </div>
                </div>
            </div>



        </div>
        <!-- /.row -->

    </div>


    @endsectopm