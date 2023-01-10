<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap">


        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        @stack('styles')
    </head>
    <body class="font-sans antialiased">
    <div class="flex flex-wrap bg-gray-100 w-full h-screen">
                @include('layouts.sidebar')

                <div class="w-10/12 ">
                    @include('layouts.navigation')

                    <div class="p-4 text-gray-500">
                        {{ $slot }}
                    </div>
                </div>
        </div>



    <script src="https://code.jquery.com/jquery-3.6.3.js" integrity="sha256-nQLuAZGRRcILA+6dMBOvcRh5Pe310sBpanc6+QBmyVM=" crossorigin="anonymous"></script>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="http://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>
    <script>
        // if (localStorage.theme === 'dark' || (!('theme' in localStorage) && window.matchMedia('(prefers-color-scheme: dark)').matches)) {
        //     document.documentElement.classList.add('dark')
        //     document.querySelector("#iconMode").classList.add('fa-sun')
        // } else {
        //     document.documentElement.classList.remove('dark')
        //     document.querySelector("#iconMode").classList.add('fa-moon')
        // }
    </script>
    @stack('scripts')
    </body>
</html>
