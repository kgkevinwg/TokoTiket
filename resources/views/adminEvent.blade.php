@extends('template.adminTemplate')

@section('title','all Events')

@section('css')

    <link href="{{asset('css/template.css')}}" rel="stylesheet">
    <link href="{{asset('css/sellerList.css')}}" rel="stylesheet">

@endsection
@section('content')

    <div class="row" style="width: 100%;margin-top: 50px;">
        <div class="mx-auto col-sm-6">
            <!-- form user info -->
            <div class="card">
                <div class="card-header">
                    <h4 class="mb-0">New Event</h4>
                </div>
                <div class="card-body">
                    <form class="form" role="form" autocomplete="off">
                        {{csrf_field()}}
                        <div class="form-group">
                            <label for="exampleFormControlSelect1">Category</label>
                            <select class="form-control" id="exampleFormControlSelect1">
                                <option>1</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                                <option>5</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlSelect1">Artist</label>
                            <select class="form-control" id="exampleFormControlSelect1">
                                <option>1</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                                <option>5</option>
                            </select>
                        </div>
                        <div class="form-group row">
                            <label class="col-lg-3 col-form-label form-control-label">Event Name</label>
                            <div class="col-lg-9">
                                <input class="form-control" type="text" >
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-lg-3 col-form-label form-control-label">Event Date</label>
                            <div class="col-lg-9">
                                <input class="form-control" type="text" value="20100614062921">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-lg-3 col-form-label form-control-label"></label>
                            <div class="col-lg-9">
                                <input type="reset" class="btn btn-secondary" value="Cancel">
                                <input type="button" class="btn btn-primary" value="Save Changes">
                            </div>
                        </div>

                    </form>
                </div>
            </div>
            <!-- /form user info -->
        </div>
    </div>

    @endsection