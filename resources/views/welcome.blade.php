@extends('template.template')

@section('title','TokoTiket - Sell your ticket!')

@section('css')
    <link href="{{asset('css/home.css')}}" rel="stylesheet">
    @endsection
@section('content')

<!-- Header -->
<header class="masthead">
    <div class="container">
        <div class="intro-text">
            <div class="intro-lead-in">Welcome To TokoTiket!</div>
            <div class="intro-description">Sell your concert tiket here!</div>
            {{--<a class="btn btn-primary btn-xl text-uppercase js-scroll-trigger" href="#services">Tell Me More</a>--}}
        </div>
    </div>
</header>

<!-- Services -->
<section id="services">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2 class="section-heading text-uppercase">Services</h2>
                <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3>
            </div>
        </div>
        <div class="row text-center">
            <div class="col-md-6">
            <span class="fa-stack fa-4x">
              <i class="fas fa-circle fa-stack-2x text-primary"></i>
              <i class="fas fa-shopping-cart fa-stack-1x fa-inverse"></i>
            </span>
                <h4 class="service-heading">Can't attend your concert? Dont worry!</h4>
                <p class="text-muted">On Toko Tiket, we got you covered. Just advertise your ticket in less than 10 minutes!</p>
            </div>
            <div class="col-md-6">
            <span class="fa-stack fa-4x">
              <i class="fas fa-circle fa-stack-2x text-primary"></i>
              <i class="fas fa-truck fa-stack-1x fa-inverse"></i>
            </span>
                <h4 class="service-heading">Looking to help your friend selling tickets?</h4>
                <p class="text-muted">We got you covered, just search through vast ammount of tickets and find your ideal ticket!</p>
            </div>

        </div>
    </div>
</section>

<!-- Portfolio Grid -->
<section class="bg-light" id="portfolio">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2 class="section-heading text-uppercase">Greatest Event Experience</h2>
                <h3 class="section-subheading text-muted">Some of our best selling items</h3>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4 col-sm-6 portfolio-item">
                <a class="portfolio-link" data-toggle="modal" href="#portfolioModal1">
                    <div class="portfolio-hover">
                        <div class="portfolio-hover-content">
                            <i class="fas fa-plus fa-3x"></i>
                        </div>
                    </div>

                    <img class="home-portfolio-thumb" src="{{asset('img/events/concerts/twiceland-thumb.jpg')}}" alt="">
                </a>
                <div class="portfolio-caption">
                    <h4>Twiceland: Fantasy Park in Jakarta 2018</h4>
                    <p class="text-muted">TWICE 2nd Tour: TWICELAND Zone 2: Fantasy Park is the second solo concert tour held by TWICE. </p>
                </div>
            </div>
            <div class="col-md-4 col-sm-6 portfolio-item">
                <a class="portfolio-link" data-toggle="modal" href="#portfolioModal1">
                    <div class="portfolio-hover">
                        <div class="portfolio-hover-content">
                            <i class="fas fa-plus fa-3x"></i>
                        </div>
                    </div>

                    <img class="home-portfolio-thumb" src="{{asset('img/events/concerts/in_your_area-thumb.jpg')}}" alt="">
                </a>
                <div class="portfolio-caption">
                    <h4>In Your Area: Blackpink 1st Tour 2018</h4>
                    <p class="text-muted">TWICE 2nd Tour: TWICELAND Zone 2: Fantasy Park is the second solo concert tour held by TWICE. </p>
                </div>
            </div>
            <div class="col-md-4 col-sm-6 portfolio-item">
                <a class="portfolio-link" data-toggle="modal" href="#portfolioModal1">
                    <div class="portfolio-hover">
                        <div class="portfolio-hover-content">
                            <i class="fas fa-plus fa-3x"></i>
                        </div>
                    </div>

                    <img class="home-portfolio-thumb" src="{{asset('img/events/concerts/redmare-thumb.jpg')}}" alt="">
                </a>
                <div class="portfolio-caption">
                    <h4>Redmare: Red Velvet 2nd Tour 2018</h4>
                    <p class="text-muted">REDMARE is the second concert by Red Velvet</p>
                </div>
            </div>

        </div>


        <section id="artist">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading text-uppercase">Featuring Artist</h2>
                    <h3 class="section-subheading text-muted">Browse your favourite artist</h3>
                </div>
            </div>



            <div class="row">

                <div class="col-lg-4 col-sm-6 text-center mb-4">

                    <img class=" img-fluid d-block mx-auto home-portfolio-thumb2" src="{{asset('img/artists/twice-thumb.jpg')}}" alt=""><br>
                    <h3>Twice</h3>
                </div>
                <div class="col-lg-4 col-sm-6 text-center mb-4">
                    <img class=" img-fluid d-block mx-auto home-portfolio-thumb2" src="{{asset('img/artists/gfriend-thumb.jpg')}}" alt=""><br>
                    <h3>Gfriend</h3>
                </div>
                <div class="col-lg-4 col-sm-6 text-center mb-4">
                    <img class=" img-fluid d-block mx-auto home-portfolio-thumb2" src="{{asset('img/artists/dean-thumb.jpg')}}" alt=""><br>
                    <h3>Dean</h3>
                </div>

            </div>
        </section>

    </div>
