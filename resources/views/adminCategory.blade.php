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
                    <h4 class="mb-0">New Category</h4>
                </div>
                <div class="card-body">
                    <form class="form" role="form" autocomplete="off" action="{{url('/newCategory')}}"  method="post">
                        {{csrf_field()}}
                        <div class="form-group row">
                            <label class="col-lg-3 col-form-label form-control-label">Category Name</label>
                            <div class="col-lg-9">
                                <input class="form-control" type="text" value="Concert" name="name">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-lg-3 col-form-label form-control-label"></label>
                            <div class="col-lg-9">

                                <input type="submit" class="btn btn-primary" value="Save Changes">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <!-- /form user info -->
        </div>
    </div>


@endsection