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
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

</head>

<body class="flex relative bg-marine">

    <main class="flex w-screen h-screen overflow-y-auto">

        {{-- Header/menu vertical --}}
        <header
            class="sidebar h-screen flex flex-col text-center lg:w-48 w-2/5 lg:sticky top-0 z-50 bg-forest shadow-lg space-y-6 absolute inset-y-0 left-0 transform -translate-x-full transition duration-200 ease-in-out  lg:translate-x-0">
            <nav class="h-screen lg:text-2xl text-lg flex flex-col justify-evenly items-center relative text-white ">

                <a href="{{ route('home') }}"
                    class="hover:text-sleek w-full flex flex-grow items-center justify-center transition duration-200">Inicio</a>

                <a href="{{ route('calcular') }}"
                    class="hover:text-sleek w-full flex flex-grow items-center justify-center transition duration-200">Calcular
                    compensación</a>

                <a href="{{ route('offset') }}"
                    class="hover:text-sleek w-full flex flex-grow items-center justify-center transition duration-200">Compensar</a>

                <a href="{{ route('transport') }}"
                    class="w-full flex flex-grow items-center justify-center transition duration-200">Medios de transporte</a>

                <a href="#"
                    class="w-full flex flex-grow items-center justify-center transition duration-200">Proximamente</a>

            </nav>
        </header>
        <section class="w-full">
            @yield('content')
        </section>
    </main>
</body>

<script>
    const btn = document.querySelector('.mobile-menu-button');
    const sidebar = document.querySelector('.sidebar');
    btn.addEventListener("click", () => {
        sidebar.classList.toggle("-translate-x-full");
    });
</script>

</html>
