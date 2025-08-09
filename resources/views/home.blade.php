@extends('layouts.app')
@section('title', 'Home ')

@section('content')

    {{-- الشاشات الصغيرة والمتوسطة --}}
    <div class="col-md-12 d-block d-lg-none position-relative p-0"style="z-index: 1;">
        <img src="{{ asset('images/home.jpeg') }}" class="img-fluid w-100" alt="">


        <div class="position-absolute top-0 start-0 w-100 h-100"
            style="background: linear-gradient(to bottom, rgba(0,0,64,0.9), rgba(0,0,64,0.6));">
            <div class="h-100 d-flex flex-column justify-content-center align-items-center text-center text-light p-3">
                <h1 class=" fw-bold text-info typewriter ">Learn To Code Now</h1>
                <p class="h5 fw-bold animated-text">Code your future, today</p>
                <p>Welcome to your first step into the world of coding.
                    At Learn To Code Now, we offer an interactive and structured.</p>
                <div class="d-flex gap-2 pt-2">
                    <button class="btn btn-outline-info px-3 btn-lg button"> <i class="bi bi-play-fill"></i>Get
                        Started</button>

                </div>
            </div>
        </div>

    </div>
    {{-- -------------------------------------------------------------------- --}}
    <div class="  d-none d-lg-flex ">
        <div class="col-lg-6 mb-4 mb-md-0  g-0">
            <img src="{{ asset('images/home.jpeg') }}" alt="" class="blurred-img img-fluid rounded">
        </div>

        <!-- Right: Text -->

        <div class="col-lg-6 hero-text d-flex flex-column justify-content-center mt-5 text-center">
            <div class="container text-center ">

                <h1 class="typewriter  fw-bold  text-info ">Learn To Code Now</h1>
                <p class=" animated-text   text-center mt-3 ">Code your future, today</p>
                <p class="text-light  text-center mt-3 prgraph"> Welcome to your first step into the world of coding.
                    At Learn To Code Now, we offer an interactive and structured.</p>
                <p class=" prgraph text-light text-center mt-3">aspiring developer can learn to program with ease. Whether
                    you're just starting or aiming to
                    master a new skill, our platform is built to guide you from zero to hero</p>
                <a href="{{ route('tutorials') }}" class="button btn btn-outline-info btn-lg text-center "> <i
                        class="bi bi-play-fill"></i>Get Started</a>
            </div>
        </div>
    </div>
    </div>

    {{-- -------------------------------------------------------------- --}}
    <div class="shadow-divider"></div>

    <div class="container mt-5">
      <div class="row mt-5 d-none d-lg-flex">
    <div class="col-lg-6 mt-5">
        <div class="row">
            <div class="col-6">
                <div class="d-flex mt-md-5 align-items-center gap-2 mb-3" data-aos="zoom-out">
                    <div><i class="bi bi-journal-richtext text-info fa-2x" aria-hidden="true"></i></div>
                    <div>
                        <h5 class="m-0 text-info fw-bold">Diverse Courses</h5>
                    </div>
                </div>
                <p class="text-white" data-aos="zoom-out-up">
                    We offer a wide range of programming courses tailored to all levels
                </p>
            </div>
            <div class="col-6">
                <div class="d-flex mt-md-5 align-items-center gap-2 mb-3" data-aos="zoom-out">
                    <div><i class="bi bi-book fa-2x text-info" aria-hidden="true"></i></div>
                    <div>
                        <h5 class="m-0 text-info fw-bold">Detailed Lessons</h5>
                    </div>
                </div>
                <p class="text-white" data-aos="zoom-out-up">
                    Each topic is clearly explained with step-by-step guidance
                </p>
            </div>
        </div>
        <div class="row">
            <div class="col-6">
                <div class="d-flex mt-md-5 align-items-center gap-2 mb-3" data-aos="zoom-out">
                    <div><i class="bi bi-code-slash fa-2x text-info" aria-hidden="true"></i></div>
                    <div>
                        <h5 class="m-0 text-info fw-bold">Code Examples</h5>
                    </div>
                </div>
                <p class="text-white" data-aos="zoom-out-up">
                    Every concept comes with real-world coding examples for better understanding
                </p>
            </div>
            <div class="col-6">
                <div class="d-flex mt-md-5 align-items-center gap-2 mb-3" data-aos="zoom-out">
                    <div><i class="bi bi-clipboard-check fa-2x text-info" aria-hidden="true"></i></div>
                    <div>
                        <h5 class="m-0 text-info fw-bold">Practice Quizzes</h5>
                    </div>
                </div>
                <p class="text-white" data-aos="zoom-out-up">
                    Test your knowledge with interactive quizzes after each section
                </p>
            </div>
        </div>
    </div>
    <div class="col-lg-6">
        <img src="{{ asset('images/home image 1 (4).jpeg') }}" data-aos="fade-left" data-aos-anchor="#example-anchor"
            data-aos-offset="500" data-aos-duration="500" alt="">
    </div>
