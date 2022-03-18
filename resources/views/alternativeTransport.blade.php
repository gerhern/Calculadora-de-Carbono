@extends('app')
@section('content')
    {{-- Contenedor principal --}}
    <div class="flex flex-col items-center">
        {{-- Contenedor Texto --}}
        <div class="mt-20 px-8">
            <h1 class="subtitle--1 mx-auto py-3">Alternativas ecológicas de transporte</h1>
            <h3 class="subtitle--2 text-black my-2 ">La relación entre gases de efecto invernadero y el transporte.</h3>
            <p class="body--1 py-1">Con el constante aumento de gases de efecto invernadero,
                acumulándose en la atmósfera debido al uso de medios de transporte contaminantes y poco eficientes, así como
                la creciente cantidad de congestionamiento vial, debido al número de vehículos ocupando espacio, nace
                la necesidad de recurrir a medios de transporte con bajas emisiones contaminantes y más eficientes en
                cuanto a la capacidad de pasajeros.</p>

            <p class="body--1 py-1">Según el Instituto Nacional de Estadística y Geografía
                (INEGI), entre 2017 y 2019 la cantidad de vehículos en el valle de México se elevó a casi 12
                millones de unidades, de las aproximadamente más de 33 millones de unidades registradas en el país.*</p>

            <p class="body--1 py-1">Además, de acuerdo al Instituto Mexicano para la
                Competitividad, en 2017 se registró que en la zona del Valle de México la velocidad de traslado promedio en
                horas pico es de 6.42 km/h.**</p>
        </div>

        {{-- Contenedor imagen --}}
        <div class="w-11/12 has-tooltip my-7">
            <img src="http://farm9.staticflickr.com/8034/8007464574_a4a777d9c3_k.jpg" alt="Cycling_promotion_fund"
                class="rounded-md shadow-2xl w-full">
            <x-tooltip-index text="Fotografía de: Cycling Promotion Fund/PuebloBicicletero.org" margin="14">
            </x-tooltip-index>
        </div>

        {{-- Contenedor Texto --}}
        <div class="px-8">
            <p class="body--1 py-1">La creciente cantidad de automóviles en la ciudad y la
                baja eficiencia de movilidad en horas pico, hacen que elegir el automóvil particular como medio de
                transporte
                regular no sea lo ideal. Sin embargo, si esto no es suficiente para considerar cambiar de tipo de
                transporte, aún nos queda el impacto ambiental que este tipo de vehículos genera, como se ilustra en la
                siguiente grafíca.</p>
        </div>

        {{-- Contenedor imagen --}}
        <div class="w-11/12 has-tooltip my-7 cursor-pointer">
            <img src="{{ asset('img/carbonftprnt.jpeg') }}" alt="Comparativa de huellas de carbono por kilometro"
                class="rounded-md shadow-2xl w-full" id="img">
            <x-tooltip-index text="Fotografía de: Cycling Promotion Fund/PuebloBicicletero.org" margin="14">
            </x-tooltip-index>
        </div>

        {{-- Contenedor Texto --}}
        <div class="px-8">
            <p class="body--1 py-1">El uso de medios de transporte ha cambiado a lo largo
                de los años, desde los motores a vapor, motores a gasolina, diesel e incluso motores eléctricos o
                híbridos, de la misma forma la cantidad de contaminantes que son emitidos a la atmósfera también es
                variable y esta depende principalmente del tipo de motor del vehículo y del peso de su carga entre
                muchas otras variables.</p>

            <p class="body--1 py-1">En el valle de México la distancia promedio de un viaje
                en automóvil es de 7 a 10 km** y teniendo en cuenta la cantidad de emisiones en gramos de CO<sub>2</sub> que
                generan distintos tipos de vehículos por kilómetro (ver gráfica anterior), podremos calcular la cantidad de
                emisiones que generamos por un cada viaje.</p>

            <p class="body--1 py-1">El uso de vehículos impulsados por gasolina es un gran
                foco de contaminantes, pues teniendo en cuenta lo anterior, podemos observar que los automóviles de este
                tipo generan alrededor de 2.54 kg de CO<sub>2</sub> (automóvil grande) por un solo viaje de 9 km, teniendo
                en cuenta que un viaje de ida y vuelta (18 km) suele realizarse alrededor de unas 200 veces en un periodo de
                un año tenemos una huella de carbono de 1,018.62 kg de CO<sub>2</sub>, es decir 1.01 toneladas de
                CO<sub>2</sub> en un año. </p>

            <p class="body--1 py-1">Si en cambio usamos un vehículo más eficiente,
                ecológicamente hablando, como lo es el ferrocarril, podemos observar que por un viaje de 9 km se generan
                alrededor de 370.35 gramos de CO<sub>2</sub> y si hacemos el ejemplo anterior, obtenemos que un viaje de ida
                y vuelta (18 km) genera una huella de carbono de 148.14 kg de CO<sub>2</sub> en un año.</p>

            <p class="overline-- text-black py-1">*Fuente: Instituto Nacional de Estadística y Geografía <a
                    href="https://www.inegi.org.mx/temas/vehiculos/"
                    class="underline">https://www.inegi.org.mx/temas/vehiculos/</a></p>

            <p class="overline-- text-black py-1">**Fuente: Instituto Mexicano para la
                Competitividad <a href="https://www.inegi.org.mx/temas/vehiculos/"
                    class="underline">https://imco.org.mx/leyes-movilidad-presupuestos-mecanismos-implementacion-efectiva/</a>
            </p>

        </div>

        {{-- Contenedor imagen --}}
        <div class="w-11/12 has-tooltip my-7">
            <img src="https://images.pexels.com/photos/220996/pexels-photo-220996.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940" alt="Carretera"
                class="rounded-md shadow-2xl w-full">
            <x-tooltip-index text="Fotografía de: Pixabay from Pexels" margin="8">
            </x-tooltip-index>
        </div>
        
        {{-- Boton --}}
        <p class="subtitle--1 mt-1 w-11/12 text-center">¿Quieres conocer más?</p>
            <a href="{{ route('bicycle') }}"
            class="w-11/12 border-2 border-primary-Color  text-center mx-auto py-3 my-8 rounded button--text">Bicicleta</a>
            <a href="{{ route('train') }}"
            class="w-11/12 border-2 border-primary-Color  text-center mx-auto py-3 mb-8 rounded button--text">Ferrocarril</a>

    </div> {{-- Fin contenedor principal --}}


    {{-- <link href="{{ secure_asset('css/modal.css') }}" rel="stylesheet">

    <div class="flex flex-col text-white bg-gradient-to-b from-feather via-marine to-forest">

        <div class="w-full bg-feather">

            <x-hammenu></x-hammenu>
            <h1 class="first--title my-32">Medios alternativos de transporte</h1>

        </div>

        @isset($trainPercent)
            <div class="bg-feather">

                <div class="lg:w-11/12 w-10/12 mx-auto border border-black bg-black shadow-md bg-opacity-20 my-8 rounded-md">
                    <h3 class="my-16 py-2 first--title">¿Sabías que...?</h3>
                    <div class="py-4">

                        <p class="w-11/12 xxl--text mx-auto my-10">Cuando realizas un viaje de <span
                                class="text-forest font-bold italic">{{ $distance }} </span> km generas:</p>

                        <div class="flex">
                            <x-svg-vehicles></x-svg-vehicles>
                            <div
                                class="p-1 bg-gradient-to-r from-feather via-marine to-forest w-9/12 lg:w-11/12 h-7 my-1 rounded-r-full  font-bold text-center border border-forest text-sm lg:text-base">
                                <p>{{ $vehicleCarbonFootprint }} g de CO<sub>2</sub></p>
                            </div>
                        </div>

                        <div class="flex text-sm lg:text-base">
                            <x-svg-train></x-svg-train>
                            <div class="p-1 bg-gradient-to-r from-feather to-marine my-1 rounded-r-full  font-bold text-center h-7 border border-forest"
                                style="width: {{ $trainPercent }}%">
                                <p class="hidden lg:block">{{ $trainCarbonFootprint }} g de CO<sub>2</sub></p>
                            </div>
                            <p class="lg:hidden font-bold p-1.5">{{ $trainCarbonFootprint }} g de CO<sub>2</sub></p>
                        </div>

                        <div class="flex items-center text-sm lg:text-base">
                            <x-svg-bicycle></x-svg-bicycle>
                            <div class="p-1 bg-feather my-1 rounded-r-full h-7 border border-forest"
                                style="width: {{ $bicyclePercent }}%">

                            </div>
                            <p class=" font-bold p-1.5">{{ $bicycleCarbonFootprint }} g de CO<sub>2</sub></p>
                        </div>

                    </div>

                    <div class="flex flex-col justify-evenly items-center py-10">

                        <p class="w-11/12 lg:text-2xl text-lg"> Si recorrieras la misma distancia en <span
                                class="text-forest font-bold italic">ferrocarril</span>
                            liberarías a la atmósfera <span
                                class="text-forest font-bold italic">{{ $trainSavedFootprint }}</span> gramos menos de
                            CO<sub>2</sub>.
                        </p>

                        <p class="w-11/12 lg:text-2xl text-lg my-10"> Si recorrieras la misma distancia en <span
                                class="text-forest font-bold italic">bicicleta</span>
                            liberarías a la atmósfera <span
                                class="text-forest font-bold italic">{{ $bicycleSavedFootprint }}</span> gramos menos de
                            CO<sub>2</sub>.
                        </p>

                        <p class="w-11/12 xxl--text mt-6">La cantidad de CO<sub>2</sub>
                            generada por este viaje podría neutralizarse mediante la siembra de árboles que mediante su proceso
                            de fotosíntesis absorben el carbono del aire y lo fijan en sus troncos y ramas.
                        </p>

                        <p class="w-11/12 xxl--text mt-10 text-center">Si realizaras este viaje de <span
                                class="text-forest font-bold italic">{{ $distance }}</span> kms por <span
                                class="text-forest font-bold italic">{{ $daysPerYear }}</span> días al año generarías<span
                                class="text-forest font-bold italic"> {{ number_format($footprintTon, 2) }} </span>toneladas
                            de
                            CO<sub>2</sub></p>

                        <p class="w-11/12 lg:text-2xl text-center text-lg">¿Sabes cuantos árboles necesitarías para cubrir esta
                            huella de carbono?
                        </p>

                        <x-button route="{{ route('calculate', 'footprint=' . $footprintTon) }}" text="¡Descúbrelo ahora!">
                        </x-button>

                    </div>

                </div>

            </div>

            
        @endisset

        <p class="w-11/12 xxl--text text-center py-10 bg-black bg-opacity-30 mx-auto">{{ $visits }}
            Usuarios han calculado su huella de carbono.
        </p>
        <div class="pb-10">
            <form class="w-11/12 mx-auto bg-black bg-opacity-30 p-10">
                <label class="md--label my-10">¿Cúal es el medio de transporte que más
                    usas?</label>

                <div class="flex flex-col lg:justify-evenly py-10">
                    <div class="flex items-center">
                        <input class="radio--input" type="radio" name="vehicle" id="Taxi" value="1" checked>
                        <label for="Taxi">Taxi</label>
                    </div>

                    <div class="flex items-center">
                        <input class="radio--input" type="radio" name="vehicle" id="Autobus" value="2">
                        <label for="Autobus">Autobús</label>
                    </div>

                    <div class="flex items-center">
                        <input class="radio--input" type="radio" name="vehicle" id="camioneta" value="3">
                        <label for="camioneta">Automóvil Grande (Gasolina)</label>
                    </div>

                    <div class="flex items-center">
                        <input class="radio--input" type="radio" name="vehicle" id="automovil" value="4">
                        <label for="automovil">Automóvil Mediano (Gasolina)</label>
                    </div>

                    <div class="flex items-center">
                        <input class="radio--input" type="radio" name="vehicle" id="bike" value="5">
                        <label for="bike">Motocicleta</label>
                    </div>
                </div>

                <div id="rangeInput">
                    <label for="distance"
                        class="md--label justify-self-start">Distancia</label>
                    <div class="flex lg:flex-row flex-col justify-evenly">
                        <input class="lg:w-9/12 my-4 cursor-pointer" value="50" type="range" id="distance" max="100"
                            min="1">
                        <div class="flex flex-row justify-evenly">
                            <input type="number" name="distance" id="distanceShow"
                                class="text-center text-4xl italic bg-transparent appearance-none " value="50" min="1"
                                max="100" required>
                            <p class="text-4xl italic">km</p>
                        </div>
                    </div>
                </div>

                <div class="w-full lg:w-1/2 px-3 py-10">
                    <label class=" md--label justify-self-start" for="days">
                        ¿Cuantos días al año realizas este viaje?
                    </label>
                    <input
                        class=" py-3 px-4 input--"
                        type="number" max="365" min="1" required step="1" name="daysPerYear" placeholder="200" id="days">
                </div>

                <div class="w-full lg:w-full px-3 py-10">
                    <label class=" md--label justify-self-start" for="days">
                        ¿Estarías dispuesto a cambiar tu medio de transporte habitual, si esto redujera las emisiones de
                        contaminantes?
                    </label>

                    <div class="flex items-center">
                        <input class="radio--input" type="radio" name="changeTransport" id="yes" value="1" checked>
                        <label for="yes">Sí</label>
                    </div>

                    <div class="flex items-center">
                        <input class="radio--input" type="radio" name="changeTransport" id="no" value="0">
                        <label for="no">No</label>
                    </div>
                </div>


                <input type="submit" value="Comenzar"
                    class="rounded-md shadow-lg bg-forest text-white mx-6 p-2 lg:text-lg hover:bg-marine transition duration-200 lg:w-2/12 border border-marine">

            </form>
        </div>

        @if ($errors->any())
            <div
                class="warning--">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        

            

            

            


           

            


    <script src="{{ secure_asset('js/rangeForm.js') }}"></script>
    <script src="{{ secure_asset('js/modal.js') }}"></script> --}}
@endsection
