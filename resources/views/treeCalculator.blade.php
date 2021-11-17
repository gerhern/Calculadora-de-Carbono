@extends('app')
@section('content')
    <div class="text-white bg-feather">

        <x-hammenu></x-hammenu>

        {{-- div de formulario de calculo --}}
        <div class="">
            {{-- Titulo --}}
            <div>
                <h2 class="  py-16 px-10 text-center text-2xl mb-6 lg:text-5xl italic">Cálculo de árboles para
                    compensación de carbono</h2>
            </div>

            {{-- Formulario --}}
            <form class="w-11/12 mx-auto max-w-lg lg:max-w-none bg-forest bg-opacity-30 p-3">
                <div class="flex flex-wrap -mx-3 lg:flex-col">
                    <div class="w-full lg:w-1/2 px-3 mb-6 lg:mb-0">
                        <label class=" text-white block uppercase tracking-wide text-xs font-bold mb-2">
                            Huella de carbono*
                        </label>
                        <input
                            class="appearance-none block w-full bg-gray-200 text-gray-700 border border-forest rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white"
                            type="number" step="0.001" name="footprint" min="0.001" max="2000000"
                            placeholder="Ingrese huella de carbono en toneladas" required>

                    </div>
                    <input type="submit" value="Calcular"
                        class="rounded-md shadow-lg bg-forest text-white mx-6 p-2 lg:text-lg hover:bg-marine transition duration-200 lg:w-1/12">
                </div>
            </form>
        </div>

        {{-- div de muestra de errores --}}
        @if ($errors->any())
            <div
                class="text-center w-2/3 mx-auto my-6 p-4 bg-red-600 text-white rounded-md shadow-md lg:text-2xl text-xl lg:w-1/3">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        {{-- div de muestreo de resultados --}}
        <div class="bg-gradient-to-b from-marine to-forest mt-6 py-6 flex flex-col ">

            @isset($data)

                <p class=" text-center text-xl my-2 py-3 lg:text-2xl">Para compensar <span
                        class="text-forest font-bold italic">{{ $footprint }} </span> toneladas de CO<sub>2</sub>
                    debes plantar alguno de los siguientes tipos de árboles*.</p>

                {{-- Resultados --}}
                <div class="lg:my-8">

                    {{-- Arboles --}}
                    <div class="my-2 flex flex-wrap justify-evenly w-full ">
                        @foreach ($data['data'] as $tree)
                            <div class="m-2 rounded-md shadow-2xl flex lg:flex-col has-tooltip relative">
                                <img src="{{ $tree[3] }}" alt="{{ $tree[1] }}"
                                    class="lg:w-60 lg:h-60 w-36 lg:rounded-t-2xl lg:rounded-none rounded-l-2xl">
                                <div
                                    class="flex flex-col justify-around lg:w-60 p-2 items-center bg-black bg-opacity-60 lg:rounded-b-2xl lg:rounded-none rounded-r-2xl">
                                    {{-- nombre --}}
                                    <h3 class="lg:text-xl text-md px-2 w-full text-center font-bold">{{ $tree[1] }}</h3>
                                    {{-- cantidad --}}
                                    <h3 class="lg:text-4xl text-3xl my-2 px-2 w-full text-center">{{ $tree[5] }}
                                        <p class="lg:text-3xl text-lg">individuos</p>
                                    </h3>
                                    <h3 class="lg:text-lg text-sm px-2 w-full font-semibold">Nombre cientifico:</h3>
                                    <h3 class="lg:text-lg text-sm px-2 w-full italic">{{ $tree[2] }}</h3>
                                    <p class="lg:text-lg text-sm px-2 w-full font-semibold">Capacidad de absorcion:</p>
                                    <p class="lg:text-lg text-sm px-2 w-full italic">{{ $tree[0] }} kg/año</p>
                                </div>
                                <x-tooltip-tree text="Fotografia de: {{ $tree[4] }}"></x-tooltip-tree>
                            </div>
                        @endforeach
                    </div>

                </div>

                {{-- Indicaciones --}}
                <div class="py-6 w-11/12 mx-auto border border-black bg-black shadow-md bg-opacity-10 my-8 rounded-md">
                    <p class="leading-tight lg:text-xl text-lg p-3">Para llegar a la cantidad estimada de árboles de
                        compensación de huella de carbono se uso la siguiente metodología.</p>

                    <p class="leading-tight lg:text-xl text-lg p-3">1.-Se realiza la conversión de toneladas a
                        kilogramos de CO<sub>2</sub> ingresadas por el usuario (ej. 128 ton = (128 * 1,000) por lo tanto
                        128 ton = 128,000 kg).</p>
                    <p class="leading-tight lg:text-xl text-lg p-3">2.-Se toma como referencia la capacidad de absorción
                        por especie en un periodo de un año (ej. Roble -> capacidad de absorción = 229.28 kg/año).</p>
                    <p class="leading-tight lg:text-xl text-lg p-3">3.-Se divide la huella de carbono total en
                        kilogramos entre la capacidad de absorción de la especie seleccionada (ej. Cantidad de robles =
                        (128,000 / 229.28) por lo tanto 128,000 kg = 558.2693 robles ).</p>
                    <p class="leading-tight lg:text-xl text-lg p-3">4.-Dado que no se pueden plantar fracciones de
                        árboles se redondea el resultado (ej. 558.2693 -> 558 robles).</p>

                    <p class="leading-tight lg:text-xl text-lg p-3">-Para plantar árboles debes de asegurarte que los
                        especímenes no tengan plagas o enfermedades y estos tengan una altura óptima de entre 1 metro a 1.5 y no
                        menor a 60 centímetros de altura, esto para garantizar la supervivencia de los mismos.</p>

                    <p class="leading-tight lg:text-2xl text-lg p-3 italic font-semibold">*La capacidad de absorción de carbono
                        puede variar dependiendo del crecimiento del individuo, su diámetro a la altura del pecho (DAP) y a la
                        zona donde se localiza.</p>
                    <p class="leading-tight text-xs px-3">Fuente: Guía para la plantación de árboles del municipio de
                        Mérida(2018)</p>
                    <a class="leading-tight text-sm px-3 underline"
                        href="http://www.merida.gob.mx/sustentable/contenidos/doc/guia-de-plantacion-de-arboles.pdf">Guia-de-plantacion-de-arboles.pdf</a>
                </div>
                {{-- boton de compensar --}}

                <x-button route="{{ route('offset') }}" text="Compensar"></x-button>

            @endisset
        </div>

    </div>
@endsection
