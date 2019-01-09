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
                <h1 class="mt-4">Event Name</h1>

                <!-- Author -->
                <p class="lead">
                    by
                    <a href="#">Seller Name</a>
                </p>

                <hr>

                <!-- Date/Time -->
                <p>Posted on January 1, 2018 at 12:00 PM</p>

                <hr>

                <!-- Preview Image -->
                <img class="img-fluid rounded mb-3 mb-md-0 browse-banner" src="{{asset('img/events/concerts/twiceland-banner.jpg')}}" alt="">


                <hr>

                <!-- Post Content -->
                Description



            </div>

            <!-- Sidebar Widgets Column -->
            <div class="col-md-4">

                <!-- Search Widget -->
                <div class="card my-4">
                    <h5 class="card-header">Search</h5>
                    <div class="card-body">
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Search for...">
                            <span class="input-group-btn">
                  <button class="btn btn-secondary" type="button">Go!</button>
                </span>
                        </div>
                    </div>
                </div>



                <button class="btn btn-primary" style="width: 100%;" type="button">Buy Now</button>



            </div>

            <div class="col-md-8">
                <!-- Categories Widget -->
                <div class="card my-4">
                    <h5 class="card-header">Seller Contact</h5>
                    <div class="card-body">
                        <div class="col-lg-12">
                            <div class="col-md-4 d-inline-block" ><b>Name: </b></div>
                            <div class="col-md-6 d-inline-block"> Udin </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="col-md-4 d-inline-block" ><b>Email: </b></div>
                            <div class="col-md-6 d-inline-block"> udin@corporation.com </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="col-md-4 d-inline-block" ><b>Phone: </b></div>
                            <div class="col-md-6 d-inline-block"> 08123456789 </div>
                        </div>

                    </div>
                </div>
            </div>

        </div>
        <!-- /.row -->

    </div>



@endsection

