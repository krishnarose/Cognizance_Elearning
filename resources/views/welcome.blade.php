@extends('layouts.client.master')

@section('title', 'Welcome to libaray')

@section('content')
    <section class="slider_section">
        <div id="myCarousel" class="carousel slide banner-main" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="first-slide" src="{{ asset('client/images/banner.jpg') }}" alt="First slide">
                    <div class="container">
                        <div class="carousel-caption relative">
                            <h1>The Best Libraries That<br> Every Book Lover Must<br> Visit!</h1>
                            <p>adipiscing elit, sed do eiusmod tempor incididunt ut<br> labore et dolore magna aliqua. Ut
                                enim ad minim<br> veniam, quis nostrud exercitation </p>
                            <div class="button_section"> <a class="main_bt" href="#">Read More</a> </div>
                            <ul class="locat_icon">
                                <li> <a href="#"><img src="{{ asset('client/icon/facebook.png') }}"></a></li>
                                <li> <a href="#"><img src="{{ asset('client/icon/Twitter.png') }}"></a></li>
                                <li> <a href="#"><img src="{{ asset('client/icon/linkedin.png') }}"></a></li>
                                <li> <a href="#"><img src="{{ asset('client/icon/instagram.png') }}"></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="second-slide" src="{{ asset('client/images/banner.jpg') }}" alt="Second slide">
                    <div class="container">
                        <div class="carousel-caption relative">
                            <h1>The Best Libraries That<br> Every Book Lover Must<br> Visit!</h1>
                            <p>adipiscing elit, sed do eiusmod tempor incididunt ut<br> labore et dolore magna aliqua. Ut
                                enim ad minim<br> veniam, quis nostrud exercitation </p>
                            <div class="button_section"> <a class="main_bt" href="#">Read More</a> </div>
                            <ul class="locat_icon">
                                <li> <a href="#"><img src="{{ asset('client/icon/facebook.png') }}"></a></li>
                                <li> <a href="#"><img src="{{ asset('client/icon/Twitter.png') }}"></a></li>
                                <li> <a href="#"><img src="{{ asset('client/icon/linkedin.png') }}"></a></li>
                                <li> <a href="#"><img src="{{ asset('client/icon/instagram.png') }}"></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="third-slide" src="{{ asset('client/images/banner.jpg') }}" alt="Third slide">
                    <div class="container">
                        <div class="carousel-caption relative">
                            <h1>The Best Libraries That<br> Every Book Lover Must<br> Visit!</h1>
                            <p>adipiscing elit, sed do eiusmod tempor incididunt ut<br> labore et dolore magna aliqua. Ut
                                enim ad minim<br> veniam, quis nostrud exercitation </p>
                            <div class="button_section"> <a class="main_bt" href="#">Read More</a> </div>
                            <ul class="locat_icon">
                                <li> <a href="#"><img src="{{ asset('client/icon/facebook.png') }}"></a></li>
                                <li> <a href="#"><img src="{{ asset('client/icon/Twitter.png') }}"></a></li>
                                <li> <a href="#"><img src="{{ asset('client/icon/linkedin.png') }}"></a></li>
                                <li> <a href="#"><img src="{{ asset('client/icon/instagram.png') }}"></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </section>
    <!-- about -->
    <div class="about">
        <div class="container">
            <div class="row">
                <div class="col-md-10 offset-md-1">
                    <div class="aboutheading">
                        <h2>About <strong class="black">Us</strong></h2>
                        <span>adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad
                            minim veniam, quis nostrud exercitation ullamco laboris</span>
                    </div>
                </div>
            </div>
            <div class="row border">
                <div class="col-xl-7 col-lg-7 col-md-12 col-sm-12">
                    <div class="about-box">
                        <p> consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                            Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                            consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore
                            consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                            Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                            consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore</p>
                        <a href="#">Read More</a>
                    </div>
                </div>
                <div class="col-xl-5 col-lg-5 col-md-12 col-sm-12">
                    <div class="about-box">
                        <figure><img src="{{ asset('client/images/about.png') }}" alt="img" /></figure>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- end about -->
    <!-- Library -->
    <div class="Library">
        <div class="container">
            <div class="row">
                <div class="col-md-10 offset-md-1">
                    <div class="titlepage">
                        <h2>Our <strong class="black">Courses </strong></h2>
                        <span>adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad
                            minim veniam, quis nostrud exercitation ullamco laboris</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="bg">
            <div class="container py-5">
                <div class="row">
                    @php
                        $featuredcategories = App\Models\featuredCategory::all();
                    @endphp

                    @foreach ($featuredcategories as $fcat)
                        <div class="col-lg-4 col-md-6 col-12">
                            <div class="card" style="width: 18rem;">
                                <img class="card-img-top" src="{{ asset('uploads/category/' . $fcat->category->image) }}"
                                    alt="Card image cap">
                                <div class="card-body">
                                    <h5 class="card-title">{{ $fcat->category->title }}</h5>
                                    {{-- <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                                        the card's content.</p> --}}
                                    <a href="{{url('/category/'.$fcat->category->slug)}}" class="btn btn-primary">View</a>
                                </div>
                            </div>
                        </div>
                    @endforeach

                </div>
            </div>
            {{-- <div class="container">
                <div class="row">
                    <div class="col-md-10 offset-md-1">
                        <div class="Library-box">
                            <figure><img src="{{ asset('client/images/Library-.jpg') }}" alt="#" /></figure>
                        </div>
                    </div>
                </div>
            </div> --}}
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="read-more">
                        <a href="#">Read More</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end Library -->

    <!--Books -->
    <div class="Books">
        <div class="container">
            <div class="row">
                <div class="col-md-10 offset-md-1">
                    <div class="titlepage">
                        <h2>Our <strong class="black">Books </strong></h2>
                        <span>adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad
                            minim veniam, quis nostrud exercitation ullamco laboris</span>
                    </div>
                </div>
            </div>
            <div class="row box">
                <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12">
                    <div class="book-box">
                        <figure><img src="{{ asset('client/images/book-1.jpg') }}" alt="img" /></figure>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                    <div class="book-box">
                        <figure><img src="{{ asset('client/images/book-2.jpg') }}" alt="img" /></figure>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12">
                    <div class="book-box">
                        <figure><img src="{{ asset('client/images/book-1.jpg') }}" alt="img" /></figure>
                    </div>
                </div>
                <div class="col-md-6 offset-md-3">
                    <p>magna aliqua. Ut enim ad minim veniam,quis nostrud exercitation ullamco laboris</p>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="read-more">
                            <a href="#">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end Books -->
    <!-- Contact -->
    <div class="Contact">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="titlepage3">
                        <h2>Contact</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                    <form>
                        <div class="row">
                            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12">
                                <input class="form-control" placeholder="Name" type="Name">
                            </div>
                            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12">
                                <input class="form-control" placeholder="Phone Number" type="Phone Number">
                            </div>
                            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12">
                                <input class="form-control" placeholder="Email" type="Email">
                            </div>
                            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12">
                                <textarea class="textarea" placeholder="Message">Message</textarea>
                            </div>
                        </div>
                    </form>
                </div>
                <button class="send-btn">Send</button>
            </div>
        </div>
    </div>
    <!-- end Contact -->
@endsection
