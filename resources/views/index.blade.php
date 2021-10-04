@extends('app')
@section('content')

    {{-- div principal --}}
    <div class="flex flex-col text-white">

        {{-- Imagen y titulo principal --}}
        <div class="bg-center bg-cover w-full"
            style="background-image: url('https://images.pexels.com/photos/5641969/pexels-photo-5641969.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940')">

            <h1 class="text-center text-6xl font-semibold my-72">Cálculo y compensación de huella de carbono</h1>

        </div>

        {{-- div para mostrar informacion --}}

        {{-- 1er seccion informativa --}}
        <div class="bg-feather">

            <h3 class="text-5xl text-center my-40 py-2 font-medium italic">¿Qué es la huella de carbono?</h3>

            <div class="flex flex-col">

                <div class="flex  items-center justify-around">
                    <img src="https://images.pexels.com/photos/9252093/pexels-photo-9252093.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940"
                        alt="Contaminación" class="w-1/4 rounded-md shadow-2xl">

                    <img src="https://images.pexels.com/photos/1072824/pexels-photo-1072824.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940"
                        alt="Reforestación" class="w-1/4 rounded-md shadow-2xl">

                    <img src="https://images.pexels.com/photos/2229887/pexels-photo-2229887.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940"
                        alt="Reforestación" class="w-1/4 rounded-md shadow-2xl">

                </div>

                <div class="w-3/4 mx-auto border border-black bg-black shadow-md bg-opacity-10 my-8 rounded-md">
                <p class="leading-snug text-2xl text-center py-8  ">La
                    huella de carbono es una forma de medir la cantidad de emisiones de gases de efecto invernadero que son
                    producidas y liberadas a la atmósfera directa o indirectamente por una organización o individuo.</p>

                    <p class="leading-snug text-2xl text-center pt-8 pb-16">Lorem ipsum dolor sit amet
                        consectetur adipisicing elit. Consectetur quaerat dolores consequatur saepe dolore quidem, ab illo
                        eaque cupiditate eos. Porro autem voluptatem ex doloribus eius nostrum! Itaque, molestiae velit.</p>
                </div>

            </div>
        </div>


        {{-- 2da seccion informativa --}}
        <div class="bg-gradient-to-b from-marine to-forest">

            <h3 class="text-5xl text-center pt-40 font-medium italic">¿Cómo calcular tu huella de carbono?</h3>

            <div class="flex flex-col pb-40">
                <div class="w-3/4 mx-auto my-8 rounded-md">
                        <p class="leading-snug text-xl text-center py-8
                    pb-8">Para poder realizar una estimación sobre tu huella de carbono personal te recomendamos los
                    siguientes sitios:</p>
                </div>

                <div class="flex  items-center justify-around">

                    {{-- div para cards de calculdaoras --}}
                    <div class="lg:flex lg:justify-evenly lg:my-4">

                        {{-- div card 1 --}}
                        <div
                            class="border border-black bg-black bg-opacity-30 rounded-md shadow-2xl p-2 lg:w-5/12 lg:flex lg:flex-col lg:justify-evenly hover:bg-marine transition duration-200">

                            <a href="https://footprintcalculator.henkel.com/mx" target="_blank">
                                <img src="https://footprintcalculator.henkel.com/assets/images/HENKEL.png" alt="Henkel-Logo"
                                    class="w-3/4 mx-auto my-2 cursor-pointer lg:w-2/4">
                                <h3 class="text-xl font-semibold lg:text-2xl lg:my-4 lg:text-center">Calculadora de
                                    huella
                                    de carbono Henkel</h3>
                                <p class="lg:text-lg lg:leading-none lg:mb-6 lg:text-center lg:px-2">Calculadora creada
                                    por
                                    la empresa alemana de productos de limpieza Henkel</p>
                            </a>
                        </div>

                        {{-- div card 2 --}}
                        <div
                            class="border border-black bg-black bg-opacity-30 rounded-md shadow-2xl p-2 lg:w-5/12 lg:flex lg:flex-col lg:justify-evenly hover:bg-marine transition duration-200">

                            <a href="https://www.footprintcalculator.org/home/es" target="_blank">
                                <img src="https://www.footprintcalculator.org/assets/images/logo/logo-GFN-white.png"
                                    alt="GFN-Logo" class="w-3/4 mx-auto my-2 cursor-pointer lg:w-2/4">
                                <h3 class="text-xl font-semibold lg:text-2xl lg:my-4 lg:text-center">Calculadora de
                                    huella
                                    de carbono de Global Footprint Network</h3>

                                <p class="lg:text-lg lg:leading-none lg:mb-6 lg:text-center lg:px-2">Calculadora creada
                                    por
                                    la ONG de protección al medio ambiente Global Footprint Network </p>
                            </a>

                        </div>

                    </div>
                </div>

                <a href="{{ route('calcular') }}"
                class="mx-auto rounded-md shadow-md bg-forest text-white text-2xl hover:bg-marine transition duration-200 p-4 mt-16 ">Si ya
                cuentas con tu huella de carbono da click aquí</a>
            </div>
        </div>






    </div>
@endsection

<script>
    const btn = document.querySelector('.mobile-menu-button');
    const sidebar = document.querySelector('.sidebar');
    btn.addEventListener("click", () => {
        sidebar.classList.toggle("-translate-x-full");
    });
</script>
