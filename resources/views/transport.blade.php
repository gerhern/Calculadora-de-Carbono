@extends('app')
@section('content')

    {{-- div principal --}}
    <div class="flex flex-col text-white bg-gradient-to-b from-feather via-marine to-forest">

        {{-- Titulo principal --}}
        <div class="w-full bg-feather">

            <x-hammenu></x-hammenu>
            <h1 class="text-center lg:text-6xl text-4xl font-semibold my-32">Medios alternativos de transporte</h1>

        </div>

        {{-- Resultado de comparacion de carbono --}}
        @isset($vehicleCarbonFootprint)
            {{-- Resultados --}}
            <div class="bg-feather">
                
                <div class="lg:w-11/12 w-10/12 mx-auto border border-black bg-black shadow-md bg-opacity-20 my-8 rounded-md">
                    <h3 class="lg:text-5xl text-3xl text-center my-16  py-2 font-medium italic">¿Sabías que...?</h3>
                    {{-- comparacion vs grafica --}}
                    <div class="py-4">

                        <p class="w-11/12 leading-snug lg:text-2xl text-lg mx-auto my-10">Cuando realizas un viaje de <span
                                class="text-forest font-bold italic">{{ $distance }} </span> kms generas:</p>

                        {{-- vehiculo seleccionado --}}
                        <div class="flex">
                            <x-svg-vehicles></x-svg-vehicles>
                            <div
                                class="p-1 bg-gradient-to-r from-feather via-marine to-forest w-9/12 lg:w-11/12 h-7 my-1 rounded-r-full  font-bold text-center border border-forest text-sm lg:text-base">
                                <p>{{ $vehicleCarbonFootprint }} g de CO<sub>2</sub></p>
                            </div>
                        </div>

                        {{-- Tren --}}
                        <div class="flex text-sm lg:text-base">
                            <x-svg-train></x-svg-train>
                            <div class="p-1 bg-gradient-to-r from-feather to-marine my-1 rounded-r-full  font-bold text-center h-7 border border-forest"
                            style="width: {{$trainPercent}}%">
                                <p class="hidden lg:block">{{ $trainCarbonFootprint }} g de CO<sub>2</sub></p>
                            </div>
                            <p class="lg:hidden font-bold p-1.5">{{ $trainCarbonFootprint }} g de CO<sub>2</sub></p>
                        </div>

                        {{-- bici --}}
                        <div class="flex items-center text-sm lg:text-base">
                            <x-svg-bicycle></x-svg-bicycle>
                            <div class="p-1 bg-feather my-1 rounded-r-full h-7 border border-forest" style="width: {{$bicyclePercent}}%">

                            </div>
                            <p class=" font-bold p-1.5">{{ $bicycleCarbonFootprint }} g de CO<sub>2</sub></p>
                        </div>

                    </div>

                    {{-- Datos --}}
                    <div class="flex flex-col justify-evenly items-center py-10">

                        <p class="w-11/12 lg:text-2xl text-lg"> Si recorrieras la misma distancia en <span
                            class="text-forest font-bold italic">tren</span>
                            evitarías liberar a la atmósfera <span
                                class="text-forest font-bold italic">{{ $trainSavedFootprint }}</span> gramos de carbono (<span
                                class="text-forest font-bold italic">{{ $trainPercent }}%</span>).
                        </p>

                        <p class="w-11/12 lg:text-2xl text-lg my-10"> Si recorrieras la misma distancia en <span
                            class="text-forest font-bold italic">bicicleta</span>
                            evitarías liberar a la atmósfera <span
                                class="text-forest font-bold italic">{{ $bicycleSavedFootprint }}</span> gramos de carbono (<span
                                class="text-forest font-bold italic">{{ $bicyclePercent }}%</span>).
                        </p>

                        <p class="w-11/12 leading-snug lg:text-2xl text-lg mt-6">La cantidad de CO<sub>2</sub>
                            generada por este viaje podría neutralizarse mediante la siembra de árboles que mediante su proceso
                            de fotosíntesis absorben el carbono del aire y lo fijan en sus troncos y ramas.
                        </p>

                        <p class="w-11/12 leading-snug lg:text-2xl text-lg mt-10 text-center">Si realizaras este viaje de <span
                            class="text-forest font-bold italic">{{ $distance }}</span> kms 
                             los <span
                             class="text-forest font-bold italic">365</span> días del año generarías<span
                             class="text-forest font-bold italic"> {{ $footprintTon }} </span>toneladas de
                            CO<sub>2</sub></p>

                        <p class="w-11/12 lg:text-2xl text-center text-lg">¿Sabes cuantos árboles necesitarías para cubrir esta huella de carbono?
                        </p>

                        <x-button route="{{ route('calcular', 'footprint=' . $footprintTon) }}" text="¡Descubrelo ahora!">
                        </x-button>

                    </div>

                </div>

            </div>

            {{-- informacion medios alternativos --}}
            <div class="lg:w-11/12 w-10/12 mx-auto border border-black bg-black shadow-md bg-opacity-10 my-8 p-3 rounded-md">
                <h3 class="lg:text-5xl text-3xl text-center my-16  py-2 font-medium italic">Alternativas Ecologicas</h3>

                <p class="leading-snug lg:text-2xl text-lg px-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolor
                    totam iure voluptate commodi tempora. Aspernatur iusto, at fugit magni mollitia sunt quis. Similique
                    voluptatibus quis, ipsum impedit quam provident suscipit Lorem ipsum dolor sit amet consectetur, adipisicing
                    elit. Error, nobis voluptates quasi voluptate accusantium facilis quo aliquid! Voluptatum possimus,
                    reprehenderit molestias ipsum hic rerum quaerat quidem ipsa repudiandae debitis esse.</p>

                {{-- <p class="leading-snug lg:text-2xl text-lg text-center pb-16 px-3">No todos los vehiculos en circulacion generan la misma cantidad de contaminantes, la mayor parte de los vehiculos que usan gasolina o diesel como combustible son los que liberan grandes cantidades de CO<sub>2</sub>.</p> --}}

                {{-- grafica --}}
                <div class="flex lg:flex-row flex-col items-start lg:justify-evenly my-7">
                    <img src=" {{ asset('img/carbonftprnt.jpeg') }} " alt="Comparativa de huellas de carbono por kilometro"
                        class="lg:w-6/12 w-11/12 rounded-md shadow-md my-4 mx-auto">

                    <p class="leading-snug lg:text-2xl text-lg px-3 lg:w-5/12 w-11/12">Lorem ipsum dolor sit amet, consectetur
                        adipisicing elit. Laborum ex, facilis temporibus nesciunt vitae obcaecati quae possimus eum tenetur quo
                        exercitationem, natus id nisi, quis sapiente laboriosam. Provident, aut praesentium! Lorem ipsum dolor
                        sit amet consectetur adipisicing elit. Rerum vero eius sed odio pariatur facilis dolore consequuntur?
                        Dolorem praesentium, cum facilis, asperiores amet, temporibus tempore excepturi nulla fugiat eligendi
                        at.</p>
                </div>

            </div>
        @endisset

        {{-- Formulario --}}
        <div class="py-10">
            <form class="w-11/12 mx-auto bg-black bg-opacity-30 p-10">
                <label class="text-white uppercase font-bold tracking-wide my-10">¿Cúal es el medio de transporte que más
                    usas?</label>

                {{-- radio group --}}
                <div class="flex lg:flex-row flex-col lg:justify-evenly py-10">
                    {{-- radio auto mediano diesel --}}
                    <div class="flex items-center">
                        <input class="w-6 h-6 m-2" type="radio" name="vehicle" id="carMedDies" value="171" checked>
                        <label for="carMedDies">Auto mediano (A diesel)</label>
                    </div>

                    {{-- radio auto mediano gas --}}
                    <div class="flex items-center">
                        <input class="w-6 h-6 m-2" type="radio" name="vehicle" id="carMedGas" value="192">
                        <label for="carMedGas">Auto mediano (A gasolina)</label>
                    </div class="flex items-center">

                    {{-- radio auto chico gas --}}
                    <div class="flex items-center">
                        <input class="w-6 h-6 m-2" type="radio" name="vehicle" id="carSmGas" value="96">
                        <label for="carSmGas">Auto chico (A gasolina)</label>
                    </div class="flex items-center">

                    {{-- radio moto --}}
                    <div class="flex items-center">
                        <input class="w-6 h-6 m-2" type="radio" name="vehicle" id="bike" value="103">
                        <label for="bike">Motocicleta mediana</label>
                    </div>
                </div>

                {{-- range --}}
                <div id="rangeInput">
                    <label for="distance"
                        class="text-white uppercase font-bold tracking-wide my-10 justify-self-start">Distancia
                        aproximada</label>
                    <div class="flex lg:flex-row flex-col justify-evenly py-10">
                        <input class="lg:w-9/12 my-4 cursor-pointer" value="50" type="range" name="distance" id="distance"
                            max="100" min="1">
                        <p id="distanceShow" class="text-4xl italic"> 50 km</p>
                    </div>
                </div>

                <input type="submit" value="Comenzar"
                    class="rounded-md shadow-lg bg-forest text-white mx-6 p-2 lg:text-lg hover:bg-marine transition duration-200 lg:w-2/12 border border-marine">

            </form>
        </div>

        {{-- enlaces --}}
        <div class="py-8 px-3">
            <h3 class="lg:text-5xl text-3xl text-center font-medium italic">¿Quieres conocer más?</h3>
            <div class="flex">
                <x-button route="{{ route('bicycle') }}" text="Conoce sobre la bicicleta"></x-button>
                <x-button route="#" text="Conoce sobre el tren"></x-button>
            </div>
        </div>

    </div>
    <script src="{{ asset('js/rangeForm.js') }}"></script>
@endsection
