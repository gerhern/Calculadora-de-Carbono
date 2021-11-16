@extends('app')
@section('content')
    <link href="{{ asset('css/modal.css') }}" rel="stylesheet">

    {{-- div principal --}}
    <div class="flex flex-col text-white bg-gradient-to-b from-feather via-marine to-forest">

        {{-- Titulo principal --}}
        <div class="w-full bg-feather">

            <x-hammenu></x-hammenu>
            <h1 class="text-center lg:text-6xl text-4xl font-semibold my-32">Medios alternativos de transporte</h1>

        </div>

        {{-- Resultado de comparacion de carbono --}}
        @isset($trainPercent)
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
                                style="width: {{ $trainPercent }}%">
                                <p class="hidden lg:block">{{ $trainCarbonFootprint }} g de CO<sub>2</sub></p>
                            </div>
                            <p class="lg:hidden font-bold p-1.5">{{ $trainCarbonFootprint }} g de CO<sub>2</sub></p>
                        </div>

                        {{-- bici --}}
                        <div class="flex items-center text-sm lg:text-base">
                            <x-svg-bicycle></x-svg-bicycle>
                            <div class="p-1 bg-feather my-1 rounded-r-full h-7 border border-forest"
                                style="width: {{ $bicyclePercent }}%">

                            </div>
                            <p class=" font-bold p-1.5">{{ $bicycleCarbonFootprint }} g de CO<sub>2</sub></p>
                        </div>

                    </div>

                    {{-- Datos --}}
                    <div class="flex flex-col justify-evenly items-center py-10">

                        <p class="w-11/12 lg:text-2xl text-lg"> Si recorrieras la misma distancia en <span
                                class="text-forest font-bold italic">ferrocarril nacional</span>
                            evitarías liberar a la atmósfera <span
                                class="text-forest font-bold italic">{{ $trainSavedFootprint }}</span> gramos de
                            CO<sub>2</sub> (<span class="text-forest font-bold italic">{{ $trainPercent }}%</span>).
                        </p>

                        <p class="w-11/12 lg:text-2xl text-lg my-10"> Si recorrieras la misma distancia en <span
                                class="text-forest font-bold italic">bicicleta</span>
                            evitarías liberar a la atmósfera <span
                                class="text-forest font-bold italic">{{ $bicycleSavedFootprint }}</span> gramos de
                            CO<sub>2</sub> (<span class="text-forest font-bold italic">{{ $bicyclePercent }}%</span>).
                        </p>

                        <p class="w-11/12 leading-snug lg:text-2xl text-lg mt-6">La cantidad de CO<sub>2</sub>
                            generada por este viaje podría neutralizarse mediante la siembra de árboles que mediante su proceso
                            de fotosíntesis absorben el carbono del aire y lo fijan en sus troncos y ramas.
                        </p>

                        <p class="w-11/12 leading-snug lg:text-2xl text-lg mt-10 text-center">Si realizaras este viaje de <span
                                class="text-forest font-bold italic">{{ $distance }}</span> kms por <span class="text-forest font-bold italic">200</span> días al año generarías<span
                                class="text-forest font-bold italic"> {{ number_format($footprintTon, 2) }} </span>toneladas
                            de
                            CO<sub>2</sub></p>

                        <p class="w-11/12 lg:text-2xl text-center text-lg">¿Sabes cuantos árboles necesitarías para cubrir esta
                            huella de carbono?
                        </p>

                        <x-button route="{{ route('calculate', 'footprint=' . $footprintTon) }}" text="¡Descubrelo ahora!">
                        </x-button>

                    </div>

                </div>

            </div>

            {{-- informacion medios alternativos --}}
            <div class="lg:w-11/12 w-10/12 mx-auto border border-black bg-black shadow-md bg-opacity-10 my-8 p-3 rounded-md">
                <h3 class="lg:text-5xl text-3xl text-center my-16  py-2 font-medium italic">Alternativas Ecológicas</h3>

                <p class="leading-snug lg:text-2xl text-lg px-3">Con el constante aumento de gases de egfecto invernadero
                    acumulandose en la atmosfera debido al uso de medios de transporte contaminantes y poco eficientes y la cada
                    vez mayor cantidad de congestionamiento vial debido a la gran cantidad de vehiculos ocupando espacio, nace
                    la necesidad de recurrir a medios de transporte con bajas emisiones de contaminates y mas eficientes en
                    cuanto a la capacidad de pasajeros.</p>

                <p class="leading-snug lg:text-2xl text-lg my-6 px-3">Segun el Instituto Nacional de Estadistica y Geografia
                    (INEGI) en México entre 2017 y 2019 la cantidad de vehiculos en el valle de Méxicose elevo a casi 12
                    millones de unidades de los aproximadamente mas de 33 millones de unidades registradas en el pais a
                    dicienbre de 2020*.</p>

                <p class="leading-snug lg:text-2xl text-lg my-6 px-3">Ademas de acuerdo al Instituto Mexicano para la
                    Competitividad en 2017 se registro que en la zona del Valle de México la velocidad de traslado promedio en
                    horas pico es de 6.42 km/h.**</p>

                {{-- Img1 --}}
                <div class="lg:w-11/12 mt-16 has-tooltip">
                    <img src="http://farm9.staticflickr.com/8034/8007464574_a4a777d9c3_k.jpg" alt="Cycling_promotion_fund"
                        class="rounded-md shadow-2xl">
                    <x-tooltip-index text="Fotografía de: Cycling Promotion Fund/PuebloBicicletero.org"></x-tooltip-index>
                </div>

                <p class="leading-snug lg:text-2xl text-lg my-6 px-3">La creciente cantidad de vehiculos y la baja eficiencia de
                    movilidad en horas pico hacen que elegir el automóvil particular como medio de transporte regular no
                    sea lo ideal, sin embargo si esto no es suficiente para considerar cambiar de vehiculo, aun nos queda el
                    impacto ambiental que este tipo de vehiculos genera.</p>


                {{-- <p class="leading-snug lg:text-2xl text-lg my-6 px-3">Por este motivo la necesidad de utilizar transportes alternativos y lograr asi un sistema de transporte sostenible gracias a la micromovilidad, la movilidad compartida y la movilidad sustentable. Usar medios de transporte como bicicletas, patinetas y patines es una opcion en contra de los automoviles particulares y lograr asi una movilidad mas eficiente se ha convertido en una opción contra a los tradicionales vehículos automotor (principalmente el automóvil particular) con el fin de moverse más rápidamente, reducir la contaminación y hacer más sustentable la calidad de vida.</p> --}}


                {{-- grafica --}}
                <div class="flex lg:flex-row flex-col items-center lg:justify-evenly my-7">
                    <img src=" {{ asset('img/carbonftprnt.jpeg') }} " alt="Comparativa de huellas de carbono por kilometro"
                        class="lg:w-6/12 w-11/12 rounded-md shadow-md my-4 mx-auto cursor-pointer" id="img">

                    <div class="lg:w-5/12 w-11/12">
                        <p class="leading-snug lg:text-2xl text-lg px-3 ">El uso de medios de transporte ha cambiado a lo largo
                            de los años, desde los motores a vapor, motores a gasolina, diesel e incluso motores electricos o
                            hibridos, de la misma forma la cantidad de contaminantes que son emitidos a la atmosfera tambien es
                            variable, esta depende principalmente del tipo de motor del vehiculo y del peso de su carga entre
                            muchas otras variables.</p>
                    </div>
                </div>

                <p class="leading-snug lg:text-2xl text-lg px-3 my-10">En el valle de México la distancia promedio de un viaje en
                    automovil es de 7 a 10 km y teniendo en cuenta la cantidad de emisiones en gramos de CO<sub>2</sub>
                    que generan distintos tipos de vehiculos por kilometro (ver grafica anterior), podremos calcular la cantidad
                    de emisiones que generamos por un cada viaje. </p>

                <p class="leading-snug lg:text-2xl text-lg px-3 my-10">El uso de vehiculos impulsados por gasolina es un gran foco de contaminantes pues teniendo en cuenta lo anterior dicho podemos obsrvar que los automoviles de este tipo generan alrededor de 2.54 kg de CO<sub>2</sub> (automovil grande) por un solo viaje de 9 km, teniendo en cuenta que un viaje de ida y vuelta (18 km) suele realizarse alrededor de unas 200 veces en un periodo de un año tenemos una huella de carbono de 1,018.62 kg de CO<sub>2</sub>, es decir 1.01 toneladas de CO<sub>2</sub> en un año. </p>

                <p class="leading-snug lg:text-2xl text-lg px-3 pb-16 ">Si en cambio usamos un vehiculo mas eficiente ecologicamente hablando como lo es el ferrocarril podemos obsrvar que por un viaje de 9 km se generan alrededor de 370.35 gr de CO<sub>2</sub> y si hacemos el ejemplo anterior obtenemos que un viaje de ida y vuelta (18 km) genera una huella de carbono de 148.14 kg de CO<sub>2</sub> en un año.</p>

                <p class="leading-snug text-xs text-center px-3">*Fuente: Instituto Nacional de Estadistica y Geografia <a
                        href="https://www.inegi.org.mx/temas/vehiculos/"
                        class="font-bold underline">https://www.inegi.org.mx/temas/vehiculos/</a></p>

                <p class="leading-snug text-xs text-center pb-16 px-3">**Fuente: Instituto Mexicano para la
                    Competitividad <a href="https://www.inegi.org.mx/temas/vehiculos/"
                        class="font-bold underline">https://imco.org.mx/leyes-movilidad-presupuestos-mecanismos-implementacion-efectiva/</a>
                </p>
            </div>
        @endisset

        {{-- Formulario --}}
        <div class="py-10">
            <form class="w-11/12 mx-auto bg-black bg-opacity-30 p-10">
                <label class="text-white uppercase font-bold tracking-wide my-10">¿Cúal es el medio de transporte que más
                    usas?</label>

                {{-- radio group --}}
                <div class="flex flex-col lg:justify-evenly py-10">
                    {{-- radio auto mediano diesel --}}
                    <div class="flex items-center">
                        <input class="w-6 h-6 m-2" type="radio" name="vehicle" id="carMedDies" value="171.061" checked>
                        <label for="carMedDies">Automóvil mediano (A diesel)</label>
                    </div>

                    {{-- radio auto mediano gas --}}
                    <div class="flex items-center">
                        <input class="w-6 h-6 m-2" type="radio" name="vehicle" id="carMedGas" value="192.28">
                        <label for="carMedGas">Automóvil mediano (A gasolina)</label>
                    </div class="flex items-center">

                    {{-- radio auto chico gas --}}
                    <div class="flex items-center">
                        <input class="w-6 h-6 m-2" type="radio" name="vehicle" id="carSmGas" value="96.14">
                        <label for="carSmGas">Automóvil chico 2 pasajeros (A gasolina)</label>
                    </div>

                    {{-- radio moto --}}
                    <div class="flex items-center">
                        <input class="w-6 h-6 m-2" type="radio" name="vehicle" id="bike" value="102.89">
                        <label for="bike">Motocicleta mediana</label>
                    </div>

                    {{-- radio moto grande --}}
                    <div class="flex items-center">
                        <input class="w-6 h-6 m-2" type="radio" name="vehicle" id="bikeBig" value="135.01">
                        <label for="bikeBig">Motocicleta grande</label>
                    </div>
                </div>

                {{-- range --}}
                <div id="rangeInput">
                    <label for="distance"
                        class="text-white uppercase font-bold tracking-wide my-10 justify-self-start">Distancia
                        aproximada</label>
                    <div class="flex lg:flex-row flex-col justify-evenly py-10">
                        <input class="lg:w-9/12 my-4 cursor-pointer" value="50" type="range" id="distance" max="100"
                            min="1">
                        <div class="flex flex-row justify-evenly">
                            <input type="number" name="distance" id="distanceShow"
                                class="text-center text-4xl italic bg-transparent appearance-none " value="50" min="1"
                                max="100">
                            <p class="text-4xl italic">km</p>
                        </div>
                    </div>
                </div>

                <input type="submit" value="Comenzar"
                    class="rounded-md shadow-lg bg-forest text-white mx-6 p-2 lg:text-lg hover:bg-marine transition duration-200 lg:w-2/12 border border-marine">

            </form>
        </div>

        {{-- enlaces --}}
        <div class="py-8 px-3">
            <h3 class="lg:text-5xl text-3xl text-center font-medium italic">¿Quieres conocer más?</h3>
            <div class="flex justify-evenly">
                <x-button route="{{ route('bicycle') }}" text="Bicicleta"></x-button>
                <x-button route="{{ route('train') }}" text="Ferrocarril"></x-button>
            </div>
        </div>

    </div>
    <!-- The Modal -->
    <div id="modal" class="modal">
        <span class="close">×</span>
        <img class="modal-content" id="imgModal">
        <div id="caption"></div>
    </div>

    <script src="{{ asset('js/rangeForm.js') }}"></script>
    <script src="{{ asset('js/modal.js') }}"></script>
@endsection
