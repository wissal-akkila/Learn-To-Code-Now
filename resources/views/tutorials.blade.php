@extends('layouts.app')

@section('title', 'Tutoorials')

@section('content')

<style> .card-img-top {
            width: 90%;
            height: 200%;
            margin: auto;
            object-fit: cover;
            display: block;
            zoom: 0.5;

        }

        .custom-indicators {
            position: absolute;
            bottom: -30px;


        }</style>
    <section class="container py-5 tutorial">
           <div class="text-center mb-5">
        <h1 class="h1 fw-bold text-info" >  <i class="bi bi-book-fill"></i> Our Courses</h1>
        <p class="text-light">Discover our most popular courses designed by professionals and improve your skills.</p>
    </div>
    <div id="demo" class="carousel slide" data-bs-ride="carousel">

        <!-- Indicators/dots -->
        <div class="carousel-indicators custom-indicators  ">
            <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active"></button>
            <button type="button" data-bs-target="#demo" data-bs-slide-to="1"></button>
            <button type="button" data-bs-target="#demo" data-bs-slide-to="2"></button>
            <button type="button" data-bs-target="#demo" data-bs-slide-to="3"></button>
        </div>

        <!-- The slideshow/carousel -->
        <div class="carousel-inner">
            <div class="carousel-item active">
                <div class="row">
                    <div class="col-md-4">
                        <div class="card border border-white shadow">
                            <div class="image-wrapper">
                                <img class="card-img-top" src="{{asset('images/html.png')}}" alt="Card image">
                                <div class="overlay text-center p-3">
                                    <h5 class="fw-bold">HTML </h5>
                                    <p>is the language that structures and displays content on web pages using tags.
                                    </p>
                                </div>
                            </div>
                            <div class="card-body text-center">
                                <a href="{{ route('lessons.show', 'html') }}"
                                    class="btn btn-outline-info btn-md fw-bold ">Get Start</a>


                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card border border-white shadow">
                            <div class="image-wrapper">
                                <img class="card-img-top" src="{{asset('images/css.png')}}" alt="Card image">
                                <div class="overlay  text-center p-3">
                                    <h5 class="fw-bold">CSS </h5>
                                    <p style="font-size: 14px;">Styles and formats the appearance of web pages
                                    </p>
                                </div>
                            </div>
                            <div class="card-body text-center">

                                <a href="{{ route('lessons.show', 'css') }}"
                                    class="btn btn-outline-info btn-md fw-bold ">Get Start</a>


                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card border border-white shadow">
                            <div class="image-wrapper">
                                <img class="card-img-top" src="{{asset('images/c.png')}}" alt="Card image">
                                <div class="overlay  text-center p-3">
                                    <h5 class="fw-bold">C#</h5>
                                    <p style="font-size: 14px;">A programming language used to build applications on
                                        Microsoft platforms
                                </div>
                            </div>
                            <div class="card-body text-center">

                                <a href="{{ route('lessons.show', 'c') }}"
                                    class="btn btn-outline-info btn-md fw-bold ">Get Start</a>


                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <div class="carousel-item">
                <div class="row">
                    <div class="col-md-4">
                        <div class="card border border-white shadow">
                            <div class="image-wrapper">
                                <img class="card-img-top" src="{{asset('images/php.jpg')}}" alt="Card image">
                                <div class="overlay  text-center p-3">
                                    <h5 class="fw-bold">PHP </h5>
                                    <p style="font-size: 14px;">A server-side language used to create dynamic web pages
                                    </p>
                                </div>
                            </div>
                            <div class="card-body text-center">

                                <a href="{{ route('lessons.show', 'php') }}"
                                    class="btn btn-outline-info btn-md fw-bold ">Get
                                    Start</a>


                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card border border-white shadow">
                            <div class="image-wrapper">
                                <img class="card-img-top" src="{{asset('images/bootstrap.png')}}" alt="Card image">
                                <div class="overlay  text-center p-3">
                                    <h5 class="fw-bold">Bootstrap </h5>
                                    <p style="font-size: 14px;">A CSS framework for building responsive and mobile-first
                                        websites quickly.

                                    </p>
                                </div>
                            </div>
                            <div class="card-body text-center">

                                <a href="{{ route('lessons.show', 'bootstrap') }}"
                                    class="btn btn-outline-info btn-md fw-bold ">Get
                                    Start</a>


                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card border border-white shadow">
                            <div class="image-wrapper">
                                <img class="card-img-top" src="{{asset('images/vue.png')}}" alt="Card image">
                                <div class="overlay  text-center p-3">
                                    <h5 class="fw-bold">Vue.js </h5>
                                    <p style="font-size: 14px;">A progressive JavaScript framework for building user
                                        interfaces and single-page apps
                                    </p>
                                </div>
                            </div>
                            <div class="card-body text-center">

                                <a href="{{ route('lessons.show', 'Vuejs') }}"
                                    class="btn btn-outline-info btn-md fw-bold ">Get
                                    Start</a>


                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <div class="carousel-item">
                <div class="row">
                    <div class="col-md-4">
                        <div class="card border border-white shadow">
                            <div class="image-wrapper">
                                <img class="card-img-top" src="{{asset('images/python.png')}}" alt="Card image">
                                <div class="overlay  text-center p-3">
                                    <h5 class="fw-bold">Python </h5>
                                    <p style="font-size: 14px;">A versatile programming language known for simplicity
                                        and
                                        readability.

                                    </p>
                                </div>
                            </div>
                            <div class="card-body text-center">

                                <a href="{{route('lessons.show', 'python')}} "
                                    class="btn btn-outline-info btn-md fw-bold ">Get Start</a>


                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card border border-white shadow">
                            <div class="image-wrapper">
                                <img class="card-img-top" src="{{asset('images/oop.jpg')}}" alt="Card image">
                                <div class="overlay  text-center p-3">
                                    <h5 class="fw-bold">oop </h5>
                                    <p style="font-size: 14px;">A programming approach organizing code into objects with
                                        properties and methods
                                    </p>
                                </div>
                            </div>
                            <div class="card-body text-center">

                                <a href="{{ route('lessons.show', 'oop') }}"
                                    class="btn btn-outline-info btn-md fw-bold ">Get Start</a>


                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card border border-white shadow">
                            <div class="image-wrapper">
                                <img class="card-img-top" src="{{asset('images/laravel.png')}}" alt="Card image">
                                <div class="overlay text-center ">
                                    <h5 class="fw-bold">Laravel </h5>
                                    <p style="font-size: 14px;">A PHP framework for building modern, secure web
                                        applications
                                        efficiently
                                    </p>
                                </div>
                            </div>
                            <div class="card-body text-center">

                                <a href="{{ route('lessons.show', 'laravel') }}"
                                    class="btn btn-outline-info btn-md fw-bold ">Get Start</a>


                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <div class="carousel-item">
                <div class="row">
                    <div class="col-md-4">
                        <div class="card border border-white shadow">
                            <div class="image-wrapper">
                                <img class="card-img-top" src="{{asset('images/jquery.png')}}" alt="Card image">
                                <div class="overlay text-center p-3">
                                    <h5 class="fw-bold">jQuery </h5>
                                    <p style="font-size: 14px;">A JavaScript library simplifying HTML document
                                        manipulation
                                        and event handling.

                                    </p>
                                </div>
                            </div>
                            <div class="card-body text-center">

                                <a href="{{ route('lessons.show', 'jQuery') }}"
                                    class="btn btn-outline-info btn-md fw-bold ">Get Start</a>

                            </div>
                        </div>
                    </div>


                </div>
            </div>

       
            <button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
                <span class="carousel-control-prev-icon"></span>
            </button>
            <button class="carousel-control-next " type="button" data-bs-target="#demo" data-bs-slide="next">
                <span class="carousel-control-next-icon"></span>
            </button>
        </div>
    </div>

        <div class="container d-flex justify-content-end mb-3">
            <a href="{{ route('add-new-lesson') }}" class="btn btn-outline-info">New Tutorials</a>
        </div>

    </section>
@endsection