</div>

        {{-- -------------------------------------------- --}}
        {{-- قائمة تظهرللشاشات المتوسطة والصغيرة --}}
        <div class="d-block d-lg-none text-white mt-4">
            <ul class="list-unstyled">

                <li data-aos="zoom-in-right" data-aos-delay="0" data-aos-duration="1000">
                    <div class="d-flex mt-md-5 align-items-sm-center gap-2 mb-3 ">
                        <div>
                            <i class="bi bi-journal-richtext text-info fa-lg" aria-hidden="true"></i>
                        </div>
                          <div>
                           
                            <h5 class="h m-0 text-info fw-bold"> Diverse
                                Courses</h5>
                        </div>

                    </div>
                    <p class="text-white">We offer a wide range of programming courses tailored to all levels</p>
                </li>


                <li data-aos="zoom-in-right" data-aos-delay="200" data-aos-duration="1000">
                    <div class="d-flex mt-md-5 align-items-sm-center gap-2 mb-3 ">
                        <div>
                            <i class=" bi bi-book fa-lg text-info " aria-hidden=" true"></i>
                        </div>
                        <div>
                            <h5 class="h m-0 text-info fw-bold"> Detailed Lessons</h5>
                        </div>

                    </div>
                    <p class="text-white">Each topic is clearly explained with step-by-step guidance</p>
                </li>
                <li data-aos="zoom-in-right" data-aos-delay="400" data-aos-duration="1000">
                    <div class="d-flex mt-md-5 align-items-sm-center gap-2 mb-3 ">
                        <div>
                            <i class="  bi bi-code-slash fa-lg text-info " aria-hidden="true"></i>
                        </div>
                        <div>
                            <h5 class=" m-0 text-info fw-bold">Code Examples</h5>
                        </div>

                    </div>
                    <p class=" text-white">
                        Every concept comes with real-world coding examples for better understanding
                    </p>
                </li>
                <li data-aos="zoom-in-right" data-aos-delay="600" data-aos-duration="1000">
                    <div class="d-flex mt-md-5 align-items-sm-center gap-2 mb-3">
                        <div>
                            <i class="bi bi-clipboard-check fa-lg text-info " aria-hidden="true"></i>
                        </div>
                        <div>
                            <h5 class="h m-0 text-info fw-bold">Practice Quizzes</h5>
                        </div>

                    </div>
                    <p class=" text-white">
                        Test your knowledge with interactive quizzes after each section
                    </p>
                </li>
            </ul>
        </div>
    </div>




    <div class="container pt-5 gap-3">
        <h1 class="display-6 text-center text-light pt-3 fw-bold"data-aos="zoom-in-up">learn at your own pace from anywhere
        </h1>

        <div class="swiper mySwiper pt-5"data-aos="flip-down">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="card-hover text-center p-3 border border-secondary rounded">
                        <img src="{{ asset('/images/home4.jpeg') }}"
                            class="img-fluid rounded-circle d-block mx-auto pt-3">
                        <h6 class="text-light text-center pt-3 fw-bold">Flexible Learning</h6>
                        <p class="text-secondary fw-bold text-center pt-3">Learn at your on pace from</p>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="card-hover text-center p-3 border border-secondary rounded">
                        <img src="{{ asset('/images/home5.jpeg') }}"
                            class="img-fluid rounded-circle d-block mx-auto pt-3">
                        <h6 class="text-light text-center pt-3 fw-bold">Real Projects</h6>
                        <p class="text-secondary fw-bold text-center pt-3 ">Build teal apps and gain experience</p>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="card-hover text-center p-3 border border-secondary rounded">
                        <img src="{{ asset('/images/home6.jpeg') }}" class="img-fluid rounded-circle mx-auto">
                        <h6 class="text-light fw-bold mt-3">Expert Support</h6>
                        <p class="text-secondary fw-bold">We're here to help every step of the way</p>
                    </div>
                </div>

            </div>
            <div class="swiper-pagination"></div>
        </div>
    </div>
@endsection
