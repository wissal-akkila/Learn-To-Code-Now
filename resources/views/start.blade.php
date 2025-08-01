<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" contnt="width=device-width, initial-scale=1.0">
    <title>start</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./assets/fonts/css2.css">
    <link rel="stylesheet" href="./assets/icons/fontawesome-free-6.7.2-web/css/all.min.css">
    <link rel="stylesheet" href="./assets/icons/bootstrap-icons.css">
    <link rel="stylesheet" href="./assets/bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="./assets/style.css">
    <style>
        body {
            background-color: #0A192F;
            font-family: 'Poppins', sans-serif;
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

                            <img src="{{ asset('images/logo.jpeg') }}" alt="Logo" class="rounded-circle mb-4"
                                style="width: 130px; height: 130px; object-fit: cover;">
                            <h1 class="pt-3 mt-4 fw-bold" style="color:#0dcaf0;">Learn To Code Now</h1>
                            <h4 class="text-light">Start your programming journey</h4>
                
                                    
                     <a  href="{{route('home')}}" class="btn btn-outline-info btn-lg text-center fw-bold mt-5 ">Start</a>


                        </div>


                    </div>
                </div>
            </div>

    </section>

>
    <script src="./assets/jquery/jquery-3.7.1.min.js"></script>
    <script src="./assets/swiper/swiper-bundle.min.js"></script>
    <script src="./assets/bootstrap/bootstrap.bundle.min.js"></script>
    <script src="./assets/script.js"></script>
    <script src="./assets/bootstrap-5.3.6-dist/js/bootstrap.bundle.js"></script>
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