<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])

        <!-- Styles -->
        @livewireStyles
    </head>
    <body class="font-sans antialiased">
        <x-banner />

        <div class="min-h-screen bg-gray-200">
            @livewire('navigation-menu')

            <!-- Page Heading -->
            @if (isset($header))
                <header class="bg-white shadow">
                    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                        {{ $header }}
                    </div>
                </header>
            @endif

            {{-- ----------------dashboard---------------- --}}


{{-- ------------------------------------------------------------------------------------------------------------ --}}
            {{-- <div class="bg-gray-900 w-20 sm:w-52 md:w-72 min-h-screen fixed p-4">
            </div> --}}
{{-- ------------------------------------------------------------------------------------------------------------ --}}
                {{-- <div class="authdash">
                    <div class="navs">
                        <div class="ico">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="iconne">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75m-3-7.036A11.959 11.959 0 013.598 6 11.99 11.99 0 003 9.749c0 5.592 3.824 10.29 9 11.623 5.176-1.332 9-6.03 9-11.622 0-1.31-.21-2.571-.598-3.751h-.152c-3.196 0-6.1-1.248-8.25-3.285z" />
                            </svg>
                        </div>
                        <button>
                            <span>Authentication</span>
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="icon-acc">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                            </svg>
                        </button>
                    </div>

                    <div class="affiche">
                        <ul>
                            <li><a href="">dimitrisation</a></li>
                            <li><a href="">dimitrisation</a></li>
                            <li><a href="">dimitrisation</a></li>
                            <li><a href="">dimitrisation</a></li>
                        </ul>
                    </div>
                </div>


                <details class="det">
                    <summary class="cursor-pointer">Produits</summary>
                    <ul class="sum">
                        <li><a href="">dimitrisation</a></li>
                        <li><a href="">dimitrisation</a></li>
                        <li><a href="">dimitrisation</a></li>
                        <li><a href="">dimitrisation</a></li>
                    </ul>
                </details> --}}

{{-- -------------------------------dashboard---------------- --}}


            <!-- Page Content -->
            <main>
                {{ $slot }}
            </main>
        </div>

        @stack('modals')

        @livewireScripts
    </body>
</html>
