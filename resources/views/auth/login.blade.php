<x-guest-layout>
    <x-authentication-card>
        <x-slot name="logo">
            {{-- <x-authentication-card-logo /> --}}
            <div class="rounded-full relative h-28 w-28 animate-bounce mt-4 overflow-hidden object-cover">
                <img src=" {{ asset('foot.png') }}" alt="" class=" w-full h-full ">
            </div>
        </x-slot>

        <x-validation-errors class="mb-4" />

        @if (session('status'))
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ session('status') }}
            </div>
        @endif

        <form method="POST" action="{{ isset($guard) ? url($guard.'/login') : route('login') }}">
            @csrf

            <div>
                <x-label for="email" value="{{ __('Email') }}" />
                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
            </div>

            <div class="mt-4">
                <x-label for="password" value="{{ __('Password') }}" />
                <x-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="current-password" />
            </div>

            <div class="mt-5 flex justify-between">
                <p>Forgot password</p>

                @if (Route::has('password.request'))
                    <a class="text-md font-bold text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('password.request') }}">
                        {{ __('clique here') }}
                    </a>
                @endif

            </div>

            <div class="mt-4 flex justify-center">
                <x-button class="ml-4">
                    {{ __('connexion') }}
                </x-button>
            </div>

            <div class="mt-4 flex justify-between">
                <p>Don't have an account?</p>
                <a href="{{__('register') }}">create one</a>
            </div>

            <div class="flex items-center justify-end mt-4">
            </div>
        </form>
    </x-authentication-card>
</x-guest-layout>
