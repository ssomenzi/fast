<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body class="bg-teal-lightest font-sans font-normal antialiased">
    <div class="flex flex-col">
        @if(Route::has('login'))
            <div class="absolute pin-t pin-r mt-4 mr-4">
                @auth
                    <a href="{{ url('/home') }}" class="no-underline hover:underline text-sm font-normal text-teal-darker uppercase">{{ __('Home') }}</a>
                @else
                    <a href="{{ route('login') }}" class="no-underline hover:underline text-sm font-normal text-teal-darker uppercase pr-6">{{ __('Login') }}</a>
                    <a href="{{ route('register') }}" class="no-underline hover:underline text-sm font-normal text-teal-darker uppercase">{{ __('Register') }}</a>
                @endauth
            </div>
        @endif

        <div class="min-h-screen flex items-center justify-center">
            <div class="flex flex-col justify-around h-full">
                <div>
                    <h1 class="text-grey-darker text-center font-thin tracking-wide text-5xl mb-6">
                        {{ config('app.name', 'Laravel') }}
                    </h1>
                    <ul class="list-reset">
                        <li class="inline pr-8">
                            <a href="https://laravel.com/docs" target="_blank" class="no-underline hover:underline text-sm font-normal text-teal-darker uppercase" title="Laravel 5.7">Laravel 5.7</a>
                        </li>
                        <li class="inline pr-8">
                            <a href="https://vuejs.org/v2/guide" target="_blank" class="no-underline hover:underline text-sm font-normal text-teal-darker uppercase" title="Vue.js">Vue.js</a>
                        </li>
                        <li class="inline pr-8">
                            <a href="https://tailwindcss.com/docs/what-is-tailwind/" target="_blank" class="no-underline hover:underline text-sm font-normal text-teal-darker uppercase" title="Tailwind">Tailwind</a>
                        </li>
                        <li class="inline pr-8">
                            <a href="https://github.com/turbolinks/turbolinks" target="_blank" class="no-underline hover:underline text-sm font-normal text-teal-darker uppercase" title="Turbolinks">Turbolinks</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
