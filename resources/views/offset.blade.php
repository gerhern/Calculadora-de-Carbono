@extends('app')
@section('content')

    {{-- div principal --}}
    <div class="flex flex-col text-white">

        {{-- Imagen y titulo principal --}}
        <div class="bg-center bg-cover w-full"
            style="background-image: url('https://images.pexels.com/photos/7111160/pexels-photo-7111160.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940')">

            <x-hammenu></x-hammenu>
            <h1 class="text-center lg:text-6xl text-4xl font-semibold my-60">Alternativas para compensar la huella de carbono
            </h1>

        </div>

        {{-- div para mostrar informacion --}}
        {{-- 1er seccion informativa --}}
        <div class="bg-feather">

            <h3 class="lg:text-5xl text-3xl text-center my-20 py-2 font-medium italic">¿Por qué conocer y compensar nuestra
                huella de carbono?</h3>

            <div class="flex flex-col">

                <div class="flex lg:flex-row flex-col items-center lg: justify-around">
                    <img src="https://images.pexels.com/photos/9252093/pexels-photo-9252093.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940"
                        alt="Contaminación" class="lg:w-1/4 w-3/4 rounded-md shadow-2xl my-4 lg:my-0 hidden lg:block">

                    <img src="https://images.pexels.com/photos/7656332/pexels-photo-7656332.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940"
                        alt="Reforestación" class="lg:w-1/4 w-3/4 rounded-md shadow-2xl my-4 lg:my-0">

                    <img src="https://images.pexels.com/photos/2229887/pexels-photo-2229887.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940"
                        alt="Reforestación" class="lg:w-1/4 w-3/4 rounded-md shadow-2xl my-4 lg:my-0 hidden lg:block">

                </div>

                <div class="w-3/4 mx-auto border border-black bg-black shadow-md bg-opacity-10 my-8 rounded-md">
                    <p class="leading-snug lg:text-2xl text-lg text-center py-8 px-3 ">Conocer el tamaño de nuestra huella
                        de carbono es importante
                        ya que nos permite concientizar y modificar nuestros habitos para conseguir reducir las emisiones de
                        CO<sub>2</sub> asociadas a nuestro estilo de vida.</p>

                    <p class="leading-snug lg:text-2xl text-lg text-center pt-8 pb-16 px-3">Compensar nuestra huella de
                        carbono consiste en la
                        aportacion voluntaria de una cantidad económica variable a diversos proyectos de reforestación,
                        generación y ahorro
                        de energía sustentables o tratamiento de residuos para así contribuir con el medio ambiente.</p>
                </div>

            </div>
        </div>


        {{-- 2da seccion informativa --}}
        <div class="bg-gradient-to-b from-marine to-forest">

            <h3 class="lg:text-5xl text-3xl text-center pt-20 px-6 font-medium italic">¿Cómo compensar tu huella de carbono?
            </h3>

            <div class="flex flex-col">
                <div class="w-3/4 mx-auto my-8 rounded-md">
                    <p class="leading-snug lg:text-xl text-lg text-center py-8
                    pb-8">Para realizar una
                        compensación de tu huella de carbono
                        personal te recomendamos las siguientes opciones:</p>
                </div>

                <div class="flex  items-center justify-around">

                    {{-- div para cards de calculdaoras --}}
                    <div class="lg:flex lg:justify-evenly lg:my-4">

                        {{-- div card 1 --}}
                        <x-calculatorcard link="https://offset.climateneutralnow.org/AllProjects"
                            img="https://unfccc.int/themes/custom/unfccc/images/logo.png" alt="UNCC-Logo"
                            title="Plataforma de compensación de las Naciones Unidas"
                            description="Plataforma de compensacion en proyectos de mitigacion de Gases de Efecto Invernadero (GEI) alrededor de todo el mundo">
                        </x-calculatorcard>

                        {{-- div card 2 --}}
                        <x-calculatorcard link="https://www.reforestamosmexico.org/adoptaunarbol"
                            img="https://static.wixstatic.com/media/b1748a_e68a34ab791443259e1dce6cd0cc520e~mv2.png/v1/fill/w_222,h_117,al_c,lg_1,q_85/221x116.webp"
                            alt="Reforestamos-Logo" title="Adopta un arbol con
                                Reforestamos México" description="Mediante una contribución
                                económica mínima adopta un árbol durante un periodo de 3 años y recibe un certificado de
                                adopción">
                        </x-calculatorcard>
                    </div>
                </div>

                {{-- Tips --}}
                <div class="my-2 lg:my-20">
                    <h3 class="text-xl lg:text-4xl text-center my-4 font-semibold">¿Cómo reducir tu huella de carbono?
                    </h3>

                    {{-- div de cards de tips --}}
                    <div class="flex flex-col justify-evenly items-center lg:my-4 lg:flex-wrap">
                        {{-- Card 1 --}}
                        <x-tipcard
                            img="https://images.pexels.com/photos/542619/pexels-photo-542619.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500"
                            alt="led-light" title="Usa focos ahorradores"
                            description="Realiza el cambio a focos ahorradores de energía de luz LED de bajo consumo en lugar de los tradicionales focos incandecentes.">
                        </x-tipcard>

                        {{-- Card 2 --}}
                        <x-tipcard
                            img="https://images.pexels.com/photos/218445/pexels-photo-218445.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940"
                            alt="wire" title="Si no lo usas desconéctalo"
                            description="Diversos aparatos eléctricos como los cargadores de teléfonos celulares siguen consumiendo energía incluso cuando no se utilizan.">
                        </x-tipcard>

                        {{-- Card 3 --}}
                        <x-tipcard
                            img="https://images.pexels.com/photos/2850347/pexels-photo-2850347.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940"
                            alt="panel" title="Usa energía renovable"
                            description="Usa calentador de agua solar ó paneles solares para generar energía limpia para tu hogar y asi ahorrar en gas ó eléctricidad.">
                        </x-tipcard>

                        {{-- Card 4 --}}
                        <x-tipcard
                            img="https://images.pexels.com/photos/6630622/pexels-photo-6630622.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500"
                            alt="bicycle" title="Usa menos el automóvil"
                            description="Reduce emisiones
                    compartiendo viajes en automóvil y reduciendo su uso en medida de lo posible, asi como caminando más o usar bicicleta como alternativa.">
                        </x-tipcard>

                        {{-- Card 5 --}}
                        <x-tipcard
                            img="https://images.pexels.com/photos/4668356/pexels-photo-4668356.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940"
                            alt="recycle" title="Recicla" description="Reduce la cantidad de desechos que generas<br>
                        Reutiliza para aumentar la durabilidad de los objetos y
                        disminuir la cantidad de basura<br>
                        Recicla para aprovechar materiales y que crear nuevos
                        productos."></x-tipcard>

                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
