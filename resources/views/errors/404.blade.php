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
<body>
    {{-- Contenedor --}}
    {{-- https://images.pexels.com/photos/981314/pexels-photo-981314.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940 --}}
    <div class="w-screen h-screen bg-bottom bg-cover  text-white" style="background-image: url('https://images.pexels.com/photos/632252/pexels-photo-632252.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940')">
        
        <div class="w-screen h-screen flex flex-col bg-black bg-opacity-30">
            <p class="text-xs">Fotografia: Fox from Pexels</p>
            {{-- Texto --}}
            <div class="flex flex-col w-full justify-center items-center text-center py-40 px-6">
                <h2 class="text-9xl italic">¡404!</h2>
                <p class="text-4xl my-6">La página que estas buscando no esta disponible o no existe (Error 404).</p>
            </div>

            {{-- Contador --}}
            <div class= "h-full flex flex-grow items-center justify-evenly text-8xl text-center bg-black bg-opacity-30">
                <div class="w-4/12 oldstyle-nums">
                    <h2><span>??</span>:<span id="hours">55</span>:<span id="seconds">12</span></h2>
                </div>

                <div class="w-7/12 h-full flex flex-col justify-evenly">
                    <p class="text-4xl">¿Cuanto debemos esperar para actuar?</p>
                    <p class="text-3xl"> El tiempo se esta agotando poco a poco, pero no temas, aun estamos a tiempo de ayudar al planeta.</p>
                    <a href="{{ route('home') }}" class="cursor-pointer underline text-4xl">¡Da click aqui!</a>
                </div>
            </div>

        </div>
    </div>
</body>
<script>
    function Timer(hours, seconds){
        this.hours = hours;
        this.seconds = seconds;

        this.secondCount = function(){
            if(this.seconds == 0){
                this.hours--;
                this.seconds = 59;
            }
            if(this.hours < 0){
                this.secondCount = null;
                return;
            }

            document.getElementById('seconds').innerHTML = this.seconds--;
            document.getElementById('hours').innerHTML = this.hours;
            setTimeout(this.secondCount.bind(this), 1000);
        };
    }

    var timer = new Timer(59 , 59);
    timer.secondCount();
</script>
</html>