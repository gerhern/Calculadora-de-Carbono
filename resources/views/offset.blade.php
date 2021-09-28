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
            <h3 class="text-xl lg:text-4xl text-center my-4 font-semibold">¿Por qué compensar nuestra huella de carbono?
            </h3>

            <p class="text-lg p-2 leading-snug lg:text-2xl">Conocer el tamaño de nuestra huella de carbono es importante
                ya que nos permite concientizar y modificar nuestros habitos para conseguir reducir las emisiones de
                CO<sub>2</sub> asociadas a nuestro estilo de vida.</p>

            <p class="text-lg p-2 leading-snug lg:text-2xl">Compensar nuestra huella de carbono consiste en la aportacion
                voluntaria de una cantidad económica variable a diversos proyectos de reforestación, generación y ahorro
                de energía sustentables o tratamiento de residuos.</p>

            <h3 class="text-xl lg:text-4xl text-center my-4 font-semibold">¿Cómo compensar tu huella de carbono?</h3>

            <p class="text-lg p-2 leading-snug lg:text-2xl">Para poder realizar una compensación de tu huella de carbono
                personal te recomendamos las siguientes opciones:</p>

            <p class="pb-2">(Dar click en imagen)</p>

            {{-- div para cards de plataformas de compensacion --}}
            <div class="lg:flex lg:justify-evenly lg:my-4">
                {{-- div card 1 --}}
                <div
                    class="border border-black rounded-md shadow-md p-2 lg:w-5/12 lg:flex lg:flex-col lg:justify-evenly">

                    <a href="https://offset.climateneutralnow.org/AllProjects" target="_blank">
                        <img src="https://unfccc.int/themes/custom/unfccc/images/logo.png" alt="UNCC-Logo"
                            class="w-3/4 mx-auto my-2 cursor-pointer lg:w-2/4">
                    </a>

                    <h3 class="text-xl font-semibold lg:text-2xl lg:my-4 lg:text-center">Plataforma de compensación de
                        las Naciones Unidas</h3>

                    <p class="lg:text-lg lg:leading-none lg:mb-6 lg:text-center lg:px-2">Plataforma de compensacion en
                        proyectos de mitigacion de Gases de Efecto Invernadero (GEI) alrededor de todo el mundo </p>

                </div>

                {{-- div card 2 --}}
                <div
                    class="border border-black rounded-md shadow-md p-2 my-6 lg:my-0 lg:w-5/12 lg:flex lg:flex-col lg:justify-evenly">

                    <a href="https://www.reforestamosmexico.org/adoptaunarbol" target="_blank">
                        <img src="https://static.wixstatic.com/media/b1748a_e68a34ab791443259e1dce6cd0cc520e~mv2.png/v1/fill/w_222,h_117,al_c,lg_1,q_85/221x116.webp"
                            alt="Reforestamos-Logo" class="w-3/4 mx-auto my-2 cursor-pointer lg:w-2/4">
                    </a>

                    <h3 class="text-xl font-semibold lg:text-2xl lg:my-4 lg:text-center">Adopta un arbol con
                        Reforestamos México</h3>

                    <p class="lg:text-lg lg:leading-none lg:mb-6 lg:text-center lg:px-2">Mediante una contribución
                        económica mínima adopta un árbol durante un periodo de 3 años y recibe un certificado de
                        adopción</p>

                </div>

            </div>

            {{-- div de tips de conservacion --}}
            <div class="my-2 mx-auto lg:my-20">
                <h3 class="text-xl lg:text-4xl text-center my-4 font-semibold">¿Cómo reducir tu huella de carbono?
                </h3>

                {{-- div de cards de tips --}}
                <div class="lg:flex lg:justify-evenly lg:my-4 lg:flex-wrap">

                    {{-- div card 1(inpar) --}}
                    <div class="p-2 lg:w-2/6">
                        <img src="https://images.pexels.com/photos/542619/pexels-photo-542619.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500"
                            alt="led-light" class="w-3/4 mx-auto my-2 rounded-md lg:w-2/4">

                        <h3 class="text-xl font-semibold lg:text-2xl lg:my-4 lg:text-center">Usa focos ahorradores</h3>

                        <p class="lg:text-lg lg:leading-none lg:mb-6 lg:text-center lg:px-2">Realiza el cambio a focos
                            ahorradores de energía de luz LED en lugar de los tradicionales focos incandecentes.</p>

                    </div>

                    {{-- div card 2 --}}
                    <div
                        class="p-2 lg:w-2/6">

                        <img src="https://images.pexels.com/photos/218445/pexels-photo-218445.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940"
                            alt="wire" class="w-3/4 mx-auto my-2 rounded-md lg:w-2/4">

                        <h3 class="text-xl font-semibold lg:text-2xl lg:my-4 lg:text-center">Si no lo usas desconéctalo
                        </h3>

                        <p class="lg:text-lg lg:leading-none lg:mb-6 lg:text-center lg:px-2">Diversos aparatos
                            eléctricos como los cargadores de teléfonos celulares siguen consumiendo energía incluso
                            cuando no se utilizan</p>

                    </div>

                    {{-- div card 3 --}}
                    <div
                        class="p-2 lg:w-2/6">

                        <img src="https://images.pexels.com/photos/2850347/pexels-photo-2850347.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940"
                            alt="panel" class="w-3/4 mx-auto my-2 rounded-md lg:w-2/4">

                        <h3 class="text-xl font-semibold lg:text-2xl lg:my-4 lg:text-center">Usa energía renovable</h3>

                        <p class="lg:text-lg lg:leading-none lg:mb-6 lg:text-center lg:px-2">Cambia a calentador de agua
                            solar ó paneles solares para generar eléctricidad para tu hogar y asi ahorrar en gas y/ó eléctricidad.</p>

                    </div>

                    {{-- div card 4 --}}
                    <div
                        class="p-2 lg:w-2/6">

                        <img src="https://images.pexels.com/photos/6630622/pexels-photo-6630622.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500"
                            alt="bicycle" class="w-3/4 mx-auto my-2 rounded-md lg:w-2/4">

                        <h3 class="text-xl font-semibold lg:text-2xl lg:my-4 lg:text-center">Usa menos el automóvil</h3>

                        <p class="lg:text-lg lg:leading-none lg:mb-6 lg:text-center lg:px-2">Reduce emisiones compartiendo viajes en automóvil y reduciendo su uso en lo posible, asi como caminando más o usar bicicleta como alternativa.</p>

                    </div>

                    {{-- div card 5 --}}
                    <div
                        class="p-2 lg:w-2/6">

                        <img src="https://images.pexels.com/photos/4668356/pexels-photo-4668356.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940"
                            alt="recycle" class="w-3/4 mx-auto my-2 rounded-md lg:w-2/4">

                        <h3 class="text-xl font-semibold lg:text-2xl lg:my-4 lg:text-center">Recicla</h3>

                        <p class="lg:text-lg lg:leading-none lg:mb-6 lg:text-center lg:px-2">Recuerda aplicar siempre que sea posible las 3 R<br>
                        Reduce-Reutiliza-Recicla</p>

                    </div>

                </div>
            </div>

        </div>

</body>

</html>
