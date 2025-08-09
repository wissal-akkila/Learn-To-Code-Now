@extends('layouts.app')
@section('title', 'Success Stories ')

@section('content')
<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <style>
        .nav-pills .nav-link {
            background-color: transparent !important;
            padding: 0;
            border: none;
        }

        .nav-pills .nav-link.active,
        .nav-pills .nav-link:focus,
        .nav-pills .nav-link:hover {
            background-color: transparent !important;
            outline: none;
            box-shadow: none;
        }

        .nav-pills .nav-link img {
            width: 120px;
            height: 120px;
            object-fit: cover;
            border-radius: 10px;
            transition: transform 0.3s;
        }


        .nav-pills .nav-link.active img {
            transform: scale(1.1);
            border: 2px solid #0dcaf0;
        }

        .nav-pills .nav-link:hover img {
            transform: scale(1.05);
        }

        .tab-img {

            object-fit: cover;

        }

        .hover-effect {
            transition: transform 0.3s ease-in-out, box-shadow 0.3s ease-in-out;
        }

        .hover-effect:hover {
            transform: scale(1.05);
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.3);
        }
    </style>




    <div class="container text-center">
        <h1 class=" typewriter text-center text-info fw-bold  mt-3 ">Success Stories</h1>
        <p class="text-center prgraph">The four most prominent and brilliant names in the world of programming ✨✨</p>

        <div>
            <div class="container mt-4 ">
                <div class="row">

                    <!-- التابات الجانبية -->
                    <div class="col-md-2">
                        <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                            <button class="nav-link active mb-3" id="tab1-tab" data-bs-toggle="pill"
                                data-bs-target="#tab1"data-aos="zoom-in-right" data-aos-delay="0" data-aos-duration="1000"
                                type="button" role="tab">
                                <img src="{{ asset('images/Linus Torvalds.jpeg') }}" alt="Tab 1">
                            </button>
                            <button class="nav-link mb-3" id="tab2-tab" data-bs-toggle="pill" data-bs-target="#tab2"
                                type="button" role="tab"data-aos="zoom-in-right" data-aos-delay="200"
                                data-aos-duration="1000">
                                <img src="{{ asset('images/Guido van Rossum.png') }}" alt="Tab 2">
                            </button>
                            <button class="nav-link mb-3" id="tab3-tab" data-bs-toggle="pill" data-bs-target="#tab3"
                                type="button" role="tab"data-aos="zoom-in-right" data-aos-delay="400"
                                data-aos-duration="1000">
                                <img src="{{ asset('images/Brian Kernighan.jpeg') }}" alt="Tab 3">
                            </button>
                            <button class="nav-link mb-3" id="tab4-tab" data-bs-toggle="pill" data-bs-target="#tab4"
                                type="button" role="tab"data-aos="zoom-in-right" data-aos-delay="600"
                                data-aos-duration="1000">
                                <img src="{{ asset('images/Margaret Hamilton.jpg') }}" alt="Tab 4">
                            </button>
                        </div>
                    </div>

                    <!-- محتوى التابات -->
                    <div class="col-md-10">
                        <div class="tab-content" id="v-pills-tabContent">
                            <div class="tab-pane fade show active" id="tab1" role="tabpanel">


                                <div class="container  border border-info rounded-4 p-4">
                                    <div class=" justify-content-center align-items-center gap-3 text-center">
                                        <img src="{{ asset('images/Linus Torvalds.jpeg') }}" class=" rounded-3 hover-effect"
                                            alt="Cinque Terre"style="width: 150px; height: 150px; object-fit: cover;">
                                        <h1 class="mb-0 fs-4 text-center mt-3 fw-bold text-info animated-text">Linus
                                            Torvalds</h1>
                                    </div>
                                    <div class="mt-5">
                                        <h5 class="fw-bold text-info text-start ">Who is he?</h5>
                                        <br>
                                        <p class="text-start mt-2"> A Finnish software engineer, best known as the creator
                                            of the Linux operating system and
                                            the Git version control system.</p>

                                        <br>
                                        <h5 class="fw-bold text-info text-start ">Success Story:</h5>
                                        <br>
                                        <p class="text-start mt-2">
                                            Linus started the Linux project in 1991 as an open-source, free alternative to
                                            other
                                            operating systems. Today, Linux powers the majority of web servers, cloud
                                            systems, and
                                            smart devices.
                                            <a href="https://en.wikipedia.org/wiki/Linus_Torvalds" target="_blank"
                                                class="text-info">
                                                Read More on Wikipedia
                                            </a>
                                        </p>
                                    </div>
                                </div>







                            </div>
                            <div class="tab-pane fade" id="tab2" role="tabpanel">
                                <div class="container  border border-info rounded-4 p-4">
                                    <div class=" justify-content-center align-items-center gap-3 text-center">
                                        <img src="{{ asset('images/Guido van Rossum.png') }}"
                                            class=" rounded-3 hover-effect"
                                            alt="Cinque Terre"style="width: 150px; height: 150px; object-fit: cover;">
                                        <h1 class="mb-0 fs-5 text-center mt-3 fw-bold text-info animated-text">Guido van
                                            Rossum </h1>
                                    </div>
                                    <div class="mt-5">
                                        <h5 class="fw-bold text-info text-start ">Who is he?</h5>
                                        <br>
                                        <p class=" text-start mt-2"data-aos="zoom-in"> The creator of the Python programming language.
                                            </pclass=>
                                            The creator of the Python programming language.
                                            <br>
                                        <h5 class="fw-bold text-info text-start ">Success Story:</h5>
                                        <br>
                                        <p class=" text-start mt-2"data-aos="zoom-in"> He began working on Python in the late 1980s, and the
                                            first version was released in
                                            1991. Python has since become one of the most widely used programming languages,
                                            especially in AI, web development, and data analysis.
                                            <a href="https://en.wikipedia.org/wiki/Guido_van_Rossum" target="_blank"
                                                class="text-info">
                                                Read More on Wikipedia
                                            </a>
                                        </p>
                                    </div>

                                </div>
                            </div>
                            <div class="tab-pane fade" id="tab3" role="tabpanel">
                                <div class="container  border border-info rounded-4 p-4">
                                    <div class=" justify-content-center align-items-center gap-3 text-center">
                                        <img src="{{ asset('images/Brian Kernighan.jpeg') }}"
                                            class=" rounded-3 hover-effect"
                                            alt="Cinque Terre"style="width: 150px; height: 150px; object-fit: cover;">
                                        <h1 class="mb-0 fs-5 text-center mt-3 fw-bold text-info animated-text">Brian
                                            Kernighan</h1>
                                    </div>
                                    <div class="mt-5">
                                        <h5 class="fw-bold text-info text-start ">Who is he?</h5>
                                        <br>
                                        <p class="text-start mt-2"data-aos="zoom-in">
                                            One of the developers of the C programming language and co-author of the famous
                                            book
                                            "The C Programming Language".</p>>
                                        <br>
                                        <h5 class="fw-bold text-info text-start ">Success Story:</h5>
                                        <br>
                                        <p class="text-start mt-2"data-aos="zoom-in">
                                            He contributed to the development of both the C language and the Unix operating
                                            system
                                            at Bell Labs, greatly influencing modern software and system development.
                                            <a href="https://en.wikipedia.org/wiki/Brian_Kernighan" target="_blank"
                                                class="text-info">
                                                Read More on Wikipedia
                                            </a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="tab4" role="tabpanel">
                                <div class="container  border border-info rounded-4 p-4">
                                    <div class=" justify-content-center align-items-center gap-3 text-center">
                                        <img src="{{ asset('images/Margaret Hamilton.jpg') }}"
                                            class=" rounded-3 hover-effect"
                                            alt="Cinque Terre"style="width: 150px; height: 150px; object-fit: cover;">
                                        <h1 class="mb-0 fs-5 text-center mt-3 fw-bold text-info animated-text">Margaret
                                            Hamilton</h1>
                                    </div>
                                    <div class="mt-5">
                                        <h5 class="fw-bold text-info text-start ">Who is he?</h5>
                                        <br>
                                        <p class="text-start mt-2"data-aos="zoom-in">
                                            An American computer scientist who led the software development team for NASA's
                                            Apollo
                                            space missions.</p>
                                        <br>
                                   
                                       
                                            <h5 class="fw-bold text-info text-start ">Success Story:</h5>
                                       
                                            <br>
                                        <p class="text-start mt-2" data-aos="zoom-in">
                                            She developed the essential software that enabled Apollo 11 to successfully land
                                            on
                                            the moon. She is considered a pioneer of modern software engineering.
                                            <a href="https://en.wikipedia.org/wiki/Margaret_Hamilton_(software_engineer)"
                                                target="_blank" class="text-info">
                                                Read More on Wikipedia
                                            </a>
                                        </p>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>





    @endsection
