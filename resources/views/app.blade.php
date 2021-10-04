<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>Artf Co2</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>
    </head>
    <body class="flex relative">
        
        <main class="flex w-screen h-screen overflow-y-auto">
            
            {{--Header/menu vertical--}}
            <header class="h-screen flex flex-col text-center w-52 sticky top-0 z-50 bg-forest shadow-md">
                <nav class="h-screen text-2xl flex flex-col justify-evenly items-center relative text-white">
    
                    <a href="{{ route('home') }}"
                        class="hover:text-sleek w-full flex flex-grow items-center justify-center transition duration-200">Inicio</a>
    
                    <a href="{{ route('calcular') }}"
                        class="hover:text-sleek w-full flex flex-grow items-center justify-center transition duration-200">Calcular compensación</a>
    
                        <a href="{{  route('offset') }}"
                        class="hover:text-sleek w-full flex flex-grow items-center justify-center transition duration-200">Compensar</a>
    
                        <a href=""
                        class="hover:text-sleek w-full flex flex-grow items-center justify-center transition duration-200">Reducción</a>
                        
                </nav>
            </header>
            <section class="w-full">
                @yield('content')
            </section>
        </main>
    </body>
</html>