<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Artf Co2</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300;500;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/tooltip.css') }}" rel="stylesheet">

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

</head>

<body>

    {{-- Header --}}
    <header class="bg-primary-Color w-full sticky flex justify-around items-center">
        <x-svg-artf-logo></x-svg-artf-logo>
        <x-hammenu></x-hammenu>
    </header>

    <!-- Modal--Menu -->

    <nav id="modal-bg" class="w-full h-full bg-primary-Color top-0 absolute hidden flex justify-center items-center">

        <div id="modal-box"
            class="flex flex-col items-center -translate-y-1/2 -translate-x-1/2 absolute hidden w-full h-3/5 justify-evenly text-white text--menu">
            <a href="{{ route('home') }}" class="w-10/12  border-2 rounded-sm text-center py-2">Inicio</a>
            <a href="{{ route('calculate') }}" class="w-10/12  border-2 rounded-sm text-center py-2">Calculo de
                arboles</a>
            <a href="{{ route('offset') }}" class="w-10/12  border-2 rounded-sm text-center py-2">Alternativa para
                compensar huella de carbono</a>
            <a href="{{ route('transport') }}" class="w-10/12  border-2 rounded-sm text-center py-2">Medios
                alternativos de
                transporte</a>
            <a href="{{ route('stats') }}" class="w-10/12  border-2 rounded-sm text-center py-2">Estadisticas</a>
        </div>
    </nav>



    <main class="flex w-screen h-screen overflow-y-auto">
        <section class="w-full">
            @yield('content')
        </section>
    </main>
</body>

<script>
    const modalbg = document.getElementById('modal-bg');
    const modalSwitch = document.getElementById('modal-switch');
    const modalBox = document.getElementById('modal-box');
    const modalClose = document.getElementById('modal-close');
    modalbg.addEventListener("click", function() {
        modalBox.classList.add('hidden')
        modalbg.classList.add('hidden')
    });
    modalSwitch.addEventListener("click", function() {
        modalBox.classList.remove('hidden')
        modalbg.classList.remove('hidden')
    });
</script>

</html>
