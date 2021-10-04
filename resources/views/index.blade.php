@extends('app')
@section('content')

    {{-- div principal --}}
    <div class="flex flex-col text-white">

        {{-- Imagen y titulo principal --}}
        <div class="bg-center bg-cover w-full"
            style="background-image: url('https://images.pexels.com/photos/5641969/pexels-photo-5641969.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940')">

            <x-hammenu></x-hammenu>
            <h1 class="text-center lg:text-6xl text-4xl font-semibold my-72">Cálculo y compensación de huella de carbono</h1>

        </div>

        {{-- div para mostrar informacion --}}
        {{-- 1er seccion informativa --}}
        <div class="bg-feather">

            <h3 class="lg:text-5xl text-3xl text-center my-40 py-2 font-medium italic">¿Qué es la huella de carbono?</h3>

            <div class="flex flex-col">

                <div class="flex lg:flex-row flex-col items-center lg: justify-around">
                    <img src="https://images.pexels.com/photos/9252093/pexels-photo-9252093.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940"
                        alt="Contaminación" class="lg:w-1/4 w-3/4 rounded-md shadow-2xl my-4 lg:my-0 hidden lg:block">

                    <img src="https://images.pexels.com/photos/1072824/pexels-photo-1072824.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940"
                        alt="Reforestación" class="lg:w-1/4 w-3/4 rounded-md shadow-2xl my-4 lg:my-0">

                    <img src="https://images.pexels.com/photos/2229887/pexels-photo-2229887.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940"
                        alt="Reforestación" class="lg:w-1/4 w-3/4 rounded-md shadow-2xl my-4 lg:my-0 hidden lg:block">

                </div>

                <div class="w-3/4 mx-auto border border-black bg-black shadow-md bg-opacity-10 my-8 rounded-md">
                <p class="leading-snug lg:text-2xl text-lg text-center py-8 px-3 ">La
                    huella de carbono es una forma de medir la cantidad de emisiones de gases de efecto invernadero que son
                    producidas y liberadas a la atmósfera directa o indirectamente por una organización o individuo.</p>

                    <p class="leading-snug lg:text-2xl text-lg text-center pt-8 pb-16 px-3">Estos gases contribuyen al cambio climático el cual tiene consecuencias como cambios en los ecosistemas, fenómenos meteorológicos extremos, migraciones masivas, extinción de especies, acidificación y subida del nivel del mar, etc.</p>
                </div>

            </div>
        </div>


        {{-- 2da seccion informativa --}}
        <div class="bg-gradient-to-b from-marine to-forest">

            <h3 class="lg:text-5xl text-3xl text-center pt-40 px-6 font-medium italic">¿Cómo calcular tu huella de carbono?</h3>

            <div class="flex flex-col pb-40">
                <div class="w-3/4 mx-auto my-8 rounded-md">
                        <p class="leading-snug lg:text-xl text-lg text-center py-8
                    pb-8">Para poder realizar una estimación sobre tu huella de carbono personal te recomendamos los
                    siguientes sitios:</p>
                </div>

                <div class="flex  items-center justify-around">

                    {{-- div para cards de calculdaoras --}}
                    <div class="lg:flex lg:justify-evenly lg:my-4">

                        {{-- div card 1 --}}
                        <x-calculatorcard 
                            link="https://footprintcalculator.henkel.com/mx" 
                            img="https://footprintcalculator.henkel.com/assets/images/HENKEL.png" 
                            alt="Henkel-Logo" 
                            title="Calculadora de huella de carbono Henkel" 
                            description="Calculadora creada
                            por la empresa alemana de productos de limpieza Henkel"></x-calculatorcard>
                       

                        {{-- div card 2 --}}
                        <x-calculatorcard 
                            link="https://www.footprintcalculator.org/home/es" 
                            img="https://www.footprintcalculator.org/assets/images/logo/logo-GFN-white.png" 
                            alt="GFN-Logo" 
                            title="Calculadora de huella de carbono de Global Footprint Network" 
                            description="Calculadora creada por la ONG de protección al medio ambiente Global Footprint Network"></x-calculatorcard>
                        
                        {{-- div card 3 --}}
                        <div
                            class="border border-black bg-black bg-opacity-30 rounded-md shadow-2xl p-3 my-4 lg:w-3/12 w-5/6 mx-auto lg:flex lg:flex-col lg:justify-evenly hover:bg-marine transition duration-200">

                            <a href="#">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-3/4 mx-auto my-2 cursor-pointer lg:w-2/4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z" />
                                  </svg>
                                
                                <h3 class="text-xl font-semibold lg:text-2xl lg:my-4 lg:text-center">Calculadora de la Agencia Reguladora de Transporte Ferroviario</h3>

                                <p class="lg:text-lg lg:leading-none lg:mb-6 lg:text-center lg:px-2">Calculadora en proceso de creación, disculpe las molestias </p>
                            </a>
                        </div>

                    </div>
                </div>

                <a href="{{ route('calcular') }}"
                class="lg:mx-auto mx-4 rounded-md shadow-md bg-forest text-white text-center lg:text-2xl text-lg hover:bg-marine transition duration-200 p-4 mt-16 ">Si ya
                cuentas con tu huella de carbono da click aquí</a>
            </div>
        </div>
    </div>
@endsection
