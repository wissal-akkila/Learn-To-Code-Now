@extends('layouts.app')
@section('title', 'About Us')

@section('content')
<style>
    .modal {
    margin-top: 80px; 
}

.modal-dialog {
    margin-top: 5rem; 
}
</style>
    <div class="containerr d-flex flex-column justify-content-center align-items-center text-center">
        <h1 class=" typewriter text-info" >About Us</h1>
        <p class=" prgraph mt-5">
            Welcome to our learning hub, where programming becomes exciting,
            <br> 
            <br>We are a dedicated team committed to providing high-quality
            <br> educational content, helping you build and refine your coding skills—whether
            <br>
        </p>
    </div>

    <br> <br>
    <div class="container pt-5">
       {{-- //طريقة عرض الشاشات الكبيرة --}}
        <div class="row justify-content-center d-none d-lg-flex">
            <div class="col-md-3">
                <div class="card-hover">
                    <img style="width: 299px; height: 350px;" class="img-fluid card-img-top "data-aos="flip-left"
                        src="{{asset('images/Adapting SEO for Google AI Overview.jpg')}}" alt="Card image">
                    <div class="card-body" style="background-color: #0A192F;">
                        <h4 class="card-title text-center pt-3 text-info"data-aos="fade-down">Our Vision</h4>
                        <p class="card-text text-center text-light pt-3"data-aos="fade-down">
                            Programming isn't just about writing code—it’s about creativity and problem-solving...
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-md-3">
                <div class="card-hover ">
                    <img style="width: 299px; height: 350px;" class="img-fluid card-img-top "data-aos="flip-left"
                        src="{{asset('images/MiniCPM3-4B_ The Open-Source AI Model Taking Scalability to New Heights.jpg')}}"
                        alt="Card image">
                    <div class="card-body" style="background-color: #0A192F;">
                        <h4 class="card-title text-center pt-3 text-info"data-aos="fade-down">What Makes Us Unique?</h4>
                        <p class="card-text text-center text-light pt-3"data-aos="fade-down">
                            Tailored Content for all skill levels, from fundamentals to advanced technologies...
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-md-3">
                <div class="card-hover">
                    <img style="width: 299px; height: 350px;" class="img-fluid card-img-top"data-aos="flip-left"
                        src="{{asset('images/JSON Guide_ Web Dev Essentials.jpg')}}" alt="Card image">
                    <div class="card-body" style="background-color: #0A192F;">
                        <h4 class="card-title text-center pt-3 text-info"data-aos="fade-down">What We Offer</h4>
                        <p class="card-text text-center text-light pt-3"data-aos="fade-down">
                            Comprehensive Courses covering languages like Python, JavaScript...
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <!--  نسخة الكاروسيل: تظهر فقط في الشاشات الصغيرة والمتوسطة -->
        <div id="infoCarousel" class="carousel slide d-block d-lg-none pt-4" data-bs-ride="carousel">
            <div class="carousel-inner text-center">

                <!-- بطاقة 1 -->
                <div class="carousel-item active">
                    <div class="card-hover mx-auto" style="width: 90%;">
                        <img style="width: 100%; height: 350px;" class="img-fluid card-img-top"
                            src="{{asset('images/Adapting SEO for Google AI Overview.jpg')}}" alt="Card image">
                        <div class="card-body" style="background-color: #0A192F;">
                            <h4 class="card-title text-center pt-3 text-info" data-aos="fade-down">Our Vision</h4>
                            <p class="card-text text-center text-light pt-3" data-aos="fade-down">
                                Programming isn't just about writing code—it’s about creativity and problem-solving...
                            </p>
                        </div>
                    </div>
                </div>

                <!-- بطاقة 2 -->
                <div class="carousel-item">
                    <div class="card-hover mx-auto" style="width: 90%;">
                        <img style="width: 100%; height: 350px;" class="img-fluid card-img-top"
                            src="{{asset('images/MiniCPM3-4B_ The Open-Source AI Model Taking Scalability to New Heights.jpg')}}"
                            alt="Card image">
                        <div class="card-body" style="background-color: #0A192F;">
                            <h4 class="card-title text-center pt-3 text-info" data-aos="fade-down">What Makes Us Unique?</h4>
                            <p class="card-text text-center text-light pt-3" data-aos="fade-down">
                                Tailored Content for all skill levels, from fundamentals to advanced technologies...
                            </p>
                        </div>
                    </div>
                </div>

                <!-- بطاقة 3 -->
                <div class="carousel-item">
                    <div class="card-hover mx-auto" style="width: 90%;">
                        <img style="width: 100%; height: 350px;" class="img-fluid card-img-top"
                            src="{{asset('images/JSON Guide_ Web Dev Essentials.jpg')}}" alt="Card image">
                        <div class="card-body" style="background-color: #0A192F;">
                            <h4 class="card-title text-center pt-3 text-info"  data-aos="fade-down">What We Offer</h4>
                            <p class="card-text text-center text-light pt-3" data-aos="fade-down">
                                Comprehensive Courses covering languages like Python, JavaScript...
                            </p>
                        </div>
                    </div>
                </div>

            </div>

            <!-- أزرار التنقل -->
            <button class="carousel-control-prev" type="button" data-bs-target="#infoCarousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon"></span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#infoCarousel" data-bs-slide="next">
                <span class="carousel-control-next-icon"></span>
            </button>
        </div>
    </div>

    </div>








    <div class="containerRR mt-5 text-center">
        <div class="container">
            <h1 class="fw-bold text-info typewriter">Learn To Code Now</h1>
            <p class=" text-center " 
     data-aos="zoom-in-up">
                Learn To Code Now is more than just a learning platform—it's
                a gateway to a new skill set and a future in tech.<br>
                Our mission is to make programming education accessible,
                practical, and enjoyable for learners across all levels.<br>
                This platform was created as a graduation project by a team of passionate developers from Gaza,<br>
                aiming to bring real value to beginners who want to break into the tech world. With the help of our <br>
                instructors, curated content, and hands-on approach, we believe anyone can learn to code.
            </p>
        </div>
    </div>
    <div class="container pt-5">
        <!-- الشبكة الأصلية - تظهر فقط على الشاشات الكبيرة -->
        <div class="row d-none d-lg-flex justify-content-center">
            <div class="col-4">
                <img class="card-hover image-box rounded-3" style="width: 300px;height: 220px;" data-aos="flip-left" src="{{asset('images/تنزيل (27).jpg')}}"
                    alt="صورة 1">
            </div>
            <div class="col-4">
                <img class="card-hover image-box rounded-3" style="width: 300px;height: 220px;"
                   data-aos="flip-left" src="{{asset('images/https___medium_com_@thearticle224_idea-buddy-your-ultimate-tool-for-brainstorming-and-creative-probl.jpg')}}"
                    alt="صورة 2">
            </div>
            <div class="col-4">
                <img class="card-hover image-box rounded-3" style="width: 300px;height: 220px;"
                    data-aos="flip-left" src="{{asset('images/LE DÉVELOPPEMENT FRONT-SCRATCH.jpg')}}" alt="صورة 3">
            </div>
        </div>

        <!--  كـاروسيل Swiper - يظهر فقط في الشاشات المتوسطة والصغيرة -->
        <div class="swiper mySwiper d-block d-lg-none mt-4" style="width: 100%; max-width: 300px; height: 300px;">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <img src="{{asset('images/تنزيل (27).jpg')}}" />
                </div>
                <div class="swiper-slide">
                    <img
                        src="{{asset('images/https___medium_com_@thearticle224_idea-buddy-your-ultimate-tool-for-brainstorming-and-creative-probl.jpg')}}" />
                </div>
                <div class="swiper-slide">
                    <img src="{{asset('images/LE DÉVELOPPEMENT FRONT-SCRATCH.jpg')}}" />
                </div>
            </div>
            <div class="swiper-pagination"></div>
        </div>
    </div>

@endsection