<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Learn To Code Now') }}</title>
    <link rel="icon" href="{{ asset('favicon.png') }}" type="image/png">
    @vite(['resources/css/app.css', 'resources/js/app.js'])



    <link rel="stylesheet" href="{{ asset('assets/fonts/css2.css') }}">

    <link rel="stylesheet" href="{{ asset('assets/icons/fontawesome-free-6.7.2-web/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/icons/bootstrap-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/bootstrap/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/swiper/swiper-bundle.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/style.css') }}">



    <!-- Scripts -->

</head>

<body class="font-sans antialiased">

    {{-- ✅ شرط إظهار الشريط العلوي فقط إذا كان المستخدم مسجلاً الدخول --}}

    <!-- Navigation -->
    @if (Auth::check())
        @include('layouts.navigation')
    @endif



    <nav class="navbar navbar-expand-lg gap-3 p-3 position-sticky">
        <div class="container-fluid d-flex justify-content-between align-items-center">

            <!-- Left: Logo -->
            <a class="navbar-brand" href="#">
                <img src="{{ asset('images/logo.jpeg') }}" alt="Logo" style="height: 40px;">
            </a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarMenu"
                aria-controls="navbarMenu" aria-expanded="false" aria-label="Toggle navigation">
                <span>

                    <i class="fa-duotone fa-solid fa-bars fa-flip-vertical fa-2xl" style="color: #0dcaf0;"></i></span>
            </button>

            <div class="collapse navbar-collapse justify-content-lg-center" id="navbarMenu">
                <!-- Center: Links -->
                <!-- <div class="d-flex justify-content-center flex-grow-1"> -->
                <div class="w-100 d-flex justify-content-lg-center">
                    <ul class="navbar-nav  flex-column flex-lg-row gap-2 gap-lg-4">
                        <li class="nav-item">
                            <a class="nav-link text-white  {{ request()->routeIs('home') ? 'active' : '' }} "
                                href="{{ route('home') }}">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white {{ request()->routeIs('tutorials') ? 'active' : '' }} "
                                href="{{ route('tutorials') }}">Tutorials</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white {{ request()->routeIs('contact-us') ? 'active' : '' }}"
                                href="{{ route('contact-us') }}">Contact us</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white {{ request()->routeIs('about-us') ? 'active' : '' }}"
                                href="{{ route('about-us') }}">About us</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white {{ request()->routeIs('coding-tips') ? 'active' : '' }}"
                                href="{{ route('coding-tips') }}">Coding Tips</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        @if (!Auth::check())
            <div class="d-lg-none w-100 d-flex justify-content-center gap-3 mt-3">
                <button class="btn btn-sm btn-outline-info px-4" data-bs-toggle="modal"
                    data-bs-target="#loginModal">Login</button>
                <button class="btn btn-sm btn-outline-info px-4" data-bs-toggle="modal"
                    data-bs-target="#signupModal">Sign
                    Up</button>
            </div>



            <!-- Right: Buttons -->
            <div class="d-none d-lg-flex gap-3 align-items-center ms-auto">
                <button class="btn btn-sm btn-outline-info px-4" s data-bs-toggle="modal"
                    data-bs-target="#loginModal">Login</button>
                <button class="btn btn-sm btn-outline-info px-4" data-bs-toggle="modal"
                    data-bs-target="#signupModal">SignUp</button>
            </div>
        @else
            <div class="hidden sm:flex items-center justify-end ms-auto">
                <x-dropdown align="right" width="60">
                    <x-slot name="trigger">
                        <button
                            class="inline-flex items-center px-4 py-2 border text-sm leading-4 font-medium rounded-lg text-white transition ease-in-out duration-150"
                            style="background-color:#0A192F; border-color:#0A192F; width: 180px; justify-content: space-between;"
                            onmouseover="this.style.backgroundColor='#0dcaf0'"
                            onmouseout="this.style.backgroundColor='#0A192F'">>

                            <span>{{ Auth::user()->name }}</span>

                            <img width="30px" height="30px" class="rounded-circle"
                                src="{{ auth()->user()->profile_image ? asset('storage/' . auth()->user()->profile_image) : asset('images/user.jpg') }}">
                        </button>
                    </x-slot>

                    <x-slot name="content">
                        <div style="background-color:#0A192F; border-radius: 8px;">

                            @if (Auth::user()->role == 'admin')
                                <x-dropdown-link :href="route('control-panel')"
                                    class="text-white hover:bg-gray-700 text-decoration-none">
                                    {{ __('Control Panel') }}
                                </x-dropdown-link>
                                <x-dropdown-link :href="route('contact-list')"
                                    class="text-white hover:bg-gray-700 text-decoration-none">
                                    {{ __('Contacts List') }}
                                    <x-dropdown-link :href="route('admin.edits-panel')"
                                        class="text-white hover:bg-gray-700 text-decoration-none">
                                        {{ __('edits panel') }}
                                    </x-dropdown-link>
                                </x-dropdown-link>
                            @else
                                <x-dropdown-link :href="route('dashboard')"
                                    class="text-white hover:bg-gray-700 text-decoration-none">
                                    {{ __('Dashboard') }}
                                </x-dropdown-link>
                                <x-dropdown-link :href="route('tutorials')"
                                    class="text-white hover:bg-gray-700 text-decoration-none">
                                    {{ __('Tutorials') }}
                                </x-dropdown-link>
                            @endif

                            <x-dropdown-link :href="route('settings.show')"
                                class="text-white hover:bg-gray-700 text-decoration-none">
                                {{ __('Settings') }}
                            </x-dropdown-link>
                            <x-dropdown-link :href="route('ai.page')"
                                class="text-white hover:bg-gray-700 text-decoration-none">
                                {{ __('AI') }}
                            </x-dropdown-link>

                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <x-dropdown-link :href="route('logout')"
                                    class="text-white hover:bg-gray-700 text-decoration-none"
                                    onclick="event.preventDefault(); this.closest('form').submit();">
                                    {{ __('Log Out') }}
                                </x-dropdown-link>
                            </form>
                        </div>
                    </x-slot>
                </x-dropdown>
            </div>

        @endif

        </div>
    </nav>


    <div class="modal fade" id="loginModal" tabindex="-1" aria-labelledby="loginModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">


                <div class="modal-body rounded rounded-4 "style="background-color:#0A192F;">
                    <x-guest-layout>
                        <!-- Session Status -->
                        <x-auth-session-status class="mb-4" :status="session('status')" />

                        <form method="POST" action="{{ route('login') }}">
                            @csrf
                            <div class="modal-header d-block text-center">
                                {{-- <img class="logo mb-2 text-center" src="{{ asset('images/logo.jpeg') }}" alt="Logo"
                                    style="width: 80px; height: 80px;"> --}}
                                <div class="d-flex justify-content-center">
                                    <img src="{{ asset('images/logo.jpeg') }}" alt="Logo" style="height: 40px;">
                                </div>
                                <h5 class="modal-title w-100" id="loginModalLabel">Log In</h5>
                                <button type="button"
                                    class="btn-close btn-close-white position-absolute rounded-circle top-0 start-0 m-3"
                                    data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <!-- Email Address -->
                            <div>
                                <x-input-label for="email" :value="__('Email')" />
                                <x-text-input id="email" class="text-light block mt-1 w-full" type="email"
                                    name="email" :value="old('email')" required autofocus autocomplete="username" />
                                <x-input-error :messages="$errors->get('email')" class="mt-2" />
                            </div>


                            <!-- Password -->
                            <div class="mt-4">
                                <x-input-label for="password" :value="__('Password')" />

                                <x-text-input id="password" class=" text-light block mt-1 w-full" type="password"
                                    name="password" required autocomplete="current-password" />

                                <x-input-error :messages="$errors->get('password')" class="mt-2" />
                            </div>

                            <!-- Remember Me -->
                            <div class="block mt-4">
                                <label for="remember_me" class="inline-flex items-center">
                                    <input id="remember_me" type="checkbox"
                                        class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500"
                                        name="remember">
                                    <span class="ms-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                                </label>
                            </div>

                            <div class="flex items-center justify-end mt-4">
                                @if (Route::has('password.request'))
                                    <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
                                        href="{{ route('password.request') }}">
                                        {{ __('Forgot your password?') }}
                                    </a>
                                @endif

                                <x-primary-button class="ms-3">
                                    {{ __('Log in') }}
                                </x-primary-button>
                            </div>
                        </form>
                    </x-guest-layout>

                </div>

            </div>
        </div>
    </div>

    <div class="modal fade" id="signupModal" tabindex="-1" aria-labelledby="signupModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">



                <div class="modal-body ">
                    <x-guest-layout>
                        <form method="POST" action="{{ route('register') }}">
                            @csrf

                            <!-- Name -->
                            <div class="modal-header d-block text-center">
                                <div class="d-flex justify-content-center">
                                    <img src="{{ asset('images/logo.jpeg') }}" alt="Logo" style="height: 40px;">
                                </div>
                                <h5 class="modal-title w-100" id="signupModalLabel">Sign Up</h5>
                                <button type="button"
                                    class="btn-close btn-close-white position-absolute rounded-circle top-0 start-0 m-3"
                                    data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div>
                                <x-input-label for="name" :value="__('Name')" />
                                <x-text-input id="name" class="text-light block mt-1 w-full" type="text"
                                    name="name" :value="old('name')" required autofocus autocomplete="name" />
                                <x-input-error :messages="$errors->get('name')" class="mt-2" />
                            </div>

                            <!-- Email Address -->
                            <div class="mt-4">
                                <x-input-label for="email" :value="__('Email')" />
                                <x-text-input id="email" class="text-light block mt-1 w-full" type="email"
                                    name="email" :value="old('email')" required autocomplete="username" />
                                <x-input-error :messages="$errors->get('email')" class="mt-2" />
                            </div>

                            <!-- Password -->
                            <div class="mt-4">
                                <x-input-label for="password" :value="__('Password')" />

                                <x-text-input id="password" class="text-light block mt-1 w-full" type="password"
                                    name="password" required autocomplete="new-password" />

                                <x-input-error :messages="$errors->get('password')" class="mt-2" />
                            </div>

                            <!-- Confirm Password -->
                            <div class="mt-4">
                                <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

                                <x-text-input id="password_confirmation" class=" text-light block mt-1 w-full"
                                    type="password" name="password_confirmation" required
                                    autocomplete="new-password" />

                                <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                            </div>

                            <div class="flex items-center justify-end mt-4">
                                <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
                                    href="{{ route('login') }}">
                                    {{ __('Already registered?') }}
                                </a>

                                <x-primary-button class="ms-4">
                                    {{ __('Register') }}
                                </x-primary-button>
                            </div>
                        </form>
                    </x-guest-layout>

                </div>

            </div>
        </div>
    </div>



    <!-- Page Content -->
    <main>
        @yield('content')
    </main>
    </div>


    <footer class="w-100 py-4  text-light">
        <div class="container px-4">

            <div class="d-flex flex-row flex-wrap justify-content-center align-items-center gap-4">

                <!-- الشعار -->
                <div class="d-flex align-items-center">
                    <img src="{{ asset('images/logo.jpeg') }}" alt="Logo" style="max-height: 60px;">
                </div>

                <!-- روابط التنقل -->
                <div>
                    <ul class="list-inline mb-0 d-flex flex-wrap justify-content-center gap-3">
                        <li class="list-inline-item"><a href="{{ route('home') }}"
                                class="text-decoration-none text-light {{ request()->routeIs('home') ? 'active' : '' }}">Home</a>
                        </li>
                        <li class="list-inline-item"><a href="{{ route('tutorials') }}"
                                class="text-decoration-none text-light {{ request()->routeIs('tutorials') ? 'active' : '' }}">Tutorials</a>
                        </li>
                        <li class="list-inline-item"><a href="{{ route('contact-us') }}"
                                class="text-decoration-none text-light {{ request()->routeIs('contactt-us') ? 'active' : '' }}">Contact
                                Us</a>
                        </li>
                        <li class="list-inline-item"><a href="{{ route('about-us') }}"
                                class="text-decoration-none text-light
                             {{ request()->routeIs('about-us') ? 'active' : '' }}">About
                                Us</a>
                        </li>
                        <li class="list-inline-item"><a href="{{ route('coding-tips') }}"
                                class="text-decoration-none text-light">Coding
                                Tips</a>
                        </li>
                    </ul>
                </div>

            </div>
            @if (session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif




            <form action="{{ route('subscribe') }}" method="POST">
                @csrf
                <div class="d-flex flex-row flex-wrap justify-content-center gap-2 mt-4">
                    <input class="form-control btn-outline-info" style="max-width: 300px;" type="text"
                        name="email" placeholder="Enter your email" />
                    <button type="" class="btn btn-outline-info btn-sm">Subscribe</button>
                </div>
            </form>

            <!-- الاشتراك -->
            {{-- <form action="{{ route('subscribe') }}" method="POST">
    @csrf
    <input type="email" name="email" placeholder="Enter your email" required class="form-control mb-2">
    <button type="submit" class="btn btn-primary">Subscribe</button>
</form> --}}

            <hr style="border-color: white; margin-top: 2rem; margin-bottom: 2rem;" />

            <!-- وسائل التواصل + الحقوق + سياسة الخصوصية -->
            <div class="d-flex flex-row flex-wrap justify-content-center align-items-center gap-4">

                <div class="d-flex gap-3 fs-4 justify-content-center">
                    <a href="https://www.facebook.com/2025learntocodenow" class="text-light"><i
                            class="fab fa-facebook"></i></a>
                    <a href="#" class="text-light"><i class="fab fa-square-whatsapp"></i></a>
                    <a href="https://www.instagram.com/learntocode225/" class="text-light"><i
                            class="fa-brands fa-square-instagram"></i></a>
                    <a href="#" class="text-light"><i class="fab fa-linkedin"></i></a>
                </div>

                <div class="text-light small text-center">
                    @2025 Learn To Coder Now. All rights reserved.
                </div>

                <div>
                    <a href="{{ route('privacy.policy') }}" class="text-light text-decoration-none me-3">Privacy
                        Policy</a>
                    <a href="{{ route('terms.service') }}" class="text-light text-decoration-none">Terms of
                        Service</a>
                </div>

            </div>

        </div>
    </footer>









    <script src="{{ asset('assets/jquery/jquery-3.7.1.min.js') }}"></script>
    <script src="{{ asset('assets/swiper/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('assets/bootstrap/bootstrap.bundle.min.js') }}"></script>

    <script src="{{ asset('assets/script.js') }}"></script>
    <script>
        var swiper = new Swiper(".tipsSwiper", {
            effect: "cards",
            grabCursor: true,
        });
    </script>


</body>

</html>


@if ($errors->login->any())
        <script>
            document.addEventListener("DOMContentLoaded", function() {
                var loginModal = new bootstrap.Modal(document.getElementById('loginModal'));
                loginModal.show();
            });
        </script>
    @endif
@if ($errors->signup->any())

        <script>
            document.addEventListener("DOMContentLoaded", function() {
                var signupModal = new bootstrap.Modal(document.getElementById('signupModal'));
                signupModal.show();
            });
        </script>
    @endif
