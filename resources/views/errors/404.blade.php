<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Artf 404!</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

</head>

<body class="w-screen h-screen bg-cover bg-bottom text-white"
    style="background-image: url('https://images.pexels.com/photos/632252/pexels-photo-632252.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940')">


        <div class="flex flex-col w-full h-full justify-between bg-black bg-opacity-30">
            {{-- Texto --}}
            <div class="flex flex-col w-full justify-center items-center text-center py-28 lg:py-28">
                <h2 class="text-7xl lg:text-9xl italic">¡404!</h2>
                <p class="text-2xl lg:text-3xl mt-10">La página que estas buscando no esta disponible o no existe.</p>
            </div>

            {{-- Contador --}}
            <div class="flex flex-col lg:flex-row lg:w-full  lg:justify-evenly flex-grow items-center text-5xl">
                <div class="lg:text-center py-10 lg:w-3/12 lg:text-7xl lg:mx-auto">
                    <h2><span>??</span>:<span id="hours">55</span>:<span id="seconds">12</span></h2>
                </div>

                <div class="flex flex-col lg:w-8/12 justify-center items-center text-center px-8">
                    <p class="text-2xl mb-8 lg:text-4xl">¿Cuanto debemos esperar para actuar?</p>
                    <p class="text-base lg:text-2xl"> El tiempo se esta agotando poco a poco, pero no temas, aun estamos a
                        tiempo de ayudar al planeta.</p>
                    <a href="{{ route('home') }}" class="cursor-pointer underline text-2xl lg:text-3xl lg:my-4">¡Da click aqui!</a>
                </div>
                <p class="text-xs lg:w-1/12 ">Fotografia de: Fox from Pexels</p>
            </div>
        </div>
</body>
<script src="{{ asset('js/timer.js') }}" defer></script>

</html>
