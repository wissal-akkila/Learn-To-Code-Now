<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" contnt="width=device-width, initial-scale=1.0">
    <title>start</title>

  
    <link rel="icon" href="{{ asset('images/logo.jpeg') }}" type="image/x-icon">
    <link rel="stylesheet" href="{{ asset('assets/icons/fontawesome-free-6.7.2-web/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/icons/bootstrap-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/bootstrap/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/swiper/swiper-bundle.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/style.css') }}">
<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Playwrite+AU+QLD:wght@100..400&display=swap" rel="stylesheet">

    <style>
      
 html, body {
          overflow: hidden;
        }


      .section1 {
            background-image: url('{{asset('images/test.jpg')}}');
            background-size: cover;
            background-repeat: no-repeat;

            position: relative;
            height: 100vh;
            width: 100%;
            background-attachment: fixed;
            background-position: 0 -110%;
        }

       .child {
            position: absolute;
            width: 40%;
            height: 100vh;
            float: right;
            background-color: #0A192F;
            opacity: 0.9;
            display: none;
            padding: 20px;
        }

        @media (max-width: 991.98px) {
            .child {
                width: 100% !important;
                position: relative;
            }
        }
     
    </style>
</head>

<body>
    <section>
        <div class=" row g-0 ">

            <div class="section1 " id="section1">
                <div class="child   " id="child">
                    <div class=" d-flex flex-column justify-content-center h-100  ">
                        <div class="text-center">

                            <img  src="{{ asset('images/logo.jpeg') }}" alt="Logo" class="rounded-circle mb-4 imgs"
                                style="width: 130px; height: 130px; object-fit: cover;"data-aos="flip-up">
                                <div>

                                    <h1 class="typewriter  fw-bold  text-info ">Learn To Code Now</h1>       
                     <h4 class="text-light prgraph ">Start your programming journey</h4>
                                </div>

                
                                    
                     <a  href="{{route('home')}}" class="btn btn-outline-info btn-lg text-center fw-bold mt-5 button ">Start</a>


                        </div>


                    </div>
                </div>
            </div>

    </section>

><script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

    <script src="{{ asset('assets/jquery/jquery-3.7.1.min.js') }}"></script>
    <script src="{{ asset('assets/swiper/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('assets/bootstrap/bootstrap.bundle.min.js') }}"></script>

    <script src="{{ asset('assets/script.js') }}"></script>
    <script>
        $(".section1 ").mouseenter(function () {
            $("#child ").slideDown();
        });
        $(".section1 ").mouseenter(function () {
            $("#p ").show(500);
        });
    </script>
</body>

</html>