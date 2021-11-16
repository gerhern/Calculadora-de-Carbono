@extends('app')
@section('content')

    {{-- div principal --}}
    <div class="flex flex-col text-white">

        {{-- Imagen y titulo principal --}}
        <x-cover-page img="https://visitachihuahua.com/wp-content/uploads/2019/12/chepe-regional-1.jpg"
            coverText="Cálculo y compensación de huella de carbono"
            tooltipText="Ferrocarril Chihuahua al Pacífico, Fotografia de: SECTUR Chihuahua/México desconocido.">
        </x-cover-page>

        {{-- div para mostrar informacion --}}
        <div class="bg-feather">

            {{-- 1er seccion informativa --}}
            <h3 class="lg:text-5xl text-3xl text-center my-40 py-2 font-medium italic">¿Qué es la huella de carbono?</h3>

            {{-- Carrusel --}}
            <div class=" w-11/12 mx-auto rounded-md py-8 bg-gradient-to-b from-white to-feather bg-opacity-20 shadow-2xl">

                {{-- slide1 --}}
                <x-carrusel-slide slide="slide1"
                    img1="https://interactivo.eluniversal.com.mx/nota/contingencia-cdmx-antes-despues/img/contingencia-cdmx-1.jpg"
                    img2="https://interactivo.eluniversal.com.mx/nota/contingencia-cdmx-antes-despues/img/contingencia-cdmx-2.jpg"
                    tooltip="Fotos: Archivo/Iván Stephens/EL UNIVERSAL(2016-2019)/En tan solo 3 años ha aumentado drásticamente la cantidad de partículas PM2.5 y Ozono en la Zona Metropolitana del Valle de México.">
                </x-carrusel-slide>

                {{-- slide2 --}}
                <x-carrusel-slide slide="slide2"
                    img1="https://imagenes.elpais.com/resizer/o3opLyhPJLv0ieO9ygnWxeQjFYM=/1960x0/cloudfront-eu-central-1.images.arcpublishing.com/prisa/7WACEYXO6WXG62ZLVT6HDLVLVQ.jpg"
                    img2="https://www.infobae.com/new-resizer/1Kf-Yimka6sa5i8Gs9RwbwtB6kI=/992x441/filters:format(jpg):quality(85)/s3.amazonaws.com/arc-wordpress-client-uploads/infobae-wp/wp-content/uploads/2019/08/13164028/metzabok-selva-lacandona-2.jpg"
                    tooltip="Fotos: SANTIAGO ARAU y Facebook Damián Sánchez/Uno de los estados más afectados es el de Chiapas cuyos territorios como la selva Lacandona en el municipio de Marqués de Comillas o la Laguna de Metzabok, se han visto gravemente alterados.">
                </x-carrusel-slide>

                {{-- slide3 --}}
                <x-carrusel-slide slide="slide3"
                    img2="https://cdn.cdmxenlared.com/wp-content/uploads/2021/04/extinto-el-glaciar-de-Ayoloco-en-el-Iztaccihuatl-scaled.jpg"
                    img1="https://pbs.twimg.com/media/Ezl7GY5UcAEeMKt?format=jpg&name=4096x4096"
                    tooltip="Fotos: María Paula Martínez/ UNAM Especialistas del Instituto de Geofísica de la UNAM declaran extinto el glaciar de Ayoloco en el Iztaccíhuatl. Colocan placa de la deshonra.">
                </x-carrusel-slide>

            </div>
            {{-- fin carrusel --}}

            <div class="flex flex-col">

                <div class="lg:w-11/12 w-10/12 mx-auto border border-black bg-black shadow-md bg-opacity-10 my-8 rounded-md">
                    <p class="leading-snug lg:text-2xl text-lg py-8 px-3 ">La
                        huella de carbono es una métrica ambiental que calcula la totalidad de emisiones de gases de efecto
                        invernadero (GEI) generadas directa o indirectamente por una persona, organizacion, empresa o
                        incluso productos o servicios.</p>

                    <p class="leading-snug lg:text-2xl text-lg py-8 px-3 ">La huella de carbono se mide en masa de
                        CO<sub>2</sub> equivalente, el CO<sub>2</sub> equivalente se trata de equiparar los otros gases de
                        efecto invernadero que son producidos a la par que el CO<sub>2</sub>, esto debido a que el
                        CO<sub>2</sub> es el principal y más abundante de estos gases.</p>

                    <p class="leading-snug lg:text-2xl text-lg py-8 px-3 ">La importancia de conocer nuestra huella de carbono radica en la posibilidad de cuantificar con mayor certeza la forma en la que los gases de efecto invernadero contribuyen al calentamiento global y de esta forma implementar medidas para contrarrestar los
                        efectos.
                    </p>

                    <p class="leading-snug lg:text-2xl text-lg pt-4 pb-16 px-3">Entre los efectos del cambio climático se encuentran graves consecuencias como cambios en los ecosistemas, fenómenos
                        meteorológicos extremos, migraciones masivas, extinción de especies, acidificación y subida del
                        nivel del mar, etc.</p>
                </div>

            </div>
        </div>


        {{-- 2da seccion informativa --}}
        <div class="bg-gradient-to-b from-marine to-forest">

            <h3 class="lg:text-5xl text-3xl text-center pt-40 px-6 font-medium italic">¿Cómo calcular tu huella de carbono?
            </h3>

            <div class="flex flex-col pb-40">
                <div class="w-3/4 mx-auto my-8 rounded-md">
                    <p class="leading-snug lg:text-xl text-lg py-8
                    pb-8">Para poder realizar
                        una estimación sobre tu huella de carbono personal te recomendamos los
                        siguientes sitios:</p>
                </div>

                <div class="flex  items-center justify-around">

                    {{-- div para cards de calculdaoras --}}
                    <div class="lg:flex lg:justify-evenly lg:my-4">

                        {{-- div card 1 --}}
                        <x-calculatorcard link="https://footprintcalculator.henkel.com/mx"
                            img="https://footprintcalculator.henkel.com/assets/images/HENKEL.png" alt="Henkel-Logo"
                            title="Calculadora de huella de carbono Henkel" description="Calculadora creada
                                        por la empresa alemana de productos de limpieza Henkel"></x-calculatorcard>


                        {{-- div card 2 --}}
                        <x-calculatorcard link="https://www.footprintcalculator.org/home/es"
                            img="https://www.footprintcalculator.org/assets/images/logo/logo-GFN-white.png" alt="GFN-Logo"
                            title="Calculadora de huella de carbono de Global Footprint Network"
                            description="Calculadora creada por la ONG de protección al medio ambiente Global Footprint Network">
                        </x-calculatorcard>

                        {{-- div card 3 --}}
                        <div
                            class="border border-black bg-black bg-opacity-30 rounded-md shadow-2xl p-3 my-4 lg:w-3/12 w-5/6 mx-auto lg:flex lg:flex-col lg:justify-evenly hover:bg-marine transition duration-200">

                            <a href="#">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-3/4 mx-auto my-2 cursor-pointer lg:w-2/4"
                                    fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z" />
                                </svg>

                                <h3 class="text-xl font-semibold lg:text-2xl lg:my-4 lg:text-center">Calculadora de la
                                    Agencia Reguladora de Transporte Ferroviario</h3>

                                <p class="lg:text-lg lg:leading-none lg:mb-6 lg:text-center lg:px-2">Calculadora en proceso
                                    de creación, disculpe las molestias </p>
                            </a>
                        </div>

                    </div>
                </div>

                <x-button route="{{ route('calculate') }}" text="Si ya cuentas con tu huella de carbono da click aquí">
                </x-button>

            </div>
        </div>
    </div>

    <script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.4.1.min.js"></script>
    <script src="{{ asset('js/slide.js') }}"></script>
@endsection