</section>



<!-- Contact -->
<section id="contact">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2 class="section-heading text-uppercase">Contact Us</h2>
                <h3 class="section-subheading text-muted">Let us hear your words!</h3>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <form id="contactForm" name="sentMessage" novalidate="novalidate">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <input class="form-control" id="name" type="text" placeholder="Your Name *" required="required" data-validation-required-message="Please enter your name.">
                                <p class="help-block text-danger"></p>
                            </div>
                            <div class="form-group">
                                <input class="form-control" id="email" type="email" placeholder="Your Email *" required="required" data-validation-required-message="Please enter your email address.">
                                <p class="help-block text-danger"></p>
                            </div>
                            <div class="form-group">
                                <input class="form-control" id="phone" type="tel" placeholder="Your Phone *" required="required" data-validation-required-message="Please enter your phone number.">
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <textarea class="form-control" id="message" placeholder="Your Message *" required="required" data-validation-required-message="Please enter a message."></textarea>
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                        <div class="col-lg-12 text-center">
                            <div id="success"></div>
                            <button id="sendMessageButton" class="btn btn-primary btn-xl text-uppercase" type="submit">Send Message</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>



{{--<!-- Portfolio Modals -->--}}

{{--<!-- Modal 6 -->--}}
{{--<div class="portfolio-modal modal fade" id="portfolioModal6" tabindex="-1" role="dialog" aria-hidden="true">--}}
    {{--<div class="modal-dialog">--}}
        {{--<div class="modal-content">--}}
            {{--<div class="close-modal" data-dismiss="modal">--}}
                {{--<div class="lr">--}}
                    {{--<div class="rl"></div>--}}
                {{--</div>--}}
            {{--</div>--}}
            {{--<div class="container">--}}
                {{--<div class="row">--}}
                    {{--<div class="col-lg-8 mx-auto">--}}
                        {{--<div class="modal-body">--}}
                            {{--<!-- Project Details Go Here -->--}}
                            {{--<h2 class="text-uppercase">Project Name</h2>--}}
                            {{--<p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>--}}
                            {{--<img class="img-fluid d-block mx-auto" src="{{asset('img/portfolio/06-full.jpg')}}" alt="">--}}
                            {{--<p>Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt repellat aperiam quasi sunt officia expedita beatae cupiditate, maiores repudiandae, nostrum, reiciendis facere nemo!</p>--}}
                            {{--<ul class="list-inline">--}}
                                {{--<li>Date: January 2017</li>--}}
                                {{--<li>Client: Window</li>--}}
                                {{--<li>Category: Photography</li>--}}
                            {{--</ul>--}}
                            {{--<button class="btn btn-primary" data-dismiss="modal" type="button">--}}
                                {{--<i class="fas fa-times"></i>--}}
                                {{--Close Project</button>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</div>--}}
{{--</div>--}}

@endsection

@section('script')
    <script src="{{asset('js/home.js')}}"></script>
    @endsection