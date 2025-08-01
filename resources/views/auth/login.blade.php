<x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('login') }}">
        @csrf

        <!-- Email Address -->
        <div>
            <div class="modal-header d-block text-center">
                <img class="logo mb-2" src="{{ asset('images/logo.jpeg') }}" alt="Logo" style="width: 80px; height: 80px;">
                <h5 class="modal-title w-100" id="loginModalLabel">Log In</h5>
            </div>

            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full form-control input-underline" type="email" name="email"
                :value="old('email')" required autofocus autocomplete="username" />

            <!-- تعديل هنا -->
            <x-input-error :messages="$errors->login->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />
            <x-text-input id="password" class="block mt-1 w-full form-control input-underline" type="password"
                name="password" required autocomplete="current-password" />

            <!-- تعديل هنا -->
            <x-input-error :messages="$errors->login->get('password')" class="mt-2" />
        </div>

        <!-- Remember Me -->
        <div class="block mt-4">
            <label for="remember_me" class="inline-flex items-center">
                <input id="remember_me" type="checkbox"
                    class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500" name="remember">
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
