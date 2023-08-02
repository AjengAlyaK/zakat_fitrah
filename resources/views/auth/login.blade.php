<x-guest-layout>
    <x-authentication-card>
        <x-slot name="logo">
            <h1 style="font-size: 27px;">Zakat Fitrah</h1>
        </x-slot>

        <x-validation-errors class="mb-4" />

        @if (session('status'))
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ session('status') }}
            </div>
        @endif

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <div>
                <x-label for="email" value="{{ __('Email') }}" />
                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
            </div>

            <div class="mt-4">
                <x-label for="password" value="{{ __('Password') }}" />
                <x-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="current-password" />
            </div>

            <div class="block mt-4">
                <label for="remember_me" class="flex items-center">
                    <x-checkbox id="remember_me" name="remember" />
                    <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                </label>
            </div>

            <div class="flex items-center justify-end mt-4">
                @if (Route::has('password.request'))
                    <a style="text-decoration:none" class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
                    </a>
                @endif

                {{-- <x-button class="ml-4 w-full justify-center">
                    {{ __('Log in') }}
                </x-button> --}}
            </div>
            <div class="w-full max-w-md flex flex-col">
                <x-button id="myButton" onclick="changeColor()" class="mt-3 w-full justify-center" style="background-color: #2a3f54; color : white;border: 1px solid #2a3f54" onmouseover="this.style.backgroundColor='#ffffff'; this.style.color='#2a3f54';" onmouseout="this.style.backgroundColor='#2a3f54'; this.style.color='#ffffff';">
                    {{ __('Log in') }}
                </x-button>
            </div>
            <div class="w-full max-w-md flex flex-col">
                <x-button class="mt-3 w-full justify-center" style="background-color: #ffffff; color:black; border: 1px solid #2a3f54" onmouseover="this.style.backgroundColor='#2a3f54'; this.style.color='#ffffff';" onmouseout="this.style.backgroundColor='#ffffff'; this.style.color='#2a3f54';">
                    <a href="auth/google">Login With Google</a>
                </x-button>
            </div>
        </form>

        {{-- doesnt work --}}
        <script>
            function changeColor() {
            var button = document.getElementById('myButton');
            if (button.style.backgroundColor === '#2a3f54') {
                button.style.backgroundColor = '#000000'; // Change to your desired color when clicked
                button.style.color = '#ffffff'; // Change to your desired text color when clicked
            } else {
                button.style.backgroundColor = '#2a3f54'; // Revert to the initial color when clicked again
                button.style.color = '#ffffff'; // Revert to the initial text color when clicked again
            }
            }

        </script>
    </x-authentication-card>
</x-guest-layout>
