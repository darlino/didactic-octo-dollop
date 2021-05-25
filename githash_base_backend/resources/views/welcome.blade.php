<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->


        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>
        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
    </head>
    <body class="antialiased">


    <nav class="relative h-24  flex items-top justify-center  bg-indigo-900  sm:items-center py-4 sm:pt-0">
            <div class="hidden absolute top-0 left-1 px-6 py-4 sm:block">
                <div class="flex-shrink-0 flex items-center">
                    <a href="{{ route('dashboard') }}" class="inline-flex">
                        <x-application-logo class="block h-10 w-auto fill-current text-gray-600" />
                        <h1 class="py-4 mx-2 font-bold text-2xl text-white"> Githash</h1>
                    </a>
                </div>
            </div>
            @if (Route::has('login'))
                <div class="hidden absolute space-x-4 m-4  top-0 right-1 px-6 py-4 sm:block">
                    @auth
                        <a href="{{ url('/dashboard') }}" class="inline-block bg-green-400 text-sm px-4 py-2 leading-none border rounded text-white border-white hover:border-transparent hover:text-teal-500 hover:bg-green-300 mt-4 lg:mt-0">Dashboard</a>
                    @else
                        <a href="{{ route('register') }}" class="inline-block bg-green-400 text-sm px-4 py-2 leading-none border rounded text-white border-white hover:border-transparent hover:text-teal-500 hover:bg-green-300 mt-4 lg:mt-0">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="inline-block bg-indigo-800 text-sm px-4 py-2 leading-none border rounded text-white border-white hover:border-transparent hover:text-teal-500 hover:bg-indigo-700 mt-4 lg:mt-0">Register</a>
                        @endif
                    @endauth
                </div>
            @endif
        </nav>
        <div class="h-auto flex text-center  p-2 m-2">
            <div class="container  w-2/3 p-8 m-8">
                <img src="{{ asset("img/hero.png") }}" width="1000px"/>
            </div>
            <div class="container w-1/3 p-8 m-12 ">

                    @auth
                        <a href="{{ url('/dashboard') }}" >
                            <p class="text-4xl text-left font-bold leading-snug">
                                Managing bitcoin deposits and payeer deposits is no longer a problem with githash, manage everything with one click and track the actions of other members
                            </p>
                            <button class="bg-transparent p-8 my-4 hover:bg-green-500 text-blue-700 font-semibold hover:text-white py-2 px-4 border border-blue-500 hover:border-transparent rounded">
                                DashBoard
                            </button>
                        </a>
                    @else
                        <a href="{{ route('login') }}" class="">

                            <p class="text-4xl text-left font-bold leading-snug">
                                Managing bitcoin deposits and payeer deposits is no longer a problem with githash, manage everything with one click and track the actions of other members
                            </p>

                            <button class="bg-transparent p-8 my-4 hover:bg-blue-500 text-blue-700 font-semibold hover:text-white py-2 px-4 border border-blue-500 hover:border-transparent rounded">
                                Log in
                            </button>
                        </a>

                    @endauth


            </div>
        </div>

    </body>
</html>
