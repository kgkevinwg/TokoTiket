@extends('template.template')

@section('title','all Events')

@section('css')
    <link href="{{asset('css/browse.css')}}" rel="stylesheet">
    <link href="{{asset('css/template.css')}}" rel="stylesheet">




@endsection
@section('content')


    <div class="container" style="margin-top: 50px;">
        <div class="row" style="margin: 0 auto;">
            <div class="col-md-12">
                <div class="panel panel-login" style="text-align: center;">
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col-sm-6">
                                <a href="#" class="active" id="login-form-link">Login</a>
                            </div>
                            <div class="col-sm-6">
                                <a href="#" id="register-form-link">Register</a>
                            </div>
                        </div>
                        <hr>
                    </div>
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-lg-12">
                                <form id="login-form" action="{{route('login')}}" method="post" role="form" style="display: block;">
                                    @csrf
                                    <div class="form-group">
                                        <input type="text" name="email"  tabindex="1" class="form-control username" placeholder="Username" value="">
                                    </div>
                                    <div class="form-group">
                                        <input type="password" name="password"  tabindex="2" class="form-control password" placeholder="Password">
                                    </div>
                                    <div class="form-group text-center">
                                        <input type="checkbox" tabindex="3" class="" name="remember" id="remember">
                                        <label for="remember"> Remember Me</label>
                                    </div>
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <input class="btn btn-primary" type="submit" name="login-submit" id="login-submit" tabindex="4" class="form-control btn btn-login" value="Log In">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="text-center">
                                                   
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                                <form id="register-form" action="/register" method="post" role="form" style="display: none;">
                                    @csrf
                                    <div class="form-group">
                                        <input type="text" name="name"  tabindex="1" class="form-control username" placeholder="Name" value="">
                                    </div>
                                    <div class="form-group">
                                        <input type="email" name="email" id="email" tabindex="1" class="form-control" placeholder="Email Address" value="">
                                    </div>
                                    <div class="form-group">
                                        <input type="password" name="password"  tabindex="2" class="form-control password" placeholder="Password">
                                    </div>
                                    <div class="form-group">
                                        <input type="password" name="confirm-password" id="confirm-password" tabindex="2" class="form-control" placeholder="Confirm Password">
                                    </div>
                                    <div class="form-group">
                                        <input type="text" name="phone" id="phone" tabindex="2" class="form-control" placeholder="Phone">
                                    </div>
                                    <div class="form-group">
                                        <input type="text" name="address" id="address" tabindex="2" class="form-control" placeholder="Address">
                                    </div>

                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <input class="btn btn-primary" type="submit" name="register-submit" id="register-submit" tabindex="4" class="form-control btn btn-register" value="Register Now">
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



    @endsection

@section('script')
    <script>
        $(function() {

            $('#login-form-link').click(function(e) {
                $("#login-form").delay(100).fadeIn(100);
                $("#register-form").fadeOut(100);
                $('#register-form-link').removeClass('active');
                $(this).addClass('active');
                e.preventDefault();
            });
            $('#register-form-link').click(function(e) {
                $("#register-form").delay(100).fadeIn(100);
                $("#login-form").fadeOut(100);
                $('#login-form-link').removeClass('active');
                $(this).addClass('active');
                e.preventDefault();
            });

        });

    </script>
@endsection