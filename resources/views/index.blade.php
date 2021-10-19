@extends('app')
@section('content')

    {{-- div principal --}}
    <div class="flex flex-col text-white">

        {{-- Imagen y titulo principal --}}
        <div class="lg:bg-bottom bg-cover w-full"
            style="background-image: url('https://visitachihuahua.com/wp-content/uploads/2019/12/chepe-regional-1.jpg')" title="Ferrocarril Chihuahua al Pacífico, Fotografia de: SECTUR Chihuahua/México desconocido">

            <x-hammenu></x-hammenu>
            <h1 class="text-center lg:text-6xl text-4xl font-semibold my-72 py-12 bg-black bg-opacity-20">Cálculo y compensación de huella de carbono</h1>

        </div>

        {{-- div para mostrar informacion --}}
        {{-- 1er seccion informativa --}}
        <div class="bg-feather">

            <h3 class="lg:text-5xl text-3xl text-center my-40 py-2 font-medium italic">¿Qué es la huella de carbono?</h3>

            {{-- Carrusel --}}
            <div class=" w-11/12 mx-auto rounded-md py-8 bg-gradient-to-b from-white to-feather bg-opacity-20 shadow-2xl">

                {{-- slide1 --}}
                <div id="slide1" class="container">
                    <div class="flex justify-evenly" title="Fotos: Archivo/Iván Stephens/EL UNIVERSAL(2016-2019)/En tan solo 3 años ha aumentado drásticamente la cantidad de partículas PM2.5 y Ozono en la Zona Metropolitana del Valle de México">
                        <img src="https://interactivo.eluniversal.com.mx/nota/contingencia-cdmx-antes-despues/img/contingencia-cdmx-1.jpg"
                            class="w-5/6 lg:w-5/12 block mx-auto rounded-md shadow-2xl">

                        <img src="https://interactivo.eluniversal.com.mx/nota/contingencia-cdmx-antes-despues/img/contingencia-cdmx-2.jpg"
                            class="w-5/12 mx-auto rounded-md shadow-2xl hidden lg:block">
                    </div>
                </div>

                {{-- slide2 --}}
                <div id="slide2" class="container">
                    <div class="flex justify-evenly" title="Fotos: SANTIAGO ARAU/Deforestación en la selva Lacandona en el municipio de Marqués de Comillas, Chiapas y Laguna de Metzabok antes y después de la atípica sequía Foto:  Facebook Damián Sánchez .
                    ">
                        <img src="https://imagenes.elpais.com/resizer/o3opLyhPJLv0ieO9ygnWxeQjFYM=/1960x0/cloudfront-eu-central-1.images.arcpublishing.com/prisa/7WACEYXO6WXG62ZLVT6HDLVLVQ.jpg"
                            class="w-5/6 lg:w-5/12 block mx-auto rounded-md shadow-2xl">

                        <img src="https://www.infobae.com/new-resizer/1Kf-Yimka6sa5i8Gs9RwbwtB6kI=/992x441/filters:format(jpg):quality(85)/s3.amazonaws.com/arc-wordpress-client-uploads/infobae-wp/wp-content/uploads/2019/08/13164028/metzabok-selva-lacandona-2.jpg"
                            class="w-5/12 mx-auto rounded-md shadow-2xl hidden lg:block">
                    </div>
                </div>

                {{-- slide3 --}}
                <div id="slide3" class="container">
                    <div class="flex justify-evenly" title="Fotos: María Paula Martínez/ UNAM Especialistas del Instituto de Geofísica de la UNAM declaran extinto el glaciar de Ayoloco en el Iztaccíhuatl. Colocan placa de la deshonra.">
                        <img src="https://cdn.cdmxenlared.com/wp-content/uploads/2021/04/extinto-el-glaciar-de-Ayoloco-en-el-Iztaccihuatl-scaled.jpg"
                            class="w-5/6 lg:w-5/12 block mx-auto rounded-md shadow-2xl">

                        <img src="https://pbs.twimg.com/media/Ezl7GY5UcAEeMKt?format=jpg&name=4096x4096"
                            class="w-5/12 mx-auto rounded-md shadow-2xl hidden lg:block">
                    </div>
                </div>

            </div>
            {{-- fin carrusel --}}

            <div class="flex flex-col">

                <div class="w-3/4 mx-auto border border-black bg-black shadow-md bg-opacity-10 my-8 rounded-md">
                    <p class="leading-snug lg:text-2xl text-lg text-center py-8 px-3 ">La
                        huella de carbono es una forma de medir la cantidad de emisiones de gases de efecto invernadero que
                        son
                        producidas y liberadas a la atmósfera directa o indirectamente por una organización o individuo.</p>

                    <p class="leading-snug lg:text-2xl text-lg text-center pt-8 pb-16 px-3">Estos gases contribuyen al
                        cambio climático el cual tiene consecuencias como cambios en los ecosistemas, fenómenos
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
                    <p class="leading-snug lg:text-xl text-lg text-center py-8
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

                <a href="{{ route('calcular') }}"
                    class="lg:mx-auto mx-4 rounded-md shadow-md bg-forest text-white text-center lg:text-2xl text-lg hover:bg-marine transition duration-200 p-4 mt-16 border border-marine hover:border-feather ">Si
                    ya
                    cuentas con tu huella de carbono da click aquí</a>
            </div>
        </div>
    </div>

    <script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.4.1.min.js"></script>
    <script src="{{ secure_asset('js/slide.js') }}"></script>
@endsection
