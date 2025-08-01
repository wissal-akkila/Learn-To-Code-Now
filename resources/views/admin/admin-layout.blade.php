<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>{{ $title ?? 'Admin Panel' }}</title>
     <link rel="icon" href="{{ asset('favicon.png') }}" type="image/png">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <!-- روابط CSS -->
    <link rel="stylesheet" href="{{ asset('assets/fonts/css2.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/icons/fontawesome-free-6.7.2-web/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/icons/bootstrap-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/bootstrap/bootstrap.min.css') }}">

    <link rel="stylesheet" href="{{ asset('assets/style.css') }}">
    <!-- Scripts -->

</head>

<body>
    <div class="container">
        <div class="d-flex justify-content-between align-items-center pt-5">
            <!-- يسار: الشعار -->
            <a class="navbar-brand" href="#">
                <img src="{{ asset('images/logo.jpeg') }}" style="height: 40px;" alt="Logo" />
            </a>

            <!-- يمين: المستخدم والأيقونة -->
            <x-dropdown align="right" width="60">
                <x-slot name="trigger">
                    <button
                        class="inline-flex items-center px-4 py-2 border text-sm leading-4 font-medium rounded-lg text-white transition ease-in-out duration-150"
                        style="background-color:#0A192F; border-color:#0A192F; width: 180px; justify-content: space-between;"
                        onmouseover="this.style.backgroundColor='#0dcaf0'"
                        onmouseout="this.style.backgroundColor='#0A192F'">>

                        <span>{{ Auth::user()->name }}</span> <img width="30px" height="30px" class="rounded-circle"
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
                                {{ __('contacts list') }}
                            </x-dropdown-link>
                            <x-dropdown-link :href="route('admin.edits-panel')"
                                class="text-white hover:bg-gray-700 text-decoration-none">
                                {{ __('Edits Panel') }}
                            </x-dropdown-link>
                            <x-dropdown-link :href="route('subscribers')"
                                class="text-white hover:bg-gray-700 text-decoration-none">
                                {{ __('subscribers') }}
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
                        <x-dropdown-link :href="route('home')" class="text-white hover:bg-gray-700 text-decoration-none">
                            {{ __('Home') }}
                        </x-dropdown-link>

                        <x-dropdown-link :href="route('settings.show')" class="text-white hover:bg-gray-700 text-decoration-none">
                            {{ __('Settings') }}
                        </x-dropdown-link>
                        <x-dropdown-link :href="route('ai.page')" class="text-white hover:bg-gray-700 text-decoration-none">
                            {{ __('AI') }}
                        </x-dropdown-link>
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <x-dropdown-link :href="route('logout')" class="text-white hover:bg-gray-700 text-decoration-none"
                                onclick="event.preventDefault(); this.closest('form').submit();">
                                {{ __('Log Out') }}
                            </x-dropdown-link>
                        </form>
                    </div>
                </x-slot>
            </x-dropdown>
        </div>
    </div>



    @yield('content')



    <!-- Scripts -->
    <script src="{{ asset('assets/jquery/jquery-3.7.1.min.js') }}"></script>
    <script src="{{ asset('assets/swiper/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('assets/bootstrap/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/script.js') }}"></script>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const storedCourse = localStorage.getItem('completedCourse');
            if (storedCourse) {
                const list = document.getElementById('completedCoursesList');
                if (list) {
                    const li = document.createElement('li');
                    li.className = 'd-flex justify-content-between align-items-center pt-3';
                    li.innerHTML = `
                    <p>${storedCourse}</p>
                    <button class="btn-dashbord btn-sm btn btn-outline-info btn-outline-custom">Completed</button>
                `;
                    list.appendChild(li);
                }

                localStorage.removeItem('completedCourse');
            }
        });


        async function askAI() {
            const message = document.getElementById('userInput').value;

            if (!message) {
                alert('Please enter a message.');
                return;
            }


            document.getElementById('response').innerText = 'Loading...';

            try {
                const response = await fetch('/api/apiKey', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                        'Accept': 'application/json',

                    },
                    body: JSON.stringify({
                        message
                    }),
                });



                const data = await response.json();  

          
                document.querySelector('.response').innerHTML = data.error.message || 'No reply received';

            document.getElementById('response').innerHTML=''


            } catch (error) {
                document.querySelector('.response').innerHTML = 'Error: Could not get response from AI.';
                console.error(error);
            }

        }
    </script>
