@extends('app')
@section('content')
    {{-- div principal --}}
    <div class="flex flex-col">

        {{-- Imagen y titulo principal --}}

        <div class="bg-center bg-cover w-full has-tooltip flex "
            style="background-image: url('https://visitachihuahua.com/wp-content/uploads/2019/12/chepe-regional-1.jpg')">
            <div class="w-full h-full bg-gradient-to-b from-primary-Color via-transparent to-transparent">
                <h1 class="title--h5">Cálculo y compensación <br>de<br> huella de carbono
                </h1>

                <x-tooltip-index
                    text="Ferrocarril Chihuahua al Pacífico, Fotografia de: SECTUR Chihuahua/México desconocido.">
                </x-tooltip-index>
            </div>
        </div>

        {{-- div para mostrar informacion --}}
        <div>

            {{-- 1er seccion informativa --}}
            <div class="w-10/12 mx-auto my-8">
                <h3 class="subtitle--first mb-8">¿Qué es la huella de carbono?</h3>
                <p class="body--second">La
                    huella de carbono es una métrica ambiental que calcula la totalidad de emisiones de gases de efecto
                    invernadero (GEI), generadas directa o indirectamente por una persona, organizacion, empresa o
                    incluso productos o servicios.</p>

                <p class="body--second">La huella de carbono se mide en masa de
                    CO<sub>2</sub> equivalente (CO<sub>2</sub>-eq), que trata de equiparar los otros gases de
                    efecto invernadero que son producidos a la par que el CO<sub>2</sub>, esto debido a que el
                    CO<sub>2</sub> es el principal y más abundante de estos gases.</p>

                <p class="body--second">La importancia de conocer nuestra huella de carbono radica en la posibilidad de
                    cuantificar con mayor certeza la forma en la que los gases de efecto invernadero contribuyen al
                    calentamiento global y de esta forma implementar medidas para contrarrestar los
                    efectos.
                </p>

                <p class="body--second">Entre los efectos del cambio climático se encuentran graves consecuencias como
                    cambios en los ecosistemas, fenómenos
                    meteorológicos extremos, migraciones masivas, extinción de especies, acidificación y subida del
                    nivel del mar, etc.</p>
            </div>

            {{-- Carrusel --}}
            <div class="flex flex-col items-center">
                <div class="w-11/12 h-60 rounded-md bg-cover bg-center flex items-end my-4"
                    style="background-image: url('https://interactivo.eluniversal.com.mx/nota/contingencia-cdmx-antes-despues/img/contingencia-cdmx-2.jpg')">

                    <p class="img--tooltip px-4 opacity-0 hover:opacity-100">Foto: Archivo/Iván Stephens/EL
                        UNIVERSAL(2016-2019)/En tan solo 3 años ha aumentado drásticamente la
                        cantidad de partículas PM2.5 y Ozono en la Zona Metropolitana del Valle de México.</p>
                </div>

                <div class="w-11/12 h-60 rounded-md bg-cover bg-center flex items-end my-4"
                    style="background-image: url('https://imagenes.elpais.com/resizer/o3opLyhPJLv0ieO9ygnWxeQjFYM=/1960x0/cloudfront-eu-central-1.images.arcpublishing.com/prisa/7WACEYXO6WXG62ZLVT6HDLVLVQ.jpg')">

                    <p class="img--tooltip px-4 opacity-0 hover:opacity-100">Foto: SANTIAGO ARAU/Uno de los estados más
                        afectados es el de Chiapas cuyos territorios como la selva Lacandona en el municipio de Marqués de
                        Comillas se ha visto gravemente alterado.</p>
                </div>

                <div class="w-11/12 h-60 rounded-md bg-cover bg-center flex items-end my-4"
                    style="background-image: url('https://cdn.cdmxenlared.com/wp-content/uploads/2021/04/extinto-el-glaciar-de-Ayoloco-en-el-Iztaccihuatl-scaled.jpg')">

                    <p class="img--tooltip px-4 opacity-0 hover:opacity-100">Foto: María Paula Martínez/ UNAM Especialistas
                        del Instituto de Geofísica de la UNAM declaran extinto el glaciar de Ayoloco en el Iztaccíhuatl.
                        Colocan placa de la deshonra.</p>
                </div>
            </div>


        </div>



        {{-- 2da seccion informativa --}}
        <div>
            <h3 class="subtitle--first w-10/12 mx-auto">¿Cómo calcular tu huella de carbono?</h3>
            <p class="body--second w-10/12 mx-auto my-4">Para poder realizar una estimación sobre tu huella de carbono
                personal te recomendamos los siguientes sitios:</p>

            {{-- div para cards de calculdaoras --}}
            <div class="lg:flex lg:justify-evenly lg:my-4">

                {{-- div card 1 --}}
                <x-calculatorcard link="https://footprintcalculator.henkel.com/mx"
                    img="https://footprintcalculator.henkel.com/assets/images/HENKEL.png" alt="Henkel-Logo"
                    description="Calculadora de huella de carbono Henkel, empresa alemana de productos de limpieza">
                </x-calculatorcard>


                {{-- div card 2 --}}
                <x-calculatorcard link="https://www.footprintcalculator.org/home/es"
                    img="https://www.footprintcalculator.org/assets/images/logo/logo-GFN-white.png" alt="GFN-Logo"
                    title="Calculadora de huella de carbono de Global Footprint Network"
                    description="Calculadora creada por la ONG de protección al medio ambiente Global Footprint Network">
                </x-calculatorcard>

                {{-- div card 3 --}}

                <div class="border-2 border-primary-Color rounded-md my-4 w-5/6 mx-auto">
                    <a href="{{ route('transport') }}" class="flex justify-evenly items-center py-6">
                        <img src="https://raw.githubusercontent.com/mxabierto/assets/master/img/logos/artf.png" alt="artg-logo" class="w-28 h-16 my-2 cursor-pointer lg:w-2/4">
                        <p class="text--calculator w-2/5 text-[10px]">Calculadora de la agencia reguladora de trasporte
                            ferroviario
                            Calculadora de CO2, generada a partir de viajes constates
                        </p>
                    </a>

                </div>

            </div>

            <p class="subtitle--first my-8 w-11/12 mx-auto leading-none text-base"> ¿Sabes cuantos arboles harian falta para compensar tu huella de carbono? Si quieres saberlo...</p>

                <a href="{{ route('calculate') }}"
                    class="w-11/12 border-2 border-primary-Color text-primary-Color text-center mx-auto py-3 my-8 block rounded font-medium">Da click aquí</a>
            
            
        </div>
    </div>

    <script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.4.1.min.js"></script>
    <script src="{{ asset('js/slide.js') }}"></script>
@endsection
