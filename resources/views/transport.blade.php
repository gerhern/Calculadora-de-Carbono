@extends('app')
@section('content')

    {{-- div principal --}}
    <div class="flex flex-col text-white">

        {{-- Titulo principal --}}
        <div class="w-full bg-feather">

            <x-hammenu></x-hammenu>
            <h1 class="text-center lg:text-6xl text-4xl font-semibold my-40">Medios alternativos de transporte</h1>

        </div>

        {{-- Resultado de comparacion de carbono --}}
        @isset($vehicleCarbonFootprint)
            {{-- Resultados --}}
            <div class="bg-feather">
                
                <div class="lg:w-11/12 w-10/12 mx-auto border border-black bg-black shadow-md bg-opacity-20 my-8 rounded-md">
                    <h3 class="lg:text-5xl text-3xl text-center my-16  py-2 font-medium italic">¿Sabías que...?</h3>
                    {{-- comparacion vs grafica --}}
                    <div class="py-7">
                        {{-- vehiculo seleccionado --}}
                        <div class="flex">
                            <x-svg-vehicles></x-svg-vehicles>
                            <div class="p-1 bg-gradient-to-r from-feather via-marine to-forest w-11/12 h-7 my-1 rounded-r-full uppercase font-bold text-center border border-forest">
                                <p>{{ $vehicleCarbonFootprint }} gramos de carbono</p>
                            </div>
                        </div>

                        {{-- Tren --}}
                        <div class="flex">
                            <x-svg-train></x-svg-train>
                            <div class="p-1 bg-gradient-to-r from-feather to-marine my-1 rounded-r-full uppercase font-bold text-center h-7 border border-forest"
                                style="width: 23.98%">
                                <p>{{ $trainCarbonFootprint }} gramos de carbono</p>
                            </div>

                        </div>

                        {{-- bici --}}
                        <div class="flex items-center">
                            <x-svg-bicycle></x-svg-bicycle>
                            <div class="p-1 bg-feather my-1 rounded-r-full h-7 border border-forest" style="width: 2.9%">

                            </div>
                            <p class="uppercase font-bold p-1.5">{{ $bicycleCarbonFootprint }} gramos de carbono</p>
                        </div>

                    </div>

                    <p class="leading-snug lg:text-2xl text-lg text-center py-8 px-3 ">En un viaje de <span
                            class="text-forest font-bold italic">{{ $distance }}</span> km(s)</p>

                    <p class="leading-snug lg:text-2xl text-lg text-center px-3 ">si cambias tu medio de
                        transporte habitual y en su lugar usas tren ahorrarias <span
                            class="text-forest font-bold italic">{{ $trainSavedFootprint }}</span> gramos de carbono.</p>

                    <p class="leading-snug lg:text-2xl text-lg text-center px-3 ">ó</p>

                    <p class="leading-snug lg:text-2xl text-lg text-center pb-16 px-3">en su lugar usas bicicleta
                        ahorrarias <span class="text-forest font-bold italic">{{ $bicycleSavedFootprint }}</span> gramos de
                        carbono</p>
                </div>
            </div>

        @endisset

        {{-- Formulario --}}
        <div class="py-10">
            <form class="w-11/12 mx-auto bg-forest bg-opacity-30 p-10">
                <label class="text-white uppercase font-bold tracking-wide my-10">¿Cúal es el medio de transporte que más
                    usas?</label>
                {{-- radio group --}}
                <div class="flex justify-evenly py-10 ">
                    {{-- radio auto mediano diesel --}}
                    <div class="flex items-center">
                        <input class="w-5 h-5 mx-2" type="radio" name="currentVehicle" id="carMedDies" value="171"
                            checked>
                        <label for="carMedDies">Auto mediano (A diesel)</label>
                    </div>

                    {{-- radio auto mediano gas --}}
                    <div class="flex items-center">
                        <input class="w-5 h-5 mx-2" type="radio" name="currentVehicle" id="carMedGas" value="192">
                        <label for="carMedGas">Auto mediano (A gasolina)</label>
                    </div class="flex items-center">

                    {{-- radio auto chico gas --}}
                    <div class="flex items-center">
                        <input class="w-5 h-5 mx-2" type="radio" name="currentVehicle" id="carSmGas" value="96">
                        <label for="carSmGas">Auto chico (A gasolina)</label>
                    </div class="flex items-center">

                    {{-- radio moto --}}
                    <div class="flex items-center">
                        <input class="w-5 h-5 mx-2" type="radio" name="currentVehicle" id="bike" value="103">
                        <label for="bike">Motocicleta mediana</label>
                    </div>
                </div>
                {{-- range --}}
                <div id="rangeInput">
                    <label for="distance"
                        class="text-white uppercase font-bold tracking-wide my-10 justify-self-start">Distancia
                        aproximada</label>
                    <div class="flex justify-evenly py-10">
                        <input class="w-7/12 cursor-pointer" value="100" type="range" name="distance" id="distance"
                            max="1000" min="1">
                        <p id="distanceShow"> 100 km</p>
                    </div>
                </div>

                <input type="submit" value="Comenzar"
                    class="rounded-md shadow-lg bg-forest text-white mx-6 p-2 lg:text-lg hover:bg-marine transition duration-200 lg:w-1/12">

            </form>
        </div>

        {{-- Si en un viaje de {{ $distance }} kms cambias tu medio de transporte habitual por un viaje en tren ahorrarias {{ $data - $train }} gr de carbono, o por un viaje en bicicleta ahorrarias {{ $data - $bicycle }} gr de carbono. --}}

        {{-- 1 seccion informativa --}}
        <div class="bg-gradient-to-b from-marine to-forest">

            {{-- bicicleta --}}
            <div class="flex lg:flex-row flex-col items-center lg:items-start">

                {{-- info --}}
                <div class="lg:w-9/12 px-6 flex flex-col items-center">
                    <h3 class="lg:text-5xl text-3xl text-center font-medium italic my-16">La bicicleta como medio de
                        transporte
                    </h3>

                    <div class="has-tooltip w-11/12">
                        <img src="https://images.pexels.com/photos/310983/pexels-photo-310983.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940"
                            alt="Ride-bicycle" class="rounded-md shadow-2xl">
                        <x-tooltip-index text="Fotografía de: Snapwire from Pexels"></x-tooltip-index>
                    </div>

                    <div class="py-6 w-11/12 mx-auto border border-black bg-black shadow-md bg-opacity-10 my-8 rounded-md">
                        <p class="leading-tight lg:text-xl text-lg text-center py-8 px-3 ">Con el pasar de los años el uso
                            de la
                            bicicleta como medio de transporte ecológico ha tomado una mayor importancia en la movilidad y
                            la
                            salud de las personas, he aquí las principales razones por las cuales deberias pensar en
                            utilizar
                            este medio de transporte.</p>
                    </div>

                    <div class="py-6 w-11/12 mx-auto border border-black bg-black shadow-md bg-opacity-10 my-8 rounded-md">
                        <h5 class="text-2xl self-start p-3">Eficaz</h5>
                        <p class="leading-tight lg:text-xl text-lg  p-3">Una bicicleta puede cubrir de manera
                            eficiente viajes de hasta 7 km, esto es un dato importante ya que la mitad de los viajes en
                            automóvil recorren menos de 5 km, distancia que en terreno plano puede recorrer una bici de 10 a
                            20 minutos alcanzando velocidades de hasta 30 km/h.</p>

                        <p class="leading-tight lg:text-xl text-lg p-3">La bicicleta permite una flexibilidad en la
                            duración de viaje, ya que esta al ocupar menos espacio es mas fácil evitar el embotellamiento
                            vial de los viajes en automóvil.</p>

                        <p class="leading-tight lg:text-xl text-lg p-3">De la misma forma en trayectos cortos(~5 km)
                            la velocidad de la bicicleta es competitiva con la del transporte público debido a que
                            "caminar-esperar-autobús-caminar" suele tomar mas tiempo que el transporte de un punto A a un B
                            en bicicleta.</p>

                        <p class="leading-tight lg:text-xl text-lg p-3">Las bicicletas son vehículos pequeños,
                            ligeros, ecológicos y silenciosos, lo que los hace faciles de conducir y aparcar, ademas son de
                            facil manutencion ya que una bici cuesta 30-40 veces menos que un automóvil.</p>

                    </div>

                    <div class="lg:w-8/12 has-tooltip">
                        <img src="https://images.pexels.com/photos/4254893/pexels-photo-4254893.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940"
                            alt="Bicycle-parking" class="rounded-md shadow-2xl lg:block hidden">
                        <x-tooltip-index text="Fotografía de: Maarten van den Heuvel/Pexels"></x-tooltip-index>
                    </div>

                    <div class="py-6 w-11/12 mx-auto border border-black bg-black shadow-md bg-opacity-10 my-8 rounded-md">
                        <h5 class="text-2xl self-start px-8">Autónoma</h5>
                        <p class="leading-tight lg:text-xl text-lg p-3">El uso de bicicleta se puede realizar a
                            cualquier hora del día, por lo que es mas práctico que esperar por un autobús.</p>
                    </div>

                    <div class="py-6 w-11/12 mx-auto border border-black bg-black shadow-md bg-opacity-10 my-8 rounded-md">
                        <h5 class="text-2xl self-start px-8">Accesible</h5>
                        <p class="leading-tight lg:text-xl text-lg p-3">Cualquier persona con un estado de
                            salud normal puede usar bicicleta, no es necesario ser atleta: hombres, mujeres, niños y hasta
                            personas de edad avanzada pueden usarla.</p>
                    </div>

                    <div class="lg:w-8/12 has-tooltip">
                        <img src="https://images.pexels.com/photos/5820158/pexels-photo-5820158.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500"
                            alt="Bicycle-old" class="rounded-md shadow-2xl lg:block hidden w-full">
                        <x-tooltip-index text="Fotografía de: Mehmet Turgut Kirkgoz/Pexels"></x-tooltip-index>
                    </div>

                    <div class="py-6 w-11/12 mx-auto border border-black bg-black shadow-md bg-opacity-10 my-8 rounded-md">
                        <h5 class="text-2xl self-start px-8">Saludable</h5>
                        <p class="leading-tight lg:text-xl text-lg p-3">Realizar ciclismo constantemente
                            ayuda a reducir peso y quemar grasas, es un deporte de bajo impacto lo cual es ideal para
                            personas
                            con problemas de articulaciones, y ayuda a fortalecer el sistema cardiovascular.</p>
                    </div>

                    <div class="py-6 w-11/12 mx-auto border border-black bg-black shadow-md bg-opacity-10 my-8 rounded-md">
                        <h5 class="text-2xl self-start px-8">Ecológica</h5>
                        <p class="leading-tight lg:text-xl p-3">En circulación una bicicleta no emite
                            contaminantes a la atmósfera aunque durante su ciclo de vida completo desde fabricación hasta la
                            conversión en residuo la cantidad de contaminantes que genera es tan solo de 5g de
                            CO<sub>2</sub> por km*.</p>
                        <p class="leading-tight lg:text-xl text-lg p-3 ">La circulación de bicicletas reduce notablemente la
                            contaminación auditiva.</p>
                    </div>

                    <div class="lg:w-8/12 has-tooltip">
                        <img src="https://images.pexels.com/photos/763398/pexels-photo-763398.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940"
                            alt="Ride-bicycle" class="rounded-md shadow-2xl lg:block hidden w-full">
                        <x-tooltip-index text="Fotografía de: Genaro Servín/Pexels"></x-tooltip-index>
                    </div>

                    <div class="w-11/12 mx-auto border border-black bg-black shadow-md bg-opacity-10 my-8 rounded-md">
                        <p class="leading-snug lg:text-xl text-lg text-center py-8 px-3 ">Pese a la gran cantidad de
                            ventajas
                            con las que contamos al usar este medio de transporte, este no es perfecto y aun cuenta con
                            algunas
                            desventajas como es la barrera climática.</p>
                    </div>


                    <p>Fuente: Ecoticias.com <a
                            href="https://www.ecoticias.com/co2/185973/EL-uso-de-la-Bicicleta-y-el-CO2">https://www.ecoticias.com</a>
                    </p>


                </div>

                {{-- galery --}}
                <div class=" flex flex-col items-center  lg:w-3/12">

                    <h5 class=" my-10 text-3xl self-start px-8">¿No cuentas con una bicicleta en tu hogar?</h5>

                    <x-bicyclecard link="https://www.ecobici.cdmx.gob.mx/"
                        img="https://seeklogo.com/images/E/ecobici-logo-6DD51DF001-seeklogo.com.png" alt="Ecobici"
                        title="Sistema de bicicletas públicas de la Ciudad de México"
                        description="Usuarios con una suscripción pueden tomar una bicicleta y devolverla en la cicloestación más cercana a su destino en trayectos de 45 minutos.">
                    </x-bicyclecard>

                    <x-bicyclecard link="https://www.dgsgm.unam.mx/bicipuma"
                        img="https://static.wixstatic.com/media/4394a8_c5d58703be9547aeb63a1674f1efc594~mv2.png/v1/fill/w_548,h_122,al_c,q_85,usm_0.66_1.00_0.01/4394a8_c5d58703be9547aeb63a1674f1efc594~mv2.webp"
                        alt="Bicipuma" title="Sistema de prestamo de bicicletas de Ciudad Universitaria"
                        description="Sistema de transporte gratuito que fomenta la movilidad sustentable y la salud de la Comunidad Universitaria.">
                    </x-bicyclecard>

                    <x-bicyclecard link="https://www.mibici.net/"
                        img="https://www.mibici.net/site/templates/assets/images/logo-mibici-obscuro.svg" alt="MiBici"
                        title="Sistema de bicicletas públicas del Área Metropolitana de Guadalajara"
                        description="Usuarios con una suscripción pueden realizar viajes en trayectos menores a 30 minutos.">
                    </x-bicyclecard>

                    <h5 class=" my-10 text-3xl self-start px-8">¿Quieres unirte a un club de ciclistas?</h5>

                    <x-bicyclecard link="https://bicitekas.org/"
                        img="https://bicitekas.org/sites/all/themes/hermio/css/colors/black/images/logo.gif" alt="Bicitekas"
                        title="Bicitekas A.C."
                        description="Asociación de ciclistas cuyo objetivo se centra en aumentar el uso de la bicicleta en la Ciudad de México como un medio de transporte seguro, saludable y sostenible.">
                    </x-bicyclecard>

                    <x-bicyclecard link="https://www.facebook.com/muyu.bikers/"
                        img="https://scontent.fmex3-1.fna.fbcdn.net/v/t39.30808-6/222431659_247465797276063_588141798271356116_n.jpg?_nc_cat=111&ccb=1-5&_nc_sid=09cbfe&_nc_ohc=dRy1dg_tu4YAX8MqxS3&_nc_ht=scontent.fmex3-1.fna&oh=5c9433800fd3d370650ba932eee9cf3f&oe=616A0061"
                        alt="Muyu-Bikers" title="Club de ciclismo Muyu Bikers"
                        description="Grupo de ciclismo nocturno con salidas cada jueves y domingo."></x-bicyclecard>

                    <h5 class=" my-10 text-3xl self-start px-8">¿No sabes andar en bicicleta?</h5>

                    <x-bicyclecard
                        link="http://data.sedema.cdmx.gob.mx/mueveteenbici/index.php?option=com_content&view=article&id=70&Itemid=75"
                        img="http://data.sedema.cdmx.gob.mx/mueveteenbici/images/stories/biciescuela_chapu.jpg"
                        alt="Bicientrenate" title="BiciEntrénate"
                        description="Programa diseñado para que familias puedan asistir a mejorar sus habilidades sobre la bicicleta o aprender a andar en ella.">
                    </x-bicyclecard>

                    <h5 class=" my-10 text-3xl self-start px-8">Apps para ciclistas</h5>

                    <x-bicyclecard link="https://www.dezba.mx/"
                        img="https://static.wixstatic.com/media/cc6c6c_fdc23fd45a6c4be687813179fc9a02e0~mv2.png/v1/fill/w_727,h_132,al_c,q_85,usm_0.66_1.00_0.01/cc6c6c_fdc23fd45a6c4be687813179fc9a02e0~mv2.webp"
                        alt="Dezba" title="Dezba"
                        description="Aplicación de renta de bicicletas eléctricas o mecánicas compartidas por subscripción mensual o anual.">
                    </x-bicyclecard>

                    <x-bicyclecard link="https://www.strava.com/"
                        img="https://www.bikester.es/on/demandware.static/-/Library-Sites-bikester/default/dw1ee90037/Blog/Logo_Strava.png"
                        alt="Strava" title="Strava"
                        description="Aplicación de monitoreo de velocidad, distancia, calorias quemadas y rutas de ciclismo con la posibilidad de mostrar un ranking de tiempos de ruta entre ciclistas.">
                    </x-bicyclecard>

                    <x-bicyclecard link="https://maphub.net/Proyecto-BISIGET/mapciclovias"
                        img="https://img.maspormas.com/2016/07/portadaparaweb-05-16.jpg" alt="Ciclovia"
                        title="Infraestructura ciclista de México"
                        description="Aplicación que muestra mapas de la infraestructura ciclista de la República Mexicana con fotografías, longitudes y variedad de datos adicionales.">
                    </x-bicyclecard>
                </div>

            </div>
        </div>
    </div>
    <script>
        var range = document.getElementById("distance");
        range.oninput = function() {
            document.getElementById("distanceShow").innerHTML = this.value + " km";
        };
    </script>
@endsection
