@extends('template.adminTemplate')

@section('title','all Events')

@section('css')

    <link href="{{asset('css/template.css')}}" rel="stylesheet">
    <link href="{{asset('css/sellerList.css')}}" rel="stylesheet">

@endsection
@section('content')

    <div id="content-wrapper">

        <div class="container-fluid">

            <!-- Breadcrumbs-->
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="#">Dashboard</a>
                </li>
                <li class="breadcrumb-item active">Overview</li>
            </ol>

            <!-- Icon Cards-->
            <div class="row">
                <div class="col-xl-3 col-sm-6 mb-3">
                    <div class="card text-white bg-primary o-hidden h-100">
                        <div class="card-body">
                            <div class="card-body-icon">
                                <i class="fas fa-fw fa-comments"></i>
                            </div>
                            <div class="mr-5">Events</div>
                        </div>
                        <a class="card-footer text-white clearfix small z-1" href="{{url('/admin')}}">
                            <span class="float-left">View Details</span>
                            <span class="float-right">
                    <i class="fas fa-angle-right"></i>
                  </span>
                        </a>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6 mb-3">
                    <div class="card text-white bg-warning o-hidden h-100">
                        <div class="card-body">
                            <div class="card-body-icon">
                                <i class="fas fa-fw fa-list"></i>
                            </div>
                            <div class="mr-5">Users</div>
                        </div>
                        <a class="card-footer text-white clearfix small z-1" href="{{url('/adminUsers')}}">
                            <span class="float-left">View Details</span>
                            <span class="float-right">
                    <i class="fas fa-angle-right"></i>
                  </span>
                        </a>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6 mb-3">
                    <div class="card text-white bg-success o-hidden h-100">
                        <div class="card-body">
                            <div class="card-body-icon">
                                <i class="fas fa-fw fa-shopping-cart"></i>
                            </div>
                            <div class="mr-5">Categories</div>
                        </div>
                        <a class="card-footer text-white clearfix small z-1" href="{{url('/adminCategories')}}">
                            <span class="float-left">View Details</span>
                            <span class="float-right">
                    <i class="fas fa-angle-right"></i>
                  </span>
                        </a>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6 mb-3">
                    <div class="card text-white bg-danger o-hidden h-100">
                        <div class="card-body">
                            <div class="card-body-icon">
                                <i class="fas fa-fw fa-life-ring"></i>
                            </div>
                            <div class="mr-5">Tickets</div>
                        </div>
                        <a class="card-footer text-white clearfix small z-1" href="{{url('/adminTickets')}}">
                            <span class="float-left">View Details</span>
                            <span class="float-right">
                    <i class="fas fa-angle-right"></i>
                  </span>
                        </a>
                    </div>
                </div>
            </div>



            <!-- DataTables Example -->
            <div class="card mb-3">
                <div class="card-header">
                    <i class="fas fa-table"></i>
                    Administrator Data</div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table">
                            @if(isset($events))
                                <thead>
                                <tr>
                                    <th scope="col">id</th>
                                    <th scope="col">artistId</th>
                                    <th scope="col">photoId</th>
                                    <th scope="col">name</th>
                                    <th scope="col">Description</th>
                                    <th scope="col">Date</th>
                                </tr>
                                </thead>

                                @foreach($events as $e)
                                    <tr>
                                        <td>{{$e['id']}}</td>
                                        <td>{{$e['categoryId']}}</td>
                                        <td>{{$e['artistId']}}</td>
                                        <td>{{$e['photoId']}}</td>
                                        <td>{{$e['name']}}</td>
                                        <td>{{$e['description']}}</td>
                                        <td>{{$e['date']}}</td>
                                        <td><a href="{{url('edit/e/'.$e['id'])}}"><button class="btn btn-dark">Edit</button></a></td>

                                    </tr></a>

                                    @endforeach
                            @endif
                            @if(isset($users))
                                    <thead>
                                    <tr>
                                        <th scope="col">id</th>
                                        <th scope="col">Name</th>
                                        <th scope="col">Email</th>
                                        <th scope="col">password</th>
                                        <th scope="col">Phone</th>
                                        <th scope="col">Address</th>
                                        <th scope="col">Role</th>
                                    </tr>
                                    </thead>

                                @foreach($users as $u)
                                        <tr>
                                            <td>{{$u['id']}}</td>
                                            <td>{{$u['name']}}</td>
                                            <td>{{$u['email']}}</td>
                                            <td>{{$u['password']}}</td>
                                            <td>{{$u['phone']}}</td>
                                            <td>{{$u['address']}}</td>
                                            <td>{{$u['role']}}</td>
                                            <td><a href="{{url('edit/u/'.$u['id'])}}"><button class="btn btn-dark">Edit</button></a></td>

                                        </tr>
                                    @endforeach
                            @endif
                            @if(isset($categories))
                                    <thead>
                                    <tr>
                                        <th scope="col">id</th>
                                        <th scope="col">Name</th>

                                    </tr>
                                    </thead>

                                @foreach($categories as $c)
                                        <tr>
                                            <td>{{$c['id']}}</td>
                                            <td>{{$c['name']}}</td>
                                            <td><a href="{{url('edit/c/'.$c['id'])}}"><button class="btn btn-dark">Edit</button></a></td>

                                        </tr>
                                    @endforeach
                            @endif
                            @if(isset($tickets))
                                    <thead>
                                    <tr>
                                        <th scope="col">Id</th>
                                        <th scope="col">userId</th>
                                        <th scope="col">photoId</th>
                                        <th scope="col">eventId</th>
                                        <th scope="col">Title</th>
                                        <th scope="col">Description</th>
                                    </tr>
                                    </thead>

                                @foreach($tickets as $t)
                                        <tr>
                                            <td>{{$t['id']}}</td>
                                            <td>{{$t['userId']}}</td>
                                            <td>{{$t['photoId']}}</td>
                                            <td>{{$t['eventId']}}</td>
                                            <td>{{$t['title']}}</td>
                                            <td>{{$t['description']}}</td>
                                            <td><a href="{{url('edit/t/'.$t['id'])}}"><button class="btn btn-dark">Edit</button></a></td>

                                        </tr>

                                    @endforeach
                            @endif


                        </table>
                    </div>
                </div>
                <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
            </div>

        </div>
        <!-- /.container-fluid -->



    </div>
    <!-- /.content-wrapper -->



    @endsection