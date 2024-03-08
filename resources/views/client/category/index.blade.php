@extends('layouts.client.master')

@section('title', $category->title . ' - ELearning')

@section('content')
<br><br><br><br>
    <section class="section-padding section-bg">
        <div class="container">
            <div class="row my-5">
                <div class="col-md-12">
                    <form action="{{ url('/search') }}" method="post"
                        class="d-flex align-items-center bg-white rounded p-2 shadow-sm">
                        @csrf
                        <input type="text" name="title" class="form-control me-3" placeholder="Search a course...">
                        <label for="">Free</label>
                        <input type="checkbox" name="free" class="me-3">
                        <label for="">Paid</label>
                        <input type="checkbox" name="paid" class="me-3">
                        <button class="btn btn-primary">Search</button>
                    </form>
                </div>
            </div>
            <div class="Library">
                {{-- <div class="container">
                    <div class="row">
                        <div class="col-md-10 offset-md-1">
                            <div class="titlepage">
                                <h2>Our <strong class="black">Courses </strong></h2>
                                <span>adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad
                                    minim veniam, quis nostrud exercitation ullamco laboris</span>
                            </div>
                        </div>
                    </div>
                </div> --}}
                <div class="bg">
                    <div class="container py-5">
                        <div class="row">
                            @php
                                $featuredcategories = App\Models\featuredCategory::all();
                            @endphp

                            @foreach ($courses as $course)
                                <div class="col-lg-4 col-md-6 col-12">
                                    <div class="card" style="width: 18rem;">
                                        <img class="card-img-top" src="{{ asset('uploads/course/' . $course->image) }}"
                                            alt="Card image cap">
                                        <div class="card-body">
                                            <h5 class="card-title">{{ $course->title}}</h5>
                                            {{-- <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                                                the card's content.</p> --}}
                                            <a href="{{ url('/category/' . $category->slug . '/' . $course->slug) }}" class="btn btn-primary">Browse</a>
                                        </div>
                                    </div>
                                </div>
                            @endforeach

                        </div>
                    </div>
                </div>

            {{-- <div class="row">
                @foreach ($courses as $course)
                    <div class="col-lg-4 col-md-6 col-12">
                        <div class="card" style="width: 18rem;">
                            <img src="{{ asset('uploads/course/' . $course->image) }}" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">{{ $course->title }}</h5>
                                <p class="card-text"></p>
                                <a href="{{ url('/category/' . $category->slug . '/' . $course->slug) }}"
                                    class="btn btn-primary">Browse</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div> --}}

            <div class="d-flex justify-content-center py-3">
                {{ $courses->links() }}
            </div>

        </div>

    </section>
@endsection
