<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])



    <link rel="stylesheet" href="{{ asset('assets/fonts/css2.css') }}">

    <link rel="stylesheet" href="{{ asset('assets/icons/fontawesome-free-6.7.2-web/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/icons/bootstrap-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/bootstrap/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/swiper/swiper-bundle.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/style.css') }}">


    </head>
    <body class="font-sans text-gray-900 antialiased">
        <div class="  flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-gray-100 rounded-3"
        style="background-color:#0A192F;">
            <div>
                <a href="/">
                    <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
                </a>
            </div>

            <div class=" rounded-2 w-full sm:max-w-md mt-6 px-6 py-4 bg-white shadow-md overflow-hidden sm:rounded-lg ">
                {{ $slot }}
            </div>
        </div>
    </body>
</html>
