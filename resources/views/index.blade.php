<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Artf Co2</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
</head>

<body class=" py-6 bg-gradient-to-b from-blue-200 to-green-600 bg-fixed">

    {{-- div principal --}}
    <div class="mx-auto p-4 xl:w-3/4">

        <h1 class="text-center text-2xl lg:text-5xl lg:mb-20">Alternativas para compensar la huella de carbono</h1>

        {{-- div para mostrar informacion --}}
        <div class="my-2 mx-auto">
            <h3 class="text-xl lg:text-4xl text-center my-4 font-semibold">¿Qué es la huella de carbono?</h3>

            <p class="text-lg p-2 leading-snug lg:text-2xl">La huella de carbono es una forma de medir la cantidad de emisiones de gases de efecto invernadero que son producidas y liberadas a la atmósfera directa o indirectamente por una organización o individuo.</p>

            <h3 class="text-xl lg:text-4xl text-center my-4 font-semibold">¿Como calcular tu huella de carbono?</h3>

            <p class="text-lg p-2 leading-snug lg:text-2xl">Para poder realizar una estimacion sobre tu huella de carbono personal te recomendamos los siguientes sitios:</p>

            <p class="pb-2">(Dar click en imagen)</p>

            {{-- div para cards de calculdaoras --}}
            <div class="lg:flex lg:justify-evenly lg:my-4">
                {{-- div card 1 --}}
                <div class="border border-black rounded-md shadow-md p-2 lg:w-5/12 lg:flex lg:flex-col lg:justify-evenly">
    
                    <a href="https://footprintcalculator.henkel.com/mx" target="_blank">
                        <img
                            src="https://footprintcalculator.henkel.com/assets/images/HENKEL.png"
                            alt="Henkel-Logo" class="w-3/4 mx-auto my-2 cursor-pointer lg:w-2/4">
                    </a>

                    <h3 class="text-xl font-semibold lg:text-2xl lg:my-4 lg:text-center">Calculadora de huella de carbono Henkel</h3>

                    <p class="lg:text-lg lg:leading-none lg:mb-6 lg:text-center lg:px-2">Calculadora creada por la empresa alemana de productos de limpieza Henkel</p>

                </div>
                
                {{-- div card 2 --}}
                <div class="border border-black rounded-md shadow-md p-2 my-6 lg:my-0 lg:w-5/12 lg:flex lg:flex-col lg:justify-evenly">
    
                    <a href="https://www.footprintcalculator.org/home/es" target="_blank">
                        <img
                            src="https://www.footprintcalculator.org/assets/images/logo/logo-GFN-white.png"
                            alt="GFN-Logo" class="w-3/4 mx-auto my-2 cursor-pointer lg:w-2/4">
                    </a>

                    <h3 class="text-xl font-semibold lg:text-2xl lg:my-4 lg:text-center">Calculadora de huella de carbono de Global Footprint Network</h3>

                    <p class="lg:text-lg lg:leading-none lg:mb-6 lg:text-center lg:px-2">Calculadora creada por la ONG de proteccion al medio ambiente Global Footprint Network </p>

                </div>

            </div>


            <a href="{{ route('calcular') }}" class="font-light underline text-purple-900 text-xl text-center shadow-md mt-2">Si ya cuentas con tu huella de carbono da click aqui -></a>


    </div>

</body>

</html>
