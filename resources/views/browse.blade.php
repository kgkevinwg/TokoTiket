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

        <!-- Project One -->
        <div class="row">
            <div class="col-md-7">
                <a href="#">
                    <img class="img-fluid rounded mb-3 mb-md-0 browse-banner" src="{{asset('img/events/concerts/twiceland-banner.jpg')}}" alt="">
                </a>
            </div>
            <div class="col-md-5">
                <h3>Twiceland: Fantasy Park in Jakarta 2018 </h3>
                <p>TWICE 2nd Tour: TWICELAND Zone 2: Fantasy Park is the second solo concert tour held by TWICE.</p>
                <a class="btn btn-primary" href="#">View Tickets</a>
            </div>
        </div>
        <!-- /.row -->

        <hr>

        <!-- Project Two -->
        <div class="row">
            <div class="col-md-7">
                <a href="#">
                    <img class="img-fluid rounded mb-3 mb-md-0 browse-banner" src="{{asset('img/events/concerts/in_your_area-banner.jpg')}}" alt="">
                </a>
            </div>
            <div class="col-md-5">
                <h3>In Your Area: Blackpink 1st Tour 2018</h3>
                <p>TWICE 2nd Tour: TWICELAND Zone 2: Fantasy Park is the second solo concert tour held by TWICE.</p>
                <a class="btn btn-primary" href="#">View Tickets</a>
            </div>
        </div>
        <!-- /.row -->

        <hr>

        <!-- Project Three -->
        <div class="row">
            <div class="col-md-7">
                <a href="#">
                    <img class="img-fluid rounded mb-3 mb-md-0 browse-banner" src="{{asset('img/events/concerts/redmare-banner.jpg')}}" alt="">
                </a>
            </div>
            <div class="col-md-5">
                <h3>Redmare: Red Velvet 2nd Tour 2018</h3>
                <p>REDMARE is the second concert by Red Velvet</p>
                <a class="btn btn-primary" href="#">View Tickets</a>
            </div>
        </div>
        <!-- /.row -->

        <hr>



        <hr>

        <!-- Pagination -->
        <ul class="pagination justify-content-center">
            <li class="page-item">
                <a class="page-link" href="#" aria-label="Previous">
                    <span aria-hidden="true">&laquo;</span>
                    <span class="sr-only">Previous</span>
                </a>
            </li>
            <li class="page-item">
                <a class="page-link" href="#">1</a>
            </li>
            <li class="page-item">
                <a class="page-link" href="#">2</a>
            </li>
            <li class="page-item">
                <a class="page-link" href="#">3</a>
            </li>
            <li class="page-item">
                <a class="page-link" href="#" aria-label="Next">
                    <span aria-hidden="true">&raquo;</span>
                    <span class="sr-only">Next</span>
                </a>
            </li>
        </ul>

    </div>

    @endsection
@section('script')
    <script src="{{asset('js/template.js')}}"></script>
@endsection